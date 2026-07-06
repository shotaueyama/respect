<?php
function rf_theme_get_seo_text($context = '', $title = '', $description = '') {
    $site_name = 'RESPECT FORCE';
    $default_description = 'RESPECT FORCEは、美容機器の売買・レンタル、店舗売買、機器修理、開業支援まで美容業界に特化してサポートします。';

    $configs = array(
        'home' => array(
            'title' => '中古・新品美容機器の売買・レンタルならRESPECT FORCE',
            'description' => '美容機器の新品・中古販売、レンタル、店舗売買、機器修理まで、美容業界に特化したRESPECT FORCEがサロン運営を支援します。',
        ),
        'products' => array(
            'title' => '美容機器の商品一覧 | RESPECT FORCE',
            'description' => 'フェイシャル、痩身、脱毛、リラクゼーションなど、美容機器の新品・中古販売、レンタル、リース商品を一覧でご確認いただけます。',
        ),
        'company' => array(
            'title' => '会社概要 | RESPECT FORCE',
            'description' => '株式会社リスペクトフォースの会社概要、事業内容、所在地などをご案内します。',
        ),
        'contact' => array(
            'title' => 'お問い合わせ | RESPECT FORCE',
            'description' => '美容機器の売買・レンタル、店舗売買、機器修理、開業支援に関するお問い合わせはこちらからご相談ください。',
        ),
        'contact_resister' => array(
            'title' => 'サロンお問い合わせ | RESPECT FORCE',
            'description' => 'サロン事業者様向けのお問い合わせページです。美容機器やサービス導入についてお気軽にご相談ください。',
        ),
        'guide' => array(
            'title' => 'ご利用ガイド | RESPECT FORCE',
            'description' => 'RESPECT FORCEで美容機器を借りる・貸す・買う・売る際の流れや注意点をわかりやすくご案内します。',
        ),
        'guide_buy' => array(
            'title' => '美容機器を買いたい方へ | RESPECT FORCE',
            'description' => '中古・新品美容機器を購入したい方向けに、商品検索から契約、支払い、納品までの流れをご案内します。',
        ),
        'guide_lend' => array(
            'title' => '美容機器を貸したい方へ | RESPECT FORCE',
            'description' => '使っていない美容機器を貸し出したい方向けに、掲載、契約、レンタル運用の流れをご案内します。',
        ),
        'guide_sell' => array(
            'title' => '美容機器を売りたい方へ | RESPECT FORCE',
            'description' => '使っていない美容機器を売却したい方向けに、登録、問い合わせ対応、契約、代金受け取りまでの流れをご案内します。',
        ),
        'news' => array(
            'title' => 'お知らせ | RESPECT FORCE',
            'description' => 'RESPECT FORCEからのお知らせ、ニュース、サービス情報を掲載しています。',
        ),
        'recredit' => array(
            'title' => 'Re・Credit | RESPECT FORCE',
            'description' => '美容業界に特化した月額サブスク集金代行サービスRe・Credit。請求・入金管理の手間や未回収リスクを軽減します。',
        ),
        'buying' => array(
            'title' => '店舗売買 | RESPECT FORCE',
            'description' => '店舗を売りたい方と買いたい方を直接つなぐ、美容業界特化の店舗売買マッチングサービスです。',
        ),
        'share_salon' => array(
            'title' => 'シェアサロン | RESPECT FORCE',
            'description' => '美容師・ネイリスト・アイリスト・セラピストのためのシェアサロン。好きな場所で働き、売上100%還元を目指せる働き方をサポートします。',
        ),
        'relabs_repair' => array(
            'title' => '美容機器修理 | RESPECT FORCE',
            'description' => 'どこよりも早く・確かに。美容機器の急な故障、出力低下、古い機種や廃盤機種の修理まで迅速に診断・見積もりします。',
        ),
        'relabs' => array(
            'title' => 'Re・labs | RESPECT FORCE',
            'description' => '美容機器の修理・メンテナンス・再活用を支援するRe・labs。サロン運営に必要な機器環境をサポートします。',
        ),
        'remake' => array(
            'title' => 'Re・make | RESPECT FORCE',
            'description' => '美容機器の売買・レンタルやサロン運営支援を通じて、美容業界の再活用と事業成長をサポートします。',
        ),
        'restart' => array(
            'title' => 'Re・start | RESPECT FORCE',
            'description' => '美容サロンの開業・再スタートを、機器導入や運営面から支援するRESPECT FORCEのサービスです。',
        ),
        'ma' => array(
            'title' => '店舗売却 | RESPECT FORCE',
            'description' => '美容サロン・エステサロンの店舗売却、事業承継、設備引き継ぎをサポートします。',
        ),
        'privacy' => array(
            'title' => 'プライバシーポリシー | RESPECT FORCE',
            'description' => 'RESPECT FORCEの個人情報保護方針、個人情報の取り扱いについてご案内します。',
        ),
        'terms' => array(
            'title' => '利用規約 | RESPECT FORCE',
            'description' => 'RESPECT FORCEのサービス利用規約をご確認いただけます。',
        ),
        'tokushoho' => array(
            'title' => '特定商取引法に基づく表記 | RESPECT FORCE',
            'description' => 'RESPECT FORCEの特定商取引法に基づく表記を掲載しています。',
        ),
        'kobutsu' => array(
            'title' => '古物営業法に基づく表記 | RESPECT FORCE',
            'description' => 'RESPECT FORCEの古物営業法に基づく表記を掲載しています。',
        ),
        'copyright_policy' => array(
            'title' => '著作権・リンクポリシー | RESPECT FORCE',
            'description' => 'RESPECT FORCEの著作権およびリンクポリシーについてご案内します。',
        ),
        'disclaimer' => array(
            'title' => '免責事項 | RESPECT FORCE',
            'description' => 'RESPECT FORCEの免責事項をご確認いただけます。',
        ),
        'antique' => array(
            'title' => '古物営業法に基づく表記 | RESPECT FORCE',
            'description' => 'RESPECT FORCEの古物営業法に基づく表記を掲載しています。',
        ),
        'search' => array(
            'title' => '商品検索 | RESPECT FORCE',
            'description' => '美容機器の商品検索ページです。カテゴリや条件から目的に合う機器をお探しいただけます。',
        ),
    );

    if ($context === '' && function_exists('is_front_page') && (is_front_page() || is_home())) {
        $context = 'home';
    }

    if ($context === '' && function_exists('is_search') && is_search()) {
        $query = get_search_query();
        return array(
            'title' => ($query !== '' ? '「' . $query . '」の検索結果' : '検索結果') . ' | ' . $site_name,
            'description' => ($query !== '' ? '「' . $query . '」' : '指定条件') . 'に一致する美容機器や関連情報の検索結果です。',
        );
    }

    if ($context === '' && function_exists('is_category') && is_category()) {
        $term = get_queried_object();
        if ($term instanceof WP_Term) {
            $term_name = $term->name;
            if ($term->slug === 'products' || $term_name === '商品') {
                return $configs['products'];
            }
            $term_description = trim(wp_strip_all_tags(term_description($term)));
            return array(
                'title' => $term_name . 'の商品一覧 | ' . $site_name,
                'description' => $term_description !== '' ? $term_description : $term_name . 'カテゴリの美容機器一覧です。新品・中古販売、レンタル、リース対応商品を掲載しています。',
            );
        }
    }

    if ($context === '' && function_exists('is_singular') && is_singular('post')) {
        $post_title = get_the_title();
        $post_description = trim(wp_strip_all_tags(get_the_excerpt() ?: get_the_content()));
        return array(
            'title' => $post_title . ' | ' . $site_name,
            'description' => mb_substr($post_description !== '' ? $post_description : $post_title, 0, 120),
        );
    }

    if ($context === '' && function_exists('is_page') && is_page()) {
        $template_slug = get_page_template_slug(get_queried_object_id());
        $template_contexts = array(
            'company.php' => 'company',
            'contact.php' => 'contact',
            'contact_resister.php' => 'contact_resister',
            'guide.php' => 'guide',
            'guide_buy.php' => 'guide_buy',
            'guide_lend.php' => 'guide_lend',
            'guide_sell.php' => 'guide_sell',
            'news_archive.php' => 'news',
            'recredit.php' => 'recredit',
            'buying_recredit.php' => 'buying',
            'share_salon.php' => 'share_salon',
            'relabs_recredit.php' => 'relabs_repair',
            'relabs.php' => 'relabs',
            'remake.php' => 'remake',
            'restart.php' => 'restart',
            'ma.php' => 'ma',
            'privacy.php' => 'privacy',
            'terms.php' => 'terms',
            'tokushoho.php' => 'tokushoho',
            'kobutsu.php' => 'kobutsu',
            'copyright_policy.php' => 'copyright_policy',
            'disclaimer.php' => 'disclaimer',
            'archive_children.php' => 'products',
        );
        $context = isset($template_contexts[$template_slug]) ? $template_contexts[$template_slug] : '';
    }

    if ($context !== '' && isset($configs[$context])) {
        return $configs[$context];
    }

    return array(
        'title' => $title !== '' ? $title : $site_name,
        'description' => $description !== '' ? $description : $default_description,
    );
}

function rf_theme_print_seo_meta($context = '', $title = '', $description = '', $type = 'article') {
    $seo = rf_theme_get_seo_text($context, $title, $description);
    $seo_title = $seo['title'];
    $seo_description = $seo['description'];
    $site_name = 'RESPECT FORCE';
    $url = function_exists('home_url') ? home_url(add_query_arg(array(), isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/')) : '';
    $image = function_exists('get_template_directory_uri') ? get_template_directory_uri() . '/img/common/ogp.png' : '';
    ?>
    <title><?php echo esc_html($seo_title); ?></title>
    <meta name="description" content="<?php echo esc_attr($seo_description); ?>">
    <meta property="og:type" content="<?php echo esc_attr($type); ?>">
    <meta property="og:title" content="<?php echo esc_attr($seo_title); ?>">
    <meta property="og:url" content="<?php echo esc_url($url); ?>">
    <meta property="og:image" content="<?php echo esc_url($image); ?>">
    <meta property="og:description" content="<?php echo esc_attr($seo_description); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr($site_name); ?>">
    <meta property="og:locale" content="ja_JP">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr($seo_title); ?>">
    <meta name="twitter:description" content="<?php echo esc_attr($seo_description); ?>">
    <meta name="twitter:image" content="<?php echo esc_url($image); ?>">
    <?php
}

function rf_theme_get_structured_current_url() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '/';
    $path = parse_url($request_uri, PHP_URL_PATH);
    $path = $path !== null && $path !== false ? $path : '/';
    $url = home_url($path);
    $allowed_query_keys = array('detail_id', 'type', 's', 'paged');
    $query_args = array();

    foreach ($allowed_query_keys as $query_key) {
        if (isset($_GET[$query_key]) && $_GET[$query_key] !== '') {
            $query_args[$query_key] = sanitize_text_field(wp_unslash((string) $_GET[$query_key]));
        }
    }

    return !empty($query_args) ? add_query_arg($query_args, $url) : $url;
}

function rf_theme_get_structured_page_title($seo_title) {
    $title = trim((string) $seo_title);
    $title = preg_replace('/\s*\|\s*RESPECT FORCE\s*$/u', '', $title);

    return $title !== '' ? $title : 'RESPECT FORCE';
}

function rf_theme_get_structured_breadcrumb_items($page_title, $current_url, $product_schema = null) {
    $items = array(
        array(
            'name' => 'トップ',
            'url' => home_url('/'),
        ),
    );

    if (function_exists('is_front_page') && is_front_page()) {
        return $items;
    }

    if (function_exists('is_category') && is_category()) {
        $term = get_queried_object();
        if ($term instanceof WP_Term) {
            if ($term->slug !== 'products') {
                $items[] = array(
                    'name' => '商品一覧',
                    'url' => rf_theme_get_products_url(),
                );
            }

            $ancestors = array_reverse(get_ancestors($term->term_id, 'category'));
            foreach ($ancestors as $ancestor_id) {
                $ancestor = get_category($ancestor_id);
                if ($ancestor instanceof WP_Term) {
                    $items[] = array(
                        'name' => $ancestor->name,
                        'url' => get_category_link($ancestor),
                    );
                }
            }

            $items[] = array(
                'name' => $term->name,
                'url' => get_category_link($term),
            );

            return $items;
        }
    }

    $detail_id = isset($_GET['detail_id']) ? absint(wp_unslash($_GET['detail_id'])) : 0;
    if ($detail_id > 0 && is_array($product_schema)) {
        $items[] = array(
            'name' => '商品一覧',
            'url' => rf_theme_get_products_url(),
        );
    }

    $items[] = array(
        'name' => $page_title,
        'url' => $current_url,
    );

    return $items;
}

function rf_theme_build_breadcrumb_schema($items) {
    $item_list = array();

    foreach (array_values($items) as $index => $item) {
        $item_list[] = array(
            '@type' => 'ListItem',
            'position' => $index + 1,
            'name' => $item['name'],
            'item' => $item['url'],
        );
    }

    return array(
        '@type' => 'BreadcrumbList',
        '@id' => rf_theme_get_structured_current_url() . '#breadcrumb',
        'itemListElement' => $item_list,
    );
}

function rf_theme_get_structured_product_post($detail_id) {
    $detail_id = trim((string) $detail_id);
    if ($detail_id === '') {
        return null;
    }

    $posts = get_posts(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'no_found_rows' => true,
        'meta_query' => array(
            'relation' => 'OR',
            array(
                'key' => 'detail_id',
                'value' => $detail_id,
                'compare' => '=',
            ),
            array(
                'key' => 'connect_id',
                'value' => $detail_id,
                'compare' => '=',
            ),
        ),
    ));

    return !empty($posts[0]) ? $posts[0] : null;
}

