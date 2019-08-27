<?php 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
 
 if(!function_exists('kidschool_widgets_init')){
	function kidschool_widgets_init() {
		register_sidebar( array(
			'name'          => esc_html__( 'Sidebar', 'kidschool' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'kidschool' ),
			'before_widget' => '<div id="%1$s" class="sidebar-widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h5 class="sidebar-title">',
			'after_title'   => '</h5>',
		) );

		global $kidschool_opt;

		if(isset( $kidschool_opt['kidschool_footer_layoutcolumns'] ) ){

			$footer_widget_column = $kidschool_opt['kidschool_footer_layoutcolumns'];

		}else{
			$footer_widget_column = 4;
		}
		
		
		for( $footer = 1; $footer <= $footer_widget_column; $footer++){

			register_sidebar( array(
				'name'          => 'Footer ' .$footer,
				'id'            => 'kidschool-footer-' .$footer,
				'description'   => esc_html__( 'Add widgets here.', 'kidschool' ),
				'before_widget' => '<div id="%1$s" class="single-footer widget %2$s">',
				'after_widget'  => '</div>',
				'before_title'  => '<h4 class="footer-title">',
				'after_title'   => '</h4>',
			) );
		}
			 
	}		 
}
add_action( 'widgets_init', 'kidschool_widgets_init' );
 