<?php

/*=======================================================
*    Register Custom Taxonomy
* =======================================================*/
// Register Portfolio Custom Taxonomy
if(!function_exists('kidschool_custom_taxonomy')){
	function kidschool_custom_taxonomy() {

		//Gallery taxonomy 
		$labels = array(
			'name'                       => _x( 'Categories', 'Taxonomy General Name', 'kidschool' ),
			'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'kidschool' ),
			'menu_name'                  => __( 'Categories', 'kidschool' ),
			'all_items'                  => __( 'All Items', 'kidschool' ),
			'parent_item'                => __( 'Parent Item', 'kidschool' ),
			'parent_item_colon'          => __( 'Parent Item:', 'kidschool' ),
			'new_item_name'              => __( 'New Item Name', 'kidschool' ),
			'add_new_item'               => __( 'Add New Item', 'kidschool' ),
			'edit_item'                  => __( 'Edit Item', 'kidschool' ),
			'update_item'                => __( 'Update Item', 'kidschool' ),
			'view_item'                  => __( 'View Item', 'kidschool' ),
			'separate_items_with_commas' => __( 'Separate items with commas', 'kidschool' ),
			'add_or_remove_items'        => __( 'Add or remove items', 'kidschool' ),
			'choose_from_most_used'      => __( 'Choose from the most used', 'kidschool' ),
			'popular_items'              => __( 'Popular Items', 'kidschool' ),
			'search_items'               => __( 'Search Items', 'kidschool' ),
			'not_found'                  => __( 'Not Found', 'kidschool' ),
			'no_terms'                   => __( 'No items', 'kidschool' ),
			'items_list'                 => __( 'Items list', 'kidschool' ),
			'items_list_navigation'      => __( 'Items list navigation', 'kidschool' ),
		);
		$args = array(
			'labels'                     => $labels,
			'hierarchical'               => true,
			'public'                     => true,
			'show_ui'                    => true,
			'show_admin_column'          => true,
			'show_in_nav_menus'          => true,
			'show_tagcloud'              => true,
		);
		register_taxonomy( 'gallery_cat', array( 'gallery' ), $args );

	}
	add_action( 'init', 'kidschool_custom_taxonomy', 0 );
}