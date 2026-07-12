<?php
$has_history = isset($_COOKIE['product_history']);
$history_array = $has_history ? json_decode(stripslashes($_COOKIE['product_history']), true) : [];

if (is_array($history_array) && !empty($history_array)) {
    $ids = array_values(array_filter(array_map('absint', array_column($history_array, 'id'))));
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

            $history_items = array();
            foreach ($unique_ids as $history_id) {
                $product_data = function_exists('rf_theme_fetch_product_detail_row') ? rf_theme_fetch_product_detail_row($history_id) : null;
                if (!is_array($product_data) || empty($product_data['detail_id'])) {
                    continue;
                }

                $detail_id = (int) $product_data['detail_id'];
                $history_image_src = '';
                foreach (array('picture_id', 'picture_id1', 'picture_id2') as $picture_key) {
                    if (!empty($product_data[$picture_key])) {
                        $history_image_src = rf_theme_get_picture_image_url($product_data[$picture_key]);
                        if ($history_image_src !== '') {
                            break;
                        }
                    }
                }
                if ($history_image_src === '') {
                    $history_image_src = get_template_directory_uri() . '/img/common/no-image.png';
                }

                $history_items[] = array(
                    'title' => !empty($product_data['detail_title']) ? (string) $product_data['detail_title'] : '商品コード：' . $detail_id,
                    'link' => rf_theme_get_product_detail_url($detail_id),
                    'image_src' => $history_image_src,
                    'price_display' => rf_theme_get_listing_price_display(0, $product_data),
                );
            }

            if (!empty($history_items)) :
                foreach ($history_items as $history_item) :
            ?>
                <a href="<?php echo esc_url($history_item['link']); ?>" class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url($history_item['image_src']); ?>" alt="<?php echo esc_attr($history_item['title']); ?>" onerror="this.onerror=null;this.src='<?php echo esc_js(get_template_directory_uri() . '/img/common/no-image.png'); ?>';">
                        </div>
                    </div>
                    <h3 class="top-product-card__title"><?php echo esc_html($history_item['title']); ?></h3>
                    <?php if ($history_item['price_display']) : ?>
                        <p class="top-product-card__label"><?php echo esc_html($history_item['price_display']['label']); ?></p>
                        <p class="top-product-card__price">
                            <span class="top-product-card__price-number"><?php echo esc_html(number_format($history_item['price_display']['amount'])); ?></span>
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
