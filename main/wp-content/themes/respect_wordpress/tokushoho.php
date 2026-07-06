<?php
/*
Template Name:特定商取引法に基づく表記
*/

if (have_posts()) {
    the_post();
}

$sections = array(
    array(
        'label' => '販売事業者',
        'content' => array('株式会社リスペクトフォース'),
    ),
    array(
        'label' => '代表責任者',
        'content' => array('境 恭介'),
    ),
    array(
        'label' => '所在地',
        'content' => array('東京都中野区新井5-27-5 MONビル3F'),
    ),
    array(
        'label' => '電話番号',
        'content' => array('03-6457-4757'),
    ),
    array(
        'label' => 'メールアドレス',
        'content' => array('info★respect-force.co.jp'),
    ),
    array(
        'label' => '販売URL',
        'content' => array('https://www.respect-force.co.jp/'),
    ),
    array(
        'label' => '販売価格・サービス利用料',
        'content' => array('販売価格は各サービスページにてご確認ください。'),
    ),
    array(
        'label' => '商品代金以外の必要料金',
        'content' => array('振込手数料、決済手数料（クレジットカード、電子決済等）などが発生する場合があります。'),
    ),
    array(
        'label' => '支払方法',
        'list' => array(
            'クレジットカード決済',
            '銀行振込',
            '電子決済',
            '口座振替',
            'コンビニ払い（ReCredit）',
            '請求書払い',
        ),
    ),
    array(
        'label' => '提供時期',
        'content' => array(
            '当社が提供する売買・レンタルサービスにつきましては、',
            '決済確認後、準備が整い次第発送します。',
            '在庫状況や商品の状態により、発送までお時間をいただく場合があります。',
        ),
    ),
    array(
        'label' => '返品・キャンセル・解約',
        'content' => array(
            'サービスの性質上、決済後の返金は原則としてお受けしておりません。',
            'ただし、売買・レンタルサービスにおいて在庫が確保できない場合は全額返金にて対応いたします。',
        ),
    ),
    array(
        'label' => '表現・再現性に関する注意書き',
        'content' => array('当社サービスによる効果・成果は個人差があり、必ずしも結果を保証するものではありません。'),
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('tokushoho'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet">
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
    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-policy-page rf-tokushoho-page'); ?>>
    <?php get_header(); ?>

    <main class="rf-policy-page__main">
        <div class="rf-policy-page__hero">
            <div class="rf-policy-page__inner">
                <h1 class="rf-policy-page__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="rf-policy-page__breadcrumb-wrap">
            <div class="rf-policy-page__inner">
                <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <span><?php the_title(); ?></span>
                </nav>
            </div>
        </div>

        <section class="rf-policy-page__content">
            <div class="rf-policy-page__inner rf-policy-page__inner--narrow">
                <div class="rf-policy-page__sections">
                    <?php foreach ($sections as $section) : ?>
                        <section class="rf-policy-page__section">
                            <h2 class="rf-policy-page__section-title"><?php echo esc_html($section['label']); ?></h2>
                            <div class="rf-policy-page__section-line" aria-hidden="true"></div>
                            <?php if (!empty($section['content'])) : ?>
                                <div class="rf-policy-page__section-body">
                                    <?php foreach ($section['content'] as $line) : ?>
                                        <p><?php echo esc_html($line); ?></p>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            <?php if (!empty($section['list'])) : ?>
                                <ul class="rf-policy-page__section-list">
                                    <?php foreach ($section['list'] as $item) : ?>
                                        <li>・<?php echo esc_html($item); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </section>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
