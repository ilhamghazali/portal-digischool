<?php 

/*

  * events Shortcode 

  * Author: Hastech

  * Author URI: http://hastech company

  * Version: 1.0.0

  *

  *

  * =======================================================

  *    Register events shortcode

  * =======================================================

*/



add_action('init', 'kidschool_events_maping_func');

if(!function_exists('kidschool_events_maping_func')){

	function kidschool_events_maping_func(){

		if(function_exists('kc_add_map')){



			kc_add_map(

	 			array(

		        	'wphash_events' => array(

						'name'        => esc_html__('Kidschool Events', 'kidschool'),

						'description' => esc_html__('', 'kidschool'),

						'icon'        => 'fa-header',

						'category'    => 'KidSchool',

                        'params'      => array(

                            'general'   => array(

                                array(

                                    'name' => 'item_limit',

                                    'label' => 'Number Of Event Displayed',

                                    'description' => __('Specify number of Event that you want to show. Set 0 to get all Event', 'kidschool'),

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

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Hover Color', 'kidschool' ),

                                                    'property'  => 'color',

                                                    'selector'  => '+ .event-content h3 a:hover',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),

                                                    'property'  => 'font-family',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),

                                                    'property'  => 'font-size',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),

                                                    'property'  => 'font-weight',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),

                                                    'property'  => 'font-style',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),

                                                    'property'  => 'text-align',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Line Height', 'kidschool' ),

                                                    'property'  => 'line-height',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),

                                                    'property'  => 'text-transform',

                                                    'selector'  => '+ .event-content h3 a',

                                                ),

                                            ),//title

                                            'description'       => array(

                                                array(

                                                    'label'     => esc_html__( 'Color', 'kidschool' ),

                                                    'property'  => 'color',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),

                                                    'property'  => 'font-family',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),

                                                    'property'  => 'font-size',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),

                                                    'property'  => 'font-weight',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),

                                                    'property'  => 'font-style',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Line Height', 'kidschool' ),

                                                    'property'  => 'line-height',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),

                                                    'property'  => 'text-transform',

                                                    'selector'  => '+ .event-content p',

                                                ),

                                            ),//designation

                                            'date'       => array(

                                                array(

                                                    'label'     => esc_html__( 'Color', 'kidschool' ),

                                                    'property'  => 'color',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),

                                                    'property'  => 'font-family',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),

                                                    'property'  => 'font-size',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),

                                                    'property'  => 'font-weight',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),

                                                    'property'  => 'font-style',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                                array(

                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),

                                                    'property'  => 'text-transform',

                                                    'selector'  => '+ .event-content h3 span',

                                                ),

                                            )//box

                                        )

                                    )//options

                                )

                            ) //styling

                        )//params

					)

		        )

			);



		}

	}

}







if( !function_exists ('kidschool_events_shortcode_func')){

	function kidschool_events_shortcode_func( $atts,$content){

		

		$shortcode = shortcode_atts( array(

            'item_limit'                    => '',

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



        wp_localize_script( 'kidschool-main-js', 'event_owl_data', $owl_data);



        // event query

        $event = new WP_Query(array(

            'post_type'         => 'tribe_events',

            'posts_per_page'    => $item_limit == 0 ? -1 : $item_limit,

        ));



        // get kc classes

        $kc_classes = apply_filters( 'kc-el-class', $atts );

        $kc_classes = implode(' ', $kc_classes);



		ob_start();

?>

<div class="<?php echo $kc_classes; ?>">

    <div class="row our-event-area">

	

		<div class="event-owl">



    <?php

        if($event->have_posts()): while($event->have_posts()) :$event->the_post();

            $event_date = get_post_meta(get_the_id(),'_EventStartDate', true);

    ?>

    <div class="col-xs-12 col-md-3">

        <div class="single-event">

            <div class="event-img">

                <?php the_post_thumbnail('wphash_teacher_img'); ?>

                <div class="event-hover">

                    <a href="<?php the_permalink(); ?>" target="_blank"><i class="icofont icofont-link-alt"></i></a>

                </div>

            </div>

            <div class="event-content">

                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?> </a><span><?php echo tribe_get_start_date(null,false, 'd M'); ?></span></h3>

                <p><?php echo wp_trim_words( get_the_content(), 20, ' ' ); ?></p>

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



	add_shortcode('wphash_events','kidschool_events_shortcode_func');

}