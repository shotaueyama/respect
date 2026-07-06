<?php
function rf_get_products_category_term() {
    static $term = null;
    if ($term === null) {
        $term = get_category_by_slug('products');
    }
    return $term instanceof WP_Term ? $term : null;
}

function rf_get_products_category_terms() {
    $parent = rf_get_products_category_term();
    if (!$parent) {
        return array();
    }

    return get_categories(array(
        'taxonomy' => 'category',
        'child_of' => $parent->term_id,
        'hide_empty' => false,
        'orderby' => 'term_order',
        'order' => 'ASC',
    ));
}

function rf_normalize_price_value($value) {
    $normalized = preg_replace('/[^\d]/', '', (string) $value);
    return $normalized === '' ? null : (int) $normalized;
}

function rf_format_price_display($value) {
    $normalized = rf_normalize_price_value($value);
    if ($normalized !== null) {
        return number_format($normalized);
    }

    return trim((string) $value);
}

function rf_get_product_db_connection() {
    static $connection = false;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    $connection = @new mysqli('mysql2.xbiz.ne.jp', 'remake_wp6', '55Quadrajp', 'remake_respect');
    if ($connection->connect_errno) {
        error_log('rf_get_product_db_connection failed: ' . $connection->connect_error);
        $connection = null;
        return null;
    }

    $connection->set_charset('utf8mb4');
    return $connection;
}

function rf_fetch_db_row($sql, $param_type, $param_value) {
    $connection = rf_get_product_db_connection();
    if (!$connection) {
        return null;
    }

    $statement = $connection->prepare($sql);
    if (!$statement) {
        error_log('rf_fetch_db_row prepare failed: ' . $connection->error);
        return null;
    }

    $statement->bind_param($param_type, $param_value);
    if (!$statement->execute()) {
        error_log('rf_fetch_db_row execute failed: ' . $statement->error);
        $statement->close();
        return null;
    }

    $result = $statement->get_result();
    if (!$result) {
        error_log('rf_fetch_db_row get_result failed: ' . $statement->error);
        $statement->close();
        return null;
    }

    $result_row = $result->fetch_assoc();
    $result->free();

    $statement->close();

    return $result_row;
}

function rf_fetch_product_card_data($post_id, $price_mode = 'rental') {
    $connect_id = get_field('connect_id', $post_id);
    if (!$connect_id) {
        return null;
    }

    $product_data = rf_fetch_db_row(
        'SELECT * FROM detail WHERE detail_id = ?',
        'i',
        (int) $connect_id
    );
    if (!$product_data) {
        return null;
    }

    $detail_id = !empty($product_data['detail_id']) ? $product_data['detail_id'] : '';
    $picture_id = !empty($product_data['picture_id']) ? $product_data['picture_id'] : '';
    $image_src = get_template_directory_uri() . '/img/common/item_1.png';

    if ($picture_id) {
        $image_src = add_query_arg(
            array(
                'type' => 'picture',
                'id' => (int) $picture_id,
            ),
            get_template_directory_uri() . '/api_product.php'
        );
    }

    $price_groups = array(
        'rental' => array(
            'レンタル価格' => get_field('rental_price', $post_id),
        ),
        'sale' => array(
            'サロン価格' => get_field('new_price', $post_id),
            'アウトレット価格' => get_field('used_price', $post_id),
        ),
    );

    $prices = array_filter(
        isset($price_groups[$price_mode]) ? $price_groups[$price_mode] : $price_groups['rental'],
        static function ($value) {
            return $value !== null && $value !== '';
        }
    );

    $price_label = '価格';
    $price_value = '';
    $lowest_price = null;

    foreach ($prices as $label => $value) {
        $normalized = rf_normalize_price_value($value);
        if ($normalized === null) {
            continue;
        }
        if ($lowest_price === null || $normalized < $lowest_price) {
            $lowest_price = $normalized;
            $price_label = $label;
            $price_value = $value;
        }
    }

    if ($lowest_price === null && $price_mode === 'sale' && !empty($product_data['detail_prise'])) {
        $price_label = !empty($product_data['detail_prise_type']) ? $product_data['detail_prise_type'] : '価格';
        $price_value = $product_data['detail_prise'];
    }

    if ($price_value === '') {
        return null;
    }

    return array(
        'title' => get_the_title($post_id),
        'image_src' => $image_src,
        'detail_url' => rf_theme_get_product_detail_url($detail_id, get_permalink($post_id)),
        'price_label' => $price_label,
        'price' => rf_format_price_display($price_value),
    );
}

