<?php
global $wp;

$search_query = get_search_query();
$paged = get_query_var('paged') ? (int) get_query_var('paged') : 1;
$filters = rf_theme_get_listing_filters_from_request();
$selected_node_ids = rf_theme_get_selected_node_ids_from_request();
$sort = rf_theme_get_listing_sort_from_request();

$category = get_queried_object();
$category_id = ($category instanceof WP_Term) ? (int) $category->term_id : 0;
$category_name = ($category instanceof WP_Term) ? $category->name : '商品一覧';
$products_category = rf_theme_get_products_category_term();
$products_category_id = $products_category instanceof WP_Term ? (int) $products_category->term_id : 0;
$is_product_category_archive = $products_category_id > 0 && ($category_id === $products_category_id || cat_is_ancestor_of($products_category_id, $category_id));
$base_term_ids = $is_product_category_archive ? array($products_category_id) : array($category_id);

if ($is_product_category_archive && empty($selected_node_ids) && $category_id > 0 && $category_id !== $products_category_id) {
    $selected_node_ids = rf_theme_get_listing_default_selected_node_ids($category_id);
}

$listing_collection = rf_theme_get_listing_collection(
    $base_term_ids,
    $paged,
    $search_query,
    $selected_node_ids,
    $filters,
    $sort,
    20
);

$post_count = (int) $listing_collection['total_posts'];
$listing_posts = $listing_collection['posts'];
$listing_detail_rows = $listing_collection['detail_rows'];
$listing_data_map = $listing_collection['listing_data_map'];
$price_display_map = $listing_collection['price_display_map'];
$price_range = $listing_collection['price_range'];
$paged = (int) $listing_collection['current_page'];
$max_num_pages = (int) $listing_collection['max_num_pages'];
$active_chips = rf_theme_get_listing_active_chips($selected_node_ids, array_merge($filters, array('price_range' => $price_range)));
$sort_options = rf_theme_get_listing_sort_options();

$sidebar_data = rf_theme_get_listing_sidebar_data($base_term_ids, $search_query, $filters, $category_id, $selected_node_ids);
$sidebar_groups = $sidebar_data['groups'];
$sidebar_filter_counts = $sidebar_data['filter_counts'];

