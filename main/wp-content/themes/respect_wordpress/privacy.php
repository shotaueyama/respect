<?php
/*
Template Name:プライバシーポリシー（個人情報保護方針）
*/

if (have_posts()) {
    the_post();
}

$intro = '株式会社リスペクトフォース（以下「当社」）は、当社が運営する各種サービス、および当社ホームページ（以下「本サービス」）において、お客様の個人情報を適切に取り扱うため、以下のプライバシーポリシーを定め、これを遵守いたします。';

$sections = array(
    array(
        'label' => '1. 個人情報の定義',
        'html' => <<<'HTML'
<p>本ポリシーにおいて「個人情報」とは、個人情報保護法に定める「個人情報」をいい、氏名、住所、電話番号、メールアドレス、利用履歴、その他特定の個人を識別できる情報を含みます。</p>
HTML,
    ),
    array(
        'label' => '2. 個人情報の取得方法',
        'html' => <<<'HTML'
<p>当社は、以下の方法で個人情報を取得します。</p>
<ul>
    <li>お問い合わせフォーム、登録フォーム、申込フォーム等への入力</li>
    <li>サービス利用時の登録情報</li>
    <li>利用者との契約書、同意書の取り交わし</li>
    <li>サービス利用者から提供されるデータ（予約情報、決済情報、利用履歴など）</li>
    <li>クッキー（Cookie）等を利用したアクセス情報の自動取得</li>
</ul>
<p>なお、適法かつ公正な手段により取得を行い、不正な手段による取得は行いません。</p>
HTML,
    ),
    array(
        'label' => '3. 取得した個人情報の利用目的',
        'html' => <<<'HTML'
<p>当社は取得した個人情報を、以下の目的のために利用します。</p>
<p>（1）サービス提供および関連業務のため</p>
<ul>
    <li>当社が提供するサービス・システム・プラットフォーム等の提供、運営、管理のため</li>
    <li>サービス利用に必要なアカウント管理、予約管理、決済処理、契約手続き等のため</li>
    <li>利用者・提携事業者・加盟店等との取引遂行のため</li>
</ul>
<p>（2）本人確認および不正利用防止のため</p>
<ul>
    <li>本人確認（本人認証）、ログイン管理</li>
    <li>不正行為の防止およびセキュリティ確保</li>
    <li>利用規約違反、迷惑行為、トラブル対応のため</li>
</ul>
<p>（3）サポート・問い合わせ対応のため</p>
<ul>
    <li>お問い合わせ・ご相談への対応</li>
    <li>利用状況の確認、各種連絡、通知、必要事項のご案内</li>
    <li>契約・請求・利用手続き等に関する事務処理</li>
</ul>
<p>（4）サービス改善・開発およびマーケティングのため</p>
<ul>
    <li>利用データの分析、サービス改善のための調査・研究</li>
    <li>新サービス・新機能の企画、開発、品質向上</li>
    <li>キャンペーン、アンケート、マーケティング施策の実施</li>
    <li>広告配信の最適化および広告効果測定（各種広告媒体・分析ツールによるものを含む）</li>
</ul>
<p>（5）法令遵守のため</p>
<ul>
    <li>法令に基づく開示・報告・手続きへの対応</li>
    <li>トラブル・不正行為に関する記録・証拠保全</li>
</ul>
HTML,
    ),
    array(
        'label' => '4. 個人情報の共同利用',
        'html' => <<<'HTML'
<p>当社は、以下のとおり個人情報を共同利用する場合があります。</p>
<p>( 1 ) 共同利用する者の範囲</p>
<ul>
    <li>当社の業務提携先</li>
    <li>フランチャイズ加盟店</li>
    <li>当社サービスの運営に関連する協力企業</li>
</ul>
<p>( 2 ) 共同利用する個人情報の項目</p>
<ul>
    <li>氏名、住所、電話番号、メールアドレス</li>
    <li>予約情報、利用履歴、決済情報その他サービス利用に必要な情報</li>
</ul>
<p>( 3 ) 共同利用の目的</p>
<ul>
    <li>当社サービスの提供、運営、改善</li>
    <li>利用者対応、サポート、問い合わせ対応</li>
    <li>業務委託または業務提携を通じた円滑なサービス提供</li>
</ul>
<p>( 4 ) 個人情報管理責任者</p>
<p>共同利用される個人情報については、株式会社リスペクトフォースが責任をもって管理します。</p>
<p>( 5 ) その他</p>
<p>共同利用の詳細について変更が生じた場合は、本プライバシーポリシーにて随時公表します。</p>
HTML,
    ),
    array(
        'label' => '5.個人情報の安全管理措置',
        'html' => <<<'HTML'
<p>当社は個人情報の漏えい、滅失、毀損を防ぐため、以下の措置を講じます。</p>
<ul>
    <li>SSL 等による通信の暗号化</li>
    <li>アクセス権限管理</li>
    <li>従業員への個人情報保護に関する教育</li>
    <li>情報セキュリティ体制の継続的強化</li>
</ul>
HTML,
    ),
    array(
        'label' => '6.個人情報の開示・訂正・利用停止・削除',
        'html' => <<<'HTML'
<p>お客様からの請求により、当社が保有する個人情報について以下の対応を行います。</p>
<ul>
    <li>開示</li>
    <li>訂正・追加・削除</li>
    <li>利用停止・第三者提供停止</li>
</ul>
<p>ご希望の場合は、第10項のお問い合わせ窓口までご連絡ください。<br>法令により対応できない場合があります。<br>ご請求にあたり、本人確認のための書類提出をお願いする場合があります。</p>
HTML,
    ),
    array(
        'label' => '7. クッキー（Cookie）の利用について',
        'html' => <<<'HTML'
<p>当社では、以下の目的でCookieおよび類似技術を使用します。</p>
<p>( 1 ) Cookieの種類</p>
<ul>
    <li>必須Cookie：本サービスの動作に必要なCookie</li>
    <li>分析・パフォーマンスCookie：アクセス解析やサービス改善に利用</li>
    <li>広告・ターゲティングCookie：広告配信や効果測定に利用</li>
</ul>
<p>( 2 ) 利用目的</p>
<ul>
    <li>サービスの改善および利用状況の分析</li>
    <li>広告配信の最適化およびリマーケティング</li>
    <li>利用者の利便性向上（ログイン状態維持、入力補助 等）</li>
</ul>
<p>( 3 )利用する主な外部サービス</p>
<p>Google Analytics、Google Ads、Meta Pixel、その他当社が利用する広告・分析ツール</p>
<p>( 4 ) Cookieの管理方法</p>
<p>利用者は、ブラウザ設定によりCookieを無効化・削除できます。<br>Cookieを無効化した場合、一部機能が正しく動作しない場合があります。</p>
HTML,
    ),
    array(
        'label' => '8. 外部送信について（Google Analytics等）',
        'html' => <<<'HTML'
<p>当社は、本サービスの利用状況を分析し、サービス改善や広告配信の最適化を行うため、以下の情報を外部サービス提供者へ送信する場合があります。</p>
<p>（1）送信される情報の種類</p>
<ul>
    <li>IPアドレス、ブラウザ情報、OS情報</li>
    <li>Cookie ID、端末識別子</li>
    <li>閲覧ページ、滞在時間、クリック情報、コンバージョン情報</li>
</ul>
<p>( 2 )送信先となる事業者</p>
<ul>
    <li>Google LLC</li>
    <li>Meta Platforms, Inc.</li>
    <li>その他、当社が利用する解析・広告配信サービス提供者</li>
</ul>
<p>( 3 ) 送信目的</p>
<ul>
    <li>アクセス解析（Google Analytics 等）</li>
    <li>広告配信および効果測定（Google Ads、Meta Pixel 等）</li>
</ul>
<p>( 4 ) 個人特定に関する補足</p>
<p>送信される情報には、個人を特定できる情報（氏名・メールアドレス等）は含まれません。</p>
HTML,
    ),
    array(
        'label' => '9. プライバシーポリシーの変更',
        'html' => <<<'HTML'
<p>本ポリシーの内容は、法令改正やサービス改善のため予告なく変更する場合があります。変更後のポリシーは当社サイトに掲示した時点から効力を生じます。</p>
HTML,
    ),
    array(
        'label' => '10. お問い合わせ窓口',
        'html' => <<<'HTML'
<p>個人情報に関するお問い合わせは以下までお願いいたします。</p>
<p>株式会社リスペクトフォース<br>〒165-0026　東京都中野区新井5-27-5　MONビル3F</p>
<p>メール：info★respect-force.co.jp</p>
<p>( 担当：カスタマーサポート窓口 )</p>
HTML,
    ),
    array(
        'label' => '11. 免責事項',
        'html' => <<<'HTML'
<p>以下の場合において、当社は何ら責任を負いません。</p>
<ul>
    <li>お客様ご自身が本サービス上で開示した情報により個人が特定された場合</li>
    <li>外部サイトへ遷移した際、その移動先サイトで提供される情報に起因する損害</li>
</ul>
HTML,
    ),
    array(
        'label' => '12. 継続的改善',
        'html' => <<<'HTML'
<p>当社は、個人情報の取り扱いや安全管理の改善を継続的に実施し、必要に応じて本ポリシーを見直します。</p>
HTML,
    ),
);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('privacy'); ?>
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
    <?php wp_head(); ?>
