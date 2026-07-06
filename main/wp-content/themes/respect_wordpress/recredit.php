<?php
/*
Template Name:リクレジット2
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('recredit'); ?>
    <title><?php echo esc_html($rf_seo["title"]); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo["description"]); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
    
    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026063015" rel="stylesheet">
    
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
    
    <header id="recredit-hero" class="recredit-hero">
        <div class="recredit-hero__bg"></div>
        <div class="recredit-hero__inner">
            <ul class="p-flex c-breadcrumbs --flex-sp recredit-hero__breadcrumbs">
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><span>Re・Credit</span></li>
            </ul>

            <div class="recredit-hero__content">
                <div class="recredit-hero__copy">
                    <p class="recredit-hero__eyebrow">
                        <span class="recredit-hero__eyebrow-line"></span>
                        美容業界に特化した
                    </p>
                    <h1 class="recredit-hero__title">
                        月額サブスク<br>集金代行サービス
                    </h1>
                    <p class="recredit-hero__lead">
                        面倒な請求業務は<br>
                        すべて <span>Re・Credit</span> におまかせ！
                    </p>
                    <p class="recredit-hero__target">
                        ≪スクール・サロン・エステ・セミナー≫<br>
                        すべて安心してお任せください。
                    </p>
                    <div class="recredit-hero__actions">
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-hero__button">
                            <span>資料請求</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-hero__outline-button">お問い合わせ</a>
                    </div>
                </div>

                <div class="recredit-hero__visual">
                    <div class="swiper recredit-hero-slider js-recredit-hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/hero_recredit_unsplash_payment.jpg?v=2026063024'); ?>" alt="スマートフォン決済のイメージ" loading="eager" decoding="async">
                            </div>
                        </div>
                        <div class="swiper-pagination recredit-hero-slider__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>


    <section id="recredit-issues" class="recredit-issues">
        <div class="recredit-issues__inner">
            <header class="recredit-issues__header">
                <h2 class="recredit-issues__title">
                    <span class="recredit-issues__title-en">Problems</span>
                    こんな課題、<br>抱えていませんか？
                </h2>
            </header>

            <div class="recredit-issues__slider swiper js-recredit-issues-slider">
                <div class="recredit-issues__grid swiper-wrapper">
                <article class="recredit-issues__card swiper-slide">
                    <span class="recredit-issues__card-number">01</span>
                    <h3 class="recredit-issues__card-title">売上機会の損失</h3>
                    <ul class="recredit-issues__list">
                        <li>決済手段の制限でお客様が契約を断念</li>
                        <li>クレジット以外の支払いに対応できず、来店機会を失う</li>
                        <li>若年層や学生層を取り込めず、成長のチャンスを逃す</li>
                    </ul>
                </article>

                <article class="recredit-issues__card swiper-slide">
                    <span class="recredit-issues__card-number">02</span>
                    <h3 class="recredit-issues__card-title">集金業務の負担</h3>
                    <ul class="recredit-issues__list">
                        <li>月謝や回数券の回収に手間がかかる</li>
                        <li>未回収リスクへの不安が常にある</li>
                        <li>事務処理に時間を取られてしまう</li>
                    </ul>
                </article>

                <article class="recredit-issues__card swiper-slide">
                    <span class="recredit-issues__card-number">03</span>
                    <h3 class="recredit-issues__card-title">決済の課題</h3>
                    <ul class="recredit-issues__list">
                        <li>初期費用や端末導入コストが大きい</li>
                        <li>WEBコンビニ払いなど、新しい決済ニーズに対応できない</li>
                        <li>現金・振込管理の手間が残ってしまう</li>
                    </ul>
                </article>
                </div>
                <div class="swiper-pagination recredit-issues__pagination"></div>
            </div>
        </div>
    </section>


    <section id="recredit-solution" class="recredit-solution">
        <div class="recredit-solution__inner">
            <header class="recredit-solution__header">
                <p class="recredit-solution__label">Solution</p>
                <h2 class="recredit-solution__title">Re・Creditで集金の手間も<br>未回収の不安も解決！</h2>
            </header>

            <div class="recredit-solution__slider swiper js-recredit-solution-slider">
                <div class="recredit-solution__columns swiper-wrapper">
                <section id="recredit-solution-fee" class="recredit-solution__column swiper-slide">
                    <div class="recredit-solution__column-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M12 1v22M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6"/></svg>
                    </div>
                    <h3 class="recredit-solution__column-title">無駄なコストを削ぎ落とした<br>決済手数料</h3>
                    <ul class="recredit-solution__list">
                        <li>クレジット決済に比べて大幅にコストを抑えられます。</li>
                        <li>初期費用や端末導入費用は一切不要。すぐに導入可能。</li>
                        <li>シンプルな料金体系で、毎月の経費が明確になります。</li>
                        <li>小規模サロンから大規模スクールまで幅広く対応可能。</li>
                    </ul>
                </section>

                <section id="recredit-solution-auto-payment" class="recredit-solution__column swiper-slide">
                    <div class="recredit-solution__column-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
                    </div>
                    <h3 class="recredit-solution__column-title">支払い忘れを減らす仕組み</h3>
                    <ul class="recredit-solution__list">
                        <li>毎月27日に口座から自動引落し。手間なくスムーズに。</li>
                        <li>顧客が支払いを忘れてしまうリスクを大幅に軽減。</li>
                        <li>継続課金や定額制サービスに最適な集金方法。</li>
                        <li>審査不要で利用でき、顧客にとっても安心感のある仕組み。</li>
                    </ul>
                </section>

                <section id="recredit-solution-convenience" class="recredit-solution__column swiper-slide">
                    <div class="recredit-solution__column-icon">
                        <svg width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/><polyline points="9 22 9 12 15 12 15 22"/></svg>
                    </div>
                    <h3 class="recredit-solution__column-title">24時間いつでも、<br>全国のコンビニで支払い</h3>
                    <ul class="recredit-solution__list">
                        <li>約45,000店舗のコンビニで、好きな時間にお支払い可能。</li>
                        <li>スマホで受け取ったバーコードを提示するだけの簡単決済。</li>
                        <li>クレジットカードを持たない若年層や未成年にも対応。</li>
                        <li>支払状況はリアルタイムで確認でき、回収漏れを防ぎます。</li>
                    </ul>
                </section>
                </div>
                <div class="swiper-pagination recredit-solution__pagination"></div>
            </div>

            <div class="recredit-solution__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-solution__button">
                    <span>資料請求</span>
                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-solution__outline-button">お問い合わせ</a>
            </div>
        </div>
    </section>


    <section id="recredit-overview" class="recredit-overview">
        <div class="recredit-overview__inner">
            <figure class="recredit-overview__figure">
                <img src="<?php bloginfo('template_directory'); ?>/img/common/recre1.png" alt="Re・Creditとは 口座振替とコンビニ決済で未回収リスクをゼロにする新しい集金代行サービス">
            </figure>
        </div>
    </section>


    <section id="recredit-flow-intro" class="recredit-flow-intro">
        <div class="recredit-flow-intro__inner">
            <header class="recredit-flow-intro__header">
                <h2 class="recredit-flow-intro__title">
                    <span class="recredit-flow-intro__title-en">Flow</span>
                    導入の流れ
                </h2>
            </header>

            <ol class="recredit-flow-intro__list">
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M31 8l9 9" />
                            <path d="M14 34l-4 4 6-2 21-21a3 3 0 0 0-4-4L12 32z" />
                            <path d="M27 12l9 9" />
                            <path d="M11 40h26" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">申込書記入</h3>
                    <p class="recredit-flow-intro__text">必要事項をご記入いただきます</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M16 17h16l5 9-5 14H16L11 26z" />
                            <path d="M18 17c0-5 3-9 6-9s6 4 6 9" />
                            <circle cx="24" cy="29" r="5" />
                            <path d="M24 24v10" />
                            <path d="M20 29h8" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">リクレへ送付</h3>
                    <p class="recredit-flow-intro__text">申込書をリクレに送付</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <circle cx="15" cy="24" r="6" />
                            <path d="M8 36h14" />
                            <path d="M15 18v12" />
                            <path d="M12 22h6" />
                            <path d="M24 24h15" />
                            <path d="M33 16l8 8-8 8" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">自動振替開始</h3>
                    <p class="recredit-flow-intro__text">口座振替・コンビニ払いで回収</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M6 19 24 8l18 11" />
                            <path d="M9 20h30" />
                            <circle cx="24" cy="16" r="2" />
                            <path d="M12 38h24" />
                            <path d="M8 43h32" />
                            <path d="M14 24v10" />
                            <path d="M20.5 24v10" />
                            <path d="M27.5 24v10" />
                            <path d="M34 24v10" />
                            <path d="M11 34h26" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">代金入金</h3>
                    <p class="recredit-flow-intro__text">回収代金をサロンへ入金</p>
                </li>
            </ol>
        </div>
    </section>


    <section id="recredit-benefits" class="recredit-benefits">
        <div class="recredit-benefits__inner">
            <header class="recredit-benefits__header">
                <h2 class="recredit-benefits__title">
                    <span class="recredit-benefits__title-en">Benefits</span>
                    Re・Creditの圧倒的メリット
                </h2>
            </header>

            <div class="recredit-benefits__content">
                <section id="recredit-benefits-user" class="recredit-benefits__group">
                    <div class="recredit-benefits__group-inner">
                        <span class="recredit-benefits__badge">手数料業界最安値</span>
                        <h3 class="recredit-benefits__group-title">利用者(お客様)のメリット</h3>
                        <ul class="recredit-benefits__list">
                            <li><strong>分割手数料0円</strong> 支払い負担が増えない</li>
                            <li><strong>クレジット審査不要</strong> 誰でも安心して利用可能</li>
                            <li><strong>18歳未満・学生もOK</strong> クレジットカード不要で利用できる</li>
                            <li><strong>支払い方法を自由に選択</strong> 口座振替・コンビニ払い対応</li>
                        </ul>
                    </div>
                </section>

                <section id="recredit-benefits-business" class="recredit-benefits__group">
                    <div class="recredit-benefits__group-inner">
                        <span class="recredit-benefits__badge">回収率 98%</span>
                        <h3 class="recredit-benefits__group-title">事業者(サロン・スクール)のメリット</h3>
                        <ul class="recredit-benefits__list">
                            <li><strong>月額管理費は2,300円のみ</strong> 圧倒的な低コスト</li>
                            <li><strong>請求・入金管理の手間ゼロ</strong> 面倒な業務から解放</li>
                            <li><strong>端末・ソフト不要で導入簡単</strong> 初期投資が不要</li>
                            <li><strong>未回収リスクを最小化</strong> 引落失敗時も自動でコンビニ決済</li>
                        </ul>
                    </div>
                </section>
            </div>

            <div class="recredit-benefits__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-benefits__button">資料請求&nbsp;→</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-benefits__outline-button">お問い合わせ</a>
            </div>
        </div>
    </section>


    <section id="recredit-functions" class="recredit-functions">
        <div class="recredit-functions__inner">
            <header class="recredit-functions__header">
                <h2 class="recredit-functions__title">
                    <span class="recredit-functions__title-en">Features</span>
                    Re・Creditだけの独自機能
                </h2>
            </header>

            <div class="recredit-functions__grid">
                <article class="recredit-functions__item">
                    <div class="recredit-functions__item-inner">
                        <div class="recredit-functions__icon" aria-hidden="true">
                            <svg viewBox="0 0 48 48" role="img" focusable="false">
                                <path d="M36 16a14 14 0 1 0 2 14" />
                                <path d="M36 8v8h-8" />
                                <path d="M18 25l4 4 9-10" />
                            </svg>
                        </div>
                        <h3 class="recredit-functions__item-title">自動バックアップシステム</h3>
                        <p class="recredit-functions__text">
                            口座振替に失敗しても、即時にコンビニ払い用バーコードを発行。
                        </p>
                        <p class="recredit-functions__emphasis">「未回収ゼロ」を実現する業界初の安心機能。</p>
                    </div>
                </article>

                <article class="recredit-functions__item">
                    <div class="recredit-functions__item-inner">
                        <div class="recredit-functions__icon">¥</div>
                        <h3 class="recredit-functions__item-title">回数券価格で都度払い</h3>
                        <p class="recredit-functions__text">
                            都度払いなのに回数券並みの割安価格を実現。
                        </p>
                        <p class="recredit-functions__emphasis">サロンは売上安定、顧客は支払い負担軽減。</p>
                    </div>
                </article>

                <article class="recredit-functions__item">
                    <div class="recredit-functions__item-inner">
                        <div class="recredit-functions__icon">◎</div>
                        <h3 class="recredit-functions__item-title">美容業界完全特化</h3>
                        <p class="recredit-functions__text">
                            20年の美容業界実績を活かし、エステ・ネイル・美容室・スクール専用に最適化。
                        </p>
                        <p class="recredit-functions__emphasis">美容の現場を知り尽くした決済代行で差別化。</p>
                    </div>
                </article>
            </div>
        </div>
    </section>


    <section id="recredit-scenes" class="recredit-scenes">
        <div class="recredit-scenes__inner">
            <header class="recredit-scenes__header">
                <h2 class="recredit-scenes__title">
                    <span class="recredit-scenes__title-en">Use Cases</span>
                    ご利用シーン
                </h2>
            </header>

            <div class="recredit-scenes__list">
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M10 16h28a3 3 0 0 1 3 3v5a4 4 0 0 0 0 8v5a3 3 0 0 1-3 3H10a3 3 0 0 1-3-3v-5a4 4 0 0 0 0-8v-5a3 3 0 0 1 3-3z" />
                            <path d="M17 16v24" />
                            <path d="M24 24h9" />
                            <path d="M24 31h7" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">エステ回数券</h3>
                        <p class="recredit-scenes__text">回数券の分割払いに対応</p>
                    </div>
                </div>
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M8 21l16-10 16 10" />
                            <path d="M12 21v18h24V21" />
                            <path d="M20 39V28h8v11" />
                            <path d="M16 25h4" />
                            <path d="M28 25h4" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">スクール代金</h3>
                        <p class="recredit-scenes__text">授業料の確実な回収</p>
                    </div>
                </div>
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M13 10v6" />
                            <path d="M35 10v6" />
                            <path d="M8 17h32" />
                            <path d="M10 13h28a2 2 0 0 1 2 2v24a2 2 0 0 1-2 2H10a2 2 0 0 1-2-2V15a2 2 0 0 1 2-2z" />
                            <path d="M17 26h14" />
                            <path d="M17 33h10" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">月謝制度</h3>
                        <p class="recredit-scenes__text">毎月の月謝を自動回収</p>
                    </div>
                </div>
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M34 13a14 14 0 0 0-22 7" />
                            <path d="M12 13v7h7" />
                            <path d="M14 35a14 14 0 0 0 22-7" />
                            <path d="M36 35v-7h-7" />
                            <path d="M19 24h10" />
                            <path d="M24 19v10" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">サブスク（定期課金）</h3>
                        <p class="recredit-scenes__text">継続サービスの課金管理</p>
                    </div>
                </div>
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M10 35c3-7 9-11 14-11s11 4 14 11" />
                            <circle cx="24" cy="17" r="6" />
                            <path d="M8 39h32" />
                            <path d="M14 31h20" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">セミナー会費</h3>
                        <p class="recredit-scenes__text">イベント参加費の回収</p>
                    </div>
                </div>
                <div class="recredit-scenes__item">
                    <span class="recredit-scenes__icon" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M10 16h28a3 3 0 0 1 3 3v5a4 4 0 0 0 0 8v5a3 3 0 0 1-3 3H10a3 3 0 0 1-3-3v-5a4 4 0 0 0 0-8v-5a3 3 0 0 1 3-3z" />
                            <path d="M17 16v24" />
                            <path d="M24 24h9" />
                            <path d="M24 31h7" />
                        </svg>
                    </span>
                    <div>
                        <h3 class="recredit-scenes__item-title">チケット販売</h3>
                        <p class="recredit-scenes__text">各種チケットの販売管理</p>
                    </div>
                </div>
            </div>

            <div class="recredit-scenes__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-scenes__button">資料請求</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-scenes__outline-button">お問い合わせ</a>
            </div>
        </div>
    </section>


    <section id="recredit-compare" class="recredit-compare">
        <div class="recredit-compare__inner">
            <header class="recredit-compare__header">
                <h2 class="recredit-compare__title">
                    <span class="recredit-compare__title-en">Comparison</span>
                    他社との徹底比較
                </h2>
                <p class="recredit-compare__lead">美容サロン・スクールの固定費と導入条件を、見やすく整理しました。</p>
            </header>

            <div class="recredit-compare__table-wrap">
                <table class="recredit-compare__table">
                    <thead>
                        <tr>
                            <th>項目</th>
                            <th>Re・Credit</th>
                            <th>クレジット決済A社</th>
                            <th>差額</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>初期費用</th>
                            <td><span class="recredit-compare__badge">0円</span></td>
                            <td>31,500円</td>
                            <td><span class="recredit-compare__badge">▲31,500円</span></td>
                        </tr>
                        <tr>
                            <th>月額基本料</th>
                            <td><span class="recredit-compare__badge">2,300円</span></td>
                            <td>12,000円</td>
                            <td><span class="recredit-compare__badge">▲9,700円</span></td>
                        </tr>
                        <tr>
                            <th>決済手数料</th>
                            <td><span class="recredit-compare__badge">5%</span></td>
                            <td>13%</td>
                            <td><span class="recredit-compare__badge">▲ 8%</span></td>
                        </tr>
                        <tr>
                            <th>審査</th>
                            <td><span class="recredit-compare__badge">不要</span></td>
                            <td>必要</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <th>18歳未満</th>
                            <td><span class="recredit-compare__badge">利用可</span></td>
                            <td>利用不可</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <p class="recredit-compare__message">
                <span class="recredit-compare__message-label">Cost Merit</span>
                <span>50万円の決済の場合、年間で最大約62万円もお得！</span>
            </p>
        </div>
    </section>


    <section id="recredit-cases" class="recredit-cases">
        <div class="recredit-cases__inner">
            <header class="recredit-cases__header">
                <h2 class="recredit-cases__title">
                    <span class="recredit-cases__title-en">Case Studies</span>
                    活用事例・導入実績
                </h2>
                <p class="recredit-cases__lead">美容サロン・スクール・スタジオなど、幅広い業種で成果が出ています。</p>
            </header>

            <div class="recredit-cases__slider swiper js-recredit-cases-slider">
                <div class="recredit-cases__list swiper-wrapper">
                <article class="recredit-cases__item swiper-slide">
                    <figure class="recredit-cases__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/recredit-case-esthetic-salon.jpg?v=2026063014'); ?>" alt="エステサロンの施術イメージ" loading="lazy" decoding="async">
                    </figure>
                    <div class="recredit-cases__body">
                        <h3 class="recredit-cases__label">
                            <span class="recredit-cases__label-icon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" focusable="false">
                                    <path d="M13 25c3.5 4 10.5 4 14 0" />
                                    <path d="M12 17c2-6 14-6 16 0" />
                                    <path d="M14 19h.1M26 19h.1" />
                                    <path d="M8 12l2-4 2 4 4 2-4 2-2 4-2-4-4-2z" />
                                </svg>
                            </span>
                            <span>エステサロンO様(某県)</span>
                        </h3>
                        <ul class="recredit-cases__points">
                            <li><strong>売上230%アップ</strong>（320万 → 550万）</li>
                            <li>継続率大幅向上で安定収益化</li>
                            <li>「安心して長期契約してくれる」</li>
                        </ul>
                    </div>
                </article>

                <article class="recredit-cases__item swiper-slide">
                    <figure class="recredit-cases__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/recredit-case-nail-salon.jpg?v=2026063014'); ?>" alt="ネイルサロンの施術イメージ" loading="lazy" decoding="async">
                    </figure>
                    <div class="recredit-cases__body">
                        <h3 class="recredit-cases__label">
                            <span class="recredit-cases__label-icon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" focusable="false">
                                    <path d="M16 9h8v8h-8z" />
                                    <path d="M14 17h12l3 15H11z" />
                                    <path d="M17 23h6" />
                                </svg>
                            </span>
                            <span>ネイルサロン様</span>
                        </h3>
                        <ul class="recredit-cases__points">
                            <li>クレジット未所持の20歳未満顧客を獲得</li>
                            <li>分割購入＆定額プランで契約率アップ</li>
                            <li><strong>未回収率 15% → 0%</strong></li>
                        </ul>
                    </div>
                </article>

                <article class="recredit-cases__item swiper-slide">
                    <figure class="recredit-cases__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/recredit-case-beauty-school.jpg?v=2026063014'); ?>" alt="美容スクールの授業イメージ" loading="lazy" decoding="async">
                    </figure>
                    <div class="recredit-cases__body">
                        <h3 class="recredit-cases__label">
                            <span class="recredit-cases__label-icon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" focusable="false">
                                    <path d="M5 15l15-7 15 7-15 7z" />
                                    <path d="M11 19v7c4.5 3 13.5 3 18 0v-7" />
                                    <path d="M34 16v10" />
                                </svg>
                            </span>
                            <span>美容スクール様</span>
                        </h3>
                        <ul class="recredit-cases__points">
                            <li><strong>生徒数前年比280%増加</strong></li>
                            <li>全国どこでもコンビニ決済対応</li>
                            <li>「保護者も安心して契約」</li>
                            <li><strong>事務作業時間 80%削減</strong></li>
                        </ul>
                    </div>
                </article>

                <article class="recredit-cases__item swiper-slide">
                    <figure class="recredit-cases__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/recredit-case-english-school.jpg?v=2026063014'); ?>" alt="英会話スクールの授業イメージ" loading="lazy" decoding="async">
                    </figure>
                    <div class="recredit-cases__body">
                        <h3 class="recredit-cases__label">
                            <span class="recredit-cases__label-icon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" focusable="false">
                                    <path d="M8 10h24v18H18l-7 5v-5H8z" />
                                    <path d="M14 17h12" />
                                    <path d="M14 22h8" />
                                </svg>
                            </span>
                            <span>英会話スクールB様</span>
                        </h3>
                        <ul class="recredit-cases__points">
                            <li>月謝管理を自動化 → 事務作業を大幅削減</li>
                            <li>「支払いが楽になった」と生徒から好評</li>
                        </ul>
                    </div>
                </article>

                <article class="recredit-cases__item swiper-slide">
                    <figure class="recredit-cases__image">
                        <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/recredit-case-yoga-studio.jpg?v=2026063014'); ?>" alt="ヨガスタジオのレッスンイメージ" loading="lazy" decoding="async">
                    </figure>
                    <div class="recredit-cases__body">
                        <h3 class="recredit-cases__label">
                            <span class="recredit-cases__label-icon" aria-hidden="true">
                                <svg viewBox="0 0 40 40" focusable="false">
                                    <path d="M20 9a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                    <path d="M20 17v8" />
                                    <path d="M10 20l10 5 10-5" />
                                    <path d="M20 25l-8 8" />
                                    <path d="M20 25l8 8" />
                                </svg>
                            </span>
                            <span>ヨガスタジオC様</span>
                        </h3>
                        <ul class="recredit-cases__points">
                            <li><strong>継続率20%向上</strong></li>
                            <li>定期課金管理がラクになりサービスに集中</li>
                        </ul>
                    </div>
                </article>
                </div>
                <div class="swiper-pagination recredit-cases__pagination"></div>
            </div>

            <div class="recredit-cases__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-cases__button">資料請求&nbsp;→</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-cases__outline-button">お問い合わせ</a>
            </div>
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

document.addEventListener('DOMContentLoaded', function() {
    if (document.querySelector('.js-recredit-hero-slider')) {
        new Swiper('.js-recredit-hero-slider', {
            loop: true,
            effect: 'fade',
            speed: 900,
            autoplay: {
                delay: 3500,
                disableOnInteraction: false,
            },
            pagination: {
                el: '.recredit-hero-slider__pagination',
                clickable: true,
            },
        });
    }

    var recreditIssuesSwiper = null;
    var recreditIssuesMedia = window.matchMedia('(max-width: 750px)');

    function toggleRecreditIssuesSlider() {
        var slider = document.querySelector('.js-recredit-issues-slider');

        if (!slider || typeof window.Swiper === 'undefined') {
            return;
        }

        if (recreditIssuesMedia.matches) {
            if (!recreditIssuesSwiper) {
                recreditIssuesSwiper = new Swiper(slider, {
                    slidesPerView: 1.08,
                    spaceBetween: 16,
                    speed: 600,
                    grabCursor: true,
                    pagination: {
                        el: '.recredit-issues__pagination',
                        clickable: true,
                    },
                });
            }
            return;
        }

        if (recreditIssuesSwiper) {
            recreditIssuesSwiper.destroy(true, true);
            recreditIssuesSwiper = null;
        }
    }

    toggleRecreditIssuesSlider();
    if (typeof recreditIssuesMedia.addEventListener === 'function') {
        recreditIssuesMedia.addEventListener('change', toggleRecreditIssuesSlider);
    } else if (typeof recreditIssuesMedia.addListener === 'function') {
        recreditIssuesMedia.addListener(toggleRecreditIssuesSlider);
    }

    var recreditSolutionSwiper = null;
    var recreditSolutionMedia = window.matchMedia('(max-width: 750px)');

    function toggleRecreditSolutionSlider() {
        var slider = document.querySelector('.js-recredit-solution-slider');

        if (!slider || typeof window.Swiper === 'undefined') {
            return;
        }

        if (recreditSolutionMedia.matches) {
            if (!recreditSolutionSwiper) {
                recreditSolutionSwiper = new Swiper(slider, {
                    slidesPerView: 1.08,
                    spaceBetween: 16,
                    speed: 600,
                    grabCursor: true,
                    pagination: {
                        el: '.recredit-solution__pagination',
                        clickable: true,
                    },
                });
            }
            return;
        }

        if (recreditSolutionSwiper) {
            recreditSolutionSwiper.destroy(true, true);
            recreditSolutionSwiper = null;
        }
    }

    toggleRecreditSolutionSlider();
    if (typeof recreditSolutionMedia.addEventListener === 'function') {
        recreditSolutionMedia.addEventListener('change', toggleRecreditSolutionSlider);
    } else if (typeof recreditSolutionMedia.addListener === 'function') {
        recreditSolutionMedia.addListener(toggleRecreditSolutionSlider);
    }

    var recreditCasesSwiper = null;
    var recreditCasesMedia = window.matchMedia('(max-width: 750px)');

    function toggleRecreditCasesSlider() {
        var slider = document.querySelector('.js-recredit-cases-slider');

        if (!slider || typeof window.Swiper === 'undefined') {
            return;
        }

        if (recreditCasesMedia.matches) {
            if (!recreditCasesSwiper) {
                recreditCasesSwiper = new Swiper(slider, {
                    slidesPerView: 1.08,
                    spaceBetween: 16,
                    speed: 600,
                    grabCursor: true,
                    pagination: {
                        el: '.recredit-cases__pagination',
                        clickable: true,
                    },
                });
            }
            return;
        }

        if (recreditCasesSwiper) {
            recreditCasesSwiper.destroy(true, true);
            recreditCasesSwiper = null;
        }
    }

    toggleRecreditCasesSlider();
    if (typeof recreditCasesMedia.addEventListener === 'function') {
        recreditCasesMedia.addEventListener('change', toggleRecreditCasesSlider);
    } else if (typeof recreditCasesMedia.addListener === 'function') {
        recreditCasesMedia.addListener(toggleRecreditCasesSlider);
    }

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
