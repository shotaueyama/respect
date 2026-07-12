<?php
/*
Template Name:ご利用ガイド（美容機器を貸したい）
*/
$theme_uri = esc_url(get_template_directory_uri());
$lend_guide_asset_base = $theme_uri . '/img/figma-guide-lend';
$lend_guide_asset_version = '2026071001';
$shortcut_cards = rf_theme_get_top_shortcut_cards();
$page_urls = rf_theme_get_named_page_urls();
$contact_request_url = $page_urls['contact_request'] ?? home_url('/contact_request/');
$products_url = function_exists('rf_theme_get_products_url') ? rf_theme_get_products_url() : home_url('/');
$guide_page_title = 'ご利用ガイド（美容機器を貸したい）';
$guide_floating_cta_url = $contact_request_url;
$guide_floating_cta_label = 'お問い合わせ';
if (have_posts()) {
    the_post();
}

$recommend_cards = array(
    array(
        'title' => '稼働していない機器で副収入を得たい',
        'points' => array('使わない期間を収益化', '固定費の負担を軽減', '遊休資産を有効活用'),
        'image' => 'recommend-1.png',
    ),
    array(
        'title' => '繁忙期だけ機器を増設している',
        'points' => array('閑散期の機器を収益化', '需要のある場所へ柔軟に貸出可', '遊休機器を貸出して収益改善'),
        'image' => 'recommend-2.png',
    ),
    array(
        'title' => '新機器導入で古い機器が余っている',
        'points' => array('倉庫で眠る機器が収益化', '乗り換え後の機器を活用可能', '眠っていた機器が負債から資産へ'),
        'image' => 'recommend-3.png',
    ),
    array(
        'title' => '処分に困る機器がある',
        'points' => array('保管スペースの圧迫を解消', '必要サロンで有効活用', '環境負荷を抑えながら収益化'),
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
        'subtitle' => '（レンタル希望）',
        'description' => 'レンタル希望者から問い合わせが届く。交渉ごとは本部が対応。',
        'image' => 'flow-2.png',
    ),
    array(
        'number' => '3',
        'title' => '契約・発送準備',
        'description' => '借り手の支払い確認後、本部から発送案内。案内に沿って発送。',
        'image' => 'flow-3.png',
    ),
    array(
        'number' => '4',
        'title' => '貸出期間・返送',
        'description' => '借り手は利用後に返送。本部が返却確認や延長対応を行います。',
        'image' => 'flow-4.png',
    ),
    array(
        'number' => '5',
        'title' => '入金・再掲載',
        'description' => '本部で取引完了後、レンタル代金を入金。未払いの心配なし。',
        'image' => 'flow-5.png',
    ),
);

$merit_cards = array(
    array(
        'label' => 'メリット.1',
        'title' => '遊休資産が毎月の安定収益に',
        'description' => '未稼働期間の“ムダ”をゼロにし、利益を生み続ける仕組みを構築できます。',
        'image' => 'merit-1.png',
    ),
    array(
        'label' => 'メリット.2',
        'title' => '在庫・配送・決済は本部が対応',
        'description' => '面倒な交渉や手間は不要。本部が仲介し、安全で確実な取引をサポートします。',
        'image' => 'merit-2.png',
    ),
    array(
        'label' => 'メリット.3',
        'title' => '電子契約でスムーズに貸し出し',
        'description' => '書類不要で簡単手続き。信頼性の高い本人確認でトラブルを防ぎます。',
        'image' => 'merit-3.png',
    ),
    array(
        'label' => 'メリット.4',
        'title' => '機器価値を維持して資金回収',
        'description' => '使用されることで稼働実績がつき、再販時の評価向上にもつながります。',
        'image' => 'merit-4.png',
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('guide_lend'); ?>
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
<body <?php body_class('rf-product-detail-page rf-guide-page rf-guide-page--lend'); ?>>
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
                    <h2 class="rf-guide-page__section-title">美容機器貸し出しはこんな方におすすめ</h2>
                </div>

                <div class="rf-guide-page__recommend-panel">
                    <div class="rf-guide-page__recommend-grid">
                        <?php foreach ($recommend_cards as $card) : ?>
                            <article class="rf-guide-page__recommend-card">
                                <div class="rf-guide-page__recommend-image-wrap">
                                    <img src="<?php echo esc_url($lend_guide_asset_base . '/' . $card['image'] . '?v=' . $lend_guide_asset_version); ?>" alt="">
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
                        <h2 class="rf-guide-page__section-title">機器を貸し収益化する流れ</h2>
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
                                <img src="<?php echo esc_url($lend_guide_asset_base . '/' . $step['image'] . '?v=' . $lend_guide_asset_version); ?>" alt="">
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
                    <h2 class="rf-guide-page__section-title">貸出して安定収入を得られるメリット</h2>
                </div>

                <div class="rf-guide-page__merit-grid">
                    <?php foreach ($merit_cards as $card) : ?>
                        <article class="rf-guide-page__merit-card">
                            <span class="rf-guide-page__merit-label"><?php echo esc_html($card['label']); ?></span>
                            <div class="rf-guide-page__merit-image-wrap">
                                <img src="<?php echo esc_url($lend_guide_asset_base . '/' . $card['image'] . '?v=' . $lend_guide_asset_version); ?>" alt="">
                            </div>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['description']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="rf-guide-page__footer-cta">
                    <a href="<?php echo esc_url($contact_request_url); ?>" class="rf-guide-page__cta">お問い合わせ</a>
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
