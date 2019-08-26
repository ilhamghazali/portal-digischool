<?php 
/*
  * classes Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register classes shortcode
  * =======================================================
*/

add_action('init', 'kidschool_classes_maping_func');
if(!function_exists('kidschool_classes_maping_func')){
	function kidschool_classes_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_classes' => array(
						'name'        => esc_html__('KidSchool Classes', 'kidschool'),
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
                                )
                            ),//general
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
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),
                                                    'property'  => 'font-family',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),
                                                    'property'  => 'font-size',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),
                                                    'property'  => 'font-weight',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),
                                                    'property'  => 'font-style',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Display', 'kidschool' ),
                                                    'property'  => 'display',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),
                                                    'property'  => 'text-align',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),
                                                    'property'  => 'text-transform',
                                                    'selector'  => '+ .class-content h3',
                                                ),
                                            ),//title
                                            'Bottom Text'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Color', 'kidschool' ),
                                                    'property'  => 'color',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),
                                                    'property'  => 'font-family',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),
                                                    'property'  => 'font-size',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),
                                                    'property'  => 'font-weight',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),
                                                    'property'  => 'font-style',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),
                                                    'property'  => 'text-align',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),
                                                    'property'  => 'text-transform',
                                                    'selector'  => '+ .class-content li',
                                                ),
                                            ),//Bottom Text\
                                            'Bottom Number'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Color', 'kidschool' ),
                                                    'property'  => 'color',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Family', 'kidschool' ),
                                                    'property'  => 'font-family',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Size', 'kidschool' ),
                                                    'property'  => 'font-size',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Weight', 'kidschool' ),
                                                    'property'  => 'font-weight',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Font Style', 'kidschool' ),
                                                    'property'  => 'font-style',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Align', 'kidschool' ),
                                                    'property'  => 'text-align',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                                array(
                                                    'label'     => esc_html__( 'Text Transform', 'kidschool' ),
                                                    'property'  => 'text-transform',
                                                    'selector'  => '+ .class-content li span',
                                                ),
                                            ),//Bottom Text
                                            'Info Box'       => array(
                                                array(
                                                    'label'     => esc_html__( 'Box Bg Color', 'kidschool' ),
                                                    'property'  => 'background-color',
                                                    'selector'  => '+ .class-content',
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



if( !function_exists ('kidschool_classes_shortcode_func')){
	function kidschool_classes_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'item_limit'  					=> '',
			'filter_menu_color'  			=> '',
			'filter_menu_active_color'  	=> '',
			'filter_menu_active_bg_color'  	=> '',
		), $atts);

		extract($shortcode);


        //get kc classes
        $kc_classes = apply_filters( 'kc-el-class', $atts );
        $kc_classes = implode(' ', $kc_classes);

        // class query
        $class = new WP_Query(array(
            'post_type'         => 'class',
            'posts_per_page'    => $item_limit == 0 ? -1 : $item_limit,
        ));

		ob_start();
?>

<!-- Start of classes Area -->

<div class="<?php echo $kc_classes; ?>">
    <div class="row">

        <?php
            if($class->have_posts()): while($class->have_posts()) :$class->the_post();

                $title_below_info = get_post_meta(get_the_id(),'_kidschool_title_below_info',true);
                $full_image_url = wp_get_attachment_url( get_post_thumbnail_id() );
        ?>
        <div class="col-md-4 col-sm-6 col-xs-12">
            <div class="single-class text-center pb-35">
                <div class="class-img">
                    <?php the_post_thumbnail(); ?>
                    <div class="event-hover">
                        <a class="img-poppu" href="<?php echo $full_image_url; ?>"><i class="icofont icofont-link-alt"></i></a>
                    </div>
                </div>
                <div class="class-content">
                    <h3><?php the_title(); ?></h3>
                    <ul>
                        <?php
                            if($title_below_info){
                                foreach($title_below_info as $item){
                                    echo '<li>'.$item['item_text'].'<span>'.$item['item_number'].'</span></li>';
                                }
                            }
                        ?>
                    </ul>
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

<!-- End of classes Area -->

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_classes','kidschool_classes_shortcode_func');
}