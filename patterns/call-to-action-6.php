<?php
/**
 * Title: Call to Action#6
 * Slug: fleks/call-to-action-6
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>

<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"},"metadata":{"name":"Call to Action#6"}} -->
<section class="wp-block-group alignfull">
    <!-- wp:cover {"url":"<?php echo esc_url( FLEKS_URI . '/assets/img/hero_bg.png' ); ?>","dimRatio":80,"gradient":"primary-to-black","align":"full"} -->
    <div class="wp-block-cover alignfull">
    <span aria-hidden="true"
          class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-primary-to-black-gradient-background"></span>
        <img class="wp-block-cover__image-background" alt="<?php echo esc_attr__( 'Hero background image','fleks' ) ?>"
             src="<?php echo esc_url( FLEKS_URI . '/assets/img/hero_bg.png' ); ?>" data-object-fit="cover"/>
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
                        <div class="wp-block-buttons"><!-- wp:button {"className":"is-style-outline"} -->
                            <div class="wp-block-button is-style-outline">
                                <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url('#')?>">
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