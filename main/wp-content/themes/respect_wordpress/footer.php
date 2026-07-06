<?php
$theme_uri = esc_url(get_template_directory_uri());
$site_url = esc_url(home_url('/'));
$page_urls = function_exists('rf_theme_get_named_page_urls') ? rf_theme_get_named_page_urls() : array();
$contact_url = !empty($page_urls['contact']) ? $page_urls['contact'] : home_url('/contact.html');
$products_url = rf_theme_get_products_url();
$shortcut_cards = rf_theme_get_top_shortcut_cards();
$footer_related_services = rf_theme_get_top_footer_related_services();
$footer_product_info = rf_theme_get_top_footer_product_info();
$footer_policy_links = rf_theme_get_top_footer_policy_links();
$footer_social_links = rf_theme_get_top_footer_social_links();
?>
<footer class="top-footer" data-node-id="2980:4133">
    <div class="top-wrap top-footer__inner">
        <div class="top-footer__top">
            <a href="<?php echo $site_url; ?>" class="top-footer__logo" aria-label="RESPECT FORCE">
                <img src="<?php echo $theme_uri; ?>/img/figma-footer/logo.svg" alt="RESPECT FORCE">
            </a>

            <p class="top-footer__address">〒165-0026<br>東京都中野区新井5-27-5　MONビル2・3F</p>

            <a href="<?php echo esc_url($contact_url); ?>" class="top-footer__contact-btn">
                <img src="<?php echo $theme_uri; ?>/img/figma-footer/contact-icon.svg" alt="" aria-hidden="true">
                <span>お問い合わせ</span>
            </a>

            <div class="top-footer__tel">
                <p><span>TEL :</span> 03-6457-4757</p>
                <small>営業時間　平日 10:00〜17:00（土・日・祝日は定休日）</small>
            </div>
        </div>

        <div class="top-footer__section top-footer__section--services">
            <h2>関連サービス</h2>
            <div class="top-footer__link-list">
                <?php foreach ($footer_related_services as $item) : ?>
                    <?php
                    $item_host = wp_parse_url($item['url'], PHP_URL_HOST);
                    $site_host = wp_parse_url(home_url('/'), PHP_URL_HOST);
                    $is_external_service = $item_host && $site_host && strtolower($item_host) !== strtolower($site_host);
                    ?>
                    <a href="<?php echo esc_url($item['url']); ?>" <?php echo $is_external_service ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>><?php echo esc_html($item['label']); ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="top-footer__section top-footer__section--products">
            <h2>製品情報</h2>
            <div class="top-footer__link-list top-footer__link-list--products">
                <?php foreach ($footer_product_info as $item) : ?>
                    <?php
                    $product_label = is_array($item) && isset($item['label']) ? $item['label'] : $item;
                    $product_url = is_array($item) && !empty($item['url']) ? $item['url'] : $products_url;
                    ?>
                    <a href="<?php echo esc_url($product_url); ?>"><?php echo esc_html($product_label); ?></a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="top-footer__section top-footer__section--guide">
            <h2>ご利用ガイド</h2>
            <div class="top-footer__guide-grid">
                <?php foreach ($shortcut_cards as $card) : ?>
                    <a href="<?php echo esc_url($card['url']); ?>" class="top-footer__guide-card">
                        <span class="top-footer__guide-icon">
                            <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($card['icon']); ?>" alt="">
                        </span>
                        <span class="top-footer__guide-label"><?php echo esc_html($card['title']); ?></span>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="top-footer__bottom">
            <div class="top-footer__policy-links">
                <?php foreach ($footer_policy_links as $index => $link) : ?>
                    <a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a><?php echo $index < count($footer_policy_links) - 1 ? '｜' : ''; ?>
                <?php endforeach; ?>
            </div>

            <div class="top-footer__sns">
                <?php foreach ($footer_social_links as $social) : ?>
                    <a href="<?php echo esc_url($social['url']); ?>" aria-label="<?php echo esc_attr($social['label']); ?>">
                        <img src="<?php echo $theme_uri; ?>/img/figma-footer/<?php echo esc_attr($social['icon']); ?>" alt="">
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</footer>

