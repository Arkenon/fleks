<?php
/**
 * Title: Two Columns#3
 * Slug: fleks-two-columns-3
 * Categories: fleks-two-columns
 * Keywords: Two columns, image and text, column
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Two Columns#3"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"contrast","textColor":"base"} -->
        <div class="wp-block-column is-vertically-aligned-center has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:50%">
            <!-- wp:paragraph {"textColor":"primary-accent"} -->
            <p class="has-primary-accent-color has-text-color">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.  Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum <a href="<?php echo esc_url('#'); ?>">posuere</a> urna. </p>
            <!-- /wp:paragraph -->
            <!-- wp:paragraph -->
            <p>Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.  Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum <a href="<?php echo esc_url('#'); ?>">posuere</a> urna. </p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons -->
            <div class="wp-block-buttons">
                <!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
                <div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size">
                    <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Read More','fleks') ?></a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|10"}}} -->
        <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
            <!-- wp:heading {"textColor":"primary-accent","className":"has-contrast-color","fontSize":"large"} -->
            <h2 class="wp-block-heading has-contrast-color has-primary-accent-color has-text-color has-large-font-size"><?php echo esc_html__('Sample Two Columns Headline Goes Here','fleks') ?></h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph -->
            <p>Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.  Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum <a href="<?php echo esc_url('#'); ?>">posuere</a> urna. </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->