<?php
/*
Template Name:店舗売買（リクレジットコピー）
*/
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title>店舗売買 | RESPECT FORCE</title>
    <meta name="description" content="店舗を売りたい方と買いたい方を直接つなぐ、美容業界特化のマッチングサービス。">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026063028" rel="stylesheet">

    <meta property="og:type" content="article">
    <meta property="og:title" content="店舗売買 | RESPECT FORCE">
    <meta property="og:url" content="<?php echo esc_url(home_url('/buying.html')); ?>">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">
    <meta property="og:description" content="店舗を売りたい方と買いたい方を直接つなぐ、美容業界特化のマッチングサービス。" />
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="店舗売買 | RESPECT FORCE">
    <meta name="twitter:description" content="店舗を売りたい方と買いたい方を直接つなぐ、美容業界特化のマッチングサービス。">
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

    <header id="recredit-hero" class="recredit-hero buying-hero">
        <div class="recredit-hero__bg"></div>
        <div class="recredit-hero__inner">
            <ul class="p-flex c-breadcrumbs --flex-sp recredit-hero__breadcrumbs">
                <li><a href="<?php echo home_url(); ?>">トップ</a></li>
                <li><span>店舗売買</span></li>
            </ul>

            <div class="recredit-hero__content">
                <div class="recredit-hero__copy">
                    <p class="recredit-hero__eyebrow">
                        <span class="recredit-hero__eyebrow-line"></span>
                        美容業界に特化した店舗売買マッチング
                    </p>
                    <h1 class="recredit-hero__title">
                        店舗・設備・顧客を<br>次のオーナーへ引き継ぐ<br>美容業界専門の店舗売買
                    </h1>
                    <p class="recredit-hero__lead">
                        店舗を売りたい方と買いたい方を直接つなぐ、<br>美容業界特化のマッチングサービス。<br>
                        独立開業から事業承継まで、安心・スピーディーにサポートします。
                    </p>
                    <div class="recredit-hero__actions">
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-hero__button">
                            <span>無料相談する</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" fill="none"><path d="M3 8h10M9 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                        <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-hero__outline-button">店舗掲載について相談する</a>
                    </div>
                </div>

                <div class="recredit-hero__visual">
                    <div class="swiper recredit-hero-slider js-recredit-hero-slider">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/hero_buying_unsplash_salon.jpg?v=2026063026'); ?>" alt="美容サロン内装のイメージ" loading="eager" decoding="async">
                            </div>
                        </div>
                        <div class="swiper-pagination recredit-hero-slider__pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="buying-value" class="recredit-overview buying-value">
        <div class="recredit-overview__inner buying-value__inner">
            <header class="buying-section-header">
                <span class="buying-section-header__en">Value</span>
                <h2 class="buying-section-header__title">選ばれる理由</h2>
            </header>
            <div class="buying-value__lead">
                <p>売手には「店舗・設備・顧客」を最大限に活かす場を。買手には「低リスクで開業・参入」できる機会を。<br>双方にとって最適な選択肢を実現します。</p>
            </div>
            <figure class="buying-value__banner">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/banner_1.png?v=2026062301'); ?>" alt="売手には店舗・設備・顧客を最大限に活かす場を、買手には低リスクで開業・参入できる機会を" loading="lazy" decoding="async">
            </figure>
            <div class="buying-value__grid">
                <article class="buying-value__card">
                    <h3>売手には</h3>
                    <p>「店舗・設備・顧客」を最大限に活かす場を</p>
                </article>
                <article class="buying-value__card">
                    <h3>買手には</h3>
                    <p>「低リスクで開業・参入」できる機会を</p>
                </article>
                <article class="buying-value__card">
                    <h3>双方に</h3>
                    <p>双方にとって最適な選択肢を実現します。</p>
                </article>
            </div>
        </div>
    </section>

    <section id="buying-services" class="buying-services">
        <div class="buying-services__inner">
            <header class="buying-section-header">
                <span class="buying-section-header__en">Services</span>
                <h2 class="buying-section-header__title">提供サービス内容</h2>
            </header>
            <div class="buying-services__grid">
                <article class="buying-services__item">
                    <span class="buying-services__number">01</span>
                    <h3>店舗情報の整理と掲載サポート</h3>
                </article>
                <article class="buying-services__item">
                    <span class="buying-services__number">02</span>
                    <h3>リメイクシェアサロン上での集客・マッチング強化</h3>
                </article>
                <article class="buying-services__item">
                    <span class="buying-services__number">03</span>
                    <h3>内見・条件交渉の調整</h3>
                </article>
                <article class="buying-services__item">
                    <span class="buying-services__number">04</span>
                    <h3>契約書類・法務・税務のサポート</h3>
                </article>
                <article class="buying-services__item">
                    <span class="buying-services__number">05</span>
                    <h3>引き継ぎ後のフォローアップ</h3>
                </article>
            </div>
        </div>
    </section>

    <section id="recredit-flow-intro" class="recredit-flow-intro buying-flow">
        <div class="recredit-flow-intro__inner">
            <header class="recredit-flow-intro__header">
                <h2 class="recredit-flow-intro__title">
                    <span class="recredit-flow-intro__title-en">Flow</span>
                    成約までの流れ
                </h2>
            </header>

            <ol class="recredit-flow-intro__list">
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M15 7h15l7 7v27H15z" />
                            <path d="M30 7v8h7" />
                            <path d="M20 22h12" />
                            <path d="M20 28h10" />
                            <path d="M20 34h7" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">店舗情報を登録 or 希望条件を登録</h3>
                    <p class="recredit-flow-intro__text">売却したい店舗情報、または購入希望条件を登録します。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M8 21l16-10 16 10" />
                            <path d="M12 21v18h24V21" />
                            <path d="M20 39V28h8v11" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">リメイクシェアサロンのプラットフォームに掲載</h3>
                    <p class="recredit-flow-intro__text">店舗情報を整理し、買手に伝わる形で掲載します。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M11 16h26" />
                            <path d="M11 24h26" />
                            <path d="M11 32h18" />
                            <path d="M34 31l5 5" />
                            <circle cx="31" cy="28" r="5" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">希望条件にマッチする買手を紹介</h3>
                    <p class="recredit-flow-intro__text">条件に合う候補者を紹介し、具体的な検討へ進めます。</p>
                </li>
                <li class="recredit-flow-intro__item">
                    <span class="recredit-flow-intro__number" aria-hidden="true">
                        <svg viewBox="0 0 48 48" role="img" focusable="false">
                            <path d="M8 20h32" />
                            <path d="M10 20l14-9 14 9" />
                            <path d="M14 20v15" />
                            <path d="M34 20v15" />
                            <path d="M9 35h30" />
                        </svg>
                    </span>
                    <h3 class="recredit-flow-intro__step-title">内見・条件交渉 → 契約・引き渡し</h3>
                    <p class="recredit-flow-intro__text">内見、条件交渉、契約、引き渡しまでスムーズに進行します。</p>
                </li>
            </ol>
        </div>
        <figure class="buying-flow__banner">
            <a href="https://share-salon.com/" target="_blank" rel="noopener noreferrer">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/banner_2.png?v=2026062301'); ?>" alt="売れなかった場合の活用方法。売却できなくてもリメイクシェアサロンとして活用可能" loading="lazy" decoding="async">
            </a>
        </figure>
    </section>

    <section id="recredit-cases" class="recredit-cases buying-cases">
        <div class="recredit-cases__inner">
            <header class="recredit-cases__header">
                <h2 class="recredit-cases__title">
                    <span class="recredit-cases__title-en">Case Studies</span>
                    成功事例
                </h2>
                <p class="recredit-cases__lead">こちらに掲載している内容は一部の事例です。<br>業種や組織規模に応じたその他の支援事例についても、初回相談時に状況に合わせてご紹介いたします。</p>
                <figure class="buying-cases__banner">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/img/common/banner_3.png?v=2026062301'); ?>" alt="成功事例。東京都豊島区のネイルサロンは掲載後45日で成約、閉店予定の美容室は買手決定まで30日で従業員の雇用も継続" loading="lazy" decoding="async">
                </figure>
            </header>

        </div>
    </section>

    <section id="buying-faq" class="relabs-faq buying-faq">
        <div class="relabs-faq__inner">
            <header class="buying-section-header">
                <span class="buying-section-header__en">FAQ</span>
                <h2 class="buying-section-header__title">よくある質問</h2>
            </header>
            <div class="relabs-faq__list">
                <details class="relabs-faq__item" open>
                    <summary>赤字でも売れますか？</summary>
                    <p>はい。売上や利益だけでなく、立地・設備・顧客・スタッフなど総合的に評価されます。赤字店舗でも成約した事例があります。</p>
                </details>
                <details class="relabs-faq__item">
                    <summary>顧客情報は引き継げますか？</summary>
                    <p>個人情報保護の観点から、顧客情報の取り扱いは法令や契約内容に沿って進めます。詳細は個別にご相談ください。</p>
                </details>
                <details class="relabs-faq__item">
                    <summary>スタッフごと譲渡できますか？</summary>
                    <p>可能です。スタッフの継続雇用を希望される場合は、買手との条件調整をサポートいたします。</p>
                </details>
                <details class="relabs-faq__item">
                    <summary>設備だけ売却できますか？</summary>
                    <p>はい。美容機器や什器など設備のみの売却相談も承っております。機種や状態を確認のうえご案内いたします。</p>
                </details>
                <details class="relabs-faq__item">
                    <summary>売却が決まるまで営業できますか？</summary>
                    <p>はい。通常は営業を継続しながら売却活動を進めます。お客様やスタッフへの影響を最小限に抑えながら進めることが可能です。</p>
                </details>
            </div>
        </div>
    </section>

    <section id="buying-final-cta" class="buying-final-cta">
        <div class="buying-final-cta__inner">
            <span class="buying-final-cta__label">Contact</span>
            <h2>ぜひお気軽にご相談ください！</h2>
            <p>無料で店舗掲載・相談受付中。24時間以内に担当よりご連絡します。</p>
            <div class="buying-final-cta__actions">
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="c-button --style-3 recredit-cases__button">無料相談する</a>
                <a href="<?php echo home_url(); ?>/contact.html?sv=001" class="recredit-cases__outline-button">店舗掲載について相談する</a>
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
});
    </script>

    <?php wp_footer(); ?>
  </body>
</html>