<script>
document.addEventListener('DOMContentLoaded', function () {
    var toggle = document.querySelector('.top-menu-toggle');
    var nav = document.getElementById('top-navigation');

    if (toggle && nav) {
        toggle.addEventListener('click', function () {
            var expanded = toggle.getAttribute('aria-expanded') === 'true';
            toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
            nav.classList.toggle('is-open');
        });
    }

    document.querySelectorAll('.p-flex').forEach(function (group) {
        var titles = group.querySelectorAll('.c-title');
        if (!titles.length) {
            return;
        }

        var maxHeight = 0;
        titles.forEach(function (title) {
            title.style.height = 'auto';
            maxHeight = Math.max(maxHeight, title.offsetHeight);
        });

        titles.forEach(function (title) {
            title.style.height = maxHeight + 'px';
        });
    });

    function initGuideCarousel(selector) {
        var grid = document.querySelector(selector);
        if (!grid || grid.dataset.guideSwiperInit === '1') {
            return;
        }

        var children = Array.prototype.filter.call(grid.children, function (child) {
            return child.nodeType === 1;
        });

        if (children.length <= 1) {
            return;
        }

        var shell = document.createElement('div');
        shell.className = 'rf-guide-page__carousel-shell';
        grid.parentNode.insertBefore(shell, grid);
        var swipeHint = document.createElement('img');
        swipeHint.className = 'rf-guide-page__carousel-hint';
        swipeHint.src = '<?php echo esc_url(get_template_directory_uri()); ?>/img/common/arrow_swipe.png';
        swipeHint.alt = 'スクロールできます';
        shell.appendChild(swipeHint);
        shell.appendChild(grid);

        grid.classList.add('swiper', 'rf-guide-page__carousel');

        var wrapper = document.createElement('div');
        wrapper.className = 'swiper-wrapper';

        children.forEach(function (child) {
            child.classList.add('swiper-slide');
            wrapper.appendChild(child);
        });

        grid.appendChild(wrapper);

        var prev = document.createElement('button');
        prev.type = 'button';
        prev.className = 'rf-guide-page__carousel-button is-prev';
        prev.setAttribute('aria-label', '前へ');

        var next = document.createElement('button');
        next.type = 'button';
        next.className = 'rf-guide-page__carousel-button is-next';
        next.setAttribute('aria-label', '次へ');

        shell.appendChild(prev);
        shell.appendChild(next);

        new Swiper(grid, {
            slidesPerView: 1,
            slidesPerGroup: 1,
            spaceBetween: 12,
            speed: 600,
            grabCursor: true,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
                pauseOnMouseEnter: true
            },
            navigation: {
                prevEl: prev,
                nextEl: next
            }
        });

        function hideSwipeHint() {
            setTimeout(function () {
                swipeHint.classList.add('is-hidden');
            }, 1200);
        }

        if ('IntersectionObserver' in window) {
            var hintObserver = new IntersectionObserver(function (entries, observer) {
                entries.forEach(function (entry) {
                    if (entry.isIntersecting) {
                        hideSwipeHint();
                        observer.disconnect();
                    }
                });
            }, {
                threshold: 0.35
            });
            hintObserver.observe(swipeHint);
        } else {
            hideSwipeHint();
        }

        grid.dataset.guideSwiperInit = '1';
    }

    if (
        document.body.classList.contains('rf-guide-page') &&
        window.matchMedia('(max-width: 750px)').matches &&
        typeof window.Swiper !== 'undefined'
    ) {
        initGuideCarousel('.rf-guide-page__recommend-grid');
        initGuideCarousel('.rf-guide-page__flow-grid');
        initGuideCarousel('.rf-guide-page__merit-grid');
    }
});
</script>
