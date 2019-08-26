<?php 
/*
  * WPhash activiti Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register activiti shortcode
  * =======================================================
*/

add_action('init', 'kidschool_activiti_maping_func');
if(!function_exists('kidschool_activiti_maping_func')){
	function kidschool_activiti_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_activiti' => array(
						'name'        => esc_html__('Kidschool Activitie', 'kidschool'),
						'description' => esc_html__('', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
							'general'	=> array(
								array(
									'type' 			=> 'attach_image',
									'name'		 	=> 'image',
									'label' 		=> esc_html__( 'Image', 'kidschool' ),
									'description' 	=> esc_html__( 'Prefered image size is: 70x70px', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'title',
									'label' 		=> esc_html__( 'Title', 'kidschool' ),
									'description' 	=> esc_html__( 'Short description below title', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'title_link',
									'label' 		=> esc_html__( 'Title Link', 'kidschool' ),
								),
								array(
									'type' 			=> 'checkbox',
									'name'		 	=> 'target',
									'label' 		=> esc_html__( 'Open link in new tab', 'kidschool' ),
									'options'		=> array(
										'_blank'	=> 'Open link in new tab'
									),
									'value' => '_blank',
								),
								array(
									'type' 			=> 'textarea',
									'name'		 	=> 'short_description',
									'label' 		=> esc_html__( 'Short Description', 'kidschool' ),
								),
							), // general
							'styling'	=> array(
								array(
									'type' 			=> 'css',
									'name'		 	=> 'custom_css',
									'options' 		=> array(
										array(
											'image'		=> array(
												array(
													'label'		=> esc_html__( 'Align', 'kidschool' ),
													'property'	=> 'text-align',
													'selector'	=> '+ .activity-icon',
												)
											),//iamge
											'title'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Display', 'kidschool' ),
													'property'	=> 'display',
													'selector'	=> '+ .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Text Align', 'kidschool' ),
													'property'	=> 'text-align',
													'selector'	=> '+ .activity-content h3',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .activity-content h3 a',
												),
											),//title
											'description'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Text Align', 'kidschool' ),
													'property'	=> 'text-align',
													'selector'	=> '+ .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .activity-content p',
												),
											),//description
											'box'		=> array(
												array(
													'label'		=> esc_html__( 'Box Bg Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-activity',
												),
												array(
													'label'		=> esc_html__( 'Box Hover Bg Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-activity:hover',
												),
												array(
													'label'		=> esc_html__( 'Box Hover Title Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-activity:hover .activity-content h3 a',
												),
												array(
													'label'		=> esc_html__( 'Box Hover Description Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-activity:hover .activity-content p',
												),
												array(
													'label'		=> esc_html__( 'Box Shadow', 'kidschool' ),
													'property'	=> 'box-shadow',
													'selector'	=> '+ .single-activity:hover .activity-content p',
												),
											)//box
										)
									)//options
								)
							) //styling
						) //prarams
					)
		        )
			);

		}
	}
}


//[kidschool_activiti image="" title="" link="" short_description=""]
if( !function_exists ('kidschool_activiti_shortcode_func')){
	function kidschool_activiti_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'image'  				=> '',
			'title'  				=> '',
			'title_link'  			=> '',
			'target'  				=> '',
			'short_description'  	=> '',
		), $atts);


		extract($shortcode);

		//get kc classes
		$kc_classes = apply_filters( 'kc-el-class', $atts );
		$kc_classes = implode(' ', $kc_classes);

		ob_start();

?>

<div class="<?php echo $kc_classes; ?>">
	<div class="single-activity mb-30 text-center">
	    <div class="activity-icon">
	        <?php echo  wp_get_attachment_image( $image ); ?>
	    </div>
	    <div class="activity-content">
	    	<?php
	    		$target = $target ? 'target="'.$target.'"' : '';
	    	?>
	        <h3><a href="<?php echo $title_link; ?>" <?php echo $target; ?>><?php echo $title; ?></a></h3>
	        <p><?php echo $short_description; ?></p>
	    </div>
	</div> 
</div>

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_activiti','kidschool_activiti_shortcode_func');
}