function rf_theme_get_structured_product_schema($current_url) {
    $detail_id = isset($_GET['detail_id']) ? absint(wp_unslash($_GET['detail_id'])) : 0;
    if ($detail_id <= 0) {
        return null;
    }

    $product_data = rf_theme_fetch_product_detail_row($detail_id);
    if (!is_array($product_data)) {
        $product_data = array();
    }

    $product_post = rf_theme_get_structured_product_post($detail_id);
    $post_id = $product_post instanceof WP_Post ? (int) $product_post->ID : 0;
    $name = $post_id > 0 ? get_the_title($post_id) : '';
    if ($name === '' && !empty($product_data['detail_title'])) {
        $name = (string) $product_data['detail_title'];
    }
    if ($name === '') {
        return null;
    }

    $description_source = '';
    if (!empty($product_data['detail_catch'])) {
        $description_source = $product_data['detail_catch'];
    } elseif ($post_id > 0) {
        $description_source = get_post_field('post_content', $post_id);
    } elseif (!empty($product_data['detail_comment'])) {
        $description_source = $product_data['detail_comment'];
    }

    $description = trim(wp_strip_all_tags((string) $description_source));
    if ($description !== '') {
        $description = function_exists('mb_substr') ? mb_substr($description, 0, 200, 'UTF-8') : substr($description, 0, 200);
    }

    $images = array();
    if ($post_id > 0) {
        $featured_image = get_the_post_thumbnail_url($post_id, 'large');
        if ($featured_image) {
            $images[] = $featured_image;
        }

        foreach (array('picture_1', 'picture_2', 'picture_3', 'picture_4', 'picture_5') as $image_field) {
            $image_url = get_post_meta($post_id, $image_field, true);
            if ($image_url !== '') {
                $images[] = $image_url;
            }
        }
    }

    foreach (array('picture_id', 'picture_id1', 'picture_id2') as $picture_key) {
        if (!empty($product_data[$picture_key])) {
            $images[] = rf_theme_get_product_api_url('picture', $product_data[$picture_key]);
        }
    }

    $images = array_values(array_unique(array_filter(array_map('esc_url_raw', $images))));

    $schema = array(
        '@type' => 'Product',
        '@id' => $current_url . '#product',
        'name' => $name,
        'url' => $current_url,
        'sku' => (string) $detail_id,
        'brand' => array(
            '@type' => 'Brand',
            'name' => 'RESPECT FORCE',
        ),
    );

    if ($description !== '') {
        $schema['description'] = $description;
    }
    if (!empty($images)) {
        $schema['image'] = $images;
    }

    $price_values = array();
    if ($post_id > 0) {
        foreach (array('new_price', 'used_price', 'rental_price', 'lease_price', 'sale_price') as $price_key) {
            $amount = rf_theme_normalize_price_value(get_post_meta($post_id, $price_key, true));
            if ($amount !== null) {
                $price_values[] = $amount;
            }
        }
    }

    if (!empty($product_data['detail_prise'])) {
        $legacy_amount = rf_theme_normalize_price_value($product_data['detail_prise']);
        if ($legacy_amount !== null) {
            $price_values[] = $legacy_amount;
        }
    }

    $price_values = array_values(array_filter($price_values));
    if (!empty($price_values)) {
        $schema['offers'] = array(
            '@type' => 'Offer',
            'url' => $current_url,
            'priceCurrency' => 'JPY',
            'price' => min($price_values),
            'seller' => array(
                '@id' => home_url('/#organization'),
            ),
        );
    }

    return $schema;
}

function rf_theme_print_structured_data() {
    if (is_admin() || wp_doing_ajax() || (function_exists('wp_is_json_request') && wp_is_json_request())) {
        return;
    }

    $current_url = rf_theme_get_structured_current_url();
    $product_schema = rf_theme_get_structured_product_schema($current_url);
    $seo = rf_theme_get_seo_text();
    $page_title = rf_theme_get_structured_page_title($seo['title']);
    $description = trim((string) $seo['description']);
    if (is_array($product_schema) && !empty($product_schema['name'])) {
        $page_title = $product_schema['name'];
        if (!empty($product_schema['description'])) {
            $description = $product_schema['description'];
        }
    }
    $breadcrumb_items = rf_theme_get_structured_breadcrumb_items($page_title, $current_url, $product_schema);
    $breadcrumb_schema = rf_theme_build_breadcrumb_schema($breadcrumb_items);

    $graph = array(
        array(
            '@type' => 'Organization',
            '@id' => home_url('/#organization'),
            'name' => 'RESPECT FORCE',
            'url' => home_url('/'),
            'logo' => array(
                '@type' => 'ImageObject',
                'url' => get_template_directory_uri() . '/img/common/main_logo.svg',
            ),
        ),
        array(
            '@type' => 'WebSite',
            '@id' => home_url('/#website'),
            'url' => home_url('/'),
            'name' => 'RESPECT FORCE',
            'publisher' => array(
                '@id' => home_url('/#organization'),
            ),
            'potentialAction' => array(
                '@type' => 'SearchAction',
                'target' => home_url('/?s={search_term_string}'),
                'query-input' => 'required name=search_term_string',
            ),
        ),
        array(
            '@type' => 'WebPage',
            '@id' => $current_url . '#webpage',
            'url' => $current_url,
            'name' => $page_title,
            'description' => $description,
            'isPartOf' => array(
                '@id' => home_url('/#website'),
            ),
            'about' => array(
                '@id' => home_url('/#organization'),
            ),
            'breadcrumb' => array(
                '@id' => $breadcrumb_schema['@id'],
            ),
            'inLanguage' => 'ja',
        ),
        $breadcrumb_schema,
    );

    if ($product_schema !== null) {
        $graph[] = $product_schema;
    }

    $schema = array(
        '@context' => 'https://schema.org',
        '@graph' => $graph,
    );
    ?>
    <script type="application/ld+json"><?php echo wp_json_encode($schema, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); ?></script>
    <?php
}
add_action('wp_head', 'rf_theme_print_structured_data', 30);

function custom_pagination() {
    global $wp_query;

    if ($wp_query->max_num_pages <= 1) return;

    $big = 999999999; // need an unlikely integer
    
    $pages = paginate_links(array(
        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_next'   => true,
        'prev_text'    => __('«'),
        'next_text'    => __('»'),
    ));

    if (is_array($pages)) {
        echo '<nav aria-label="Page navigation" class="pagination">';
        echo '<ul class="pagination-list">';
        
        foreach ($pages as $page) {
            echo '<li class="pagination-item">' . $page . '</li>';
        }
        
        echo '</ul>';
        echo '</nav>';
    }
}
?>

<?php
function rf_theme_route_relabs_repair_alias() {
    $request_path = isset($_SERVER['REQUEST_URI'])
        ? trim(parse_url(wp_unslash($_SERVER['REQUEST_URI']), PHP_URL_PATH), '/')
        : '';

    if ($request_path === 'relabs.html') {
        wp_safe_redirect(home_url('/trouble.html'), 301);
        exit;
    }

    if ($request_path !== 'trouble.html') {
        return;
    }

    status_header(200);
    global $wp_query;
    if ($wp_query) {
        $wp_query->is_404 = false;
    }

    include get_template_directory() . '/relabs_recredit.php';
    exit;
}
add_action('template_redirect', 'rf_theme_route_relabs_repair_alias', 0);

// カスタム列を追加（変更なし）
function add_acf_columns($columns) {
    $columns['ranking'] = 'ランキング';
    $columns['attention'] = '注目度';
    $columns['recommendation'] = 'おすすめ度';
    return $columns;
}
add_filter('manage_posts_columns', 'add_acf_columns');

// カスタム列にACFフィールドの値を表示（変更なし）
function custom_column_content($column_name, $post_id) {
    if (in_array($column_name, ['ranking', 'attention', 'recommendation'])) {
        $value = get_field($column_name, $post_id);
        echo is_numeric($value) ? $value : '-';
    }
}
add_action('manage_posts_custom_column', 'custom_column_content', 10, 2);

// ソート機能を追加（更新）
function custom_column_orderby($query) {
    if (!is_admin()) return;

    $orderby = $query->get('orderby');
    $filter_column = isset($_GET['filter_column']) ? $_GET['filter_column'] : '';

    if (in_array($orderby, ['ranking', 'attention', 'recommendation'])) {
        $query->set('meta_key', $orderby);
        $query->set('orderby', 'meta_value_num');
        
        // フィルター: 値が存在する投稿のみを表示
        if ($filter_column === $orderby) {
            $query->set('meta_query', array(
                array(
                    'key' => $orderby,
                    'value' => '',
                    'compare' => '!=',
                )
            ));
        }
    }
}
add_action('pre_get_posts', 'custom_column_orderby');

function rf_theme_get_news_archive_page_for_request($query_vars = array()) {
    $page = null;

    if (!empty($query_vars['pagename'])) {
        $page = get_page_by_path($query_vars['pagename']);
    } elseif (!empty($query_vars['page_id'])) {
        $page = get_post((int) $query_vars['page_id']);
    }

    if (!($page instanceof WP_Post) || $page->post_type !== 'page') {
        return null;
    }

    return get_page_template_slug($page->ID) === 'news_archive.php' ? $page : null;
}

function rf_theme_fix_news_archive_pagination_request($query_vars) {
    $requested_page = isset($_GET['p']) ? absint(wp_unslash($_GET['p'])) : 0;

    if ($requested_page < 2) {
        return $query_vars;
    }

    $news_archive_page = rf_theme_get_news_archive_page_for_request($query_vars);

    if (!($news_archive_page instanceof WP_Post)) {
        return $query_vars;
    }

    unset($query_vars['p']);

    return $query_vars;
}
add_filter('request', 'rf_theme_fix_news_archive_pagination_request', 20);

function rf_theme_disable_news_archive_pagination_canonical($redirect_url, $requested_url) {
    $requested_page = isset($_GET['p']) ? absint(wp_unslash($_GET['p'])) : 0;

    if ($requested_page < 2) {
        return $redirect_url;
    }

    $page_id = get_queried_object_id();

    if ($page_id && get_page_template_slug($page_id) === 'news_archive.php') {
        return false;
    }

    return $redirect_url;
}
add_filter('redirect_canonical', 'rf_theme_disable_news_archive_pagination_canonical', 20, 2);

// カスタム列をソート可能にする（更新）
function custom_sortable_columns($columns) {
    $columns['ranking'] = 'ranking';
    $columns['attention'] = 'attention';
    $columns['recommendation'] = 'recommendation';
    return $columns;
}
add_filter('manage_edit-post_sortable_columns', 'custom_sortable_columns');

// 管理画面のCSSを調整（変更なし）
function custom_admin_styles() {
    echo '<style>
        .column-ranking, .column-attention, .column-recommendation { 
            width: auto!important; 
            text-align: center!important;
        }
    </style>';
}
add_action('admin_head', 'custom_admin_styles');

// ソートリンクにフィルターパラメータを追加
function custom_sortable_columns_url($url, $column, $key) {
    if (in_array($column, ['ranking', 'attention', 'recommendation'])) {
        $url = add_query_arg('filter_column', $column, $url);
    }
    return $url;
}
add_filter('manage_posts_custom_column_url', 'custom_sortable_columns_url', 10, 3);

// JavaScriptを追加してURLを更新
function add_custom_js_to_admin() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.wp-list-table thead th').on('click', 'a', function(e) {
            var column = $(this).parent().attr('id').replace('sortable-', '');
            if (['ranking', 'attention', 'recommendation'].includes(column)) {
                e.preventDefault();
                var url = new URL($(this).attr('href'));
                url.searchParams.set('filter_column', column);
                window.location.href = url.toString();
            }
        });
    });
    </script>
    <?php
}
add_action('admin_footer', 'add_custom_js_to_admin');


?>
<?php
// クイック編集フォームにカスタムフィールドを追加（日本語ラベル）
function add_quick_edit_custom_box($column_name, $post_type) {
    static $printed = false;
    if ($printed) return;
    $printed = true;
    
    $fields = [
        'ranking' => 'ランキング',
        'attention' => '注目度',
        'recommendation' => 'おすすめ度'
    ];
    ?>
    <div class="custom-quick-edit-fields">
        <h4>カスタムフィールド</h4>
        <?php foreach ($fields as $field_key => $field_label): ?>
            <fieldset class="inline-edit-col">
                <div class="inline-edit-col">
                    <label>
                        <span class="title"><?php echo $field_label; ?></span>
                        <span class="input-text-wrap">
                            <input type="number" name="acf[<?php echo $field_key; ?>]" class="acf-quick-edit" data-field="<?php echo $field_key; ?>" value="">
                        </span>
                    </label>
                </div>
            </fieldset>
        <?php endforeach; ?>
    </div>
    <?php
}
add_action('quick_edit_custom_box', 'add_quick_edit_custom_box', 11, 2);

// クイック編集フォームの値を保存（0または未入力の場合は更新しない）
function save_quick_edit_custom_box($post_id) {
    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;
    if (!current_user_can('edit_post', $post_id)) return;

    $fields = ['ranking', 'attention', 'recommendation'];
    foreach ($fields as $field) {
        if (isset($_POST['acf'][$field])) {
            $value = $_POST['acf'][$field];
            if ($value !== '' && $value !== '0') {
                update_field($field, intval($value), $post_id);
            } else {
                delete_field($field, $post_id);
            }
        }
    }
}
add_action('save_post', 'save_quick_edit_custom_box');

// JavaScriptを追加してクイック編集フォームに現在の値を設定
function add_quick_edit_javascript() {
    ?>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        var wp_inline_edit_function = inlineEditPost.edit;
        inlineEditPost.edit = function(id) {
            wp_inline_edit_function.apply(this, arguments);
            var post_id = 0;
            if (typeof(id) == 'object') {
                post_id = parseInt(this.getId(id));
            }
            if (post_id > 0) {
                var edit_row = $('#edit-' + post_id);
                var post_row = $('#post-' + post_id);
                $('.acf-quick-edit', edit_row).each(function() {
                    var field = $(this).data('field');
                    var value = $('.column-' + field, post_row).text();
                    $(this).val(value !== '-' && value !== '0' ? value : '');
                });
            }
        };
    });
    </script>
    <?php
}
add_action('admin_footer-edit.php', 'add_quick_edit_javascript');

// 管理画面のCSSを調整
function custom_admin_styles_2() {
    echo '<style>
        .column-ranking, .column-attention, .column-recommendation { 
            width: 10%; 
            text-align: center;
        }
        .custom-quick-edit-fields {
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 10px;
            padding-top: 10px;
            border-top: 1px solid #ddd;
            clear: both;
        }
        .custom-quick-edit-fields h4 {
            width: 100%;
            margin-bottom: 10px;
        }
        .custom-quick-edit-fields .inline-edit-col {
            flex: 1;
            min-width: 200px;
        }
        .custom-quick-edit-fields .inline-edit-col label {
            display: flex;
            align-items: center;
            justify-content: flex-start;
        }
        .custom-quick-edit-fields .inline-edit-col .title {
            width: auto;
        }
        .custom-quick-edit-fields .inline-edit-col .input-text-wrap {
            flex: 1;
            margin-left: 10px;
        }
        .inline-edit-col .input-text-wrap input[type="number"] {
            width: 100%;
        }
        @media screen and (max-width: 782px) {
            .custom-quick-edit-fields {
                flex-direction: column;
            }
            .custom-quick-edit-fields .inline-edit-col {
                width: 100%;
            }
        }
    </style>';
}
add_action('admin_head', 'custom_admin_styles_2');


add_filter( 'wpcf7_validate_email', 'wpcf7_validate_email_filter_confrim', 11, 2 );
add_filter( 'wpcf7_validate_email*', 'wpcf7_validate_email_filter_confrim', 11, 2 );
function wpcf7_validate_email_filter_confrim( $result, $tag ) {
    $type = $tag['type'];
    $name = $tag['name'];
    if ( 'email' == $type || 'email*' == $type ) {
        if (preg_match('/(.*)_confirm$/', $name, $matches)){ //確認用メルアド入力フォーム名を ○○○_confirm としています。
            $target_name = $matches[1];
                $posted_value = trim( (string) $_POST[$name] ); //前後空白の削除
                $posted_target_value = trim( (string) $_POST[$target_name] ); //前後空白の削除
            if ($posted_value != $posted_target_value) {
                $result->invalidate( $tag,"確認用のメールアドレスが一致していません");
            }
        }
    }
    return $result;
}

