<?php

	add_action('cmb2_meta_boxes','kidschool_meta_boxes');
	if( ! function_exists('kidschool_meta_boxes') ){

		function kidschool_meta_boxes(){
			$prefix = '_kidschool_';

			//teacher box
			$teacher_box = new_cmb2_box( array(
				'id'           		 => $prefix . 'teacher_box',
				'title'        		 => esc_html__( 'Additional Info', 'kidschool' ),
				'object_types' 		 => array( 'teacher'),
				'context'      		 => 'normal',
				'priority'     		 => 'high',
				'show_names'         => true,
			) );
			$teacher_box->add_field( array(
				'name'               =>  esc_html__( 'Designation', 'kidschool' ),
				'id'                 => $prefix.'designation',
				'type'        		 => 'text',
			) );
			$teacher_box->add_field( array(
				'name'               =>  esc_html__( 'Facebook Profile', 'kidschool' ),
				'id'                 => $prefix.'facebook',
				'type'        		 => 'text',
				'desc'				 => 'Facebook Profile Lik'
			) );
			$teacher_box->add_field( array(
				'name'               =>  esc_html__( 'Twitter Profile', 'kidschool' ),
				'id'                 => $prefix.'twitter',
				'type'        		 => 'text',
				'desc'				 => 'Twitter Profile Lik'
			) );
			$teacher_box->add_field( array(
				'name'               =>  esc_html__( 'Pinterest Profile', 'kidschool' ),
				'id'                 => $prefix.'pinterest',
				'type'        		 => 'text',
				'desc'				 => 'Pinterest Profile Lik'
			) );
			$teacher_box->add_field( array(
				'name'               =>  esc_html__( 'Google Plus Profile', 'kidschool' ),
				'id'                 => $prefix.'google_plus',
				'type'        		 => 'text',
				'desc'				 => 'Google Plus Profile Lik'
			) );

			//class box
			$class_box = new_cmb2_box( array(
				'id'           		 => $prefix . 'class_box',
				'title'        		 => esc_html__( 'Additional Info', 'kidschool' ),
				'object_types' 		 => array( 'class'),
				'context'      		 => 'normal',
				'priority'     		 => 'high',
				'show_names'         => true,
			) );
			$group_field_id = $class_box->add_field( array(
				'id'          => $prefix. 'title_below_info',
				'type'        => 'group',
				'description' => __( 'Repeatable Items after class title', 'kidschool' ),
				'options'     => array(
					'group_title'   => __( 'Item {#}', 'kidschool' ), // since version 1.1.4, {#} gets replaced by row number
					'add_button'    => __( 'Add Another Item', 'kidschool' ),
					'remove_button' => __( 'Remove Item', 'kidschool' ),
					'sortable'      => true, // beta
				),
			) );

			// Id's for group's fields only need to be unique for the group. Prefix is not needed.
			$class_box->add_group_field( $group_field_id, array(
				'name' => 'Item text',
				'description' => 'This text will show on below class title',
				'id'   => 'item_text',
				'type' => 'text',
			) );

			$class_box->add_group_field( $group_field_id, array(
				'name' => 'Item number',
				'description' => 'This text will show on below class title',
				'id'   => 'item_number',
				'type' => 'text_small',
			) );



			//page breadcrump support
			$pages = new_cmb2_box( array(
				'id'           		 => $prefix . '_kidschool_page_optons',
				'title'        		 => esc_html__( 'Page Settings', 'kidschool' ),
				'object_types' 		 => array( 'page','post'),
				'context'      		 => 'normal',
				'priority'     		 => 'high',
				'show_names'         => true,
			) );
			//breadcrumb 
			$pages->add_field( array(
				'name'               =>  esc_html__( 'Select Menu Style', 'kidschool' ),
				'id'                 => $prefix.'page_menu_style',
				'type'        		 => 'select',
				'default'     		 => 'default',
				'options'     		 => array(
					'default'     	 => esc_html__( 'Default', 'kidschool' ),
					'one_page'       => esc_html__( 'One page', 'kidschool' ),
				),
			) );

			//breadcrumb 
			$pages->add_field( array(
				'name'               =>  esc_html__( 'Enable Breadcrumbs', 'kidschool' ),
				'id'                 => $prefix.'page_titlebar_enable',
				'type'        		 => 'select',
				'default'     		 => 'yes',
				'options'     		 => array(
					'yes'     		 => esc_html__( 'Yes', 'kidschool' ),
					'no'             => esc_html__( 'No', 'kidschool' ),
				),
			) );

			//breadcrumb color
			$pages->add_field( array(
				'name'               => esc_html__( 'Breadcrumb Background Color', 'kidschool' ),
				'id'          		 => $prefix .'banner_color',
				'desc'        		 => esc_html__( 'Breadcrumb Background Color', 'kidschool' ),
				'type'               => 'colorpicker',
			) );

			//breadcrumb image
			$pages->add_field( array(
				'name'               => esc_html__( 'Upload Breadcrumb Image', 'kidschool' ),
				'id'          		 => $prefix .'banner_img',
				'desc'        		 => esc_html__( 'upload image here', 'kidschool' ),
				'context'      		 => 'normal',
				'priority'    		 => 'high',
				'type'               => 'file',
			) );

			//page title color
			$pages->add_field( array(
				'name'               => esc_html__( 'BG Overlay Color', 'kidschool' ),
				'id'                 => $prefix .'page_title_bg_overlay_color',
				'desc'               => esc_html__( 'Breadcrumbs Overlay Color', 'kidschool' ),
				'type'               => 'colorpicker',
			) );

			//page title color
			$pages->add_field( array(
				'name'               => esc_html__( 'Overlay Opacity', 'kidschool' ),
				'id'                 => $prefix .'page_title_overlay_opacity',
				'desc'               => esc_html__( 'Breadcrumbs Overlay Opacity ( ex: .0 - 1)', 'kidschool' ),
				'type'               => 'text_small',
			) );

			$pages->add_field( array(
				'name'             => esc_html__( 'Breadcrumbs Text Position', 'kidschool' ),
				'id'               => $prefix .'breadcrumbs_position',
				'desc'             => esc_html__( 'Breadcrumbs text position', 'kidschool' ),
				'type'             => 'select',
				'options'          => array(
					'' 		   	   => esc_html__('Select position','kidschool'),
					'left' 		   => esc_html__('Position left','kidschool'),
					'center' 	   => esc_html__('Position center','kidschool'),
					'right'  	   => esc_html__('Position right','kidschool'),
				)
			) );

			//page title color
			$pages->add_field( array(
				'name'               => esc_html__( 'Page Title Color', 'kidschool' ),
				'id'                 => $prefix .'page_title_color',
				'desc'               => esc_html__( 'Breadcrumbs title color', 'kidschool' ),
				'type'               => 'colorpicker',
			) );
			//page title font size
			$pages->add_field( array(
				'name'               => esc_html__( 'Page Title Font Size', 'kidschool' ),
				'id'                 => $prefix .'page_title_font_sizes',
				'desc'               => esc_html__( 'Breadcrumbs title font size', 'kidschool' ),
				'type'               => 'text_small',
			) );
			//breadcrumb height
			$pages->add_field( array(
				'name'               => esc_html__( 'Breadcrumbs Top Padding', 'kidschool' ),
				'id'                 => $prefix .'breadcrumb_padding_top',
				'desc'               => esc_html__( 'inset padding ex-80', 'kidschool' ),
				'type'               => 'text_small',
			) );
			//breadcrumb height
			$pages->add_field( array(
				'name'               => esc_html__( 'Breadcrumbs Bottom Padding', 'kidschool' ),
				'id'                 => $prefix .'breadcrumb_padding_bottom',
				'desc'               => esc_html__( 'inset padding ex-80', 'kidschool' ),
				'type'               => 'text_small',
			) );
			//page padding
			$pages->add_field( array(
				'name'               => esc_html__( 'Page Padding', 'kidschool' ),
				'id'                 => $prefix .'page_padding',
				'desc'               => esc_html__( 'Page padding', 'kidschool' ),
				'type'               => 'text_small',
			) );
					
		
			
	}
}


