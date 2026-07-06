<?php
/*
Template Name:商品詳細
*/

if (!function_exists('rf_theme_normalize_detail_plain_text')) {
    function rf_theme_normalize_detail_plain_text($value) {
        $text = html_entity_decode((string) $value, ENT_QUOTES, 'UTF-8');
        $text = preg_replace('/<\s*br\s*\/?\s*>/iu', "\n", $text);
        $text = preg_replace('/<\s*\/\s*(p|div|li|section|article|h[1-6]|tr)\s*>/iu', "\n", $text);
        $text = wp_strip_all_tags($text);
        $text = preg_replace("/\r\n|\r/u", "\n", $text);
        $text = preg_replace('/[ \t\x{00A0}\x{3000}]+\n/u', "\n", $text);
        $text = preg_replace("/\n{3,}/u", "\n\n", $text);

        return trim($text);
    }
}

//detail_idを取得
$detail_id = isset($_GET['detail_id']) ? sanitize_text_field(wp_unslash($_GET['detail_id'])) : '';
$base_id = $detail_id;

$data_array = rf_theme_fetch_product_detail_row((int) $detail_id);
if (!is_array($data_array)) {
    $data_array = array();
}

$newpost_check = "";

if (isset($data_array['list_id'])) {
    $list_id = $data_array['list_id'];
    $newpost_check = "false";
}else{
    $list_id = "";
    $newpost_check = "true";
}

// カテゴリーを取得
$categories = get_categories(array(
    'hide_empty' => false, // 投稿がないカテゴリーも含める
));

$matching_categories = array();

// list_idが一致するカテゴリーを探す
if (!empty($list_id)) {
    foreach ($categories as $category) {
        $category_list_id = get_field('list_id', 'category_' . $category->term_id);
        if ($category_list_id == $list_id) {
            $matching_categories[] = array(
                'id' => $category->term_id,
                'name' => $category->name
            );
        }
    }
}

// print_r($matching_categories["0"]["name"]);


// 結果を表示
// echo "Fetched data for detail_id: " . $detail_id . "\n";
// print_r($data_array);

// $data_arrayが正しく設定されていることを前提としています
// もし設定されていない場合は、以下のようにダミーデータを使用できます
// $data_array = array("detail_standard" => "サイズ：M\n色：赤\n素材：綿100%");


// 改行で分割し、各行を処理する
if (isset($data_array["detail_standard"]) && !empty($data_array["detail_standard"])) {
    $lines = explode("\n", $data_array["detail_standard"]);
} else {
    $lines = array();
}

// echo $lines[2];


$processed_html = "<div>";

foreach ($lines as $line) {
    // ":"で分割（全角コロン"："も考慮）
    // mb_split()を使用して文字列を分割
    $parts = mb_split('[:：]', $line, 2);
    
    if (count($parts) == 2) {
        $left = trim($parts[0]);
        $right = trim($parts[1]);
        
        // HTML要素を生成
        $processed_html .= "  <dl class='c-table --table-type-1'><dt>" . htmlspecialchars($left) . "</dt>\n";
        $processed_html .= "  <dd>" . htmlspecialchars($right) . "</dd></dl>\n";
    } else {
        // ":"がない場合は、行全体を<dd>で囲む
        $processed_html .= "  </div><div class='u-pt-10 u-sp-pt-30 u-font-size-14'>" . htmlspecialchars($line) . "</div>\n";
    }
}
// 生成されたHTMLを変数に格納
$definition_list = $processed_html;

// 結果を確認（実際の使用時にはこの部分は削除してください）
// echo $definition_list;

$picture_api_url = "";
$picture_api_url_1 = "";
$picture_api_url_2 = "";
$picture_api_url_3 = "";
$picture_api_url_4 = "";
$featured_image_url = "";
$product_kana = "";

// 商品データから画像IDを取得
$picture_id = isset($data_array['picture_id']) ? $data_array['picture_id'] : '';
$picture_id_1 = isset($data_array['picture_id1']) ? $data_array['picture_id1'] : '';
$picture_id_2 = isset($data_array['picture_id2']) ? $data_array['picture_id2'] : '';

if(!empty($picture_id)||$picture_id_1 !== 0){
    $picture_api_url = rf_theme_get_product_api_url('picture', $picture_id);
}

if(!empty($picture_id_1)||$picture_id_1 !== 0){
    $picture_api_url_1 = rf_theme_get_product_api_url('picture', $picture_id_1);
}