function rf_theme_product_db_connection() {
    static $connection = false;

    if ($connection instanceof mysqli) {
        return $connection;
    }

    $connection = @new mysqli('mysql2.xbiz.ne.jp', 'remake_wp6', '55Quadrajp', 'remake_respect');
    if ($connection->connect_errno) {
        error_log('rf_theme_product_db_connection failed: ' . $connection->connect_error);
        $connection = null;
        return null;
    }

    $connection->set_charset('utf8mb4');
    return $connection;
}

function rf_theme_get_listing_cache_ttl() {
    return HOUR_IN_SECONDS;
}

function rf_theme_get_listing_cache_version() {
    $version = (int) get_option('rf_theme_listing_cache_version', 1);
    return $version > 0 ? $version : 1;
}

function rf_theme_get_listing_cache_key($prefix, $parts = array()) {
    $payload = array(
        'version' => rf_theme_get_listing_cache_version(),
        'parts' => $parts,
    );

    return 'rf_theme_' . sanitize_key($prefix) . '_' . md5(wp_json_encode($payload));
}

function rf_theme_flush_listing_cache() {
    update_option('rf_theme_listing_cache_version', time(), false);
}
add_action('save_post_post', 'rf_theme_flush_listing_cache');
add_action('edited_category', 'rf_theme_flush_listing_cache');
add_action('created_category', 'rf_theme_flush_listing_cache');
add_action('delete_category', 'rf_theme_flush_listing_cache');

function rf_theme_fetch_db_assoc($sql, $param_type, $param_value) {
    $connection = rf_theme_product_db_connection();
    if (!$connection) {
        return null;
    }

    $statement = $connection->prepare($sql);
    if (!$statement) {
        error_log('rf_theme_fetch_db_assoc prepare failed: ' . $connection->error);
        return null;
    }

    $statement->bind_param($param_type, $param_value);
    if (!$statement->execute()) {
        error_log('rf_theme_fetch_db_assoc execute failed: ' . $statement->error);
        $statement->close();
        return null;
    }

    $result = $statement->get_result();
    if (!$result) {
        $statement->close();
        return null;
    }

    $row = $result->fetch_assoc();
    $result->free();
    $statement->close();

    return $row ?: null;
}

function rf_theme_fetch_product_detail_row($connect_id) {
    $connect_id = (int) $connect_id;
    if ($connect_id <= 0) {
        return null;
    }

    return rf_theme_fetch_db_assoc(
        'SELECT * FROM detail WHERE detail_id = ?',
        'i',
        $connect_id
    );
}

function rf_theme_fetch_product_detail_rows($connect_ids) {
    $connect_ids = array_values(array_unique(array_filter(array_map('intval', (array) $connect_ids))));
    if (empty($connect_ids)) {
        return array();
    }

    $connection = rf_theme_product_db_connection();
    if (!$connection) {
        return array();
    }

    $placeholders = implode(',', array_fill(0, count($connect_ids), '?'));
    $types = str_repeat('i', count($connect_ids));
    $listing_columns = 'detail_id, detail_prise, detail_prise_type, picture_id, picture_id1, picture_id2';
    $statement = $connection->prepare('SELECT ' . $listing_columns . ' FROM detail WHERE detail_id IN (' . $placeholders . ')');
    if (!$statement) {
        error_log('rf_theme_fetch_product_detail_rows prepare failed: ' . $connection->error);
        return array();
    }

    $bind_params = array_merge(array($types), $connect_ids);
    $bind_references = array();
    foreach ($bind_params as $bind_index => $bind_value) {
        $bind_references[$bind_index] = &$bind_params[$bind_index];
    }
    call_user_func_array(array($statement, 'bind_param'), $bind_references);
    if (!$statement->execute()) {
        error_log('rf_theme_fetch_product_detail_rows execute failed: ' . $statement->error);
        $statement->close();
        return array();
    }

    $result = $statement->get_result();
    if (!$result) {
        $statement->close();
        return array();
    }

    $rows = array();
    while ($row = $result->fetch_assoc()) {
        if (!empty($row['detail_id'])) {
            $rows[(int) $row['detail_id']] = $row;
        }
    }

    $result->free();
    $statement->close();

    return $rows;
}

function rf_theme_get_product_api_url($type, $id) {
    $id = trim((string) $id);
    if ($type === '' || $id === '') {
        return '';
    }

    return add_query_arg(
        array(
            'type' => $type,
            'id' => $id,
        ),
        get_template_directory_uri() . '/api_product.php'
    );
}

function rf_theme_picture_exists($picture_id) {
    static $cache = array();

    $picture_id = (int) $picture_id;
    if ($picture_id <= 0) {
        return false;
    }

    if (array_key_exists($picture_id, $cache)) {
        return $cache[$picture_id];
    }

    $row = rf_theme_fetch_db_assoc(
        'SELECT picture_id, OCTET_LENGTH(picture_bin) AS picture_size FROM picture WHERE picture_id = ?',
        'i',
        $picture_id
    );

    $cache[$picture_id] = !empty($row['picture_id']) && !empty($row['picture_size']);
    return $cache[$picture_id];
}

function rf_theme_get_picture_image_url($picture_id, $fallback = '') {
    $picture_id = (int) $picture_id;
    if ($picture_id > 0 && rf_theme_picture_exists($picture_id)) {
        return rf_theme_get_product_api_url('picture', $picture_id);
    }

    return $fallback;
}

function rf_theme_get_picture_data_uri($picture_id, $fallback = '') {
    static $cache = array();

    $picture_id = (int) $picture_id;
    if ($picture_id <= 0) {
        return $fallback;
    }

    if (array_key_exists($picture_id, $cache)) {
        return $cache[$picture_id] ?: $fallback;
    }

    $connection = rf_theme_product_db_connection();
    if (!$connection) {
        $cache[$picture_id] = '';
        return $fallback;
    }

    $statement = $connection->prepare('SELECT picture_bin, mime_type FROM picture WHERE picture_id = ?');
    if ($statement === false) {
        $cache[$picture_id] = '';
        return $fallback;
    }

    $statement->bind_param('i', $picture_id);
    if (!$statement->execute()) {
        $statement->close();
        $cache[$picture_id] = '';
        return $fallback;
    }

    $statement->store_result();
    if ($statement->num_rows <= 0) {
        $statement->close();
        $cache[$picture_id] = '';
        return $fallback;
    }

    $picture_bin = null;
    $mime_type = null;
    $statement->bind_result($picture_bin, $mime_type);
    $statement->fetch();
    $statement->close();

    if (empty($picture_bin)) {
        $cache[$picture_id] = '';
        return $fallback;
    }

    $mime_type = !empty($mime_type) ? $mime_type : 'image/jpeg';
    $cache[$picture_id] = 'data:' . $mime_type . ';base64,' . base64_encode($picture_bin);

    return $cache[$picture_id];
}

function rf_theme_get_product_detail_url($detail_id, $fallback = '') {
    $detail_id = trim((string) $detail_id);
    if ($detail_id === '') {
        return $fallback;
    }

    return add_query_arg(
        array(
            'detail_id' => $detail_id,
        ),
        home_url('/detail.html')
    );
}

function rf_theme_normalize_price_value($value) {
    $normalized = preg_replace('/[^\d]/', '', (string) $value);
    return $normalized === '' ? null : (int) $normalized;
}

function rf_theme_get_listing_meta($post_id, $key) {
    static $cache = array();

    $post_id = (int) $post_id;
    $key = (string) $key;
    if ($post_id <= 0 || $key === '') {
        return '';
    }

    if (!isset($cache[$post_id])) {
        $cache[$post_id] = array();
    }

    if (!array_key_exists($key, $cache[$post_id])) {
        $cache[$post_id][$key] = get_post_meta($post_id, $key, true);
    }

    return $cache[$post_id][$key];
}

function rf_theme_get_listing_connect_id($post_id) {
    return (int) rf_theme_get_listing_meta($post_id, 'connect_id');
}

function rf_theme_format_legacy_price_label($label) {
    $label = trim((string) $label);
    $map = array(
        'サロン価格' => 'サロン価格',
        'アウトレット価格' => 'アウトレット価格',
        'レンタル価格' => 'レンタル価格',
        '月額リース価格' => '月額リース価格',
        'リース価格' => '月額リース価格',
    );

    return isset($map[$label]) ? $map[$label] : '価格';
}

function rf_theme_get_product_listing_data($post_id, $product_data = null, $include_image = true) {
    static $cache = array();

    $post_id = (int) $post_id;
    $cache_key = $post_id . ':' . ($include_image ? 'image' : 'data');
    if (array_key_exists($cache_key, $cache)) {
        return $cache[$cache_key];
    }

    $connect_id = rf_theme_get_listing_connect_id($post_id);
    if ($product_data === null && $connect_id) {
        $product_data = rf_theme_fetch_product_detail_row($connect_id);
    }
    $detail_id = !empty($product_data['detail_id']) ? $product_data['detail_id'] : rf_theme_get_listing_meta($post_id, 'detail_id');
    $image_src = '';

    if ($include_image) {
        if (!empty($product_data['picture_id'])) {
            $image_src = rf_theme_get_picture_image_url($product_data['picture_id']);
        }

        if ($image_src === '' && !empty($product_data['picture_id1'])) {
            $image_src = rf_theme_get_picture_image_url($product_data['picture_id1']);
        }

        if ($image_src === '' && !empty($product_data['picture_id2'])) {
            $image_src = rf_theme_get_picture_image_url($product_data['picture_id2']);
        }

        if ($image_src === '') {
            $picture_1 = get_field('picture_1', $post_id);
            if (!empty($picture_1)) {
                $image_src = $picture_1;
            }
        }

        if ($image_src === '') {
            $image_src = get_template_directory_uri() . '/img/common/no-image.png';
        }
    }

    $cache[$cache_key] = array(
        'connect_id' => $connect_id,
        'product_data' => $product_data ?: array(),
        'detail_id' => $detail_id,
        'detail_url' => rf_theme_get_product_detail_url($detail_id, get_permalink($post_id)),
        'image_src' => $image_src,
    );

    return $cache[$cache_key];
}

function rf_theme_get_listing_preload_map($posts) {
    static $cache = array();

    $connect_ids = array();

    foreach ((array) $posts as $post) {
        if (!isset($post->ID)) {
            continue;
        }
        $connect_id = rf_theme_get_listing_connect_id($post->ID);
        if (!empty($connect_id)) {
            $connect_ids[] = (int) $connect_id;
        }
    }

    $connect_ids = array_values(array_unique(array_filter(array_map('intval', $connect_ids))));
    if (empty($connect_ids)) {
        return array();
    }

    sort($connect_ids, SORT_NUMERIC);
    $cache_key = md5(implode(',', $connect_ids));
    if (isset($cache[$cache_key])) {
        return $cache[$cache_key];
    }

    $cache[$cache_key] = rf_theme_fetch_product_detail_rows($connect_ids);
    return $cache[$cache_key];
}

function rf_theme_get_category_image_url($term) {
    $image_url = get_template_directory_uri() . '/img/common/1.png';
    $cat_thumb = get_field('cat_thumb', $term);

    if ($cat_thumb) {
        return $cat_thumb;
    }

    $picture_id = (int) get_field('picture_id', $term);
    if ($picture_id > 0) {
        $picture_image_url = rf_theme_get_picture_image_url($picture_id);
        if ($picture_image_url !== '') {
            return $picture_image_url;
        }
    }

    return $image_url;
}

function rf_theme_get_listing_price_display($post_id, $product_data = array(), $filters = array()) {
    static $cache = array();

    $selected_filter_key = implode(':', array(
        !empty($filters['new']) ? 'new' : '',
        !empty($filters['used']) ? 'used' : '',
        !empty($filters['rental']) ? 'rental' : '',
        !empty($filters['lease']) ? 'lease' : '',
    ));
    $legacy_price = isset($product_data['detail_prise']) ? (string) $product_data['detail_prise'] : '';
    $legacy_price_type = isset($product_data['detail_prise_type']) ? (string) $product_data['detail_prise_type'] : '';
    $cache_key = (int) $post_id . ':' . $selected_filter_key . ':' . md5($legacy_price . '|' . $legacy_price_type);

    if (array_key_exists($cache_key, $cache)) {
        return $cache[$cache_key];
    }

    $price_map = array(
        'new' => array(
            'label' => 'サロン価格',
            'value' => rf_theme_get_listing_meta($post_id, 'new_price'),
        ),
        'used' => array(
            'label' => 'アウトレット価格',
            'value' => rf_theme_get_listing_meta($post_id, 'used_price'),
        ),
        'rental' => array(
            'label' => 'レンタル価格',
            'value' => rf_theme_get_listing_meta($post_id, 'rental_price'),
        ),
        'lease' => array(
            'label' => '月額リース価格',
            'value' => rf_theme_get_listing_meta($post_id, 'lease_price'),
        ),
    );

    $selected_keys = array();
    if (!empty($filters['new'])) {
        $selected_keys[] = 'new';
    }
    if (!empty($filters['used'])) {
        $selected_keys[] = 'used';
    }
    if (!empty($filters['rental'])) {
        $selected_keys[] = 'rental';
    }
    if (!empty($filters['lease'])) {
        $selected_keys[] = 'lease';
    }

    if (!empty($selected_keys)) {
        foreach ($selected_keys as $key) {
            $amount = rf_theme_normalize_price_value($price_map[$key]['value']);
            if ($amount !== null) {
                $cache[$cache_key] = array(
                    'label' => $price_map[$key]['label'],
                    'amount' => $amount,
                );
                return $cache[$cache_key];
            }
        }
        $cache[$cache_key] = null;
        return null;
    }

    $cheapest = null;
    foreach ($price_map as $price_item) {
        $amount = rf_theme_normalize_price_value($price_item['value']);
        if ($amount === null) {
            continue;
        }
        if ($cheapest === null || $amount < $cheapest['amount']) {
            $cheapest = array(
                'label' => $price_item['label'],
                'amount' => $amount,
            );
        }
    }

    if ($cheapest !== null) {
        $cache[$cache_key] = $cheapest;
        return $cache[$cache_key];
    }

    if (!empty($product_data['detail_prise'])) {
        $legacy_amount = rf_theme_normalize_price_value($product_data['detail_prise']);
        if ($legacy_amount !== null) {
            $cache[$cache_key] = array(
                'label' => rf_theme_format_legacy_price_label(isset($product_data['detail_prise_type']) ? $product_data['detail_prise_type'] : ''),
                'amount' => $legacy_amount,
            );
            return $cache[$cache_key];
        }
    }

    $cache[$cache_key] = null;
    return null;
}

function rf_theme_get_listing_price_slider_step($max_amount) {
    $max_amount = max(0, (int) $max_amount);

    if ($max_amount <= 100000) {
        return 1000;
    }

    if ($max_amount <= 500000) {
        return 5000;
    }

    return 10000;
}

