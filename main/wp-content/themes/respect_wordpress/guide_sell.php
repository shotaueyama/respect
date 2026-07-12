<?php
/*
Template Name:ご利用ガイド（美容機器を売りたい）
*/
$theme_uri = esc_url(get_template_directory_uri());
$sell_guide_asset_base = $theme_uri . '/img/figma-guide-sell';
$shortcut_cards = rf_theme_get_top_shortcut_cards();
$page_urls = rf_theme_get_named_page_urls();
$contact_url = $page_urls['contact'] ?? home_url('/contact.html');
$products_url = function_exists('rf_theme_get_products_url') ? rf_theme_get_products_url() : home_url('/');
$guide_page_title = 'ご利用ガイド（美容機器を売りたい）';
$guide_floating_cta_url = $contact_url;
$guide_floating_cta_label = 'お問い合わせ';
if (have_posts()) {
    the_post();
}
$recommend_cards = array(
    array(
        'title' => '使わなくなった機器を整理したい',
        'points' => array('新機種導入の費用補填に有効', '資金を回収しながら運用できる', 'スムーズに入れ替えが可能'),
        'image' => 'recommend-1.png',
    ),
    array(
        'title' => '在庫・旧モデルを手軽に処分したい',
        'points' => array('眠る機器を収益化', '保管スペースの圧迫を解消', '資産を無駄なく活用'),
        'image' => 'recommend-2.png',
    ),
    array(
        'title' => '店舗が閉店し、すぐに現金化したい',
        'points' => array('機器をスピーディーに現金化', '退去スペースを同時に整理', '資産を無駄にせず活かせる'),
        'image' => 'recommend-3.png',
    ),
    array(
        'title' => '業務転換で不要になった機器がある',
        'points' => array('使わない機器を収益に転換', '事業の再投資に活用可能', '資源を無駄なく循環できる'),
        'image' => 'recommend-4.png',
    ),
);
$flow_steps = array(
    array(
        'number' => '1',
        'title' => '機器を登録する',
        'description' => '使っていない美容機器の写真・仕様・状態を登録しページへ公開。',
        'image' => 'flow-1.png',
    ),
    array(
        'number' => '2',
        'title' => '問い合わせを受ける',
        'subtitle' => '（購入希望）',
        'description' => '購入希望者から問い合わせが届く。交渉ごとは本部が対応。',
        'image' => 'flow-2.png',
    ),
    array(
        'number' => '3',
        'title' => '契約・お見積り',
        'description' => '本部が契約書を作成し、購入者の支払いを管理します。',
        'image' => 'flow-3.png',
    ),
    array(
        'number' => '4',
        'title' => '発送・納品',
        'description' => '購入者からの支払い確認後、案内に従って発送。',
        'image' => 'flow-4.png',
    ),
    array(
        'number' => '5',
        'title' => '入金',
        'description' => '購入者の受領確認後、本部が売却代金をオーナーへ送金します。',
        'image' => 'flow-5.png',
    ),
);
$merit_cards = array(
    array(
        'label' => 'メリット.1',
        'title' => '適正・安心価格で売却可能',
        'description' => '本部が仲介し、不当な値下げなく取引成立を支援します。',
        'image' => 'merit-1.png',
    ),
    array(
        'label' => 'メリット.2',
        'title' => 'プラットフォームで早期売却',
        'description' => '美容業界特化のニーズにアクセス。短期間で買い手が見つかりやすい環境です。',
        'image' => 'merit-2.png',
    ),
    array(
        'label' => 'メリット.3',
        'title' => '決済は本部管理でトラブル防止',
        'description' => '安全な代金受け取りと所有権移転を保証し、安心の取引が可能です。',
        'image' => 'merit-3.png',
    ),
    array(
        'label' => 'メリット.4',
        'title' => '書類・手続きを本部が代行',
        'description' => '必要書類や名義変更をスムーズに処理し、余計な負担なく売却に集中できます。',
        'image' => 'merit-4.png',
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('guide_sell'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026070804" rel="stylesheet">
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
<body <?php body_class('rf-product-detail-page rf-guide-page rf-guide-page--sell'); ?>>
    <?php get_header(); ?>

    <main class="rf-guide-page__main">
        <div class="rf-guide-page__inner">
            <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                <span class="rf-detail__breadcrumbs-separator">›</span>
                <a href="<?php echo esc_url($products_url); ?>">美容・健康関連商品</a>
                <span class="rf-detail__breadcrumbs-separator">›</span>
                <span><?php echo esc_html($guide_page_title); ?></span>
            </nav>
        </div>

        <header class="rf-guide-page__hero">
            <div class="rf-guide-page__inner">
                <h1 class="rf-guide-page__title"><?php echo esc_html($guide_page_title); ?></h1>
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
                    <h2 class="rf-guide-page__section-title">美容機器売却はこんな方におすすめ</h2>
                </div>

                <div class="rf-guide-page__recommend-panel">
                    <div class="rf-guide-page__recommend-grid">
                        <?php foreach ($recommend_cards as $card) : ?>
                            <article class="rf-guide-page__recommend-card">
                                <div class="rf-guide-page__recommend-image-wrap">
                                    <img src="<?php echo esc_url($sell_guide_asset_base . '/' . $card['image']); ?>" alt="">
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
                        <h2 class="rf-guide-page__section-title">機器を売却し収益化する流れ</h2>
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
                                <img src="<?php echo esc_url($sell_guide_asset_base . '/' . $step['image']); ?>" alt="">
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
                    <h2 class="rf-guide-page__section-title">売却のメリット</h2>
                </div>

                <div class="rf-guide-page__merit-grid">
                    <?php foreach ($merit_cards as $card) : ?>
                        <article class="rf-guide-page__merit-card">
                            <span class="rf-guide-page__merit-label"><?php echo esc_html($card['label']); ?></span>
                            <div class="rf-guide-page__merit-image-wrap">
                                <img src="<?php echo esc_url($sell_guide_asset_base . '/' . $card['image']); ?>" alt="">
                            </div>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['description']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="rf-guide-page__footer-cta">
                    <a href="<?php echo esc_url($contact_url); ?>" class="rf-guide-page__cta">お問い合わせ</a>
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
