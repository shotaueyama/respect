<?php
/*
Template Name:お問い合わせ全般
*/
?>
<?php
// URLパラメータからidを取得
$detail_id = isset($_GET['id']) ? $_GET['id'] : '';
$service_id = isset($_GET['sv']) ? $_GET['sv'] : '';
$contents_title = '';

if (!empty($detail_id)) {

    function get_matching_post_titles($detail_id)
    {
        $args = array(
            'post_type' => 'post', // 投稿タイプを指定（必要に応じて変更してください）
            'posts_per_page' => -1, // すべての投稿を取得
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => 'connect_id',
                    'value' => $detail_id,
                    'compare' => '='
                ),
                array(
                    'key' => 'detail_code',
                    'value' => $detail_id,
                    'compare' => '='
                )
            )
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                return get_the_title();
            }
        }

        wp_reset_postdata();
    }
}

if (!empty($detail_id)) {
    $contents_title = get_matching_post_titles($detail_id);
}


if (!empty($service_id)) {
    $contents_title = '';
    switch ($service_id) {
        case '001':
            $contents_title = 'Re・Credit';
            break;
        case '002':
            $contents_title = 'Re・Make';
            break;
        case '003':
            $contents_title = 'Re・Start';
            break;
        case '004':
            $contents_title = 'Re・Sale';
            break;
        case '005':
            $contents_title = 'Re・Labs';
            break;
    }
}

function rf_contact_dom_outer_html($node)
{
    if (!$node instanceof DOMNode) {
        return '';
    }

    return $node->ownerDocument->saveHTML($node);
}

function rf_contact_collect_attributes($node)
{
    $attributes = array();

    if (!$node instanceof DOMElement) {
        return $attributes;
    }

    foreach ($node->attributes as $attribute) {
        $attributes[$attribute->nodeName] = $attribute->nodeValue;
    }

    return $attributes;
}

function rf_contact_render_attributes($attributes)
{
    $rendered = array();

    foreach ((array) $attributes as $name => $value) {
        if ($value === null || $value === '') {
            $rendered[] = esc_attr($name);
        } else {
            $rendered[] = sprintf('%s="%s"', esc_attr($name), esc_attr($value));
        }
    }

    return implode(' ', $rendered);
}

function rf_contact_extract_form_context($content_html)
{
    if (trim((string) $content_html) === '') {
        return null;
    }

    libxml_use_internal_errors(true);

    $dom = new DOMDocument('1.0', 'UTF-8');
    $loaded = $dom->loadHTML(
        '<?xml encoding="utf-8" ?><div id="rf-contact-form-root">' . $content_html . '</div>',
        LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD
    );

    if (!$loaded) {
        libxml_clear_errors();
        return null;
    }

    $xpath = new DOMXPath($dom);
    $container = $xpath->query("//*[@id='rf-contact-form-root']//*[contains(concat(' ', normalize-space(@class), ' '), ' wpcf7 ')]")->item(0);

    if (!$container instanceof DOMElement) {
        libxml_clear_errors();
        return null;
    }

    $form = $xpath->query(".//form", $container)->item(0);
    if (!$form instanceof DOMElement) {
        libxml_clear_errors();
        return null;
    }

    $controls = array();
    foreach (array('product_name', 'company_name', 'user_name', 'tel', 'email', 'email_confirm', 'textarea') as $name) {
        $control = $xpath->query(".//*[@data-name='{$name}']", $form)->item(0);
        $controls[$name] = rf_contact_dom_outer_html($control);
    }

    $screen_reader = $xpath->query(".//*[contains(concat(' ', normalize-space(@class), ' '), ' screen-reader-response ')]", $container)->item(0);
    $hidden_fields = $xpath->query(".//div[@style='display: none;']", $form)->item(0);
    $response_output = $xpath->query(".//*[contains(concat(' ', normalize-space(@class), ' '), ' wpcf7-response-output ')]", $container)->item(0);
    $submit = $xpath->query(".//input[contains(concat(' ', normalize-space(@class), ' '), ' wpcf7-submit ')]", $form)->item(0);

    libxml_clear_errors();

    return array(
        'container_attributes' => rf_contact_collect_attributes($container),
        'form_attributes' => rf_contact_collect_attributes($form),
        'screen_reader_html' => rf_contact_dom_outer_html($screen_reader),
        'hidden_fields_html' => rf_contact_dom_outer_html($hidden_fields),
        'response_output_html' => rf_contact_dom_outer_html($response_output),
        'submit_html' => rf_contact_dom_outer_html($submit),
        'controls' => $controls,
    );
}

$contact_form_context = null;
$contact_page_content = '';
if (have_posts()) {
    the_post();
    ob_start();
    the_content();
    $contact_page_content = ob_get_clean();
    $contact_form_context = rf_contact_extract_form_context($contact_page_content);
    rewind_posts();
}

$contact_inquiry_options = array(
    '美容機器を借りたい',
    '美容機器を売りたい',
    '美容機器を買いたい',
    '美容機器を貸したい',
    '店舗売買',
    '美容機器の修理相談',
    'サロン集金代行',
);



