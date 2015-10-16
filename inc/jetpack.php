<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Demo_Theme
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function demo_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'demo_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function demo_jetpack_setup
add_action( 'after_setup_theme', 'demo_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function demo_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function demo_infinite_scroll_render
