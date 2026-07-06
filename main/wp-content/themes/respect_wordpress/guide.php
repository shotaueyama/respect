<?php
/*
Template Name:ご利用ガイド
*/
$theme_uri = esc_url(get_template_directory_uri());
$rent_guide_asset_base = $theme_uri . '/img/figma-guide-rent';
$rent_guide_asset_version = '2026063032';
$shortcut_cards = rf_theme_get_top_shortcut_cards();
$rental_url = !empty($shortcut_cards[0]['url']) ? $shortcut_cards[0]['url'] : home_url('/');
$products_url = function_exists('rf_theme_get_products_url') ? rf_theme_get_products_url() : home_url('/');
$guide_floating_cta_url = $rental_url;
$guide_floating_cta_label = 'アイテムを探す';
if (have_posts()) {
    the_post();
}
$recommend_cards = array(
    array(
        'title' => '新メニューを“まずは試したい”',
        'points' => array('将来の導入を検討できる', 'テスト導入に最適', '物品購入の失敗を防ぐ'),
        'image' => 'recommend-1.png',
    ),
    array(
        'title' => '開業準備・独立前に“試したい”',
        'points' => array('開業前の導入テストに', '購入前にレンタルでお試し導入が可能', '自宅サロンやプチサロンでも体験'),
        'image' => 'recommend-2.png',
    ),
    array(
        'title' => '故障・繁忙中の“代替機”が必要',
        'points' => array('故障時も手を止めなくてOK', '代替機を短期で使える', '商品の入れ替えを試せる'),
        'image' => 'recommend-3.png',
    ),
    array(
        'title' => '施術枠を増やすため“追加台”が必要',
        'points' => array('繁忙時に手軽に複数台を導入', '回転率を一時的に向上', '検品後も余裕をもって活用'),
        'image' => 'recommend-4.png',
    ),
);
$flow_steps = array(
    array(
        'number' => '1',
        'title' => 'レンタル機器を選ぶ',
        'description' => 'Webサイトから希望機種を検索し、お問い合わせへ進みます。',
        'image' => 'flow-1.png',
    ),
    array(
        'number' => '2',
        'title' => '申し込む',
        'subtitle' => '（お問い合わせ）',
        'description' => 'レンタル希望を送信し、弊社スタッフが内容を確認します。',
        'image' => 'flow-2.png',
    ),
    array(
        'number' => '3',
        'title' => '支払う',
        'description' => 'WEB請求書の案内に沿って、指定方法でお支払いします。',
        'image' => 'flow-3.png',
    ),
    array(
        'number' => '4',
        'title' => '発送・受け取り',
        'description' => 'お支払い確認後、機器を発送し、指定先で受け取れます。',
        'image' => 'flow-4.png',
    ),
    array(
        'number' => '5',
        'title' => '利用・返送',
        'description' => 'レンタルは1ヶ月ごとの更新。終了後は返送手続きで完了です。',
        'image' => 'flow-5.png',
    ),
);
$merit_cards = array(
    array(
        'label' => 'メリット.1',
        'title' => '必要な時だけ使える',
        'description' => '数日から1ヶ月の短期利用から、最長6ヶ月の継続レンタルまで対応。導入をゼロ負担で始められます。',
        'image' => 'merit-1.png',
    ),
    array(
        'label' => 'メリット.2',
        'title' => '導入前に実機でリスクゼロ',
        'description' => '気になる機器を実際の施術で試し、使用感や効果を確認してから導入判断。現場感覚の失敗を防げます。',
        'image' => 'merit-2.png',
    ),
    array(
        'label' => 'メリット.3',
        'title' => '本部が仲介する安心・安全',
        'description' => '契約や決済はすべてRF本部が管理。売主や貸主とスムーズにやり取りでき、トラブルなく活用できます。',
        'image' => 'merit-3.png',
    ),
    array(
        'label' => 'メリット.4',
        'title' => '審査は電子契約と本人確認のみ',
        'description' => '契約と本人確認をオンラインで完結。面倒な書類準備を減らし、スピーディーに導入できます。',
        'image' => 'merit-4.png',
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('guide'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026052431" rel="stylesheet">
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
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css">
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-product-detail-page rf-guide-page'); ?>>
    <?php get_header(); ?>

    <main class="rf-guide-page__main">
        <div class="rf-guide-page__inner">
            <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                <span class="rf-detail__breadcrumbs-separator">›</span>
                <a href="<?php echo esc_url($products_url); ?>">美容・健康関連商品</a>
                <span class="rf-detail__breadcrumbs-separator">›</span>
                <span><?php the_title(); ?></span>
            </nav>
        </div>

        <header class="rf-guide-page__hero">
            <div class="rf-guide-page__inner">
                <h1 class="rf-guide-page__title"><?php the_title(); ?></h1>
            </div>
        </header>

        <section class="rf-guide-page__shortcut-section" aria-label="ご利用メニュー">
            <div class="rf-guide-page__inner">
                <div class="rf-guide-page__shortcut-grid">
                    <?php foreach ($shortcut_cards as $card) : ?>
                        <a href="<?php echo esc_url($card['url']); ?>" class="rf-guide-page__shortcut-card">
                            <span class="rf-guide-page__shortcut-icon" aria-hidden="true">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($card['icon']); ?>" alt="">
                            </span>
                            <span class="rf-guide-page__shortcut-label"><?php echo esc_html($card['title']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="rf-guide-page__section rf-guide-page__section--recommend">
            <div class="rf-guide-page__inner">
                <div class="rf-guide-page__section-header">
                    <span class="rf-guide-page__eyebrow">RECOMENDED</span>
                    <h2 class="rf-guide-page__section-title">美容機器レンタルはこんな方におすすめ</h2>
                </div>

                <div class="rf-guide-page__recommend-panel">
                    <div class="rf-guide-page__recommend-grid">
                        <?php foreach ($recommend_cards as $card) : ?>
                            <article class="rf-guide-page__recommend-card">
                                <div class="rf-guide-page__recommend-image-wrap">
                                    <?php if (!empty($card['price_badges'])) : ?>
                                        <div class="rf-guide-page__recommend-badges">
                                            <?php foreach ($card['price_badges'] as $badge) : ?>
                                                <span><?php echo esc_html($badge); ?></span>
                                            <?php endforeach; ?>
                                        </div>
                                    <?php endif; ?>
                                    <img src="<?php echo esc_url($rent_guide_asset_base . '/' . $card['image'] . '?v=' . $rent_guide_asset_version); ?>" alt="">
                                </div>
                                <div class="rf-guide-page__recommend-body">
                                    <h3><?php echo esc_html($card['title']); ?></h3>
                                    <ul>
                                        <?php foreach ($card['points'] as $point) : ?>
                                            <li><?php echo esc_html($point); ?></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </article>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
        </section>

        <section class="rf-guide-page__section rf-guide-page__section--flow">
            <div class="rf-guide-page__inner">
                <div class="rf-guide-page__section-top">
                    <div class="rf-guide-page__section-header">
                        <span class="rf-guide-page__eyebrow">HOW TO RENTAL</span>
                        <h2 class="rf-guide-page__section-title">レンタルまでの流れ</h2>
                    </div>
                </div>

                <div class="rf-guide-page__flow-grid">
                    <?php foreach ($flow_steps as $index => $step) : ?>
                        <article class="rf-guide-page__flow-card">
                            <span class="rf-guide-page__flow-number"><?php echo esc_html($step['number']); ?></span>
                            <div class="rf-guide-page__flow-head">
                                <span class="rf-guide-page__flow-title"><?php echo esc_html($step['title']); ?></span>
                                <?php if (!empty($step['subtitle'])) : ?>
                                    <span class="rf-guide-page__flow-subtitle"><?php echo esc_html($step['subtitle']); ?></span>
                                <?php endif; ?>
                            </div>
                            <div class="rf-guide-page__flow-image-wrap">
                                <img src="<?php echo esc_url($rent_guide_asset_base . '/' . $step['image'] . '?v=' . $rent_guide_asset_version); ?>" alt="">
                            </div>
                            <p><?php echo esc_html($step['description']); ?></p>
                            <?php if ($index < count($flow_steps) - 1) : ?>
                                <span class="rf-guide-page__flow-arrow" aria-hidden="true"></span>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="rf-guide-page__section rf-guide-page__section--merit">
            <div class="rf-guide-page__inner">
                <div class="rf-guide-page__section-header">
                    <span class="rf-guide-page__eyebrow">MERIT</span>
                    <h2 class="rf-guide-page__section-title">レンタルのメリット</h2>
                </div>

                <div class="rf-guide-page__merit-grid">
                    <?php foreach ($merit_cards as $card) : ?>
                        <article class="rf-guide-page__merit-card">
                            <span class="rf-guide-page__merit-label"><?php echo esc_html($card['label']); ?></span>
                            <div class="rf-guide-page__merit-image-wrap">
                                <img src="<?php echo esc_url($rent_guide_asset_base . '/' . $card['image'] . '?v=' . $rent_guide_asset_version); ?>" alt="">
                            </div>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['description']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="rf-guide-page__footer-cta">
                    <a href="<?php echo esc_url($rental_url); ?>" class="rf-guide-page__cta">アイテムを探す</a>
                </div>
            </div>
        </section>
    </main>

    <?php include 'guide_floating_cta.php'; ?>
    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
