<?php
/*
Template Name:ニュース
*/

$query_page = isset($_GET['p']) ? absint(wp_unslash($_GET['p'])) : 0;
$paged = max(1, $query_page, (int) get_query_var('paged'), (int) get_query_var('page'));
$news_term = get_category_by_slug('topics');

if (!($news_term instanceof WP_Term)) {
    $fallback_term = get_category(46);
    $news_term = $fallback_term instanceof WP_Term ? $fallback_term : null;
}

$query_args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => 12,
    'paged' => $paged,
    'orderby' => 'date',
    'order' => 'DESC',
    'ignore_sticky_posts' => true,
);

if ($news_term instanceof WP_Term) {
    $query_args['tax_query'] = array(
        array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => array((int) $news_term->term_id),
            'include_children' => true,
        ),
    );
}

$news_query = new WP_Query($query_args);
$news_archive_url = function_exists('rf_theme_get_named_page_urls')
    ? (rf_theme_get_named_page_urls()['news'] ?? home_url('/news/'))
    : home_url('/news/');
$news_pagination_base = add_query_arg('p', '%#%', $news_archive_url);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>お知らせ | <?php bloginfo('name'); ?></title>
    <meta name="description" content="RESPECT FORCEのお知らせ一覧です。最新のニュースやご案内を掲載しています。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet">

    <meta property="og:type" content="website">
    <meta property="og:title" content="お知らせ | <?php bloginfo('name'); ?>">
    <meta property="og:url" content="<?php echo esc_url($news_archive_url); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_template_directory_uri() . '/img/common/ogp.png'); ?>">
    <meta property="og:description" content="RESPECT FORCEのお知らせ一覧です。最新のニュースやご案内を掲載しています。">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="お知らせ | <?php bloginfo('name'); ?>">
    <meta name="twitter:description" content="RESPECT FORCEのお知らせ一覧です。最新のニュースやご案内を掲載しています。">
    <meta name="twitter:image" content="<?php echo esc_url(get_template_directory_uri() . '/img/common/ogp.png'); ?>">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/common/favicon.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-policy-page rf-news-archive-page'); ?>>
    <?php get_header(); ?>

    <main class="rf-policy-page__main">
        <div class="rf-policy-page__hero">
            <div class="rf-policy-page__inner">
                <h1 class="rf-policy-page__title">お知らせ</h1>
            </div>
        </div>
        <div class="rf-policy-page__breadcrumb-wrap">
            <div class="rf-policy-page__inner">
                <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <span>お知らせ</span>
                </nav>
            </div>
        </div>

        <section class="rf-policy-page__content rf-news-archive">
            <div class="rf-policy-page__inner">
                <?php if ($news_query->have_posts()) : ?>
                    <div class="rf-news-archive__grid">
                        <?php while ($news_query->have_posts()) : $news_query->the_post(); ?>
                            <?php
                            $categories = get_the_category();
                            $primary_category = !empty($categories[0]) ? $categories[0] : null;
                            $excerpt = has_excerpt()
                                ? get_the_excerpt()
                                : wp_trim_words(wp_strip_all_tags(get_the_content()), 60, '...');
                            ?>
                            <article class="rf-news-archive__card">
                                <div class="rf-news-archive__body">
                                    <div class="rf-news-archive__meta">
                                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                                        <?php if ($primary_category instanceof WP_Term) : ?>
                                            <span class="rf-news-archive__category"><?php echo esc_html($primary_category->name); ?></span>
                                        <?php endif; ?>
                                    </div>
                                    <h2 class="rf-news-archive__title">
                                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                    </h2>
                                    <p class="rf-news-archive__excerpt"><?php echo esc_html($excerpt); ?></p>
                                    <a href="<?php the_permalink(); ?>" class="rf-news-archive__more">詳しく見る</a>
                                </div>
                            </article>
                        <?php endwhile; ?>
                    </div>

                    <?php
                    $pagination_links = paginate_links(array(
                        'base' => $news_pagination_base,
                        'format' => '',
                        'current' => $paged,
                        'total' => (int) $news_query->max_num_pages,
                        'mid_size' => 1,
                        'end_size' => 1,
                        'prev_text' => '‹',
                        'next_text' => '›',
                        'type' => 'array',
                    ));
                    ?>
                    <?php if (!empty($pagination_links)) : ?>
                        <nav class="rf-news-archive__pagination" aria-label="ニュース一覧のページ送り">
                            <?php foreach ($pagination_links as $pagination_link) : ?>
                                <span class="rf-news-archive__pagination-item"><?php echo wp_kses_post($pagination_link); ?></span>
                            <?php endforeach; ?>
                        </nav>
                    <?php endif; ?>
                <?php else : ?>
                    <div class="rf-news-archive__empty">
                        <p>現在、お知らせはありません。</p>
                    </div>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
            </div>
        </section>
    </main>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
