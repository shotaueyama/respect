<?php
$theme_uri = esc_url(get_template_directory_uri());
$site_url = esc_url(home_url('/'));
$products_category = get_category_by_slug('products');
$products_url = $products_category ? get_category_link($products_category->term_id) : home_url('/category/products/');
$product_category_terms = array();

if ($products_category instanceof WP_Term) {
    $product_category_terms = get_categories(array(
        'taxonomy' => 'category',
        'parent' => $products_category->term_id,
        'hide_empty' => false,
        'orderby' => 'term_order',
        'order' => 'ASC',
    ));
}

$main_nav = array(
    array(
        'label' => '美容機器売買/レンタル',
        'url' => $products_url,
        'current' => true,
        'children' => $product_category_terms,
    ),
    array('label' => '美容機器修理サービス', 'url' => home_url('/contact/')),
    array('label' => 'サロン集金サポート', 'url' => home_url('/contact/')),
    array('label' => '美容スペースシェア', 'url' => home_url('/contact/')),
    array('label' => '予約管理システム', 'url' => home_url('/contact/')),
    array('label' => '店舗売買マッチング', 'url' => home_url('/contact/')),
);

$hero_slides = array(
    array('image' => 'slide3.png', 'alt' => '美容機器サービス訴求スライド 3'),
    array('image' => 'slide1.png', 'alt' => '美容機器サービス訴求スライド 1'),
    array('image' => 'slide2.png', 'alt' => '美容機器サービス訴求スライド 2'),
);

$shortcut_cards = array(
    array(
        'icon' => 'icon-rent-want.png',
        'title' => '美容機器を借りたい',
        'url' => $products_url,
    ),
    array(
        'icon' => 'icon-lend-want.png',
        'title' => '美容機器を貸したい',
        'url' => home_url('/contact/'),
    ),
    array(
        'icon' => 'icon-buy-want.png',
        'title' => '美容機器を買いたい',
        'url' => $products_url,
    ),
    array(
        'icon' => 'icon-sell-want.png',
        'title' => '美容機器を売りたい',
        'url' => home_url('/contact/'),
    ),
);

$search_chips = array(
    '業務用中古を借りたい',
    '美容機器を探したい',
    'サロン開業の相談をしたい',
    'メンテナンスを依頼したい',
);

