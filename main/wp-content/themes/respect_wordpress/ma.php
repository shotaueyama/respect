<?php
/*
Template Name:店舗売却
*/
?>


<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('ma'); ?>
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
                <li><span>店舗売却</span></li>
            </ul>
        </div>
        <h1 class="u-text-center">店舗売買/事業譲渡マッチング(M&A)<br>「Re・sales」</h1>
    </header>


    <section class="u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">
            <header class="u-pb-30 u-sp-pb-20 u-text-center">
                <h2 class="c-title --style-8">美容関連店舗のオーナー様、<br class="u-sp-only">譲渡をお考えの方<br>市場価格よりもお得な金額で売却先をみつけます！</h2>
            </header>
            <div class="u-pb-50 u-pt-sp-40 u-pb-sp-60">
                <p class="u-text-center u-font-size-18">
                美容業界に精通した専門家が、<br class="u-sp-only">あなたの事業売却をサポートします。<br>
                「経営が厳しくても買い手は見つかるのでしょうか？」<br>
                「地方の店舗でも売却の可能性はありますか？」<br>
                「他の仲介サービスでは成約に至らなかった」<br>
                こうした不安や疑問を抱えていませんか？<br class="u-sp-only">リスペクトフォースなら、そんな悩みも解消します。
                </p>
            </div>
        </div>
    </section>


    <section class="u-bg-blue-2 u-color-black u-pt-80 u-pb-80">

        <div class="p-center --width-894">
            <article>
                <header class="u-text-center u-pb-40 u-sp-pt-80 u-sp-mb-40">
                    <h2 class="c-title --style-8">お客様が<br class="u-sp-only">感じていること</h2>
                </header>
                <ul class="c-list js-link-height-1 u-pb-60">
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">売却プロセスに不慣れで、専門的なサポートが欲しい</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">日々の業務に追われ、売却準備の時間が取れない</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">M&A手数料のコストが気になる</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">一般的な仲介会社に「難しい案件」と言われてしまった</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">自分のペースで売却プロセスを進めたい</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">周囲に知られずに譲渡の検討を始めたい</li>
                    <li><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_list_check.svg" alt="" class="--check">個人売買に潜むリスクを回避したい</li>
                </ul>
            </article>


        </div>
       <!-- <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-pb-30 u-text-center u-sp-pt-60">
        リスタートなら<span class="u-color-blue">スマホ一台で</span>の<br class="u-sp-only">予約を一括管理できるんです！
        </div> -->
    </section>



    <!-- <section class="u-bg-blue">
        <div class="u-pt-80 p-center u-pb-80 u-sp-pt-80">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-60">
                リスタートが全てわかる！<br class="u-sp-only">こちらの動画をご覧ください！
            </h2>
            <div class="c-video-wrap">
                <video src="movie/video.mp4" controls></video>
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



    <section class="u-bg-blue u-pt-80 u-sp-pt-80">
        <div class="u-pb-100">
            <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40">手放したい人と<br class="u-sp-only">探している人をマッチング！</h2>
            <div class="u-pb-50 u-pt-sp-40 u-pb-sp-60 u-text-center p-center --width-894">
                <p class="u-text-center u-font-size-18">
                新規出店の際の物件探し、内装などにかかるコスト削減や店舗閉鎖の際の撤去、処理の際のコスト削減などのご提案をさせて頂くサービスです。<br>
                新規事業展開をお考えの方、移転を検討されている方、新しい業種で躍進される方などのために、登録無料にて店舗売買のマッチングのお手伝いをさせて頂きます。
                </p>
            </div>
            <div class="p-center --width-894">


                <table class="c-table --table-type-3">
                    <tr class="u-font-size-20">
                        <th>手放したい人</th>
                        <th>探している人</th>
                    </tr>
                    <tr>
                        <td class="u-width-half">
                            <!-- <p class="u-font-18 u-font-weight-bold">掲載・交渉・契約までプロにお任せ！</p> -->
                            <ul class="u-pb-40 u-font-size-18 c-list --style-1">
                                <li>せっかくの立地だし誰か後継ぎいないかなぁ</li>
                                <li>内装が気に入ってるから誰かにまた使ってほしいな</li>
                                <li>使わないものは処分費もかかるし置いていきたいな</li>
                            </ul>
                        </td>
                        <td class="u-width-half">
                           <!-- <p class="u-font-18 u-font-weight-bold">掲載・交渉・契約手続き等ご自身で最後まで対応したい方</p> -->
                           <ul class="u-pb-40 u-font-size-18 c-list --style-1">
                                <li>駅から近くてキレイなお店がないかなぁ</li>
                                <li>内装が自分好みに仕上がったテナントないかなぁ</li>
                                <li>一通り必要なものが揃ってるテナントがあったらいいのに</li>
                            </ul>
                        </td>
                    </tr>
                    <!-- <tr>
                        <td class="u-text-center u-width-half" colspan="2">
                           <p class="u-font-18 u-font-weight-bold">そんな時、リスペクトフォースが仲介してお繋ぎします</p>
                        </td>
                    </tr>
                    <tr>
                        <td class="u-width-half" style="vertical-align: top;">
                            <ul class="u-pb-40 u-font-size-18 c-list --style-1">
                                <li>せっかくの立地だし誰か後継ぎいないかなぁ</li>
                                <li>内装が気に入ってるから誰かにまた使ってほしいな</li>
                                <li>使わないものは処分費もかかるし置いていきたいな</li>
                            </ul>
                            <p>
                                ※成功報酬以外の費用は一切かからず、成約するまで0円でご利用可能<br>
                                ※専属専任契約の場合、成果報酬として手数料40万円（税別）が発生します
                            </p>
                        </td>
                        <td class="u-width-half" style="vertical-align: top;">
                            <ul class="u-pb-20 u-font-size-18 c-list --style-1 u-mb-30">
                                <li>専門家に頼らず自分で最後まで対応したい</li>
                                <li>手数料無料に魅力を感じる</li>
                                <li>自分のペースで進めたい</li>
                            </ul>
                        </td>
                    </tr> -->
                </table>


                <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-text-center">
                    リスペクトフォースは<br class="u-sp-only">両者の思いをマッチング！<br>
                    閉店・移転・閉店に伴う<br class="u-sp-only">問題を解決！<br>
                    しかも登録無料！
                </div>



                
                
                <!-- <div>
                    <h3 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40">他社比較</h3>
                    <div>
                        <p class="u-font-size-18 u-text-center">
                            口座振替の月額管理費3,000 円 コンビニ決済の月額管理費 9,000 円「 合計 12000 円（税別） 月額 」がかかります。<br>
                            ※リ・クレジットは、口座振替もWEB コンビニ（コンビニ決済）も両方とも使用しても月額管理費は 2300 円だけ
                        </p>
                    </div>
                </div> -->

            </div>
        </div>
    </section>



    <section class="u-bg-blue-2 u-pt-100 u-color-black">
        <div>
            <header>
                <h2 class="u-text-center u-font-weight-bold u-font-size-38 u-pb-40 p-center">市場価格よりも<br class="u-sp-only">お得な金額で売却先をみつけます！</h2>
                <!-- <div class="p-center --width-894 u-pb-40">
                    <p>10回つづりの回数券や、全20回コースのようなメニュー設定を行っているサロンは、特定の期間を超えて一定額以上発生するサービス提供に該当する為、役務サービスとなります。よってクレジット契約が難しい。</p>
                </div> -->
            </header>
            <div class="p-center u-pb-80">
                <ul class="p-flex --column-4 u-text-center --flex-sp --sp-column-2 --wrap u-gap-30">
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_1.png" alt=""></figure>
                        <h3 class="u-text-left u-font-weight-bold u-font-size-2 u-pt-10">美容業界に特化</h3>
                        <div class="u-pt-10 u-font-size-14 u-text-left">
                        リスペクトフォースは、美容サロン運営の専門知識を活かし、業界に特化したM&A支援を提供しています。豊富な経験と実績を持つ当社なら、安心して美容サロンの事業継承やM&Aをお任せいただけます。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_2.png" alt=""></figure>
                        <h3 class="u-text-left u-font-weight-bold u-font-size-2 u-pt-10">すぐ取り組める</h3>
                        <div class="u-pt-10 u-font-size-14 u-text-left">
                            他社と比較しても、登録料や成約手数料がかからないので、気軽に始められます。まずはお気軽にご相談ください。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_3.png" alt=""></figure>
                        <h3 class="u-text-left u-font-weight-bold u-font-size-2 u-pt-10">非公開売却オプション</h3>
                        <div class="u-pt-10 u-font-size-14 u-text-left">
                        売却情報の秘匿性を重視される方や、理想的なオファーをじっくり待ちたい方向けに、非公開での売却プランをご用意しています。
                        </div>
                    </li>
                    <li>
                        <figure><img src="<?php bloginfo('template_directory'); ?>/img/common/scene_thumb_4.png" alt=""></figure>
                        <h3 class="u-text-left u-font-weight-bold u-font-size-2 u-pt-10">直接交渉で実現</h3>
                        <div class="u-pt-10 u-font-size-14 u-text-left">
                        直接やりとりを行うことで時間と手数料を大幅にカット。スピーディーなM&Aをお得に実現するプラットフォームを提供します。
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



    




    <section class="u-pt-100">
        <div class="p-center">
            <header class="u-text-center u-color-blue u-pb-40">
                <p class="c-title-sub">FLOW</p>
                <h2 class="c-title">M&A成約までの流れ</h2>
            </header>
            <div class="u-overflow-auto">
                <div class="p-flex --column-6 u-pb-80 --wrap --justify-center u-gap-20 --flex-sp u-sp-width-1600">
                    <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_smartphone.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">1.お問合せ</h3>
                        </div>
                    </article>

                    <!-- <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_search_3.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">2.案件投稿/検索</h3>
                        </div>
                    </article> -->

                    <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_comment.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">2.面談</h3>
                        </div>
                    </article>

                    <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_smartphone_2.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">3.契約</h3>
                        </div>
                    </article>

                    <!-- <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_repeat.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">5.面談</h3>
                        </div>
                    </article> -->

                    <article class="p-product-box">
                        <figure class="u-text-center"><img src="<?php bloginfo('template_directory'); ?>/img/common/icon_shop.svg" alt="" class="u-width-100"></figure>
                        <div class="u-color-blue">
                            <h3 class="c-title --style-2">4.引渡し</h3>
                        </div>
                    </article>
     
                </div>
            </div>
        </div>
    </section>





    <section>
        <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div>
        <div class="u-bg-blue-2 u-color-black u-pb-180">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-sp-pt-80">
                <h2 class="c-title --style-8">事業売却には、<br class="u-sp-only">こんな優位性があります。</h2>
            </header>
            <div class="p-flex p-center u-pb-60 u-pt-20">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">高く売却できます</h3>
                    <div>
                        <p class="u-font-size-16">
                        美容サロンの売却では、内装・設備・美容器具のみを譲渡する造作譲渡が一般的です。しかし、これらの物的資産に加えて人材やノウハウも含めた事業全体を売却することで、より高い価値を実現できる可能性があります。特に近年、美容業界では人材採用が困難になっているため、熟練スタッフと共に事業を譲渡するM&Aの価値が高まっています。このアプローチにより、単なる造作譲渡を超える売却価格が期待できます。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580 u-height-300">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_1.png" alt="" class="u-object-fit-cover u-height-300 u-width-full">
                </figure>
            </div>

            <div class="p-flex p-center --reverse u-pb-60">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">従業員の雇用</h3>
                    <div>
                        <p class="u-font-size-16">
                        事業売却では、現在勤務中の従業員も含めて譲渡することが可能です。これにより、店舗や会社を手放す際にも従業員の雇用を守ることができます。つまり、オーナーは事業を閉鎖することなく、従業員を解雇せずに済むだけでなく、売却益も得られるという一石三鳥の効果が期待できます。この方法は、経営者の責任を果たしつつ、従業員の生活も守る win-win の解決策となります。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580 u-height-300">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_convenience_flow_5.png" alt="" class="u-object-fit-cover u-height-300 u-width-full">
                </figure>
            </div>

            <div class="p-flex p-center u-pb-60">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">原状回復の必要がありません</h3>
                    <div>
                        <p class="u-font-size-16">
                        通常、店舗を退去する際には原状回復が必要で、これには多額の費用がかかります。店舗の規模によっては数百万円に及ぶこともあり、売り手にとって大きな負担となります。しかし、事業譲渡やM&Aを通じて売却する場合、この原状回復義務を買い手に引き継ぐことができます。これにより、売り手は高額な原状回復工事費用を節約できるだけでなく、スムーズな事業移行も実現できます。この方法は、売却時の出費を抑え、より有利な条件での取引を可能にする重要なメリットの一つと言えるでしょう。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580  u-height-300">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_remake_point_3.png" alt="" class="u-object-fit-cover u-height-300 u-width-full">
                </figure>
            </div>


            <div class="p-flex p-center --reverse u-pb-60">
                <div class="u-width-n-580 u-sp-pb-40">
                    <h3 class="c-title --style-9">最適なタイミングで高額な売却益を獲得</h3>
                    <div>
                        <p class="u-font-size-16">
                            利益を出せている好調時こそ、事業譲渡の絶好の機会です。この時期の売却により、より高い売却益を得ることが可能となります。新規事業の資金やリタイア後の貯蓄など、様々な目的に活用できる資金を確保できるのです。好調期の売却は、事業の真の価値を反映し、次のキャリアステップや将来の経済的安定性につながる戦略的な選択肢です。このタイミングでの譲渡は、現在の成功を最大限に活かしつつ、新たなビジネスチャンスの獲得や長期的な財務的安定性を確保する効果的な方法といえるでしょう。好業績時の売却は、オーナーの未来設計と事業の円滑な引継ぎを両立させる賢明な戦略なのです。
                        </p>
                    </div>
                </div>
                <figure class="u-width-580  u-height-300">
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_salon_1500_1.png" alt="" class="u-object-fit-cover u-height-300 u-width-full">
                </figure>
            </div>



            

        </div>
    </section>



    <!-- <section class="u-pb-180 u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">

            <header class="u-pb-20 u-text-center">
                <h2 class="c-title --style-8">選べる売却プラン</h2>
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
        </div>
    </section> -->


    <!-- <section class="u-mb-80 u-n-mt-100">
        <div class="c-line-cv p-center --width-894 --style-1">
            <h2>初期導入費用90％OFF！</h2>
            <div class="--text-base"><span class="u-font-size-40">成果報酬手数料</span><span class="u-font-60">無料</span>！</div>
        </div>
    </section> -->


    









    



    



    <!-- <section>
        <div class="u-pb-100 u-sp-pt-60">
            <header class="u-pb-40 u-text-center u-pt-80 u-pb-50 u-mb-20">
                <h2 class="c-title --style-8">Re・Credit サービス紹介</h2>
            </header>
            <div class="p-flex p-center u-text-center u-gap-30">
                <figure class="u-text-center c-box u-sp-mb-40">
                    <figcaption class="u-font-size-22 u-font-weight-bold u-pb-30">口座振替サービス</figcaption>
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_recredit_service_1.png" alt="">
                </figure>
                <figure class="u-text-center c-box">
                    <figcaption class="u-font-size-22 u-font-weight-bold u-pb-30">口座振替サービス</figcaption>
                    <img src="<?php bloginfo('template_directory'); ?>/img/common/img_recredit_service_2.png" alt="">
                </figure>
            </div>
            <div class="u-font-size-38 u-font-weight-bold u-pt-40 u-pb-30 u-text-center">
                業界初口座振替<br class="u-sp-only">WEBコンビニの併用が可能
            </div>
        </div>
    </section> -->


    


    <!-- <section class="u-pb-100">

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
        
    </section> -->



    


    
    


    


    


    <!-- <section class="u-bg-blue u-pt-100 u-pb-160">

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




    


    <section class="u-n-mt-100">
        <div class="c-line-cv p-center">
            <h2>お問い合わせはこちら</h2>
            <a href="https://lin.ee/4hd2eHP" target="_blank">公式LINEで<br class="u-sp-only">お問合せ</a>
        </div>
    </section>

    <div class="u-pt-80 u-pb-80">
    <?php include 'product_history.php'; ?>
    </div>
    <?php include 'other_service.php'; ?>



    
    
    <!-- <div class="c-bg-text --style-3 u-overflow-hidden">RESPECT FORCE RESPECT FORCE RESPECT FORCE</div> -->


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
    $('.p-sp-gnav').toggleClass('is-active');
    if ($(this).hasClass('active')) {
      $('.u-fix-top').css('position', 'fixed');
    } else {
      $('.u-fix-top').css('position', 'sticky');
    }
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

    </script>




<?php wp_footer(); ?>
</body>
</html>
