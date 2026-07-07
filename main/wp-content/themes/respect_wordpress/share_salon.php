<?php
/*
Template Name:シェアサロン
*/
$theme_uri = esc_url(get_template_directory_uri());
$contact_url = 'https://lin.ee/nvrX6ie';
$rf_seo = rf_theme_get_seo_text('share_salon');
$share_features = array(
    array(
        'icon' => 'pin',
        'title_before' => '好立地・設備完備の',
        'title_after' => 'サロンを利用できる',
        'break_after_title_before' => true,
        'description' => '駅近・設備完備のサロンを利用可能',
        'image' => 'card-salon.jpg',
        'alt' => '設備の整ったシェアサロン空間',
    ),
    array(
        'icon' => 'calendar',
        'title_before' => '1回から月極まで',
        'title_after' => '利用できる',
        'break_after_title_before' => true,
        'description' => '働き方に合わせて自由に選べる',
        'image' => 'card-calendar.jpg',
        'alt' => '予約や利用日を管理するカレンダー',
    ),
    array(
        'icon' => 'support',
        'title_before' => '予約・顧客管理まで',
        'title_after' => 'サポート',
        'break_after_title_before' => true,
        'description' => '24時間予約受付にも対応',
        'image' => 'card-reservation.jpg',
        'alt' => 'スマートフォンで予約管理をする様子',
    ),
);
$share_worries = array(
    array(
        'number' => '01',
        'icon' => 'tangle',
        'title' => '顧客はいるのに、働く場所がない',
        'description' => '出産・転職・独立などでお客様がいても施術する場所がない。',
        'image' => 'worry-workplace.jpg',
        'alt' => '働く場所について悩む美容師',
        'layout' => 'right',
    ),
    array(
        'number' => '02',
        'icon' => 'heart',
        'title' => '独立したいけど、初期費用が不安',
        'description' => '物件契約・内装工事・設備購入。いきなり数百万円かけるのは不安。',
        'image' => 'worry-startup-cost.jpg',
        'alt' => '独立の初期費用に悩む女性',
        'layout' => 'left',
    ),
    array(
        'number' => '03',
        'icon' => 'calendar',
        'title' => '今の働き方のままでは収入が増えない',
        'description' => '歩合や給与に限界を感じている。もっと自由に働きたい。',
        'image' => 'worry-income.jpg',
        'alt' => '働き方と収入について悩む女性',
        'layout' => 'right',
    ),
    array(
        'number' => '04',
        'icon' => 'clock',
        'title' => '副業や週1日だけでも働きたい',
        'description' => '空いた時間だけ施術したい。でも場所が見つからない。',
        'image' => 'worry-sidejob.jpg',
        'alt' => 'スマートフォンで予定を確認する女性',
        'layout' => 'left',
    ),
    array(
        'number' => '05',
        'icon' => 'parenting',
        'title' => '子育てしながら美容の仕事を続けたい',
        'description' => 'フルタイムは難しい。でも担当していたお客様はいる。',
        'image' => 'worry-parenting.jpg',
        'alt' => '子育てをしながら美容の仕事を続けたい母親',
        'layout' => 'right',
    ),
);
$share_supports = array(
    array(
        'number' => '01',
        'title' => 'サロンの空席・空ベッドを利用できる',
        'description' => '美容室・ネイル・アイラッシュ・エステサロンなどの空席を活用できます。',
        'photo' => 'support-photo-01.png',
        'icon' => 'support-icon-01.png',
        'alt' => '空席や空ベッドを利用できるサロン空間',
        'layout' => 'photo-left',
    ),
    array(
        'number' => '02',
        'title' => '物件契約も内装工事も不要',
        'description' => 'まずは場所代だけで、自分のお客様へ施術できます。',
        'photo' => 'support-photo-02.png',
        'icon' => 'support-icon-02.png',
        'alt' => '契約や工事なしで使える施術スペース',
        'layout' => 'photo-right',
    ),
    array(
        'number' => '03',
        'title' => '売上100%還元',
        'description' => '売上から歩合を引かれず、すべて売上はあなたのもの。',
        'photo' => 'support-photo-03.png',
        'icon' => 'support-icon-03.png',
        'alt' => '売上計算をする手元',
        'layout' => 'photo-left',
    ),
    array(
        'number' => '04',
        'title' => '1回から月極まで利用可能',
        'description' => '週1日・スポット利用・月極利用など、働き方に合わせて選べます。',
        'photo' => 'support-photo-04.png',
        'icon' => 'support-icon-04.png',
        'alt' => 'スマートフォンで予約や予定を確認する女性',
        'layout' => 'photo-right',
    ),
    array(
        'number' => '05',
        'title' => '空いた時間だけ働ける',
        'description' => 'フルタイム勤務をしなくても、自分のペースで美容の仕事を続けられます。',
        'photo' => 'support-photo-05.png',
        'icon' => 'support-icon-05.png',
        'alt' => 'ネイル施術をする女性',
        'layout' => 'photo-left',
    ),
);
$share_cases = array(
    array(
        'job' => 'スタイリスト',
        'icon' => 'case-icon-stylist.png',
        'photo' => 'case-photo-01.png',
        'alt' => '週2日勤務で施術を再開したスタイリスト',
        'lead' => '週2日勤務で',
        'result' => '月収20万円',
        'body' => "出産を機に退職。\nRe・Makeを利用して週2日だけ施術を再開。\n担当していたお客様を中心に来店いただき、月収20万円を実現。",
        'layout' => 'photo-left',
    ),
    array(
        'job' => 'ネイリスト',
        'icon' => 'case-icon-nailist.png',
        'photo' => 'case-photo-02.png',
        'alt' => '初期費用0円で開業を始めたネイリスト',
        'lead' => '初期費用',
        'result' => '0円',
        'after' => 'で開業スタート',
        'body' => "独立したいと思っていたものの、開業には約300万円が必要でした。\nRe・Makeで月極利用からスタートし、1年後に自身のネイルサロンをオープン。",
        'layout' => 'photo-right',
    ),
    array(
        'job' => 'アイリスト',
        'icon' => 'case-icon-eyelist.png',
        'photo' => 'case-photo-03.png',
        'alt' => '顧客を引き継ぎながら営業を再開したアイリスト',
        'lead' => '給料23万円から',
        'result' => '月収80万円へ',
        'body' => "勤務していたサロンが突然閉店。\nお客様の予約も入っていましたが、Re・Makeで場所を確保し、わずか1週間で営業を再開。\n現在は顧客を引き継ぎながら、月収80万円を実現。",
        'layout' => 'photo-left',
    ),
    array(
        'job' => 'エステティシャン',
        'icon' => 'case-icon-esthetician.png',
        'photo' => 'case-photo-04.png',
        'alt' => '土日だけシェアサロンを利用するエステティシャン',
        'lead' => '土日だけで',
        'result' => '月収8万円アップ',
        'body' => "平日は別の仕事をしながら、土日だけRe・Makeを利用。\n空いた時間を活用し、副収入として月8万円を実現しています。",
        'layout' => 'photo-right',
    ),
);
?>

