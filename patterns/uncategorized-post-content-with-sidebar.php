<?php
/**
 * Title: Post Content with Sidebar
 * Slug: fleks/post-content-with-sidebar
 */
?>

<!-- wp:group {"tagName":"article","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"default"},"metadata":{"name":"Post Content Container"}} -->
<article class="wp-block-group"
         style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:group {"layout":{"type":"default"},"metadata":{"name":"Post Top"}} -->
    <div class="wp-block-group">
        <!-- wp:post-title {"level":1,"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} /-->
        <!-- wp:post-featured-image {"aspectRatio":"16/9"} /-->
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:post-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|hover"}}}},"textColor":"hover","fontSize":"x-small"} /-->
            <!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|hover"}}}},"textColor":"hover","fontSize":"x-small"} /-->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:post-content /-->
    <!-- wp:group {"layout":{"type":"default"},"metadata":{"name":"Post Bottom"}} -->
    <div class="wp-block-group">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
        <div class="wp-block-group">
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
            <div class="wp-block-group has-x-small-font-size">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color has-link-color"><?php echo esc_html__('Categories','fleks') ?>:</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-terms {"term":"category"} /-->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","flexWrap":"nowrap"},"fontSize":"x-small"} -->
            <div class="wp-block-group has-x-small-font-size">
                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                <p class="has-primary-color has-text-color has-link-color"><?php echo esc_html__('Tags','fleks') ?>:</p>
                <!-- /wp:paragraph -->
                <!-- wp:post-terms {"term":"post_tag"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"layout":{"type":"default"},"metadata":{"name":"Comments"}} -->
    <div class="wp-block-group">
        <!-- wp:comments {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"margin":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
        <div class="wp-block-comments"
             style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
            <!-- wp:comments-title {"level":6,"style":{"typography":{"textTransform":"none","fontStyle":"normal","fontWeight":"700"}},"fontSize":"small"} /-->
            <!-- wp:comment-template -->
            <!-- wp:columns {"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|40"}}}} -->
            <div class="wp-block-columns" style="margin-bottom:var(--wp--preset--spacing--40)">
                <!-- wp:column {"width":"40px"} -->
                <div class="wp-block-column" style="flex-basis:40px">
                    <!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"10px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                    <div class="wp-block-group">
                        <!-- wp:comment-author-name {"fontSize":"x-small"} /-->
                        <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                        <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                            <!-- wp:comment-date {"style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}},"typography":{"fontSize":"12px"}}} /-->
                            <!-- wp:comment-edit-link {"style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"}}},"typography":{"fontSize":"12px"}}} /-->
                        </div>
                        <!-- /wp:group -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:comment-content {"fontSize":"xx-small"} /-->
                    <!-- wp:comment-reply-link {"fontSize":"xx-small"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:comment-template -->
            <!-- wp:separator {"align":"center","backgroundColor":"cyan-bluish-gray","className":"is-style-wide"} -->
            <hr class="wp-block-separator aligncenter has-text-color has-cyan-bluish-gray-color has-alpha-channel-opacity has-cyan-bluish-gray-background-color has-background is-style-wide"/>
            <!-- /wp:separator -->
            <!-- wp:group {"layout":{"type":"default"}} -->
            <div class="wp-block-group">
                <!-- wp:comments-pagination {"paginationArrow":"arrow","layout":{"type":"flex","justifyContent":"center"}} -->
                <!-- wp:comments-pagination-previous {"label":"Older","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
                <!-- wp:comments-pagination-next {"label":"Newer","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}}} /-->
                <!-- /wp:comments-pagination -->
            </div>
            <!-- /wp:group -->
            <!-- wp:group {"style":{"border":{"radius":"5px","width":"1px"},"spacing":{"margin":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"borderColor":"soft","layout":{"type":"default"}} -->
            <div class="wp-block-group has-border-color has-soft-border-color"
                 style="border-width:1px;border-radius:5px;margin-top:var(--wp--preset--spacing--30);margin-bottom:var(--wp--preset--spacing--30)">
                <!-- wp:post-comments-form {"textAlign":"left","style":{"spacing":{"margin":{"top":"0","bottom":"0","left":"0","right":"0"},"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"fontSize":"small"} /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:comments -->
    </div>
    <!-- /wp:group -->
</article>
<!-- /wp:group -->