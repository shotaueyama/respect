<?php
$theme_uri = esc_url(get_template_directory_uri());
$site_url = esc_url(home_url('/'));
$main_nav = rf_theme_get_top_main_nav();
$page_urls = function_exists('rf_theme_get_named_page_urls') ? rf_theme_get_named_page_urls() : array();
$news_url = !empty($page_urls['news']) ? $page_urls['news'] : home_url('/news/');
$contact_url = !empty($page_urls['contact']) ? $page_urls['contact'] : home_url('/contact.html');
$announce_post = function_exists('rf_theme_get_header_announce_post') ? rf_theme_get_header_announce_post() : null;
$line_menu_items = array(
    array('label' => '美容機器を借りたい', 'url' => 'https://lin.ee/kqfuuNA', 'external' => true),
    array('label' => '美容機器を買いたい', 'url' => 'https://lin.ee/W4mfbC6', 'external' => true),
    array('label' => '美容機器を貸したい', 'url' => 'https://lin.ee/qFc6rKs', 'external' => true),
    array('label' => '美容機器を売りたい', 'url' => 'https://lin.ee/16VKtwG', 'external' => true),
    array('label' => '美容機器の修理', 'url' => 'https://lin.ee/ioXC3La', 'external' => true),
    array('label' => '集金代行の申込/依頼', 'url' => 'https://lin.ee/EgEvWDd', 'external' => true),
    array('label' => '店舗売買の相談', 'url' => 'https://lin.ee/m6kx8Cc', 'external' => true),
);
?>
<header class="top-header">
    <?php if (!empty($announce_post['url']) && !empty($announce_post['title'])) : ?>
        <div class="top-header__announce">
            <a href="<?php echo esc_url($announce_post['url']); ?>">
                <span class="top-header__announce-arrow"></span>
                <?php echo esc_html($announce_post['title']); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="top-header__bar">
        <a class="top-header__logo" href="<?php echo $site_url; ?>">
            <img src="<?php echo $theme_uri; ?>/img/common/logo_1.png" alt="RESPECT FORCE">
        </a>

        <nav class="top-header__nav" id="top-navigation">
            <ul class="top-header__nav-list">
                <?php foreach ($main_nav as $item) : ?>
                    <?php
                    $nav_classes = array('top-header__nav-item');
                    $item_host = wp_parse_url($item['url'], PHP_URL_HOST);
                    $site_host = wp_parse_url(home_url('/'), PHP_URL_HOST);
                    $is_external_nav = $item_host && $site_host && strtolower($item_host) !== strtolower($site_host);
                    if (!empty($item['current'])) {
                        $nav_classes[] = 'is-current';
                    }
                    if (!empty($item['children'])) {
                        $nav_classes[] = 'has-children';
                    }
                    ?>
                    <li class="<?php echo esc_attr(implode(' ', $nav_classes)); ?>">
                        <a href="<?php echo esc_url($item['url']); ?>" class="top-header__nav-link" <?php echo $is_external_nav ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>>
                            <span><?php echo esc_html($item['label']); ?></span>
                            <?php if (!empty($item['children'])) : ?>
                                <span class="top-header__nav-caret" aria-hidden="true"></span>
                            <?php endif; ?>
                        </a>
                        <?php if (!empty($item['children'])) : ?>
                            <ul class="top-header__subnav" aria-label="<?php echo esc_attr($item['label']); ?>のカテゴリー一覧">
                                <?php foreach ($item['children'] as $child_page) : ?>
                                    <li>
                                        <a href="<?php echo esc_url(is_array($child_page) ? $child_page['url'] : get_category_link($child_page->term_id)); ?>">
                                            <?php echo esc_html(is_array($child_page) ? $child_page['label'] : $child_page->name); ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php endif; ?>
                    </li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <div class="top-header__contact">
            <a class="top-header__cta" href="<?php echo esc_url($contact_url); ?>">
                <span class="top-header__cta-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" aria-hidden="true">
                        <path d="M16 0H2C.9 0 0 .9 0 2v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zm0 4-7 4.5L2 4V2l7 4.5L16 2v2z" fill="white"/>
                    </svg>
                </span>
                <span>お問い合わせ</span>
            </a>

            <button type="button" class="top-menu-toggle" aria-expanded="false" aria-controls="top-navigation">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<div class="top-floating-rail" aria-label="固定メニュー">
    <div class="top-floating-rail__item is-line">
        <button type="button" class="top-floating-rail__trigger" aria-haspopup="true">
            <span class="top-floating-rail__label">公式LINE</span>
            <span class="top-floating-rail__icon">
                <img src="<?php echo $theme_uri; ?>/img/common/top-floating-line.png" alt="">
            </span>
        </button>
        <div class="top-floating-rail__popover" aria-label="公式LINEメニュー">
            <div class="top-floating-rail__popover-inner">
                <?php foreach ($line_menu_items as $line_item) : ?>
                    <a
                        href="<?php echo esc_url($line_item['url']); ?>"
                        class="top-floating-rail__popover-link"
                        <?php echo !empty($line_item['external']) ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>
                    >
                        <?php echo esc_html($line_item['label']); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
    <a href="tel:0364574757" class="top-floating-rail__item is-phone">
        <span class="top-floating-rail__label">お電話</span>
        <span class="top-floating-rail__icon">
            <img src="<?php echo $theme_uri; ?>/img/common/top-floating-phone.svg" alt="">
        </span>
    </a>
</div>
