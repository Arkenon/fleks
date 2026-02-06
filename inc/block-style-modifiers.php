<?php
/**
 * Block Style Modifiers integration for Fleks utilities.
 *
 * @package Fleks
 * @since 1.0.2
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

if ( ! function_exists( 'fleks_register_block_style_modifiers' ) ) {
	/**
	 * Register Fleks utility classes with Block Style Modifiers plugin.
	 */
	function fleks_register_block_style_modifiers(): void {
		if ( ! function_exists( 'block_style_modifiers_register_style' ) ) {
			return;
		}

		$media_blocks = array(
			'core/image',
			'core/cover',
			'core/media-text',
		);

		$card_blocks = array(
			'core/group',
			'core/columns',
			'core/column',
			'core/cover',
		);

		$text_blocks = array(
			'core/heading',
			'core/paragraph',
		);

		$button_blocks = array(
			'core/button',
			'core/buttons',
		);

		$general_blocks = array(
			'core/group',
			'core/cover',
			'core/image',
			'core/heading',
			'core/paragraph',
			'core/button',
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-zoom-in',
				'label'       => __( 'Zoom In on Hover', 'fleks' ),
				'class'       => 'fleks-zoom-in',
				'description' => __( 'Scales media slightly on hover for a modern zoom effect.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-zoom-out',
				'label'       => __( 'Zoom Out on Hover', 'fleks' ),
				'class'       => 'fleks-zoom-out',
				'description' => __( 'Starts slightly zoomed and settles on hover.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-grayscale',
				'label'       => __( 'Grayscale', 'fleks' ),
				'class'       => 'fleks-grayscale',
				'description' => __( 'Desaturates media for a muted look.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-grayscale-hover',
				'label'       => __( 'Grayscale on Hover', 'fleks' ),
				'class'       => 'fleks-grayscale-hover',
				'description' => __( 'Applies grayscale only while hovering.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$card_blocks,
			array(
				'name'        => 'fleks-hover-shadow',
				'label'       => __( 'Shadow Lift on Hover', 'fleks' ),
				'class'       => 'fleks-hover-shadow',
				'description' => __( 'Adds a soft shadow to highlight cards.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$card_blocks,
			array(
				'name'        => 'fleks-hover-float',
				'label'       => __( 'Float on Hover', 'fleks' ),
				'class'       => 'fleks-hover-float',
				'description' => __( 'Lifts the block subtly on hover.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-fade',
				'label'       => __( 'Fade on Hover', 'fleks' ),
				'class'       => 'fleks-hover-fade',
				'description' => __( 'Softly reduces opacity to create depth.', 'fleks' ),
				'category'    => __( 'Hover Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-overlay-light',
				'label'       => __( 'Light Overlay on Hover', 'fleks' ),
				'class'       => 'fleks-hover-overlay-light',
				'description' => __( 'Adds a light overlay to improve text readability.', 'fleks' ),
				'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-overlay-dark',
				'label'       => __( 'Dark Overlay on Hover', 'fleks' ),
				'class'       => 'fleks-hover-overlay-dark',
				'description' => __( 'Applies a dark overlay for dramatic emphasis.', 'fleks' ),
				'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-overlay-gradient',
				'label'       => __( 'Gradient Overlay on Hover', 'fleks' ),
				'class'       => 'fleks-hover-overlay-gradient',
				'description' => __( 'Uses a gradient overlay to add depth on hover.', 'fleks' ),
				'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-blur-bg',
				'label'       => __( 'Blur Background on Hover', 'fleks' ),
				'class'       => 'fleks-hover-blur-bg',
				'description' => __( 'Adds a subtle backdrop blur effect.', 'fleks' ),
				'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$card_blocks,
			array(
				'name'        => 'fleks-reveal-on-hover',
				'label'       => __( 'Reveal Content on Hover', 'fleks' ),
				'class'       => 'fleks-reveal-on-hover',
				'description' => __( 'Use with .fleks-reveal-target inside to fade content in.', 'fleks' ),
				'category'    => __( 'Overlay Effects', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$card_blocks,
			array(
				'name'        => 'fleks-hover-highlight',
				'label'       => __( 'Text Highlight on Hover', 'fleks' ),
				'class'       => 'fleks-hover-highlight',
				'description' => __( 'Adds a soft glow to emphasize hover state.', 'fleks' ),
				'category'    => __( 'Visual Focus & Emphasis', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$card_blocks,
			array(
				'name'        => 'fleks-hover-glow',
				'label'       => __( 'Glow on Hover', 'fleks' ),
				'class'       => 'fleks-hover-glow',
				'description' => __( 'Applies a gentle glow for visual focus.', 'fleks' ),
				'category'    => __( 'Visual Focus & Emphasis', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$media_blocks,
			array(
				'name'        => 'fleks-hover-contrast',
				'label'       => __( 'Boost Contrast on Hover', 'fleks' ),
				'class'       => 'fleks-hover-contrast',
				'description' => __( 'Increases contrast and saturation on hover.', 'fleks' ),
				'category'    => __( 'Visual Focus & Emphasis', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			array( 'core/group' ),
			array(
				'name'        => 'fleks-focus-on-hover',
				'label'       => __( 'Focus Items on Hover', 'fleks' ),
				'class'       => 'fleks-focus-on-hover',
				'description' => __( 'Dims siblings so hovered items stand out.', 'fleks' ),
				'category'    => __( 'Visual Focus & Emphasis', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$button_blocks,
			array(
				'name'        => 'fleks-press',
				'label'       => __( 'Press Feedback', 'fleks' ),
				'class'       => 'fleks-press',
				'description' => __( 'Adds a quick press-down effect on click.', 'fleks' ),
				'category'    => __( 'Interaction & Feedback', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			array_merge( $text_blocks, $button_blocks ),
			array(
				'name'        => 'fleks-is-muted',
				'label'       => __( 'Muted Appearance', 'fleks' ),
				'class'       => 'fleks-is-muted',
				'description' => __( 'Reduces emphasis for secondary content.', 'fleks' ),
				'category'    => __( 'Interaction & Feedback', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			array_merge( $text_blocks, $button_blocks ),
			array(
				'name'        => 'fleks-is-disabled-look',
				'label'       => __( 'Disabled Look', 'fleks' ),
				'class'       => 'fleks-is-disabled-look',
				'description' => __( 'Gives content a disabled, inactive appearance.', 'fleks' ),
				'category'    => __( 'Interaction & Feedback', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-fade-in',
				'label'       => __( 'Fade In', 'fleks' ),
				'class'       => 'fleks-fade-in',
				'description' => __( 'Gently fades elements into view.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-slide-up',
				'label'       => __( 'Slide Up', 'fleks' ),
				'class'       => 'fleks-slide-up',
				'description' => __( 'Slides content upward as it appears.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-slide-down',
				'label'       => __( 'Slide Down', 'fleks' ),
				'class'       => 'fleks-slide-down',
				'description' => __( 'Slides content downward as it appears.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-slide-left',
				'label'       => __( 'Slide Left', 'fleks' ),
				'class'       => 'fleks-slide-left',
				'description' => __( 'Slides content leftward as it appears.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-slide-right',
				'label'       => __( 'Slide Right', 'fleks' ),
				'class'       => 'fleks-slide-right',
				'description' => __( 'Slides content rightward as it appears.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-scale-in',
				'label'       => __( 'Scale In', 'fleks' ),
				'class'       => 'fleks-scale-in',
				'description' => __( 'Scales elements up softly on entrance.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-bounce-in',
				'label'       => __( 'Soft Bounce', 'fleks' ),
				'class'       => 'fleks-bounce-in',
				'description' => __( 'Adds a gentle bounce without exaggeration.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-rotate-in',
				'label'       => __( 'Subtle Rotate In', 'fleks' ),
				'class'       => 'fleks-rotate-in',
				'description' => __( 'Adds a light rotational entrance animation.', 'fleks' ),
				'category'    => __( 'Animations', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-delay-1',
				'label'       => __( 'Animation Delay 0.1s', 'fleks' ),
				'class'       => 'fleks-delay-1',
				'description' => __( 'Adds a 0.1s delay to animations.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-delay-2',
				'label'       => __( 'Animation Delay 0.2s', 'fleks' ),
				'class'       => 'fleks-delay-2',
				'description' => __( 'Adds a 0.2s delay to animations.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-delay-3',
				'label'       => __( 'Animation Delay 0.3s', 'fleks' ),
				'class'       => 'fleks-delay-3',
				'description' => __( 'Adds a 0.3s delay to animations.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-delay-5',
				'label'       => __( 'Animation Delay 0.5s', 'fleks' ),
				'class'       => 'fleks-delay-5',
				'description' => __( 'Adds a 0.5s delay to animations.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-delay-10',
				'label'       => __( 'Animation Delay 1s', 'fleks' ),
				'class'       => 'fleks-delay-10',
				'description' => __( 'Adds a 1s delay to animations.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-duration-fast',
				'label'       => __( 'Fast Duration', 'fleks' ),
				'class'       => 'fleks-duration-fast',
				'description' => __( 'Sets motion duration to 0.2s.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-duration-normal',
				'label'       => __( 'Normal Duration', 'fleks' ),
				'class'       => 'fleks-duration-normal',
				'description' => __( 'Sets motion duration to 0.4s.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-duration-slow',
				'label'       => __( 'Slow Duration', 'fleks' ),
				'class'       => 'fleks-duration-slow',
				'description' => __( 'Sets motion duration to 0.7s.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-ease-in',
				'label'       => __( 'Ease In', 'fleks' ),
				'class'       => 'fleks-ease-in',
				'description' => __( 'Uses an ease-in animation curve.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-ease-out',
				'label'       => __( 'Ease Out', 'fleks' ),
				'class'       => 'fleks-ease-out',
				'description' => __( 'Uses an ease-out animation curve.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-ease-in-out',
				'label'       => __( 'Ease In Out', 'fleks' ),
				'class'       => 'fleks-ease-in-out',
				'description' => __( 'Uses an ease-in-out animation curve.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);

		block_style_modifiers_register_style(
			$general_blocks,
			array(
				'name'        => 'fleks-hover-animate',
				'label'       => __( 'Hover Motion Helper', 'fleks' ),
				'class'       => 'fleks-hover-animate',
				'description' => __( 'Adds smooth transitions without defining a specific animation.', 'fleks' ),
				'category'    => __( 'Motion Enhancers', 'block-style-modifier-pack' ),
			)
		);
	}

	add_action( 'init', 'fleks_register_block_style_modifiers' );
}