if(!empty($picture_id_2)||$picture_id_2 !== 0){
    $picture_api_url_2 = rf_theme_get_product_api_url('picture', $picture_id_2);
}

if($newpost_check == "true"){
    // $base_idがdetail_idと一致する投稿を呼び出す
    $args = array(
        'post_type' => 'post',
        'meta_query' => array(
            array(
                'key' => 'detail_id',
                'value' => $base_id,
                'compare' => '='
            )
        ),
        'posts_per_page' => 1
    );
}else{
    // Query posts with matching connect_id
    $args = array(
        'post_type' => 'post', // または適切な投稿タイプを指定
        'meta_query' => array(
            array(
                'key' => 'connect_id',
                'value' => $base_id,
                'compare' => '='
            )
        ),
        'posts_per_page' => 1
    );
}

$query = new WP_Query($args);

if ($query->have_posts()) {
    $query->the_post();

    // Get custom field data
    $detail_id = function_exists('get_field') ? (get_field("detail_id") ?: '') : '';
    if ($detail_id === '') {
        $detail_id = isset($data_array["detail_id"]) ? $data_array["detail_id"] : $base_id;
    }
    $detail_catch = function_exists('get_field') ? (get_field("detail_catch") ?: '') : (isset($data_array["detail_catch"]) ? $data_array["detail_catch"] : '');
    $detail_comment = function_exists('get_the_content') ? (get_the_content() ?: '') : (isset($data_array["detail_comment"]) ? $data_array["detail_comment"] : '');
    $detail_standard = function_exists('get_field') ? (get_field("detail_standard") ?: '') : (isset($data_array["detail_standard"]) ? $data_array["detail_standard"] : '');
    $detail_title = function_exists('get_the_title') ? (get_the_title() ?: '') : (isset($data_array["detail_title"]) ? $data_array["detail_title"] : '');
    $product_kana = function_exists('get_field') ? (get_field("product_kana") ?: '') : '';
    $featured_image_url = get_the_post_thumbnail_url(get_the_ID(), 'large') ?: '';

    if($newpost_check == "false"){
        //旧データにだけある項目
        $detail_prise = $data_array["detail_prise"];
        $detail_prise_type = $data_array["detail_prise_type"];
    };
    


    $new_price = get_field("new_price");
    $used_price = get_field("used_price");
    $rental_price = get_field("rental_price");

    $lease_price = get_field("lease_price");
    $sale_price = get_field("sale_price");


    // URLパラメータ'type'を取得し、サニタイズする
    $type = isset($_GET['type']) ? sanitize_text_field($_GET['type']) : '';

    // 表示する変数を格納するための変数を初期化
    $display_price = null;
    $display_price_flag = null;

    // typeパラメータに基づいて価格を選択
    if ($type === 'new' && isset($new_price) && $new_price !== '') {
        $display_price = $new_price;
        $display_price_flag = 'new';
    } elseif ($type === 'used' && isset($used_price) && $used_price !== '') {
        $display_price = $used_price;
        $display_price_flag = 'used';
    } elseif ($type === 'rental' && isset($rental_price) && $rental_price !== '') {
        $display_price = $rental_price;
        $display_price_flag = 'rental';
    } elseif ($type === 'lease' && isset($lease_price) && $lease_price !== '') {
        $display_price = $lease_price;
        $display_price_flag = 'lease';
    } elseif ($type === 'sale' && isset($sale_price) && $sale_price !== '') {
        $display_price = $sale_price;
        $display_price_flag = 'sale';
    } else {
        // typeパラメータがない場合や無効な場合は、優先順位に従って価格を選択
        if (isset($new_price) && $new_price !== '') {
            $display_price = $new_price;
            $display_price_flag = 'new';
        } elseif (isset($used_price) && $used_price !== '') {
            $display_price = $used_price;
            $display_price_flag = 'used';
        } elseif (isset($rental_price) && $rental_price !== '') {
            $display_price = $rental_price;
            $display_price_flag = 'rental';
        } elseif (isset($lease_price) && $lease_price !== '') {
            $display_price = $lease_price;
            $display_price_flag = 'lease';
        } elseif (isset($sale_price) && $sale_price !== '') {
            $display_price = $sale_price;
            $display_price_flag = 'sale';
        } elseif (isset($detail_prise) && $detail_prise !== '') {
            $display_price = $detail_prise;
            $display_price_flag = 'none';
        }
    }

    // 選択された変数が存在する場合、表示する
    // if ($display_price !== null) {
    //     echo esc_html($display_price);
    // } else {
    //     echo '価格情報がありません';
    // }

    // デバッグ用（必要に応じてコメントアウトまたは削除してください）
    // echo "<br>Selected price type: " . esc_html($display_price_flag);


    if(!empty($detail_prise_type)){
        if($detail_prise_type == "レンタル料"){
            $rental_price = get_field("rental_price") ?: $data_array["detail_prise"];
        }
    }

    // Start of Selection
    if (get_field('picture_1')) {
        $picture_api_url = get_field('picture_1');
    }

    if (get_field('picture_2')) {
        $picture_api_url_1 = get_field('picture_2');
    }

    if (get_field('picture_3')) {
        $picture_api_url_2 = get_field('picture_3');
    }

    if (get_field('picture_4')) {
        $picture_api_url_3 = get_field('picture_4');
    }

    if (get_field('picture_5')) {
        $picture_api_url_4 = get_field('picture_5');
    }
    

    // Reset post data
    wp_reset_postdata();
} else {
    // No matching post found
    echo '<p>No matching product found.</p>';
}


