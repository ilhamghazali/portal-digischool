<?php 
/*
  * event_style_2 Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register event_style_2 shortcode
  * =======================================================
*/

add_action('init', 'kidschool_event_style_2_maping_func');
if(!function_exists('kidschool_event_style_2_maping_func')){
	function kidschool_event_style_2_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_event_style_2' => array(
						'name'        => esc_html__('Kidschool Event Style 2', 'kidschool'),
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
                                )
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
                                            ),//date
                                            'box'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Background', 'kidschool' ),
                                                    'property'  => 'background-color',
                                                    'selector'  => '+ .event-content',
                                                    'value'     => '#f1f1f1',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Padding', 'kidschool' ),
                                                    'property'  => 'padding',
                                                    'selector'  => '+ .event-content',
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



if( !function_exists ('kidschool_event_style_2_shortcode_func')){
	function kidschool_event_style_2_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'item_limit'  					=> '',
		), $atts);

		extract($shortcode);

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
    <div class="events-area single">

    <?php
        $i = 1;
        if($event->have_posts()): while($event->have_posts()) :$event->the_post();
            $i++;

            $event_date = get_post_meta(get_the_id(),'_EventEndDate', true);
            $full_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(get_the_id() ), 'full' )[0];
    ?>
    <!-- Start of events Area -->
    
        <div class="single-event ml-120 mr-120 mb-30 fix">

            <?php if($i % 2 == 0): ?>

                <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="event-img">
                        <?php the_post_thumbnail(array(370,270)); ?>
                        <div class="event-hover">
                            <a class="img-poppu" href="<?php echo $full_image_url; ?>"><i class="icofont icofont-link-alt"></i></a>
                        </div>
                    </div>
                </div> 
                <div class="col-md-7 col-sm-12 col-xs-12">  
                    <div class="single-event-owl">        
                        <div class="event-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php echo tribe_get_start_date(get_the_id(),false, 'j F'); ?></span></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 60, ' ' ); ?></p>
                        </div>
                    </div>    
                </div>

            <?php else: ?>

                <div class="col-md-7 col-sm-12 col-xs-12">
                    <div class="single-event-owl">        
                        <div class="event-content">
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><span><?php echo tribe_get_start_date(get_the_id(),false, 'j F'); ?></span></h3>
                            <p><?php echo wp_trim_words( get_the_content(), 60, ' ' ); ?></p>
                        </div>
                    </div> 
                </div> 
                <div class="col-md-5 col-sm-12 col-xs-12">  
                    <div class="event-img">
                        <?php the_post_thumbnail(array(370,270)); ?>
                        <div class="event-hover">
                            <a class="img-poppu" href="<?php echo $full_image_url; ?>"><i class="icofont icofont-link-alt"></i></a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        </div>
    <!-- End of events Area -->
    <?php
        endwhile;
        endif;
        wp_reset_query();
    ?>

    </div>
</div>

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_event_style_2','kidschool_event_style_2_shortcode_func');
}