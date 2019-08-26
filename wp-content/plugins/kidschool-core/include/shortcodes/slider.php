<?php 
/*
  * slider Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register slider shortcode
  * =======================================================
*/

add_action('init', 'kidschool_slider_maping_func');
if(!function_exists('kidschool_slider_maping_func')){
	function kidschool_slider_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_slider' => array(
						'name'        => esc_html__('Kidschool Slider', 'kidschool'),
						'description' => esc_html__('', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
                            'general'   => array(
                            	array(
                            		'type' => 'select',
                            		'label' => esc_html__('Select Content Align', 'kidschool'),
                            		'name' => 'content_align',
                            		'options'	=> array(
                            			'left'	=> __('Left', 'kidschool'),
                            			'center'	=> __('Center', 'kidschool'),
                            			'right'	=> __('Right', 'kidschool'),
                            		),
                            	),
								array(
									'type'			=> 'group',
									'label'			=> __('Slides', 'kidschool'),
									'name'			=> 'slides',
									'description'   => esc_html__('', 'kidschool'),
									'options'		=> array('add_text' => __('Add new Slide', 'kidschool')),

									// default values when create new group
									'value' => base64_encode( json_encode( array(
										
									))),

									// you can use all param type to register child params
									'params' => array(
										array(
											'type' => 'text',
											'label' => esc_html__('Title 1', 'kidschool'),
											'name' => 'title_1',
										),
										array(
											'type' => 'text',
											'label' => esc_html__('Title 2', 'kidschool'),
											'name' => 'title_2',
										),
										array(
											'type' => 'text',
											'label' => esc_html__('Title 3', 'kidschool'),
											'name' => 'title_3',
										),
										array(
											'type' => 'text',
											'label' => esc_html__('Button Text', 'kidschool'),
											'name' => 'button_text',
										),
										array(
											'type' => 'text',
											'label' => esc_html__('Button Link', 'kidschool'),
											'name' => 'button_link',
										),
										array(
											'type' => 'attach_image',
											'label' => esc_html__('Image', 'kidschool'),
											'name' => 'image',
										),
									)
								),
							),//general
                            'Slider Background'   => array(
	                            array(
	                                'type'          => 'css',
	                                'name'          => 'slider_custom-css',
	                                'label'     	=> esc_html__( 'Slider Background', 'kidschool' ),
	                                'options'       => array(
	                                    array(
	                                        'title'     => array(
	                                            array(
	                                                'label'     => esc_html__( 'Background', 'kidschool' ),
	                                                'property'  => 'background',
	                                                'selector'  => '+ .slider-container',
	                                            ),
	                                        ),
	                                    )
	                                )//options
	                            ),
                            ),//Slider BG
	                        'animate' => array(
								array(
									'name'    => 'animate',
									'type'    => 'animate'
								)
							), //End of animate
						)//prarams
					)
		        )
			);

		}
	}
}



if( !function_exists ('kidschool_slider_shortcode_func')){
	function kidschool_slider_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'title_1'  					=> '',
			'title_2'  					=> '',
			'title_3'  					=> '',
			'button_text'  				=> '',
			'image'  					=> '',
			'slides'  					=> '',
			'content_align'  		    => 'left',
		), $atts);

		extract($shortcode);

		//get kc classes
		$kc_classes = apply_filters( 'kc-el-class', $atts );
		$kc_classes = implode(' ', $kc_classes);

		ob_start();
?>

<!-- Start Slider Area-->
<div class="<?php echo $kc_classes; ?>">
	<div class="slider-container">
		<div class="kid-owl-slider"> 
			<?php foreach($slides as $slide): ?>
		    <!-- Start Slingle Slide -->
		    <div class="single-slide hs-item">
		        <!-- Start Slider Content -->
		        <div class="slider-content-area">   
		            <div class="container">
		                <div class="row">
		                    <div class="col-md-12">  
		                        <div class="slider-content dis-table">  
		                            <div class="dis-table-cell hs-content slide-content text-<?php echo esc_attr($content_align) ?>">
		                                <h3><?php echo $slide->title_1; ?></h3>
		                                <h1><?php echo $slide->title_2; ?></h1>
		                                <h2><?php echo $slide->title_3; ?></h2>

		                                <?php if($slide->button_link): ?>
		                                	<a href="<?php echo $slide->button_link; ?>" class="btn"><?php echo $slide->button_text; ?></a>
		                               <?php endif; ?>
		                            </div>
		                        </div> 
		                        <div class="slider-img hs-content hidden-xs">
		                        	<?php
		                        		$image_url = wp_get_attachment_image_src( $slide->image, 'full')[0];
		                        		if($image_url):
		                        	?>
		                            	<img src="<?php echo $image_url; ?>" alt="slider">
		                            <?php endif; ?>
		                        </div>
		                    </div>
		                </div>
		            </div>
		        </div>
		        <!-- Start Slider Content -->
		    </div>
		    <!-- End Single Slide -->
		    <?php endforeach; ?>			   					
		</div>
	</div>
</div>
<!-- End Slider Area -->

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_slider','kidschool_slider_shortcode_func');
}