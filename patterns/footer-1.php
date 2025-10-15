<?php
/**
 * Title: Footer#1
 * Slug: fleks/footer-1
 * Categories: footers
 * Keywords: Footer, columns, logo, title, tagline, links
 */

?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","padding":{"right":"var:preset|spacing|20","left":"var:preset|spacing|20","top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"backgroundColor":"base","textColor":"contrast","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-contrast-color has-base-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--20)">
    <!-- wp:columns {"align":"wide","fontSize":"small"} -->
    <div class="wp-block-columns alignwide has-small-font-size">
        <!-- wp:column {"fontSize":"small"} -->
        <div class="wp-block-column has-small-font-size">
            <!-- wp:site-title {"level":0,"textAlign":"center"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
                <?php echo esc_html__('Pages', 'fleks'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:navigation {"ref":4,"overlayMenu":"never","style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","flexWrap":"nowrap"}} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column">
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center">
                <?php echo esc_html__('Follow us', 'fleks'); ?>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical","justifyContent":"center"}} -->
            <div class="wp-block-group">
                <!-- wp:paragraph -->
                <p>
                    <a href="<?php echo esc_url('#'); ?>">
                        <?php echo esc_html__('Facebook', 'fleks'); ?>
                    </a>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>
                    <a href="<?php echo esc_url('#'); ?>">
                        <?php echo esc_html__('Instagram', 'fleks'); ?>
                    </a>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:paragraph -->
                <p>
                    <a href="<?php echo esc_url('#'); ?>">
                        <?php echo esc_html__('Twitter', 'fleks'); ?>
                    </a>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"85px"} -->
    <div style="height:85px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">
        <?php echo esc_html__('Powered with WordPress', 'fleks'); ?>
    </p>
    <!-- /wp:paragraph -->
</div>
<!-- /wp:group -->