$product_sections = array(
    array(
        'eyebrow' => 'NEW',
        'title' => '新商品一覧',
        'more' => 'すべて見る',
        'items' => array(
            array('image_dir' => 'figma-top-section', 'image' => 'item-1.png', 'title' => '遺伝子検査キット', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image_dir' => 'figma-top-section', 'image' => 'item-2.png', 'title' => '遺伝子検査キット', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image_dir' => 'figma-top-section', 'image' => 'item-3.png', 'title' => '遺伝子検査キット', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image_dir' => 'figma-top-section', 'image' => 'item-4.png', 'title' => '遺伝子検査キット', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image_dir' => 'figma-top-section', 'image' => 'item-5.png', 'title' => '遺伝子検査キット', 'price_label' => 'サロン価格', 'price' => '155,400'),
        ),
    ),
    array(
        'eyebrow' => 'PICK UP',
        'title' => 'ピックアップ商品',
        'more' => '一覧を見る',
        'items' => array(
            array('image' => 'item_1.png', 'title' => '業務用ダストコレクター', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image' => 'img_product_thumb_1.png', 'title' => '痩身マシン セルゼロ', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image' => 'img_product_thumb_2.png', 'title' => 'フェイシャル複合機', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image' => 'img_product_thumb_3.png', 'title' => 'スチーマー複合機', 'price_label' => 'サロン価格', 'price' => '155,400'),
            array('image' => 'img_salon_1500_1.png', 'title' => '高機能チェアユニット', 'price_label' => 'サロン価格', 'price' => '155,400'),
        ),
    ),
);

$ranking_sections = array(
    array(
        'title' => '人気機種ランキング',
        'eyebrow' => 'RANKING',
        'items' => array(
            array('image_dir' => 'figma-ranking', 'image' => 'card-1.png', 'lines' => array('フェイシャル・', 'スキンケア機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-2.png', 'lines' => array('ボディ・痩身・', '引き締め機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-3.png', 'lines' => array('リラクゼーション・', 'ウェルネス機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-2.png', 'lines' => array('タンニング・', '日焼けマシン')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-4.png', 'lines' => array('脱毛・', '光美容機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-5.png', 'lines' => array('体組成・計測機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-1.png', 'lines' => array('エクササイズ・', 'フィットネス機器')),
        ),
    ),
    array(
        'title' => '注目機器ランキング',
        'eyebrow' => 'RANKING',
        'items' => array(
            array('image_dir' => 'figma-ranking', 'image' => 'card-1.png', 'lines' => array('フェイシャル・', 'スキンケア機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-2.png', 'lines' => array('ボディ・痩身・', '引き締め機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-3.png', 'lines' => array('リラクゼーション・', 'ウェルネス機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-2.png', 'lines' => array('タンニング・', '日焼けマシン')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-4.png', 'lines' => array('脱毛・', '光美容機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-5.png', 'lines' => array('体組成・計測機器')),
            array('image_dir' => 'figma-ranking', 'image' => 'card-1.png', 'lines' => array('エクササイズ・', 'フィットネス機器')),
        ),
    ),
);

$guide_items = array(
    array('icon' => 'icon-rent-want.png', 'title_lines' => array('美容機器を', '借りたい方'), 'url' => $products_url),
    array('icon' => 'icon-lend-want.png', 'title_lines' => array('美容機器を', '貸したい方'), 'url' => home_url('/contact/')),
    array('icon' => 'icon-buy-want.png', 'title_lines' => array('美容機器を', '買いたい方'), 'url' => $products_url),
    array('icon' => 'icon-sell-want.png', 'title_lines' => array('美容機器を', '売りたい方'), 'url' => home_url('/contact/')),
);

$contact_rows = array(
    array('date' => '2025.07.09', 'category' => 'エステ', 'category_class' => 'is-esthe', 'title' => 'エステ大手、残業代不払い　静岡労基署が是正勧告'),
    array('date' => '2025.07.09', 'category' => '癒し・リラク', 'category_class' => 'is-relax', 'title' => 'TBCが｢求人詐欺｣の撲滅に乗り出した理由'),
    array('date' => '2025.07.09', 'category' => 'フィットネス', 'category_class' => 'is-fitness', 'title' => '実は「元美容師」と聞いて驚く芸能人ランキング'),
);

$service_banners = array(
    array('image_dir' => 'figma-service', 'image' => 'banner-1.png', 'title' => '美容機器売買サービス'),
    array('image_dir' => 'figma-service', 'image' => 'banner-2.png', 'title' => '修理・メンテナンス'),
    array('image_dir' => 'figma-service', 'image' => 'banner-3.png', 'title' => '集金業務サポート'),
    array('image_dir' => 'figma-service', 'image' => 'banner-4.png', 'title' => 'シェアサロン・スペース'),
    array('image_dir' => 'figma-service', 'image' => 'banner-5.png', 'title' => 'LINE予約'),
    array('image_dir' => 'figma-service', 'image' => 'banner-6.png', 'title' => '店舗マッチング'),
);

$footer_columns = array(
    array(
        'title' => 'フェイシャル・美顔マシン',
        'items' => array('スチーマー', 'エレクトロポレーション', 'ライトセラピー', 'ピーリング・フェイシャル器', '肌分析器'),
    ),
    array(
        'title' => 'ボディ・痩身マシン',
        'items' => array('クライオマシン', 'キャビテーション', 'ラジオ波', '痩身複合マシン', '電磁パルスマシン'),
    ),
    array(
        'title' => '脱毛器',
        'items' => array('複合脱毛器', '脱毛', 'フォト美顔', 'バストUP'),
    ),
    array(
        'title' => '健康関連マシン',
        'items' => array('酸素カプセル', 'ゲルマニウム温浴器', '岩盤浴カプセル', 'ウォーターベッド', '体組成計マシン'),
    ),
    array(
        'title' => 'その他マシン',
        'items' => array('フェイシャルボディベッド', '機能性浄水器', '酸素水サーバー'),
    ),
);

$footer_related_services = array(
    '美容機器売買/レンタル',
    '美容機器修理サービス',
    'サロン集金サポート',
    '美容スペースシェア',
    '予約管理システム',
    '店舗売買マッチング',
);

$footer_product_info = array(
    'フェイシャル・スキンケア機器',
    'ボディ・痩身・引き締め機器',
    '脱毛・光美容機器',
    '体組成・計測機器',
    'リラクゼーション・ウェルネス機器',
    'タンニング・日焼けマシン',
    'エクササイズ・フィットネス',
);

$footer_policy_links = array(
    array('label' => 'ニュース', 'url' => home_url('/news/')),
    array('label' => 'メール問合せ', 'url' => home_url('/contact/')),
    array('label' => '会社概要', 'url' => home_url('/company/')),
    array('label' => 'プライバシーポリシー', 'url' => home_url('/privacy/')),
    array('label' => '著作権リンクポリシー', 'url' => home_url('/privacy/')),
    array('label' => '特定商取引法に基づく表記', 'url' => home_url('/privacy/')),
    array('label' => '免責事項', 'url' => home_url('/privacy/')),
    array('label' => '古物営業法に基づく表記', 'url' => home_url('/privacy/')),
    array('label' => '利用規約', 'url' => home_url('/privacy/')),
);

$footer_social_links = array(
    array('icon' => 'icon-x.svg', 'label' => 'X', 'url' => '#'),
    array('icon' => 'icon-instagram.svg', 'label' => 'Instagram', 'url' => '#'),
    array('icon' => 'icon-youtube.svg', 'label' => 'YouTube', 'url' => '#'),
    array('icon' => 'icon-facebook.svg', 'label' => 'Facebook', 'url' => '#'),
    array('icon' => 'icon-tiktok.png', 'label' => 'TikTok', 'url' => '#'),
    array('icon' => 'icon-threads.png', 'label' => 'Threads', 'url' => '#'),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>RESPECT FORCE</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="<?php echo $theme_uri; ?>/css/common.css" rel="stylesheet">
    <meta property="og:type" content="article">
    <meta property="og:title" content="RESPECT FORCE">
    <meta property="og:url" content="<?php echo $site_url; ?>">
    <meta property="og:image" content="<?php echo $theme_uri; ?>/img/common/ogp.png">
    <meta property="og:description" content="">
    <meta property="og:site_name" content="RESPECT FORCE">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="RESPECT FORCE">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="<?php echo $theme_uri; ?>/img/common/ogp.png">
    <link rel="shortcut icon" href="<?php echo $theme_uri; ?>/img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="<?php echo $theme_uri; ?>/img/common/favicon.png">
    <?php wp_head(); ?>
</head>
<body <?php body_class('top-home'); ?>>
    <header class="top-header">
        <div class="top-header__announce">
            <a href="#">
                <span class="top-header__announce-arrow"></span>
                年末年始休業のお知らせ
            </a>
        </div>

        <div class="top-header__bar">
            <a class="top-header__logo" href="<?php echo $site_url; ?>">
                <img src="<?php echo $theme_uri; ?>/img/common/logo_1.png" alt="RESPECT FORCE">
            </a>

            <nav class="top-header__nav" id="top-navigation">
                <ul class="top-header__nav-list">
                    <?php foreach ($main_nav as $item) : ?>
                        <?php
                        $nav_classes = array('top-header__nav-item');
                        if (!empty($item['current'])) {
                            $nav_classes[] = 'is-current';
                        }
                        if (!empty($item['children'])) {
                            $nav_classes[] = 'has-children';
                        }
                        ?>
                        <li class="<?php echo esc_attr(implode(' ', $nav_classes)); ?>">
                            <a href="<?php echo esc_url($item['url']); ?>" class="top-header__nav-link">
                                <span><?php echo esc_html($item['label']); ?></span>
                                <?php if (!empty($item['children'])) : ?>
                                    <span class="top-header__nav-caret" aria-hidden="true"></span>
                                <?php endif; ?>
                            </a>
                            <?php if (!empty($item['children'])) : ?>
                                <ul class="top-header__subnav" aria-label="<?php echo esc_attr($item['label']); ?>のカテゴリー一覧">
                                    <?php foreach ($item['children'] as $child_page) : ?>
                                        <li>
                                            <a href="<?php echo esc_url(get_category_link($child_page->term_id)); ?>">
                                                <?php echo esc_html($child_page->name); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </nav>

            <div class="top-header__contact">
                <a class="top-header__cta" href="<?php echo esc_url(home_url('/contact/')); ?>">
                    <span class="top-header__cta-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="14" viewBox="0 0 18 14" fill="none" aria-hidden="true">
                            <path d="M16 0H2C.9 0 0 .9 0 2v10c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V2c0-1.1-.9-2-2-2zm0 4-7 4.5L2 4V2l7 4.5L16 2v2z" fill="white"/>
                        </svg>
                    </span>
                    <span>お問い合わせ</span>
                </a>

                <button type="button" class="top-menu-toggle" aria-expanded="false" aria-controls="top-navigation">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>
            </div>
        </div>
    </header>

    <div class="top-floating-rail" aria-label="固定メニュー">
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="top-floating-rail__item is-line">LINE相談</a>
        <a href="tel:0364574757" class="top-floating-rail__item is-phone">電話相談</a>
        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="top-floating-rail__item is-mail">資料請求</a>
    </div>

    <main>
        <section class="top-hero" data-node-id="3084:4047">
            <div class="top-hero-carousel js-top-hero">
                <div class="top-hero-carousel__viewport">
                    <div class="top-hero-carousel__track">
                        <?php foreach ($hero_slides as $slide) : ?>
                            <div class="top-hero-carousel__slide">
                                <div class="top-hero-carousel__frame">
                                    <img src="<?php echo $theme_uri; ?>/img/figma-hero/<?php echo esc_attr($slide['image']); ?>" alt="<?php echo esc_attr($slide['alt']); ?>" class="top-hero-carousel__image">
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>

                    <button type="button" class="top-hero-carousel__arrow top-hero-carousel__arrow--prev" aria-label="前のスライド">
                        <img src="<?php echo $theme_uri; ?>/img/figma-hero/arrow-left.svg" alt="">
                    </button>
                    <button type="button" class="top-hero-carousel__arrow top-hero-carousel__arrow--next" aria-label="次のスライド">
                        <img src="<?php echo $theme_uri; ?>/img/figma-hero/arrow-right.svg" alt="">
                    </button>
                </div>
            </div>
        </section>

        <section class="top-shortcuts" data-node-id="3084:4048">
            <div class="top-wrap">
                <div class="top-shortcuts__grid">
                    <?php foreach ($shortcut_cards as $card) : ?>
                        <a href="<?php echo esc_url($card['url']); ?>" class="top-shortcuts__card">
                            <div class="top-shortcuts__icon" aria-hidden="true">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($card['icon']); ?>" alt="">
                            </div>
                            <strong><?php echo esc_html($card['title']); ?></strong>
                            <i class="top-shortcuts__arrow" aria-hidden="true"></i>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="top-search" data-node-id="3092:4053">
            <div class="top-wrap">
                <form class="top-search__panel" action="<?php echo $site_url; ?>" method="get">
                    <h2 class="top-search__title">商品名・キーワードで検索</h2>

                    <div class="top-search__controls">
                        <div class="top-search__field top-search__field--keyword">
                            <label for="top-search-keyword" class="screen-reader-text">キーワード検索</label>
                            <input id="top-search-keyword" type="search" name="s" placeholder="商品名、キーワードなどを入力">
                        </div>

                        <button type="submit" class="top-search__submit">
                            <img src="<?php echo $theme_uri; ?>/img/figma-search/icon-search.svg" alt="" aria-hidden="true">
                            <span>検索</span>
                        </button>
                    </div>
                </form>
            </div>
        </section>

        <?php foreach ($product_sections as $section) : ?>
            <section class="top-section">
                <div class="top-wrap">
                    <div class="top-section__head">
                        <div class="top-section__head-main">
                            <h2 class="top-section__title"><?php echo esc_html($section['title']); ?></h2>
                            <span class="top-section__eyebrow"><?php echo esc_html($section['eyebrow']); ?></span>
                            <a href="<?php echo esc_url($products_url); ?>" class="top-section__more">
                                <span>一覧を見る</span>
                                <i aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="top-section__tabs" aria-label="商品種別">
                            <a href="<?php echo esc_url($products_url); ?>" class="top-section__tab is-active">レンタル機器</a>
                            <a href="<?php echo esc_url($products_url); ?>" class="top-section__tab">販売機器</a>
                        </div>
                    </div>

                    <div class="top-product-grid">
                        <?php foreach ($section['items'] as $item) : ?>
                            <a href="<?php echo esc_url($products_url); ?>" class="top-product-card">
                                <div class="top-product-card__frame">
                                    <div class="top-product-card__image">
                                        <img src="<?php echo $theme_uri; ?>/img/<?php echo esc_attr(!empty($item['image_dir']) ? $item['image_dir'] : 'common'); ?>/<?php echo esc_attr($item['image']); ?>" alt="<?php echo esc_attr($item['title']); ?>">
                                    </div>
                                </div>
                                <h3 class="top-product-card__title"><?php echo esc_html($item['title']); ?></h3>
                                <p class="top-product-card__label"><?php echo esc_html(!empty($item['price_label']) ? $item['price_label'] : 'サロン価格'); ?></p>
                                <p class="top-product-card__price"><span class="top-product-card__price-number"><?php echo esc_html($item['price']); ?></span><span class="top-product-card__price-unit">円</span></p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <?php foreach ($ranking_sections as $ranking_index => $ranking) : ?>
            <section class="top-ranking<?php echo $ranking_index === 1 ? ' is-alt' : ''; ?>">
                <div class="top-wrap">
                    <div class="top-ranking__head">
                        <div class="top-ranking__head-main">
                            <h2 class="top-ranking__title"><?php echo esc_html($ranking['title']); ?></h2>
                            <span class="top-ranking__eyebrow"><?php echo esc_html(!empty($ranking['eyebrow']) ? $ranking['eyebrow'] : 'RANKING'); ?></span>
                        </div>
                    </div>

                    <div class="top-ranking__grid">
                        <?php foreach ($ranking['items'] as $item) : ?>
                            <a href="<?php echo esc_url($products_url); ?>" class="top-ranking-card">
                                <div class="top-ranking-card__text">
                                    <?php if (!empty($item['lines'])) : ?>
                                        <?php foreach ($item['lines'] as $line) : ?>
                                            <span><?php echo esc_html($line); ?></span>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <div class="top-ranking-card__image">
                                    <img src="<?php echo $theme_uri; ?>/img/<?php echo esc_attr(!empty($item['image_dir']) ? $item['image_dir'] : 'common'); ?>/<?php echo esc_attr($item['image']); ?>" alt="">
                                </div>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            </section>
        <?php endforeach; ?>

        <section class="top-guide" id="guide" data-node-id="3121:6839">
            <div class="top-wrap">
                <div class="top-guide__header">
                    <span class="top-guide__eyebrow">GUIDE</span>
                    <h2 class="top-guide__title">はじめての方へ利用ガイド</h2>
                </div>

                <div class="top-guide__grid">
                    <?php foreach ($guide_items as $guide) : ?>
                        <a href="<?php echo esc_url($guide['url']); ?>" class="top-guide__card">
                            <div class="top-guide__icon" aria-hidden="true">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($guide['icon']); ?>" alt="">
                            </div>
                            <h3>
                                <?php foreach ($guide['title_lines'] as $line) : ?>
                                    <span><?php echo esc_html($line); ?></span>
                                <?php endforeach; ?>
                            </h3>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>

        <section class="top-contact" data-node-id="3122:6840">
            <div class="top-wrap">
                <div class="top-contact__header">
                    <span class="top-contact__eyebrow">NEWS</span>
                    <h2 class="top-contact__title">お知らせ</h2>
                </div>

                <div class="top-contact__details">
                    <?php foreach ($contact_rows as $row) : ?>
                        <article class="top-contact__row">
                            <time class="top-contact__date" datetime="<?php echo esc_attr(str_replace('.', '-', $row['date'])); ?>"><?php echo esc_html($row['date']); ?></time>
                            <span class="top-contact__category <?php echo esc_attr($row['category_class']); ?>"><?php echo esc_html($row['category']); ?></span>
                            <p class="top-contact__text"><?php echo esc_html($row['title']); ?></p>
                        </article>
                    <?php endforeach; ?>
                </div>

                <div class="top-contact__cta-row">
                    <a href="<?php echo esc_url(home_url('/news/')); ?>" class="top-contact__button">
                        <i aria-hidden="true"></i>
                        <span>すべて見る</span>
                    </a>
                </div>
            </div>
        </section>

        <section class="top-service" data-node-id="2899:6680">
            <div class="top-wrap">
                <div class="top-service__header">
                    <span class="top-service__eyebrow">OTHER SERVICE</span>
                    <h2 class="top-service__title">サービス一覧</h2>
                </div>

                <div class="top-service__grid">
                    <?php foreach ($service_banners as $service) : ?>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="top-service__item">
                            <img src="<?php echo $theme_uri; ?>/img/<?php echo esc_attr(!empty($service['image_dir']) ? $service['image_dir'] : 'common'); ?>/<?php echo esc_attr($service['image']); ?>" alt="<?php echo esc_attr($service['title']); ?>">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <footer class="top-footer" data-node-id="2980:4133">
        <div class="top-wrap top-footer__inner">
            <div class="top-footer__top">
                <a href="<?php echo $site_url; ?>" class="top-footer__logo" aria-label="RESPECT FORCE">
                    <img src="<?php echo $theme_uri; ?>/img/figma-footer/logo.svg" alt="RESPECT FORCE">
                </a>

                <p class="top-footer__address">〒165-0026<br>東京都中野区新井5-27-5　MONビル2・3F</p>

                <a href="<?php echo esc_url(home_url('/contact/')); ?>" class="top-footer__contact-btn">
                    <img src="<?php echo $theme_uri; ?>/img/figma-footer/contact-icon.svg" alt="" aria-hidden="true">
                    <span>お問い合わせ</span>
                </a>

                <div class="top-footer__tel">
                    <p><span>TEL :</span> 03-6457-4757</p>
                    <small>営業時間　平日 10:00〜17:00（土・日・祝日は定休日）</small>
                </div>
            </div>

            <div class="top-footer__section top-footer__section--services">
                <h2>関連サービス</h2>
                <div class="top-footer__link-list">
                    <?php foreach ($footer_related_services as $item) : ?>
                        <a href="<?php echo esc_url(home_url('/contact/')); ?>"><?php echo esc_html($item); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="top-footer__section top-footer__section--products">
                <h2>製品情報</h2>
                <div class="top-footer__link-list top-footer__link-list--products">
                    <?php foreach ($footer_product_info as $item) : ?>
                        <a href="<?php echo esc_url($products_url); ?>"><?php echo esc_html($item); ?></a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="top-footer__section top-footer__section--guide">
                <h2>ご利用ガイド</h2>
                <div class="top-footer__guide-grid">
                    <?php foreach ($shortcut_cards as $card) : ?>
                        <a href="<?php echo esc_url($card['url']); ?>" class="top-footer__guide-card">
                            <span class="top-footer__guide-icon">
                                <img src="<?php echo $theme_uri; ?>/img/figma-shortcuts/<?php echo esc_attr($card['icon']); ?>" alt="">
                            </span>
                            <span class="top-footer__guide-label"><?php echo esc_html($card['title']); ?></span>
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>

            <div class="top-footer__bottom">
                <div class="top-footer__policy-links">
                    <?php foreach ($footer_policy_links as $index => $link) : ?>
                        <a href="<?php echo esc_url($link['url']); ?>"><?php echo esc_html($link['label']); ?></a><?php echo $index < count($footer_policy_links) - 1 ? '｜' : ''; ?>
                    <?php endforeach; ?>
                </div>

                <div class="top-footer__sns">
                    <?php foreach ($footer_social_links as $social) : ?>
                        <a href="<?php echo esc_url($social['url']); ?>" aria-label="<?php echo esc_attr($social['label']); ?>">
                            <img src="<?php echo $theme_uri; ?>/img/figma-footer/<?php echo esc_attr($social['icon']); ?>" alt="">
                        </a>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </footer>

    <script>
    document.addEventListener('DOMContentLoaded', function () {
        var toggle = document.querySelector('.top-menu-toggle');
        var nav = document.getElementById('top-navigation');

        if (toggle && nav) {
            toggle.addEventListener('click', function () {
                var expanded = toggle.getAttribute('aria-expanded') === 'true';
                toggle.setAttribute('aria-expanded', expanded ? 'false' : 'true');
                nav.classList.toggle('is-open');
            });
        }

        document.querySelectorAll('.js-top-hero').forEach(function (carousel) {
            var viewport = carousel.querySelector('.top-hero-carousel__viewport');
            var track = carousel.querySelector('.top-hero-carousel__track');
            var originalSlides = Array.prototype.slice.call(track.children);
            var total = originalSlides.length;

            if (!viewport || !track || total === 0) {
                return;
            }

            var firstClone = originalSlides[0].cloneNode(true);
            var lastClone = originalSlides[total - 1].cloneNode(true);
            track.insertBefore(lastClone, originalSlides[0]);
            track.appendChild(firstClone);

            var currentIndex = 2;
            var isAnimating = false;
            var autoplayId = null;
            var startX = 0;

            function getMetrics() {
                var viewportWidth = viewport.clientWidth;

                if (window.innerWidth <= 750) {
                    return {
                        slideWidth: viewportWidth,
                        gap: 0,
                        offset: 0,
                        height: viewportWidth * (410 / 1140),
                        left: 10,
                        right: 10,
                        arrowSize: 42
                    };
                }

                var scale = viewportWidth / 1440;

                return {
                    slideWidth: 1186 * scale,
                    gap: 33 * scale,
                    offset: 153 * scale,
                    height: 426 * scale,
                    left: 103 * scale,
                    right: 59 * scale,
                    arrowSize: 60 * scale
                };
            }

            function applyMetrics() {
                var metrics = getMetrics();
                carousel.style.setProperty('--hero-slide-width', metrics.slideWidth + 'px');
                carousel.style.setProperty('--hero-slide-gap', metrics.gap + 'px');
                carousel.style.setProperty('--hero-height', metrics.height + 'px');
                carousel.style.setProperty('--hero-arrow-left', metrics.left + 'px');
                carousel.style.setProperty('--hero-arrow-right', metrics.right + 'px');
                carousel.style.setProperty('--hero-arrow-size', metrics.arrowSize + 'px');
            }

            function updatePosition(withTransition) {
                var metrics = getMetrics();
                var translate = metrics.offset - currentIndex * (metrics.slideWidth + metrics.gap);
                track.style.transition = withTransition ? 'transform 420ms ease' : 'none';
                track.style.transform = 'translate3d(' + translate + 'px, 0, 0)';
            }

            function goTo(index) {
                if (isAnimating) {
                    return;
                }
                isAnimating = true;
                currentIndex = index;
                updatePosition(true);
            }

            function restartAutoplay() {
                window.clearInterval(autoplayId);
                autoplayId = window.setInterval(function () {
                    goTo(currentIndex + 1);
                }, 5000);
            }

            track.addEventListener('transitionend', function () {
                if (currentIndex === 0) {
                    currentIndex = total;
                    updatePosition(false);
                } else if (currentIndex === total + 1) {
                    currentIndex = 1;
                    updatePosition(false);
                }

                isAnimating = false;
            });

            carousel.querySelector('.top-hero-carousel__arrow--prev').addEventListener('click', function () {
                goTo(currentIndex - 1);
                restartAutoplay();
            });

            carousel.querySelector('.top-hero-carousel__arrow--next').addEventListener('click', function () {
                goTo(currentIndex + 1);
                restartAutoplay();
            });

            viewport.addEventListener('touchstart', function (event) {
                startX = event.changedTouches[0].clientX;
            }, { passive: true });

            viewport.addEventListener('touchend', function (event) {
                var deltaX = event.changedTouches[0].clientX - startX;

                if (Math.abs(deltaX) < 40) {
                    return;
                }

                if (deltaX > 0) {
                    goTo(currentIndex - 1);
                } else {
                    goTo(currentIndex + 1);
                }

                restartAutoplay();
            }, { passive: true });

            window.addEventListener('resize', function () {
                applyMetrics();
                updatePosition(false);
            });

            carousel.addEventListener('mouseenter', function () {
                window.clearInterval(autoplayId);
            });

            carousel.addEventListener('mouseleave', function () {
                restartAutoplay();
            });

            applyMetrics();
            updatePosition(false);
            restartAutoplay();
        });
    });
    </script>
    <?php wp_footer(); ?>
</body>
</html>
