<?php
global $wp;

$search_query = get_search_query();
$paged = get_query_var('paged') ? (int) get_query_var('paged') : 1;
$filters = rf_theme_get_listing_filters_from_request();
$selected_node_ids = rf_theme_get_selected_node_ids_from_request();
$sort = rf_theme_get_listing_sort_from_request();

$products_category = rf_theme_get_products_category_term();
$products_category_id = $products_category instanceof WP_Term ? (int) $products_category->term_id : 0;
$category_id = isset($_GET['cat']) ? (int) $_GET['cat'] : 0;
$focus_category = $category_id > 0 ? get_category($category_id) : $products_category;
$focus_category_id = ($focus_category instanceof WP_Term) ? (int) $focus_category->term_id : $products_category_id;

$base_term_ids = $focus_category_id > 0 ? array($focus_category_id) : array(-1);
$query = new WP_Query(rf_theme_build_listing_query_args(
    $base_term_ids,
    $paged,
    $search_query,
    $selected_node_ids,
    $filters,
    $sort,
    20
));

$post_count = (int) $query->found_posts;
$listing_detail_rows = rf_theme_get_listing_preload_map(isset($query->posts) ? $query->posts : array());
$sidebar_groups = rf_theme_get_listing_sidebar_groups($focus_category_id);
$active_chips = rf_theme_get_listing_active_chips($selected_node_ids, $filters);
$sort_options = rf_theme_get_listing_sort_options();

$clear_query_args = $_GET;
unset($clear_query_args['node_list'], $clear_query_args['new_equipment'], $clear_query_args['used_equipment'], $clear_query_args['rental_equipment'], $clear_query_args['lease_equipment'], $clear_query_args['sort'], $clear_query_args['paged']);
$clear_url = add_query_arg($clear_query_args, strtok($_SERVER['REQUEST_URI'], '?'));

