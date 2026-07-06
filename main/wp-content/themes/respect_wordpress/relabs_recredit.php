<?php
/*
Template Name:機器修理（リクレジットコピー）
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>美容機器修理 | RESPECT FORCE</title>
    <meta name="description" content="どこよりも早く・確かに。美容機器の救急隊。美容機器の急な故障、出力低下、古い機種や廃盤機種の修理まで、迅速に診断・見積もりします。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=202607011412" rel="stylesheet">

    <meta property="og:type" content="article">
    <meta property="og:title" content="美容機器修理 | RESPECT FORCE">
    <meta property="og:url" content="<?php echo esc_url(home_url('/relabs.html')); ?>">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">
    <meta property="og:description" content="どこよりも早く・確かに。美容機器の救急隊。美容機器の急な故障、出力低下、古い機種や廃盤機種の修理まで、迅速に診断・見積もりします。" />
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="美容機器修理 | RESPECT FORCE">
    <meta name="twitter:description" content="どこよりも早く・確かに。美容機器の救急隊。美容機器の急な故障、出力低下、古い機種や廃盤機種の修理まで、迅速に診断・見積もりします。">
    <meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">

    <link rel="shortcut icon" href="img/common/favicon.ico"type="image/x-icon">
    <link rel="apple-touch-icon" href="img/common/favicon.png">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>
  </head>
<body>

    <?php get_header(); ?>

    <header id="recredit-hero" class="recredit-hero relabs-hero">
        <div class="recredit-hero__bg"></div>
        <div class="recredit-hero__inner">
            <ul class="p-flex c-breadcrumbs --flex-sp recredit-hero__breadcrumbs">
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><span>美容機器修理</span></li>
            </ul>

            <div class="recredit-hero__content">
                <div class="recredit-hero__copy">
                    <p class="recredit-hero__eyebrow">
                        <span class="recredit-hero__eyebrow-line"></span>
                        美容機器・メンテナンス専門サービス
                    </p>
                    <p class="relabs-hero__response-tag">24時間以内にご案内可能！</p>
                    <h1 class="recredit-hero__title">
                        脱毛器・痩身機・複合機<br>まで幅広く対応
                    </h1>
                    <p class="recredit-hero__lead">
                        突然のトラブルにも、専門スタッフが迅速に対応。
                    </p>
                    <p class="recredit-hero__target">
                        古い機種の修理・点検から、代替機貸出・保証対応まで、<br>サロン様が安心して営業を続けられる修理体制を整えています。
                    </p>
                    <div class="recredit-hero__actions">
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-hero__button">
                            <span>無料見積もり</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-hero__outline-button">問い合わせ</a>
                    </div>
                </div>

                <div class="recredit-hero__visual">
                    <div class="swiper recredit-hero-slider js-recredit-hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/hero_relabs_esthetician_salon.png?v=202607011412'); ?>" alt="エステサロンで美容機器を確認するスタッフ" loading="eager" decoding="async">
                            </div>
                        </div>
                        <div class="swiper-pagination recredit-hero-slider__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="recredit-issues" class="recredit-issues relabs-issues">
        <div class="recredit-issues__inner">
            <header class="recredit-issues__header">
                <h2 class="recredit-issues__title">
                    <span class="recredit-issues__title-en">Problems</span>
                    こんなお困りごとはありませんか？
                </h2>
            </header>

            <div class="recredit-issues__slider swiper js-recredit-issues-slider">
                <div class="recredit-issues__grid swiper-wrapper">
                    <article class="recredit-issues__card swiper-slide">
                        <span class="recredit-issues__card-number">01</span>
                        <h3 class="recredit-issues__card-title">急な停止</h3>
                        <ul class="recredit-issues__list">
                            <li>機器が急に動かなくなる</li>
                        </ul>
                    </article>

                    <article class="recredit-issues__card swiper-slide">
                        <span class="recredit-issues__card-number">02</span>
                        <h3 class="recredit-issues__card-title">施術品質の低下</h3>
                        <ul class="recredit-issues__list">
                            <li>出力が落ちて施術に影響</li>
                        </ul>
                    </article>

                    <article class="recredit-issues__card swiper-slide">
                        <span class="recredit-issues__card-number">03</span>
                        <h3 class="recredit-issues__card-title">部品不足</h3>
                        <ul class="recredit-issues__list">
                            <li>古くて部品が無くなってきている</li>
                        </ul>
                    </article>

                    <article class="recredit-issues__card swiper-slide">
                        <span class="recredit-issues__card-number">04</span>
                        <h3 class="recredit-issues__card-title">メーカー対応の不安</h3>
                        <ul class="recredit-issues__list">
                            <li>メーカー対応が遅い／コストが高い</li>
                        </ul>
                    </article>
                </div>
                <div class="swiper-pagination recredit-issues__pagination"></div>
            </div>
        </div>
    </section>

    <section id="relabs-strength" class="recredit-solution relabs-strength">
        <div class="recredit-solution__inner">
            <header class="recredit-solution__header">
                <p class="recredit-solution__label">Solution</p>
                <h2 class="recredit-solution__title">弊社の強み</h2>
            </header>
            <figure class="relabs-strength__banner">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/banner_4.png?v=2026062301'); ?>" alt="弊社の強み。即日または短期間対応可能、古いメーカー・廃盤機種も対応、代替機レンタル提供、再発防止・カスタマイズ提案" loading="lazy" decoding="async">
            </figure>
            <div class="recredit-solution__actions relabs-strength__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-solution__button">無料見積もり</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-solution__outline-button">問い合わせ</a>
            </div>
        </div>
    </section>

    <section id="recredit-solution" class="recredit-solution relabs-solution">
        <div class="recredit-solution__inner">
            <header class="recredit-solution__header">
                <p class="recredit-solution__label">Solution</p>
                <h2 class="recredit-solution__title">解決の特徴・差別化ポイント</h2>
            </header>

            <div class="recredit-solution__slider swiper js-recredit-solution-slider">
                <div class="recredit-solution__columns swiper-wrapper">
                    <section class="recredit-solution__column swiper-slide">
                        <div class="recredit-solution__column-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M13 2L3 14h8l-1 8 10-12h-8z"/></svg>
                        </div>
                        <h3 class="recredit-solution__column-title">即日または短期間対応可能</h3>
                        <ul class="recredit-solution__list">
                            <li>急な故障にも、診断から対応可否の確認までスピーディーに進めます。</li>
                        </ul>
                    </section>

                    <section class="recredit-solution__column swiper-slide">
                        <div class="recredit-solution__column-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M14.7 6.3a1 1 0 0 0 0 1.4l1.6 1.6a1 1 0 0 0 1.4 0l3.1-3.1a6 6 0 0 1-7.9 7.9l-6.6 6.6a2 2 0 0 1-2.8-2.8l6.6-6.6a6 6 0 0 1 7.9-7.9z"/></svg>
                        </div>
                        <h3 class="recredit-solution__column-title">古いメーカー・廃盤機種も対応</h3>
                        <ul class="recredit-solution__list">
                            <li>メーカー対応が難しい古い機種や廃盤機種も、修理可否を確認します。</li>
                        </ul>
                    </section>

                    <section class="recredit-solution__column swiper-slide">
                        <div class="recredit-solution__column-icon">
                            <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M4 7h16M4 17h16"/><path d="M7 4h10v16H7z"/></svg>
                        </div>
                        <h3 class="recredit-solution__column-title">代替機レンタル提供</h3>
                        <ul class="recredit-solution__list">
                            <li>修理期間中の施術停止リスクを抑えるため、代替機の相談にも対応します。</li>
                        </ul>
                    </section>
                </div>
                <div class="swiper-pagination recredit-solution__pagination"></div>
            </div>

            <div class="recredit-solution__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-solution__button">無料見積もり</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-solution__outline-button">問い合わせ</a>
            </div>
        </div>
    </section>

    <section id="recredit-scenes" class="recredit-scenes relabs-machines">
        <div class="recredit-scenes__inner">
            <header class="recredit-scenes__header">
                <h2 class="recredit-scenes__title">
                    <span class="recredit-scenes__title-en">Machines</span>
                    修理対応可能な機器
                </h2>
            </header>

            <div class="recredit-scenes__list">
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">光</span><div><h3 class="recredit-scenes__item-title">脱毛機</h3><p class="recredit-scenes__text">脱毛機、痩身機、複合機、ベッド、ハンドピースなどに対応</p></div></div>
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">美</span><div><h3 class="recredit-scenes__item-title">痩身機</h3><p class="recredit-scenes__text">出力低下や動作不良の確認</p></div></div>
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">複</span><div><h3 class="recredit-scenes__item-title">複合機</h3><p class="recredit-scenes__text">複数機能を持つ美容機器の診断</p></div></div>
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">床</span><div><h3 class="recredit-scenes__item-title">ベッド</h3><p class="recredit-scenes__text">施術ベッド周辺設備の相談</p></div></div>
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">手</span><div><h3 class="recredit-scenes__item-title">ハンドピース</h3><p class="recredit-scenes__text">断線や出力不良などの確認</p></div></div>
                <div class="recredit-scenes__item"><span class="recredit-scenes__icon" aria-hidden="true">型</span><div><h3 class="recredit-scenes__item-title">メーカー名／型番例</h3><p class="recredit-scenes__text">メーカー名／型番例を確認し、修理可否を案内します。</p></div></div>
            </div>
            <div class="top-product-grid relabs-machine-grid">
                <article class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/16.png'); ?>" alt="脱毛機">
                        </div>
                    </div>
                    <h3 class="top-product-card__title">脱毛機</h3>
                    <p class="top-product-card__label">脱毛機、痩身機、複合機、ベッド、ハンドピースなどに対応</p>
                </article>
                <article class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/img_product_thumb_2.png'); ?>" alt="痩身機">
                        </div>
                    </div>
                    <h3 class="top-product-card__title">痩身機</h3>
                    <p class="top-product-card__label">出力低下や動作不良の確認</p>
                </article>
                <article class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/img_product_thumb_1.png'); ?>" alt="複合機">
                        </div>
                    </div>
                    <h3 class="top-product-card__title">複合機</h3>
                    <p class="top-product-card__label">複数機能を持つ美容機器の診断</p>
                </article>
                <article class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/relabs-machine-bed-601.png?v=2026063020'); ?>" alt="ベッド">
                        </div>
                    </div>
                    <h3 class="top-product-card__title">ベッド</h3>
                    <p class="top-product-card__label">施術ベッド周辺設備の相談</p>
                </article>
                <article class="top-product-card">
                    <div class="top-product-card__frame">
                        <div class="top-product-card__image">
                            <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/img_product_thumb_3.png'); ?>" alt="ハンドピース">
                        </div>
                    </div>
                    <h3 class="top-product-card__title">ハンドピース</h3>
                    <p class="top-product-card__label">断線や出力不良などの確認</p>
                </article>
            </div>
            <p class="relabs-machine-note">その他、様々な機種に対応しております！まずはお気軽にご相談ください。</p>
            <div class="buying-final-cta__actions relabs-machine-actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-cases__button">無料見積もり</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-cases__outline-button">問い合わせ</a>
            </div>
        </div>
    </section>

    <section id="recredit-flow-intro" class="recredit-flow-intro relabs-flow">
        <div class="recredit-flow-intro__inner">
            <header class="recredit-flow-intro__header">
                <h2 class="recredit-flow-intro__title">
                    <span class="recredit-flow-intro__title-en">Flow</span>
                    修理の流れ
                </h2>
            </header>

            <ol class="recredit-flow-intro__list">
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true"><svg viewBox="0 0 48 48" role="img" focusable="false"><path d="M15 7h15l7 7v27H15z" /><path d="M30 7v8h7" /><path d="M20 22h12" /><path d="M20 28h10" /></svg></span>
                    <h3 class="recredit-flow-intro__step-title">お問い合わせ</h3>
                    <p class="recredit-flow-intro__text">症状、機種、メーカー名／型番例を確認します。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true"><svg viewBox="0 0 48 48" role="img" focusable="false"><path d="M11 16h26" /><path d="M11 24h26" /><path d="M11 32h18" /><circle cx="31" cy="28" r="5" /></svg></span>
                    <h3 class="recredit-flow-intro__step-title">診断・見積もり</h3>
                    <p class="recredit-flow-intro__text">診断結果をもとに、症状・機種により個別見積もりを提示します。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true"><svg viewBox="0 0 48 48" role="img" focusable="false"><path d="M14 34l20-20" /><path d="M18 14l16 16" /><path d="M10 38h28" /></svg></span>
                    <h3 class="recredit-flow-intro__step-title">修理実施</h3>
                    <p class="recredit-flow-intro__text">部品交換、ランプ交換、断線修理などの必要作業を実施します。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true"><svg viewBox="0 0 48 48" role="img" focusable="false"><path d="M8 24l10 10 22-22" /><path d="M10 38h28" /></svg></span>
                    <h3 class="recredit-flow-intro__step-title">動作確認・納品 or 出張／持込対応</h3>
                    <p class="recredit-flow-intro__text">動作確認後、納品または出張／持込対応で完了します。</p>
                </li>
            </ol>
            <p class="relabs-flow__note">お問い合わせ → 診断・見積もり → 修理実施 → 動作確認・納品 or 出張／持込対応。所要時間の目安は症状・機種・部品状況によりご案内します。</p>
        </div>
    </section>

    <section id="recredit-compare" class="recredit-compare relabs-price">
        <div class="recredit-compare__inner">
            <header class="recredit-compare__header">
                <h2 class="recredit-compare__title">
                    <span class="recredit-compare__title-en">Price</span>
                    料金例／費用の目安
                </h2>
                <p class="recredit-compare__lead">部品交換、ランプ交換、断線修理などの典型価格帯は、症状・機種により個別見積もりでご案内します。</p>
            </header>

            <div class="recredit-compare__table-wrap">
                <table class="recredit-compare__table">
                    <thead><tr><th>項目</th><th>費用の目安</th><th>備考</th></tr></thead>
                    <tbody>
                        <tr><th>オンライン調査</th><td><span class="recredit-compare__badge">3000円 / 30分</span></td><td>症状・機種により個別見積もり</td></tr>
                        <tr><th>現地調査費</th><td><span class="recredit-compare__badge">15,000円〜</span></td><td>機器仕様と部品状況を確認</td></tr>
                        <tr><th>断線修理</th><td><span class="recredit-compare__badge">10,000円〜</span></td><td>ハンドピースやケーブル周辺を診断</td></tr>
                        <tr><th>部品交換</th><td><span class="recredit-compare__badge">10,000円〜</span></td><td>訪問エリアにより確認</td></tr>
                        <tr><th>基板修理</th><td><span class="recredit-compare__badge">30,000円〜</span></td><td>持込・発送方法により確認</td></tr>
                        <tr><th>ランプ交換</th><td><span class="recredit-compare__badge">要見積もり</span></td><td>代替機の空き状況により案内</td></tr>
                        <tr><th>送料</th><td><span class="recredit-compare__badge">実費</span></td><td>代替機の空き状況により案内</td></tr>
                        <tr><th>代替機レンタル</th><td><span class="recredit-compare__badge">要見積もり</span></td><td>代替機の空き状況により案内</td></tr>
                    </tbody>
                </table>
            </div>
            <p class="recredit-compare__message">
                修理内容に応じてお見積もりをご案内いたします。作業前に費用をご確認いただいた上で修理を進めます。
            </p>
        </div>
    </section>

    <section id="recredit-benefits" class="recredit-benefits relabs-support">
        <div class="recredit-benefits__inner">
            <header class="recredit-benefits__header">
                <h2 class="recredit-benefits__title">
                    <span class="recredit-benefits__title-en">Support</span>
                    保証・アフターサポート
                </h2>
            </header>

            <div class="recredit-benefits__content">
                <section class="recredit-benefits__group">
                    <div class="recredit-benefits__group-inner">
                        <h3 class="recredit-benefits__group-title">修理後の保証期間</h3>
                        <ul class="recredit-benefits__list">
                            <li><strong>保証あり</strong> 修理内容に応じた保証期間をご案内します。</li>
                            <li><strong>再発防止策</strong> 使用環境や症状に合わせて改善案を整理します。</li>
                        </ul>
                    </div>
                </section>
                <section class="recredit-benefits__group">
                    <div class="recredit-benefits__group-inner">
                        <h3 class="recredit-benefits__group-title">メンテナンスプランの案内</h3>
                        <ul class="recredit-benefits__list">
                            <li><strong>メンテナンスプラン</strong> 定期点検や予防保全の相談に対応します。</li>
                            <li><strong>運用フォロー</strong> 故障リスクを抑え、施術停止を防ぐ体制を整えます。</li>
                        </ul>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section id="recredit-cases" class="recredit-cases relabs-cases">
        <div class="recredit-cases__inner">
            <header class="recredit-cases__header">
                <h2 class="recredit-cases__title">
                    <span class="recredit-cases__title-en">Reviews</span>
                    お客様の声／実績
                </h2>
                <p class="recredit-cases__lead">修理台数、対応機器数などの数字、実際のサロンのレビュー・ビフォーアフターを確認しながら、安心して相談できます。</p>
            </header>

            <div class="recredit-cases__slider swiper js-recredit-cases-slider">
                <div class="recredit-cases__list swiper-wrapper">
                    <article class="recredit-cases__item swiper-slide"><h3 class="recredit-cases__label"><span>修理台数・対応機器数の実績</span></h3><ul class="recredit-cases__points"><li>修理台数、対応機器数などの数字をもとに実績を紹介します。</li></ul></article>
                    <article class="recredit-cases__item swiper-slide"><h3 class="recredit-cases__label"><span>サロンレビュー</span></h3><ul class="recredit-cases__points"><li>実際のサロンのレビューを掲載し、対応スピードや安心感を伝えます。</li></ul></article>
                    <article class="recredit-cases__item swiper-slide"><h3 class="recredit-cases__label"><span>ビフォーアフター紹介</span></h3><ul class="recredit-cases__points"><li>実際のサロンのレビュー・ビフォーアフターを通じて修理後の状態を紹介します。</li></ul></article>
                </div>
                <div class="swiper-pagination recredit-cases__pagination"></div>
            </div>
        </div>
    </section>

    <section id="relabs-faq" class="relabs-faq">
        <div class="relabs-faq__inner">
            <header class="buying-section-header">
                <span class="buying-section-header__en">FAQ</span>
                <h2 class="buying-section-header__title">よくある質問</h2>
            </header>
            <div class="relabs-faq__list">
                <details class="relabs-faq__item" open><summary>他社購入の機械でも対応できますか？</summary><p>はい。メーカーや販売店を問わずご相談いただけます。まずは30分のオンライン調査にて、メーカー名・型番・症状を確認し、対応可否をご案内いたします。</p></details>
                <details class="relabs-faq__item"><summary>古い機械やメーカー修理終了機種でも対応できますか？</summary><p>メーカー修理が終了している機種でも対応可能な場合があります。まずはオンライン調査にて機種情報や症状を確認し、修理可能性をご案内いたします。</p></details>
                <details class="relabs-faq__item"><summary>修理できるか分からない機械でも相談できますか？</summary><p>はい。故障内容が不明な場合でもご相談いただけます。メーカー名・型番・症状をお知らせいただければ、オンライン調査にて状況を確認いたします。</p></details>
                <details class="relabs-faq__item"><summary>修理期間はどれくらいですか？</summary><p>故障内容や部品の在庫状況によって異なります。オンライン調査後に、おおよその修理期間や対応方法をご案内いたします。</p></details>
                <details class="relabs-faq__item"><summary>修理できなかった場合でも費用はかかりますか？</summary><p>オンライン調査費・現地調査費は発生いたしますが、修理を行わない場合は修理費用は発生いたしません。修理前に必ずお見積りをご案内いたします。</p></details>
            </div>
        </div>
    </section>

    <section id="relabs-final-cta" class="buying-final-cta relabs-final-cta">
        <div class="buying-final-cta__inner">
            <span class="buying-final-cta__label">Contact</span>
            <h2>LINEで写真を送る</h2>
            <p>フォーム、電話・LINEなど複数チャネル対応。24時間以内にご連絡します。</p>
            <div class="buying-final-cta__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-cases__button">無料見積もり</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-cases__outline-button">問い合わせ</a>
                <a href="https://lin.ee/ioXC3La" class="recredit-cases__outline-button relabs-line-button" target="_blank" rel="noopener noreferrer">LINEで送る</a>
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
    if (document.querySelector('.js-recredit-hero-slider')) {
        new Swiper('.js-recredit-hero-slider', {
            loop: true,
            effect: 'fade',
            speed: 900,
            autoplay: { delay: 3500, disableOnInteraction: false },
            pagination: { el: '.recredit-hero-slider__pagination', clickable: true },
        });
    }

    var recreditIssuesSwiper = null;
    var recreditIssuesMedia = window.matchMedia('(max-width: 750px)');
    function toggleRecreditIssuesSlider() {
        var slider = document.querySelector('.js-recredit-issues-slider');
        if (!slider || typeof window.Swiper === 'undefined') return;
        if (recreditIssuesMedia.matches) {
            if (!recreditIssuesSwiper) {
                recreditIssuesSwiper = new Swiper(slider, { slidesPerView: 1.08, spaceBetween: 16, speed: 600, grabCursor: true, pagination: { el: '.recredit-issues__pagination', clickable: true } });
            }
            return;
        }
        if (recreditIssuesSwiper) { recreditIssuesSwiper.destroy(true, true); recreditIssuesSwiper = null; }
    }
    toggleRecreditIssuesSlider();
    if (typeof recreditIssuesMedia.addEventListener === 'function') recreditIssuesMedia.addEventListener('change', toggleRecreditIssuesSlider);
    else if (typeof recreditIssuesMedia.addListener === 'function') recreditIssuesMedia.addListener(toggleRecreditIssuesSlider);

    var recreditSolutionSwiper = null;
    var recreditSolutionMedia = window.matchMedia('(max-width: 750px)');
    function toggleRecreditSolutionSlider() {
        var slider = document.querySelector('.js-recredit-solution-slider');
        if (!slider || typeof window.Swiper === 'undefined') return;
        if (recreditSolutionMedia.matches) {
            if (!recreditSolutionSwiper) {
                recreditSolutionSwiper = new Swiper(slider, { slidesPerView: 1.08, spaceBetween: 16, speed: 600, grabCursor: true, pagination: { el: '.recredit-solution__pagination', clickable: true } });
            }
            return;
        }
        if (recreditSolutionSwiper) { recreditSolutionSwiper.destroy(true, true); recreditSolutionSwiper = null; }
    }
    toggleRecreditSolutionSlider();
    if (typeof recreditSolutionMedia.addEventListener === 'function') recreditSolutionMedia.addEventListener('change', toggleRecreditSolutionSlider);
    else if (typeof recreditSolutionMedia.addListener === 'function') recreditSolutionMedia.addListener(toggleRecreditSolutionSlider);

    var recreditCasesSwiper = null;
    var recreditCasesMedia = window.matchMedia('(max-width: 750px)');
    function toggleRecreditCasesSlider() {
        var slider = document.querySelector('.js-recredit-cases-slider');
        if (!slider || typeof window.Swiper === 'undefined') return;
        if (recreditCasesMedia.matches) {
            if (!recreditCasesSwiper) {
                recreditCasesSwiper = new Swiper(slider, { slidesPerView: 1.08, spaceBetween: 16, speed: 600, grabCursor: true, pagination: { el: '.recredit-cases__pagination', clickable: true } });
            }
            return;
        }
        if (recreditCasesSwiper) { recreditCasesSwiper.destroy(true, true); recreditCasesSwiper = null; }
    }
    toggleRecreditCasesSlider();
    if (typeof recreditCasesMedia.addEventListener === 'function') recreditCasesMedia.addEventListener('change', toggleRecreditCasesSlider);
    else if (typeof recreditCasesMedia.addListener === 'function') recreditCasesMedia.addListener(toggleRecreditCasesSlider);
});
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
