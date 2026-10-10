<?php
/**
 * Functions and definitions for Christ Embassy Tema Newtown theme.
 *
 * @package CE_Tema_Newtown
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Setup theme features.
 */
function ce_temanewtown_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo', array(
		'height'      => 80,
		'width'       => 80,
		'flex-height' => true,
		'flex-width'  => true,
	) );
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
		'style',
		'script',
	) );
	add_theme_support( 'responsive-embeds' );

	register_nav_menus( array(
		'primary_dock' => __( 'Floating Dock Navigation', 'ce-temanewtown' ),
		'footer_menu'  => __( 'Footer Navigation', 'ce-temanewtown' ),
	) );
}
add_action( 'after_setup_theme', 'ce_temanewtown_setup' );

/**
 * Enqueue scripts and styles.
 */
function ce_temanewtown_scripts() {
	// Google Fonts
	wp_enqueue_style(
		'ce-fonts',
		'https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700;800&display=swap',
		array(),
		null
	);

	// Theme Stylesheet
	wp_enqueue_style(
		'ce-main-style',
		get_template_directory_uri() . '/assets/css/main.css',
		array(),
		'1.2.0'
	);

	// Core Style (style.css)
	wp_enqueue_style(
		'ce-theme-style',
		get_stylesheet_uri(),
		array( 'ce-main-style' ),
		'1.2.0'
	);

	// Interactive JavaScript
	wp_enqueue_script(
		'ce-main-script',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		'1.2.0',
		true
	);
}
add_action( 'wp_enqueue_scripts', 'ce_temanewtown_scripts' );

/**
 * Helper: Church contact details.
 */
function ce_get_church_phone() {
	return '+233 20 859 1214';
}

function ce_get_church_address() {
	return 'Opposite Manhean Senior High Technical School, Manhean Road, Tema Newtown, Ghana';
}
