<?php 

add_action('init', 'kidschool_gallery_style_2_maping_func');
if(!function_exists('kidschool_gallery_style_2_maping_func')){
	function kidschool_gallery_style_2_maping_func(){

		if(function_exists('kc_add_map')){
			$cat_list_arr = array();
			$gallery_terms = get_terms( 'gallery_cat', array(
			    'hide_empty' => true,
			) );
			foreach($gallery_terms as $term){
			    $cat_list_arr[$term->slug] = $term->name;
			}

			kc_add_map(
	 			array(
		        	'kidschool_gallery_style_2' => array(
						'name'        => esc_html__('Gallery Style 2', 'kidschool'),
						'description' => esc_html__('Gallery Style 2', 'kidschool'),
						'icon'        => 'fa-desktop',
						'category'    => 'kidschool',
						'params'      => array(
							'general'	=> array(
								array(
								    'name' => 'gallery_type',
								    'label' => 'Gallery Type',
								    'type' => 'select',
								    'options' => array(
								        'general'         => 'General Style',
								        'tabbed_style' => 'Tabbed Style',
								    ),
								),
								array(
								    'name' => 'category_type',
								    'label' => 'Select Cateogory',
								    'type' => 'select',
								    'options' => array(
								        'all'         => 'All Categories',
								        'hand_pick' => 'Hand Pick',
								    ),
								),
								array(
								    'name' => 'select_category',
								    'label' => 'Select Category',
								    'type' => 'multiple',
								    'options' => $cat_list_arr,
								    'relation' 	=> array(
								    	'parent'	=> 'category_type',
								    	'show_when'		=> 'hand_pick'
								    )
								),
								array(
								    'name' => 'per_page',
								    'label' => 'Number of item to display',
								    'description' => __('Specify number of items that you want to show. Set 0 to get all items ', 'kidschool'),
								    'type' => 'number_slider',
								    'value' => 4,
								    'options' => array(
								        'min' => 0,
								        'max' => 100,
								        'show_input' => true
								    ),
								    'admin_label' => true,
								),
								array(
								    'name' => 'carousel',
								    'label' => 'Enable Carousel',
								    'type' => 'toggle',
								    'value' => 'no', 
								    'description' => 'Enable / Disable Carousel',
								),
		                        array(
		                            'name' => 'columns',
		                            'label' => esc_html__( 'Columns on desktop', 'kidschool' ),
		                            'type' => 'select',
		                            'options' => array(
		                                '1' => esc_html__( 'Column One', 'kidschool' ),
		                                '2' => esc_html__( 'Column Two', 'kidschool' ),
		                                '3' => esc_html__( 'Column Three', 'kidschool' ),
		                                '4' => esc_html__( 'Column Four', 'kidschool' ),
		                                '5' => esc_html__( 'Column Five', 'kidschool' ),
		                            ),
		                            'value' => 5,
		                        ),
		                        array(
		                            'name' => 'md_item',
		                            'label' => esc_html__( 'Columns on normal desktop', 'kidschool' ),
		                            'description' => __('Specify number of item that you want to show in the carousel for normal desktop 992 -> 1199', 'kidschool'),
		                            'type' => 'select',
		                            'options' => array(
		                                '1' => esc_html__( 'Column One', 'kidschool' ),
		                                '2' => esc_html__( 'Column Two', 'kidschool' ),
		                                '3' => esc_html__( 'Column Three', 'kidschool' ),
		                                '4' => esc_html__( 'Column Four', 'kidschool' ),
		                                '5' => esc_html__( 'Column Five', 'kidschool' ),
		                            ),
		                            'value' => 3,
		                            'relation' 	=> array(
		                            	'parent'	=> 'carousel',
		                            	'show_when'		=> 'yes'
		                            )
		                        ),		                        
		                        array(
		                            'name' => 'sm_item',
		                            'label' => esc_html__( 'Columns on Tablet device', 'kidschool' ),
		                            'description' => __('Specify number of item that you want to show in the carousel for tablet device 768 -> 991', 'kidschool'),
		                            'type' => 'select',
		                            'options' => array(
		                                '1' => esc_html__( 'Column One', 'kidschool' ),
		                                '2' => esc_html__( 'Column Two', 'kidschool' ),
		                                '3' => esc_html__( 'Column Three', 'kidschool' ),
		                                '4' => esc_html__( 'Column Four', 'kidschool' ),
		                                '5' => esc_html__( 'Column Five', 'kidschool' ),
		                            ),
		                            'value' => 2,
		                            'relation' 	=> array(
		                            	'parent'	=> 'carousel',
		                            	'show_when'		=> 'yes'
		                            )
		                        ),
		                        array(
		                            'name' => 'xs_item',
		                            'label' => esc_html__( 'Columns on mobile', 'kidschool' ),
		                            'description' => __('Specify number of item that you want to show in the carousel for large mobile device 480 -> 767', 'kidschool'),
		                            'type' => 'select',
		                            'options' => array(
		                                '1' => esc_html__( 'Column One', 'kidschool' ),
		                                '2' => esc_html__( 'Column Two', 'kidschool' ),
		                                '3' => esc_html__( 'Column Three', 'kidschool' ),
		                                '4' => esc_html__( 'Column Four', 'kidschool' ),
		                                '5' => esc_html__( 'Column Five', 'kidschool' ),
		                            ),
		                            'value' => 1,
		                            'relation' 	=> array(
		                            	'parent'	=> 'carousel',
		                            	'show_when'		=> 'yes'
		                            )
		                        ),
								array(
								    'name' => 'custom_order',
								    'label' => 'Custom order',
								    'type' => 'toggle',
								    'value' => 'no', 
								    'description' => 'Control Custom Order.',
								),
								array(
								    'name' => 'order',
								    'label' => 'Order',
								    'type' => 'select',
								    'options' => array(
								        'DESC'  => 'Descending',
								        'ASC'  => 'Ascending'
								    ),
								    'value' => 'DESC',
								    'relation'      => array(
								        'parent'    => 'custom_order',
								        'show_when' => 'yes'
								    )
								),
								array(
								    'name' => 'orderby',
								    'label' => 'Order by',
								    'type' => 'select', 
								    'options' => array( 
								        'none'          => 'None',
								        'ID'            => 'ID',
								        'date'          => 'Date',
								        'name'          => 'Name',
								        'title'         => 'Title',
								        'comment_count' => 'Comment count',
								        'meta_value_num'=> 'Meta value Number',
								        'rand'          => 'Random',
								    ),
								    'value' => 'none',
								    'relation'      => array(
								        'parent'    => 'custom_order',
								        'show_when' => 'yes'
								    )
								),
								array(
									'type'			=> 'toggle',
									'label'			=> __( 'Navigation Control', 'kidschool' ),
									'name'			=> 'nav',
									'description'	=> __( 'Display the "Next" and "Prev" buttons.', 'kidschool' ),
									'value'			=> 'yes',
								    'relation' 	=> array(
								    	'parent'	=> 'carousel',
								    	'show_when'		=> 'yes'
								    )
								),
								array(
									'type'			=> 'toggle',
									'label'			=> __( 'Dots Control', 'kidschool' ),
									'name'			=> 'dots',
									'description'	=> __( 'Display the dots', 'kidschool' ),
									'value'			=> 'yes',
								    'relation' 	=> array(
								    	'parent'	=> 'carousel',
								    	'show_when'		=> 'yes'
								    )
								),
								array(
									'type'			=> 'toggle',
									'label'			=> __( 'Auto Play Control', 'kidschool' ),
									'name'			=> 'autoplay',
									'description'	=> __( 'The carousel automatically plays when site loaded.', 'kidschool' ),
									'value'			=> 'no',
								    'relation' 	=> array(
								    	'parent'	=> 'carousel',
								    	'show_when'		=> 'yes'
								    )
								),
								array(
									'type'			=> 'toggle',
									'label'			=> __( 'Loop Control', 'kidschool' ),
									'name'			=> 'loop',
									'description'	=> __( 'Infinity loop. Duplicate last and first items to get loop illusion', 'kidschool' ),
									'value'			=> 'no',
								    'relation' 	=> array(
								    	'parent'	=> 'carousel',
								    	'show_when'		=> 'yes'
								    )
								),
								array(
									'type'			=> 'text',
									'label'			=> __( 'Autoplay Timeout', 'kidschool' ),
									'name'			=> 'autoplaytimeout',
									'description'	=> __( 'Autoplay interval timeout.', 'kidschool' ),
									'value'			=> 5000,
								    'relation' 	=> array(
								    	'parent'	=> 'carousel',
								    	'show_when'		=> 'yes'
								    )
								),							
	            				 array(
	                                'name'        => 'custom_css_class',
	                                'label'       => esc_html__('CSS Class','kidschool'),
	                                'description' => esc_html__('Custom css class for css customisation','kidschool'),
	                                'type'        => 'text'
	                            ),
							), // general
							// 'styling' => array(
			    //                 array(
		     //                		'name'   => 'custom_css',
		     //                		'type'   => 'css',
		     //                		'options' => array(
		     //                			array(
		     //                				'screens' => 'any,1024,999,767,479',
		     //                				'Filter'   => array(
		     //                					array(
		     //                						'property' => 'font-family', 
		     //                						'label'    => esc_html__( 'Font Family', 'kidschool' ),
		     //                						'selector' => '+ .custom-tab li a'
		     //                					),
		     //                					array( 
		     //                						'property' => 'font-size', 
		     //                						'label'    => esc_html__( 'Font Size', 'kidschool' ),
		     //                						'selector' => '+ .custom-tab li a' 
		     //                					),
		                    					
		     //                					array(
		     //                						'property' => 'font-weight', 
		     //                						'label'    => esc_html__( 'Font Weight','kidschool' ), 
		     //                						'selector' => '+ .custom-tab li a'
		     //                					),
		                    					
		     //                					array(
							// 						'property' => 'text-transform', 
							// 						'label'    => esc_html__( 'Text Transform', 'kidschool' ),
							// 						'selector' => '+ .custom-tab li a'
							// 					),
		                    					
							// 					array( 
		     //                					    'property' => 'color', 
		     //                					    'label'    => esc_html__('Color','kidschool'), 
		     //                					    'selector' => '+ .custom-tab li a' 
		     //                					),
		                    					
							// 					array( 
		     //                					    'property' => 'color', 
		     //                					    'label'    => esc_html__('Active Color','kidschool'), 
		     //                					    'selector' => '+ .custom-tab li.active a' 
		     //                					),

		     //                				),
		     //                				'Filter Count'   => array(
		     //                					array(
		     //                						'property' => 'font-family', 
		     //                						'label'    => esc_html__( 'Font Family', 'kidschool' ),
		     //                						'selector' => '+ .count_galleries'
		     //                					),
		     //                					array( 
		     //                						'property' => 'font-size', 
		     //                						'label'    => esc_html__( 'Font Size', 'kidschool' ),
		     //                						'selector' => '+ .count_galleries' 
		     //                					),
		                    					
		     //                					array(
		     //                						'property' => 'font-weight', 
		     //                						'label'    => esc_html__( 'Font Weight','kidschool' ), 
		     //                						'selector' => '+ .count_galleries'
		     //                					),
		                    					
		     //                					array(
							// 						'property' => 'text-transform', 
							// 						'label'    => esc_html__( 'Text Transform', 'kidschool' ),
							// 						'selector' => '+ .count_galleries'
							// 					),
		                    					
							// 					array( 
		     //                					    'property' => 'color', 
		     //                					    'label'    => esc_html__('Color','kidschool'), 
		     //                					    'selector' => '+ .count_galleries' 
		     //                					),
		                    					
							// 					array( 
		     //                					    'property' => 'color', 
		     //                					    'label'    => esc_html__('Active Color','kidschool'), 
		     //                					    'selector' => '+ .custom-tab li.active .count_galleries' 
		     //                					),

		     //                				),
		     //                			)
		     //                		) //End of options
			    //                 )
			    //             ), //End of styling
                            'animate' => array(
								array(
									'name'    => 'animate',
									'type'    => 'animate'
								)
							),//animate
						) //prarams
					)
		        )
			);
		}
	}
}
if( !function_exists ('kidschool_gallery_style_2_shortcode_func')){
	function kidschool_gallery_style_2_shortcode_func( $atts,$content){

		extract($atts);

		//get kc classes
		$kc_classes = apply_filters( 'kc-el-class', $atts );
		$kc_classes[] = $custom_css_class;
		$kc_classes[] = 'kidschool_gallery_style_2';
		$kc_classes = implode(' ', $kc_classes);

		$args = array(
		     'post_type'             => 'gallery',
		     'post_status'           => 'publish',
		     'ignore_sticky_posts'   => 1,
		     'posts_per_page'        => ($per_page == 0) ? -1 : $per_page,
		);

		if( $custom_order == 'yes'){
		    $args['orderby'] = $orderby;
		    $args['order']   = $order;
		}

		// all
		$term_slug_list = array();
		if($category_type == 'all'){
			$terms = get_terms( 'gallery_cat', array(
			    'hide_empty' => true,
			) );

			foreach($terms as $term){
			    $term_slug_list[$term->slug] = $term->slug;
			}
		} elseif($category_type == 'hand_pick' && $select_category){
			$term_slug_list =  explode(',', $select_category);
		}

		if($term_slug_list){
			$args['tax_query'] = array(
				array(
					'taxonomy' => 'gallery_cat',
					'field'    => 'slug',
					'terms'    => $term_slug_list,
				),
			);
		}

		// columns support
		$lg_item    = $columns == '5' ? 'five' : floor(12 / $columns);

		$column_classes = array();
		$column_classes[] = 'col-lg-'. $lg_item . ' col-sm-6 col-xs-12 grid-item mb-30';


		ob_start();
?>

<div class="<?php echo esc_attr( $kc_classes ); ?>">
	<div class="gallery-tab">
		<div class="row">
		
		<?php if($gallery_type == 'tabbed_style'): ?>
		  <!-- Nav tabs -->
			<ul class="menu" role="tablist">

				<?php if($category_type == 'all'): ?>
				<li class="active">
					<a href="#tab-all" data-toggle="tab"><?php echo esc_html__('All', 'kidschool') ?></a>
				</li>
				<?php endif; ?>

	            <?php
	            	$i = 0;
	            	foreach($term_slug_list as $term):
	            		$i++;
	                	$term = get_term_by( 'slug', $term, 'gallery_cat');

	            ?>
	                <li class="<?php echo esc_attr( $category_type != 'all' && $i == 1 ? 'active' : '' ); ?>">
	                	<a href="#tab-<?php echo $term->slug; ?>" data-toggle="tab"><?php echo $term->name; ?> </a>
	                </li>
					
	            <?php endforeach; ?>
			</ul>

				<!-- Tab panes -->
			<div class="tab-content">
				<?php
					$j = 0;
					foreach($term_slug_list as $term):
						$j++;
						$term = get_term_by( 'slug', $term, 'gallery_cat');
				?>
				<div class="tab-pane <?php echo esc_attr( $j == 1 ? 'active' : '' ); ?>" id="tab-<?php echo $term->slug; ?>">

					<?php
					$args['tax_query'] = array(
						array(
							'taxonomy' => 'gallery_cat',
							'field' => 'slug',
							'terms' => $term->slug,
							'include_children' => false
						)
					);

					$wp_query = new WP_Query($args);

					if ( $wp_query->have_posts() ) :
					?>

						<div class="row">
							
							<?php if($carousel == 'yes' ){ echo '<div class="owl-carousel">'; } ?>
						        <?php
						        	$wp_query = new WP_Query($args);

						            while($wp_query->have_posts()) : $wp_query->the_post();
						            	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'large');
						            	$full_image = $image[0];

						                ?>
						                <div class="<?php echo esc_attr( implode(' ', $column_classes) ); ?>">
					        			    <div class="portfolio-img">
					        			    	<?php the_post_thumbnail('550x805-crop'); ?>
					        				    <div class="portfolio-hover">
					        	                    <a class="img-poppu" href="<?php echo esc_attr($full_image); ?>">
					        	                        <i class="icofont icofont-plus"></i>
					        	                    </a>
					        	                </div>
					        	            </div>
						                </div>

						                <?php

						            endwhile;
						         ?>

							<?php if($carousel == 'yes' ){ echo '</div>'; } ?>


						</div>
					<?php endif; ?>

				</div>
				<?php endforeach; ?>

			</div>

		<?php else: ?>

			<?php if($carousel == 'yes' ){ echo '<div class="owl-carousel">'; } ?>
		        <?php
		        	$wp_query = new WP_Query($args);

		            while($wp_query->have_posts()) : $wp_query->the_post();
		            	$image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_id() ), 'large');
		            	$full_image = $image[0];

		                ?>
		                <div class="<?php echo esc_attr( implode(' ', $column_classes) ); ?>">
	        			    <div class="portfolio-img">
	        			    	<?php the_post_thumbnail('550x805-crop'); ?>
	        				    <div class="portfolio-hover">
	        	                    <a class="img-poppu" href="<?php echo esc_attr($full_image); ?>">
	        	                        <i class="icofont icofont-plus"></i>
	        	                    </a>
	        	                </div>
	        	            </div>
		                </div>

		                <?php

		            endwhile;
		         ?>

			<?php if($carousel == 'yes' ){ echo '</div>'; } ?>

		<?php endif; ?>

		</div>
	</div>
