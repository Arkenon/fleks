<?php
/**
 * Theme functions and definitions.
 * @author     arkenon
 * @copyright  (c) Copyright by Kadim Gültekin
 * @link       https://fleks.iyziweb.site
 * @package    Fleks Block Theme
 * @since      1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit();
}

// Definitions
define( 'FLEKS_VERSION', wp_get_theme()->get( 'Version' ) );
define( 'FLEKS_DIR', get_template_directory() );
define( 'FLEKS_URI', get_template_directory_uri() );

if ( ! function_exists( "fleks_enqueue_styles" ) ) {

    function fleks_enqueue_styles(): void {
        wp_enqueue_style( 'fleks', get_template_directory_uri(). '/style.css' );
    }
    add_action( 'wp_enqueue_scripts', 'fleks_enqueue_styles' );

}

if ( ! function_exists( "fleks_block_pattern_categories" ) ) {

	function fleks_block_pattern_categories(): void
    {

		$pattern_categories = [
			[
				"slug"  => "fleks-front-pages",
				"label" => __( "Fleks: Front Pages", 'fleks' )
			],
			[
				"slug"  => "fleks-contact-cards",
				"label" => __( "Fleks: Contact", 'fleks' )
			],
			[
				"slug"  => "fleks-pricing",
				"label" => __( "Fleks: Pricing", 'fleks' )
			],
			[
				"slug"  => "fleks-hero",
				"label" => __( "Fleks: Hero", 'fleks' )
			],
			[
				"slug"  => "fleks-two-columns",
				"label" => __( "Fleks: Two Columns", 'fleks' )
			],
			[
				"slug"  => "fleks-cta",
				"label" => __( "Fleks: Call to Action", 'fleks' )
			],
			[
				"slug"  => "fleks-social-icon",
				"label" => __( "Fleks: Social Icons", 'fleks' )
			],
			[
				"slug"  => "fleks-faq",
				"label" => __( "Fleks: FAQ", 'fleks' )
			],
			[
				"slug"  => "fleks-team",
				"label" => __( "Fleks: Team", 'fleks' )
			],
			[
				"slug"  => "fleks-testimonials",
				"label" => __( "Fleks: Testimonials", 'fleks' )
			],
			[
				"slug"  => "fleks-cards",
				"label" => __( "Fleks: Cards", 'fleks' )
			],
			[
				"slug"  => "fleks-grid",
				"label" => __( "Fleks: Grid", 'fleks' )
			],
			[
				"slug"  => "fleks-post-queries",
				"label" => __( "Fleks: Post Query", 'fleks' )
			],
			[
				"slug"  => "fleks-navbar",
				"label" => __( "Fleks: Navbar", 'fleks' )
			],
			[
				"slug"  => "fleks-services",
				"label" => __( "Fleks: Services", 'fleks' )
			],
			[
				"slug"  => "fleks-gallery",
				"label" => __( "Fleks: Gallery", 'fleks' )
			]
		];

		foreach ( $pattern_categories as $category ) {
			register_block_pattern_category( $category["slug"], array(
				'label' => $category["label"]
			) );
		}

	}

	add_action( 'init', 'fleks_block_pattern_categories' );
}

if ( ! function_exists( 'fleks_register_block_styles' ) ) {

	function fleks_register_block_styles(): void
    {

		register_block_style(
			'core/heading',
			array(
				'name'         => 'fleks-heading-gradientmask',
				'label'        => __( 'Gradientmask', 'fleks' ),
				'inline_style' => '.is-style-fleks-heading-gradientmask {-webkit-background-clip: text !important;
                    -webkit-text-fill-color: transparent !important;background: -webkit-linear-gradient(135deg,var(--wp--preset--color--contrast) 0%,var(--wp--preset--color--primary) 100%);}',
			)
		);

		register_block_style(
			'core/separator',
			array(
				'name'         => 'fleks-separator-w-30',
				'label'        => __( 'Width 30%', 'fleks' ),
				'inline_style' => '.is-style-fleks-separator-w-30 {width: 30%;border: 2px solid;}'
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'         => 'fleks-hide-on-tablet',
				'label'        => __( 'Hide on Tablet', 'fleks' ),
				'inline_style' => '@media only screen and (max-width: 780px) {.is-style-fleks-hide-on-tablet {display:none;}}'
			)
		);

		register_block_style(
			'core/group',
			array(
				'name'         => 'fleks-hide-on-mobile',
				'label'        => __( 'Hide on Mobile', 'fleks' ),
				'inline_style' => '@media only screen and (max-width: 600px) {.is-style-fleks-hide-on-mobile {display:none;}}'
			)
		);

		register_block_style(
			'core/row',
			array(
				'name'         => 'fleks-row-reverse-on-mobile',
				'label'        => __( 'Row Reverse on Mobile', 'fleks' ),
				'inline_style' => '@media only screen and (max-width: 600px) {.is-style-fleks-row-reverse {flex-direction: row-reverse;}}'
			)
		);

		$blocks_for_box_shadow = array(
			'core/group',
			'core/cover',
			'core/row',
			'core/stack',
			'core/column',
			'core/image'
		);
		foreach ( $blocks_for_box_shadow as $block ) {
			register_block_style(
				$block,
				array(
					'name'         => 'fleks-box-shadow',
					'label'        => __( 'Box Shadow', 'fleks' ),
					'inline_style' => '.is-style-fleks-box-shadow {box-shadow: rgba(0, 0, 0, 0.15) 2.4px 2.4px 3.2px;}'
				)
			);
		}
	}

	add_action( 'init', 'fleks_register_block_styles' );
}