// 現在のbase_idを取得（この値は別の箇所で設定されていると仮定）
$current_base_id = isset($base_id) ? $base_id : null;

if ($current_base_id !== null) {
    // 現在の日時を取得
    $current_time = time();

    // Cookieから既存の閲覧履歴を取得
    $history = [];
    if (isset($_COOKIE['product_history'])) {
        $decoded = json_decode(stripslashes($_COOKIE['product_history']), true);
        if (is_array($decoded)) {
            $history = $decoded;
        }
    }

    // 既存の履歴の中に同じidが存在するかチェック
    $id_exists = false;
    foreach ($history as $entry) {
        if ($entry['id'] === $current_base_id) {
            $id_exists = true;
            break;
        }
    }

    // 同じidが存在しない場合のみ、新しいエントリを作成
    if (!$id_exists) {
        // 新しい閲覧履歴エントリを作成
        $new_entry = [
            'id' => $current_base_id,
            'time' => $current_time
        ];

        // 新しいエントリを履歴に追加
        $history[] = $new_entry;
    }

    // 30日以上経過したエントリを削除
    $history = array_filter($history, function($entry) use ($current_time) {
        return ($current_time - $entry['time']) <= (30 * 24 * 60 * 60);
    });

    // 履歴を最新の10個に制限
    $history = array_slice($history, -10);

    // 履歴をJSONエンコード
    $history_json = json_encode($history);

    // Cookieに保存（30日間有効）
    setcookie('product_history', $history_json, [
        'expires' => $current_time + (30 * 24 * 60 * 60),  // 30日間
        'path' => '/',
        'secure' => true,  // HTTPSのみ
        'httponly' => true,  // JavaScriptからアクセス不可
        'samesite' => 'Strict'  // CSRF対策
    ]);
}

// ここから通常のページ処理を続ける


$gallery_images = array();
foreach (array($featured_image_url, $picture_api_url, $picture_api_url_1, $picture_api_url_2, $picture_api_url_3, $picture_api_url_4) as $image_url) {
    $image_url = trim((string) $image_url);
    if ($image_url !== '' && !in_array($image_url, $gallery_images, true)) {
        $gallery_images[] = $image_url;
    }
}

if (empty($gallery_images)) {
    $gallery_images[] = get_template_directory_uri() . '/img/common/no-image.png';
}

$price_rows = array();
$rental_tooltip_text = '短期レンタル制ですが、最低利用期間は必須。期間未満の解約は不可となります。';
$sale_tooltip_text = '中古品の特性上、傷や使用感がある場合があります。返品不可につきご注意ください。';
$price_candidates = array(
    array(
        'key' => 'new',
        'label' => '販売価格',
        'amount' => $new_price,
        'suffix' => '円（税別）',
        'has_note' => true,
        'note_text' => $sale_tooltip_text,
    ),
    array(
        'key' => 'used',
        'label' => 'アウトレット価格',
        'amount' => $used_price,
        'suffix' => '円（税別）',
        'has_note' => true,
        'note_text' => $sale_tooltip_text,
    ),
    array(
        'key' => 'rental',
        'label' => 'レンタル価格',
        'amount' => $rental_price,
        'suffix' => '円（税別）',
        'has_note' => true,
        'note_text' => $rental_tooltip_text,
    ),
    array(
        'key' => 'lease',
        'label' => '月額リース',
        'amount' => $lease_price,
        'suffix' => '円 / 月額（税別）',
        'has_note' => false,
        'note_text' => '',
    ),
    array(
        'key' => 'sale',
        'label' => '売却価格',
        'amount' => $sale_price,
        'suffix' => '円（税別）',
        'has_note' => false,
        'note_text' => '',
    ),
);

