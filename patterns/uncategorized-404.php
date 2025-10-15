<?php
/**
 * Title: 404 Not Found
 * Slug: fleks/404
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"
     style="padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
    <!-- wp:heading {"textAlign":"center","level":1,"textColor":"primary"} -->
    <h1 class="wp-block-heading has-text-align-center has-primary-color has-text-color">
        <?php echo esc_html__('Opps!', 'fleks'); ?>
    </h1>
    <!-- /wp:heading -->
    <!-- wp:paragraph {"align":"center"} -->
    <p class="has-text-align-center">
        <?php echo esc_html__('The page you are looking for was moved, removed, renamed or might never existed.', 'fleks'); ?>
    </p>
    <!-- /wp:paragraph -->
    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"textAlign":"center"} -->
        <div class="wp-block-button">
            <a class="wp-block-button__link has-text-align-center wp-element-button" href="<?php echo esc_url(home_url('/')); ?>">
                <?php echo esc_html__('Go to homepage.', 'fleks'); ?>
            </a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->