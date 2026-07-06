<?php
/*
Template Name:ご利用ガイド（美容機器を買いたい）
*/
$theme_uri = esc_url(get_template_directory_uri());
$buy_guide_asset_base = $theme_uri . '/img/figma-guide-buy';
$buy_guide_asset_version = '2026070101';
$shortcut_cards = rf_theme_get_top_shortcut_cards();
$products_url = function_exists('rf_theme_get_products_url') ? rf_theme_get_products_url() : home_url('/');
$buy_url = !empty($shortcut_cards[2]['url']) ? $shortcut_cards[2]['url'] : $products_url;
$guide_floating_cta_url = $buy_url;
$guide_floating_cta_label = 'アイテムを探す';
if (have_posts()) {
    the_post();
}
$recommend_cards = array(
    array(
        'title' => '初期投資を抑えて開業したい',
        'points' => array('開業資金を大幅に削減', '必要機器を低コスト化', '整備済み中古なら導入も安心'),
        'image' => 'recommend-1.png',
    ),
    array(
        'title' => '乗り換え・買い替えで運用改善したい',
        'points' => array('新品のみの購入より費用を軽減', '低コストで導入可能', '初期投資コストを削減'),
        'image' => 'recommend-2.png',
    ),
    array(
        'title' => '需要増に合わせ設備投資を拡張したい',
        'points' => array('人気機器を安く導入可能', 'メニュー拡張のスピードが早い', '売上チャンスを逃さず拡大'),
        'image' => 'recommend-3.png',
    ),
    array(
        'title' => '中古品で“掘り出し物”を見つけたい',
        'points' => array('型落ち機種を安く導入できる', '人気機種をお得に導入可能', '掘り出し品との出会いを実感'),
        'image' => 'recommend-4.png',
    ),
);
$flow_steps = array(
    array(
        'number' => '1',
        'title' => '商品を探す',
        'description' => 'Webサイトから希望機種を検索し、使いたいものを選択します。',
        'image' => 'flow-1.png',
    ),
    array(
        'number' => '2',
        'title' => '問合せ・在庫確認',
        'description' => '購入希望を送信し、在庫や仕様など詳細の有無を確認します。',
        'image' => 'flow-2.png',
    ),
    array(
        'number' => '3',
        'title' => '契約・お見積り',
        'description' => '見積書と契約フォームを確認し、名義や条件を正式に確定します。',
        'image' => 'flow-3.png',
    ),
    array(
        'number' => '4',
        'title' => 'お支払い',
        'description' => '指定口座へのお振込み後、入金確認を経て販売元が発送準備に入ります。',
        'image' => 'flow-4.png',
    ),
    array(
        'number' => '5',
        'title' => '納品・受け取り',
        'description' => '機器が納品され、動作確認を行い、問題があれば本部が対応します。',
        'image' => 'flow-5.png',
    ),
);
$merit_cards = array(
    array(
        'label' => 'メリット.1',
        'title' => '初期コストを大幅に削減',
        'description' => '新品に比べて低コストで導入でき、開業や拡張、メニュー追加を抑えた投資で始められます。',
        'image' => 'merit-1.png',
    ),
    array(
        'label' => 'メリット.2',
        'title' => '契約・支払いを本部が管理',
        'description' => '個人契約ではなく、RF本部が契約や支払いを一元管理。トラブルを防ぎ、安心して取引できます。',
        'image' => 'merit-2.png',
    ),
    array(
        'label' => 'メリット.3',
        'title' => '新着・人気旧モデルが見つかる',
        'description' => '新品では入手しづらい機種も中古導入可能。年式や状態を見ながら選べて、掘り出し物に出会えます。',
        'image' => 'merit-3.png',
    ),
    array(
        'label' => 'メリット.4',
        'title' => 'パーツ購入や不具合サポート',
        'description' => 'パーツや付属品のみの購入も可能。購入後に不具合があった場合も、本部が確認と返送を支援します。',
        'image' => 'merit-4.png',
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('guide_buy'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026070101" rel="stylesheet">
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
<body <?php body_class('rf-product-detail-page rf-guide-page rf-guide-page--buy'); ?>>
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
                    <h2 class="rf-guide-page__section-title">美容機器購入はこんな方におすすめ</h2>
                </div>

                <div class="rf-guide-page__recommend-panel">
                    <div class="rf-guide-page__recommend-grid">
                        <?php foreach ($recommend_cards as $card) : ?>
                            <article class="rf-guide-page__recommend-card">
                                <div class="rf-guide-page__recommend-image-wrap">
                                    <img src="<?php echo esc_url($buy_guide_asset_base . '/' . $card['image']); ?>" alt="">
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
                        <span class="rf-guide-page__eyebrow">HOW TO BUY</span>
                        <h2 class="rf-guide-page__section-title">機器購入の流れ</h2>
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
                                <img src="<?php echo esc_url($buy_guide_asset_base . '/' . $step['image'] . '?v=' . $buy_guide_asset_version); ?>" alt="">
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
                    <h2 class="rf-guide-page__section-title">機器を購入するメリット</h2>
                </div>

                <div class="rf-guide-page__merit-grid">
                    <?php foreach ($merit_cards as $card) : ?>
                        <article class="rf-guide-page__merit-card">
                            <span class="rf-guide-page__merit-label"><?php echo esc_html($card['label']); ?></span>
                            <div class="rf-guide-page__merit-image-wrap">
                                <img src="<?php echo esc_url($buy_guide_asset_base . '/' . $card['image']); ?>" alt="">
                            </div>
                            <h3><?php echo esc_html($card['title']); ?></h3>
                            <p><?php echo esc_html($card['description']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="rf-guide-page__footer-cta">
                    <a href="<?php echo esc_url($buy_url); ?>" class="rf-guide-page__cta">アイテムを探す</a>
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
