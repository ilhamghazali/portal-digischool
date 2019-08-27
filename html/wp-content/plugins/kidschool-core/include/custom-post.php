<?php

/*=======================================================
*    Register Post type
* =======================================================*/
if ( ! function_exists('kidschool_custom_post') ) {
	function kidschool_custom_post() {
		// teachers
		$labels = array(
			'name'                  => _x( 'Teachers', 'Post Type General Name', 'kidschool' ),
			'singular_name'         => _x( 'Teacher', 'Post Type Singular Name', 'kidschool' ),
			'menu_name'             => __( 'Teachers', 'kidschool' ),
			'name_admin_bar'        => __( 'Teacher', 'kidschool' ),
			'archives'              => __( 'Item Archives', 'kidschool' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kidschool' ),
			'all_items'             => __( 'All Items', 'kidschool' ),
			'add_new_item'          => __( 'Add New Item', 'kidschool' ),
			'add_new'               => __( 'Add New', 'kidschool' ),
			'new_item'              => __( 'New Item', 'kidschool' ),
			'edit_item'             => __( 'Edit Item', 'kidschool' ),
			'update_item'           => __( 'Update Item', 'kidschool' ),
			'view_item'             => __( 'View Item', 'kidschool' ),
			'search_items'          => __( 'Search Item', 'kidschool' ),
			'not_found'             => __( 'Not found', 'kidschool' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kidschool' ),
			'featured_image'        => __( 'Featured Image', 'kidschool' ),
			'set_featured_image'    => __( 'Set featured image', 'kidschool' ),
			'remove_featured_image' => __( 'Remove featured image', 'kidschool' ),
			'use_featured_image'    => __( 'Use as featured image', 'kidschool' ),
			'insert_into_item'      => __( 'Insert into item', 'kidschool' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'kidschool' ),
			'items_list'            => __( 'Items list', 'kidschool' ),
			'items_list_navigation' => __( 'Items list navigation', 'kidschool' ),
			'filter_items_list'     => __( 'Filter items list', 'kidschool' ),
		);
		$args = array(
			'label'                 => __( 'Teacher', 'kidschool' ),
			'labels'                => $labels,
			'supports'              => array('title','thumbnail', 'editor' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-desktop',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'teacher', $args );

		// Class
		$labels = array(
			'name'                  => _x( 'Classes', 'Post Type General Name', 'kidschool' ),
			'singular_name'         => _x( 'Class', 'Post Type Singular Name', 'kidschool' ),
			'menu_name'             => __( 'Class', 'kidschool' ),
			'name_admin_bar'        => __( 'Class', 'kidschool' ),
			'archives'              => __( 'Item Archives', 'kidschool' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kidschool' ),
			'all_items'             => __( 'All Items', 'kidschool' ),
			'add_new_item'          => __( 'Add New Item', 'kidschool' ),
			'add_new'               => __( 'Add New', 'kidschool' ),
			'new_item'              => __( 'New Item', 'kidschool' ),
			'edit_item'             => __( 'Edit Item', 'kidschool' ),
			'update_item'           => __( 'Update Item', 'kidschool' ),
			'view_item'             => __( 'View Item', 'kidschool' ),
			'search_items'          => __( 'Search Item', 'kidschool' ),
			'not_found'             => __( 'Not found', 'kidschool' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kidschool' ),
			'featured_image'        => __( 'Featured Image', 'kidschool' ),
			'set_featured_image'    => __( 'Set featured image', 'kidschool' ),
			'remove_featured_image' => __( 'Remove featured image', 'kidschool' ),
			'use_featured_image'    => __( 'Use as featured image', 'kidschool' ),
			'insert_into_item'      => __( 'Insert into item', 'kidschool' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'kidschool' ),
			'items_list'            => __( 'Items list', 'kidschool' ),
			'items_list_navigation' => __( 'Items list navigation', 'kidschool' ),
			'filter_items_list'     => __( 'Filter items list', 'kidschool' ),
		);
		$args = array(
			'label'                 => __( 'class', 'kidschool' ),
			'labels'                => $labels,
			'supports'              => array('title','thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-desktop',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'class', $args );

		// Gallery
		$labels = array(
			'name'                  => _x( 'Gallery', 'Post Type General Name', 'kidschool' ),
			'singular_name'         => _x( 'Gallery', 'Post Type Singular Name', 'kidschool' ),
			'menu_name'             => __( 'Gallery', 'kidschool' ),
			'name_admin_bar'        => __( 'Gallery', 'kidschool' ),
			'archives'              => __( 'Item Archives', 'kidschool' ),
			'parent_item_colon'     => __( 'Parent Item:', 'kidschool' ),
			'all_items'             => __( 'All Items', 'kidschool' ),
			'add_new_item'          => __( 'Add New Item', 'kidschool' ),
			'add_new'               => __( 'Add New', 'kidschool' ),
			'new_item'              => __( 'New Item', 'kidschool' ),
			'edit_item'             => __( 'Edit Item', 'kidschool' ),
			'update_item'           => __( 'Update Item', 'kidschool' ),
			'view_item'             => __( 'View Item', 'kidschool' ),
			'search_items'          => __( 'Search Item', 'kidschool' ),
			'not_found'             => __( 'Not found', 'kidschool' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'kidschool' ),
			'featured_image'        => __( 'Featured Image', 'kidschool' ),
			'set_featured_image'    => __( 'Set featured image', 'kidschool' ),
			'remove_featured_image' => __( 'Remove featured image', 'kidschool' ),
			'use_featured_image'    => __( 'Use as featured image', 'kidschool' ),
			'insert_into_item'      => __( 'Insert into item', 'kidschool' ),
			'uploaded_to_this_item' => __( 'Uploaded to this item', 'kidschool' ),
			'items_list'            => __( 'Items list', 'kidschool' ),
			'items_list_navigation' => __( 'Items list navigation', 'kidschool' ),
			'filter_items_list'     => __( 'Filter items list', 'kidschool' ),
		);
		$args = array(
			'label'                 => __( 'Gallery', 'kidschool' ),
			'labels'                => $labels,
			'supports'              => array('title', 'thumbnail' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
			'menu_icon'             => 'dashicons-desktop',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,		
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'post',
		);
		register_post_type( 'gallery', $args );
		
	}
	add_action( 'init', 'kidschool_custom_post');
}