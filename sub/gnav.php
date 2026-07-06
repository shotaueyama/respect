<nav class="u-pc-only">
        <ul class="p-flex --text-center u-gap-30 p-gnav u-pb-30">
            <?php
            $products_category = get_category_by_slug('products');
            $products_url = $products_category ? get_category_link($products_category->term_id) : home_url('/category/products/');
            $child_categories = array();

            if ($products_category instanceof WP_Term) {
                $child_categories = get_categories(array(
                    'taxonomy' => 'category',
                    'parent' => $products_category->term_id,
                    'hide_empty' => false,
                    'orderby' => 'term_order',
                    'order' => 'ASC',
                ));
            }
            ?>
            <li>
                <a href="<?php echo esc_url($products_url); ?>">製品一覧</a>
                <ul class="c-child-gnav p-flex --text-center u-gap-20 --wrap">
                    <?php foreach ($child_categories as $child) : ?>
                    <li>
                        <a href="<?php echo esc_url(get_category_link($child->term_id)); ?>">
                            <figure>
                                <picture>
                                    <img src="<?php bloginfo('template_directory'); ?>/img/common/default.png" alt="<?php echo esc_attr($child->name); ?>">
                                </picture>
                                <figcaption><?php echo esc_html($child->name); ?></figcaption>
                            </figure>
                        </a>
                    </li>
                    <?php endforeach; ?>
                </ul>
            </li>


            
        </ul>
    </nav>
