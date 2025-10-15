<?php
/**
 * Title: Two Columns#2
 * Slug: fleks-two-columns-2
 * Categories: fleks-two-columns
 * Keywords: Two columns, image and text, column
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Two Columns#2","categories":["fleks-two-columns"],"patternName":"fleks-two-columns-2"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"soft","textColor":"black","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull has-black-color has-soft-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide"
         style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%">
                <!-- wp:heading -->
                <h2 class="wp-block-heading"><?php echo esc_html__( 'Sample Two Columns Headline Goes Here', 'fleks' ) ?></h2>
                <!-- /wp:heading -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                <!-- wp:paragraph {"textColor":"black"} -->
                <p class="has-black-color has-text-color">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.&nbsp; Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum <a href="<?php echo esc_url( '#' ); ?>">posuere</a>urna.</p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a href="<?php echo esc_url( '#' ); ?>" class="wp-block-button__link wp-element-button"><?php echo esc_html__( 'Read More', 'fleks' ) ?></a>
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
</section>
<!-- /wp:group -->