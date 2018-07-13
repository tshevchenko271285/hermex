<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package hermex
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function hermex_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'hermex_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function hermex_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'hermex_pingback_header' );

/**
 * Required styles end scripts
 */
if (is_file( get_template_directory() . '/inc/hermex-scripts.php') )
	require get_template_directory() . '/inc/hermex-scripts.php';

/**
 * Required styles end scripts
 */
if (is_file( get_template_directory() . '/inc/hermex-menus.php') )
	require get_template_directory() . '/inc/hermex-menus.php';

/**
 * Required Routing by Sections
 */
if (is_file( get_template_directory() . '/inc/hermex-route.php') )
	require get_template_directory() . '/inc/hermex-route.php';

/**
 * Required Custom Post Types
 */
if (is_file( get_template_directory() . '/inc/hermex-post-types.php') )
	require get_template_directory() . '/inc/hermex-post-types.php';

/**
 * Required Cookies Functions
 */
if (is_file( get_template_directory() . '/inc/hermex-cookies.php') )
	require get_template_directory() . '/inc/hermex-cookies.php';