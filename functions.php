<?php
/**
 * Tom Watson Audio Child theme functions.
 */

defined( 'ABSPATH' ) || exit;

/**
 * Enqueue parent and child styles.
 */
function twa_child_enqueue_styles() {
	$parent_theme = wp_get_theme( 'retrospect' );
	$parent_ver   = $parent_theme->exists() ? $parent_theme->get( 'Version' ) : null;

	wp_enqueue_style(
		'retrospect-parent-style',
		get_template_directory_uri() . '/style.css',
		array(),
		$parent_ver
	);

	wp_enqueue_style(
		'tom-watson-audio-child-style',
		get_stylesheet_uri(),
		array( 'retrospect-parent-style' ),
		wp_get_theme()->get( 'Version' )
	);

	wp_enqueue_style(
		'tom-watson-audio-child-woocommerce',
		get_stylesheet_directory_uri() . '/assets/css/woocommerce.css',
		array( 'tom-watson-audio-child-style' ),
		wp_get_theme()->get( 'Version' )
	);
}
add_action( 'wp_enqueue_scripts', 'twa_child_enqueue_styles' );

/**
 * Add WooCommerce support while preserving plugin functionality.
 */
function twa_child_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'twa_child_add_woocommerce_support' );


/**
 * Remove WooCommerce breadcrumb trail (e.g. "Home / Shop") to match
 * the cleaner page header style used by normal Retrospect pages.
 */
function twa_child_remove_woocommerce_breadcrumb() {
	if ( function_exists( 'is_woocommerce' ) ) {
		remove_action( 'woocommerce_before_main_content', 'woocommerce_breadcrumb', 20 );
	}
}
add_action( 'wp', 'twa_child_remove_woocommerce_breadcrumb' );