</div>

<?php

	if($carousel == 'yes'):

		$autoplay = $autoplay == 'yes' ? 'true' : 'false';
		$nav   	  = $nav == 'yes' ? 'true' : 'false';
		$dots     = $dots == 'yes' ? 'true' : 'false';
		$loop     = $loop == 'yes' ? 'true' : 'false';
		$autoplaytimeout    = $autoplaytimeout;
		$xs_item    = $xs_item ? $xs_item : 1;
		$sm_item    = $sm_item ? $sm_item : 2;
		$md_item    = $md_item ? $md_item : 3;
		$lg_item    = $columns ? $columns : 3;
		?>

	<script>
		(function($){
		if ($('.kc-css-<?php echo $_id; ?> .owl-carousel').length) {
		  $('.kc-css-<?php echo $_id; ?> .owl-carousel').owlCarousel({
		    loop: <?php echo $loop; ?>,
		    margin:0,
		    nav:<?php echo $nav; ?>,
		    dots:<?php echo $dots; ?>,
		    autoplay: <?php echo $autoplay; ?>,
		    navText: [ '<i class="icofont icofont-long-arrow-left"></i>','<i class="icofont icofont-long-arrow-right"></i>' ],
		    autoplayTimeout: <?php echo $autoplaytimeout; ?>,
		    lazyLoad: true,
		    items: 1,
		    responsive:{
		    	0:{
		    	  	items:<?php echo $xs_item; ?>
		    	},
		    	480:{
		    	  	items:2
		    	},
		    	768:{
		    		items:<?php echo $sm_item; ?>
		    	},
		    	992:{
		    		items:<?php echo $md_item; ?>
		    	},
		    	1200:{
		    		items:<?php echo $lg_item; ?>
		    	}
		    }
		  });
		}
	})(jQuery);
	</script>

<?php
	endif; // carousel

	wp_reset_postdata();
	return ob_get_clean();

	}
	add_shortcode('kidschool_gallery_style_2','kidschool_gallery_style_2_shortcode_func');
}