</head>
<body <?php body_class('rf-policy-page rf-privacy-page'); ?>>
    <?php get_header(); ?>

    <main class="rf-policy-page__main">
        <div class="rf-policy-page__hero">
            <div class="rf-policy-page__inner">
                <h1 class="rf-policy-page__title"><?php the_title(); ?></h1>
            </div>
        </div>
        <div class="rf-policy-page__breadcrumb-wrap">
            <div class="rf-policy-page__inner">
                <nav class="rf-detail__breadcrumbs" aria-label="Breadcrumb">
                    <a href="<?php echo esc_url(home_url('/')); ?>">トップ</a>
                    <span class="rf-detail__breadcrumbs-separator">›</span>
                    <span><?php the_title(); ?></span>
                </nav>
            </div>
        </div>

        <section class="rf-policy-page__content">
            <div class="rf-policy-page__inner rf-policy-page__inner--narrow">
                <div class="rf-policy-page__sections">
                    <section class="rf-policy-page__section">
                        <div class="rf-policy-page__section-body">
                            <p><?php echo esc_html($intro); ?></p>
                        </div>
                    </section>
                    <?php foreach ($sections as $section) : ?>
                        <section class="rf-policy-page__section">
                            <h2 class="rf-policy-page__section-title"><?php echo esc_html($section['label']); ?></h2>
                            <div class="rf-policy-page__section-line" aria-hidden="true"></div>
                            <div class="rf-policy-page__section-body">
                                <?php echo wp_kses_post($section['html']); ?>
                            </div>
                        </section>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    </main>

    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
</body>
</html>
