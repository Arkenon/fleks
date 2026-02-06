<?php
/**
 * Title: Page Content
 * Slug: fleks/page-content
 */
?>

<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"},"metadata":{"name":"Post Content Container"}} -->
<article class="wp-block-group"
         style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:group {"layout":{"type":"constrained"},"metadata":{"name":"Post Top"}} -->
    <div class="wp-block-group">
        <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->
        <!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-content {"layout":{"type":"constrained"}} /-->
    <!-- wp:template-part {"slug":"comments","theme":"fleks"} /-->
</article>
<!-- /wp:group -->
