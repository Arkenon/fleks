<?php
/**
 * Title: Call to Action#7
 * Slug: fleks/call-to-action-7
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Call to Action#7"},"layout":{"type":"constrained"}} -->
<section class="wp-block-group">
    <!-- wp:cover {"overlayColor":"soft","isUserOverlayColor":true,"isDark":false,"align":"full","style":{"color":[]}} -->
    <div class="wp-block-cover alignfull is-light">
        <span aria-hidden="true" class="wp-block-cover__background has-soft-background-color has-background-dim-100 has-background-dim"></span>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide">
                <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
                <div class="wp-block-columns alignwide are-vertically-aligned-center"
                     style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
                    <!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
                    <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
                        <!-- wp:group {"align":"wide","backgroundColor":"base-2","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                        <div class="wp-block-group alignwide has-base-2-background-color has-background">
                            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                            <div class="wp-block-group">
                                <!-- wp:heading {"textAlign":"left","className":"is-style-default"} -->
                                <h2 class="wp-block-heading has-text-align-left is-style-default"><?php echo esc_html__( 'Call to Action Headline', 'fleks' ) ?></h2>
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
                        <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                        <div class="wp-block-buttons">
                            <!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a href="<?php echo esc_url('#')?>" class="wp-block-button__link wp-element-button">
	                                <?php echo esc_html__( 'CTA Button', 'fleks' ) ?>
                                </a>
                            </div>
                            <!-- /wp:button -->
                        </div>
                        <!-- /wp:buttons -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</section>
<!-- /wp:group -->