foreach ($price_candidates as $candidate) {
    if ($candidate['amount'] === '' || $candidate['amount'] === null) {
        continue;
    }
    $candidate['amount'] = preg_replace('/[^\d]/', '', (string) $candidate['amount']);
    if ($candidate['amount'] === '') {
        continue;
    }
    $price_rows[] = $candidate;
}

if (empty($price_rows) && isset($detail_prise) && $detail_prise !== '') {
    $fallback_label = !empty($detail_prise_type) ? $detail_prise_type : '販売価格';
    $fallback_note_text = '';
    if (mb_strpos($fallback_label, 'レンタル') !== false) {
        $fallback_note_text = $rental_tooltip_text;
    } elseif (mb_strpos($fallback_label, '販売') !== false || mb_strpos($fallback_label, 'アウトレット') !== false) {
        $fallback_note_text = $sale_tooltip_text;
    }
    $price_rows[] = array(
        'key' => 'fallback',
        'label' => $fallback_label,
        'amount' => preg_replace('/[^\d]/', '', (string) $detail_prise),
        'suffix' => '円（税別）',
        'has_note' => $fallback_note_text !== '',
        'note_text' => $fallback_note_text,
    );
}

$spec_rows = array();
$detail_standard_text = rf_theme_normalize_detail_plain_text($detail_standard);
foreach (preg_split('/\r\n|\r|\n/', $detail_standard_text) as $spec_line) {
    $spec_line = trim((string) $spec_line);
    if ($spec_line === '') {
        continue;
    }
    $parts = preg_split('/[:：]/u', $spec_line, 2);
    if (count($parts) === 2) {
        $spec_rows[] = array(
            'label' => trim(wp_strip_all_tags($parts[0])),
            'value' => trim(wp_strip_all_tags($parts[1])),
        );
    }
}

$detail_comment_text = rf_theme_normalize_detail_plain_text($detail_comment);
$detail_comment_html = nl2br(esc_html($detail_comment_text));
$detail_page_url = add_query_arg(
    array('detail_id' => rawurlencode((string) $base_id)),
    home_url('/detail.html')
);

if ($type !== '') {
    $detail_page_url = add_query_arg('type', rawurlencode((string) $type), $detail_page_url);
}

$detail_form_defaults = array(
    'inquiry_type' => array('borrow', 'buy'),
    'your_name' => '',
    'your_company' => '',
    'your_phone' => '',
    'your_zip' => '',
    'your_address' => '',
    'your_email' => '',
    'your_message' => '',
    'product_title' => $detail_title,
    'detail_id' => $base_id,
    'detail_url' => $detail_page_url,
);
$detail_form_values = $detail_form_defaults;
$detail_form_errors = array();
$detail_form_success = isset($_GET['inquiry_sent']) && $_GET['inquiry_sent'] === '1';
$detail_form_anchor = 'rf-product-inquiry';
$detail_form_action_url = $detail_page_url . '#' . $detail_form_anchor;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['rf_product_inquiry_submit'])) {
    $detail_form_values = rf_theme_sanitize_product_inquiry_form_data(
        wp_unslash($_POST),
        array(
            'product_title' => $detail_title,
            'detail_id' => $base_id,
            'detail_url' => $detail_page_url,
        )
    );

    if (!isset($_POST['rf_product_inquiry_nonce']) || !wp_verify_nonce($_POST['rf_product_inquiry_nonce'], 'rf_product_inquiry_' . $base_id)) {
        $detail_form_errors[] = '送信の確認に失敗しました。時間を置いて再度お試しください。';
    } else {
        $detail_form_errors = rf_theme_validate_product_inquiry_form_data($detail_form_values);
    }

    if (empty($detail_form_errors)) {
        if (rf_theme_send_product_inquiry_email($detail_form_values)) {
            wp_safe_redirect(add_query_arg('inquiry_sent', '1', remove_query_arg('inquiry_sent', $detail_page_url)) . '#' . $detail_form_anchor);
            exit;
        }

        $detail_form_errors[] = 'お問い合わせの送信に失敗しました。お手数ですが、しばらくしてから再度お試しください。';
    }
}


