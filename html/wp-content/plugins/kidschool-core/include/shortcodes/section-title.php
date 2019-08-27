<?php 
/*
  * WPhash section_title Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register section_title shortcode
  * =======================================================
*/


add_action('init', 'kidschool_section_title_maping_func');
if(!function_exists('kidschool_section_title_maping_func')){
	function kidschool_section_title_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_section_title' => array(
						'name'        => esc_html__('Section Title', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
							'general'	=> array(
								array(
									'type' 			=> 'text',
									'name'		 	=> 'title',
									'label' 		=> esc_html__( 'Section Title', 'kidschool' ),
									'value' 		=> esc_html__( 'Your title here', 'kidschool' ),
								),
								array(
									'type' 			=> 'attach_image',
									'name'		 	=> 'title_bottom_image',
									'label' 		=> esc_html__( 'Title Bottom Image', 'kidschool' ),
									'description' 	=> esc_html__( 'Recommended image size is 175x20px', 'kidschool' ),
									'value' 		=> PLG_URL.'/images/section-title-bg.png',
								),
								array(
									'type' 			=> 'textarea',
									'name'		 	=> 'section_content',
									'label' 		=> esc_html__( 'Short description', 'kidschool' ),
									'description' 	=> esc_html__( 'Section short description below title', 'kidschool' ),
								),
							), // general
							'styling'	=> array(
								array(
									'type' 			=> 'css',
									'name'		 	=> 'custom_css',
									'options' 		=> array(
										array(
											'title'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Text Align', 'kidschool' ),
													'property'	=> 'text-align',
													'selector'	=> '+ .section-title h2',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .section-title h2',
												),
											),//title
											'description'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Text Align', 'kidschool' ),
													'property'	=> 'text-align',
													'selector'	=> '+ p',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ p',
												),
											)//description
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


//[wphash_section_title title="" section_content=""]
if( !function_exists ('wkidschool_section_title_shortcode_func')){
	function wkidschool_section_title_shortcode_func( $atts,$content){

		extract($atts);

		$kc_classes = apply_filters( 'kc-el-class', $atts );
		$kc_classes = implode(' ', $kc_classes);

		$title_bottom_image_url =  $title_bottom_image ? wp_get_attachment_image_src( $title_bottom_image, 'full', false )[0] : '';

		ob_start();
?>

	<style>
		.kc-css-<?php echo $_id; ?> .section-title h2:after {
		    background: url(<?php echo $title_bottom_image_url; ?>);
		}
	</style>

	<div class="<?php echo $kc_classes; ?>">
        <div class="section-title text-center">
            <h2><?php echo $title; ?></h2>
            <p><?php echo $section_content; ?></p>
        </div>
     </div>
<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_section_title','wkidschool_section_title_shortcode_func');
}