<?php
/**
 * Title: Search Results
 * Slug: fleks/search-results
 */
?>

<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"},"metadata":{"name":"Query Container"}} -->
<div class="wp-block-group alignwide"
     style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:query-title {"type":"search","textAlign":"center","align":"wide","style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} /-->
    <!-- wp:group {"tagName":"section","align":"wide","layout":{"type":"constrained"}} -->
    <section class="wp-block-group alignwide">
        <!-- wp:query {"queryId":0,"query":{"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[],"perPage":9},"align":"wide","layout":{"type":"default"}} -->
        <div class="wp-block-query alignwide">
            <!-- wp:post-template {"align":"wide","layout":{"type":"grid","columnCount":3}} -->
            <!-- wp:post-featured-image {"isLink":true,"width":"100%","height":"clamp(15vw, 30vh, 400px)","align":"wide"} /-->
            <!-- wp:post-title {"level":1,"isLink":true,"align":"wide","fontSize":"medium-plus-plus"} /-->
            <!-- wp:post-excerpt /-->
            <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
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
            <!-- wp:heading {"textAlign":"center","level":6,"style":{"spacing":{"margin":{"right":"0","left":"0","top":"0","bottom":"0"}}}} -->
            <h6 class="wp-block-heading has-text-align-center"
                style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0"><?php echo esc_html__('No result found.','fleks') ?></h6>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center"} -->
            <p class="has-text-align-center"><?php echo esc_html__('It looks like there is no published article.','fleks') ?></p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}}} -->
            <div class="wp-block-buttons"
                 style="margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
                <!-- wp:button -->
                <div class="wp-block-button">
                    <a class="wp-block-button__link wp-element-button" href="<?php echo esc_url(home_url()) ?>"><?php echo esc_html__("Go to homepage","fleks") ?> </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
            <!-- /wp:query-no-results -->
        </div>
        <!-- /wp:query -->
    </section>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->