function rf_get_top_product_cards($mode, $price_mode = 'rental', $limit = 5) {
    $terms = rf_get_products_category_terms();
    $term_ids = wp_list_pluck($terms, 'term_id');
    if (empty($term_ids)) {
        return array();
    }

    $base_args = array(
        'post_type' => 'post',
        'category__in' => $term_ids,
        'ignore_sticky_posts' => true,
    );

    if ($mode === 'pickup') {
        $base_args['meta_query'] = array(
            array(
                'key' => 'attention',
                'value' => '',
                'compare' => '!=',
            ),
        );
        $base_args['meta_key'] = 'attention';
        $base_args['orderby'] = 'meta_value_num';
        $base_args['order'] = 'ASC';
    } else {
        $base_args['orderby'] = 'date';
        $base_args['order'] = 'DESC';
    }

    $cards = array();
    $seen_titles = array();
    $page = 1;
    $batch_size = max($limit * 2, 10);

    while (count($cards) < $limit) {
        $query = new WP_Query(array_merge($base_args, array(
            'posts_per_page' => $batch_size,
            'paged' => $page,
        )));

        if (!$query->have_posts()) {
            wp_reset_postdata();
            break;
        }

        while ($query->have_posts() && count($cards) < $limit) {
            $query->the_post();
            $card = rf_fetch_product_card_data(get_the_ID(), $price_mode);
            if ($card !== null) {
                $title_key = trim(wp_strip_all_tags((string) $card['title']));
                if ($title_key !== '' && isset($seen_titles[$title_key])) {
                    continue;
                }
                if ($title_key !== '') {
                    $seen_titles[$title_key] = true;
                }
                $cards[] = $card;
            }
        }

        wp_reset_postdata();

        if ($page >= (int) $query->max_num_pages) {
            break;
        }

        $page++;
    }

    return $cards;
}

function rf_render_top_product_section($title, $eyebrow, $panels, $products_url) {
    if (empty($panels)) {
        return;
    }

    $panel_order = array();
    foreach ($panels as $panel_key => $panel) {
        if (!empty($panel['cards'])) {
            $panel_order[] = $panel_key;
        }
    }

    if (empty($panel_order)) {
        return;
    }

    $active_panel = $panel_order[0];
    ?>
    <section class="top-section js-top-product-section">
        <div class="top-wrap">
            <div class="top-section__head">
                <div class="top-section__head-main">
                    <h2 class="top-section__title"><?php echo esc_html($title); ?></h2>
                    <span class="top-section__eyebrow"><?php echo esc_html($eyebrow); ?></span>
                    <a href="<?php echo esc_url($products_url); ?>" class="top-section__more">
                        <span>一覧を見る</span>
                        <i aria-hidden="true"></i>
                    </a>
                </div>
                <div class="top-section__tabs" aria-label="商品種別">
                    <?php foreach ($panel_order as $panel_key) : ?>
                        <button
                            type="button"
                            class="top-section__tab<?php echo $panel_key === $active_panel ? ' is-active' : ''; ?>"
                            data-panel-target="<?php echo esc_attr($panel_key); ?>"
                            aria-pressed="<?php echo $panel_key === $active_panel ? 'true' : 'false'; ?>"
                        >
                            <?php echo esc_html($panels[$panel_key]['label']); ?>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>

            <?php foreach ($panel_order as $panel_key) : ?>
                <div class="top-product-carousel"<?php echo $panel_key === $active_panel ? '' : ' hidden'; ?> data-panel="<?php echo esc_attr($panel_key); ?>">
                    <button type="button" class="top-product-carousel__arrow top-product-carousel__arrow--prev" aria-label="前の商品"></button>
                    <div class="top-product-grid">
                        <?php foreach (array_slice($panels[$panel_key]['cards'], 0, 5) as $card) : ?>
                            <a href="<?php echo esc_url($card['detail_url']); ?>" class="top-product-card">
                                <div class="top-product-card__frame">
                                    <div class="top-product-card__image">
                                        <img src="<?php echo esc_attr($card['image_src']); ?>" alt="<?php echo esc_attr($card['title']); ?>">
                                    </div>
                                </div>
                                <h3 class="top-product-card__title"><?php echo esc_html($card['title']); ?></h3>
                                <p class="top-product-card__label"><?php echo esc_html($card['price_label']); ?></p>
                                <p class="top-product-card__price">
                                    <span class="top-product-card__price-number"><?php echo esc_html($card['price']); ?></span>
                                    <span class="top-product-card__price-unit">円</span>
                                </p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                    <button type="button" class="top-product-carousel__arrow top-product-carousel__arrow--next" aria-label="次の商品"></button>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
    <?php
}

