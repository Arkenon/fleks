<?php
/**
 * Title: Call to Action#2
 * Slug: fleks/call-to-action-2
 * Categories: fleks-cta
 * Keywords: Call to action, cta
 */
?>


<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Call to Action#2"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"border":{"radius":"10px"},"background":{"backgroundImage":{"url":"http://eternity.test/wp-content/themes/eternitywp/assets/img/eternity_hero_bg.png","id":19,"source":"file","title":"eternity_hero_bg"}}},"backgroundColor":"soft","className":"is-style-fleks-box-shadow","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignwide is-style-fleks-box-shadow has-soft-background-color has-background" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:heading {"style":{"typography":{"fontStyle":"normal","fontWeight":"900"}},"textColor":"primary","className":"is-style-default"} -->
        <h2 class="wp-block-heading is-style-default has-primary-color has-text-color" style="font-style:normal;font-weight:900"><?php echo esc_html__('Call to Action Headline','fleks') ?></h2>
        <!-- /wp:heading -->
        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button {"backgroundColor":"white","textColor":"primary","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} -->
            <div class="wp-block-button" style="font-style:normal;font-weight:700">
                <a class="wp-block-button__link has-primary-color has-white-background-color has-text-color has-background wp-element-button" href="<?php echo esc_url('#')?>">
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