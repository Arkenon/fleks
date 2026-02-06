<?php
/**
 * Title: Contact#1
 * Slug: fleks/contact-1
 * Categories: fleks-contact-cards
 * Keywords: contact, contact page, contact form
 */
?>
<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Contact Page#1"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
    <div class="wp-block-columns alignwide">

        <!-- wp:column {"width":"45%"} -->
        <div class="wp-block-column" style="flex-basis:45%"><!-- wp:group {"layout":{"type":"constrained"}} -->
            <div class="wp-block-group"><!-- wp:heading {"level":1,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
                <h1 class="wp-block-heading" style="font-style:normal;font-weight:700">Let's start a conversation</h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph {"style":{"typography":{"lineHeight":"1.8"}}} -->
                <p style="line-height:1.8"><?php echo esc_html__( 'Tell us about your project, ask a question, or schedule a quick intro. We respond within one business day.', 'fleks' ); ?></p>
                <!-- /wp:paragraph -->

                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                <div class="wp-block-group"><!-- wp:paragraph -->
                    <p>Address: 245 Green Street, Istanbul</p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p><a href="tel:902125550186">+90 (212) 555 0186</a></p>
                    <!-- /wp:paragraph -->

                    <!-- wp:paragraph -->
                    <p><a href="mailto:hello@yoursite.com">hello@yoursite.com</a></p>
                    <!-- /wp:paragraph -->
                </div>
                <!-- /wp:group -->

                <!-- wp:social-links {"iconColor":"primary","iconColorValue":"#009E66","align":"left","className":"is-style-logos-only","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|10","left":"var:preset|spacing|30"}}}} -->
                <ul class="wp-block-social-links alignleft has-icon-color is-style-logos-only"><!-- wp:social-link {"url":"#","service":"instagram"} /-->

                    <!-- wp:social-link {"url":"#","service":"facebook"} /-->

                    <!-- wp:social-link {"url":"#","service":"linkedin"} /-->
                </ul>
                <!-- /wp:social-links -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"55%"} -->
        <div class="wp-block-column" style="flex-basis:55%">
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}},"border":{"radius":"12px"}},"backgroundColor":"soft","layout":{"type":"constrained"},"metadata":{"name":"Contact Form Card"}} -->
            <div class="wp-block-group has-soft-background-color has-background"
                 style="border-radius:12px;padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--40)">
                <!-- wp:heading {"level":3} -->
                <h3 class="wp-block-heading"><?php echo esc_html__( 'Send us a message', 'fleks' ); ?></h3>
                <!-- /wp:heading -->
                <!-- wp:paragraph -->
                <p><?php echo esc_html__( 'Drop your contact form shortcode or block here.', 'fleks' ); ?></p>
                <!-- /wp:paragraph -->
                <!-- wp:shortcode -->
                [contact-form]
                <!-- /wp:shortcode -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->