$clear_query_args = $_GET;
unset($clear_query_args['node_list'], $clear_query_args['new_equipment'], $clear_query_args['used_equipment'], $clear_query_args['outlet_equipment'], $clear_query_args['rental_equipment'], $clear_query_args['lease_equipment'], $clear_query_args['condition_new'], $clear_query_args['condition_like_new'], $clear_query_args['condition_demo'], $clear_query_args['condition_used'], $clear_query_args['scene_salon'], $clear_query_args['scene_home'], $clear_query_args['price_min'], $clear_query_args['price_max'], $clear_query_args['sort'], $clear_query_args['paged']);
$clear_url = add_query_arg($clear_query_args, strtok($_SERVER['REQUEST_URI'], '?'));
$theme_uri = esc_url(get_template_directory_uri());
$site_url = esc_url(home_url('/'));
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text(); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026052427" rel="stylesheet">
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

    <?php if ($is_product_category_archive) : ?>
        <section class="top-search rf-products-top-search" data-node-id="3092:4053">
            <div class="top-wrap">
                <form class="top-search__panel" action="<?php echo $site_url; ?>" method="get">
                    <h2 class="top-search__title">商品名・キーワードで検索</h2>
                    <input type="hidden" name="post_type" value="post">

                    <div class="top-search__controls">
                        <div class="top-search__field top-search__field--keyword">
                            <label for="products-top-search-keyword" class="screen-reader-text">キーワード検索</label>
                            <input id="products-top-search-keyword" type="search" name="s" placeholder="商品名、キーワードなどを入力">
                        </div>

                        <button type="submit" class="top-search__submit">
                            <img src="<?php echo $theme_uri; ?>/img/figma-search/icon-search.svg" alt="" aria-hidden="true">
                            <span>検索</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>
    <?php endif; ?>

    <section class="rf-listing-page">
        <div class="rf-listing-page__inner">
            <header class="rf-listing-page__header">
                <h1 class="rf-listing-page__title"><?php echo esc_html($category_name); ?></h1>
                <div class="rf-listing-page__rule"></div>
            </header>

            <form class="rf-listing js-rf-listing-form" role="search" method="get" action="">
                <?php if ($search_query !== '') : ?>
                    <input type="hidden" name="s" value="<?php echo esc_attr($search_query); ?>">
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
                    <button type="button" class="rf-listing__filter-toggle js-rf-filter-toggle" aria-controls="rf-listing-sidebar" aria-expanded="false">絞り込み検索</button>
                </div>

                <div class="rf-listing__layout">
                    <aside class="rf-listing-sidebar" id="rf-listing-sidebar">
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
                                    <details class="rf-category-group" <?php echo !empty($group['expanded']) ? 'open' : ''; ?>>
                                        <summary>
                                            <span class="rf-category-group__summary">
                                                <label class="rf-check rf-check--category-parent" data-stop-summary-toggle="true">
                                                    <input
                                                        type="checkbox"
                                                        class="js-node-group"
                                                        <?php checked(!empty($group['checked'])); ?>
                                                        <?php echo !empty($group['indeterminate']) ? 'data-indeterminate="true"' : ''; ?>
                                                    >
                                                    <span><?php echo esc_html($group['label']); ?></span>
                                                </label>
                                                <span class="rf-category-group__count">(<?php echo esc_html(number_format($group['count'])); ?>)</span>
                                            </span>
                                            <i aria-hidden="true"></i>
                                        </summary>
                                        <?php if (!empty($group['children'])) : ?>
                                            <div class="rf-category-group__options">
                                                <?php foreach ($group['children'] as $child_term) : ?>
                                                    <label class="rf-check">
                                                        <input
                                                            type="checkbox"
                                                            class="js-node-term js-auto-submit"
                                                            value="<?php echo esc_attr(implode(',', $child_term['term_ids'])); ?>"
                                                            <?php checked(!empty($child_term['checked'])); ?>
                                                        >
                                                        <span><?php echo esc_html($child_term['label']); ?></span>
                                                        <span class="rf-check__count">(<?php echo esc_html(number_format($child_term['count'])); ?>)</span>
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
                            <div
                                class="rf-listing-sidebar__box rf-price-box js-price-filter"
                                data-min="<?php echo esc_attr($price_range['min']); ?>"
                                data-max="<?php echo esc_attr($price_range['max']); ?>"
                            >
                                <div class="rf-price-box__values">
                                    <div class="rf-price-box__value">
                                        <span>下限</span>
                                        <strong class="js-price-min-label"><?php echo esc_html(number_format($price_range['selected_min'])); ?></strong>
                                    </div>
                                    <div class="rf-price-box__value">
                                        <span>上限</span>
                                        <strong class="js-price-max-label"><?php echo esc_html(number_format($price_range['selected_max'])); ?></strong>
                                    </div>
                                </div>
                                <div class="rf-price-slider">
                                    <div class="rf-price-slider__track"></div>
                                    <div class="rf-price-slider__range js-price-range-bar"></div>
                                    <input
                                        type="range"
                                        name="price_min"
                                        min="<?php echo esc_attr($price_range['min']); ?>"
                                        max="<?php echo esc_attr($price_range['max']); ?>"
                                        step="<?php echo esc_attr($price_range['step']); ?>"
                                        value="<?php echo esc_attr($price_range['selected_min']); ?>"
                                        class="rf-price-slider__input js-price-range-min"
                                        aria-label="価格の下限"
                                    >
                                    <input
                                        type="range"
                                        name="price_max"
                                        min="<?php echo esc_attr($price_range['min']); ?>"
                                        max="<?php echo esc_attr($price_range['max']); ?>"
                                        step="<?php echo esc_attr($price_range['step']); ?>"
                                        value="<?php echo esc_attr($price_range['selected_max']); ?>"
                                        class="rf-price-slider__input js-price-range-max"
                                        aria-label="価格の上限"
                                    >
                                </div>
                                <div class="rf-price-box__range">
                                    <span>¥<?php echo esc_html(number_format($price_range['min'])); ?></span>
                                    <span>¥<?php echo esc_html(number_format($price_range['max'])); ?></span>
                                </div>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">販売手法</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check">
                                    <input type="checkbox" name="lease_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['lease'])); ?>>
                                    <span>リース</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['sales']['lease'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="rental_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['rental'])); ?>>
                                    <span>レンタル</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['sales']['rental'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="outlet_equipment" value="1" class="js-auto-submit" <?php checked(!empty($filters['outlet'])); ?>>
                                    <span>アウトレット</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['sales']['outlet'])); ?>)</span>
                                </label>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">商品状態</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check">
                                    <input type="checkbox" name="condition_new" value="1" class="js-auto-submit" <?php checked(!empty($filters['condition_new'])); ?>>
                                    <span>新品</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['conditions']['new'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="condition_like_new" value="1" class="js-auto-submit" <?php checked(!empty($filters['condition_like_new'])); ?>>
                                    <span>新古品</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['conditions']['like_new'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="condition_demo" value="1" class="js-auto-submit" <?php checked(!empty($filters['condition_demo'])); ?>>
                                    <span>デモ機</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['conditions']['demo'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="condition_used" value="1" class="js-auto-submit" <?php checked(!empty($filters['condition_used'])); ?>>
                                    <span>中古</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['conditions']['used'])); ?>)</span>
                                </label>
                            </div>
                        </section>

                        <section class="rf-listing-sidebar__section">
                            <h2 class="rf-listing-sidebar__heading">利用シーン別</h2>
                            <div class="rf-listing-sidebar__box">
                                <label class="rf-check">
                                    <input type="checkbox" name="scene_salon" value="1" class="js-auto-submit" <?php checked(!empty($filters['scene_salon'])); ?>>
                                    <span>サロン向け</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['scenes']['salon'])); ?>)</span>
                                </label>
                                <label class="rf-check">
                                    <input type="checkbox" name="scene_home" value="1" class="js-auto-submit" <?php checked(!empty($filters['scene_home'])); ?>>
                                    <span>個人宅向け</span>
                                    <span class="rf-check__count">(<?php echo esc_html(number_format($sidebar_filter_counts['scenes']['home'])); ?>)</span>
                                </label>
                            </div>
                        </section>
                    </aside>

                    <div class="rf-listing-main">
                        <div class="rf-listing-grid">
                            <?php if (!empty($listing_posts)) : ?>
                                <?php foreach ($listing_posts as $post) : setup_postdata($post); ?>
                                    <?php
                                    $listing_data = isset($listing_data_map[get_the_ID()]) ? $listing_data_map[get_the_ID()] : null;
                                    $price_display = isset($price_display_map[get_the_ID()]) ? $price_display_map[get_the_ID()] : null;
                                    ?>
                                    <?php if ($listing_data === null || $price_display === null) { continue; } ?>
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
                                <?php endforeach; ?>
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
                            'total' => $max_num_pages,
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
        var groupCheckboxes = form.querySelectorAll('.js-node-group');
        var autoSubmitInputs = form.querySelectorAll('.js-auto-submit');
        var priceFilter = form.querySelector('.js-price-filter');
        var filterToggle = form.querySelector('.js-rf-filter-toggle');

        function syncGroupCheckboxState() {
            groupCheckboxes.forEach(function (groupCheckbox) {
                var details = groupCheckbox.closest('.rf-category-group');
                if (!details) {
                    return;
                }

                var childCheckboxes = details.querySelectorAll('.js-node-term');
                var checkedCount = Array.prototype.slice.call(childCheckboxes).filter(function (checkbox) {
                    return checkbox.checked;
                }).length;

                groupCheckbox.checked = childCheckboxes.length > 0 && checkedCount === childCheckboxes.length;
                groupCheckbox.indeterminate = checkedCount > 0 && checkedCount < childCheckboxes.length;
            });
        }

        function syncNodeList() {
            if (!nodeInput) {
                return;
            }
            var values = Array.prototype.slice.call(termCheckboxes)
                .filter(function (checkbox) { return checkbox.checked; })
                .map(function (checkbox) { return checkbox.value; });
            nodeInput.value = values.join(',');
        }

        function formatPrice(value) {
            return Number(value || 0).toLocaleString('ja-JP');
        }

        function submitWithCurrentFilters() {
            syncNodeList();
            syncGroupCheckboxState();
            form.submit();
        }

        syncGroupCheckboxState();

        if (filterToggle) {
            filterToggle.addEventListener('click', function () {
                var isOpen = form.classList.toggle('is-filter-open');
                filterToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
            });
        }

        form.querySelectorAll('[data-stop-summary-toggle="true"]').forEach(function (element) {
            element.addEventListener('click', function (event) {
                event.stopPropagation();
            });
        });

        groupCheckboxes.forEach(function (groupCheckbox) {
            groupCheckbox.addEventListener('change', function () {
                var details = groupCheckbox.closest('.rf-category-group');
                if (!details) {
                    return;
                }

                details.querySelectorAll('.js-node-term').forEach(function (checkbox) {
                    checkbox.checked = groupCheckbox.checked;
                });

                submitWithCurrentFilters();
            });
        });

        autoSubmitInputs.forEach(function (input) {
            input.addEventListener('change', function () {
                submitWithCurrentFilters();
            });
        });

        if (priceFilter) {
            var minInput = priceFilter.querySelector('.js-price-range-min');
            var maxInput = priceFilter.querySelector('.js-price-range-max');
            var minLabel = priceFilter.querySelector('.js-price-min-label');
            var maxLabel = priceFilter.querySelector('.js-price-max-label');
            var rangeBar = priceFilter.querySelector('.js-price-range-bar');
            var sliderMin = Number(priceFilter.getAttribute('data-min') || 0);
            var sliderMax = Number(priceFilter.getAttribute('data-max') || 0);
            var sliderSpan = Math.max(1, sliderMax - sliderMin);

            function syncPriceSlider(changedInput) {
                var minValue = Number(minInput.value || sliderMin);
                var maxValue = Number(maxInput.value || sliderMax);

                if (minValue > maxValue) {
                    if (changedInput === minInput) {
                        maxValue = minValue;
                        maxInput.value = String(maxValue);
                    } else {
                        minValue = maxValue;
                        minInput.value = String(minValue);
                    }
                }

                if (minLabel) {
                    minLabel.textContent = formatPrice(minValue);
                }
                if (maxLabel) {
                    maxLabel.textContent = formatPrice(maxValue);
                }
                if (rangeBar) {
                    rangeBar.style.left = ((minValue - sliderMin) / sliderSpan * 100) + '%';
                    rangeBar.style.width = ((maxValue - minValue) / sliderSpan * 100) + '%';
                }
            }

            [minInput, maxInput].forEach(function (input) {
                input.addEventListener('input', function () {
                    syncPriceSlider(input);
                });
                input.addEventListener('change', function () {
                    syncPriceSlider(input);
                    submitWithCurrentFilters();
                });
            });

            syncPriceSlider();
        }
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