function rf_theme_get_listing_price_bounds($posts, $filters = array(), $detail_rows = array()) {
    $min_amount = null;
    $max_amount = null;

    foreach ((array) $posts as $post) {
        if (!isset($post->ID)) {
            continue;
        }

        $connect_id = rf_theme_get_listing_connect_id($post->ID);
        $product_row = ($connect_id > 0 && isset($detail_rows[$connect_id])) ? $detail_rows[$connect_id] : null;
        $listing_data = rf_theme_get_product_listing_data($post->ID, $product_row, false);

        if (!rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters, array(), array('price', 'category'))) {
            continue;
        }

        $price_display = rf_theme_get_listing_price_display($post->ID, $listing_data['product_data'], $filters);

        if ($price_display === null) {
            continue;
        }

        $amount = (int) $price_display['amount'];
        if ($min_amount === null || $amount < $min_amount) {
            $min_amount = $amount;
        }
        if ($max_amount === null || $amount > $max_amount) {
            $max_amount = $amount;
        }
    }

    if ($min_amount === null || $max_amount === null) {
        $min_amount = 0;
        $max_amount = 500000;
    }

    $step = rf_theme_get_listing_price_slider_step($max_amount);
    $slider_min = max(0, (int) floor($min_amount / $step) * $step);
    $slider_max = (int) ceil($max_amount / $step) * $step;

    if ($slider_max <= $slider_min) {
        $slider_max = $slider_min + $step;
    }

    return array(
        'min' => $slider_min,
        'max' => $slider_max,
        'step' => $step,
    );
}

function rf_theme_get_listing_price_range_from_request($bounds = array()) {
    $bounds = wp_parse_args($bounds, array(
        'min' => 0,
        'max' => 500000,
        'step' => 1000,
    ));

    $default_min = max(0, (int) $bounds['min']);
    $default_max = max($default_min, (int) $bounds['max']);
    $step = max(1, (int) $bounds['step']);

    $selected_min = isset($_GET['price_min']) ? rf_theme_normalize_price_value(wp_unslash($_GET['price_min'])) : null;
    $selected_max = isset($_GET['price_max']) ? rf_theme_normalize_price_value(wp_unslash($_GET['price_max'])) : null;

    $selected_min = $selected_min === null ? $default_min : max($default_min, min($selected_min, $default_max));
    $selected_max = $selected_max === null ? $default_max : max($default_min, min($selected_max, $default_max));

    if ($selected_min > $selected_max) {
        $swap = $selected_min;
        $selected_min = $selected_max;
        $selected_max = $swap;
    }

    return array(
        'min' => $default_min,
        'max' => $default_max,
        'step' => $step,
        'selected_min' => $selected_min,
        'selected_max' => $selected_max,
        'is_active' => ($selected_min > $default_min) || ($selected_max < $default_max),
    );
}

function rf_theme_get_filtered_listing_posts($posts, $filters = array(), $price_range = array(), $detail_rows = array()) {
    $price_range = wp_parse_args($price_range, array(
        'selected_min' => 0,
        'selected_max' => PHP_INT_MAX,
    ));

    $matched_posts = array();
    $listing_data_map = array();
    $price_display_map = array();

    foreach ((array) $posts as $post) {
        if (!isset($post->ID)) {
            continue;
        }

        $connect_id = rf_theme_get_listing_connect_id($post->ID);
        $product_row = ($connect_id > 0 && isset($detail_rows[$connect_id])) ? $detail_rows[$connect_id] : null;
        $listing_data = rf_theme_get_product_listing_data($post->ID, $product_row, false);

        if (!rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters)) {
            continue;
        }

        $price_display = rf_theme_get_listing_price_display($post->ID, $listing_data['product_data'], $filters);

        if ($price_display === null) {
            continue;
        }

        $amount = (int) $price_display['amount'];
        if ($amount < (int) $price_range['selected_min'] || $amount > (int) $price_range['selected_max']) {
            continue;
        }

        $matched_posts[] = $post;
        $listing_data_map[$post->ID] = $listing_data;
        $price_display_map[$post->ID] = $price_display;
    }

    return array(
        'posts' => $matched_posts,
        'listing_data_map' => $listing_data_map,
        'price_display_map' => $price_display_map,
    );
}

function rf_theme_compare_listing_sort_values($left_value, $right_value, $direction = 'asc') {
    $left_is_null = $left_value === null;
    $right_is_null = $right_value === null;

    if ($left_is_null && $right_is_null) {
        return 0;
    }

    if ($left_is_null) {
        return 1;
    }

    if ($right_is_null) {
        return -1;
    }

    if ($left_value == $right_value) {
        return 0;
    }

    if ($direction === 'desc') {
        return ($left_value < $right_value) ? 1 : -1;
    }

    return ($left_value > $right_value) ? 1 : -1;
}

function rf_theme_compare_listing_posts_by_fallback($left_post, $right_post) {
    $left_timestamp = strtotime(!empty($left_post->post_date_gmt) ? $left_post->post_date_gmt : $left_post->post_date);
    $right_timestamp = strtotime(!empty($right_post->post_date_gmt) ? $right_post->post_date_gmt : $right_post->post_date);
    $left_timestamp = $left_timestamp ? (int) $left_timestamp : 0;
    $right_timestamp = $right_timestamp ? (int) $right_timestamp : 0;

    $date_compare = rf_theme_compare_listing_sort_values($left_timestamp, $right_timestamp, 'desc');
    if ($date_compare !== 0) {
        return $date_compare;
    }

    $title_compare = strnatcasecmp((string) $left_post->post_title, (string) $right_post->post_title);
    if ($title_compare !== 0) {
        return $title_compare;
    }

    return rf_theme_compare_listing_sort_values((int) $left_post->ID, (int) $right_post->ID, 'desc');
}

function rf_theme_sort_filtered_listing_posts($filtered_listing, $sort = 'date_desc') {
    if (empty($filtered_listing['posts']) || count($filtered_listing['posts']) < 2) {
        return $filtered_listing;
    }

    $posts = array_values($filtered_listing['posts']);
    $price_display_map = isset($filtered_listing['price_display_map']) && is_array($filtered_listing['price_display_map'])
        ? $filtered_listing['price_display_map']
        : array();
    $meta_value_maps = array(
        'ranking' => array(),
        'attention' => array(),
    );

    if (in_array($sort, array('ranking_asc', 'attention_asc'), true)) {
        $meta_key = $sort === 'ranking_asc' ? 'ranking' : 'attention';
        foreach ($posts as $post) {
            if (!isset($post->ID)) {
                continue;
            }

            $raw_value = get_post_meta((int) $post->ID, $meta_key, true);
            $meta_value_maps[$meta_key][$post->ID] = is_numeric($raw_value) ? (float) $raw_value : null;
        }
    }

    usort($posts, function ($left_post, $right_post) use ($sort, $price_display_map, $meta_value_maps) {
        $left_id = isset($left_post->ID) ? (int) $left_post->ID : 0;
        $right_id = isset($right_post->ID) ? (int) $right_post->ID : 0;
        $compare = 0;

        switch ($sort) {
            case 'ranking_asc':
                $compare = rf_theme_compare_listing_sort_values(
                    isset($meta_value_maps['ranking'][$left_id]) ? $meta_value_maps['ranking'][$left_id] : null,
                    isset($meta_value_maps['ranking'][$right_id]) ? $meta_value_maps['ranking'][$right_id] : null,
                    'asc'
                );
                break;
            case 'attention_asc':
                $compare = rf_theme_compare_listing_sort_values(
                    isset($meta_value_maps['attention'][$left_id]) ? $meta_value_maps['attention'][$left_id] : null,
                    isset($meta_value_maps['attention'][$right_id]) ? $meta_value_maps['attention'][$right_id] : null,
                    'asc'
                );
                break;
            case 'price_asc':
                $compare = rf_theme_compare_listing_sort_values(
                    isset($price_display_map[$left_id]['amount']) ? (int) $price_display_map[$left_id]['amount'] : null,
                    isset($price_display_map[$right_id]['amount']) ? (int) $price_display_map[$right_id]['amount'] : null,
                    'asc'
                );
                break;
            case 'price_desc':
                $compare = rf_theme_compare_listing_sort_values(
                    isset($price_display_map[$left_id]['amount']) ? (int) $price_display_map[$left_id]['amount'] : null,
                    isset($price_display_map[$right_id]['amount']) ? (int) $price_display_map[$right_id]['amount'] : null,
                    'desc'
                );
                break;
            case 'date_desc':
            default:
                $compare = 0;
                break;
        }

        if ($compare !== 0) {
            return $compare;
        }

        return rf_theme_compare_listing_posts_by_fallback($left_post, $right_post);
    });

    $filtered_listing['posts'] = $posts;

    return $filtered_listing;
}

function rf_theme_get_listing_collection($base_term_ids, $paged = 1, $search_query = '', $selected_node_ids = array(), $filters = array(), $sort = 'date_desc', $posts_per_page = 20) {
    $base_term_ids = array_values(array_filter(array_map('intval', (array) $base_term_ids)));
    $selected_node_ids = array_values(array_filter(array_map('intval', (array) $selected_node_ids)));
    $filters = is_array($filters) ? $filters : array();
    $paged = max(1, (int) $paged);
    $posts_per_page = max(1, (int) $posts_per_page);
    $price_min = isset($_GET['price_min']) ? sanitize_text_field(wp_unslash($_GET['price_min'])) : '';
    $price_max = isset($_GET['price_max']) ? sanitize_text_field(wp_unslash($_GET['price_max'])) : '';
    $cache_key = rf_theme_get_listing_cache_key('listing_collection', array(
        'base_term_ids' => $base_term_ids,
        'paged' => $paged,
        'search_query' => (string) $search_query,
        'selected_node_ids' => $selected_node_ids,
        'filters' => $filters,
        'sort' => (string) $sort,
        'posts_per_page' => $posts_per_page,
        'price_min' => $price_min,
        'price_max' => $price_max,
    ));
    $cached = get_transient($cache_key);
    if (is_array($cached)) {
        return $cached;
    }

    $query_args = rf_theme_build_listing_query_args(
        $base_term_ids,
        1,
        $search_query,
        $selected_node_ids,
        $filters,
        $sort,
        -1
    );
    $query_args['no_found_rows'] = true;

    $candidate_query = new WP_Query($query_args);
    $candidate_posts = $candidate_query->posts;
    if (!empty($candidate_posts)) {
        update_meta_cache('post', wp_list_pluck($candidate_posts, 'ID'));
        update_object_term_cache($candidate_posts, 'post');
    }
    $candidate_detail_rows = rf_theme_get_listing_preload_map($candidate_posts);
    $price_bounds = rf_theme_get_listing_price_bounds($candidate_posts, $filters, $candidate_detail_rows);
    $price_range = rf_theme_get_listing_price_range_from_request($price_bounds);
    $filtered_listing = rf_theme_get_filtered_listing_posts($candidate_posts, $filters, $price_range, $candidate_detail_rows);
    $filtered_listing = rf_theme_sort_filtered_listing_posts($filtered_listing, $sort);

    $total_posts = count($filtered_listing['posts']);
    $max_num_pages = max(1, (int) ceil($total_posts / $posts_per_page));
    $current_page = min(max(1, (int) $paged), $max_num_pages);
    $offset = ($current_page - 1) * $posts_per_page;
    $page_posts = array_slice($filtered_listing['posts'], $offset, $posts_per_page);

    $page_detail_rows = array();
    $page_listing_data_map = array();
    $page_price_display_map = array();
    foreach ($page_posts as $post) {
        $listing_data = isset($filtered_listing['listing_data_map'][$post->ID]) ? $filtered_listing['listing_data_map'][$post->ID] : null;
        $connect_id = !empty($listing_data['connect_id']) ? (int) $listing_data['connect_id'] : rf_theme_get_listing_connect_id($post->ID);
        $product_row = ($connect_id > 0 && isset($candidate_detail_rows[$connect_id])) ? $candidate_detail_rows[$connect_id] : null;
        $page_listing_data_map[$post->ID] = rf_theme_get_product_listing_data($post->ID, $product_row, true);
        if (isset($filtered_listing['price_display_map'][$post->ID])) {
            $page_price_display_map[$post->ID] = $filtered_listing['price_display_map'][$post->ID];
        }
        if ($connect_id > 0 && isset($candidate_detail_rows[$connect_id])) {
            $page_detail_rows[$connect_id] = $candidate_detail_rows[$connect_id];
        }
    }

    $collection = array(
        'posts' => $page_posts,
        'total_posts' => $total_posts,
        'max_num_pages' => $max_num_pages,
        'current_page' => $current_page,
        'detail_rows' => $page_detail_rows,
        'listing_data_map' => $page_listing_data_map,
        'price_display_map' => $page_price_display_map,
        'price_range' => $price_range,
    );

    set_transient($cache_key, $collection, rf_theme_get_listing_cache_ttl());

    return $collection;
}

function rf_theme_get_products_category_term() {
    static $term = null;

    if ($term === null) {
        $term = get_category_by_slug('products');
    }

    return $term instanceof WP_Term ? $term : null;
}

function rf_theme_get_products_category_terms() {
    $parent = rf_theme_get_products_category_term();
    if (!$parent) {
        return array();
    }

    return get_categories(array(
        'taxonomy' => 'category',
        'parent' => $parent->term_id,
        'hide_empty' => false,
        'orderby' => 'term_order',
        'order' => 'ASC',
    ));
}

function rf_theme_get_products_url() {
    return home_url('/seihin_index.html');
}

function rf_theme_map_products_index_request($query_vars) {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    $request_path = trim((string) parse_url($request_uri, PHP_URL_PATH), '/');

    if ($request_path !== 'seihin_index.html') {
        return $query_vars;
    }

    $products_category = rf_theme_get_products_category_term();
    if (!($products_category instanceof WP_Term)) {
        return $query_vars;
    }

    unset($query_vars['pagename'], $query_vars['name'], $query_vars['page']);
    $query_vars['category_name'] = $products_category->slug;

    return $query_vars;
}
add_filter('request', 'rf_theme_map_products_index_request');

function rf_theme_disable_products_index_canonical_redirect($redirect_url, $requested_url) {
    $request_path = trim((string) parse_url($requested_url, PHP_URL_PATH), '/');

    if ($request_path === 'seihin_index.html') {
        return false;
    }

    return $redirect_url;
}
add_filter('redirect_canonical', 'rf_theme_disable_products_index_canonical_redirect', 10, 2);

function rf_theme_redirect_products_archive_url() {
    $request_uri = isset($_SERVER['REQUEST_URI']) ? wp_unslash($_SERVER['REQUEST_URI']) : '';
    $request_path = trim((string) parse_url($request_uri, PHP_URL_PATH), '/');

    if ($request_path !== 'category/products') {
        return;
    }

    $target = rf_theme_get_products_url();
    $query = parse_url($request_uri, PHP_URL_QUERY);
    if ($query !== null && $query !== '') {
        $target .= '?' . $query;
    }

    wp_redirect($target, 301);
    exit;
}
add_action('template_redirect', 'rf_theme_redirect_products_archive_url', 0);

