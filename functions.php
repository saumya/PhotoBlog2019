<?php
/**
 * PhotoBlog2019 Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 * 
 */

// ref: 
// basic 	: https://themeshaper.com/2009/04/17/wordpress-child-theme-basics/
// remove footer : https://www.wpbeginner.com/wp-themes/how-to-remove-the-powered-by-wordpress-footer-links/

// child theme : https://www.smashingmagazine.com/2016/01/create-customize-wordpress-child-theme/
// 2019 : https://code.tutsplus.com/tutorials/how-to-create-a-wordpress-child-theme--cms-33278



/* enqueue script for parent theme stylesheet */   
function saumya_parent_styles() {
    // enqueue style
    wp_enqueue_style( 'parent', get_template_directory_uri().'/style.css' );
}
add_action( 'wp_enqueue_scripts', 'saumya_parent_styles');


/*
if ( ! isset( $content_width ) ) {
	$content_width = 600;
}
*/

/*
function saumya_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'saumya_content_width', 800 );
}
add_action( 'after_setup_theme', 'saumya_content_width', 0 );
*/


