<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package CompassTech
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function compasstech_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'compasstech_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function compasstech_jetpack_setup
add_action( 'after_setup_theme', 'compasstech_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function compasstech_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function compasstech_infinite_scroll_render
