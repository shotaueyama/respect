<?php
/*
Template Name:古物営業法に基づく表記
*/

if (have_posts()) {
    the_post();
}

$sections = array(
    array(
        'label' => '名称（商号）',
        'content' => array('株式会社リスペクトフォース'),
    ),
    array(
        'label' => '許可公安委員会',
        'content' => array('東京都公安委員会'),
    ),
    array(
        'label' => '許可番号',
        'content' => array('第303330507394号'),
    ),
    array(
        'label' => '古物商の区分',
        'list' => array(
            '機械工具商',
            '事務機器商',
        ),
        'content' => array('※業務用美容機器を主に取り扱います。'),
    ),
    array(
        'label' => '本店所在地',
        'content' => array('〒165-0026  東京都中野区新井5-27-5 MONビル3F'),
    ),
    array(
        'label' => '代表者名',
        'content' => array('境 恭介'),
    ),
    array(
        'label' => 'ホームページURL',
        'content' => array('https://www.respect-force.co.jp/'),
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('kobutsu'); ?>
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
<body <?php body_class('rf-policy-page rf-kobutsu-page'); ?>>
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
