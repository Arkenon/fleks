<?php
/**
 * Title: Contact#3
 * Slug: fleks/contact-3
 * Categories: fleks-contact-cards
 * Keywords: contact, contact page, contact form
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0"}}},"layout":{"type":"constrained"},"metadata":{"name":"Contact Page#3"}} -->
<section class="wp-block-group alignfull" style="padding-top:0;padding-bottom:0">
    <!-- wp:cover {"url":"<?php echo esc_url( FLEKS_URI . '/assets/img/hero_bg.png' ); ?>","dimRatio":70,"overlayColor":"contrast","align":"full","layout":{"type":"constrained"}} -->
    <div class="wp-block-cover alignfull">
        <span aria-hidden="true" class="wp-block-cover__background has-contrast-background-color has-background-dim-70 has-background-dim"></span>
        <img class="wp-block-cover__image-background" alt=""
             src="<?php echo esc_url( FLEKS_URI . '/assets/img/hero_bg.png' ); ?>" data-object-fit="cover"/>
        <div class="wp-block-cover__inner-container">
            <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|70","bottom":"var:preset|spacing|70"}}},"layout":{"type":"constrained"}} -->
            <div class="wp-block-group alignwide"
                 style="padding-top:var(--wp--preset--spacing--70);padding-bottom:var(--wp--preset--spacing--70)">
                <!-- wp:heading {"textAlign":"center","level":1,"textColor":"base"} -->
                <h1 class="wp-block-heading has-text-align-center has-base-color has-text-color"><?php echo esc_html__( 'We are here to help', 'fleks' ); ?></h1>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","textColor":"base"} -->
                <p class="has-text-align-center has-base-color has-text-color"><?php echo esc_html__( 'Share your goals and we will match you with the right specialist.', 'fleks' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"backgroundColor":"primary","textColor":"base"} -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link has-base-color has-primary-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url( '#' ); ?>"><?php echo esc_html__( 'Schedule a call', 'fleks' ); ?></a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:group -->
        </div>
    </div>
    <!-- /wp:cover -->
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"soft","layout":{"type":"constrained"}} -->
    <div class="wp-block-group alignfull has-soft-background-color has-background"
         style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--40)">
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php echo esc_html__( 'Sales', 'fleks' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><a href="mailto:hello@yoursite.com">hello@yoursite.com</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php echo esc_html__( 'Support', 'fleks' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><a href="tel:902125550186">+90 (212) 555 0186</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:heading {"level":4} -->
                <h4 class="wp-block-heading"><?php echo esc_html__( 'Careers', 'fleks' ); ?></h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><a href="mailto:careers@yoursite.com">careers@yoursite.com</a></p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->
