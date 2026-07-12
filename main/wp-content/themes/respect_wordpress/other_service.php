<?php
$theme_uri = esc_url(get_template_directory_uri());
$service_banners = rf_theme_get_top_service_banners();
?>
<section id="other-service" class="top-service" data-node-id="2899:6680">
    <div class="top-wrap">
        <div class="top-service__header">
            <span class="top-service__eyebrow">OTHER SERVICE</span>
            <h2 class="top-service__title">サービス一覧</h2>
        </div>

        <div class="top-service__grid">
            <?php foreach ($service_banners as $service) : ?>
                <?php
                $service_url = isset($service['url']) ? $service['url'] : '#';
                $service_host = wp_parse_url($service_url, PHP_URL_HOST);
                $home_host = wp_parse_url(home_url('/'), PHP_URL_HOST);
                $is_external = $service_host && $home_host && $service_host !== $home_host;
                ?>
                <a href="<?php echo esc_url($service_url); ?>" class="top-service__item"<?php echo $is_external ? ' target="_blank" rel="noopener"' : ''; ?>>
                    <img src="<?php echo $theme_uri; ?>/img/<?php echo esc_attr(!empty($service['image_dir']) ? $service['image_dir'] : 'common'); ?>/<?php echo esc_attr($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
                </a>
            <?php endforeach; ?>
        </div>
    </div>
</section>
