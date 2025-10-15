<?php
/**
 * Title: Gallery#2
 * Slug: fleks/gallery-2
 * Categories: fleks-gallery
 * Keywords: Gallery, portfolio, photos
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"layout":{"type":"constrained"},"metadata":{"name":"Grid#2"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:columns {"style":{"spacing":{"blockGap":{"top":"var:preset|spacing|40","left":"var:preset|spacing|40"},"margin":{"top":"0","bottom":"0"}}}} -->
    <div class="wp-block-columns" style="margin-top:0;margin-bottom:0">
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column">
            <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-style-default">
                <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__('Vertical placeholder image','fleks') ?>" style="aspect-ratio:1;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
            <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-style-default">
                <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__('Vertical placeholder image','fleks') ?>" style="aspect-ratio:1;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
        <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|40"}}} -->
        <div class="wp-block-column">
            <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-style-default">
                <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__('Vertical placeholder image','fleks') ?>" style="aspect-ratio:1;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
            <!-- wp:image {"aspectRatio":"1","scale":"cover","sizeSlug":"large","className":"is-style-default"} -->
            <figure class="wp-block-image size-large is-style-default">
                <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__('Vertical placeholder image','fleks') ?>" style="aspect-ratio:1;object-fit:cover" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->
</section>
<!-- /wp:group -->