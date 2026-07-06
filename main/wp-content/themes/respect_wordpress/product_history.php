<?php
$has_history = isset($_COOKIE['product_history']);
$history_array = $has_history ? json_decode(stripslashes($_COOKIE['product_history']), true) : [];

if (!empty($history_array)) {
    $ids = array_column($history_array, 'id');
    $ids = array_reverse($ids);
} else {
    $ids = array();
}
?>

<?php if ($has_history && !empty($ids)): ?>
<section id="product-history" class="top-section product-history">
    <div class="top-wrap">
        <header class="top-section__head product-history__head">
            <div class="top-section__head-main">
                <h2 class="top-section__title">最近閲覧した商品</h2>
                <span class="top-section__eyebrow">VIEW PRODUCTS</span>
            </div>
        </header>
        <div class="top-product-grid product-history__grid">
            <?php
            // 重複を削除し、最新の5つのIDを取得
            $unique_ids = array_slice(array_unique($ids), 0, 5);

            $args = array(
                'post_type' => 'post',
                'posts_per_page' => -1,
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => 'connect_id',
                        'value' => $unique_ids,
                        'compare' => 'IN'
                    ),
                    array(
                        'key' => 'detail_id',
                        'value' => $unique_ids,
                        'compare' => 'IN'
                    )
                )
            );
            
            $query = new WP_Query($args);
            
            if ($query->have_posts()) :
                $history_posts = $query->posts;
                $listing_detail_rows = rf_theme_get_listing_preload_map($history_posts);
                $history_order = array_flip($unique_ids);

                usort($history_posts, function ($left, $right) use ($history_order) {
                    $left_connect_id = (int) get_field('connect_id', $left->ID);
                    $left_detail_id = (int) get_field('detail_id', $left->ID);
                    $right_connect_id = (int) get_field('connect_id', $right->ID);
                    $right_detail_id = (int) get_field('detail_id', $right->ID);

                    $left_position = $history_order[$left_connect_id] ?? $history_order[$left_detail_id] ?? PHP_INT_MAX;
                    $right_position = $history_order[$right_connect_id] ?? $history_order[$right_detail_id] ?? PHP_INT_MAX;

                    if ($left_position === $right_position) {
                        return 0;
                    }

                    return ($left_position < $right_position) ? -1 : 1;
                });

                foreach ($history_posts as $post) :
                    setup_postdata($post);
                    $connect_id = (int) get_field('connect_id', get_the_ID());
                    $listing_data = rf_theme_get_product_listing_data(
                        get_the_ID(),
                        $connect_id && isset($listing_detail_rows[$connect_id]) ? $listing_detail_rows[$connect_id] : null
                    );
                    $price_display = rf_theme_get_listing_price_display(get_the_ID(), $listing_data['product_data']);
                    $link = $listing_data['detail_url'];
                    $history_image_src = !empty($listing_data['image_src'])
                        ? $listing_data['image_src']
                        : get_template_directory_uri() . '/img/common/no-image.png';
            ?>
                <a href="<?php echo esc_url($link); ?>" class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                        <?php if (has_post_thumbnail()): ?>
                            <?php the_post_thumbnail('thumbnail', array('alt' => get_the_title())); ?>
                        <?php else: ?>
                            <img src="<?php echo esc_url($history_image_src); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" onerror="this.onerror=null;this.src='<?php echo esc_js(get_template_directory_uri() . '/img/common/no-image.png'); ?>';">
                        <?php endif; ?>
                        </div>
                    </div>
                    <h3 class="top-product-card__title"><?php the_title(); ?></h3>
                    <?php if ($price_display) : ?>
                        <p class="top-product-card__label"><?php echo esc_html($price_display['label']); ?></p>
                        <p class="top-product-card__price">
                            <span class="top-product-card__price-number"><?php echo esc_html(number_format($price_display['amount'])); ?></span>
                            <span class="top-product-card__price-unit">円</span>
                        </p>
                    <?php endif; ?>
                </a>
            <?php
                endforeach;
            else:
            ?>
                <p class="product-history__empty">まだ閲覧履歴がありません</p>
            <?php
            endif;
            wp_reset_postdata();
            ?>
        </div>
    </div>
</section>
<?php else: ?>
<section id="product-history" class="top-section product-history">
    <div class="top-wrap">
        <header class="top-section__head product-history__head">
            <div class="top-section__head-main">
                <h2 class="top-section__title">最近閲覧した商品</h2>
                <span class="top-section__eyebrow">VIEW PRODUCTS</span>
            </div>
        </header>
        <p class="product-history__empty">まだ閲覧履歴がありません</p>
    </div>
</section>
<?php endif; ?>