function rf_split_label_lines($label) {
    if (mb_strpos($label, '・') !== false) {
        $parts = explode('・', $label, 2);
        return array($parts[0] . '・', $parts[1]);
    }
    return array($label);
}

function rf_get_top_ranking_sections($terms) {
    return array(
        array('title' => '人気機種ランキング', 'eyebrow' => 'RANKING', 'items' => rf_theme_get_top_popular_ranking_items()),
        array('title' => '注目機器ランキング', 'eyebrow' => 'RANKING', 'items' => rf_theme_get_top_attention_ranking_items()),
    );
}

function rf_get_top_news_rows($limit = 3) {
    $query = new WP_Query(array(
        'cat' => 46,
        'posts_per_page' => $limit,
        'orderby' => 'date',
        'order' => 'DESC',
        'ignore_sticky_posts' => true,
    ));

    $rows = array();
    $category_classes = array('is-esthe', 'is-relax', 'is-fitness');

    if ($query->have_posts()) {
        $index = 0;
        while ($query->have_posts()) {
            $query->the_post();
            $categories = get_the_category();
            $category_name = !empty($categories[0]->name) ? $categories[0]->name : 'お知らせ';
            $rows[] = array(
                'date' => get_the_date('Y.m.d'),
                'category' => $category_name,
                'category_class' => $category_classes[$index % count($category_classes)],
                'title' => get_the_title(),
                'url' => get_permalink(),
            );
            $index++;
        }
        wp_reset_postdata();
    }

    return $rows;
}

$theme_uri = esc_url(get_template_directory_uri());
$site_url = esc_url(home_url('/'));
$products_category = rf_get_products_category_term();
$products_url = function_exists('rf_theme_get_products_url') ? rf_theme_get_products_url() : 'https://respect-force.co.jp/seihin_index.html';
$product_category_terms = rf_get_products_category_terms();
$guide_urls = rf_theme_get_named_page_urls();

$hero_slides = array(
    array('image' => 'slide3.png', 'alt' => '美容機器サービス訴求スライド 3'),
    array('image' => 'slide1.png', 'alt' => '美容機器サービス訴求スライド 1'),
    array('image' => 'slide2.png', 'alt' => '美容機器サービス訴求スライド 2'),
);

$shortcut_cards = rf_theme_get_top_shortcut_cards();

$search_chips = array(
    '業務用中古を借りたい',
    '美容機器を探したい',
    'サロン開業の相談をしたい',
    'メンテナンスを依頼したい',
);

