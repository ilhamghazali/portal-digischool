<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package kidschool
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function kidschool_body_classes( $classes ) {
	global $kidschool_opt;

	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}


	$kidschool_layout_width = $kidschool_opt['kidschool_layout_width'];
	
	if ( isset( $kidschool_layout_width ) ) {
		$kidschool_layout_width_value = $kidschool_layout_width;
	} else {
		$kidschool_layout_width_value = $kidschool_layout_width;
	};

	if( isset( $kidschool_layout_width_value ) && 'boxed-layout' == $kidschool_layout_width_value){
		$classes[] = 'boxed-layout-active';
	}else{
		$classes[] = 'wide-layout-active';
	}

	if($kidschool_opt){
		$classes[] = 'redux-active';
	}



	return $classes;
}
add_filter( 'body_class', 'kidschool_body_classes' );

/**
 * Add a pingback url auto-discovery header for singularly identifiable articles.
 */
function kidschool_pingback_header() {
	if ( is_singular() && pings_open() ) {
		echo '<link rel="pingback" href="', esc_url( get_bloginfo( 'pingback_url' ) ), '">';
	}
}
add_action( 'wp_head', 'kidschool_pingback_header' );