function rf_theme_get_template_page_url($template_file, $fallback_path = '/') {
    static $cache = array();

    $cache_key = $template_file . '|' . $fallback_path;
    if (isset($cache[$cache_key])) {
        return $cache[$cache_key];
    }

    $page_ids = get_posts(array(
        'post_type' => 'page',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'fields' => 'ids',
        'meta_key' => '_wp_page_template',
        'meta_value' => $template_file,
        'orderby' => 'menu_order title',
        'order' => 'ASC',
        'no_found_rows' => true,
    ));

    if (!empty($page_ids)) {
        $cache[$cache_key] = get_permalink((int) $page_ids[0]);
        return $cache[$cache_key];
    }

    $cache[$cache_key] = home_url($fallback_path);
    return $cache[$cache_key];
}

function rf_theme_get_named_page_urls() {
    static $urls = null;

    if ($urls !== null) {
        return $urls;
    }

    $urls = array(
        'news' => rf_theme_get_template_page_url('news_archive.php', '/news/'),
        'contact' => home_url('/contact.html'),
        'contact_request' => rf_theme_get_template_page_url('contact_resister.php', '/contact_request/'),
        'company' => rf_theme_get_template_page_url('company.php', '/company/'),
        'privacy' => rf_theme_get_template_page_url('privacy.php', '/privacy/'),
        'copyright_policy' => rf_theme_get_template_page_url('copyright_policy.php', '/copyright-policy/'),
        'tokushoho' => rf_theme_get_template_page_url('tokushoho.php', '/tokushoho/'),
        'disclaimer' => rf_theme_get_template_page_url('disclaimer.php', '/disclaimer/'),
        'kobutsu' => rf_theme_get_template_page_url('kobutsu.php', '/kobutsu/'),
        'terms' => rf_theme_get_template_page_url('terms.php', '/terms/'),
        'guide_rent' => rf_theme_get_template_page_url('guide.php', '/guide/'),
        'guide_buy' => rf_theme_get_template_page_url('guide_buy.php', '/guide-buy/'),
        'guide_lend' => rf_theme_get_template_page_url('guide_lend.php', '/guide-lend/'),
        'guide_sell' => rf_theme_get_template_page_url('guide_sell.php', '/guide-sell/'),
        'relabs' => home_url('/trouble.html'),
        'recredit' => rf_theme_get_template_page_url('recredit.php', '/recredit.html'),
        'remake' => rf_theme_get_template_page_url('remake.php', '/remake.html'),
        'restart' => rf_theme_get_template_page_url('restart.php', '/restart.html'),
        'ma' => rf_theme_get_template_page_url('ma.php', '/buying.html'),
    );

    return $urls;
}

function rf_theme_get_header_announce_post() {
    static $announce_post = false;

    if ($announce_post !== false) {
        return $announce_post;
    }

    $topics_category = get_category_by_slug('topics');
    if (!($topics_category instanceof WP_Term)) {
        $announce_post = null;
        return $announce_post;
    }

    $query = new WP_Query(array(
        'post_type' => 'post',
        'post_status' => 'publish',
        'posts_per_page' => 1,
        'ignore_sticky_posts' => true,
        'no_found_rows' => true,
        'orderby' => 'date',
        'order' => 'DESC',
        'tax_query' => array(
            array(
                'taxonomy' => 'category',
                'field' => 'term_id',
                'terms' => array((int) $topics_category->term_id),
                'include_children' => true,
            ),
        ),
        'meta_query' => array(
            array(
                'key' => 'headnews',
                'value' => '1',
                'compare' => '=',
            ),
        ),
    ));

    if (!$query->have_posts()) {
        wp_reset_postdata();
        $announce_post = null;
        return $announce_post;
    }

    $query->the_post();
    $announce_post = array(
        'url' => get_permalink(),
        'title' => get_the_title(),
    );
    wp_reset_postdata();

    return $announce_post;
}

function rf_theme_is_products_context() {
    if (is_front_page() || is_home()) {
        return true;
    }

    if (!is_category()) {
        return false;
    }

    $products_category = rf_theme_get_products_category_term();
    $queried_object = get_queried_object();

    if (!$products_category || !($queried_object instanceof WP_Term)) {
        return false;
    }

    return (int) $queried_object->term_id === (int) $products_category->term_id
        || cat_is_ancestor_of($products_category->term_id, $queried_object->term_id);
}

function rf_theme_get_top_main_nav() {
    $page_urls = rf_theme_get_named_page_urls();

    return array(
        array(
            'label' => '美容機器売買/レンタル',
            'url' => rf_theme_get_products_url(),
            'current' => rf_theme_is_products_context(),
            'children' => rf_theme_get_products_header_nav_items(),
        ),
        array('label' => '美容機器修理サービス', 'url' => $page_urls['relabs']),
        array('label' => 'サロン集金サポート', 'url' => $page_urls['recredit']),
        array('label' => '美容スペースシェア', 'url' => home_url('/share-salon.html')),
        array('label' => '予約管理システム', 'url' => 'https://restart-line.com/'),
        array('label' => '店舗売買マッチング', 'url' => $page_urls['ma']),
    );
}

function rf_theme_get_top_ranking_catalog() {
    $products_url = rf_theme_get_products_url();

    return array(
        'facial' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-1.png',
            'lines' => array('フェイシャル・', 'スキンケア機器'),
            'url' => add_query_arg('node_list', '2,3,4,6,7,10,11,8,12', $products_url),
        ),
        'body' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-2.png',
            'lines' => array('ボディ・痩身・', '引き締め機器'),
            'url' => add_query_arg('node_list', '13,14,17,18,19,15,16,20', $products_url),
        ),
        'wellness' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-3.png',
            'lines' => array('リラクゼーション・', 'ウェルネス機器'),
            'url' => add_query_arg('node_list', '25,26,27,28,29,38,9,39,40,41,42', $products_url),
        ),
        'tanning' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-2.png',
            'lines' => array('タンニング・', '日焼けマシン'),
            'url' => add_query_arg('node_list', '33', $products_url),
        ),
        'hair_removal' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-4.png',
            'lines' => array('脱毛・', '光美容機器'),
            'url' => add_query_arg('node_list', '22,23,24,60', $products_url),
        ),
        'measurement' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-5.png',
            'lines' => array('体組成・計測機器'),
            'url' => add_query_arg('node_list', '34,30,31', $products_url),
        ),
        'exercise' => array(
            'image_dir' => 'figma-ranking',
            'image' => 'card-1.png',
            'lines' => array('エクササイズ・', 'フィットネス機器'),
            'url' => add_query_arg('node_list', '35,36,37', $products_url),
        ),
    );
}

function rf_theme_get_top_attention_ranking_default_order() {
    return array_keys(rf_theme_get_top_ranking_catalog());
}

function rf_theme_normalize_top_attention_ranking_order($raw_order) {
    $catalog = rf_theme_get_top_ranking_catalog();
    $default_order = array_keys($catalog);
    $raw_order = is_array($raw_order) ? $raw_order : explode(',', (string) $raw_order);
    $normalized = array();

    foreach ($raw_order as $key) {
        $key = sanitize_key((string) $key);
        if ($key !== '' && isset($catalog[$key]) && !in_array($key, $normalized, true)) {
            $normalized[] = $key;
        }
    }

    foreach ($default_order as $key) {
        if (!in_array($key, $normalized, true)) {
            $normalized[] = $key;
        }
    }

    return $normalized;
}

function rf_theme_get_current_top_page_id() {
    $queried_id = get_queried_object_id();
    if ($queried_id > 0) {
        return (int) $queried_id;
    }

    $front_page_id = (int) get_option('page_on_front');
    return $front_page_id > 0 ? $front_page_id : 0;
}

function rf_theme_get_top_attention_ranking_order($page_id = 0) {
    $page_id = $page_id > 0 ? (int) $page_id : rf_theme_get_current_top_page_id();
    if ($page_id <= 0) {
        return rf_theme_get_top_attention_ranking_default_order();
    }

    $saved_order = get_post_meta($page_id, '_rf_theme_top_attention_ranking_order', true);
    if (empty($saved_order)) {
        return rf_theme_get_top_attention_ranking_default_order();
    }

    return rf_theme_normalize_top_attention_ranking_order($saved_order);
}

function rf_theme_get_top_ranking_items_by_order($order) {
    $catalog = rf_theme_get_top_ranking_catalog();
    $items = array();

    foreach (rf_theme_normalize_top_attention_ranking_order($order) as $key) {
        if (isset($catalog[$key])) {
            $items[] = $catalog[$key];
        }
    }

    return $items;
}

function rf_theme_get_top_popular_ranking_items() {
    return rf_theme_get_top_ranking_items_by_order(rf_theme_get_top_attention_ranking_default_order());
}

function rf_theme_get_top_attention_ranking_items($page_id = 0) {
    return rf_theme_get_top_ranking_items_by_order(rf_theme_get_top_attention_ranking_order($page_id));
}

function rf_theme_is_top_home_template_page($post) {
    $post = get_post($post);
    if (!($post instanceof WP_Post) || $post->post_type !== 'page') {
        return false;
    }

    $template_slug = get_page_template_slug($post->ID);
    if ($template_slug === 'page-top-home.php') {
        return true;
    }

    return (int) get_option('page_on_front') === (int) $post->ID;
}

function rf_theme_enqueue_top_attention_ranking_admin_assets($hook) {
    if ($hook !== 'post.php' && $hook !== 'post-new.php') {
        return;
    }

    $screen = get_current_screen();
    if (!$screen || $screen->post_type !== 'page') {
        return;
    }

    wp_enqueue_script('jquery-ui-sortable');
    wp_enqueue_script(
        'rf-theme-top-attention-ranking-admin',
        get_template_directory_uri() . '/js/top-attention-ranking-admin.js',
        array('jquery', 'jquery-ui-sortable'),
        filemtime(get_template_directory() . '/js/top-attention-ranking-admin.js'),
        true
    );

    $post_id = 0;
    if (isset($_GET['post'])) {
        $post_id = absint(wp_unslash($_GET['post']));
    } elseif (isset($_POST['post_ID'])) {
        $post_id = absint(wp_unslash($_POST['post_ID']));
    }

    wp_localize_script(
        'rf-theme-top-attention-ranking-admin',
        'rfThemeTopAttentionRankingAdmin',
        array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce' => wp_create_nonce('rf_theme_top_attention_ranking_ajax'),
            'postId' => $post_id,
        )
    );
}
add_action('admin_enqueue_scripts', 'rf_theme_enqueue_top_attention_ranking_admin_assets');

function rf_theme_add_top_attention_ranking_metabox() {
    add_meta_box(
        'rf-theme-top-attention-ranking-order',
        '注目機器ランキング 並び順',
        'rf_theme_render_top_attention_ranking_metabox',
        'page',
        'side',
        'default'
    );
}
add_action('add_meta_boxes_page', 'rf_theme_add_top_attention_ranking_metabox');

function rf_theme_render_top_attention_ranking_metabox($post) {
    if (!rf_theme_is_top_home_template_page($post)) {
        echo '<p>トップページテンプレートが設定された固定ページで使用します。</p>';
        return;
    }

    $catalog = rf_theme_get_top_ranking_catalog();
    $order = rf_theme_get_top_attention_ranking_order($post->ID);

    wp_nonce_field('rf_theme_save_top_attention_ranking_order', 'rf_theme_top_attention_ranking_nonce');
    ?>
    <p>ドラッグ&ドロップで「注目機器ランキング」の表示順を並び替えます。</p>
    <input
        type="hidden"
        id="rf-theme-top-attention-ranking-order"
        name="rf_theme_top_attention_ranking_order"
        value="<?php echo esc_attr(implode(',', $order)); ?>"
    >
    <ul id="rf-theme-top-attention-ranking-sortable" class="rf-theme-top-attention-ranking-sortable">
        <?php foreach ($order as $key) : ?>
            <?php if (!isset($catalog[$key])) { continue; } ?>
            <li id="rf-theme-top-attention-ranking-<?php echo esc_attr($key); ?>" data-ranking-key="<?php echo esc_attr($key); ?>">
                <span class="rf-theme-top-attention-ranking-sortable__handle" aria-hidden="true">≡</span>
                <span><?php echo esc_html(implode('', $catalog[$key]['lines'])); ?></span>
            </li>
        <?php endforeach; ?>
    </ul>
    <p id="rf-theme-top-attention-ranking-status" style="margin:8px 0 0;color:#646970;font-size:12px;"></p>
    <style>
        .rf-theme-top-attention-ranking-sortable {
            margin: 0;
            padding: 0;
            list-style: none;
        }
        .rf-theme-top-attention-ranking-sortable li {
            display: flex;
            align-items: center;
            gap: 8px;
            margin: 0 0 8px;
            padding: 10px 12px;
            border: 1px solid #d0d4d9;
            border-radius: 6px;
            background: #fff;
            cursor: move;
        }
        .rf-theme-top-attention-ranking-sortable__handle {
            color: #7a7a7a;
            font-size: 16px;
            line-height: 1;
        }
    </style>
    <?php
}

function rf_theme_persist_top_attention_ranking_order($post_id, $raw_order) {
    $post_id = (int) $post_id;
    if ($post_id <= 0) {
        return false;
    }

    $order = rf_theme_normalize_top_attention_ranking_order($raw_order);
    $default_order = rf_theme_get_top_attention_ranking_default_order();

    if ($order === $default_order) {
        delete_post_meta($post_id, '_rf_theme_top_attention_ranking_order');
        return true;
    }

    update_post_meta($post_id, '_rf_theme_top_attention_ranking_order', $order);
    return true;
}

function rf_theme_save_top_attention_ranking_order($post_id) {
    if (!isset($_POST['rf_theme_top_attention_ranking_order'])) {
        return;
    }

    if (!isset($_POST['rf_theme_top_attention_ranking_nonce']) || !wp_verify_nonce(sanitize_text_field(wp_unslash($_POST['rf_theme_top_attention_ranking_nonce'])), 'rf_theme_save_top_attention_ranking_order')) {
        return;
    }

    if (defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) {
        return;
    }

    if (!current_user_can('edit_page', $post_id)) {
        return;
    }

    $raw_order = isset($_POST['rf_theme_top_attention_ranking_order']) ? wp_unslash($_POST['rf_theme_top_attention_ranking_order']) : '';
    rf_theme_persist_top_attention_ranking_order($post_id, $raw_order);
}
add_action('save_post_page', 'rf_theme_save_top_attention_ranking_order');

function rf_theme_ajax_save_top_attention_ranking_order() {
    check_ajax_referer('rf_theme_top_attention_ranking_ajax', 'nonce');

    $post_id = isset($_POST['post_id']) ? absint(wp_unslash($_POST['post_id'])) : 0;
    if ($post_id <= 0 || !current_user_can('edit_page', $post_id)) {
        wp_send_json_error(array('message' => '権限がありません。'), 403);
    }

    $raw_order = isset($_POST['order']) ? wp_unslash($_POST['order']) : '';
    rf_theme_persist_top_attention_ranking_order($post_id, $raw_order);
    wp_send_json_success(array('message' => '並び順を保存しました。'));
}
add_action('wp_ajax_rf_theme_save_top_attention_ranking_order', 'rf_theme_ajax_save_top_attention_ranking_order');

