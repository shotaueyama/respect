<?php if (!empty($guide_floating_cta_url) && !empty($guide_floating_cta_label)) : ?>
    <a href="<?php echo esc_url($guide_floating_cta_url); ?>" class="rf-guide-floating-cta">
        <?php echo esc_html($guide_floating_cta_label); ?>
    </a>
<?php endif; ?>