?>




<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php
    $rf_product_seo_title = $detail_title !== '' ? $detail_title . ' | 美容機器商品詳細 | RESPECT FORCE' : '美容機器商品詳細 | RESPECT FORCE';
    $rf_product_seo_description_source = trim(wp_strip_all_tags($detail_catch !== '' ? $detail_catch : $detail_comment));
    $rf_product_seo_description = $rf_product_seo_description_source !== ''
        ? mb_substr($rf_product_seo_description_source, 0, 120)
        : '美容機器の商品詳細ページです。価格、状態、仕様を確認し、RESPECT FORCEへお問い合わせいただけます。';
    $rf_seo = rf_theme_get_seo_text('', $rf_product_seo_title, $rf_product_seo_description);
    ?>
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

    <link rel="shortcut icon" href="img/common/favicon.ico"type="image/x-icon">
    <link rel="apple-touch-icon" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/common/faviconpng">
    <link rel="apple-touch-icon" sizes="152x152" href="img/common/favicon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>
  </head>
<body <?php body_class('rf-product-detail-page'); ?>>


    <?php get_header(); ?>

    <section class="rf-detail">
        <div class="rf-detail__inner">
            <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                <?php if (!empty($matching_categories) && isset($matching_categories[0]['id'], $matching_categories[0]['name'])) : ?>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <a href="<?php echo esc_url(get_category_link($matching_categories[0]['id'])); ?>"><?php echo esc_html($matching_categories[0]['name']); ?></a>
                <?php endif; ?>
                <span class="rf-detail__breadcrumbs-separator">›</span>
                <span><?php echo esc_html($detail_title); ?></span>
            </nav>

            <div class="rf-detail__layout">
                <div class="rf-detail__gallery">
                    <p class="rf-detail__code">商品コード：<?php echo esc_html($detail_id); ?></p>
                    <figure class="rf-detail__main-image">
                        <img
                            src="<?php echo esc_url($gallery_images[0]); ?>"
                            alt="<?php echo esc_attr($detail_title); ?>"
                            class="js-rf-detail-main-image"
                        >
                    </figure>
                    <?php if (count($gallery_images) > 1) : ?>
                        <div class="rf-detail__thumbs">
                            <?php foreach ($gallery_images as $index => $gallery_image) : ?>
                                <button
                                    type="button"
                                    class="rf-detail__thumb<?php echo $index === 0 ? ' is-active' : ''; ?>"
                                    data-image-src="<?php echo esc_url($gallery_image); ?>"
                                    aria-label="<?php echo esc_attr($detail_title . ' サムネイル ' . ($index + 1)); ?>"
                                >
                                    <img src="<?php echo esc_url($gallery_image); ?>" alt="<?php echo esc_attr($detail_title); ?>">
                                </button>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>
                </div>

                <div class="rf-detail__content">
                    <header class="rf-detail__header">
                        <h1 class="rf-detail__title"><?php echo esc_html($detail_title); ?></h1>
                        <?php if ($product_kana !== '') : ?>
                            <p class="rf-detail__subtitle"><?php echo esc_html($product_kana); ?></p>
                        <?php endif; ?>
                    </header>

                    <?php if (!empty($price_rows)) : ?>
                        <div class="rf-detail__prices">
                            <?php foreach ($price_rows as $price_row) : ?>
                                <div class="rf-detail__price-row">
                                    <div class="rf-detail__price-label"><?php echo esc_html($price_row['label']); ?></div>
                                    <div class="rf-detail__price-value">
                                        <span><?php echo esc_html(number_format((int) $price_row['amount'])); ?></span>
                                        <small><?php echo esc_html($price_row['suffix']); ?></small>
                                        <?php if (!empty($price_row['has_note']) && !empty($price_row['note_text'])) : ?>
                                            <span class="rf-detail__price-hint" tabindex="0" aria-label="<?php echo esc_attr($price_row['note_text']); ?>" data-tooltip="<?php echo esc_attr($price_row['note_text']); ?>"></span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <p class="rf-detail__notice">※別途、配送費・付属品（一部商品のみ）費用がかかります。</p>

                    <?php if ($detail_catch !== '') : ?>
                        <p class="rf-detail__catch"><?php echo esc_html($detail_catch); ?></p>
                    <?php endif; ?>

                    <section class="rf-detail__section">
                        <h2 class="rf-detail__section-title">商品PRコメント</h2>
                        <div class="rf-detail__comment"><?php echo $detail_comment_html; ?></div>
                    </section>

                    <section class="rf-detail__section">
                        <h2 class="rf-detail__section-title">製品規格</h2>
                        <div class="rf-detail__specs">
                            <?php foreach ($spec_rows as $spec_row) : ?>
                                <dl class="rf-detail__spec-row">
                                    <dt><?php echo esc_html($spec_row['label']); ?></dt>
                                    <dd><?php echo esc_html($spec_row['value']); ?></dd>
                                </dl>
                            <?php endforeach; ?>
                        </div>
                    </section>

                    <section class="rf-detail__contact" id="<?php echo esc_attr($detail_form_anchor); ?>">
                        <h2 class="rf-detail__contact-title">この商品について問い合わせする</h2>
                        <?php if ($detail_form_success) : ?>
                            <div class="rf-detail-form__notice is-success">
                                お問い合わせを送信しました。内容を確認のうえ、担当者よりご連絡いたします。
                            </div>
                        <?php endif; ?>
                        <?php if (!empty($detail_form_errors)) : ?>
                            <div class="rf-detail-form__notice is-error">
                                <p>入力内容を確認してください。</p>
                                <ul class="rf-detail-form__error-list">
                                    <?php foreach ($detail_form_errors as $detail_form_error) : ?>
                                        <li><?php echo esc_html($detail_form_error); ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                        <form action="<?php echo esc_url($detail_form_action_url); ?>" method="post" class="rf-detail-form">
                            <?php wp_nonce_field('rf_product_inquiry_' . $base_id, 'rf_product_inquiry_nonce'); ?>
                            <input type="hidden" name="rf_product_inquiry_submit" value="1">

                            <div class="rf-detail-form__row rf-detail-form__row--type">
                                <div class="rf-detail-form__label-wrap">
                                    <label class="rf-detail-form__label">お問い合わせ内容</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <div class="rf-detail-form__checkboxes">
                                    <label class="rf-detail-form__choice">
                                        <input type="checkbox" name="inquiry_type[]" value="borrow" <?php checked(in_array('borrow', $detail_form_values['inquiry_type'], true)); ?>>
                                        <span>借りたい</span>
                                    </label>
                                    <label class="rf-detail-form__choice">
                                        <input type="checkbox" name="inquiry_type[]" value="buy" <?php checked(in_array('buy', $detail_form_values['inquiry_type'], true)); ?>>
                                        <span>買いたい</span>
                                    </label>
                                    <label class="rf-detail-form__choice">
                                        <input type="checkbox" name="inquiry_type[]" value="lend" <?php checked(in_array('lend', $detail_form_values['inquiry_type'], true)); ?>>
                                        <span>貸したい</span>
                                    </label>
                                    <label class="rf-detail-form__choice">
                                        <input type="checkbox" name="inquiry_type[]" value="sell" <?php checked(in_array('sell', $detail_form_values['inquiry_type'], true)); ?>>
                                        <span>売りたい</span>
                                    </label>
                                </div>
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-name" class="rf-detail-form__label">お名前</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <input id="rf-detail-name" name="your_name" type="text" class="rf-detail-form__input" placeholder="山田 花子" value="<?php echo esc_attr($detail_form_values['your_name']); ?>" required>
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-company" class="rf-detail-form__label">サロン名/社名</label>
                                </div>
                                <input id="rf-detail-company" name="your_company" type="text" class="rf-detail-form__input" value="<?php echo esc_attr($detail_form_values['your_company']); ?>">
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-phone" class="rf-detail-form__label">携帯電話番号</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <div class="rf-detail-form__field-wrap">
                                    <input id="rf-detail-phone" name="your_phone" type="tel" class="rf-detail-form__input" placeholder="090XXXX1234" value="<?php echo esc_attr($detail_form_values['your_phone']); ?>" required>
                                    <p class="rf-detail-form__help">※11桁の電話番号を入力してください。</p>
                                </div>
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-zip" class="rf-detail-form__label">郵便番号</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <input id="rf-detail-zip" name="your_zip" type="text" class="rf-detail-form__input" placeholder="1001234" value="<?php echo esc_attr($detail_form_values['your_zip']); ?>" inputmode="numeric" autocomplete="postal-code" required>
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-address" class="rf-detail-form__label">住所</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <input id="rf-detail-address" name="your_address" type="text" class="rf-detail-form__input" placeholder="東京都中野区新井5丁目" value="<?php echo esc_attr($detail_form_values['your_address']); ?>" autocomplete="street-address" required>
                            </div>

                            <div class="rf-detail-form__row">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-email" class="rf-detail-form__label">メールアドレス</label>
                                    <span class="rf-detail-form__required">(必須)</span>
                                </div>
                                <div class="rf-detail-form__field-wrap">
                                    <input id="rf-detail-email" name="your_email" type="email" class="rf-detail-form__input" value="<?php echo esc_attr($detail_form_values['your_email']); ?>" required>
                                    <p class="rf-detail-form__help">※ご入力いただいたメールアドレス宛に返信いたします。<br>誤入力がありますと返信が届きませんのでご注意ください。</p>
                                </div>
                            </div>

                            <div class="rf-detail-form__row rf-detail-form__row--textarea">
                                <div class="rf-detail-form__label-wrap">
                                    <label for="rf-detail-message" class="rf-detail-form__label">ご質問・ご要望</label>
                                </div>
                                <textarea id="rf-detail-message" name="your_message" class="rf-detail-form__textarea"><?php echo esc_textarea($detail_form_values['your_message']); ?></textarea>
                            </div>

                            <div class="rf-detail-form__actions">
                                <button type="submit" class="rf-detail-form__submit">送信する</button>
                            </div>
                            <p class="rf-detail-form__footnote">※メールが届かない場合は迷惑メールフォルダをご確認ください。</p>
                        </form>
                    </section>
                </div>
            </div>
        </div>
    </section>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>


    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var mainImage = document.querySelector('.js-rf-detail-main-image');
        var thumbs = document.querySelectorAll('.rf-detail__thumb');
        var zipInput = document.getElementById('rf-detail-zip');
        var addressInput = document.getElementById('rf-detail-address');
        var lastFetchedZip = '';

        thumbs.forEach(function (thumb) {
            thumb.addEventListener('click', function () {
                var src = thumb.getAttribute('data-image-src');
                if (!mainImage || !src) {
                    return;
                }
                mainImage.setAttribute('src', src);
                thumbs.forEach(function (item) {
                    item.classList.remove('is-active');
                });
                thumb.classList.add('is-active');
            });
        });

        if (zipInput && addressInput) {
            var activeZipRequest = null;
            var fetchAddressFromZip = function () {
                var zip = zipInput.value.replace(/[^\d]/g, '');
                if (zip.length !== 7 || zip === lastFetchedZip) {
                    return;
                }

                if (activeZipRequest && activeZipRequest.script && activeZipRequest.script.parentNode) {
                    activeZipRequest.script.parentNode.removeChild(activeZipRequest.script);
                }
                if (activeZipRequest && activeZipRequest.callbackName && window[activeZipRequest.callbackName]) {
                    delete window[activeZipRequest.callbackName];
                }

                var callbackName = 'rfZipcloudCallback_' + zip + '_' + Date.now();
                var script = document.createElement('script');

                activeZipRequest = {
                    callbackName: callbackName,
                    script: script
                };

                window[callbackName] = function (data) {
                    if (script.parentNode) {
                        script.parentNode.removeChild(script);
                    }
                    delete window[callbackName];

                    if (!data || !Array.isArray(data.results) || !data.results[0]) {
                        return;
                    }

                    var result = data.results[0];
                    var nextAddress = [result.address1, result.address2, result.address3]
                        .filter(Boolean)
                        .join('');

                    if (nextAddress !== '') {
                        addressInput.value = nextAddress;
                        lastFetchedZip = zip;
                    }
                };

                script.src = 'https://zipcloud.ibsnet.co.jp/api/search?zipcode=' + encodeURIComponent(zip) + '&callback=' + encodeURIComponent(callbackName);
                script.async = true;
                script.onerror = function () {
                    if (script.parentNode) {
                        script.parentNode.removeChild(script);
                    }
                    if (window[callbackName]) {
                        delete window[callbackName];
                    }
                };

                document.body.appendChild(script);
            };

            zipInput.addEventListener('input', fetchAddressFromZip);
            zipInput.addEventListener('blur', fetchAddressFromZip);
        }
    });
    </script>




<?php wp_footer(); ?>
</body>
</html>