function rf_theme_get_products_header_nav_items() {
    $products_url = rf_theme_get_products_url();

    return array(
        array(
            'label' => 'フェイシャル・スキンケア機器',
            'url' => add_query_arg('node_list', '2,3,4,6,7,10,11,8,12', $products_url),
        ),
        array(
            'label' => 'ボディ・痩身・引き締め機器',
            'url' => add_query_arg('node_list', '13,14,17,18,19,15,16,20', $products_url),
        ),
        array(
            'label' => 'リラクゼーション・ウェルネス機器',
            'url' => add_query_arg('node_list', '25,26,27,28,29,38,9,39,40,41,42', $products_url),
        ),
        array(
            'label' => 'タンニング・日焼けマシン',
            'url' => add_query_arg('node_list', '33', $products_url),
        ),
        array(
            'label' => '脱毛・光美容機器',
            'url' => add_query_arg('node_list', '22,23,24,60', $products_url),
        ),
        array(
            'label' => '体組成・計測機器',
            'url' => add_query_arg('node_list', '34,30,31', $products_url),
        ),
        array(
            'label' => 'エクササイズ・フィットネス機器',
            'url' => add_query_arg('node_list', '35,36,37', $products_url),
        ),
    );
}

function rf_theme_get_top_shortcut_cards() {
    $page_urls = rf_theme_get_named_page_urls();

    return array(
        array(
            'icon' => 'icon-rent-want.png',
            'title' => '美容機器を借りたい',
            'url' => $page_urls['guide_rent'],
        ),
        array(
            'icon' => 'icon-lend-want.png',
            'title' => '美容機器を貸したい',
            'url' => $page_urls['guide_lend'],
        ),
        array(
            'icon' => 'icon-buy-want.png',
            'title' => '美容機器を買いたい',
            'url' => $page_urls['guide_buy'],
        ),
        array(
            'icon' => 'icon-sell-want.png',
            'title' => '美容機器を売りたい',
            'url' => $page_urls['guide_sell'],
        ),
    );
}

function rf_theme_get_top_footer_related_services() {
    return array_map(
        function ($item) {
            return array(
                'label' => $item['label'],
                'url' => $item['url'],
            );
        },
        rf_theme_get_top_main_nav()
    );
}

function rf_theme_get_top_footer_product_info() {
    return rf_theme_get_products_header_nav_items();
}

function rf_theme_get_top_footer_policy_links() {
    $page_urls = rf_theme_get_named_page_urls();
    $contact_url = !empty($page_urls['contact']) ? $page_urls['contact'] : home_url('/contact.html');

    return array(
        array('label' => 'ニュース', 'url' => $page_urls['news']),
        array('label' => 'メール問合せ', 'url' => $contact_url),
        array('label' => '会社概要', 'url' => $page_urls['company']),
        array('label' => 'プライバシーポリシー', 'url' => $page_urls['privacy']),
        array('label' => '著作権リンクポリシー', 'url' => $page_urls['copyright_policy']),
        array('label' => '特定商取引法に基づく表記', 'url' => $page_urls['tokushoho']),
        array('label' => '免責事項', 'url' => $page_urls['disclaimer']),
        array('label' => '古物営業法に基づく表記', 'url' => $page_urls['kobutsu']),
        array('label' => '利用規約', 'url' => $page_urls['terms']),
    );
}

function rf_theme_get_top_footer_social_links() {
    return array(
        array('icon' => 'icon-x.svg', 'label' => 'X', 'url' => '#'),
        array('icon' => 'icon-instagram.svg', 'label' => 'Instagram', 'url' => '#'),
        array('icon' => 'icon-youtube.svg', 'label' => 'YouTube', 'url' => '#'),
        array('icon' => 'icon-facebook.svg', 'label' => 'Facebook', 'url' => '#'),
        array('icon' => 'icon-tiktok.png', 'label' => 'TikTok', 'url' => '#'),
        array('icon' => 'icon-threads.png', 'label' => 'Threads', 'url' => '#'),
    );
}

function rf_theme_get_top_service_banners() {
    $page_urls = rf_theme_get_named_page_urls();

    return array(
        array('image_dir' => 'figma-service', 'image' => 'banner-1.png', 'title' => '美容機器売買サービス', 'url' => rf_theme_get_products_url()),
        array('image_dir' => 'figma-service', 'image' => 'banner-2.png', 'title' => '修理・メンテナンス', 'url' => $page_urls['relabs']),
        array('image_dir' => 'figma-service', 'image' => 'banner-3.png', 'title' => '集金業務サポート', 'url' => $page_urls['recredit']),
        array('image_dir' => 'figma-service', 'image' => 'banner-4.png', 'title' => 'シェアサロン・スペース', 'url' => $page_urls['remake']),
        array('image_dir' => 'figma-service', 'image' => 'banner-5.png', 'title' => 'LINE予約', 'url' => $page_urls['restart']),
        array('image_dir' => 'figma-service', 'image' => 'banner-6.png', 'title' => '店舗マッチング', 'url' => $page_urls['ma']),
    );
}

function rf_theme_get_listing_filters_from_request() {
    $outlet = isset($_GET['outlet_equipment'])
        ? filter_var($_GET['outlet_equipment'], FILTER_VALIDATE_BOOLEAN)
        : (isset($_GET['used_equipment']) ? filter_var($_GET['used_equipment'], FILTER_VALIDATE_BOOLEAN) : false);

    return array(
        'new' => isset($_GET['new_equipment']) ? filter_var($_GET['new_equipment'], FILTER_VALIDATE_BOOLEAN) : false,
        'used' => $outlet,
        'outlet' => $outlet,
        'rental' => isset($_GET['rental_equipment']) ? filter_var($_GET['rental_equipment'], FILTER_VALIDATE_BOOLEAN) : false,
        'lease' => isset($_GET['lease_equipment']) ? filter_var($_GET['lease_equipment'], FILTER_VALIDATE_BOOLEAN) : false,
        'condition_new' => isset($_GET['condition_new']) ? filter_var($_GET['condition_new'], FILTER_VALIDATE_BOOLEAN) : false,
        'condition_like_new' => isset($_GET['condition_like_new']) ? filter_var($_GET['condition_like_new'], FILTER_VALIDATE_BOOLEAN) : false,
        'condition_demo' => isset($_GET['condition_demo']) ? filter_var($_GET['condition_demo'], FILTER_VALIDATE_BOOLEAN) : false,
        'condition_used' => isset($_GET['condition_used']) ? filter_var($_GET['condition_used'], FILTER_VALIDATE_BOOLEAN) : false,
        'scene_salon' => isset($_GET['scene_salon']) ? filter_var($_GET['scene_salon'], FILTER_VALIDATE_BOOLEAN) : false,
        'scene_home' => isset($_GET['scene_home']) ? filter_var($_GET['scene_home'], FILTER_VALIDATE_BOOLEAN) : false,
    );
}

function rf_theme_get_listing_selected_sales_keys($filters = array()) {
    $selected = array();
    if (!empty($filters['lease'])) {
        $selected[] = 'lease';
    }
    if (!empty($filters['rental'])) {
        $selected[] = 'rental';
    }
    if (!empty($filters['outlet']) || !empty($filters['used'])) {
        $selected[] = 'used';
    }
    return array_values(array_unique($selected));
}

function rf_theme_get_listing_selected_condition_keys($filters = array()) {
    $map = array(
        'condition_new' => 'new',
        'condition_like_new' => 'like_new',
        'condition_demo' => 'demo',
        'condition_used' => 'used',
    );
    $selected = array();
    foreach ($map as $filter_key => $condition_key) {
        if (!empty($filters[$filter_key])) {
            $selected[] = $condition_key;
        }
    }
    return $selected;
}

function rf_theme_get_listing_selected_scene_keys($filters = array()) {
    $map = array(
        'scene_salon' => 'salon',
        'scene_home' => 'home',
    );
    $selected = array();
    foreach ($map as $filter_key => $scene_key) {
        if (!empty($filters[$filter_key])) {
            $selected[] = $scene_key;
        }
    }
    return $selected;
}

function rf_theme_get_listing_post_term_ids($post_id) {
    static $cache = array();

    $post_id = (int) $post_id;
    if ($post_id <= 0) {
        return array();
    }

    if (isset($cache[$post_id])) {
        return $cache[$post_id];
    }

    $terms = get_the_terms($post_id, 'category');
    $cache[$post_id] = is_array($terms) ? array_map('intval', wp_list_pluck($terms, 'term_id')) : array();
    return $cache[$post_id];
}

function rf_theme_get_listing_post_condition($post_id, $product_data = array()) {
    $condition = sanitize_key((string) rf_theme_get_listing_meta($post_id, 'product_condition'));
    $manufacturer_status = sanitize_text_field((string) rf_theme_get_listing_meta($post_id, 'manufacturers_status'));
    $manufacturer_status_normalized = function_exists('mb_strtolower')
        ? mb_strtolower($manufacturer_status, 'UTF-8')
        : strtolower($manufacturer_status);
    $legacy_price_type = isset($product_data['detail_prise_type']) ? (string) $product_data['detail_prise_type'] : '';
    $has_used_price = rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'used_price')) !== null;
    $has_newish_price = rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'new_price')) !== null
        || rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'rental_price')) !== null
        || rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'lease_price')) !== null;

    if ($condition === 'demo' || strpos($legacy_price_type, 'デモ') !== false) {
        return 'demo';
    }

    if ($manufacturer_status_normalized !== '' && (strpos($manufacturer_status_normalized, '新古') !== false || strpos($manufacturer_status_normalized, 'demo') !== false)) {
        return 'like_new';
    }

    if ($condition === 'new' || $has_newish_price) {
        return 'new';
    }

    if ($condition === 'used' || $has_used_price || strpos($legacy_price_type, 'アウトレット') !== false) {
        return 'used';
    }

    return '';
}

function rf_theme_get_listing_post_scenes($post_id) {
    $term_ids = rf_theme_get_listing_post_term_ids($post_id);
    $scene_keys = array();

    foreach ($term_ids as $term_id) {
        $term_id = (int) $term_id;
        if ($term_id <= 0) {
            continue;
        }

        $ancestors = get_ancestors($term_id, 'category');
        $top_level_term_id = !empty($ancestors) ? (int) end($ancestors) : $term_id;

        if (in_array($top_level_term_id, array(57, 58, 59), true)) {
            $scene_keys['salon'] = 'salon';
        }

        if (in_array($top_level_term_id, array(61, 62, 63, 64), true)) {
            $scene_keys['home'] = 'home';
        }
    }

    return array_values($scene_keys);
}

function rf_theme_get_listing_post_facets($post_id, $product_data = array()) {
    static $cache = array();

    $post_id = (int) $post_id;
    if ($post_id <= 0) {
        return array();
    }

    if (isset($cache[$post_id])) {
        return $cache[$post_id];
    }

    $price_map = array(
        'new' => rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'new_price')),
        'used' => rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'used_price')),
        'rental' => rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'rental_price')),
        'lease' => rf_theme_normalize_price_value(rf_theme_get_listing_meta($post_id, 'lease_price')),
    );

    $sales_methods = array();
    foreach (array('used', 'rental', 'lease') as $sales_key) {
        if ($price_map[$sales_key] !== null) {
            $sales_methods[] = $sales_key;
        }
    }

    $cache[$post_id] = array(
        'term_ids' => rf_theme_get_listing_post_term_ids($post_id),
        'sales_methods' => $sales_methods,
        'condition' => rf_theme_get_listing_post_condition($post_id, $product_data),
        'scenes' => rf_theme_get_listing_post_scenes($post_id),
        'prices' => $price_map,
    );

    return $cache[$post_id];
}

function rf_theme_post_matches_listing_filters($post_id, $product_data = array(), $filters = array(), $selected_term_ids = array(), $ignore_facets = array()) {
    $facets = rf_theme_get_listing_post_facets($post_id, $product_data);
    $ignore_facets = array_fill_keys((array) $ignore_facets, true);
    $selected_term_ids = array_values(array_filter(array_map('intval', (array) $selected_term_ids)));

    if (empty($ignore_facets['category']) && !empty($selected_term_ids)) {
        if (!array_intersect($selected_term_ids, $facets['term_ids'])) {
            return false;
        }
    }

    $selected_sales_keys = rf_theme_get_listing_selected_sales_keys($filters);
    if (empty($ignore_facets['sales']) && !empty($selected_sales_keys)) {
        if (!array_intersect($selected_sales_keys, $facets['sales_methods'])) {
            return false;
        }
    }

    $selected_condition_keys = rf_theme_get_listing_selected_condition_keys($filters);
    if (empty($ignore_facets['condition']) && !empty($selected_condition_keys)) {
        if (!in_array($facets['condition'], $selected_condition_keys, true)) {
            return false;
        }
    }

    $selected_scene_keys = rf_theme_get_listing_selected_scene_keys($filters);
    if (empty($ignore_facets['scene']) && !empty($selected_scene_keys)) {
        if (!array_intersect($selected_scene_keys, $facets['scenes'])) {
            return false;
        }
    }

    return true;
}

function rf_theme_get_selected_node_ids_from_request() {
    $raw = isset($_GET['node_list']) ? $_GET['node_list'] : '';
    if (is_array($raw)) {
        $values = $raw;
    } else {
        $values = $raw !== '' ? explode(',', (string) $raw) : array();
    }

    $ids = array();
    foreach ($values as $value) {
        $term_id = (int) $value;
        if ($term_id > 0) {
            $ids[$term_id] = $term_id;
        }
    }

    return array_values($ids);
}

function rf_theme_get_listing_sort_options() {
    return array(
        'ranking_asc' => '人気順',
        'attention_asc' => '注目順',
        'date_desc' => '新着順',
        'price_asc' => '価格が安い順',
        'price_desc' => '価格が高い順',
    );
}

function rf_theme_get_listing_sort_from_request() {
    $sort = isset($_GET['sort']) ? sanitize_key($_GET['sort']) : 'date_desc';
    $options = rf_theme_get_listing_sort_options();
    return isset($options[$sort]) ? $sort : 'date_desc';
}

