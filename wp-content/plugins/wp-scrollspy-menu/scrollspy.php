<?php
/**
 * Plugin Name: WP Scrollspy Menu
 * Plugin URI: http://quasardesenvolvimento.com.br/wordpress-scrollspy-menu/
 * Description: This plugin scroll the screen when you click on a menu link. See the docs on http://quasardesenvolvimento.com.br/wordpress-scrollspy-menu/ to the right config.
 * Version: 1.0.0
 * Author: Fabio Ferraz Rufino
 * Author URI: #
 * License: GPL2
 */

add_action( 'wp_head', 'scrollspy_func' );

function scrollspy_func() {
	
	wp_enqueue_script('scrollspy_wp', plugin_dir_url(__FILE__) . 'assets/js/scrollspy_wp.js', array('jquery'));
   
}

?>