<?php
/*
Template Name:リメイク
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('remake'); ?>
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
                <li><span>Re・Make</span></li>
            </ul>
        </div>
        <h1 class="u-text-center">借りたいと貸したいを結ぶマッチングサイト<br>「Re・Make」</h1>
    </header>


    <section class="u-pb-80 u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">

            <header class="u-pb-20 u-text-center">
                <h2 class="c-title --style-8">話題の「シェアサロン」ってどんなの？</h2>
            </header>

            <div class="u-pb-40 u-pt-sp-40">
                <p class="u-text-center u-font-size-18">
                    近年、カーシェアやシェアオフィスといった<br>
                    サロンの空きスペースを複数の人でシェアするというサービスが注目されています。<br>
                    Re・Makeでは美容業界に特化した
                </p>
            </div>
        </div>

<!-- 
        <div class="p-flex p-center u-pb-40 u-pt-20">
            <div class="u-width-n-580 u-sp-pb-40">
                <h3 class="c-title --style-9">Re・Makeとは？</h3>
                <div>
                    <p class="u-font-size-16">
                        「空きスペースを活用し、施術提供したいしたいフリーランサー（利用者) 」と「空きスペースを貸したい（店舗)をマッチングするサービスを2010年から提供しています。
                    </p>
                </div>
            </div>
            <figure class="u-width-580">
                <img src="<?php bloginfo('template_directory'); ?>/img/common/img_recredit_1.png" alt="">
            </figure>
        </div> -->



        <div class="p-center --width-894">

            <div class="p-flex --align-center">
                

                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">空きスペースを<br>貸したい店舗</dt>
                    </dl>
                </div>

                <div class="u-font-size-80 u-font-weight-bold u-color-blue u-text-center">×</div>

                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">
                            空きスペースを借りたいフリーランス
                        </dt>
                        <!-- <dd class="u-font-size-48 u-font-weight-bold">
                            <span class="u-font-size-100">0</span>円
                        </dd> -->
                    </dl>
                </div>

            </div>
            <!-- <div class="u-font-size-12 u-pt-sp-20">※決済額が6千円以下の場合は[7％]となります。</div> -->


            <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-text-center">
                をマッチングするサービスを<br><span class="u-font-size-68 u-font-family-oswald u-color-blue ">2010年</span>から<br class="u-sp-only">提供しています。
            </div>

        </div>
    </section>



    <section class="u-bg-blue-2 u-color-black u-pb-100">
        <header class="u-pb-20 u-text-center u-pt-80 u-pb-50 u-sp-pt-80 u-sp-mb-40">
            <h2 class="c-title --style-8">Re・Makeの特徴</h2>
        </header>
        <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-pb-30 u-text-center u-sp-pt-60">
            売上100％保証＆複数店舗が利用できる
        </div>
        <ul class="c-list p-center --width-923">
            <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">顧客の施術代金（売上）は利用者が100％回収！</li>
            <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">顧客の希望に合わせて複数店舗を利用できる！</li>
            <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">最短時間（60分）～長期（月極）で利用可能！</li>
            <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">空きスペース以外に最新美容機器も利用可能！</li>
       </ul>
       <div>
            
       </div>
       
    </section>



    <section>
        <div class="u-bg-blue-3 u-pt-80 u-pb-80 u-sp-pt-80">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-50 p-center">Re・Makeは利用可能なサロンが豊富</h2>
            <div class="p-flex p-center --align-center">
                <div class="u-width-n-580">
                    <div>
                        <h3 class="c-title --style-9">シェアサロンとして利用可能な店舗は"1500ヶ所"以上</h3>
                        <p class="u-font-size-16 u-sp-pb-60">
                            利用者の施術を受けたい「顧客」の「要望/用途」に合わせて「複数のサロン」を利用することが可能です。開業ではなく『賢くシェア』する時代！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_salon_1500_1.png" alt="">
                </figure>
            </div>
        </div>

    </section>



    <!-- <section class="u-bg-blue">
        <div class="u-pt-80 p-center u-pb-80 u-sp-pt-80">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40">全ての<span class="u-font-size-50">“販売方法”</span>で<br class="u-sp-only">活用できます。</h2>
            <ul class="c-box-list u-gap-20 p-flex --column-5 --wrap u-text-center --flex-sp --sp-column-3 u-font-size-16">
                <li>チケット<br>販売</li>
                <li>コース<br>販売</li>
                <li>回数券販売</li>
                <li>ショッピング<br>ローン</li>
                <li>物販販売</li>
                <li>個人事業主<br>事業化</li>
                <li>スクール<br>会費</li>
                <li>月謝制度</li>
                <li>都度払い</li>
                <li>個人店舗<br>利用可</li>
                <li>分割払い</li>
                <li>定額制度</li>
                <li>役務販売</li>
                <li>サブスク制度</li>
                <li>セミナー会費</li>
            </ul>
        </div>
    </section> -->


    



    <section>
        <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>
        <div class="u-bg-blue-2 u-color-black">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-sp-pt-80">
                <h2 class="c-title --style-8">『シェアサロン』と『レンタルサロン』の違い</h2>
            </header>
            <div class="u-pb-40 u-pt-sp-40 p-center --width-894">
                <p class="u-text-center u-font-size-18">
                    シェアサロンとは通常営業している店舗の空きスペース(セット面/エステベッド/リクライニングチェアetc...)を、短時間〜長期(月極)に渡ってご利用できるサービスのことです。
                </p>
            </div>
            <div class="p-flex p-center --align-center u-pb-40 u-pt-20">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">1.設備が整っている</h3>
                    <div>
                        <p class="u-font-size-16">
                            レンタルサロンでは、機材や設備等が不足しているため利用者自身で毎回機材や設備（消耗品等）を持参しないといけません。毎回、荷物を持参頂きます。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_1.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center --align-center --reverse u-pb-40">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">2.スタッフが在中しているため不審者がいない</h3>
                    <div>
                        <p class="u-font-size-16">
                            レンタルサロンは、管理人が不在且つ、不特定多数の方が利用しているため、無断延長が多発し、前の利用者と次の利用者などのダブルブッキングが発生する可能性があり顧客の信用を失うことになります。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_2.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center --align-center u-pb-40">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">3.通常営業であるため常に店内は清潔</h3>
                    <div>
                        <p class="u-font-size-16">
                            レンタルサロンは、前の利用者が後片付けもせずに退店するケースが多く、ゴミが散在しています。さらにトイレ掃除も１ヵ月に1度ペースのため共有のトイレが臭かったり汚かったりします。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_3.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center --align-center --reverse u-pb-100">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">4.通常営業のため保健所許可登録が完備</h3>
                    <div>
                        <p class="u-font-size-16">
                            レンタルサロンは、不特定多数の利用者を目的としているため保健所許可への登録が行われておりません。施術によっては、レンタルサロンでの施術は違法となる可能性があります。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_4.png" alt="">
                </figure>
            </div>

        </div>
    </section>



    <section>
        <div class="u-pb-100 u-sp-pt-60">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-mb-20">
                <h2 class="c-title --style-8">『シェアサロン』と『業務委託/面貸し』の違い</h2>
            </header>
            <div class="p-flex p-center u-text-center u-gap-30 --column-2">
                <article class="u-text-center c-box u-sp-mb-40">
                    <div class="u-font-size-22 u-font-weight-bold u-pb-30">業務委託とは…</div>
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/img_recredit_service_4.png" alt=""></figure>
                    <div class="u-font-size-16 u-pb-20 u-text-left u-pt-20">集客を自身で行い、経理業務などは行わず、勤務日数や出勤時間が決まっています。給与（手数料）は、完全歩合となるため自身で施術した総売上の40％～60％が一般的数値となります。 </div>
                    <div class="u-font-size-16 u-text-left">例）毎月50万円の売上を上げていた場合20万円～ 30万円が給与となります。</div>
                </article>
                <article class="u-text-center c-box u-sp-mb-40">
                    <div class="u-font-size-22 u-font-weight-bold u-pb-30">面貸しとは…</div>
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/img_recredit_service_5.png" alt=""></figure>
                    <div class="u-font-size-16 u-pb-20 u-text-left u-pt-20">サロン営業時間外（定休日）のみスペースを貸し出す制度です。業務委託同様、集客をしたり経理業務などは行わず借りれる日数や貸出し時間が決められます。給与（手数料）は、完全歩合となるため自身で施術した総売上の45％～65％が一般的数値となります。</div>
                    <div class="u-font-size-16 u-text-left">例）毎月30万円の売上を上げていた場合15万円～ 20万円が給与となります。</div>
                </article>
            </div>
            <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-pb-30 u-text-center">
                『Re・Make』では、月給100万円も夢じゃない。
            </div>
        </div>
    </section>




    <section class="u-bg-blue u-pt-100 u-pb-180">

        <div>

            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-60 p-center">「Re・Make」利用方法の流れ</h2>
            
            <div class="p-center p-flex u-bg-white u-color-black u-mb-40">
                <figure class="u-all-zero u-width-360 u-position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_1.png" alt="">
                    <div class="u-position-absolute u-left-50pc u-bottom-n-50 u-z-100"><img src="<?php bloginfo('template_directory'); ?>/img/common/arrow_standard.svg" alt=""></div>
                </figure>
                <div class="u-width-n-360 u-p-30 u-pl-50 u-pr-50">
                    <h2 class="u-pb-20 c-title  --style-11 u-height-auto">お問い合わせ</h2>
                    <p>
                        サイトから『利用したいサロンページ』よりお問合せください。<br>
                        ※ 利用頻度が多いサロンのみ問合せください。
                    </p>
                </div>
            </div>
            


            <div class="p-center p-flex u-bg-white u-color-black u-mb-40">
                <figure class="u-all-zero u-width-360 u-position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_2.png" alt="">
                    <div class="u-position-absolute u-left-50pc u-bottom-n-50 u-z-100"><img src="<?php bloginfo('template_directory'); ?>/img/common/arrow_standard.svg" alt=""></div>
                </figure>
                <div class="u-width-n-360 u-p-30 u-pl-50 u-pr-50">
                    <h2 class="u-pb-20 c-title --style-11 u-height-auto">個人面談</h2>
                    <p>
                        弊社へ来社頂き『個人面談』を行います。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40">
                <figure class="u-all-zero u-width-360 u-position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_3.png" alt="">
                    <div class="u-position-absolute u-left-50pc u-bottom-n-50 u-z-100"><img src="<?php bloginfo('template_directory'); ?>/img/common/arrow_standard.svg" alt=""></div>
                </figure>
                <div class="u-width-n-360 u-p-30 u-pl-50 u-pr-50">
                    <h2 class="u-pb-20 c-title --style-11 u-height-auto">内見</h2>
                    <p>
                        面談終了後日、『利用したいサロン見学（内見）』を行います。<br>
                        利用したいサロンの最寄駅で待ち合せとなります。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40">
                <figure class="u-all-zero u-width-360 u-position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_4.png" alt="">
                    <div class="u-position-absolute u-left-50pc u-bottom-n-50 u-z-100"><img src="<?php bloginfo('template_directory'); ?>/img/common/arrow_standard.svg" alt=""></div>
                </figure>
                <div class="u-width-n-360 u-p-30 u-pl-50 u-pr-50">
                    <h2 class="u-pb-20 c-title --style-11 u-height-auto">予約依頼</h2>
                    <p>
                        利用者のLINEより『予約依頼』を送信ください。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40">
                <figure class="u-all-zero u-width-360 u-position-relative">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_5.png" alt="">
                </figure>
                <div class="u-width-n-360 u-p-30 u-pl-50 u-pr-50">
                    <h2 class="u-pb-20 c-title --style-11 u-height-auto">お支払い</h2>
                    <p>
                        利用したサロンの『場所代金（使用料）』をLINEへお送りします。<br>
                        お近くのコンビニエンストアにて使用料をお支払いください。
                    </p>
                </div>
            </div>

            

        </div>
    </section>




    <section class="u-n-mt-100">

        <div class="p-center p-flex --column-2 u-gap-30">
            <div class="c-line-cv --half u-sp-mb-40">
                <h2>サロンを貸したい方</h2>
                <a href="https://lin.ee/imBjCR7" target="_blank">公式LINEで<br class="u-sp-only">お問合せ</a>
            </div>
            <div class="c-line-cv --half">
                <h2>サロンを借りたい方</h2>
                <a href="https://lin.ee/O4wEARD" target="_blank">公式LINEで<br class="u-sp-only">お問合せ</a>
            </div>
        </div>

    </section>

    <div class="u-pt-80 u-pb-80">
        <?php include 'product_history.php'; ?>
    </div>
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