function rf_theme_build_listing_query_args($base_term_ids, $paged = 1, $search_query = '', $selected_node_ids = array(), $filters = array(), $sort = 'date_desc', $posts_per_page = 20) {
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'paged' => max(1, (int) $paged),
        'ignore_sticky_posts' => true,
    );

    $tax_query = array();
    $base_term_ids = array_values(array_filter(array_map('intval', (array) $base_term_ids)));
    if (!empty($base_term_ids)) {
        $tax_query[] = array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => $base_term_ids,
            'include_children' => true,
            'operator' => 'IN',
        );
    }

    if (!empty($selected_node_ids)) {
        $tax_query[] = array(
            'taxonomy' => 'category',
            'field' => 'term_id',
            'terms' => array_values(array_filter(array_map('intval', (array) $selected_node_ids))),
            'include_children' => false,
            'operator' => 'IN',
        );
    }

    if (!empty($tax_query)) {
        if (count($tax_query) > 1) {
            $tax_query['relation'] = 'AND';
        }
        $args['tax_query'] = $tax_query;
    }

    if ($search_query !== '') {
        $args['s'] = $search_query;
    }

    $meta_query = array('relation' => 'OR');
    if (!empty($filters['new'])) {
        $meta_query[] = array(
            'key' => 'new_price',
            'value' => '',
            'compare' => '!=',
        );
    }
    if (!empty($filters['used'])) {
        $meta_query[] = array(
            'key' => 'used_price',
            'value' => '',
            'compare' => '!=',
        );
    }
    if (!empty($filters['rental'])) {
        $meta_query[] = array(
            'key' => 'rental_price',
            'value' => '',
            'compare' => '!=',
        );
    }
    if (!empty($filters['lease'])) {
        $meta_query[] = array(
            'key' => 'lease_price',
            'value' => '',
            'compare' => '!=',
        );
    }
    if (count($meta_query) > 1) {
        $args['meta_query'] = $meta_query;
    }

    switch ($sort) {
        case 'ranking_asc':
            $args['meta_key'] = 'ranking';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'ASC';
            break;
        case 'attention_asc':
            $args['meta_key'] = 'attention';
            $args['orderby'] = 'meta_value_num';
            $args['order'] = 'ASC';
            break;
        case 'date_asc':
            $args['orderby'] = 'date';
            $args['order'] = 'ASC';
            break;
        case 'price_asc':
        case 'price_desc':
        case 'date_desc':
        default:
            $args['orderby'] = 'date';
            $args['order'] = 'DESC';
            break;
    }

    return $args;
}

function rf_theme_get_listing_sidebar_groups($focus_term_id = 0) {
    $groups = array();
    $top_terms = rf_theme_get_products_category_terms();
    $focus_term_id = (int) $focus_term_id;

    foreach ($top_terms as $term) {
        $children = get_categories(array(
            'taxonomy' => 'category',
            'parent' => $term->term_id,
            'hide_empty' => false,
            'orderby' => 'term_order',
            'order' => 'ASC',
        ));

        $is_expanded = false;
        if ($focus_term_id > 0) {
            $is_expanded = ((int) $term->term_id === $focus_term_id) || cat_is_ancestor_of($term->term_id, $focus_term_id);
        }

        $groups[] = array(
            'term' => $term,
            'children' => $children,
            'expanded' => $is_expanded,
        );
    }

    if (!empty($groups) && !array_filter(wp_list_pluck($groups, 'expanded'))) {
        $groups[0]['expanded'] = true;
    }

    return $groups;
}

function rf_theme_get_listing_sidebar_category_spec() {
    return array(
        array(
            'key' => 'facial',
            'label' => 'フェイシャル・スキンケア機器',
            'term_id' => 57,
            'children' => array(
                array('key' => 'steamer', 'label' => 'スチーマー', 'term_ids' => array(2)),
                array('key' => 'electroporation', 'label' => 'エレクトロポレーション', 'term_ids' => array(3)),
                array('key' => 'light_therapy', 'label' => 'ライトセラピー', 'term_ids' => array(4)),
                array('key' => 'peeling', 'label' => 'ピーリング/フェイシャル機', 'term_ids' => array(6)),
                array('key' => 'skin_analyzer', 'label' => '肌分析器', 'term_ids' => array(7)),
                array('key' => 'whitening', 'label' => 'ホワイトニングケアマシン', 'term_ids' => array(10)),
                array('key' => 'cryo', 'label' => 'クライオマシン', 'term_ids' => array(11)),
                array('key' => 'hifu', 'label' => 'HIFU', 'term_ids' => array(8)),
                array('key' => 'collagen', 'label' => 'コラーゲンマシン', 'term_ids' => array(12)),
            ),
        ),
        array(
            'key' => 'body',
            'label' => 'ボディ・痩身・引き締め機器',
            'term_id' => 58,
            'children' => array(
                array('key' => 'cavitation', 'label' => 'キャビテーションマシン', 'term_ids' => array(13)),
                array('key' => 'radio_frequency', 'label' => 'ラジオ波マシン', 'term_ids' => array(14)),
                array('key' => 'endamology', 'label' => 'エンダモ/吸引マシン', 'term_ids' => array(17)),
                array('key' => 'ems', 'label' => '低周波/EMS', 'term_ids' => array(18)),
                array('key' => 'multi_slimming', 'label' => '多機能スリミングマシン', 'term_ids' => array(19, 15, 16, 20)),
            ),
        ),
        array(
            'key' => 'hair_removal',
            'label' => '脱毛・光美容機器',
            'term_id' => 59,
            'children' => array(
                array('key' => 'hair_removal_all', 'label' => '脱毛/フォト/バストUPマシン', 'term_ids' => array(22, 23, 24, 60)),
            ),
        ),
        array(
            'key' => 'wellness',
            'label' => 'リラクゼーション・ウェルネス機器',
            'term_id' => 61,
            'children' => array(
                array('key' => 'oxygen', 'label' => '高気圧酸素カプセル/酸素バー', 'term_ids' => array(25)),
                array('key' => 'germanium', 'label' => 'ゲルマニウム温浴器/炭酸泉温浴器', 'term_ids' => array(26)),
                array('key' => 'bedrock', 'label' => '岩盤カプセル/ベッド/マット', 'term_ids' => array(27)),
                array('key' => 'far_infrared', 'label' => '遠赤カプセル/ドーム/サウナ', 'term_ids' => array(28)),
                array('key' => 'waterbed', 'label' => 'ウォーターベッド/ヴィシーシャワー', 'term_ids' => array(29)),
                array('key' => 'aroma', 'label' => 'アロマディフューザー/マイナスイオン発生器', 'term_ids' => array(38)),
                array('key' => 'head_spa', 'label' => 'ヘッドスパマシン', 'term_ids' => array(9)),
                array('key' => 'steam_mist', 'label' => 'スチームミストサウナ', 'term_ids' => array(39)),
                array('key' => 'relaxation_capsule', 'label' => 'リラクゼーションカプセル/ベッド', 'term_ids' => array(40)),
                array('key' => 'capsule_spa', 'label' => 'カプセル型チェア型スパマシン', 'term_ids' => array(41)),
                array('key' => 'healing_bed', 'label' => 'ヒーリングベッド', 'term_ids' => array(42)),
            ),
        ),
        array(
            'key' => 'measurement',
            'label' => '体組成・計測機器',
            'term_id' => 61,
            'children' => array(
                array('key' => 'body_composition', 'label' => '体組成計マシン', 'term_ids' => array(34)),
                array('key' => 'blood_flow', 'label' => '血液血流測定マシン', 'term_ids' => array(30, 31)),
            ),
        ),
        array(
            'key' => 'exercise',
            'label' => 'エクササイズ・フィットネス機器',
            'term_id' => 62,
            'children' => array(
                array('key' => 'pelvic_exercise', 'label' => '骨盤エクササイズチェアマシン', 'term_ids' => array(35)),
                array('key' => 'massage_exercise', 'label' => 'マッサージエクササイズマシン', 'term_ids' => array(36)),
                array('key' => 'vibration', 'label' => '振動マシン', 'term_ids' => array(37)),
            ),
        ),
        array(
            'key' => 'tanning',
            'label' => 'タンニング・日焼けマシン',
            'term_id' => 61,
            'children' => array(
                array('key' => 'tanning_machine', 'label' => 'タンニングマシン', 'term_ids' => array(33)),
            ),
        ),
        array(
            'key' => 'other_support',
            'label' => 'その他美容機器（アクセサリ・サロン補助）',
            'term_id' => 64,
            'children' => array(
                array('key' => 'nail_machine', 'label' => 'ネイルアートマシン', 'term_ids' => array(65)),
                array('key' => 'water_server', 'label' => '機能性浄水器/酸素水サーバー', 'term_ids' => array(44, 45)),
            ),
        ),
    );
}

function rf_theme_get_listing_default_selected_node_ids($focus_term_id = 0) {
    $focus_term_id = (int) $focus_term_id;
    if ($focus_term_id <= 0) {
        return array();
    }

    foreach (rf_theme_get_listing_sidebar_category_spec() as $group) {
        $group_term_ids = array();
        foreach ($group['children'] as $child) {
            $group_term_ids = array_merge($group_term_ids, $child['term_ids']);
            if (in_array($focus_term_id, $child['term_ids'], true)) {
                return array_values(array_unique(array_map('intval', $child['term_ids'])));
            }
        }

        if ((int) $group['term_id'] === $focus_term_id || in_array($focus_term_id, $group_term_ids, true)) {
            return array_values(array_unique(array_map('intval', $group_term_ids)));
        }
    }

    $children = get_categories(array(
        'taxonomy' => 'category',
        'parent' => $focus_term_id,
        'hide_empty' => false,
        'orderby' => 'term_order',
        'order' => 'ASC',
    ));

    if (!empty($children)) {
        return array_values(array_unique(array_map('intval', wp_list_pluck($children, 'term_id'))));
    }

    return array($focus_term_id);
}

function rf_theme_get_listing_sidebar_category_groups_with_counts($posts, $detail_rows = array(), $filters = array(), $focus_term_id = 0, $selected_node_ids = array()) {
    $groups = rf_theme_get_listing_sidebar_category_spec();
    $focus_term_id = (int) $focus_term_id;
    $selected_node_ids = array_values(array_filter(array_map('intval', (array) $selected_node_ids)));

    foreach ($groups as &$group) {
        $group_term_ids = array();
        $group['count'] = 0;
        $group['checked'] = false;
        $group['indeterminate'] = false;
        $group['expanded'] = ((int) $group['term_id'] === $focus_term_id);

        foreach ($group['children'] as &$child) {
            $child['count'] = 0;
            $child['checked'] = false;
            $group_term_ids = array_merge($group_term_ids, $child['term_ids']);
        }
        unset($child);

        $group['_term_ids'] = array_values(array_unique(array_map('intval', $group_term_ids)));
    }
    unset($group);

    foreach ((array) $posts as $post) {
        if (!isset($post->ID)) {
            continue;
        }

        $connect_id = rf_theme_get_listing_connect_id($post->ID);
        $product_row = ($connect_id > 0 && isset($detail_rows[$connect_id])) ? $detail_rows[$connect_id] : null;
        $listing_data = rf_theme_get_product_listing_data($post->ID, $product_row, false);

        if (!rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters, array(), array('category'))) {
            continue;
        }

        $post_term_ids = rf_theme_get_listing_post_term_ids($post->ID);
        foreach ($groups as &$group) {
            foreach ($group['children'] as &$child) {
                if (array_intersect($child['term_ids'], $post_term_ids)) {
                    $child['count']++;
                }
            }
            unset($child);
        }
        unset($group);
    }

    foreach ($groups as &$group) {
        foreach ($group['children'] as $child) {
            $group['count'] += (int) $child['count'];
        }

        $selected_count = 0;
        foreach ($group['children'] as &$child) {
            $child['checked'] = count(array_diff($child['term_ids'], $selected_node_ids)) === 0;
            if ($child['checked']) {
                $selected_count++;
                $group['expanded'] = true;
            }
        }
        unset($child);

        $group['checked'] = ($selected_count > 0 && $selected_count === count($group['children']));
        $group['indeterminate'] = ($selected_count > 0 && $selected_count < count($group['children']));

        if (!$group['expanded'] && $focus_term_id > 0 && in_array($focus_term_id, $group['_term_ids'], true)) {
            $group['expanded'] = true;
        }
        unset($group['_term_ids']);
    }
    unset($group);

    return $groups;
}

function rf_theme_get_listing_sidebar_filter_counts($posts, $detail_rows = array(), $selected_node_ids = array(), $filters = array()) {
    $counts = array(
        'sales' => array(
            'lease' => 0,
            'rental' => 0,
            'outlet' => 0,
        ),
        'conditions' => array(
            'new' => 0,
            'like_new' => 0,
            'demo' => 0,
            'used' => 0,
        ),
        'scenes' => array(
            'salon' => 0,
            'home' => 0,
        ),
    );

    foreach ((array) $posts as $post) {
        if (!isset($post->ID)) {
            continue;
        }

        $connect_id = rf_theme_get_listing_connect_id($post->ID);
        $product_row = ($connect_id > 0 && isset($detail_rows[$connect_id])) ? $detail_rows[$connect_id] : null;
        $listing_data = rf_theme_get_product_listing_data($post->ID, $product_row, false);

        if (rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters, $selected_node_ids, array('sales'))) {
            $facets = rf_theme_get_listing_post_facets($post->ID, $listing_data['product_data']);
            foreach ($facets['sales_methods'] as $sales_key) {
                if ($sales_key === 'used') {
                    $counts['sales']['outlet']++;
                    continue;
                }
                if (isset($counts['sales'][$sales_key])) {
                    $counts['sales'][$sales_key]++;
                }
            }
        }

        if (rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters, $selected_node_ids, array('condition'))) {
            $post_facets = rf_theme_get_listing_post_facets($post->ID, $listing_data['product_data']);
            $condition = isset($post_facets['condition']) ? $post_facets['condition'] : '';
            if ($condition && isset($counts['conditions'][$condition])) {
                $counts['conditions'][$condition]++;
            }
        }

        if (rf_theme_post_matches_listing_filters($post->ID, $listing_data['product_data'], $filters, $selected_node_ids, array('scene'))) {
            $post_facets = rf_theme_get_listing_post_facets($post->ID, $listing_data['product_data']);
            $scenes = isset($post_facets['scenes']) ? (array) $post_facets['scenes'] : array();
            foreach ($scenes as $scene_key) {
                if (isset($counts['scenes'][$scene_key])) {
                    $counts['scenes'][$scene_key]++;
                }
            }
        }
    }

    return $counts;
}

function rf_theme_get_listing_sidebar_data($base_term_ids, $search_query = '', $filters = array(), $focus_term_id = 0, $selected_node_ids = array()) {
    $base_term_ids = array_values(array_filter(array_map('intval', (array) $base_term_ids)));
    $selected_node_ids = array_values(array_filter(array_map('intval', (array) $selected_node_ids)));
    $filters = is_array($filters) ? $filters : array();
    $cache_key = rf_theme_get_listing_cache_key('listing_sidebar', array(
        'base_term_ids' => $base_term_ids,
        'search_query' => (string) $search_query,
        'filters' => $filters,
        'focus_term_id' => (int) $focus_term_id,
        'selected_node_ids' => $selected_node_ids,
    ));
    $cached = get_transient($cache_key);
    if (is_array($cached)) {
        return $cached;
    }

    $sidebar_query_args = rf_theme_build_listing_query_args(
        $base_term_ids,
        1,
        $search_query,
        array(),
        array(),
        'date_desc',
        -1
    );
    $sidebar_query_args['no_found_rows'] = true;
    $sidebar_query = new WP_Query($sidebar_query_args);
    $sidebar_posts = $sidebar_query->posts;
    if (!empty($sidebar_posts)) {
        update_meta_cache('post', wp_list_pluck($sidebar_posts, 'ID'));
        update_object_term_cache($sidebar_posts, 'post');
    }
    $sidebar_detail_rows = rf_theme_get_listing_preload_map($sidebar_posts);

    $sidebar_data = array(
        'groups' => rf_theme_get_listing_sidebar_category_groups_with_counts($sidebar_posts, $sidebar_detail_rows, $filters, $focus_term_id, $selected_node_ids),
        'filter_counts' => rf_theme_get_listing_sidebar_filter_counts($sidebar_posts, $sidebar_detail_rows, $selected_node_ids, $filters),
    );

    set_transient($cache_key, $sidebar_data, rf_theme_get_listing_cache_ttl());

    return $sidebar_data;
}

