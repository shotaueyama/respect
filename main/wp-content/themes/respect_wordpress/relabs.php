<?php
/*
Template Name:リラボズ
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('relabs'); ?>
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
                <li><span>Re・labs</span></li>
            </ul>
        </div>
        <h1 class="u-text-center">美容/健康機器の修理受付<br>Re・labs</h1>
    </header>


    <section class="u-pt-80 u-sp-pt-120 u-pb-100">
        <div class="p-center --width-894">
            <header class="u-pb-30 u-sp-pb-20 u-text-center">
                <h2 class="c-title --style-8">美容機器修理を<br class="u-sp-only">格安で請負ます！</h2>
            </header>
            <div class="u-pb-50 u-pt-sp-40 u-pb-sp-60">
                <p class="u-text-center u-font-size-18">
                突然の業務用エステ機器の不具合/修理。<br>
                そして現在のメーカーのメンテナンス体制が不安な方も。<br>
                まずはお気軽にご相談はお問い合わせください。
                </p>
            </div>
            <div class="p-flex --align-center">
                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">電話相談</dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            見積<span class="u-font-size-100 u-color-blue u-font-family-oswald">無料</span>
                        </dd>
                    </dl>
                </div>

                <div class="u-font-size-80 u-font-weight-bold u-color-blue u-text-center">+</div>

                <div class="c-box">
                    <dl>
                        <dt class="u-font-size-32 u-font-weight-bold u-pb-20">
                            最短30分
                        </dt>
                        <dd class="u-font-size-48 u-font-weight-bold">
                            即日<span class="u-font-size-100 u-color-blue">対応</span>
                        </dd>
                    </dl>
                </div>

            </div>
            <!-- <div class="u-font-size-12 u-pt-sp-20">※決済額が6千円以下の場合は[7％]となります。</div> -->

            <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-sp-pt-60 u-text-center">
                24時間受付、365日、47都道府県<br><span class="u-font-size-68 u-font-family-oswald u-color-blue ">全国対応</span>でご利用いただけます。
            </div>

        </div>
    </section>



    <!-- <section class="u-overflow-hidden u-pb-60 u-bg-blue-2 u-mt-80">
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
    </section> -->


    <section class="u-bg-blue u-pt-100">
        <div>
            <header>
                <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40 p-center">こんな悩みを<br class="u-sp-only">お持ちではありませんか？</h2>
                <!-- <div class="p-center --width-894 u-pb-40">
                    <p>10回つづりの回数券や、全20回コースのようなメニュー設定を行っているサロンは、特定の期間を超えて一定額以上発生するサービス提供に該当する為、役務サービスとなります。よってクレジット契約が難しい。</p>
                </div> -->
            </header>
            <div class="p-center u-pb-80">
                <ul class="p-flex --column-3 u-text-center --flex-sp --sp-column-2 --wrap u-gap-20 relabs-trouble-list">
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_1_2.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            お店で使っていた美容機器が故障してしまって、営業ができない
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_2_2.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            修理をお願いしたいけど購入先が倒産してしまって、どうすればいいのかわからない
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_3_2.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            せっかく買った機器なのに、もう使えないのかな。
                        </div>
                    </li>
                    <!-- <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_4.png" alt=""></figure>
                        <div class="u-pt-10 u-font-size-18 u-font-weight-bold u-text-left">
                            カルテ内容やお客様情報・売上管理をスマホ1台で一括管理できるので情報の確認漏れやダブルブッキング等のミスをなくすことができます。
                        </div>
                    </li> -->
                </ul>
            </div>
            <div class="u-bg-blue-3 u-pt-80 u-pb-80 u-sp-pt-80">
                <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-50 p-center">業務用エステ機器の修理ならお任せ</h2>
                <div class="p-flex p-center --align-center">
                    <div class="u-width-n-580">
                        <div>
                            <p class="u-font-size-16 u-sp-pb-60">
                            株式会社ビーモデルでは、業務用エステ機器の修理にお困りのオーナー様へ、メーカー・機器を問わず修理/メンテナンスのサポートを行っております。<br>
                            <br>
                            突然お使いの業務用エステ機器・業務用脱毛機が動かなくなった、故障してしまった、出力やパワーが弱くなってお客様からクレームが出てしまった等、業務用エステ機器・業務用脱毛機に関するお困りごとをすべて解決します。<br>
                            <br>
                            弊社では10年以上の業務用エステ・美容機器専門のエンジニアが在籍していることで、国内でのメンテナンス作業対応・国内工場での臨時代替え品サポートなど安心して機器修理をお任せいただける体制を整えております。<br>
                            <br>
                            また株式会社ビーモデルでは、業務用エステ・美容機器の修理はもちろん、美容機器開発・販売事業もしていることから、ただ修理をするのではなく、修理をする前よりも壊れづらいようにパーツの変更や提案なども行わせていただきますので末永く業務用エステ機器をお使いできるようにサポートさせていただきます。<br>
                            <br>
                            まずは安心してご相談くださいませ。
                            </p>
                        </div>
                    </div>
                    <figure class="u-width-580">
                        <img src="<?php bloginfo('template_directory'); ?>/img/common/img_relab_1.png" alt="">
                    </figure>
                </div>
            </div>
        </div>
    </section>


    <section class="u-pt-100">
        <div class="p-center u-pb-30">
            <header class="u-text-center u-color-blue u-pb-40">
                <p class="c-title-sub">VIEW PRODUCTS</p>
                <h2 class="c-title">Re・labs<br class="u-sp-only">が選ばれる選ばれる5つの理由</h2>
            </header>
            <div class="p-flex --column-3 u-pb-80 --sp-column-2 --wrap --justify-center u-text-center u-gap-30 relabs-reason-list">

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_calender.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">最短30分！即日対応！</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_smartphone.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">年末年始もOK！24時間受付365日対応</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_repeat.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">47都道府県、全国対応！</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_comment.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">業界30年以上のノウハウ</h3>
                    </div>
                </article>

                <article class="p-product-box">
                    <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_shop.svg" alt="" class="u-width-100"></figure>
                    <div class="u-color-blue">
                        <h3 class="c-title --style-2">水道局指定工事店</h3>
                    </div>
                </article>

                <!-- <article class="p-product-box">
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
                </article> -->
            </div>
        </div>
    </section>



    <!-- <section class="u-bg-blue">
        <div class="u-pt-80 p-center u-pb-80 u-sp-pt-80">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-60">
                リスタートが全てわかる！<br class="u-sp-only">こちらの動画をご覧ください！
            </h2>
            <div class="c-video-wrap">
                <video src="<?php bloginfo('template_directory'); ?>/movie/video.mp4" controls></video>
            </div>
        </div>
    </section> -->




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



    <!-- <section class="u-pb-180 u-pt-80 u-sp-pt-120 u-bg-blue-2 u-color-black">
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
            </div> -->
            <!-- <div class="u-font-size-12 u-pt-sp-20">※決済額が6千円以下の場合は[7％]となります。</div> -->
        <!-- </div>
    </section> -->


    <!-- <section class="u-mb-80 u-n-mt-100">
        <div class="c-line-cv p-center --width-894 --style-1">
            <h2>初期導入費用90％OFF！</h2>
            <div class="--text-base"><span class="u-font-size-40">成果報酬手数料</span><span class="u-font-60">無料</span>！</div>
        </div>
    </section> -->


    




    <!-- <section class="u-bg-blue-2 u-color-black u-pt-80 u-pb-80">

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
    </section> -->




    



    <section>
        <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>
        <div class="u-bg-blue-2 u-color-black u-pb-240">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-sp-pt-80">
                <h2 class="c-title --style-8">たったの4ステップで施工開始！</h2>
            </header>
            <div class="p-flex p-center u-pb-40 u-pt-20 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">まずは無料相談</h3>
                    <div>
                        <p class="u-font-size-20">
                            無理な売り込みは一切いたしません。<br>
                            お気軽にお問合わせください。  
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_1_2.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center --reverse u-pb-40 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">最短30分で駆けつけます</h3>
                    <div>
                        <p class="u-font-size-20">
                        作業場所に最も近い支社・営業所から、サービススタッフが駆けつけます。全国どこでもスピード対応！<br>
                        ※ご依頼状況等によってはお伺いまでにお時間がかかる場合がございます。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_2_2.png" alt="">
                </figure>
            </div>

            <div class="p-flex p-center u-pb-100 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">お見積もり、工事スケジュールなどをご説明いたします</h3>
                    <div>
                        <p class="u-font-size-20">
                            作業前にご依頼のサインをいただくので安心です。<br>
                            在庫の有無、工事スケジュールなどをお知らせいたします。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_3_2.png" alt="">
                </figure>
            </div>


            <div class="p-flex p-center --reverse u-pb-40 --align-center">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">スタッフが安全に施工いたします</h3>
                    <div>
                        <p class="u-font-size-20">
                            サービススタッフが、事前説明をしたのち安全に施工いたします。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_function_4_2.png" alt="">
                </figure>
            </div>




        </div>
    </section>




    <!-- <section class="u-bg-blue u-pt-80 u-sp-pt-80">
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
    </section> -->




    


    <section class="u-mt-100">
        <div class="c-line-cv p-center">
            <h2>お問い合わせはこちら</h2>
            <a href="https://lin.ee/0QIbEZK" target="_blank">公式LINEで<br class="u-sp-only">お問合せ</a>
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
