<?php
/*
Template Name:会社概要
*/

if (have_posts()) {
    the_post();
}

if (!function_exists('rf_company_get_products_category_term')) {
    function rf_company_get_products_category_term() {
        static $term = null;
        if ($term === null) {
            $term = get_category_by_slug('products');
        }
        return $term instanceof WP_Term ? $term : null;
    }
}

if (!function_exists('rf_company_get_products_category_terms')) {
    function rf_company_get_products_category_terms() {
        $parent = rf_company_get_products_category_term();
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
}

if (!function_exists('rf_company_normalize_price_value')) {
    function rf_company_normalize_price_value($value) {
        $normalized = preg_replace('/[^\d]/', '', (string) $value);
        return $normalized === '' ? null : (int) $normalized;
    }
}

if (!function_exists('rf_company_format_price_display')) {
    function rf_company_format_price_display($value) {
        $normalized = rf_company_normalize_price_value($value);
        if ($normalized !== null) {
            return number_format($normalized);
        }

        return trim((string) $value);
    }
}

if (!function_exists('rf_company_get_product_db_connection')) {
    function rf_company_get_product_db_connection() {
        static $connection = false;

        if ($connection instanceof mysqli) {
            return $connection;
        }

        $connection = @new mysqli('mysql2.xbiz.ne.jp', 'remake_wp6', '55Quadrajp', 'remake_respect');
        if ($connection->connect_errno) {
            error_log('rf_company_get_product_db_connection failed: ' . $connection->connect_error);
            $connection = null;
            return null;
        }

        $connection->set_charset('utf8mb4');
        return $connection;
    }
}

if (!function_exists('rf_company_fetch_db_row')) {
    function rf_company_fetch_db_row($sql, $param_type, $param_value) {
        $connection = rf_company_get_product_db_connection();
        if (!$connection) {
            return null;
        }

        $statement = $connection->prepare($sql);
        if (!$statement) {
            error_log('rf_company_fetch_db_row prepare failed: ' . $connection->error);
            return null;
        }

        $statement->bind_param($param_type, $param_value);
        if (!$statement->execute()) {
            error_log('rf_company_fetch_db_row execute failed: ' . $statement->error);
            $statement->close();
            return null;
        }

        $result = $statement->get_result();
        if (!$result) {
            error_log('rf_company_fetch_db_row get_result failed: ' . $statement->error);
            $statement->close();
            return null;
        }

        $row = $result->fetch_assoc();
        $result->free();
        $statement->close();

        return $row;
    }
}

if (!function_exists('rf_company_fetch_product_card_data')) {
    function rf_company_fetch_product_card_data($post_id, $price_mode = 'rental') {
        $connect_id = get_field('connect_id', $post_id);
        if (!$connect_id) {
            return null;
        }

        $product_data = rf_company_fetch_db_row(
            'SELECT * FROM detail WHERE detail_id = ?',
            'i',
            (int) $connect_id
        );
        if (!$product_data) {
            return null;
        }

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

        $prices = $price_mode === 'sale'
            ? array_filter(array(
                'サロン価格' => get_field('new_price', $post_id),
                'アウトレット価格' => get_field('used_price', $post_id),
            ), static function ($value) {
                return $value !== null && $value !== '';
            })
            : array_filter(array(
                'レンタル価格' => get_field('rental_price', $post_id),
                '月額リース価格' => get_field('lease_price', $post_id),
            ), static function ($value) {
                return $value !== null && $value !== '';
            });

        $price_label = '価格';
        $price_value = '';
        $lowest_price = null;

        foreach ($prices as $label => $value) {
            $normalized = rf_company_normalize_price_value($value);
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
            $price_value = '0';
        }

        $detail_url = get_permalink($post_id);
        if (!empty($product_data['detail_id'])) {
            $detail_url = add_query_arg(
                array('detail_id' => rawurlencode($product_data['detail_id'])),
                home_url('/detail.html')
            );
        }

        return array(
            'title' => get_the_title($post_id),
            'image_src' => $image_src,
            'detail_url' => $detail_url,
            'price_label' => $price_label,
            'price' => rf_company_format_price_display($price_value),
        );
    }
}

if (!function_exists('rf_company_get_top_product_cards')) {
    function rf_company_get_top_product_cards($price_mode = 'rental', $limit = 5) {
        $terms = rf_company_get_products_category_terms();
        $term_ids = wp_list_pluck($terms, 'term_id');
        if (empty($term_ids)) {
            return array();
        }

        $cards = array();
        $seen_titles = array();
        $page = 1;
        $batch_size = max($limit * 2, 10);

        while (count($cards) < $limit) {
            $query = new WP_Query(array(
                'post_type' => 'post',
                'category__in' => $term_ids,
                'ignore_sticky_posts' => true,
                'orderby' => 'date',
                'order' => 'DESC',
                'posts_per_page' => $batch_size,
                'paged' => $page,
            ));

            if (!$query->have_posts()) {
                wp_reset_postdata();
                break;
            }

            while ($query->have_posts() && count($cards) < $limit) {
                $query->the_post();
                $card = rf_company_fetch_product_card_data(get_the_ID(), $price_mode);
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
}

$products_category = rf_company_get_products_category_term();
$products_url = $products_category ? get_category_link($products_category->term_id) : home_url('/category/products/');
$company_product_panels = array(
    'rental' => array(
        'label' => 'レンタル機器',
        'cards' => rf_company_get_top_product_cards('rental', 5),
    ),
    'sale' => array(
        'label' => '販売機器',
        'cards' => rf_company_get_top_product_cards('sale', 5),
    ),
);

$company_rows = array(
    array('label' => '企業理念', 'value' => '世界中にきれいな人を、世界中に笑顔を'),
    array('label' => '経営理念', 'value' => 'みんなからありがとうと言われる。'),
    array('label' => '会社名', 'value' => '株式会社リスペクトフォース（英文社名：RESPECT FORCE,Inc.）'),
    array('label' => '設立', 'value' => '2005年5月'),
    array('label' => '代表取締役', 'value' => '境　恭介'),
    array('label' => '所在地', 'value' => "〒165-0026\n東京都中野区新井5-27-5　MONビル2・3F"),
    array('label' => '取引金融機関', 'value' => 'みずほ銀行、りそな銀行、三菱東京UFJ銀行、三井住友銀行'),
    array(
        'label' => '事業内容',
        'list' => array(
            '美容・健康機器の販売・リース',
            '管理美容・健康機器のアウトレット',
            '管理美容・健康機器のレンタル',
            '管理美容・健康店の店舗売買',
            '管理美容・健康店の人材募集',
            '管理美容・健康店への広告',
            '管理美容業界に関するプレスリリース',
        ),
    ),
);

$major_clients = 'NECリース(株)、GE三洋クレジット(株)、NISリース(株)、NTTファイナンス(株)、オリックス(株)、興銀リース(株)、センチュリー・リーリング・システム(株)、東芝ファイナンス(株)、(株)日本ビジネスリース、日立キャピタル(株)、芙蓉総合リース(株)、リコーリース(株)、(株)クレディセゾン、(株)アクアプラス、アクト出版／月刊エステティック新聞、(株)アバン、(株)アプレアインターナショナル、(株)アメニティコーポレーション、(株)アルス・カンパニー、(株)イムインターナショナル、(株)グレイス・ノート、(株)ケンユー、サンビームインターナショナル(株)、(株)サンリバー、(株)シンワコーポレーション、(株)シー・エム・エル、(株)スカンジナビア、セティ(株)、(株)セレスティン・ヴィジョン、(株)ソフィアコーポレーション、タカラベルモント(株)、滝川(株)、(株)トマトInc、(株)トーマスインターナショナル、特定非営利活動法人 日本エステティック機構、日本エステティック協会、日本エステティック業協会、有限責任中間法人日本エステティック工業会、日本MJP(株)、NPO法人 日本スパ振興協会、有限責任中間法人 日本全身美容協会、(株)日本ブライダルセンター、日本美容産業(株)、(株)フィダコーポレーション、(株)フォーレ・ディ、(株)ブライトネス、北斎(株)、(有)ボンドストリート、(株)未来エステ研究所、(株)ミラノインターナショナル、(株)モアシステム、(有)モアテック、(株)モリテックス、(株)ユーモインク、(株)ラ・クラーテジャパン、(株)ラティアクリエイツ、(株)リジュー、(株)リッシュ、(株)リツビ、(株)レイシェル、(株)ワールドジェイビー、(株)ワールドビューティーリサーチ、(株)ヴァリュゲイツ、伊藤超短波(株)、(株)ウィズ・アス、(株)エア・テクノロジーズ、(株)オーツーサプライズ、(株)キャンアイ、ジャスパ(株)、(株)ジャパンエステティック協会、日本メディコ(株)、日本ライトサービス(株)、(株)フジ医療器、(株)マインドフィットネス、(株)YKC、(有)アンテナ、イーマインターナショナル(株)、ヴァンクール(株)、(株)エステツイン、(株)エス・パース、(株)エムビーシー、(株)グラツィア、(有)G.Mコーポレーション、(株)ジャパンギャルズ、(株)ビーティフィック、(株)メイク、(株)ユーモインク、(株)Real Mind、(株)アイ・エム・シー、(株)鹿児島超音波総合研究所、(株)誠鋼社、アイビオ化粧品(株)';
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('company'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet">
    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo esc_attr($rf_seo["title"]); ?>">
    <meta property="og:url" content="">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">
    <meta property="og:description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($rf_seo["title"]); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-company-page'); ?>>
    <?php get_header(); ?>

    <main class="rf-company-page__main">
        <div class="rf-policy-page__hero">
            <div class="rf-policy-page__inner">
                <h1 class="rf-policy-page__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="rf-policy-page__breadcrumb-wrap">
            <div class="rf-policy-page__inner">
                <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <span><?php the_title(); ?></span>
                </nav>
            </div>
        </div>

        <section class="rf-company-page__summary">
            <div class="rf-company-page__inner">
                <div class="rf-company-page__table">
                    <?php foreach ($company_rows as $row) : ?>
                        <section class="rf-company-page__row">
                            <div class="rf-company-page__label"><?php echo esc_html($row['label']); ?></div>
                            <div class="rf-company-page__value">
                                <?php if (!empty($row['list'])) : ?>
                                    <ul class="rf-company-page__list">
                                        <?php foreach ($row['list'] as $item) : ?>
                                            <li><?php echo esc_html($item); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php else : ?>
                                    <?php foreach (preg_split('/\R/u', (string) $row['value']) as $line) : ?>
                                        <p><?php echo esc_html($line); ?></p>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="rf-company-page__clients">
            <div class="rf-company-page__inner">
                <p class="rf-company-page__clients-eyebrow">NEW PRODUCT</p>
                <h2 class="rf-company-page__clients-title">主要取引先</h2>
                <p class="rf-company-page__clients-text"><?php echo esc_html($major_clients); ?></p>
            </div>
        </section>

        <?php
        $company_panel_order = array();
        foreach ($company_product_panels as $panel_key => $panel) {
            if (!empty($panel['cards'])) {
                $company_panel_order[] = $panel_key;
            }
        }
        $company_active_panel = !empty($company_panel_order) ? $company_panel_order[0] : '';
        ?>
        <?php if (!empty($company_panel_order)) : ?>
            <section class="top-section js-top-product-section rf-company-page__products">
                <div class="top-wrap">
                    <div class="top-section__head">
                        <div class="top-section__head-main">
                            <h2 class="top-section__title">新商品一覧</h2>
                            <span class="top-section__eyebrow">NEW</span>
                            <a href="<?php echo esc_url($products_url); ?>" class="top-section__more">
                                <span>一覧を見る</span>
                                <i aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="top-section__tabs" aria-label="商品種別">
                            <?php foreach ($company_panel_order as $panel_key) : ?>
                                <button
                                    type="button"
                                    class="top-section__tab<?php echo $panel_key === $company_active_panel ? ' is-active' : ''; ?>"
                                    data-panel-target="<?php echo esc_attr($panel_key); ?>"
                                    aria-pressed="<?php echo $panel_key === $company_active_panel ? 'true' : 'false'; ?>"
                                >
                                    <?php echo esc_html($company_product_panels[$panel_key]['label']); ?>
                                </button>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <?php foreach ($company_panel_order as $panel_key) : ?>
                        <div class="top-product-grid"<?php echo $panel_key === $company_active_panel ? '' : ' hidden'; ?> data-panel="<?php echo esc_attr($panel_key); ?>">
                            <?php foreach ($company_product_panels[$panel_key]['cards'] as $card) : ?>
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
                    <?php endforeach; ?>
                </div>
            </section>
        <?php endif; ?>
    </main>

    <?php include 'other_service.php'; ?>
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
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
