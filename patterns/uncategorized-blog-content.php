<?php
/**
 * Title: Blog Content
 * Slug: fleks/blog-content
 */
?>

<!-- wp:heading {"textAlign":"center"} -->
<h2 class="wp-block-heading has-text-align-center"><?php echo esc_html__('Blog','fleks') ?></h2>
<!-- /wp:heading -->
<!-- wp:group {"tagName":"section","align":"wide","layout":{"type":"constrained"}} -->
<section class="wp-block-group alignwide">
    <!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"perPage":10},"align":"wide","layout":{"type":"default"}} -->
    <div class="wp-block-query alignwide">
        <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
        <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"clamp(15vw, 30vh, 400px)","align":"wide"} /-->

        <!-- wp:post-title {"level":1,"isLink":true,"align":"wide","fontSize":"medium-plus-plus"} /-->

        <!-- wp:post-excerpt /-->

        <!-- wp:group {"fontSize":"x-small","layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group has-x-small-font-size">
            <!-- wp:post-date /-->
            <!-- wp:post-terms {"term":"category"} /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:spacer {"height":"var(\u002d\u002dwp\u002d\u002dpreset\u002d\u002dspacing\u002d\u002d70)"} -->
        <div style="height:var(--wp--preset--spacing--70)" aria-hidden="true" class="wp-block-spacer"></div>
        <!-- /wp:spacer -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination {"paginationArrow":"arrow","align":"wide","layout":{"type":"flex","justifyContent":"space-between"}} -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->

        <!-- wp:query-no-results -->
        <!-- wp:pattern {"slug":"fleks/no-results"} /-->
        <!-- /wp:query-no-results -->
    </div>
    <!-- /wp:query -->
</section>
<!-- /wp:group -->