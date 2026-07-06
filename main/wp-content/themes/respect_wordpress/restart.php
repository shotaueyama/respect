<?php
/*
Template Name:リスタート
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('restart'); ?>
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
                <li><a href="#">Re・Start</a></li>
            </ul>
        </div>
        <h1 class="u-text-center">自動集客型LINE予約システム<br>Re・Start</h1>
    </header>


    <section class="u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">
            <header class="u-pb-30 u-sp-pb-20 u-text-center">
                <h2 class="c-title --style-8">お客様から”あなた”に<br class="u-sp-only">直接予約ができる<br>「自動集客型LINE予約サーピス」</h2>
            </header>
            <div class="u-pb-50 u-pt-sp-40 u-pb-sp-60">
                <p class="u-text-center u-font-size-18">
                    スマホ1台でお客様の予約を「楽」にしたい方へ<br>
                    美容系フリーランサーに転身した。<br>
                    新店OPENしたけど。。<br>
                    「予約システムの月額費が高いし導入しようか迷う」<br>
                    「毎月かかる広告宣伝費の出費を抑えたい」<br>
                    リスタートなら「ネット予約システムが<br class="u-sp-only">
                    月額0円で使い放題」です。
                </p>
            </div>
            <div class="p-flex --align-center">
                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">ネット予約システム<br>使い放題</dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            月額<span class="u-font-size-100 u-color-blue u-font-family-oswald">0</span>円
                        </dd>
                    </dl>
                </div>

                <div class="u-font-size-80 u-font-weight-bold u-color-blue u-text-center">+</div>

                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">
                            全国のシェアサロン<br>
                            (レンタルサロン)
                        </dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            利用<span class="u-font-size-100 u-color-blue">可能</span>
                        </dd>
                    </dl>
                </div>

            </div>
            <!-- <div class="u-font-size-12 u-pt-sp-20">※決済額が6千円以下の場合は[7％]となります。</div> -->

            <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-sp-pt-60 u-text-center">
                これからのネット予約は<br><span class="u-font-size-68 u-font-family-oswald u-color-blue ">“月額0円”</span>でご利用可能！
            </div>

        </div>
    </section>



    <section class="u-overflow-hidden u-pb-60 u-bg-blue-2 u-mt-80">
        <div class="p-center">
            <div class="swiper-container c-function-slide u-pt-60 u-pb-60">
                <div class="swiper-wrapper">
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide01.png" alt=""></div>
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide02.png" alt=""></div>
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide03.png" alt=""></div>
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide04.png" alt=""></div>
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide05.png" alt=""></div>
                    <div class="swiper-slide --function"><img src="<?php bloginfo('template_directory'); ?>/img/common/step_slide06.png" alt=""></div>
                </div>
                <div class="swiper-pagination"></div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </section>



    <section class="u-bg-blue">
        <div class="u-pt-80 p-center u-pb-80 u-sp-pt-80">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-60">
                リスタートが全てわかる！<br class="u-sp-only">こちらの動画をご覧ください！
            </h2>
            <div class="c-video-wrap">
                <video src="<?php bloginfo('template_directory'); ?>/movie/video.mp4" controls></video>
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



    <section class="u-pb-180 u-pt-80 u-sp-pt-120 u-bg-blue-2 u-color-black">
        <div class="p-center --width-894">

            <header class="u-pb-20 u-text-center">
                <h2 class="c-title --style-8">ご利用料金</h2>
            </header>

            <div class="u-pb-40 u-pt-sp-40">
                <p class="u-text-center u-font-size-18">
                    
                </p>
            </div>

            <div class="p-flex --align-center">
                <div class="c-box u-p-20">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">初期導入費用</dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            <span class="u-font-size-70 u-color-blue u-font-family-oswald">30,000</span>円<br>
                            (税別)
                        </dd>
                    </dl>
                    <div class="u-pt-20">
                        <p>※公式LINE作成・構築/<br>管理画面登録費が含まれます。</p>
                    </div>
                </div>
                <div class="u-font-size-80 u-font-weight-bold u-color-blue u-text-center">+</div>
                <div class="c-box u-p-20">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">
                            成果報酬手数料
                        </dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            <span class="u-font-size-70 u-color-blue u-font-family-oswald">4.5</span>円+<span class="u-font-size-70 u-color-blue u-font-family-oswald">60</span>円<br>(税別)
                        </dd>
                    </dl>
                    <div class="u-pt-20">
                        <p>※成果報酬手数料：売上額に対しての<br>成果報酬手数料となります。</p>
                    </div>
                </div>
            </div>
            <!-- <div class="u-font-size-12 u-pt-sp-20">※決済額が6千円以下の場合は[7％]となります。</div> -->
        </div>
    </section>


    <section class="u-mb-80 u-n-mt-100">
        <div class="c-line-cv p-center --width-894 --style-1">
            <h2>初期導入費用90％OFF！</h2>
            <div class="--text-base"><span class="u-font-size-40">成果報酬手数料</span><span class="u-font-60">無料</span>！</div>
        </div>
    </section>


    <section>
        <div class="p-center">
            <header class="u-text-center u-color-blue u-pb-40">
                <p class="c-title-sub">VIEW PRODUCTS</p>
                <h2 class="c-title">サロンの予約管理で<br class="u-sp-only">こんなお悩みありませんか？</h2>
            </header>
            <div class="p-flex --column-4 u-pb-80 --sp-column-2 --wrap --justify-center u-gap-30">
                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_shop.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">出張(訪問)サービスをメニューに追加したい</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_smartphone.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">電話で接客や施術に集中できない</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_repeat.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">新規顧客のリピート率を上げたい</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_comment.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">顧客とのやりとりを手軽にしたい</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_smartphone_2.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">PCではなくスマホで一括管理したい</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_cart.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">店舗販売商品の売上を増やしたい</h3>
                    </div>
                </article>


                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_calender.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">営業時間外も直接予約を受けたい</h3>
                    </div>
                </article>
            </div>
        </div>
    </section>




    <section class="u-bg-blue-2 u-color-black u-pt-80 u-pb-80">

        <div class="p-flex p-center --column-2">
            <article>
                <header class="u-pb-20 u-text-center u-pb-50 u-sp-pt-80 u-sp-mb-40">
                    <h2 class="c-title --style-8">お客様が予約時に<br>感じていること</h2>
                </header>
                <ul class="c-list js-link-height-1">
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">LINEだとすぐ返信が来ない</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">WEB予約は入力する項目が多い</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">いつもの担当とメニューでお願いしたい</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">営業時間外は電話が繋がらない</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">電話をするのは面倒、電話代がかかる</li>
                </ul>
            </article>

            <article>
                <header class="u-pb-20 u-text-center u-pb-50 u-sp-pt-80 u-sp-mb-40">
                    <h2 class="c-title --style-8">店舗側が予約時に<br>感じていること</h2>
                </header>
                <ul class="c-list js-link-height-1">
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">LINEメッセージの返信が大変</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">WEB予約に気づかず、電話予約で空き状況を間違えて伝えダブルブッキングが発生した</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">大手予約サイトは掲載料が高い</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">電話が来ると接客や施術に集中できない</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">リピーターの来店頻度を高くしたい</li>
                </ul>
            </article>

        </div>


       <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-pb-30 u-text-center u-sp-pt-60">
        リスタートなら<span class="u-color-blue">スマホ一台で</span>の<br class="u-sp-only">予約を一括管理できるんです！
        </div>
    </section>




    <section class="u-bg-blue u-pt-100">
        <div>
            <header>
                <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40 p-center">様々なシーンで<br class="u-sp-only">ご活用いただけます！</h2>
                <!-- <div class="p-center --width-894 u-pb-40">
                    <p>10回つづりの回数券や、全20回コースのようなメニュー設定を行っているサロンは、特定の期間を超えて一定額以上発生するサービス提供に該当する為、役務サービスとなります。よってクレジット契約が難しい。</p>
                </div> -->
            </header>
            <div class="p-center u-pb-80">
                <ul class="p-flex --column-4 u-text-center --flex-sp --sp-column-2 --wrap u-gap-30">
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_1.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            電話での予約対応がなくなるので店舗のお客様に集中できます。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_2.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            予約前日にお客様へリマインドメッセージが配信されるためにドタキャン防止につながります。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_3.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            予約までのお客様とのやり取りがなくなるので、作業の工数削減や他の作業に集中できます。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_4.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            カルテ内容やお客様情報・売上管理をスマホ1台で一括管理できるので情報の確認漏れやダブルブッキング等のミスをなくすことができます。
                        </div>
                    </li>
                </ul>
            </div>
            <!-- <div class="u-bg-blue-3 u-pt-80 u-pb-80 u-sp-pt-80">
                <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-50 p-center">なぜクレジットカードの<br class="u-sp-only">審査に通りづらいのか</h2>
                <div class="p-flex p-center --align-center">
                    <div class="u-width-n-580">
                        <div>
                            <p class="u-font-size-16 u-sp-pb-60">
                                最近では、老舗であった銀座カラーなどの倒産が相次ぐ美容業界では、2009年から顧客側で、クーリングオフが自由にできるように制定されました。そのためクレジットカード会社からするとクーリングオフされるリスクが大きい美容業界の役務サービスを行っているサロンのクレジット審査は、ますます厳しくなっています。
                            </p>
                        </div>
                    </div>
                    <figure class="u-width-580">
                        <img src="<?php bloginfo('template_directory'); ?>/img/common/img_credit_1.png" alt="">
                    </figure>
                </div>
            </div> -->
        </div>
    </section>



    <section>
        <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>
        <div class="u-bg-blue-2 u-color-black u-pb-80">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-sp-pt-80">
                <h2 class="c-title --style-8">機能紹介</h2>
            </header>
            <div class="p-flex p-center u-pb-40 u-pt-20 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">LINE予約</h3>
                    <div>
                        <p class="u-font-size-20">
                            お客様はLINEから空いている日程を選ぶだけ！<br>
                            24時間いつでも予約受付が可能！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_1.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center --reverse u-pb-40 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">電子カルテ</h3>
                    <div>
                        <p class="u-font-size-20">
                            お客様のAfter写真を保存できるため、リピート時にお客様自身で写真を見返せる！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_2.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center u-pb-100 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">売上管理</h3>
                    <div>
                        <p class="u-font-size-20">
                            単月売上・年度売上を自動で計算！インボイスにも対応！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_3.png" alt="">
                </figure>
            </div>


            <div class="p-flex p-center --reverse u-pb-40 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">シェアサロン利用登録</h3>
                    <div>
                        <p class="u-font-size-20">
                            美容系フリーランサーや出張（訪問）メニューを検討している方は、全国のシェアサロンを登録し利用することで売上UPにつながります。
                            URL: <a href="https://share-salon.com" target="_blank">share-salon.com</a>
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_4.png" alt="">
                </figure>
            </div>



            <div class="p-flex p-center u-pb-100 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">リマインダー登録</h3>
                    <div>
                        <p class="u-font-size-20">
                            お客様のLINEへ来店前日にメッセージが自動配信！<br>
                            予約日のお忘れを防止できる！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_5.png" alt="">
                </figure>
            </div>


            <div class="p-flex p-center --reverse u-pb-40 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">店販販売</h3>
                    <div>
                        <p class="u-font-size-20">
                            お客様が来店時に購入したい店販商品を事前にLINEで購入予約ができる！
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_6.png" alt="">
                </figure>
            </div>

        </div>
    </section>




    <section class="u-bg-blue u-pt-80 u-sp-pt-80">
        <div class="u-pb-100">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40">他社と比較したときに<br>異なるポイント</h2>
            <div class="p-center --width-894">


                <table class="c-table --table-type-3 u-mb-40">
                    <tr class="u-font-size-20">
                        <th colspan="2">ターゲット</th>
                    </tr>
                    <tr>
                        <td class="u-text-center u-width-half">
                            美容系フリーランサーや<br>
                            小規模・個人サロン
                        </td>
                        <td class="u-text-center u-width-half">
                            大型/多店舗展開サロン<br>
                            または正社員<br class="u-sp-only">3人以上のサロン
                        </td>
                    </tr>
                </table>



                <table class="c-table --table-type-3 u-mb-40">
                    <tr class="u-font-size-20">
                        <th colspan="2">月額料金</th>
                    </tr>
                    <tr>
                        <td class="u-text-center u-width-half">
                            <span class="u-font-size-40 u-font-family-oswald">0</span>円
                        </td>
                        <td class="u-text-center u-width-half">
                            <span class="u-font-size-40 u-font-family-oswald">10,000</span>円/月 〜<br class="u-sp-only"><span class="u-font-size-40 u-font-family-oswald">30,000</span>円/月
                        </td>
                    </tr>
                </table>


                <table class="c-table --table-type-3">
                    <tr class="u-font-size-20">
                        <th colspan="2">施術場所</th>
                    </tr>
                    <tr>
                        <td class="u-text-center u-width-half">
                            時点+全国の<br class="u-sp-only">シェアサロンを<br class="u-sp-only">登録すると利用可能
                        </td>
                        <td class="u-text-center u-width-half">
                            時点サロンのみ
                        </td>
                    </tr>
                </table>
    

            </div>
        </div>
    </section>


    <section class="u-pb-100">

        <header class="u-pb-40 u-text-center u-pt-80 u-pb-60 u-sp-pt-80 p-center">
            <h2 class="c-title --style-8">利用までの流れ</h2>
        </header>

        <div class="c-list p-center u-text-center u-mb-40 --width-894">
            <p class="u-font-weight-bold u-font-size-40 u-pb-20">最短即日、最大でも<br class="u-sp-only">5日※で完了</p>
            <p class="u-font-weight-bold u-font-size-20">※ 初期登録費のご入金日からの<br class="u-sp-only">計算となります。</p>
        </div>

        <div class="p-center u-text-center --width-894 u-pb-40">
            <p class="u-sp-pt-40 u-font-size-20 u-font-weight-bold">
                はじめて公式LINEを開設しRe:Startを始められる方も、他社サービスから移行される方もデザイン設定まで、全力でサポートいたします。
            </p>
        </div>

        
        <div class="p-center">
            <figure class="u-pt-40">
                <picture>
                    <source media="(max-width: 750px)" srcset="img/common/flow_image_sp.png">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/flow_image.png" alt="">
                </picture>
            </figure>
        </div>
        
    </section>



    


    
    


    


    


    <section class="u-bg-blue u-pt-100 u-pb-160">

        <div>

            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-60 p-center">よくある質問</h2>
            
            <div class="p-center p-flex u-bg-white u-color-black u-mb-40 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">どの業種でも利用できますか?</h2>
                    <p>「美容系フリーランサーや小規模・個人サロンへおススメしております。</p>
                </div>
            </div>
            


            <div class="p-center p-flex u-bg-white u-color-black u-mb-40 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">自店サロンがなくても利用はできますか??</h2>
                    <p>
                        全国のシェアサロンを登録頂ければ、出張・訪問美容としてメニューを増やすことが可能となり、売上UPにつながります。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">シェアサロンはどうやって利用できますか?</h2>
                    <p>利用されているシェアサロン情報(住所等)を入力頂ければ予約時にお客様側で複数サロンが表示されます。</p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">導入までにどのくらい期間がかかりますか?</h2>
                    <p>
                        初期費用の支払い後、公式LINE設定に最短即日～最大5営業日で完了し、ご利用頂けます。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-40 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">成果報酬手数料以外にお金はかかりませんか?</h2>
                    <p>
                        月額料金は無料となります。お客様からの予約時の売上額に対する成果報酬手数料のみとなります。※電子カルテ/顧客管理/売上分析ツールは無料にてご利用いただけます。
                    </p>
                </div>
            </div>

            <div class="p-center p-flex u-bg-white u-color-black u-mb-60 --width-894">
                <div class="u-p-30 u-pl-50 u-pr-50 u-pt-20">
                    <h2 class="u-pb-20 c-title --style-11">成果報酬手数料の支払い方法はどのようなものですか?</h2>
                    <p>
                        あなたの個人LINEへ全国のコンビニエンスストアにてお支払い可能なWEBバーコードを自動発行されますので、期日までにお支払いください。
                    </p>
                </div>
            </div>

        </div>
        <!-- <div class="p-center p-flex --justify-center --flex-sp u-width-full --flex-sp-space_center">
            <a href="" class="c-button --style-3 u-text-center">WEBコンビニ申込書はこちら</a>
        </div> -->
    </section>




    


    <section class="u-n-mt-100">
        <div class="c-line-cv p-center">
            <h2>お問い合わせはこちら</h2>
            <a href="https://lin.ee/lQYjGny" target="_blank">公式LINEで<br class="u-sp-only">お問合せ</a>
        </div>
    </section>

    <div class="u-pt-80 u-pb-80">
        <?php include 'product_history.php'; ?>
    </div>
    <?php include 'other_service.php'; ?>




    <?php get_footer(); ?>


















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>

        var swiper = new Swiper('.c-function-slide', {
            slidesPerView: 'auto',
            spaceBetween: 50,
            grabCursor: true,
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            breakpoints: {
                738: {
                    centeredSlides: true,
                    spaceBetween: 50
                }
            }
        });
        

        $(function(){
            $('.btn-trigger').on('click', function() {
                $(this).toggleClass('active');
                return false;
            });
        });

    $(function(){
        // .js-link-height-1の高さを揃える関数
        function equalizeHeight() {
            var maxHeight = 0;
            $('.js-link-height-1').each(function(){
                $(this).height('auto');
                if ($(this).height() > maxHeight) {
                    maxHeight = $(this).height();
                }
            });
            $('.js-link-height-1').height(maxHeight);
        }

        // ページ読み込み時に実行
        equalizeHeight();

        // ウィンドウリサイズ時にも実行
        $(window).resize(function() {
            equalizeHeight();
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