?>


<!DOCTYPE html>
<html lang="ja">

<head>

    <meta charset="UTF-8">
    <?php $rf_seo = rf_theme_get_seo_text('contact'); ?>
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

    <link rel="shortcut icon" href="img/common/favicon.ico" type="image/x-icon">
    <link rel="apple-touch-icon" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="76x76" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="114x114" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="120x120" href="img/common/favicon.png">
    <link rel="apple-touch-icon" sizes="144x144" href="img/common/faviconpng">
    <link rel="apple-touch-icon" sizes="152x152" href="img/common/favicon.png">

    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <?php wp_head(); ?>

</head>

<body <?php body_class('rf-contact-page'); ?>>


    <?php get_header(); ?>

    <header class="rf-contact-page__hero">
        <div class="rf-contact-page__hero-inner">
            <h1 class="rf-contact-page__hero-title">お問合せ</h1>
        </div>
    </header>
    <main class="rf-contact-page__main">
        <?php if (!empty($contact_form_context)) : ?>
            <div <?php echo rf_contact_render_attributes($contact_form_context['container_attributes']); ?>>
                <?php echo $contact_form_context['screen_reader_html']; ?>
                <form <?php echo rf_contact_render_attributes($contact_form_context['form_attributes']); ?>>
                    <?php echo $contact_form_context['hidden_fields_html']; ?>

                    <section class="rf-contact-form">
                        <div class="rf-contact-form__inner">
                            <div class="rf-contact-form__intro">
                                <p>お問い合わせは、下記フォームをご利用ください。</p>
                                <p>フォームで送信ができない場合は、お手数ですが下記項目をご記入のうえ、<span class="rf-contact-form__intro-link">メールアドレス</span>までメールをお送り下さい。</p>
                                <p>いただいたお問い合わせは、追って弊社よりご連絡申し上げます。</p>
                            </div>

                            <div class="rf-contact-form__row rf-contact-form__row--checks">
                                <div class="rf-contact-form__label-block rf-contact-form__label-block--checks">
                                    <span class="rf-contact-form__label">お問い合わせ項目</span>
                                    <span class="rf-contact-form__required">(必須)</span>
                                </div>
                                <div class="rf-contact-form__checks-wrap">
                                    <div class="rf-contact-form__checks">
                                        <?php foreach ($contact_inquiry_options as $index => $option_label) : ?>
                                            <label class="rf-contact-form__check">
                                                <input type="checkbox" name="rf_inquiry_type[]" value="<?php echo esc_attr($option_label); ?>" <?php checked($index === 0); ?>>
                                                <span class="rf-contact-form__check-box" aria-hidden="true"></span>
                                                <span class="rf-contact-form__check-text"><?php echo esc_html($option_label); ?></span>
                                            </label>
                                        <?php endforeach; ?>
                                    </div>
                                    <p class="rf-contact-form__check-error" aria-live="polite">お問い合わせ項目を1つ以上選択してください。</p>
                                </div>
                            </div>

                            <div class="rf-contact-form__hidden">
                                <?php echo $contact_form_context['controls']['product_name']; ?>
                                <?php echo $contact_form_context['controls']['email_confirm']; ?>
                            </div>

                            <div class="rf-contact-form__row">
                                <div class="rf-contact-form__label-block">
                                    <span class="rf-contact-form__label">お名前</span>
                                    <span class="rf-contact-form__required">(必須)</span>
                                </div>
                                <div class="rf-contact-form__control"><?php echo $contact_form_context['controls']['user_name']; ?></div>
                            </div>

                            <div class="rf-contact-form__row">
                                <div class="rf-contact-form__label-block">
                                    <span class="rf-contact-form__label">サロン名/社名</span>
                                    <span class="rf-contact-form__required">(必須)</span>
                                </div>
                                <div class="rf-contact-form__control"><?php echo $contact_form_context['controls']['company_name']; ?></div>
                            </div>

                            <div class="rf-contact-form__row">
                                <div class="rf-contact-form__label-block">
                                    <span class="rf-contact-form__label">お電話番号</span>
                                    <span class="rf-contact-form__required">(必須)</span>
                                </div>
                                <div class="rf-contact-form__control"><?php echo $contact_form_context['controls']['tel']; ?></div>
                            </div>

                            <div class="rf-contact-form__row">
                                <div class="rf-contact-form__label-block">
                                    <span class="rf-contact-form__label">メール</span>
                                    <span class="rf-contact-form__required">(必須)</span>
                                </div>
                                <div class="rf-contact-form__control"><?php echo $contact_form_context['controls']['email']; ?></div>
                            </div>

                            <div class="rf-contact-form__row rf-contact-form__row--textarea">
                                <div class="rf-contact-form__label-block">
                                    <span class="rf-contact-form__label">ご質問・ご要望</span>
                                </div>
                                <div class="rf-contact-form__control"><?php echo $contact_form_context['controls']['textarea']; ?></div>
                            </div>

                            <div class="rf-contact-form__submit">
                                <?php echo $contact_form_context['submit_html']; ?>
                            </div>
                        </div>
                    </section>

                    <?php echo $contact_form_context['response_output_html']; ?>
                </form>
            </div>
        <?php elseif ($contact_page_content !== '') : ?>
            <?php echo $contact_page_content; ?>
        <?php else : ?>
            <p>お探しのコンテンツは見つかりませんでした。</p>
        <?php endif; ?>
    </main>


    <!-- <section class="u-pb-80 u-pt-80 u-sp-pt-120">
        <div class="p-center --width-894">

            <div class="u-pb-40">
                <p class="p-text-base">
                    お問い合わせ、資料請求は、下記フォームをご利用ください。<br>
                    フォームで送信ができない場合は、お手数ですが下記項目をご記入のうえ、メールアドレスまでメールをお送り下さい。<br>
                    いただいたお問い合わせは、追って弊社よりご連絡申し上げます。
                </p>
            </div>

            <div>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>サービス<span class="u-color-red">(必須)</span></dt>
                    <dd class="c-select-box">
                        <select name="" id="">
                            <option value="">1.最新美容/健康機器の販売・リース「Re・lease」</option>
                            <option value="">2.美容/健康機器の中古（アウトレット）売買アウトレット「Re・set」</option>
                            <option value="">3.美容/健康機器の貸し借り（レンタル）「Re・use」</option>
                            <option value="">4.美容/健康機器の修理受付「Re・labs」</option>
                            <option value="">5.口座振替/WEBコンビニ払い集金回収代行「Re・crediet」</option>
                            <option value="">6.店舗売買/事業譲渡マッチング（M＆A）「Re・sales」</option>
                            <option value="">7.借りたいと貸したいを結ぶマッチングサイト「Re・Make」</option>
                            <option value="">8.自動集客型LINE予約システム「Re・start」</option>
                        </select>
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>サロン名<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>お名前<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>連絡先<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>メール<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>メール再度<span class="u-color-red">(必須)</span></dt>
                    <dd>
                        <input type="text" class="c-input" placeholder="">
                    </dd>
                </dl>
                <dl class="u-pt-40 p-flex --text-left c-form">
                    <dt>ご質問・ご要望</dt>
                    <dd>
                        <textarea name="" id="" class="c-textarea"></textarea>
                    </dd>
                </dl>
                <div class="u-pt-40 u-text-center">
                    <button class="c-button --style-3">送信</button>
                </div>
            </div>

        </div>
    </section> -->



















    <?php include 'other_service.php'; ?>
    <?php get_footer(); ?>


















    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
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


        $(function() {
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

        var productTitle = <?php echo wp_json_encode(wp_strip_all_tags($contents_title)); ?>;
        var contactFormSection = document.querySelector('.rf-contact-form');
        var contactForm = contactFormSection ? contactFormSection.closest('form.wpcf7-form') : document.querySelector('form.wpcf7-form');
        var productInput = contactForm ? contactForm.querySelector('input[name="product_name"]') : null;
        var emailInput = contactForm ? contactForm.querySelector('input[name="email"]') : null;
        var emailConfirmInput = contactForm ? contactForm.querySelector('input[name="email_confirm"]') : null;
        var inquiryInputs = contactForm ? contactForm.querySelectorAll('input[name="rf_inquiry_type[]"]') : [];
        var inquiryError = contactForm ? contactForm.querySelector('.rf-contact-form__check-error') : null;

        function getSelectedInquiryLabels() {
            return Array.prototype.slice.call(inquiryInputs)
                .filter(function(input) {
                    return input.checked;
                })
                .map(function(input) {
                    return input.value;
                });
        }

        function syncEmailConfirm() {
            if (emailInput && emailConfirmInput) {
                emailConfirmInput.value = emailInput.value;
            }
        }

        function toggleInquiryError(isVisible) {
            if (!inquiryError) {
                return;
            }
            inquiryError.classList.toggle('is-visible', isVisible);
        }

        if (productInput) {
            productInput.dataset.originalValue = productTitle || productInput.value || '';
            productInput.value = productInput.dataset.originalValue;
        }

        if (emailInput) {
            syncEmailConfirm();
            emailInput.addEventListener('input', syncEmailConfirm);
        }

        Array.prototype.forEach.call(inquiryInputs, function(input) {
            input.addEventListener('change', function() {
                toggleInquiryError(getSelectedInquiryLabels().length === 0);
            });
        });

        if (contactForm) {
            contactForm.addEventListener('submit', function(event) {
                var selectedInquiryLabels = getSelectedInquiryLabels();

                syncEmailConfirm();

                if (!selectedInquiryLabels.length) {
                    event.preventDefault();
                    toggleInquiryError(true);
                    return;
                }

                toggleInquiryError(false);

                if (productInput) {
                    var originalValue = productInput.dataset.originalValue || '';
                    var inquirySummary = 'お問い合わせ項目: ' + selectedInquiryLabels.join('、');
                    productInput.value = originalValue ? originalValue + ' / ' + inquirySummary : inquirySummary;
                }
            });
        }
    </script>




    <?php wp_footer(); ?>
</body>

</html>
