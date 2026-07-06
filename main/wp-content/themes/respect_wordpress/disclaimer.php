<?php
/*
Template Name:免責事項
*/

if (have_posts()) {
    the_post();
}

$sections = array(
    array(
        'label' => '1. サービス利用に関する免責',
        'content' => array('当社は、利用者が本サービスを利用したことにより生じたいかなる損害についても、一切の責任を負いません。'),
    ),
    array(
        'label' => '2. サロン利用に関する免責',
        'content' => array('施術者または利用者間のトラブル（施術ミス・怪我・物損等）について、当社は一切責任を負いません。'),
    ),
    array(
        'label' => '3. 機器利用に関する免責',
        'content' => array('美容機器/当社サービスの使用に伴う事故・不具合などについて、当社は責任を負いません。'),
    ),
    array(
        'label' => '4. システム障害に関する免責',
        'content' => array('通信障害・サーバ障害その他予期せぬ事象によりデータ消失や遅延が発生した場合でも、当社は責任を負いません。'),
    ),
    array(
        'label' => '5. 外部リンクに関する免責',
        'content' => array('当社サイトからリンクされた外部サイトの情報・サービスについて、当社は責任を負いません。'),
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('disclaimer'); ?>
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
<body <?php body_class('rf-policy-page rf-disclaimer-page'); ?>>
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