<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">
    <title><?php echo esc_html($rf_seo['title']); ?></title>
    <meta name="description" content="<?php echo esc_attr($rf_seo['description']); ?>">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">

    <link href="<?php bloginfo('template_directory'); ?>/css/common.css?v=2026070608" rel="stylesheet">

    <meta property="og:type" content="article">
    <meta property="og:title" content="<?php echo esc_attr($rf_seo['title']); ?>">
    <meta property="og:url" content="<?php echo esc_url(home_url('/share-salon.html')); ?>">
    <meta property="og:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">
    <meta property="og:description" content="<?php echo esc_attr($rf_seo['description']); ?>">
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($rf_seo['title']); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($rf_seo['description']); ?>">
    <meta name="twitter:image" content="<?php bloginfo('template_directory'); ?>/img/common/ogp.png">

    <link rel="shortcut icon" href="img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/common/favicon.png">

    <?php wp_head(); ?>
  </head>
<body class="share-salon-page">

    <?php get_header(); ?>

    <main>
        <section id="share-salon-hero" class="share-salon-hero">
            <div class="share-salon-hero__inner">
                <ul class="p-flex c-breadcrumbs --flex-sp share-salon-hero__breadcrumbs">
                    <li><a href="<?php echo esc_url(home_url('/')); ?>">トップ</a></li>
                    <li><span>シェアサロン</span></li>
                </ul>

                <div class="share-salon-hero__visual" aria-hidden="true">
                    <img src="<?php echo $theme_uri; ?>/img/share-salon/hero-stylist.jpg" alt="" loading="eager" decoding="async">
                </div>

                <div class="share-salon-hero__copy">
                    <p class="share-salon-hero__brand">
                        <span class="share-salon-hero__brand-property">
                            <svg viewBox="0 0 48 48" aria-hidden="true">
                                <path d="M9 40V20l15-10 15 10v20H9Z" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linejoin="round"/>
                                <path d="M19 40V28h10v12M16 24h5M27 24h5" fill="none" stroke="currentColor" stroke-width="2.6" stroke-linecap="round"/>
                            </svg>
                            空席不動産
                        </span>
                        <span class="share-salon-hero__brand-cross">×</span>
                        <span class="share-salon-hero__brand-remake"><strong>Re</strong>・Make</span>
                    </p>

                    <div class="share-salon-hero__headline-block">
                        <h1 class="share-salon-hero__headline">
                            <span class="share-salon-hero__refund">
                                <span class="share-salon-hero__refund-label">売上</span>
                                <strong>100</strong><span>%</span>
                                <em>還元</em>
                            </span>
                            <span class="share-salon-hero__target">美容師・ネイリスト・アイリスト・セラピストのための</span>
                            <span class="share-salon-hero__maincopy"><strong>好きな場所</strong>で働けるシェアサロン</span>
                        </h1>

                        <div class="share-salon-hero__main-cta">
                            <a href="<?php echo esc_url($contact_url); ?>">LINEで相談してみる</a>
                        </div>

                        <p class="share-salon-hero__note" aria-label="顧客はいる。でも、働く場所がない。">
                            <img src="<?php echo $theme_uri; ?>/img/share-salon/hero-note.png?v=2026062516" alt="" loading="eager" decoding="async">
                        </p>
                    </div>
                </div>

                <div class="share-salon-hero__cards">
                    <?php foreach ($share_features as $feature) : ?>
                        <article class="share-salon-feature">
                            <div class="share-salon-feature__icon share-salon-feature__icon--<?php echo esc_attr($feature['icon']); ?>">
                                <img src="<?php echo $theme_uri; ?>/img/share-salon/hero-card-icon-<?php echo esc_attr($feature['icon']); ?>.png?v=2026062513" alt="" loading="eager" decoding="async">
                            </div>
                            <h2><strong><?php echo esc_html($feature['title_before']); ?></strong><?php if (!empty($feature['break_after_title_before'])) : ?><br><?php endif; ?><?php echo esc_html($feature['title_after']); ?></h2>
                            <p><?php echo esc_html($feature['description']); ?></p>
                            <img src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($feature['image']); ?>" alt="<?php echo esc_attr($feature['alt']); ?>" loading="lazy" decoding="async">
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="share-salon-hero__line">
                    <a href="<?php echo esc_url($contact_url); ?>">
                        <span class="share-salon-hero__line-badge">LINE</span>
                        <span>LINEで相談してみる</span>
                        <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M12 8l8 8-8 8" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                    </a>
                </div>
            </div>
        </section>

        <section id="share-salon-worries" class="share-salon-worries">
            <div class="share-salon-worries__inner">
                <p class="share-salon-worries__ribbon">シェアサロンを使ってみたい気持ちはあるけど...</p>
                <h2 class="share-salon-worries__title">こんな<span>お悩み</span>ありませんか？</h2>
                <div class="share-salon-worries__divider" aria-hidden="true"><span></span></div>

                <div class="share-salon-worries__list">
                    <?php foreach ($share_worries as $worry) : ?>
                        <article class="share-salon-worry is-image-<?php echo esc_attr($worry['layout']); ?>">
                            <div class="share-salon-worry__icon share-salon-worry__icon--<?php echo esc_attr($worry['icon']); ?>" aria-hidden="true">
                                <?php if ($worry['icon'] === 'tangle') : ?>
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/icon-tangle.png" alt="" loading="lazy" decoding="async">
                                <?php elseif ($worry['icon'] === 'heart') : ?>
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/icon-heart-worry.png" alt="" loading="lazy" decoding="async">
                                <?php elseif ($worry['icon'] === 'calendar') : ?>
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/icon-calendar-worry.png" alt="" loading="lazy" decoding="async">
                                <?php elseif ($worry['icon'] === 'clock') : ?>
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/icon-clock-worry.png" alt="" loading="lazy" decoding="async">
                                <?php else : ?>
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/icon-parenting-worry.png" alt="" loading="lazy" decoding="async">
                                <?php endif; ?>
                            </div>

                            <div class="share-salon-worry__body">
                                <span class="share-salon-worry__number"><?php echo esc_html($worry['number']); ?></span>
                                <h3><?php echo esc_html($worry['title']); ?></h3>
                                <p><?php echo esc_html($worry['description']); ?></p>
                            </div>

                            <figure class="share-salon-worry__photo">
                                <img src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($worry['image']); ?>" alt="<?php echo esc_attr($worry['alt']); ?>" loading="lazy" decoding="async">
                            </figure>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="share-salon-support" class="share-salon-support">
            <div class="share-salon-support__inner">
                <p class="share-salon-support__ribbon">シェアサロンを使ってみたい気持ちはあるけど...</p>
                <h2 class="share-salon-support__title">あなたの<span>理想の働き方</span>をサポート</h2>
                <div class="share-salon-support__divider" aria-hidden="true"><span></span></div>

                <div class="share-salon-support__list">
                    <?php foreach ($share_supports as $support) : ?>
                        <article class="share-salon-support-card is-<?php echo esc_attr($support['layout']); ?>">
                            <figure class="share-salon-support-card__photo">
                                <img src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($support['photo']); ?>" alt="<?php echo esc_attr($support['alt']); ?>" loading="lazy" decoding="async">
                            </figure>
                            <div class="share-salon-support-card__body">
                                <span class="share-salon-support-card__number"><?php echo esc_html($support['number']); ?></span>
                                <h3><?php echo esc_html($support['title']); ?></h3>
                                <p><?php echo esc_html($support['description']); ?></p>
                                <img class="share-salon-support-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($support['icon']); ?>?v=2026062216" alt="" loading="lazy" decoding="async">
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="share-salon-cases" class="share-salon-cases">
            <div class="share-salon-cases__inner">
                <h2 class="share-salon-cases__title"><span>Re・Make</span>で実現した働き方</h2>
                <div class="share-salon-cases__subtitle">
                    <span>実際の利用者事例をご紹介</span>
                </div>

                <div class="share-salon-cases__grid">
                    <?php foreach ($share_cases as $case) : ?>
                        <article class="share-salon-case is-<?php echo esc_attr($case['layout']); ?>">
                            <figure class="share-salon-case__photo">
                                <img src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($case['photo']); ?>" alt="<?php echo esc_attr($case['alt']); ?>" loading="lazy" decoding="async">
                            </figure>
                            <div class="share-salon-case__body">
                                <div class="share-salon-case__meta">
                                    <img src="<?php echo $theme_uri; ?>/img/share-salon/<?php echo esc_attr($case['icon']); ?>" alt="" loading="lazy" decoding="async">
                                    <span><?php echo esc_html($case['job']); ?></span>
                                </div>
                                <p class="share-salon-case__lead"><?php echo esc_html($case['lead']); ?></p>
                                <p class="share-salon-case__result"><?php echo esc_html($case['result']); ?></p>
                                <?php if (!empty($case['after'])) : ?>
                                    <p class="share-salon-case__after"><?php echo esc_html($case['after']); ?></p>
                                <?php endif; ?>
                                <p class="share-salon-case__text"><?php echo nl2br(esc_html($case['body'])); ?></p>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section id="share-salon-compare" class="share-salon-compare">
            <div class="share-salon-compare__inner">
                <h2 class="share-salon-compare__title"><span>Re・Make</span>が選ばれる理由</h2>
                <p class="share-salon-compare__lead"><span>面貸し・業務委託・他シェアサロンと比較して、圧倒的に働きやすい！</span></p>

                <div class="share-salon-compare__table-wrap" role="region" aria-label="Re・Makeと他サービスの比較表">
                    <table class="share-salon-compare-table">
                        <thead>
                            <tr>
                                <th scope="col">項目</th>
                                <th scope="col" class="is-remake-col">Re・Make</th>
                                <th scope="col">面貸し・業務委託</th>
                                <th scope="col" class="is-other-col">他シェアサロン</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <span class="share-salon-compare-table__label">
                                        <span class="share-salon-compare-icon" aria-hidden="true">
                                            <svg viewBox="0 0 64 64"><path d="M13 49h38M18 44V31M30 44V21M42 44V15" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round"/><path d="m18 29 12-9 10 5 10-14" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/><path d="m48 11 4 0 0 4" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        <span>施術売上<br><span class="share-salon-compare-table__sales">100<span class="share-salon-compare-table__unit">万円</span></span></span>
                                    </span>
                                </th>
                                <td class="is-remake-cell"><strong class="share-salon-compare-table__amount is-primary">100<span class="share-salon-compare-table__unit">万円</span></strong></td>
                                <td><strong class="share-salon-compare-table__amount">40〜50<span class="share-salon-compare-table__unit">万円</span></strong></td>
                                <td><strong class="share-salon-compare-table__amount">75〜80<span class="share-salon-compare-table__unit">万円</span></strong></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="share-salon-compare-table__label">
                                        <span class="share-salon-compare-icon" aria-hidden="true">
                                            <svg viewBox="0 0 64 64"><path d="M32 56s17-17.2 17-32a17 17 0 1 0-34 0c0 14.8 17 32 17 32Z" fill="currentColor"/><circle cx="32" cy="24" r="7" fill="#fff"/></svg>
                                        </span>
                                        <span>施術可能場所</span>
                                    </span>
                                </th>
                                <td class="is-remake-cell">
                                    <strong class="share-salon-compare-table__pink">複数店舗</strong>
                                    <span class="share-salon-compare-stores" aria-hidden="true"><i></i><i></i><i></i></span>
                                </td>
                                <td>
                                    <strong>1店舗のみ</strong>
                                    <span class="share-salon-compare-stores is-muted" aria-hidden="true"><i></i></span>
                                </td>
                                <td>
                                    <strong>1店舗のみ</strong>
                                    <span class="share-salon-compare-stores is-muted" aria-hidden="true"><i></i></span>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="share-salon-compare-table__label">
                                        <span class="share-salon-compare-icon" aria-hidden="true">
                                            <svg viewBox="0 0 64 64"><rect x="13" y="15" width="38" height="38" rx="4" fill="none" stroke="currentColor" stroke-width="5"/><path d="M13 27h38M23 10v10M41 10v10M24 37h5M35 37h5M24 45h5" fill="none" stroke="currentColor" stroke-width="5" stroke-linecap="round"/></svg>
                                        </span>
                                        <span>利用方法</span>
                                    </span>
                                </th>
                                <td class="is-remake-cell">
                                    <strong class="share-salon-compare-table__pink">1回〜月極</strong>
                                    <span class="share-salon-compare-mini-icon" aria-hidden="true">
                                        <svg viewBox="0 0 64 64"><rect x="13" y="15" width="34" height="36" rx="4" fill="none" stroke="currentColor" stroke-width="4"/><path d="M13 27h34M23 10v10M39 10v10M24 37h5M35 37h5" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"/><circle cx="47" cy="47" r="11" fill="#fff" stroke="currentColor" stroke-width="4"/><path d="M47 40v8l6 4" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"/></svg>
                                    </span>
                                </td>
                                <td><strong>月契約中心</strong><span class="share-salon-compare-mini-icon is-muted" aria-hidden="true"><svg viewBox="0 0 64 64"><rect x="13" y="15" width="38" height="38" rx="4" fill="none" stroke="currentColor" stroke-width="4"/><path d="M13 27h38M23 10v10M41 10v10M24 37h5M35 37h5M24 45h5" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"/></svg></span></td>
                                <td><strong>月契約中心</strong><span class="share-salon-compare-mini-icon is-muted" aria-hidden="true"><svg viewBox="0 0 64 64"><rect x="13" y="15" width="38" height="38" rx="4" fill="none" stroke="currentColor" stroke-width="4"/><path d="M13 27h38M23 10v10M41 10v10M24 37h5M35 37h5M24 45h5" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round"/></svg></span></td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <span class="share-salon-compare-table__label">
                                        <span class="share-salon-compare-icon" aria-hidden="true">
                                            <svg viewBox="0 0 64 64"><circle cx="32" cy="32" r="24" fill="currentColor"/><path d="M22 18l10 17 10-17M24 32h16M24 40h16M32 31v17" fill="none" stroke="#fff" stroke-width="5" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                        </span>
                                        <span>利用料金</span>
                                    </span>
                                </th>
                                <td class="is-remake-cell">
                                    <strong class="share-salon-compare-table__pink">使った場所代金のみ</strong>
                                    <span class="share-salon-compare-mini-icon" aria-hidden="true">
                                        <svg viewBox="0 0 64 64"><path d="M17 25h30a6 6 0 0 1 6 6v17a6 6 0 0 1-6 6H17a6 6 0 0 1-6-6V31a6 6 0 0 1 6-6Z" fill="currentColor"/><path d="M22 25c3-8 17-8 20 0M25 34l7 12 7-12M27 41h10" fill="none" stroke="#fff" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                                    </span>
                                </td>
                                <td><strong>売上歩合</strong><span class="share-salon-compare-mini-icon is-muted" aria-hidden="true"><svg viewBox="0 0 64 64"><circle cx="32" cy="32" r="21" fill="none" stroke="currentColor" stroke-width="4"/><path d="M21 43 43 21M23 24h.1M41 40h.1" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round"/></svg></span></td>
                                <td><strong>固定費＋歩合</strong><span class="share-salon-compare-fees" aria-hidden="true"><svg viewBox="0 0 64 64"><rect x="13" y="12" width="28" height="40" rx="4" fill="none" stroke="currentColor" stroke-width="4"/><path d="M13 24h28M23 8v10M35 8v10M22 31l6 10 6-10M23 38h10" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg><span>＋</span><svg viewBox="0 0 64 64"><circle cx="32" cy="32" r="21" fill="none" stroke="currentColor" stroke-width="4"/><path d="M21 43 43 21M23 24h.1M41 40h.1" fill="none" stroke="currentColor" stroke-width="6" stroke-linecap="round"/></svg></span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p class="share-salon-compare__note">※上記は一例です。条件により異なる場合があります。</p>
            </div>
        </section>

        <section id="share-salon-flow" class="share-salon-flow">
            <div class="share-salon-flow__inner">
                <h2 class="share-salon-flow__title">LINEで簡単<span>4</span>ステップ！</h2>
                <p class="share-salon-flow__lead">近くで利用できるサロンが見つかるまでの流れ</p>

                <div class="share-salon-flow__list">
                    <article class="share-salon-flow-step">
                        <div class="share-salon-flow-step__badge"><span>STEP</span><strong>1</strong></div>
                        <div class="share-salon-flow-step__body">
                            <h3><span>LINE</span>で無料相談</h3>
                            <p class="share-salon-flow-step__pill">利用したいエリア（駅名）と業種を送るだけ</p>
                            <ul>
                                <li>例）新宿駅</li>
                                <li>例）美容師・ネイリスト・アイリスト・エステティシャン</li>
                            </ul>
                            <p class="share-salon-flow-step__note">近くで利用できるサロンを<strong>ご案内します。</strong></p>
                        </div>
                        <div class="share-salon-flow-step__visual is-phone" aria-hidden="true">
                            <img class="share-salon-flow-step__image share-salon-flow-step__image--line" src="<?php echo $theme_uri; ?>/img/share-salon/share-salon-flow-line-step.png?v=2026063031" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>

                    <article class="share-salon-flow-step">
                        <div class="share-salon-flow-step__badge"><span>STEP</span><strong>2</strong></div>
                        <div class="share-salon-flow-step__body">
                            <h3>希望に合うサロンを<strong>ご提案</strong></h3>
                            <p>掲載サロンの中から、<br>条件に合うサロンを<strong>ご紹介します。</strong></p>
                        </div>
                        <div class="share-salon-flow-step__visual is-photos" aria-hidden="true">
                            <img src="<?php echo $theme_uri; ?>/img/share-salon/support-photo-01.png" alt="" loading="lazy" decoding="async">
                            <img src="<?php echo $theme_uri; ?>/img/share-salon/support-photo-02.png" alt="" loading="lazy" decoding="async">
                            <img src="<?php echo $theme_uri; ?>/img/share-salon/card-salon.jpg" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>

                    <article class="share-salon-flow-step">
                        <div class="share-salon-flow-step__badge"><span>STEP</span><strong>3</strong></div>
                        <div class="share-salon-flow-step__body">
                            <h3>利用者<strong>登録</strong></h3>
                            <p class="share-salon-flow-step__pill">ご利用条件を確認</p>
                            <p>利用登録を行います。</p>
                        </div>
                        <div class="share-salon-flow-step__visual is-laptop" aria-hidden="true">
                            <img class="share-salon-flow-step__image" src="<?php echo $theme_uri; ?>/img/share-salon/flow-step-registration.png?v=2026062307" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>

                    <article class="share-salon-flow-step">
                        <div class="share-salon-flow-step__badge"><span>STEP</span><strong>4</strong></div>
                        <div class="share-salon-flow-step__body">
                            <h3>利用<strong>スタート</strong></h3>
                            <p class="share-salon-flow-step__pill">1回から月極まで利用可能</p>
                            <p>あなたの働き方に合わせて、<br>自由に施術を<strong>スタート</strong>できます。</p>
                        </div>
                        <div class="share-salon-flow-step__visual is-start" aria-hidden="true">
                            <img class="share-salon-flow-step__image" src="<?php echo $theme_uri; ?>/img/share-salon/flow-step-start.png?v=2026062307" alt="" loading="lazy" decoding="async">
                        </div>
                    </article>
                </div>

                <a class="share-salon-flow__line" href="<?php echo esc_url($contact_url); ?>">
                    <span>LINE</span>
                    <strong>LINE相談はこちら</strong>
                    <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M12 8l8 8-8 8" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                </a>
            </div>
        </section>

        <section id="share-salon-faq" class="share-salon-faq">
            <div class="share-salon-faq__inner">
                <h2 class="share-salon-faq__title">よくある<span>ご質問</span></h2>
                <div class="share-salon-faq__divider" aria-hidden="true"><span></span></div>
                <p class="share-salon-faq__lead">Re・Makeに関してよくいただくご質問をまとめました。</p>

                <div class="share-salon-faq__list">
                    <article class="share-salon-faq-card">
                        <div class="share-salon-faq-card__qa">
                            <span>Q</span>
                            <span>A</span>
                        </div>
                        <div class="share-salon-faq-card__body">
                            <h3>顧客がいなくても利用できますか？</h3>
                            <p>利用できます。<br>これから独立を目指す方もご利用いただいています。</p>
                        </div>
                        <img class="share-salon-faq-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/faq-icon-customers.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    </article>

                    <article class="share-salon-faq-card">
                        <div class="share-salon-faq-card__qa">
                            <span>Q</span>
                            <span>A</span>
                        </div>
                        <div class="share-salon-faq-card__body">
                            <h3>どんな業種が利用できますか？</h3>
                            <p>美容師・ネイリスト・アイリスト・<br>エステティシャン・セラピストなどが利用しています。</p>
                        </div>
                        <img class="share-salon-faq-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/faq-icon-tools.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    </article>

                    <article class="share-salon-faq-card">
                        <div class="share-salon-faq-card__qa">
                            <span>Q</span>
                            <span>A</span>
                        </div>
                        <div class="share-salon-faq-card__body">
                            <h3>月極利用はできますか？</h3>
                            <p>可能です。<br>スポット利用から月極利用まで選べます。</p>
                        </div>
                        <img class="share-salon-faq-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/faq-icon-calendar.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    </article>

                    <article class="share-salon-faq-card">
                        <div class="share-salon-faq-card__qa">
                            <span>Q</span>
                            <span>A</span>
                        </div>
                        <div class="share-salon-faq-card__body">
                            <h3>見学はできますか？</h3>
                            <p>利用前にサロンをご案内しております。</p>
                        </div>
                        <img class="share-salon-faq-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/faq-icon-shop.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    </article>

                    <article class="share-salon-faq-card">
                        <div class="share-salon-faq-card__qa">
                            <span>Q</span>
                            <span>A</span>
                        </div>
                        <div class="share-salon-faq-card__body">
                            <h3>利用料金はいくらですか？</h3>
                            <p>サロンにより異なります。<br>まずはLINEよりご相談ください。</p>
                        </div>
                        <img class="share-salon-faq-card__icon" src="<?php echo $theme_uri; ?>/img/share-salon/faq-icon-price.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    </article>
                </div>

                <div class="share-salon-faq__cta">
                    <img class="share-salon-faq__person" src="<?php echo $theme_uri; ?>/img/share-salon/faq-cta-person.png?v=2026062307" alt="" loading="lazy" decoding="async">
                    <div class="share-salon-faq__cta-body">
                        <p>ご不明な点があれば、お気軽に<span>ご相談ください！</span></p>
                        <a href="<?php echo esc_url($contact_url); ?>">
                            <span>LINE</span>
                            <strong>LINEで相談してみる</strong>
                            <svg viewBox="0 0 32 32" aria-hidden="true"><path d="M12 8l8 8-8 8" fill="none" stroke="currentColor" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/></svg>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="share-salon-final-cta" class="buying-final-cta share-salon-final-cta">
            <div class="buying-final-cta__inner">
                <span class="buying-final-cta__label">Contact</span>
                <h2>シェアサロンの利用について相談してみませんか？</h2>
                <p>利用したいエリアや働き方に合わせて、担当者がご案内します。</p>
                <div class="buying-final-cta__actions">
                    <a href="<?php echo esc_url($contact_url); ?>" class="c-button --style-3 recredit-cases__button">相談する</a>
                    <a href="<?php echo esc_url($contact_url); ?>" class="recredit-cases__outline-button">詳細を問い合わせる</a>
                </div>
            </div>
        </section>
    </main>

    <?php get_footer(); ?>

    <?php wp_footer(); ?>
  </body>
</html>
