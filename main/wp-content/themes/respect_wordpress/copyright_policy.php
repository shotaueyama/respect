<?php
/*
Template Name:著作権リンクポリシー
*/

if (have_posts()) {
    the_post();
}

$sections = array(
    array(
        'label' => '1. 著作権について',
        'content' => array('当社サイトに掲載される文章、画像、ロゴ、資料、動画、デザイン等の著作権は当社に帰属します。無断転載・複製・改変を禁止します。'),
    ),
    array(
        'label' => '2. 引用について',
        'content' => array('引用を行う場合は、著作権法の範囲内で適切な引用を行い、出典を明記する必要があります。'),
    ),
    array(
        'label' => '3. リンクについて',
        'content' => array('当社サイトへのリンクは原則自由ですが、以下に該当する場合はリンクを禁止します。'),
        'list' => array(
            '誹謗中傷を目的としたページ',
            '公序良俗に反するページ',
            '公式と誤認させる表現を伴うページ',
        ),
    ),
    array(
        'label' => '4. 商標について',
        'content' => array('当社のサービスは商標であり、無断使用を禁止します。'),
    ),
    array(
        'label' => '5. 免責',
        'content' => array('リンクにより発生したいかなる損害についても、当社は責任を負いません。'),
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('copyright_policy'); ?>
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
