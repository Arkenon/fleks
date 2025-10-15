<?php
/**
 * Title: Two Columns#1
 * Slug: fleks-two-columns-1
 * Categories: fleks-two-columns
 * Keywords: Two columns, image and text, column
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Two Columns#1"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"align":"wide","style":{"spacing":{"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
    <div class="wp-block-group alignwide">
        <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|50"}}}} -->
        <div class="wp-block-columns">
            <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
            <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                <!-- wp:image {"id":1,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"color":"#bbbbbb","width":"1px"}}} -->
                <figure class="wp-block-image size-full has-custom-border">
                    <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr('placeholder image') ?>" class="has-border-color wp-image-1" style="border-color:#bbbbbb;border-width:1px;aspect-ratio:3/2;object-fit:cover" />
                </figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"constrained"}} -->
                <div class="wp-block-group">
                    <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                    <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:800"><?php echo esc_html__('⛊ Sample Text','fleks') ?></h5>
                    <!-- /wp:heading -->
                    <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"contrast","fontSize":"x-large"} -->
                    <h3 class="wp-block-heading has-contrast-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700"><?php echo esc_html__('Sample Two Columns Headline Goes Here','fleks') ?></h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:group -->
                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button {"className":"is-style-fill","fontSize":"xx-small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-fill has-xx-small-font-size">
                        <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Show More','fleks') ?></a>
                    </div>
                    <!-- /wp:button -->
                    <!-- wp:button {"className":"is-style-outline","fontSize":"xx-small"} -->
                    <div class="wp-block-button has-custom-font-size is-style-outline has-xx-small-font-size">
                        <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Read More','fleks') ?></a>
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