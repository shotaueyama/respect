<?php
$categories = get_the_category();
$primary_category = !empty($categories) ? $categories[0] : null;
$category_url = $primary_category instanceof WP_Term ? get_category_link($primary_category->term_id) : home_url('/news/');
$category_name = $primary_category instanceof WP_Term ? $primary_category->name : 'ニュース';
$content_html = apply_filters('the_content', get_the_content());
$featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'full') ?: '';
$leading_image_block_pattern = '/^\s*(?:<!--.*?-->\s*)*(<figure\b[^>]*>.*?<img\b[^>]*>.*?<\/figure>|<div\b[^>]*class=(["\'])[^"\']*wp-block-image[^"\']*\2[^>]*>.*?<img\b[^>]*>.*?<\/div>|<p\b[^>]*>\s*(?:<a\b[^>]*>\s*)?<img\b[^>]*>(?:\s*<\/a>)?\s*<\/p>)/is';

$content_html = preg_replace($leading_image_block_pattern, '', $content_html, 1);

if (class_exists('DOMDocument')) {
    $previous_libxml_state = libxml_use_internal_errors(true);
    $dom = new DOMDocument('1.0', 'UTF-8');
    $wrapped_html = '<!DOCTYPE html><html><body><div id="rf-news-content-root">' . $content_html . '</div></body></html>';

    if ($dom->loadHTML('<?xml encoding="utf-8" ?>' . $wrapped_html, LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD)) {
        $xpath = new DOMXPath($dom);
        $root = $xpath->query('//*[@id="rf-news-content-root"]')->item(0);

        if ($root instanceof DOMElement) {
            foreach (iterator_to_array($root->childNodes) as $child_node) {
                if ($child_node->nodeType === XML_TEXT_NODE && trim($child_node->textContent) === '') {
                    continue;
                }

                if ($child_node->nodeType === XML_COMMENT_NODE) {
                    continue;
                }

                if ($child_node->nodeType === XML_ELEMENT_NODE) {
                    $image_nodes = $child_node->getElementsByTagName('img');

                    if ($image_nodes->length > 0) {
                        $root->removeChild($child_node);
                    }
                }

                break;
            }

            $content_html = '';

            foreach ($root->childNodes as $child_node) {
                $content_html .= $dom->saveHTML($child_node);
            }
        }
    }

    libxml_clear_errors();
    libxml_use_internal_errors($previous_libxml_state);
}

if ($featured_image_url) {
    $featured_basename = pathinfo(parse_url($featured_image_url, PHP_URL_PATH) ?: '', PATHINFO_FILENAME);
    $featured_basename = preg_replace('/-\d+x\d+$/', '', (string) $featured_basename);

    if ($featured_basename) {
        $featured_image_block_pattern = '/<(figure|div|p)\b[^>]*>.*?<img\b[^>]*src=(["\'])[^"\']*\/'
            . preg_quote($featured_basename, '/')
            . '(?:-\d+x\d+)?\.[^"\']+\2[^>]*>.*?<\/\1>/is';
        $content_html = preg_replace($featured_image_block_pattern, '', $content_html, 1);
    }
}
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
    <meta name="description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt() ?: get_the_title())); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css" rel="stylesheet">

    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
    <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/img/common/ogp.png'); ?>">
    <meta property="og:description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt() ?: get_the_title())); ?>">
    <meta property="og:site_name" content="<?php bloginfo('name'); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr(get_the_title()); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr(wp_strip_all_tags(get_the_excerpt() ?: get_the_title())); ?>">
    <meta name="twitter:image" content="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large') ?: get_template_directory_uri() . '/img/common/ogp.png'); ?>">

    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/img/common/favicon.png">

    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-policy-page rf-news-page'); ?>>
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
                    <a href="<?php echo esc_url($category_url); ?>"><?php echo esc_html($category_name); ?></a>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <span><?php the_title(); ?></span>
                </nav>
            </div>
        </div>

        <section class="rf-policy-page__content rf-news-article">
            <div class="rf-policy-page__inner rf-policy-page__inner--narrow">
                <article class="rf-news-article__card">
                    <div class="rf-news-article__meta">
                        <time datetime="<?php echo esc_attr(get_the_date('c')); ?>"><?php echo esc_html(get_the_date('Y.m.d')); ?></time>
                    </div>
                    <div class="rf-news-article__content">
                        <?php echo $content_html; ?>
                    </div>
                </article>
            </div>
        </section>
    </main>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
