<?php
/*
Template Name:利用規約
*/

if (have_posts()) {
    the_post();
}

$sections = array(
    array(
        'label' => '第1条（適用）',
        'content' => array('本規約は、株式会社リスペクトフォース（以下「当社」）が提供するサービス（以下「本サービス」）の利用に関する条件を定めるものです。'),
    ),
    array(
        'label' => '第2条（禁止事項）',
        'list' => array(
            '虚偽情報の登録',
            '医療行為その他法令に反する行為',
            '迷惑行為・ハラスメント行為',
            'サロン設備・機器の故意または過失による損壊',
            'アカウントの不正利用',
            '当社または第三者への不利益行為',
        ),
    ),
    array(
        'label' => '第3条（アカウント管理）',
        'content' => array('利用者は、ID・パスワードを自己の責任により管理するものとし、不正使用による損害について当社は一切責任を負いません。'),
    ),
    array(
        'label' => '第4条（サービス内容の変更・停止）',
        'content' => array('当社は、必要に応じて本サービスの全部または一部を変更・中断・終了することができるものとします。'),
    ),
    array(
        'label' => '第5条（免責）',
        'content' => array(
            '本サービス利用により生じたトラブル・損害について、当社の故意または重過失による場合を除き、一切の責任を負いません。',
            '特に、サロン利用者と貸主／施術者間のトラブル、機器の使用・故障等による損害について当社は関与しません。',
        ),
    ),
    array(
        'label' => '第6条（知的財産権）',
        'content' => array('本サービスに関する画像、文章、データ、ロゴ等の著作権その他の権利は当社に帰属します。'),
    ),
    array(
        'label' => '第7条（反社会的勢力の排除）',
        'content' => array('利用者が反社会的勢力に該当すると判明した場合、当社は直ちに利用停止・契約解除を行います。'),
    ),
    array(
        'label' => '第8条（準拠法・裁判管轄）',
        'content' => array('本規約は日本法を準拠法とし、本サービスに関する紛争は東京地方裁判所を専属的合意管轄とします。'),
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('terms'); ?>
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
<body <?php body_class('rf-policy-page rf-terms-page'); ?>>
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
