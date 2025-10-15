<?php
/**
 * Title: Call to Action#5
 * Slug: fleks/call-to-action-5
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>


<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"},"metadata":{"name":"Call to Action#5"}} -->
<section class="wp-block-group alignfull has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-default"} -->
        <h2 class="wp-block-heading has-text-align-center is-style-default has-white-color has-text-color has-link-color"><?php echo esc_html__('Call to Action Headline','fleks') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color has-link-color">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"className":"is-style-fill"} -->
            <div class="wp-block-button is-style-fill">
                <a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button" href="<?php echo esc_url('#')?>">
                    <?php echo esc_html__('CTA Button','fleks') ?>
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->