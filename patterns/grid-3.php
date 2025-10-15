<?php
/**
 * Title: Grid#3
 * Slug: fleks/grid-3
 * Categories: fleks-grid
 * Keywords: Grid, columns
 */
?>

<!-- wp:group {"tagName":"section","metadata":{"name":"Grid#3","categories":["fleks-grid"],"patternName":"fleks/grid-3"},"align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"},"blockGap":"var:preset|spacing|30"}},"layout":{"type":"constrained"}} -->
<section class="wp-block-group alignfull" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
    <!-- wp:group {"layout":{"type":"grid","columnCount":2,"minimumColumnWidth":null}} -->
    <div class="wp-block-group">
        <!-- wp:image {"aspectRatio":"16/9","scale":"cover","sizeSlug":"large","className":"is-style-default","style":{"layout":{"rowSpan":1,"columnSpan":"2"}}} -->
        <figure class="wp-block-image size-large is-style-default">
            <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__( 'Horizontal placeholder image', 'fleks' ) ?>" style="aspect-ratio:16/9;object-fit:cover"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"},"layout":{"rowSpan":1,"columnSpan":"2"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
            <p class="has-primary-color has-text-color has-link-color"><?php echo esc_html__( '⛊ Header Text', 'fleks' ) ?></p>
            <!-- /wp:paragraph -->

            <!-- wp:heading {"level":1,"fontSize":"large-plus"} -->
            <h1 class="wp-block-heading has-large-plus-font-size"><?php echo esc_html__( 'Headline goes here', 'fleks' ) ?></h1>
            <!-- /wp:heading -->

            <!-- wp:paragraph -->
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->

        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"is-style-default","style":{"layout":{"columnSpan":1,"rowSpan":1}}} -->
        <figure class="wp-block-image size-large is-style-default">
            <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__( 'Horizontal placeholder image', 'fleks' ) ?>" style="aspect-ratio:4/3;object-fit:cover"/>
        </figure>
        <!-- /wp:image -->

        <!-- wp:image {"aspectRatio":"4/3","scale":"cover","sizeSlug":"large","className":"is-style-default"} -->
        <figure class="wp-block-image size-large is-style-default">
            <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__( 'Horizontal placeholder image', 'fleks' ) ?>" style="aspect-ratio:4/3;object-fit:cover"/>
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->
</section>
<!-- /wp:group -->