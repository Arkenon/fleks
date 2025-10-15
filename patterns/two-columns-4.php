<?php
/**
 * Title: Two Columns#4
 * Slug: fleks-two-columns-4
 * Categories: fleks-two-columns
 * Keywords: Two columns, image and text, column
 */
?>

<!-- wp:group {"tagName":"section","align":"full","style":{"spacing":{"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60","left":"var:preset|spacing|40","right":"var:preset|spacing|40"}}},"backgroundColor":"soft","layout":{"type":"constrained"},"metadata":{"name":"Two Columns#4"}} -->
<section class="wp-block-group alignfull has-soft-background-color has-background" style="padding-top:var(--wp--preset--spacing--60);padding-right:var(--wp--preset--spacing--40);padding-bottom:var(--wp--preset--spacing--60);padding-left:var(--wp--preset--spacing--40)">
	<!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"left":"var:preset|spacing|50"}}}} -->
	<div class="wp-block-columns alignwide">
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"0","right":"0"}}}} -->
		<div class="wp-block-column is-vertically-aligned-center" style="padding-top:0;padding-right:0;padding-bottom:0;padding-left:0;flex-basis:50%">
			<!-- wp:image {"id":1,"aspectRatio":"3/2","scale":"cover","sizeSlug":"full","linkDestination":"none","style":{"border":{"color":"#bbbbbb","width":"1px"}}} -->
			<figure class="wp-block-image size-full has-custom-border">
				<img src="<?php echo esc_url(FLEKS_URI.'/assets/img/placeholder_horizontal.jpg') ?>" alt="<?php echo esc_attr('placeholder image') ?>" class="has-border-color wp-image-1" style="border-color:#bbbbbb;border-width:1px;aspect-ratio:3/2;object-fit:cover" />
			</figure>
			<!-- /wp:image -->
		</div>
		<!-- /wp:column -->
		<!-- wp:column {"verticalAlignment":"center","width":"50%","style":{"elements":{"link":{"color":{"text":"var:preset|color|black"}}},"spacing":{"padding":{"top":"var:preset|spacing|30","bottom":"var:preset|spacing|30","left":"var:preset|spacing|30","right":"var:preset|spacing|30"}}},"textColor":"black"} -->
		<div class="wp-block-column is-vertically-aligned-center has-black-color has-text-color has-link-color" style="padding-top:var(--wp--preset--spacing--30);padding-right:var(--wp--preset--spacing--30);padding-bottom:var(--wp--preset--spacing--30);padding-left:var(--wp--preset--spacing--30);flex-basis:50%">
			<!-- wp:heading {"textColor":"primary-accent","fontSize":"x-large"} -->
			<h2 class="wp-block-heading has-primary-accent-color has-text-color has-x-large-font-size"><?php echo esc_html__('Sample Two Columns Headline Goes Here','fleks') ?></h2>
			<!-- /wp:heading -->
			<!-- wp:paragraph -->
			<p>Quis viverra nibh cras pulvinar mattis nunc sed. Lacus sed turpis tincidunt id aliquet risus feugiat in.  Auctor augue mauris augue neque gravida in fermentum et. Feugiat in fermentum <a href="<?php echo esc_url('#'); ?>">posuere</a> urna. </p>
			<!-- /wp:paragraph -->
			<!-- wp:buttons -->
			<div class="wp-block-buttons">
				<!-- wp:button {"className":"is-style-outline"} -->
				<div class="wp-block-button is-style-outline">
					<a class="wp-block-button__link wp-element-button"><?php echo esc_html__('Read More','fleks') ?></a>
				</div>
				<!-- /wp:button -->
			</div>
			<!-- /wp:buttons -->
		</div>
		<!-- /wp:column -->
	</div>
	<!-- /wp:columns -->
</section>
<!-- /wp:group -->