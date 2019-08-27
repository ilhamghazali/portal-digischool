<?php 
/*
  * testimonial Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register testimonial shortcode
  * =======================================================
*/

add_action('init', 'kidschool_testimonial_maping_func');
if(!function_exists('kidschool_testimonial_maping_func')){
	function kidschool_testimonial_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_testimonial' => array(
						'name'        => esc_html__('KidSchool Testimonial', 'kidschool'),
						'description' => esc_html__('', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
							array(
								'type' => 'text',
								'label' => esc_html__('Testimonial Title', 'kidschool'),
								'name' => 'testimonial_title',
								'admin_label' => true,
							),
							array(
								'type'			=> 'group',
								'label'			=> __('Testimonials', 'kidschool'),
								'name'			=> 'testimonials',
								'description'   => esc_html__('', 'kidschool'),
								'options'		=> array('add_text' => __('Add new Testimonial', 'kidschool')),

								// default values when create new group
								'value' => base64_encode( json_encode( array(
									
								))),

								// you can use all param type to register child params
								'params' => array(
									array(
										'type' => 'text',
										'label' => esc_html__('Name', 'kidschool'),
										'name' => 'name',
										'admin_label' => true,
									),
									array(
										'type' => 'textarea',
										'label' => esc_html__('Testimonial', 'kidschool'),
										'name' => 'Testimonial',
										'admin_label' => true,
									),
								)
							)
						)//prarams
					)
		        )
			);

		}
	}
}



if( !function_exists ('kidschool_testimonial_shortcode_func')){
	function kidschool_testimonial_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'testimonial_title'     => '',
			'testimonials'  		=> '',
		), $atts);

		extract($shortcode);

		ob_start();

?>

<!-- Start of testimonial Area -->
<div class="testimonial-area pt-88 pb-85  text-center">
    <div class="container">
        <div class="row">
            <div class="testimonial-owl">

            <?php foreach($testimonials as $testimonial): ?>
                <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0">
                    <div class="single-testimonial">
                        <h2><?php echo $testimonial_title; ?></h2>
                        <p><?php echo $testimonial->Testimonial; ?></p>
                        <h4><?php echo $testimonial->name; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
            </div>    
        </div>
    </div>
</div>

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_testimonial','kidschool_testimonial_shortcode_func');
}