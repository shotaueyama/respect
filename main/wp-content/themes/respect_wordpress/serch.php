

<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('search'); ?>
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

  </head>
<body>


    <?php get_header(); ?>


    <header class="p-center u-pt-60 u-pb-20 u-pt-sp-0">
        <h2 class="c-title --style-3"><span>商品名が表示される</span></h2>
    </header>



    <div class="p-flex p-center --text-left">
        <div class="u-font-size-14 u-font-weight-bold u-pr-20 u-pb-20-sp">全<span class="u-font-size-20 u-color-blue">56</span>商品</div>
        <dl class="p-flex --align-center --flex-sp">
            <dt class="u-font-size-20 u-font-weight-bold u-pr-20">絞り込み :</dt>
            <dd>
                <ul class="p-flex --align-center --flex-sp">
                    <li class="u-pr-20">
                        <input type="checkbox" id="new-equipment" class="equipment-filter"><label for="new-equipment">新品機器</label>
                    </li>
                    <li class="u-pr-20">
                        <input type="checkbox" id="used-equipment" class="equipment-filter"><label for="used-equipment">中古機器</label>
                    </li>
                    <li>
                        <input type="checkbox" id="rental-equipment" class="equipment-filter"><label for="rental-equipment">レンタル機器</label>
                    </li>
                </ul>
            </dd>
        </dl>
    </div>

    


    <section class="u-pt-40 u-pb-140">
        <div class="p-center">
            <div class="p-flex --column-5 u-gap-30 u-pb-0 --sp-column-2 --wrap">


                
            <?php
// Start the WordPress loop
if (have_posts()) :
    while (have_posts()) : the_post();
        // Get the connect_id from ACF
        $connect_id = get_field('connect_id');
        
        if ($connect_id) {
            // Fetch product data from API
            $product_api_url = rf_theme_get_product_api_url('product', $connect_id);
            $response = wp_remote_get($product_api_url);
            // レスポンスが正常な場合、JSONを配列に変換
            if (!is_wp_error($response) && $response['response']['code'] === 200) {
                $product_data = json_decode(wp_remote_retrieve_body($response), true);
            } else {
                $product_data = array(); // エラーの場合は空の配列を設定
            }

            //旧データにだけある項目
            $detail_prise = $product_data["detail_prise"];
            $detail_prise_type = $product_data["detail_prise_type"];
            
            //新データにだけある項目
            $new_price = get_field("new_price");
            $used_price = get_field("used_price");


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
            } else {
                // typeパラメータがない場合や無効な場合は、優先順位に従って価格を選択
                if (isset($detail_prise) && $detail_prise !== '') {
                    $display_price = $detail_prise;
                    $display_price_flag = 'none';
                } elseif (isset($new_price) && $new_price !== '') {
                    $display_price = $new_price;
                    $display_price_flag = 'new';
                } elseif (isset($used_price) && $used_price !== '') {
                    $display_price = $used_price;
                    $display_price_flag = 'used';
                } elseif (isset($rental_price) && $rental_price !== '') {
                    $display_price = $rental_price;
                    $display_price_flag = 'rental';
                }
            }
            
            if (!is_wp_error($response) && wp_remote_retrieve_response_code($response) === 200) {
                $product_data = json_decode(wp_remote_retrieve_body($response), true);
                
                if ($product_data && isset($product_data['picture_id']) && isset($product_data['detail_id'])) {
                    // Fetch image data from API
                    $image_api_url = rf_theme_get_product_api_url('picture', $product_data['picture_id']);
                    $image_response = wp_remote_get($image_api_url);
                    
                    if (!is_wp_error($image_response) && wp_remote_retrieve_response_code($image_response) === 200) {
                        $image_data = wp_remote_retrieve_body($image_response);
                        
                        // Convert BLOB to base64 for inline image
                        $base64_image = base64_encode($image_data);
                        $image_src = "data:image/jpeg;base64," . $base64_image;
                        
                        // Construct the detail page URL
                        $detail_url = rf_theme_get_product_detail_url($product_data['detail_id'], get_permalink());
                        
                        // Output the product box
                        ?>
                        <article class="p-product-box">
                            <figure>
                                <a href="<?php echo esc_url($detail_url); ?>">
                                    <img src="<?php echo esc_attr($image_src); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                                </a>
                            </figure>
                            <div class="u-color-blue">
                                <h3 class="c-title --style-2"><?php the_title(); ?></h3>
                                <dl class="p-flex --text-left --flex-sp">
                                    <dt class="--price-title">
                                        サロン<br>
                                        価　格
                                    </dt>
                                    <dd class="--price">
                                        <?php echo number_format($display_price); ?><span>円</span>
                                    </dd>
                                </dl>
                            </div>
                        </article>
                        <?php
                    } else {
                        error_log('Failed to fetch image data for product ID: ' . $connect_id);
                    }
                } else {
                    error_log('Invalid product data for product ID: ' . $connect_id);
                }
            } else {
                error_log('Failed to fetch product data for product ID: ' . $connect_id);
            }
        }
    endwhile;