if ($search_query !== '') {
    $page_title = sprintf('「%s」の検索結果', $search_query);
} elseif ($focus_category instanceof WP_Term) {
    $page_title = $focus_category->name;
} else {
    $page_title = '検索結果';
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('search'); ?>
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
    <link rel="shortcut icon" href="img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/common/favicon.png">
    <?php wp_head(); ?>
</head>
<body>
    <?php get_header(); ?>

    <section class="rf-listing-page">
        <div class="rf-listing-page__inner">
            <header class="rf-listing-page__header">
                <h1 class="rf-listing-page__title"><?php echo esc_html($page_title); ?></h1>
                <div class="rf-listing-page__rule"></div>
            </header>

            <form class="rf-listing js-rf-listing-form" role="search" method="get" action="">
                <input type="hidden" name="post_type" value="post">
                <?php if ($search_query !== '') : ?>
                    <input type="hidden" name="s" value="<?php echo esc_attr($search_query); ?>">
                <?php endif; ?>
                <?php if ($category_id > 0) : ?>
                    <input type="hidden" name="cat" value="<?php echo esc_attr($category_id); ?>">
                <?php endif; ?>
                <input type="hidden" name="node_list" value="<?php echo esc_attr(implode(',', $selected_node_ids)); ?>">

                <div class="rf-listing__toolbar">
                    <p class="rf-listing__count">全 <span><?php echo esc_html(number_format($post_count)); ?></span> 商品</p>
                    <label class="rf-listing__sort">
                        <span class="screen-reader-text">並び替え</span>
                        <select name="sort" class="js-auto-submit">
                            <?php foreach ($sort_options as $sort_key => $sort_label) : ?>
                                <option value="<?php echo esc_attr($sort_key); ?>" <?php selected($sort, $sort_key); ?>><?php echo esc_html($sort_label); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </label>
                </div>

                <div class="rf-listing__layout">
                    <aside class="rf-listing-sidebar">
                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">絞り込み条件</h2>
                            <div class="rf-listing-sidebar__box">
                                <p class="rf-listing-sidebar__caption">現在絞り込んでいる条件</p>
                                <div class="rf-listing-sidebar__chips">
                                    <?php foreach ($active_chips as $chip) : ?>
                                        <span class="rf-listing-chip"><?php echo esc_html($chip); ?></span>
                                    <?php endforeach; ?>
                                </div>
                                <a href="<?php echo esc_url($clear_url); ?>" class="rf-listing-sidebar__clear">条件をクリア</a>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">カテゴリー</h2>
                            <div class="rf-listing-sidebar__categories">
                                <?php foreach ($sidebar_groups as $group) : ?>
                                    <?php
                                    $child_ids = wp_list_pluck($group['children'], 'term_id');
                                    $has_selected_child = (bool) array_intersect($selected_node_ids, $child_ids);
                                    $is_open = !empty($group['expanded']) || $has_selected_child;
                                    ?>
                                    <details class="rf-category-group" <?php echo $is_open ? 'open' : ''; ?>>
                                        <summary>
                                            <span><?php echo esc_html($group['term']->name); ?></span>
                                            <i aria-hidden="true"></i>
                                        </summary>
                                        <?php if (!empty($group['children'])) : ?>
                                            <div class="rf-category-group__options">
                                                <?php foreach ($group['children'] as $child_term) : ?>
                                                    <label class="rf-check">
                                                        <input
                                                            type="checkbox"
                                                            class="js-node-term js-auto-submit"
                                                            value="<?php echo esc_attr($child_term->term_id); ?>"
                                                            <?php checked(in_array((int) $child_term->term_id, $selected_node_ids, true)); ?>
                                                        >
                                                        <span><?php echo esc_html($child_term->name); ?></span>
                                                    </label>
                                                <?php endforeach; ?>
                                            </div>
                                        <?php endif; ?>
                                    </details>
                                <?php endforeach; ?>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">価格</h2>
                            <div class="rf-listing-sidebar__box rf-price-box">
                                <div class="rf-price-box__range">
                                    <span>¥1</span>
                                    <div class="rf-price-box__track"><i></i><i></i></div>
                                    <span>¥500,000</span>
                                </div>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">導入方法</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check">
                                    <input type="checkbox" name="new_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['new'])); ?>>
                                    <span>販売価格（新品）</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="lease_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['lease'])); ?>>
                                    <span>月額リース（新品）</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="rental_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['rental'])); ?>>
                                    <span>レンタル</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="used_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['used'])); ?>>
                                    <span>販売価格</span>
                                </label>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">商品状態</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check"><input type="checkbox"><span>新品（未使用・メーカー保証付き）</span></label>
                                <label class="rf-check"><input type="checkbox"><span>展示品（短期間利用・ほぼ新品）</span></label>
                                <label class="rf-check"><input type="checkbox"><span>中古品（整備・クリーニング済み）</span></label>
                                <label class="rf-check"><input type="checkbox"><span>ジャンク品（現状渡し）</span></label>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">利用シーン別</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check"><input type="checkbox"><span>サロン向け</span></label>
                                <label class="rf-check"><input type="checkbox"><span>個人宅向け</span></label>
                            </div>
                        </section>
                    </aside>

                    <div class="rf-listing-main">
                        <div class="rf-listing-grid">
                            <?php if ($query->have_posts()) : ?>
                                <?php while ($query->have_posts()) : $query->the_post(); ?>
                                    <?php
                                    $connect_id = (int) get_field('connect_id', get_the_ID());
                                    $listing_data = rf_theme_get_product_listing_data(
                                        get_the_ID(),
                                        $connect_id && isset($listing_detail_rows[$connect_id]) ? $listing_detail_rows[$connect_id] : null
                                    );
                                    $price_display = rf_theme_get_listing_price_display(get_the_ID(), $listing_data['product_data'], $filters);

                                    if ($price_display === null) {
                                        continue;
                                    }
                                    ?>
                                    <article class="rf-listing-card">
                                        <a href="<?php echo esc_url($listing_data['detail_url']); ?>" class="rf-listing-card__image">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('medium', array('alt' => get_the_title())); ?>
                                            <?php elseif (!empty($listing_data['image_src'])) : ?>
                                                <img src="<?php echo esc_url($listing_data['image_src']); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            <?php else : ?>
                                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/no-image.png'); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                            <?php endif; ?>
                                        </a>
                                        <div class="rf-listing-card__body">
                                            <h3 class="rf-listing-card__title"><a href="<?php echo esc_url($listing_data['detail_url']); ?>"><?php the_title(); ?></a></h3>
                                            <p class="rf-listing-card__label"><?php echo esc_html($price_display['label']); ?></p>
                                            <p class="rf-listing-card__price">
                                                <span><?php echo esc_html(number_format($price_display['amount'])); ?></span>
                                                <small>円</small>
                                            </p>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                                <?php wp_reset_postdata(); ?>
                            <?php else : ?>
                                <p class="rf-listing-empty">該当する商品がありません。</p>
                            <?php endif; ?>
                        </div>

                        <?php
                        $paginate_links = paginate_links(array(
                            'base' => str_replace(999999999, '%#%', esc_url(get_pagenum_link(999999999))),
                            'format' => '?paged=%#%',
                            'current' => max(1, $paged),
                            'total' => $query->max_num_pages,
                            'type' => 'array',
                            'prev_next' => true,
                            'prev_text' => '‹',
                            'next_text' => '›',
                        ));
                        if ($paginate_links) :
                        ?>
                            <nav class="rf-listing-pagination" aria-label="Pagination">
                                <ul>
                                    <?php foreach ($paginate_links as $link) : ?>
                                        <li><?php echo wp_kses_post($link); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </nav>
                        <?php endif; ?>
                    </div>
                </div>
            </form>
        </div>
    </section>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var form = document.querySelector('.js-rf-listing-form');
        if (!form) {
            return;
        }

        var nodeInput = form.querySelector('input[name="node_list"]');
        var termCheckboxes = form.querySelectorAll('.js-node-term');
        var autoSubmitInputs = form.querySelectorAll('.js-auto-submit');

        function syncNodeList() {
            if (!nodeInput) {
                return;
            }
            var values = Array.prototype.slice.call(termCheckboxes)
                .filter(function (checkbox) { return checkbox.checked; })
                .map(function (checkbox) { return checkbox.value; });
            nodeInput.value = values.join(',');
        }

        autoSubmitInputs.forEach(function (input) {
            input.addEventListener('change', function () {
                syncNodeList();
                form.submit();
            });
        });
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
