<?php
/*
Template Name:サロンお問い合わせ
*/
?>


<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('contact_resister'); ?>
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
<body>


    <?php get_header(); ?>



    <header class="u-bg-title-sub u-pb-80">
        <div class="p-center p-flex u-pb-30 u-pt-10">
            <ul class="p-flex c-breadcrumbs --flex-sp">
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><span>お問合せ</span></li>
            </ul>
        </div>
        <h1 class="u-text-center">お問合せ</h1>
    </header>


    <section class="u-pb-80 u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">

            <div class="u-pb-40">
                <p class="p-text-base">
                    お問い合わせ、資料請求は、下記フォームをご利用ください。<br>
                    フォームで送信ができない場合は、お手数ですが下記項目をご記入のうえ、メールアドレスまでメールをお送り下さい。<br>
                    いただいたお問い合わせは、追って弊社よりご連絡申し上げます。
                </p>
            </div>

            <div>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>サロン名<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="株式会社リスペクトフォース">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>担当者名<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="例：山田太郎">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>住所</dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="例：企画部 / 主任">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>電話番号<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="株式会社リスペクトフォース">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>メール<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="株式会社リスペクトフォース">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>E-mail<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="株式会社リスペクトフォース">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>備考</dt>
                    <dd>
                        <textarea name="" id="" class="c-textarea"></textarea>
                    </dd>
                </dl>
                <div class="u-pt-40 u-text-center">
                    <button class="c-button --style-3">送信</button>
                </div>
            </div>

        </div>
    </section>








   






    



    
    
    <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>


    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>


















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
    $('.p-sp-gnav').toggleClass('is-active');
    if ($(this).hasClass('active')) {
      $('.u-fix-top').css('position', 'fixed');
    } else {
      $('.u-fix-top').css('position', 'sticky');
    }
    return false;
  });
});
    </script>




<?php wp_footer(); ?>
</body>
</html>