$new_product_panels = array(
    'rental' => array(
        'label' => 'レンタル機器',
        'cards' => rf_get_top_product_cards('new', 'rental', 5),
    ),
    'sale' => array(
        'label' => '販売機器',
        'cards' => rf_get_top_product_cards('new', 'sale', 5),
    ),
);
$pickup_product_panels = array(
    'rental' => array(
        'label' => 'レンタル機器',
        'cards' => rf_get_top_product_cards('pickup', 'rental', 5),
    ),
    'sale' => array(
        'label' => '販売機器',
        'cards' => rf_get_top_product_cards('pickup', 'sale', 5),
    ),
);
$ranking_sections = rf_get_top_ranking_sections($product_category_terms);

$guide_items = array(
    array('icon' => 'icon-rent-want.png', 'title_lines' => array('美容機器を', '借りたい方'), 'url' => 'https://test.respect-force.co.jp/%e3%81%94%e5%88%a9%e7%94%a8%e3%82%ac%e3%82%a4%e3%83%89/'),
    array('icon' => 'icon-lend-want.png', 'title_lines' => array('美容機器を', '貸したい方'), 'url' => $guide_urls['guide_lend']),
    array('icon' => 'icon-buy-want.png', 'title_lines' => array('美容機器を', '買いたい方'), 'url' => $guide_urls['guide_buy']),
    array('icon' => 'icon-sell-want.png', 'title_lines' => array('美容機器を', '売りたい方'), 'url' => $guide_urls['guide_sell']),
);

