<?php
/**
 * Title: Call to Action#3
 * Slug: fleks/call-to-action-3
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>


<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Call to Action#3"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"border":{"radius":"16px","width":"1px"},"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"borderColor":"cyan-bluish-gray","backgroundColor":"base-2","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignwide has-border-color has-cyan-bluish-gray-border-color has-base-2-background-color has-background" style="border-width:1px;border-radius:16px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"textAlign":"center","className":"is-style-default"} -->
        <h2 class="wp-block-heading has-text-align-center is-style-default"><?php echo esc_html__('Call to Action Headline','fleks') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
        <!-- /wp:paragraph -->
        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url('#')?>"><?php echo esc_html__('CTA Button','fleks') ?></a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->