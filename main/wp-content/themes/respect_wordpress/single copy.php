<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text(); ?>
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


    <header>
        <div class="u-text-center u-bg-blue u-pt-10 u-pb-10 u-font-size-24">
            2098円(税込)以上基本送料無料！17時までのご注文で当日出荷
        </div>
        <div class="p-flex u-pt-30 u-pb-30 u-pt-sp-20 u-pb-sp-10 --align-center --flex-sp --justify-between p-center">
            
            <div class="u-pl-20 u-pr-20">
                <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/logo_1.png" alt="RESPECT FORCE" class="c-logo-main"></a>
            </div>
            <div class="p-flex p-header-serch --text-center --align-center p-flex u-pc-only-flex">
                <input type="text" class="p-search-input u-mr-10" placeholder="キーワード、商品名などを入力してください。">
                <button class="c-button --blue u-font-size-24 u-bg-blue"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_search.svg" alt="" class="u-mr-10 u-width-24">検索</button>
            </div>

            <div class="u-pl-20 u-pr-20 p-flex --flex-sp">
                <div>
                    <div class="p-header-phone-number u-sp-text-align-right">
                        <span>TEL : </span><span class="--number">03-6457-4757</span>
                    </div>
                    <div class="p-header-phone-time u-sp-text-align-right">
                        平日9:30～18:00、土曜・祝日 9:30～15:30(日曜除く)
                    </div>
                </div>
                <div class="u-p-20 u-sp-only">
                    <div class="btn-trigger" id="btn01">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="p-flex p-header-serch --text-center --align-center p-flex --flex-sp u-pt-10 u-pb-30 u-sp-only">
            <input type="text" class="p-search-input u-mr-10" placeholder="キーワード、商品名などを入力してください。">
            <button class="c-button --blue u-font-size-24 u-bg-blue">
                <img src="<?php bloginfo('template_directory'); ?>/img/common/icon_search.svg" alt="" class="u-mr-10">検索
            </button>
        </div>
    </header>



    <nav class="u-pc-only u-border-bottom-1px-gray">
        <ul class="p-flex --text-center u-gap-30 p-gnav u-pb-30">
            <li>フェイシャル・美顔マシン</li>
            <li>ボディ・痩身マシン</li>
            <li>脱毛器</li>
            <li>エクササイズマシン</li>
            <li>その他マシン</li>
        </ul>
    </nav>

    <div class="p-center p-flex u-pb-40 u-pt-20">
        <ul class="p-flex c-breadcrumbs --flex-sp">
            <li><a href="#">トップ</a></li>
            <li><a href="#">癒し・健康関連食品</a></li>
            <li><a href="#">遺伝子検査キット</a></li>
        </ul>
        <ul class="p-flex u-gap-10 --flex-sp u-sp-pt-40">
            <li><a href="#" class="c-button --style-2">新品価格</a></li>
            <li><a href="#" class="c-button --style-2">中古価格</a></li>
            <li><a href="#" class="c-button --style-2">レンタル価格</a></li>
        </ul>
    </div>

    <div class="p-center p-flex u-gap-50">
        <div class="u-width-550 u-sp-pb-40">
            <p class="u-sp-pb-20 u-font-size-14">商品コード：〇〇〇</p>
            <figure class="u-pb-20 c-product-figure">
                <img src="<?php bloginfo('template_directory'); ?>/img/common/img_product_1.png" alt="">
            </figure>
            <ul class="p-flex --column-5 --text-left c-thumb-list u-pt-10 --flex-sp">
                <li><img src="<?php bloginfo('template_directory'); ?>/img/common/img_product_thumb_1.png" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/common/img_product_thumb_2.png" alt=""></li>
                <li><img src="<?php bloginfo('template_directory'); ?>/img/common/img_product_thumb_3.png" alt=""></li>
            </ul>
        </div>
        <div class="u-width-600">
            <header class="p-flex --align-center --text-left u-border-bottom-1-gray u-pb-10 u-mb-40">
                <h1 class="c-title --style-4 u-pr-20 u-pt-0">Thermo Shape</h1>
                <p class="c-title-sub u-sp-pt-5">サーモシェイプ</p>
            </header>
            <div class="u-pb-40 u-border-bottom-1-gray">
                <dl class="p-flex --text-left u-pb-20 c-data-list-1 --flex-sp">
                    <dt><span>サロン価格</span></dt>
                    <dd><span>10,000,000</span>円(税別)</dd>
                </dl>
                <dl class="p-flex --text-left c-data-list-1 --flex-sp">
                    <dt><span>月額リース料</span></dt>
                    <dd class="p-flex --align-bottom --flex-sp"><div class="u-pr-10"><span>226,800</span>円(税別)</div><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_q.svg" class="u-width-20 u-n-mt-2" id="js-button-pop"></dd>
                </dl>
            </div>
            <div class="u-pt-40">
                <h1 class="u-mb-40 c-title --style-5">効果と実績。美容概念を覆す究極の痩身を実現！</h1>
                <h2 class="c-title --style-6 u-mb-30">商品PRコメント</h2>
                <div class="u-mb-40">
                    <p>単なるボディケアだけではなく、肌にハリを与え、そして引き締めまでも可能に。さらに少ない回数で驚きの効果持続性。これまでのエステティックの常識を覆し、まさに夢のトリートメントを実現させる・・・それが「サーモ・シェイプ」です。</p>
                </div>
                <h2 class="c-title --style-6 u-mb-30">製品規格</h2>
                <div>
                    <dl class="c-table --table-type-1">
                        <dt>電源</dt>
                        <dd>100V</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>消費電力</dt>
                        <dd>200W</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>外部寸法（幅×奥行×高さ）</dt>
                        <dd> 650×550×1150（mm）</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>製品重量</dt>
                        <dd>25kg</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>周波数</dt>
                        <dd>200W</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>ボディ</dt>
                        <dd>40.68MHz</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>フェイス</dt>
                        <dd>40.68MHz</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>方式</dt>
                        <dd>ユニポーラ、バイポーラ</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>ハンドル</dt>
                        <dd>2本</dd>
                    </dl>
                    <dl class="c-table --table-type-1">
                        <dt>電極数</dt>
                        <dd>2本</dd>
                    </dl>
                    <dl class="c-table --table-type-1 u-border-bottom-1-blue">
                        <dt>付属品</dt>
                        <dd>専用ワゴン</dd>
                    </dl>
                </div>
                <div class="u-pt-10 u-sp-pt-30 u-font-size-14">※別途配送・設置費</div>
                <div class="p-flex --text-center u-pt-30">
                    <a href="#" class="c-button --style-3">メールでお問合せ・見積依頼</a>
                </div>
            </div>
        </div>




    </div>


    




    




    <section class="u-pt-80 u-pb-80">
        <div class="p-center">
            <header class="u-text-center u-color-blue u-pb-40">
                <p class="c-title-sub">VIEW PRODUCTS</p>
                <h2 class="c-title">最近閲覧した商品</h2>
            </header>
            <div class="p-flex --column-5 u-gap-30 u-pb-80 --sp-column-2 --sp-wrap">
                <article class="p-product-box">
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/item_1.png" alt=""></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">遺伝子検査キット</h3>
                        <dl class="p-flex --text-left --flex-sp">
                            <dt class="--price-title">
                                サロン<br>
                                価　格
                            </dt>
                            <dd class="--price">
                                155,400<span>円</span>
                            </dd>
                        </dl>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/item_1.png" alt=""></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">遺伝子検査キット</h3>
                        <dl class="p-flex --text-left --flex-sp">
                            <dt class="--price-title">
                                サロン<br>
                                価　格
                            </dt>
                            <dd class="--price">
                                155,400<span>円</span>
                            </dd>
                        </dl>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/item_1.png" alt=""></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">遺伝子検査キット</h3>
                        <dl class="p-flex --text-left --flex-sp">
                            <dt class="--price-title">
                                サロン<br>
                                価　格
                            </dt>
                            <dd class="--price">
                                155,400<span>円</span>
                            </dd>
                        </dl>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/item_1.png" alt=""></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">遺伝子検査キット</h3>
                        <dl class="p-flex --text-left --flex-sp">
                            <dt class="--price-title">
                                サロン<br>
                                価　格
                            </dt>
                            <dd class="--price">
                                155,400<span>円</span>
                            </dd>
                        </dl>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/item_1.png" alt=""></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">遺伝子検査キット</h3>
                        <dl class="p-flex --text-left --flex-sp">
                            <dt class="--price-title">
                                サロン<br>
                                価　格
                            </dt>
                            <dd class="--price">
                                155,400<span>円</span>
                            </dd>
                        </dl>
                    </div>
                </article>
            </div>
        </div>
    </section>






    <section class="c-after-bg-blue">
        <div class="c-bg-text --style-1 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>
        <div class="u-position-relative u-pt-50 u-z-100 p-center">


            <header class="u-text-center u-color-white u-pb-40">
                <p class="c-title-sub">OTHER SERVICE</p>
                <h2 class="c-title">その他のサービス</h2>
            </header>
            
            
            
            <ul class="p-flex u-text-center u-gap-20 --flex-sp --sp-column-2 --sp-wrap">
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/banner_service_1.png" alt=""></a>
                    <div class="u-pt-10 u-color-blue u-font-size-18">店舗売買</div>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/banner_service_2.png" alt=""></a>
                    <div class="u-pt-10 u-color-blue u-font-size-18">集金代行サービス</div>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/banner_service_3.png" alt=""></a>
                    <div class="u-pt-10 u-color-blue u-font-size-18">機器修理受付</div>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/banner_service_4.png" alt=""></a>
                    <div class="u-pt-10 u-color-blue u-font-size-18">シェアサロンサービス</div>
                </li>
                <li>
                    <a href="#"><img src="<?php bloginfo('template_directory'); ?>/img/common/banner_service_5.png" alt=""></a>
                    <div class="u-pt-10 u-color-blue u-font-size-18">LINE予約サービス</div>
                </li>
            </ul>
            
        </div>
    </section>




    



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


    $(document).ready(function() {
        $('#js-button-pop').click(function(e) {
            e.preventDefault();
            var popup = $('<div class="c-popup --size-s">リース契約とは契約期間が5年間となります。またリースの途中解約はできません</div>');
            $(this).after(popup);
            popup.fadeIn();

            // ポップアップの位置を調整
            function adjustPopupPosition() {
                var buttonPosition = $('#js-button-pop').offset();
                var windowWidth = $(window).width();
                
                if (windowWidth <= 750) { // モバイル用
                    popup.css({
                        'position': 'absolute',
                        'left': buttonPosition.left,
                        'top': buttonPosition.top - 50 + $('#js-button-pop').outerHeight(),
                        'transform': 'none',
                        'width': 'auto'
                    });
                } else { // デスクトップ用
                    popup.css({
                        'position': 'absolute',
                        'left': buttonPosition.left,
                        'top': buttonPosition.top + $('#js-button-pop').outerHeight(),
                        'transform': 'none',
                        'width': 'auto'
                    });
                }
            }

            adjustPopupPosition();
            $(window).resize(adjustPopupPosition);

            // ポップアップ以外をクリックしたら閉じる
            $(document).on('click', function(event) {
                if (!$(event.target).closest('.c-popup, #js-button-pop').length) {
                    popup.fadeOut(function() {
                        $(this).remove();
                    });
                }
            });
        });
    });



    </script>





</body>
</html>
