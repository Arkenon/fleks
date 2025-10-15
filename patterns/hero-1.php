<?php
/**
 * Title: Hero#1
 * Slug: fleks/hero-1
 * Categories: fleks-pricing
 * Keywords: Hero, header
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"},"metadata":{"name":"Header Cover"}} -->
<section class="wp-block-group alignfull">
    <!-- wp:cover {"url":"<?php echo esc_url(FLEKS_URI . '/assets/img/hero_bg.png') ?>","id":19,"dimRatio":0,"focalPoint":{"x":0.06,"y":0.07},"contentPosition":"top center","align":"full","layout":{"type":"default"}} -->
    <div class="wp-block-cover alignfull has-custom-content-position is-position-top-center">
        <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
        <img class="wp-block-cover__image-background wp-image-19" alt=""
             src="<?php echo esc_url(FLEKS_URI . '/assets/img/hero_bg.png') ?>"
             style="object-position:6% 7%" data-object-fit="cover" data-object-position="6% 7%"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"},"metadata":{"name":"Navigation Bar"}} -->
            <div class="wp-block-group"
                 style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                <!-- wp:group {"align":"wide","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:site-title {"style":{"typography":{"fontStyle":"normal","fontWeight":"800","textTransform":"lowercase"},"elements":{"link":{"color":{"text":"var:preset|color|primary"},":hover":{"color":{"text":"var:preset|color|hover"}}}}},"fontSize":"medium"} /-->
                    <!-- wp:navigation {"ref":4,"textColor":"contrast","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"right"}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50"}}},"layout":{"type":"default"},"metadata":{"name":"Hero"}} -->
            <div class="wp-block-group"
                 style="padding-top:var(--wp--preset--spacing--50);padding-bottom:var(--wp--preset--spacing--50)">
                <!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
                <div class="wp-block-group" style="margin-top:0;margin-bottom:0">
                    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"contrast","fontSize":"large-xx"} -->
                    <h1 class="wp-block-heading has-text-align-center has-contrast-color has-text-color has-large-xx-font-size">
                        <strong><?php printf(__('No Coding, Just %s', 'fleks'), '<mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-primary-color">' . __('Creativity', 'fleks') . '</mark>'); ?></strong>
                    </h1>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:group {"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":"2"}},"textColor":"contrast"} -->
                    <p class="has-text-align-center has-contrast-color has-text-color"
                       style="line-height:2"><?php echo esc_html__("Fleks offers pre-built templates, a variety of patterns, color palettes and more. Create your digital masterpiece in minutes!", "fleks") ?></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"style":{"spacing":{"padding":{"left":"var:preset|spacing|50","right":"var:preset|spacing|50"}}}} -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button"
                           href="<?php echo esc_url('#') ?>"
                           style="padding-right:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--50)"><?php echo esc_html__("Get Started", "fleks") ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
</section>
<!-- /wp:group -->