function rf_theme_get_listing_active_chips($selected_node_ids = array(), $filters = array()) {
    $chips = array();

    foreach ((array) $selected_node_ids as $term_id) {
        $term = get_term((int) $term_id, 'category');
        if ($term instanceof WP_Term && !is_wp_error($term)) {
            $chips[] = $term->name;
        }
    }

    $filter_labels = array(
        'lease' => 'リース',
        'rental' => 'レンタル',
        'outlet' => 'アウトレット',
        'condition_new' => '新品',
        'condition_like_new' => '新古品',
        'condition_demo' => 'デモ機',
        'condition_used' => '中古',
        'scene_salon' => 'サロン向け',
        'scene_home' => '個人宅向け',
    );

    foreach ($filter_labels as $key => $label) {
        if (!empty($filters[$key])) {
            $chips[] = $label;
        }
    }

    if (!empty($filters['price_range']['is_active'])) {
        $chips[] = sprintf(
            '価格: ¥%s〜¥%s',
            number_format((int) $filters['price_range']['selected_min']),
            number_format((int) $filters['price_range']['selected_max'])
        );
    }

    return $chips;
}

function rf_theme_get_product_inquiry_type_labels() {
    return array(
        'borrow' => '借りたい',
        'buy' => '買いたい',
        'lend' => '貸したい',
        'sell' => '売りたい',
    );
}

function rf_theme_sanitize_product_inquiry_form_data($source = array(), $overrides = array()) {
    $source = is_array($source) ? $source : array();
    $labels = rf_theme_get_product_inquiry_type_labels();
    $inquiry_type = array();

    if (isset($source['inquiry_type'])) {
        $raw_types = is_array($source['inquiry_type']) ? $source['inquiry_type'] : array($source['inquiry_type']);
        foreach ($raw_types as $type) {
            $type = sanitize_key($type);
            if (isset($labels[$type])) {
                $inquiry_type[$type] = $type;
            }
        }
    }

    $data = array(
        'inquiry_type' => array_values($inquiry_type),
        'your_name' => isset($source['your_name']) ? sanitize_text_field($source['your_name']) : '',
        'your_company' => isset($source['your_company']) ? sanitize_text_field($source['your_company']) : '',
        'your_phone' => isset($source['your_phone']) ? preg_replace('/\D+/', '', (string) $source['your_phone']) : '',
        'your_zip' => isset($source['your_zip']) ? preg_replace('/\D+/', '', (string) $source['your_zip']) : '',
        'your_address' => isset($source['your_address']) ? sanitize_text_field($source['your_address']) : '',
        'your_email' => isset($source['your_email']) ? sanitize_email($source['your_email']) : '',
        'your_message' => isset($source['your_message']) ? sanitize_textarea_field($source['your_message']) : '',
        'product_title' => isset($source['product_title']) ? sanitize_text_field($source['product_title']) : '',
        'detail_id' => isset($source['detail_id']) ? sanitize_text_field($source['detail_id']) : '',
        'detail_url' => isset($source['detail_url']) ? esc_url_raw($source['detail_url']) : '',
    );

    foreach ((array) $overrides as $key => $value) {
        if (!array_key_exists($key, $data)) {
            continue;
        }
        if ($key === 'inquiry_type') {
            $data[$key] = array_values(array_filter((array) $value));
            continue;
        }
        $data[$key] = is_string($value) ? trim($value) : $value;
    }

    return $data;
}

function rf_theme_validate_product_inquiry_form_data($data) {
    $errors = array();

    if (empty($data['inquiry_type'])) {
        $errors[] = 'お問い合わせ内容を1つ以上選択してください。';
    }

    if ($data['your_name'] === '') {
        $errors[] = 'お名前を入力してください。';
    }

    if ($data['your_phone'] === '') {
        $errors[] = '携帯電話番号を入力してください。';
    } elseif (!preg_match('/^\d{10,11}$/', $data['your_phone'])) {
        $errors[] = '携帯電話番号は10桁または11桁の数字で入力してください。';
    }

    if ($data['your_zip'] === '') {
        $errors[] = '郵便番号を入力してください。';
    } elseif (!preg_match('/^\d{7}$/', $data['your_zip'])) {
        $errors[] = '郵便番号は7桁の数字で入力してください。';
    }

    if ($data['your_address'] === '') {
        $errors[] = '住所を入力してください。';
    }

    if ($data['your_email'] === '') {
        $errors[] = 'メールアドレスを入力してください。';
    } elseif (!is_email($data['your_email'])) {
        $errors[] = 'メールアドレスの形式が正しくありません。';
    }

    return $errors;
}

function rf_theme_get_product_inquiry_default_recipient() {
    $fallback = 'order@respect-force.co.jp';

    return is_email($fallback) ? $fallback : get_option('admin_email');
}

function rf_theme_get_product_inquiry_recipient_email() {
    $recipient = sanitize_email((string) get_option('rf_theme_product_inquiry_recipient_email', ''));

    if ($recipient === '') {
        $recipient = rf_theme_get_product_inquiry_default_recipient();
    }

    return $recipient;
}

function rf_theme_get_product_inquiry_default_mail_body() {
    return implode("\n", array(
        '商品お問い合わせを受け付けました。',
        '',
        '商品名: {product_title}',
        '商品コード: {detail_id}',
        '商品URL: {detail_url}',
        'お問い合わせ内容: {inquiry_type}',
        '',
        'お名前: {your_name}',
        'サロン名/社名: {your_company}',
        '携帯電話番号: {your_phone}',
        '郵便番号: {your_zip}',
        '住所: {your_address}',
        'メールアドレス: {your_email}',
        '',
        'ご質問・ご要望:',
        '{your_message}',
        '',
        '送信日時: {submitted_at}',
    ));
}

function rf_theme_get_product_inquiry_mail_tags() {
    return array(
        '{product_title}' => '商品名',
        '{detail_id}' => '商品コード',
        '{detail_url}' => '商品URL',
        '{inquiry_type}' => 'お問い合わせ内容',
        '{your_name}' => 'お名前',
        '{your_company}' => 'サロン名/社名',
        '{your_phone}' => '携帯電話番号',
        '{your_zip}' => '郵便番号',
        '{your_address}' => '住所',
        '{your_email}' => 'メールアドレス',
        '{your_message}' => 'ご質問・ご要望',
        '{submitted_at}' => '送信日時',
    );
}

function rf_theme_get_product_inquiry_mail_replacements($data) {
    $labels = rf_theme_get_product_inquiry_type_labels();
    $inquiry_labels = array();

    foreach ((array) $data['inquiry_type'] as $type) {
        if (isset($labels[$type])) {
            $inquiry_labels[] = $labels[$type];
        }
    }

    return array(
        '{product_title}' => $data['product_title'] !== '' ? $data['product_title'] : '商品名未取得',
        '{detail_id}' => $data['detail_id'] !== '' ? $data['detail_id'] : '未設定',
        '{detail_url}' => $data['detail_url'] !== '' ? $data['detail_url'] : '未設定',
        '{inquiry_type}' => !empty($inquiry_labels) ? implode(' / ', $inquiry_labels) : '未選択',
        '{your_name}' => $data['your_name'] !== '' ? $data['your_name'] : '未入力',
        '{your_company}' => $data['your_company'] !== '' ? $data['your_company'] : '未入力',
        '{your_phone}' => $data['your_phone'] !== '' ? $data['your_phone'] : '未入力',
        '{your_zip}' => $data['your_zip'] !== '' ? $data['your_zip'] : '未入力',
        '{your_address}' => $data['your_address'] !== '' ? $data['your_address'] : '未入力',
        '{your_email}' => $data['your_email'] !== '' ? $data['your_email'] : '未入力',
        '{your_message}' => $data['your_message'] !== '' ? $data['your_message'] : '未入力',
        '{submitted_at}' => current_time('Y-m-d H:i:s'),
    );
}

function rf_theme_render_product_inquiry_mail_body($data) {
    $template = (string) get_option('rf_theme_product_inquiry_mail_body', '');
    if (trim($template) === '') {
        $template = rf_theme_get_product_inquiry_default_mail_body();
    }

    $template = preg_replace("/\r\n|\r/u", "\n", $template);

    return strtr($template, rf_theme_get_product_inquiry_mail_replacements($data));
}

function rf_theme_sanitize_product_inquiry_recipient_email($value) {
    $email = sanitize_email((string) $value);

    if ($email === '') {
        return '';
    }

    if (!is_email($email)) {
        add_settings_error(
            'rf_theme_product_inquiry_recipient_email',
            'rf_theme_product_inquiry_recipient_email_invalid',
            '送信先メールアドレスの形式が正しくありません。'
        );
        return rf_theme_get_product_inquiry_recipient_email();
    }

    return $email;
}

function rf_theme_sanitize_product_inquiry_mail_body($value) {
    $value = wp_kses_post((string) $value);
    $value = wp_strip_all_tags($value);
    $value = preg_replace("/\r\n|\r/u", "\n", $value);

    return trim($value);
}

function rf_theme_register_product_inquiry_mail_settings() {
    register_setting(
        'rf_theme_product_inquiry_mail_settings',
        'rf_theme_product_inquiry_recipient_email',
        array(
            'type' => 'string',
            'sanitize_callback' => 'rf_theme_sanitize_product_inquiry_recipient_email',
            'default' => rf_theme_get_product_inquiry_default_recipient(),
        )
    );

    register_setting(
        'rf_theme_product_inquiry_mail_settings',
        'rf_theme_product_inquiry_mail_body',
        array(
            'type' => 'string',
            'sanitize_callback' => 'rf_theme_sanitize_product_inquiry_mail_body',
            'default' => rf_theme_get_product_inquiry_default_mail_body(),
        )
    );
}
add_action('admin_init', 'rf_theme_register_product_inquiry_mail_settings');

function rf_theme_add_product_inquiry_mail_settings_page() {
    add_options_page(
        '商品問い合わせメール',
        '商品問い合わせメール',
        'manage_options',
        'rf-theme-product-inquiry-mail',
        'rf_theme_render_product_inquiry_mail_settings_page'
    );
}
add_action('admin_menu', 'rf_theme_add_product_inquiry_mail_settings_page');

function rf_theme_render_product_inquiry_mail_settings_page() {
    if (!current_user_can('manage_options')) {
        return;
    }

    $recipient = rf_theme_get_product_inquiry_recipient_email();
    $body = (string) get_option('rf_theme_product_inquiry_mail_body', '');
    if (trim($body) === '') {
        $body = rf_theme_get_product_inquiry_default_mail_body();
    }
    ?>
    <div class="wrap">
        <h1>商品問い合わせメール設定</h1>
        <p>商品詳細ページのお問い合わせフォーム送信先と本文テンプレートを設定します。</p>
        <?php settings_errors(); ?>
        <form method="post" action="options.php">
            <?php settings_fields('rf_theme_product_inquiry_mail_settings'); ?>
            <table class="form-table" role="presentation">
                <tbody>
                    <tr>
                        <th scope="row"><label for="rf-theme-product-inquiry-recipient-email">送信先メールアドレス</label></th>
                        <td>
                            <input
                                name="rf_theme_product_inquiry_recipient_email"
                                type="email"
                                id="rf-theme-product-inquiry-recipient-email"
                                class="regular-text"
                                value="<?php echo esc_attr($recipient); ?>"
                            >
                            <p class="description">空欄の場合は <?php echo esc_html(rf_theme_get_product_inquiry_default_recipient()); ?> を使用します。</p>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row"><label for="rf-theme-product-inquiry-mail-body">本文テンプレート</label></th>
                        <td>
                            <textarea
                                name="rf_theme_product_inquiry_mail_body"
                                id="rf-theme-product-inquiry-mail-body"
                                class="large-text code"
                                rows="18"
                            ><?php echo esc_textarea($body); ?></textarea>
                            <p class="description">利用可能タグ: <?php echo esc_html(implode(', ', array_keys(rf_theme_get_product_inquiry_mail_tags()))); ?></p>
                            <p class="description">商品名を自動記載するには本文内に <code>{product_title}</code> を含めてください。</p>
                        </td>
                    </tr>
                </tbody>
            </table>
            <?php submit_button('保存'); ?>
        </form>
    </div>
    <?php
}

function rf_theme_send_product_inquiry_email($data) {
    $recipient = apply_filters('rf_theme_product_inquiry_recipient', rf_theme_get_product_inquiry_recipient_email(), $data);
    if (empty($recipient)) {
        return false;
    }

    $site_name = wp_specialchars_decode(get_bloginfo('name'), ENT_QUOTES);
    $product_title = $data['product_title'] !== '' ? $data['product_title'] : '商品名未取得';
    $subject = sprintf('【%s】商品問い合わせ: %s', $site_name, $product_title);

    $headers = array(
        'Reply-To: ' . sprintf('%s <%s>', $data['your_name'], $data['your_email']),
    );

    return wp_mail($recipient, $subject, rf_theme_render_product_inquiry_mail_body($data), $headers);
}

function rf_theme_print_google_analytics() {
    ?>
<script>
  (function (i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date(); a = s.createElement(o),
      m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-69273372-2', 'auto');
  ga('send', 'pageview');

</script>
    <?php
}
add_action('wp_head', 'rf_theme_print_google_analytics', 20);

function rf_theme_get_facebook_sdk_script() {
    return '<script>(function (d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/ja_JP/sdk.js#xfbml=1&version=v2.3";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, \'script\', \'facebook-jssdk\'));</script>';
}

function rf_theme_inject_facebook_sdk_after_body($html) {
    if (stripos($html, 'facebook-jssdk') !== false) {
        return $html;
    }

    $script = "\n" . rf_theme_get_facebook_sdk_script();
    $injected_html = preg_replace('/(<body\b[^>]*>)/i', '$1' . $script, $html, 1);

    return $injected_html !== null ? $injected_html : $html;
}

function rf_theme_start_facebook_sdk_body_buffer() {
    if (is_admin() || wp_doing_ajax() || (function_exists('wp_is_json_request') && wp_is_json_request())) {
        return;
    }

    ob_start('rf_theme_inject_facebook_sdk_after_body');
}
add_action('template_redirect', 'rf_theme_start_facebook_sdk_body_buffer', -100);
