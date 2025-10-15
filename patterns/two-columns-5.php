<?php
/**
 * Title: Two Columns#5
 * Slug: fleks-two-columns-5
 * Categories: fleks-two-columns
 * Keywords: Two columns, image and text, column
 */
?>

<!-- wp:group {"tagName":"section","align":"full","layout":{"type":"constrained"},"metadata":{"name":"Two Columns#5"}} -->
<section class="wp-block-group alignfull">
	<!-- wp:cover {"dimRatio":80,"gradient":"primary-to-black","align":"full","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}},"layout":{"type":"constrained"}} -->
	<div class="wp-block-cover alignfull" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0">
		<span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim has-background-gradient has-primary-to-black-gradient-background"></span>
		<div class="wp-block-cover__inner-container">
			<!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","bottom":"var:preset|spacing|50","left":"var:preset|spacing|30","right":"var:preset|spacing|30"},"blockGap":"0"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
			<div class="wp-block-group alignwide" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--50);padding-left:var(--wp--preset--spacing--30)">
				<!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
				<div class="wp-block-columns">
					<!-- wp:column {"verticalAlignment":"center","width":"40%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:40%">
						<!-- wp:heading {"fontSize":"x-large"} -->
						<h2 class="wp-block-heading has-x-large-font-size">
							<strong><?php echo esc_html__('Sample Two Columns Headline Goes Here','fleks') ?></strong>
						</h2>
						<!-- /wp:heading -->
						<!-- wp:buttons -->
						<div class="wp-block-buttons">
							<!-- wp:button {"className":"is-style-outline","fontSize":"x-small"} -->
							<div class="wp-block-button has-custom-font-size is-style-outline has-x-small-font-size">
								<a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Read More','fleks') ?></a>
							</div>
							<!-- /wp:button -->
						</div>
						<!-- /wp:buttons -->
					</div>
					<!-- /wp:column -->
					<!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"blockGap":"0"}}} -->
					<div class="wp-block-column is-vertically-aligned-center" style="flex-basis:60%">
						<!-- wp:image {"aspectRatio":"16/9","scale":"contain","sizeSlug":"large"} -->
						<figure class="wp-block-image size-large">
							<img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr__('Vertical placeholder image','fleks') ?>" style="aspect-ratio:16/9;object-fit:contain" />
						</figure>
						<!-- /wp:image -->
						<!-- wp:paragraph {"textColor":"soft"} -->
						<p class="has-soft-color has-text-color">Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.  Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum posuere urna. </p>
						<!-- /wp:paragraph -->
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