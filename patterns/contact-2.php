<?php
/**
 * Title: Contact#2
 * Slug: fleks/contact-2
 * Categories: fleks-contact-cards
 * Keywords: contact, contact page, contact form
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Contact Page#2"}} -->
<section class="wp-block-group alignfull"
         style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
    <div class="wp-block-columns alignwide">
        <!-- wp:column {"width":"40%"} -->
        <div class="wp-block-column" style="flex-basis:40%">
            <!-- wp:image {"id":0,"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"radius":"12px"}}} -->
            <figure class="wp-block-image size-full has-custom-border"><img src="<?php echo esc_url( FLEKS_URI . '/assets/img/placeholder_vertical.jpg' ); ?>" alt="" style="border-radius:12px;aspect-ratio:3/4;object-fit:cover"/></figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"width":"60%"} -->
        <div class="wp-block-column" style="flex-basis:60%">
            <!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group">
                <!-- wp:heading {"level":2,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
                <h2 class="wp-block-heading" style="font-style:normal;font-weight:700"><?php echo esc_html__( 'Visit us or reach out anytime', 'fleks' ); ?></h2>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
                <p style="line-height:1.8"><?php echo esc_html__( 'Our team is ready to help you plan the next steps. Use the details below to connect with the right person.', 'fleks' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:columns {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}}} -->
                <div class="wp-block-columns">
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"200px"}},"backgroundColor":"soft","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-soft-background-color has-background" style="border-radius:10px;min-height:200px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading"><?php echo esc_html__( 'Office', 'fleks' ); ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><?php echo esc_html__( '245 Green Street, Istanbul', 'fleks' ); ?></p>
                            <!-- /wp:paragraph --></div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"200px"}},"backgroundColor":"soft","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-soft-background-color has-background" style="border-radius:10px;min-height:200px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading"><?php echo esc_html__( 'Call', 'fleks' ); ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><a href="tel:902125550186">+90 (212) 555 0186</a></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                    <!-- wp:column -->
                    <div class="wp-block-column">
                        <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"dimensions":{"minHeight":"200px"}},"backgroundColor":"soft","layout":{"type":"constrained"}} -->
                        <div class="wp-block-group has-soft-background-color has-background" style="border-radius:10px;min-height:200px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:heading {"level":4} -->
                            <h4 class="wp-block-heading"><?php echo esc_html__( 'Email', 'fleks' ); ?></h4>
                            <!-- /wp:heading -->

                            <!-- wp:paragraph -->
                            <p><a href="mailto:hello@yoursite.com">hello@yoursite.com</a></p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:column -->
                </div>
                <!-- /wp:columns -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->