$contact_rows = rf_get_top_news_rows(3);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('home'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $theme_uri; ?>/css/common.css?v=2026063018" rel="stylesheet">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo esc_attr($rf_seo["title"]); ?>">
    <meta property="og:url" content="<?php echo $site_url; ?>">
    <meta property="og:image" content="<?php echo $theme_uri; ?>/img/common/ogp.png">
    <meta property="og:description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($rf_seo["title"]); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="twitter:image" content="<?php echo $theme_uri; ?>/img/common/ogp.png">
    <link rel="shortcut icon" href="<?php echo $theme_uri; ?>/img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $theme_uri; ?>/img/common/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class('top-home'); ?>>
    <?php get_header(); ?>

    <main>
        <section class="top-hero" data-node-id="3084:4047">
            <div class="top-hero-carousel js-top-hero">
                <div class="top-hero-carousel__viewport">
                    <div class="top-hero-carousel__track">
                        <?php foreach ($hero_slides as $slide) : ?>
                            <div class="top-hero-carousel__slide">
                                <div class="top-hero-carousel__frame">
                                    <img src="<?php echo $theme_uri; ?>/img/figma-hero/<?php echo esc_attr($slide['image']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>" class="top-hero-carousel__image">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <button type="button" class="top-hero-carousel__arrow top-hero-carousel__arrow--prev" aria-label="前のスライド">
                        <img src="<?php echo $theme_uri; ?>/img/figma-hero/arrow-left.svg" alt="">
                    </button>
                    <button type="button" class="top-hero-carousel__arrow top-hero-carousel__arrow--next" aria-label="次のスライド">
                        <img src="<?php echo $theme_uri; ?>/img/figma-hero/arrow-right.svg" alt="">
                    </button>
                </div>
            </div>
        </section>

        <section class="top-shortcuts" data-node-id="3084:4048">
            <div class="top-wrap">
                <div class="top-shortcuts__grid">
                    <?php foreach ($shortcut_cards as $card) : ?>
                        <a href="<?php echo esc_url($card['url']); ?>" class="top-shortcuts__card">
                            <div class="top-shortcuts__icon" aria-hidden="true">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($card['icon']); ?>" alt="">
                            </div>
                            <strong><?php echo esc_html($card['title']); ?></strong>
                            <i class="top-shortcuts__arrow" aria-hidden="true"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="top-search" data-node-id="3092:4053">
            <div class="top-wrap">
                <form class="top-search__panel" action="<?php echo $site_url; ?>" method="get">
                    <h2 class="top-search__title">商品名・キーワードで検索</h2>
                    <input type="hidden" name="post_type" value="post">

                    <div class="top-search__controls">
                        <div class="top-search__field top-search__field--keyword">
                            <label for="top-search-keyword" class="screen-reader-text">キーワード検索</label>
                            <input id="top-search-keyword" type="search" name="s" placeholder="商品名、キーワードなどを入力">
                        </div>

                        <button type="submit" class="top-search__submit">
                            <img src="<?php echo $theme_uri; ?>/img/figma-search/icon-search.svg" alt="" aria-hidden="true">
                            <span>検索</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <?php
        rf_render_top_product_section(
            '新商品一覧',
            'NEW',
            $new_product_panels,
            $products_url
        );
        rf_render_top_product_section(
            'ピックアップ商品',
            'PICK UP',
            $pickup_product_panels,
            $products_url
        );
        ?>

        <?php foreach ($ranking_sections as $ranking_index => $ranking) : ?>
            <section class="top-ranking<?php echo $ranking_index === 1 ? ' is-alt' : ''; ?>">
                <div class="top-wrap">
                    <div class="top-ranking__head">
                        <div class="top-ranking__head-main">
                            <h2 class="top-ranking__title"><?php echo esc_html($ranking['title']); ?></h2>
                            <span class="top-ranking__eyebrow"><?php echo esc_html(!empty($ranking['eyebrow']) ? $ranking['eyebrow'] : 'RANKING'); ?></span>
                        </div>
                    </div>

                    <div class="top-ranking__grid">
                        <?php foreach ($ranking['items'] as $item_index => $item) : ?>
                            <?php
                            $card_classes = array('top-ranking-card');
                            $mini_rank_label = '';
                            $mini_rank_style = '';
                            $card_inline_style = '';
                            if ($ranking_index === 1 && $item_index < 3) {
                                $card_classes[] = 'has-mini-rank';
                                $card_classes[] = 'is-rank-' . ($item_index + 1);
                                $mini_rank_label = (string) ($item_index + 1);
                                $card_inline_style = 'position: relative; overflow: visible;';
                                $rank_backgrounds = array(
                                    'linear-gradient(135deg, #c79a18 0%, #f7df7a 100%)',
                                    'linear-gradient(135deg, #8f97a1 0%, #dee3e8 100%)',
                                    'linear-gradient(135deg, #96603c 0%, #d9a07b 100%)',
                                );
                                $mini_rank_style = sprintf(
                                    'position:absolute;top:-14px;left:-14px;z-index:2;display:inline-flex;align-items:center;justify-content:center;width:38px;height:38px;min-width:38px;min-height:38px;padding:0;box-sizing:border-box;flex:0 0 38px;aspect-ratio:1/1;border-radius:50%%;background:%s;color:#fff;font-family:%s;font-size:20px;line-height:1;font-weight:700;',
                                    $rank_backgrounds[$item_index],
                                    esc_attr('"Noto Sans JP", "Zen Kaku Gothic New", sans-serif')
                                );
                            }
                            ?>
                            <a href="<?php echo esc_url(!empty($item['url']) ? $item['url'] : $products_url); ?>" class="<?php echo esc_attr(implode(' ', $card_classes)); ?>"<?php echo $card_inline_style !== '' ? ' style="' . esc_attr($card_inline_style) . '"' : ''; ?>>
                                <?php if ($mini_rank_label !== '') : ?>
                                    <span class="top-ranking-card__mini-rank" style="<?php echo esc_attr($mini_rank_style); ?>"><?php echo esc_html($mini_rank_label); ?></span>
                                <?php endif; ?>
                                <div class="top-ranking-card__text">
                                    <?php if (!empty($item['lines'])) : ?>
                                        <?php foreach ($item['lines'] as $line) : ?>
                                            <span><?php echo esc_html($line); ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="top-ranking-card__image">
                                    <img src="<?php echo $theme_uri; ?>/img/<?php echo esc_attr(!empty($item['image_dir']) ? $item['image_dir'] : 'common'); ?>/<?php echo esc_attr($item['image']); ?>" alt="">
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <section class="top-guide" id="guide" data-node-id="3121:6839">
            <div class="top-wrap">
                <div class="top-guide__header">
                    <span class="top-guide__eyebrow">GUIDE</span>
                    <h2 class="top-guide__title">はじめての方へ利用ガイド</h2>
                </div>

                <div class="top-guide__grid">
                    <?php foreach ($guide_items as $guide) : ?>
                        <a href="<?php echo esc_url($guide['url']); ?>" class="top-guide__card">
                            <div class="top-guide__icon" aria-hidden="true">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($guide['icon']); ?>" alt="">
                            </div>
                            <h3>
                                <?php foreach ($guide['title_lines'] as $line) : ?>
                                    <span><?php echo esc_html($line); ?></span>
                                <?php endforeach; ?>
                            </h3>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="top-contact" data-node-id="3122:6840">
            <div class="top-wrap">
                <div class="top-contact__header">
                    <span class="top-contact__eyebrow">NEWS</span>
                    <h2 class="top-contact__title">お知らせ</h2>
                </div>

                <div class="top-contact__details">
                    <?php foreach ($contact_rows as $row) : ?>
                        <article class="top-contact__row">
                            <time class="top-contact__date" datetime="<?php echo esc_attr(str_replace('.', '-', $row['date'])); ?>"><?php echo esc_html($row['date']); ?></time>
                            <span class="top-contact__category <?php echo esc_attr($row['category_class']); ?>"><?php echo esc_html($row['category']); ?></span>
                            <p class="top-contact__text"><a href="<?php echo esc_url($row['url']); ?>"><?php echo esc_html($row['title']); ?></a></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="top-contact__cta-row">
                    <a href="<?php echo esc_url('https://test.respect-force.co.jp/topic11.html'); ?>" class="top-contact__button">
                        <i aria-hidden="true"></i>
                        <span>すべて見る</span>
                    </a>
                </div>
            </div>
        </section>

        <?php include 'other_service.php'; ?>
    </main>

    <?php get_footer(); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        document.querySelectorAll('.js-top-product-section').forEach(function (section) {
            var tabs = section.querySelectorAll('.top-section__tab');
            var panels = section.querySelectorAll('[data-panel]');

            if (!tabs.length || !panels.length) {
                return;
            }

            tabs.forEach(function (tab) {
                tab.addEventListener('click', function () {
                    var target = tab.getAttribute('data-panel-target');

                    tabs.forEach(function (otherTab) {
                        var isActive = otherTab === tab;
                        otherTab.classList.toggle('is-active', isActive);
                        otherTab.setAttribute('aria-pressed', isActive ? 'true' : 'false');
                    });

                    panels.forEach(function (panel) {
                        panel.hidden = panel.getAttribute('data-panel') !== target;
                    });
                });
            });
        });

        document.querySelectorAll('.top-product-carousel').forEach(function (carousel) {
            var grid = carousel.querySelector('.top-product-grid');
            var prev = carousel.querySelector('.top-product-carousel__arrow--prev');
            var next = carousel.querySelector('.top-product-carousel__arrow--next');

            if (!grid || !prev || !next) {
                return;
            }

            function getStep() {
                var card = grid.querySelector('.top-product-card');
                if (!card) {
                    return grid.clientWidth;
                }

                var styles = window.getComputedStyle(grid);
                var gap = parseFloat(styles.columnGap || styles.gap || '0') || 0;
                return card.getBoundingClientRect().width + gap;
            }

            prev.addEventListener('click', function () {
                grid.scrollBy({ left: -getStep(), behavior: 'smooth' });
            });

            next.addEventListener('click', function () {
                grid.scrollBy({ left: getStep(), behavior: 'smooth' });
            });
        });

        document.querySelectorAll('.js-top-hero').forEach(function (carousel) {
            var viewport = carousel.querySelector('.top-hero-carousel__viewport');
            var track = carousel.querySelector('.top-hero-carousel__track');
            var originalSlides = Array.prototype.slice.call(track.children);
            var total = originalSlides.length;

            if (!viewport || !track || total === 0) {
                return;
            }

            var firstClone = originalSlides[0].cloneNode(true);
            var lastClone = originalSlides[total - 1].cloneNode(true);
            track.insertBefore(lastClone, originalSlides[0]);
            track.appendChild(firstClone);

            var currentIndex = 2;
            var isAnimating = false;
            var autoplayId = null;
            var startX = 0;

            function getMetrics() {
                var viewportWidth = viewport.clientWidth;

                if (window.innerWidth <= 750) {
                    return {
                        slideWidth: viewportWidth,
                        gap: 0,
                        offset: 0,
                        height: viewportWidth * (410 / 1140),
                        left: 10,
                        right: 10,
                        arrowSize: 42
                    };
                }

                var scale = viewportWidth / 1440;

                return {
                    slideWidth: 1186 * scale,
                    gap: 33 * scale,
                    offset: 153 * scale,
                    height: 426 * scale,
                    left: 103 * scale,
                    right: 59 * scale,
                    arrowSize: 60 * scale
                };
            }

            function applyMetrics() {
                var metrics = getMetrics();
                carousel.style.setProperty('--hero-slide-width', metrics.slideWidth + 'px');
                carousel.style.setProperty('--hero-slide-gap', metrics.gap + 'px');
                carousel.style.setProperty('--hero-height', metrics.height + 'px');
                carousel.style.setProperty('--hero-arrow-left', metrics.left + 'px');
                carousel.style.setProperty('--hero-arrow-right', metrics.right + 'px');
                carousel.style.setProperty('--hero-arrow-size', metrics.arrowSize + 'px');
            }

            function updatePosition(withTransition) {
                var metrics = getMetrics();
                var translate = metrics.offset - currentIndex * (metrics.slideWidth + metrics.gap);
                track.style.transition = withTransition ? 'transform 420ms ease' : 'none';
                track.style.transform = 'translate3d(' + translate + 'px, 0, 0)';
            }

            function goTo(index) {
                if (isAnimating) {
                    return;
                }
                isAnimating = true;
                currentIndex = index;
                updatePosition(true);
            }

            function restartAutoplay() {
                window.clearInterval(autoplayId);
                autoplayId = window.setInterval(function () {
                    goTo(currentIndex + 1);
                }, 5000);
            }

            track.addEventListener('transitionend', function () {
                if (currentIndex === 0) {
                    currentIndex = total;
                    updatePosition(false);
                } else if (currentIndex === total + 1) {
                    currentIndex = 1;
                    updatePosition(false);
                }

                isAnimating = false;
            });

            carousel.querySelector('.top-hero-carousel__arrow--prev').addEventListener('click', function () {
                goTo(currentIndex - 1);
                restartAutoplay();
            });

            carousel.querySelector('.top-hero-carousel__arrow--next').addEventListener('click', function () {
                goTo(currentIndex + 1);
                restartAutoplay();
            });

            viewport.addEventListener('touchstart', function (event) {
                startX = event.changedTouches[0].clientX;
            }, { passive: true });

            viewport.addEventListener('touchend', function (event) {
                var deltaX = event.changedTouches[0].clientX - startX;

                if (Math.abs(deltaX) < 40) {
                    return;
                }

                if (deltaX > 0) {
                    goTo(currentIndex - 1);
                } else {
                    goTo(currentIndex + 1);
                }

                restartAutoplay();
            }, { passive: true });

            window.addEventListener('resize', function () {
                applyMetrics();
                updatePosition(false);
            });

            carousel.addEventListener('mouseenter', function () {
                window.clearInterval(autoplayId);
            });

            carousel.addEventListener('mouseleave', function () {
                restartAutoplay();
            });

            applyMetrics();
            updatePosition(false);
            restartAutoplay();
        });
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
