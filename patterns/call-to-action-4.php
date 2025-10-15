<?php
/**
 * Title: Call to Action#4
 * Slug: fleks/call-to-action-4
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>


<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Call to Action#4"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"border":{"width":"3px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"borderColor":"primary"} -->
    <div class="wp-block-columns alignwide are-vertically-aligned-center has-border-color has-primary-border-color" style="border-width:3px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
            <!-- wp:group {"align":"wide","backgroundColor":"base-2","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group alignwide has-base-2-background-color has-background">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"textAlign":"left","className":"is-style-default"} -->
                    <h2 class="wp-block-heading has-text-align-left is-style-default"><?php echo esc_html__('Call to Action Headline','fleks') ?></h2>
                    <!-- /wp:heading -->
                    <!-- wp:paragraph -->
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"contrast","textColor":"base","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}}}} -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link has-base-color has-contrast-background-color has-text-color has-background has-link-color wp-element-button" href="<?php echo esc_url('#')?>">
                        <?php echo esc_html__('CTA Button','fleks') ?>
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->