endif;
?>

                
            </div>
        </div>
    </section>
    <?php include 'other_service.php'; ?>




    



    <section class="u-bg-blue-2 u-mt-80">
        <div class="p-flex u-color-black p-center p-footer-nav u-pt-60 u-pb-60 u-gap-10 --sp-column-2 --sp-wrap">
            <div class="--column-single">
                <h2>フェイシャル・美顔マシン</h2>
                <ul>
                    <li><a href="#">スチーマー</a></li>
                    <li><a href="#">エレクトロポレーション</a></li>
                    <li><a href="#">ライトセラピー</a></li> 
                    <li><a href="#">ピーリング・フェイシャル器</a></li>
                    <li><a href="#">肌分析器</a></li>
                    <li><a href="#">HIFU（ハイフ）</a></li>
                    <li><a href="#">ヘッドスパマシン</a></li>
                    <li><a href="#">ホワイトニングケアマシン</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>ボディ・痩身マシン</h2>
                <ul>
                    <li><a href="#">クライオマシン</a></li>
                    <li><a href="#">HIFU（ハイフ）</a></li>
                    <li><a href="#">コラーゲンマシン</a></li>
                    <li><a href="#">キャビテーション</a></li>
                    <li><a href="#">ラジオ波</a></li>
                    <li><a href="#">光痩身マシン</a></li>
                    <li><a href="#">痩身複合マシン</a></li>
                    <li><a href="#">エンダモロジー吸引マシン</a></li>
                    <li><a href="#">低周波/EMS</a></li>
                    <li><a href="#">多機能スリミングマシン</a></li>
                    <li><a href="#">電磁パルスマシン</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>脱毛器</h2>
                <ul>
                    <li><a href="#">複合脱毛器</a></li>
                    <li><a href="#">脱毛</a></li>
                    <li><a href="#">フォト美顔</a></li>
                    <li><a href="#">バストUP</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>健康関連マシン</h2>
                <ul>
                    <li><a href="#">高気圧酸素カプセル/酸素バー</a></li>
                    <li><a href="#">ゲルマニウム温浴器</a></li>
                    <li><a href="#">岩盤浴カプセルベッド/マット</a></li>
                    <li><a href="#">遠赤カプセル ドーム/サウナ</a></li>
                    <li><a href="#">ウォーターベッド</a></li>
                    <li><a href="#">ヴィーシーシャワー</a></li>
                    <li><a href="#">血流血液マシン</a></li>
                    <li><a href="#">測定マシン</a></li>
                    <li><a href="#">デトックス フットバス</a></li>
                    <li><a href="#">タンニングマシン</a></li>
                    <li><a href="#">体組成計マシン</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>エクササイズマシン</h2>
                <ul>
                    <li><a href="#">骨盤エクササイズマシン</a></li>
                    <li><a href="#">マッサージマシン</a></li>
                    <li><a href="#">振動トレーニングマシン</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>癒し関連マシン</h2>
                <ul>
                    <li><a href="#">アロマディフューザー</a></li>
                    <li><a href="#">マイナスイオン発生器</a></li>
                    <li><a href="#">ヘッドスパマシン</a></li>
                    <li><a href="#">スチームミストサウナ</a></li>
                    <li><a href="#">リラクゼーションカプセル</a></li>
                    <li><a href="#">カプセル/チェア型スパマシン</a></li>
                    <li><a href="#">ヒーリングベッド</a></li>
                </ul>
            </div>
            <div class="--column-single">
                <h2>その他マシン</h2>
                <ul>
                    <li><a href="#">フェイシャルボディベッド</a></li>
                    <li><a href="#">機能性浄水器</a></li>
                    <li><a href="#">酸素水サーバー</a></li>
                </ul>
            </div>
        </div>


    </section>



    <footer class="u-bg-blue">
       <div class="p-center p-flex u-pt-60 u-pb-60">
            <div class="p-flex --text-left --align-center --flex-sp">
                <div class="u-pr-20">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/logo_footer.svg" alt="">
                </div>
                <div>
                    <p>
                        〒165-0026<br>
                        東京都中野区新井5-27-5 MONビル2・3F
                    </p>
                </div>
            </div>
            <div class="u-pt-20">
                <ul class="p-flex c-footer-nav --flex-sp --sp-wrap">
                    <li><a href="#">メール問合せ</a></li>
                    <li><a href="#">会社概要</a></li>
                    <li><a href="#">プライバシーポリシー</a></li>
                    <li><a href="#">古物営業法に基づく表記</a></li>
                </ul>
                <ul class="p-flex --text-right --flex-sp c-sp-sns-bottom --text-right">
                    <li><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/sns_icon_x.svg" alt=""></a></li>
                    <li class="u-pl-10"><a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/sns_icon_insta.svg" alt=""></a></li>
                </ul>
            </div>
       </div>
       <div class="u-text-center u-bg-blue-3 u-font-size-12 u-pt-40 u-pb-40">
            <p>All Copy Rights Reserved 2008 Respect-Force Corporation.</p>
       </div>
    </footer>


















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>

document.addEventListener('DOMContentLoaded', function() {
    var thumbSwiper = new Swiper('.thumb-swiper', {
        spaceBetween: 10,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
    });

    var mainSwiper = new Swiper('.main-swiper', {
        spaceBetween: 10,
        slidesPerView: "auto",
        centeredSlides: true,
        spaceBetween: 30,
        loop: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        thumbs: {
            swiper: thumbSwiper,
        },
    });
});

$(function(){
  $('.btn-trigger').on('click', function() {
    $(this).toggleClass('active');
    return false;
  });
});
    </script>





</body>
</html>
