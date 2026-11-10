<?php
/**
 * Ajil Khor theme setup.
 *
 * @package Ajil_Khor
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'AJIL_VERSION', '1.0.0' );

require_once get_template_directory() . '/inc/data.php';
require_once get_template_directory() . '/inc/template-tags.php';

/**
 * Theme supports and menus.
 */
function ajil_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support(
		'html5',
		array( 'search-form', 'gallery', 'caption', 'style', 'script' )
	);
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 48,
			'width'       => 48,
			'flex-height' => true,
			'flex-width'  => true,
		)
	);

	register_nav_menus(
		array(
			'primary' => __( 'منوی اصلی', 'ajil-khor' ),
			'footer'  => __( 'منوی پاورقی', 'ajil-khor' ),
		)
	);
}
add_action( 'after_setup_theme', 'ajil_setup' );

/**
 * Front-end assets.
 */
function ajil_assets() {
	$uri = get_template_directory_uri();

	wp_enqueue_style( 'ajil-fonts', $uri . '/assets/css/fonts.css', array(), AJIL_VERSION );
	wp_enqueue_style( 'ajil-style', get_stylesheet_uri(), array( 'ajil-fonts' ), AJIL_VERSION );
	wp_enqueue_style( 'ajil-theme', $uri . '/assets/css/theme.css', array( 'ajil-style' ), AJIL_VERSION );
	wp_enqueue_script( 'ajil-theme', $uri . '/assets/js/theme.js', array(), AJIL_VERSION, true );
}
add_action( 'wp_enqueue_scripts', 'ajil_assets' );

/**
 * Footer widget area.
 */
function ajil_widgets_init() {
	register_sidebar(
		array(
			'name'          => __( 'پاورقی', 'ajil-khor' ),
			'id'            => 'footer-1',
			'description'   => __( 'ویجت‌های ناحیه پاورقی', 'ajil-khor' ),
			'before_widget' => '<div class="mb-6 text-[12px] text-cream/60">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="mb-3 text-[13px] font-bold text-cream">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'ajil_widgets_init' );

/**
 * Menu link classes matching the design.
 *
 * @param array   $atts Link attributes.
 * @param WP_Post $item Menu item.
 * @param object  $args Menu arguments.
 * @return array
 */
function ajil_menu_link_classes( $atts, $item, $args ) {
	if ( ! isset( $args->theme_location ) ) {
		return $atts;
	}

	if ( 'primary' === $args->theme_location ) {
		$atts['class'] = trim( ( isset( $atts['class'] ) ? $atts['class'] : '' ) . ' nav-link' );
	} elseif ( 'footer' === $args->theme_location ) {
		$atts['class'] = trim( ( isset( $atts['class'] ) ? $atts['class'] : '' ) . ' text-[12px] text-cream/60 transition hover:text-cream' );
	}

	return $atts;
}
add_filter( 'nav_menu_link_attributes', 'ajil_menu_link_classes', 10, 3 );

/**
 * Shorter excerpts for the article cards.
 *
 * @return int
 */
function ajil_excerpt_length() {
	return 18;
}
add_filter( 'excerpt_length', 'ajil_excerpt_length' );

/**
 * Persian-friendly excerpt ellipsis.
 *
 * @return string
 */
function ajil_excerpt_more() {
	return ' …';
}
add_filter( 'excerpt_more', 'ajil_excerpt_more' );

/**
 * Archive and search titles keep the theme typography.
 *
 * @return string
 */
function ajil_archive_title_prefix() {
	return '';
}
add_filter( 'get_the_archive_title_prefix', 'ajil_archive_title_prefix' );
