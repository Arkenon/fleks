<?php
/**
 * Title: Footer#2
 * Slug: fleks/footer-2
 * Categories: footers
 * Keywords: Footer, columns, logo, title, tagline, links
 */
?>

<!-- wp:group {"className":"is-style-default","style":{"elements":{"link":{"color":{"text":"var:preset|color|soft"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}},"color":{"background":"#17181af5"}},"textColor":"soft","layout":{"type":"constrained"}} -->
<div class="wp-block-group is-style-default has-soft-color has-text-color has-background has-link-color" style="background-color:#17181af5;padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|60"}}},"fontSize":"small"} -->
    <div class="wp-block-columns alignwide has-small-font-size">
        <!-- wp:column {"verticalAlignment":"top","width":"25%","fontSize":"small"} -->
        <div class="wp-block-column is-vertically-aligned-top has-small-font-size" style="flex-basis:25%">
            <!-- wp:site-title {"level":2} /-->
            <!-- wp:site-logo {"width":262,"align":"center"} /-->
        </div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","style":{"typography":{"fontStyle":"normal","fontWeight":"800"}},"fontSize":"medium"} -->
            <h2 class="wp-block-heading has-text-align-left has-medium-font-size" style="font-style:normal;font-weight:800">Latest Posts</h2>
            <!-- /wp:heading -->

            <!-- wp:query {"queryId":20,"query":{"perPage":7,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]},"parents":[],"format":[]}} -->
            <div class="wp-block-query"><!-- wp:post-template -->
                <!-- wp:post-title {"level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|cyan-bluish-gray"},":hover":{"color":{"text":"var:preset|color|soft"}}}}},"textColor":"cyan-bluish-gray","fontSize":"x-small"} /-->
                <!-- /wp:post-template --></div>
            <!-- /wp:query --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","fontSize":"medium"} -->
            <h2 class="wp-block-heading has-text-align-left has-medium-font-size"><?php echo esc_html__('Follow us', 'fleks'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"8px"},"elements":{"link":{"color":{"text":"var:preset|color|base"}}}},"textColor":"base","layout":{"type":"flex","orientation":"vertical","justifyContent":"left"}} -->
            <div class="wp-block-group has-base-color has-text-color has-link-color"><!-- wp:social-links {"openInNewTab":true,"showLabels":true,"className":"is-style-default","layout":{"type":"flex","orientation":"vertical","justifyContent":"stretch"}} -->
                <ul class="wp-block-social-links has-visible-labels is-style-default"><!-- wp:social-link {"url":"#","service":"facebook","label":""} /-->

                    <!-- wp:social-link {"url":"<?php echo esc_url('#'); ?>","service":"instagram","label":""} /-->

                    <!-- wp:social-link {"url":"<?php echo esc_url('#'); ?>","service":"x","label":"X (Twitter)"} /-->

                    <!-- wp:social-link {"url":"<?php echo esc_url('#'); ?>","service":"youtube","label":""} /-->

                    <!-- wp:social-link {"url":"<?php echo esc_url('#'); ?>","service":"linkedin"} /--></ul>
                <!-- /wp:social-links --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"25%"} -->
        <div class="wp-block-column" style="flex-basis:25%"><!-- wp:heading {"textAlign":"left","fontSize":"medium"} -->
            <h2 class="wp-block-heading has-text-align-left has-medium-font-size"><?php echo esc_html__('Contact us', 'fleks'); ?></h2>
            <!-- /wp:heading -->

            <!-- wp:group {"style":{"spacing":{"blockGap":"8px"}},"layout":{"type":"flex","orientation":"vertical"}} -->
            <div class="wp-block-group"><!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group"><!-- wp:paragraph -->
                    <p>info@yoursite.com</p>
                    <!-- /wp:paragraph --></div>
                <!-- /wp:group --></div>
            <!-- /wp:group --></div>
        <!-- /wp:column --></div>
    <!-- /wp:columns -->

    <!-- wp:spacer {"height":"25px"} -->
    <div style="height:25px" aria-hidden="true" class="wp-block-spacer"></div>
    <!-- /wp:spacer -->

    <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|soft"}}}},"textColor":"soft","fontSize":"x-small"} -->
    <p class="has-text-align-center has-soft-color has-text-color has-link-color has-x-small-font-size"><?php echo esc_html__("Powered with WordPress", "fleks"); ?></p>
    <!-- /wp:paragraph --></div>
<!-- /wp:group -->