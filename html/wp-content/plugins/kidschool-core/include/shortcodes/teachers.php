<?php 
/*
  * teachers Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register teachers shortcode
  * =======================================================
*/

add_action('init', 'kidschool_teachers_maping_func');
if(!function_exists('kidschool_teachers_maping_func')){
	function kidschool_teachers_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_teachers' => array(
						'name'        => esc_html__('Kidschool Teachers', 'kidschool'),
						'description' => esc_html__('Title Section', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
                            'general'   => array(
                                array(
                                    'name' => 'item_limit',
                                    'label' => 'Number Of Teacher Displayed',
                                    'description' => __('Specify number of Teacher that you want to show. Set 0 to get all Teacher', 'kidschool'),
                                    'type' => 'number_slider',
                                    'value' => 6,
                                    'options' => array(
                                        'min' => 0,
                                        'max' => 24,
                                        'show_input' => true
                                    ),
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'default_carousel_item',
                                    'label' => 'Number of items',
                                    'description' => __('Specify number of Event that you want to show in the carousel', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 3,
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'small_mobile_item',
                                    'label' => 'Number of items on small mobile device',
                                    'description' => __('Specify number of Event that you want to show in the carousel for small mobile device < 480', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 1,
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'large_mobile_item',
                                    'label' => 'Number of items on large mobile device',
                                    'description' => __('Specify number of Event that you want to show in the carousel for large mobile device 480 -> 767', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 2,
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'tablet_item',
                                    'label' => 'Number of items on Tablet device',
                                    'description' => __('Specify number of Event that you want to show in the carousel for tablet device 768 -> 991', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 3,
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'normal_desktop_item',
                                    'label' => 'Number of items on normal desktop',
                                    'description' => __('Specify number of Event that you want to show in the carousel for normal desktop 992 -> 1199', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 3,
                                    'admin_label' => true,
                                ),
                                array(
                                    'name' => 'medium_desktop_item',
                                    'label' => 'Number of items on medium desktop',
                                    'description' => __('Specify number of Event that you want to show in the carousel for medium desktop', 'kidschool'),
                                    'type' => 'text',
                                    'value' => 3,
                                    'admin_label' => true,
                                ),
                            ),
                            'styling'   => array(
                                array(
                                    'type'          => 'css',
                                    'name'          => 'custom_css',
                                    'options'       => array(
                                        array(
                                            'title'     => array(
                                                array(
                                                    'label'     => esc_html__( 'Color', 'kidschool' ),
                                                    'property'  => 'color',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),
                                                    'property'  => 'font-family',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),
                                                    'property'  => 'font-size',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),
                                                    'property'  => 'font-weight',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),
                                                    'property'  => 'font-style',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),
                                                    'property'  => 'text-align',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),
                                                    'property'  => 'text-transform',
                                                    'selector'  => '+ .teacher-content h3',
                                                ),
                                            ),//title
                                            'designation'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Color', 'kidschool' ),
                                                    'property'  => 'color',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),
                                                    'property'  => 'font-family',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),
                                                    'property'  => 'font-size',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),
                                                    'property'  => 'font-weight',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),
                                                    'property'  => 'font-style',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),
                                                    'property'  => 'text-align',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),
                                                    'property'  => 'text-transform',
                                                    'selector'  => '+ .teacher-content p',
                                                ),
                                            ),//designation
                                            'Teacher Info Box'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Box Bg Color', 'kidschool' ),
                                                    'property'  => 'background-color',
                                                    'selector'  => '+ .teacher-content',
                                                ),
                                            )//box
                                        )
                                    )//options
                                )
                            ) //styling
                        )//prarams
					)
		        )
			);

		}
	}
}



if( !function_exists ('kidschool_teachers_shortcode_func')){
	function kidschool_teachers_shortcode_func( $atts,$content){
		// enqueue owl carouesel js and css
        wp_enqueue_script( 'owl-carousel' );
        wp_enqueue_style( 'owl-theme' );
        wp_enqueue_style( 'owl-carousel' );

        $shortcode = shortcode_atts( array(
            'item_limit'            => '',
            'default_carousel_item'         => '',
            'small_mobile_item'             => '',
            'large_mobile_item'             => '',
            'tablet_item'                   => '',
            'normal_desktop_item'           => '',
            'medium_desktop_item'           => '',
        ), $atts);


        extract($shortcode);
		
        // send owl options data to main.js file
        $owl_data = array();
        $owl_data['default_carousel_item']  = $default_carousel_item;
        $owl_data['small_mobile_item']      = $small_mobile_item;
        $owl_data['large_mobile_item']      = $large_mobile_item;
        $owl_data['tablet_item']            = $tablet_item;
        $owl_data['normal_desktop_item']    = $normal_desktop_item;
        $owl_data['medium_desktop_item']    = $medium_desktop_item;

        wp_localize_script( 'kidschool-main-js', 'teacher_owl_data', $owl_data);

        // get kc classes
        $kc_classes = apply_filters( 'kc-el-class', $atts );
        $kc_classes = implode(' ', $kc_classes);

        // owl carousel options
        $owl_option = array(
            "items" => 4,
            "speed" => 450,
            "navigation" => 'no',
            "pagination" => 'no',
            "autoheight" => 'no',
            "autoplay" => 'yes',
            "tablet" => 3,
            "mobile" => 1
        );
        
        $owl_option = strtolower( json_encode( $owl_option ) );

        // teacher query
        $teacher = new WP_Query(array(
            'post_type'         => 'teacher',
            'posts_per_page'    => $item_limit == 0 ? -1 : $item_limit,
        ));

		ob_start();
?>

<div id="section-<?php echo $atts['_id']; ?>" class="<?php echo $kc_classes; ?> text-center">
    
     <div class="row">
		<div class="teacher-owl">

    <?php
        if($teacher->have_posts()): while($teacher->have_posts()) :$teacher->the_post();

            // get post meta
            $dessignation = get_post_meta( get_the_id(), '_kidschool_designation', true );
            $facebook = get_post_meta( get_the_id(), '_kidschool_facebook', true );
            $twitter = get_post_meta( get_the_id(), '_kidschool_twitter', true );
            $pinterest = get_post_meta( get_the_id(), '_kidschool_pinterest', true );
            $google_plus = get_post_meta( get_the_id(), '_kidschool_google_plus', true );
    ?>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="single-teacher mb-30">
                <div class="teacher-img">
                    <?php the_post_thumbnail('wphash_teacher_img'); ?>
                    <div class="teacher-content">
                        <h3><?php the_title(); ?></h3>
                        <p><?php echo $dessignation; ?></p>
                        <div class="teacher-hover">
                            <ul>
                                <?php
                                    if($facebook)
                                        echo '<li><a target="_blank" href="'.$facebook.'"><i class="icofont icofont-social-facebook"></i></a></li>';

                                    if($google_plus)
                                        echo '<li><a target="_blank" href="'.$google_plus.'"><i class="icofont icofont-social-google-plus"></i></a></li>';

                                    if($pinterest)
                                        echo '<li><a target="_blank" href="'.$pinterest.'"><i class="icofont icofont-social-pinterest"></i></a></li>';

                                    if($twitter)
                                        echo '<li><a target="_blank" href="'.$twitter.'"><i class="icofont icofont-social-twitter"></i></a></li>';
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php
            endwhile;
            endif;
            wp_reset_query();
        ?>
        
        </div>
    </div>    
</div>

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_teachers','kidschool_teachers_shortcode_func');
}