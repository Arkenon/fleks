<?php
/**
 * Title: Front Page#1
 * Slug: fleks/front-page-1
 * Description: A front page pattern with a hero section, features, testimonials, and a call to action.
 * Categories: fleks-front-pages
 * Keywords: Front Page, Home Page
 */
?>

<!-- wp:template-part {"slug":"header-with-hero", "theme": "fleks", "area":"header"} /-->
<!-- wp:group {"tagName":"main","style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"},"metadata":{"name":"Main Wrapper"}} -->
<main class="wp-block-group" style="margin-top:0;margin-bottom:0">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"layout":{"type":"constrained"},"metadata":{"name":"Icon Cards#1"}} -->
    <div class="wp-block-group" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:columns {"align":"wide"} -->
        <div class="wp-block-columns alignwide">
            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30"}}} -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xxx-large"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-xxx-large-font-size">⚏</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">
                    <strong><?php echo esc_html__('40+ Patterns', 'fleks'); ?></strong>
                </h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"fontSize":"x-small"} -->
                <p class="has-text-align-center has-x-small-font-size" style="line-height:1.6">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"primary","fontSize":"x-small"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700">
                    <a href="<?php echo esc_url('#'); ?>"><?php echo esc_html__('EXPLORE', 'fleks'); ?></a> ⮞
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column {"style":{"spacing":{"blockGap":"var:preset|spacing|30","padding":{"top":"0","bottom":"0"}}}} -->
            <div class="wp-block-column" style="padding-top:0;padding-bottom:0">
                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xxx-large"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-xxx-large-font-size">⚈</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">
                    <strong><?php echo esc_html__('Dark & Light Colors', 'fleks'); ?></strong>
                </h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"fontSize":"x-small"} -->
                <p class="has-text-align-center has-x-small-font-size" style="line-height:1.6">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"primary","fontSize":"x-small"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700">
                    <a href="<?php echo esc_url('#'); ?>"><?php echo esc_html__('EXPLORE', 'fleks'); ?></a> ⮞
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary","fontSize":"xxx-large"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-xxx-large-font-size">⚅</p>
                <!-- /wp:paragraph -->
                <!-- wp:heading {"textAlign":"center","level":4} -->
                <h4 class="wp-block-heading has-text-align-center">
                    <strong><?php echo esc_html__('Page Templates', 'fleks'); ?></strong>
                </h4>
                <!-- /wp:heading -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"lineHeight":1.6}},"fontSize":"x-small"} -->
                <p class="has-text-align-center has-x-small-font-size" style="line-height:1.6">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.</p>
                <!-- /wp:paragraph -->
                <!-- wp:paragraph {"align":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"},"elements":{"link":{"color":{"text":"var:preset|color|contrast"},":hover":{"color":{"text":"var:preset|color|contrast"}}}}},"textColor":"primary","fontSize":"x-small"} -->
                <p class="has-text-align-center has-primary-color has-text-color has-link-color has-x-small-font-size" style="font-style:normal;font-weight:700">
                    <a href="<?php echo esc_url('#'); ?>"><?php echo esc_html__('EXPLORE', 'fleks'); ?></a> ⮞
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"},"blockGap":"0"}},"backgroundColor":"soft","layout":{"type":"constrained"},"metadata":{"name":"Two Columns#1"}} -->
    <section class="wp-block-group alignwide has-soft-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--30)">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"backgroundColor":"secondary","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide has-secondary-background-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%">
                    <!-- wp:heading {"level":3,"style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}}},"textColor":"black","fontSize":"large-plus"} -->
                    <h3 class="wp-block-heading has-black-color has-text-color has-link-color has-large-plus-font-size">
                        <?php echo esc_html__('Explore Full Site Editing: It is new vision of WordPress', 'fleks'); ?>
                    </h3>
                    <!-- /wp:heading -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column {"verticalAlignment":"center","width":"60%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
                    <!-- wp:paragraph {"textColor":"black"} -->
                    <p class="has-black-color has-text-color">
                        <?php echo esc_html__('Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in. Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum', 'fleks'); ?>
                        <a href="<?php echo esc_url('#'); ?>"><?php echo esc_html__('posuere', 'fleks'); ?></a> urna.
                    </p>
                    <!-- /wp:paragraph -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
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
    <!-- wp:group {"tagName":"section","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"layout":{"type":"constrained"},"metadata":{"name":"Two Columns#2"}} -->
    <section class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
        <div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
            <div class="wp-block-columns">
                <!-- wp:column {"verticalAlignment":"center","width":"50%"} -->
                <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:50%">
                    <!-- wp:image {"id":1,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"color":"#bbbbbb","width":"1px"}}} -->
                    <figure class="wp-block-image size-full has-custom-border">
                        <img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg'); ?>" alt="<?php echo esc_attr__('two-columns-placeholder-img', 'fleks'); ?>" class="has-border-color wp-image-1" style="border-color:#bbbbbb;border-width:1px;aspect-ratio:3/2;object-fit:cover" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->
                <!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"},"blockGap":"var:preset|spacing|30"}}} -->
                <div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
                    <!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:heading {"level":5,"style":{"typography":{"fontStyle":"normal","fontWeight":"800"},"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                        <h5 class="wp-block-heading has-primary-color has-text-color has-link-color" style="font-style:normal;font-weight:800">
                            ⛊ <?php echo esc_html__('Power of blocks', 'fleks'); ?>
                        </h5>
                        <!-- /wp:heading -->
                        <!-- wp:heading {"level":3,"style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"textColor":"contrast","fontSize":"x-large"} -->
                        <h3 class="wp-block-heading has-contrast-color has-text-color has-x-large-font-size" style="font-style:normal;font-weight:700">
                            <?php echo esc_html__('Ready-to-Use Templates, Wide Color Palette and Full Site Editing', 'fleks'); ?>
                        </h3>
                        <!-- /wp:heading -->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button {"className":"is-style-fill"} -->
                        <div class="wp-block-button is-style-fill">
                            <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Patterns', 'fleks'); ?></a>
                        </div>
                        <!-- /wp:button -->
                        <!-- wp:button {"className":"is-style-outline"} -->
                        <div class="wp-block-button is-style-outline">
                            <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Templates', 'fleks'); ?></a>
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
    <!-- wp:group {"tagName":"section","layout":{"type":"constrained"},"metadata":{"name":"Call to Action#6"}} -->
    <section class="wp-block-group">
        <!-- wp:cover {"url":"<?php echo esc_url(FLEKS_URI.'/assets/img/hero_bg.png'); ?>","id":10,"overlayColor":"soft","isDark":false,"align":"full","style":{"color":[]}} -->
        <div class="wp-block-cover alignfull is-light">
            <span aria-hidden="true" class="wp-block-cover__background has-soft-background-color has-background-dim-100 has-background-dim"></span>
            <img class="wp-block-cover__image-background wp-image-10" alt="" src="<?php echo esc_url(FLEKS_URI.'/assets/img/hero_bg.png'); ?>" data-object-fit="cover" />
            <div class="wp-block-cover__inner-container">
                <!-- wp:group {"align":"wide","layout":{"type":"constrained"}} -->
                <div class="wp-block-group alignwide">
                    <!-- wp:columns {"verticalAlignment":"center","align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}}} -->
                    <div class="wp-block-columns alignwide are-vertically-aligned-center" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
                        <!-- wp:column {"verticalAlignment":"center","width":"80%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:80%">
                            <!-- wp:group {"align":"wide","backgroundColor":"base-2","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
                            <div class="wp-block-group alignwide has-base-2-background-color has-background">
                                <!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|10"}},"layout":{"type":"flex","orientation":"vertical"}} -->
                                <div class="wp-block-group">
                                    <!-- wp:heading {"textAlign":"left","className":"is-style-default"} -->
                                    <h2 class="wp-block-heading has-text-align-left is-style-default">
                                        <?php echo esc_html__('Limitless design features...', 'fleks'); ?>
                                    </h2>
                                    <!-- /wp:heading -->
                                    <!-- wp:paragraph -->
                                    <p>
                                        <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'fleks'); ?>
                                    </p>
                                    <!-- /wp:paragraph -->
                                </div>
                                <!-- /wp:group -->
                            </div>
                            <!-- /wp:group -->
                        </div>
                        <!-- /wp:column -->
                        <!-- wp:column {"verticalAlignment":"center","width":"20%"} -->
                        <div class="wp-block-column is-vertically-aligned-center" style="flex-basis:20%">
                            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left"}} -->
                            <div class="wp-block-buttons">
                                <!-- wp:button {"className":"is-style-outline"} -->
                                <div class="wp-block-button is-style-outline">
                                    <a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Discover', 'fleks'); ?></a>
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
            </div>
        </div>
        <!-- /wp:cover -->
    </section>
    <!-- /wp:group -->
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}},"color":{"background":"var:preset|color|base"}},"layout":{"type":"constrained"},"metadata":{"name":"Card#1"}} -->
    <div class="wp-block-group has-background" style="background-color:var(--wp--preset--color--base);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)">
        <!-- wp:group {"style":{"spacing":{"padding":{"bottom":"var:preset|spacing|40"}}},"layout":{"type":"constrained"}} -->
        <div class="wp-block-group" style="padding-bottom:var(--wp--preset--spacing--40)">
            <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontStyle":"normal","fontWeight":"700"}},"className":"is-style-fleks-heading-gradientmask"} -->
            <h2 class="wp-block-heading has-text-align-center is-style-fleks-heading-gradientmask" style="font-style:normal;font-weight:700">
                <?php echo esc_html__('Craft visually striking websites using our design features', 'fleks'); ?>
            </h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
            <p class="has-text-align-center has-contrast-color has-text-color has-link-color">
                <?php echo esc_html__('Block styles, patterns, template parts and more...', 'fleks'); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
        <!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"var:preset|spacing|30","left":"var:preset|spacing|30"},"padding":{"right":"var:preset|spacing|30","left":"var:preset|spacing|30","top":"0","bottom":"0"}}}} -->
        <div class="wp-block-columns alignwide" style="padding-top:0;padding-right:var(--wp--preset--spacing--30);padding-bottom:0;padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:cover {"url":"<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>","id":121,"dimRatio":0,"style":{"border":{"radius":"25px","width":"1px"}},"borderColor":"soft","className":"has-border-color has-contrast-border-color is-style-fleks-box-shadow"} -->
                <div class="wp-block-cover has-border-color has-contrast-border-color is-style-fleks-box-shadow has-soft-border-color" style="border-width:1px;border-radius:25px">
                    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                    
                    <img class="wp-block-cover__image-background wp-image-121" alt="" src="<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color">
                                <strong><?php echo esc_html__('Block Styles', 'fleks'); ?></strong>
                            </h4>
                            <!-- /wp:heading -->
                            <!-- wp:separator {"align":"center","style":{"spacing":{"margin":{"top":"5px","bottom":"0"}}},"backgroundColor":"primary","className":"is-style-fleks-separator-w-30"} -->
                            <hr class="wp-block-separator aligncenter has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-fleks-separator-w-30" style="margin-top:5px;margin-bottom:0" />
                            <!-- /wp:separator -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color">
                                <?php echo esc_html__('Shadows, borders, hover effects and the other lots of block styles...', 'fleks'); ?>
                            </p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color has-x-small-font-size">
                                <a href="<?php echo esc_url('#'); ?>"><strong><?php echo esc_html__('Show More', 'fleks'); ?> </strong>⮞ </a>
                            </p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:cover {"url":"<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>","id":121,"dimRatio":0,"style":{"border":{"radius":"25px","width":"1px"}},"borderColor":"soft","className":"has-border-color has-contrast-border-color is-style-fleks-box-shadow"} -->
                <div class="wp-block-cover has-border-color has-contrast-border-color is-style-fleks-box-shadow has-soft-border-color" style="border-width:1px;border-radius:25px">
                    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                    <img class="wp-block-cover__image-background wp-image-121" alt="" src="<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color">
                                <strong><?php echo esc_html__('Patterns', 'fleks'); ?></strong>
                            </h4>
                            <!-- /wp:heading -->
                            <!-- wp:separator {"align":"center","style":{"spacing":{"margin":{"top":"5px","bottom":"0"}}},"backgroundColor":"primary","className":"is-style-fleks-separator-w-30"} -->
                            <hr class="wp-block-separator aligncenter has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-fleks-separator-w-30" style="margin-top:5px;margin-bottom:0" />
                            <!-- /wp:separator -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color">
                                <?php echo esc_html__('Grids, icons boxes, call to action sections, cards and more...', 'fleks'); ?>
                            </p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color has-x-small-font-size">
                                <a href="<?php echo esc_url('#'); ?>"><strong><?php echo esc_html__('Show More', 'fleks'); ?> </strong>⮞ </a>
                            </p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
            <!-- wp:column -->
            <div class="wp-block-column">
                <!-- wp:cover {"url":"<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>","id":121,"dimRatio":0,"style":{"border":{"radius":"25px","width":"1px"}},"borderColor":"soft","className":"has-border-color has-contrast-border-color is-style-fleks-box-shadow"} -->
                <div class="wp-block-cover has-border-color has-contrast-border-color is-style-fleks-box-shadow has-soft-border-color" style="border-width:1px;border-radius:25px">
                    <span aria-hidden="true" class="wp-block-cover__background has-background-dim-0 has-background-dim"></span>
                    <img class="wp-block-cover__image-background wp-image-121" alt="" src="<?php echo esc_url(FLEKS_URI.'/assets/img/dotted_bg.png'); ?>" data-object-fit="cover" />
                    <div class="wp-block-cover__inner-container">
                        <!-- wp:group {"style":{"border":{"radius":"10px"},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30"}}},"layout":{"type":"constrained"}} -->
                        <div class="wp-block-group" style="border-radius:10px;padding-top:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30)">
                            <!-- wp:heading {"textAlign":"center","level":4,"style":{"elements":{"link":{"color":{"text":"var:preset|color|primary"}}}},"textColor":"primary"} -->
                            <h4 class="wp-block-heading has-text-align-center has-primary-color has-text-color has-link-color">
                                <strong><?php echo esc_html__('Templates', 'fleks'); ?></strong>
                            </h4>
                            <!-- /wp:heading -->
                            <!-- wp:separator {"align":"center","style":{"spacing":{"margin":{"top":"5px","bottom":"0"}}},"backgroundColor":"primary","className":"is-style-fleks-separator-w-30"} -->
                            <hr class="wp-block-separator aligncenter has-text-color has-primary-color has-alpha-channel-opacity has-primary-background-color has-background is-style-fleks-separator-w-30" style="margin-top:5px;margin-bottom:0" />
                            <!-- /wp:separator -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color">
                                <?php echo esc_html__('Custom templates and template parts...', 'fleks'); ?>
                            </p>
                            <!-- /wp:paragraph -->
                            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast","fontSize":"x-small"} -->
                            <p class="has-text-align-center has-contrast-color has-text-color has-link-color has-x-small-font-size">
                                <a href="<?php echo esc_url('#'); ?>"><strong><?php echo esc_html__('Show More', 'fleks'); ?> </strong>⮞ </a>
                            </p>
                            <!-- /wp:paragraph -->
                        </div>
                        <!-- /wp:group -->
                    </div>
                </div>
                <!-- /wp:cover -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
    <!-- wp:group {"tagName":"section","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"backgroundColor":"primary","layout":{"type":"constrained"},"metadata":{"name":"Call to Action#5"}} -->
    <section class="wp-block-group has-primary-background-color has-background" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
        <!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"backgroundColor":"base-2","layout":{"type":"constrained"}} -->
        <div class="wp-block-group alignwide has-base-2-background-color has-background" style="padding-top:var(--wp--preset--spacing--40);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--40);padding-left:var(--wp--preset--spacing--30)">
            <!-- wp:heading {"textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white","className":"is-style-default"} -->
            <h2 class="wp-block-heading has-text-align-center is-style-default has-white-color has-text-color has-link-color">
                <?php echo esc_html__('Get Fleks!', 'fleks'); ?>
            </h2>
            <!-- /wp:heading -->
            <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
            <p class="has-text-align-center has-white-color has-text-color has-link-color">
                <?php echo esc_html__('Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.', 'fleks'); ?>
            </p>
            <!-- /wp:paragraph -->
            <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
            <div class="wp-block-buttons">
                <!-- wp:button {"backgroundColor":"base","textColor":"contrast","style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"className":"is-style-fill"} -->
                <div class="wp-block-button is-style-fill">
                    <a class="wp-block-button__link has-contrast-color has-base-background-color has-text-color has-background has-link-color wp-element-button">
                        <?php echo esc_html__('Purchase', 'fleks'); ?>
                    </a>
                </div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->
        </div>
        <!-- /wp:group -->
    </section>
    <!-- /wp:group -->
</main>
<!-- /wp:group -->
<!-- wp:template-part {"slug":"footer-with-columns","theme":"fleks", "area":"footer"} /-->
