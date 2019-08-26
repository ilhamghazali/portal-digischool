<?php 
/*
  * WPhash gallery Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register gallery shortcode
  * =======================================================
*/

add_action('init', 'kidschool_gallery_maping_func');
if(!function_exists('kidschool_gallery_maping_func')){
	function kidschool_gallery_maping_func(){
		if(function_exists('kc_add_map')){

            $cat_list_arr = array();
            $gallery_terms = get_terms( 'gallery_cat', array(
                'hide_empty' => true,
            ) );
            foreach($gallery_terms as $term){
                $cat_list_arr[$term->term_id] = $term->name;
            }

			kc_add_map(
	 			array(
		        	'wphash_gallery' => array(
						'name'        => esc_html__('Kidschool Gallery', 'kidschool'),
						'description' => esc_html__('', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
                        'params'      => array(
                            array(
                                'name' => 'item_limit',
                                'label' => 'Number Of Gallery Image Displayed',
                                'description' => __('Specify number of Gallery Image that you want to show. Set 0 to get all Gallery Images ', 'kidschool'),
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
                                'name' => 'exclude_category',
                                'label' => 'Exclude Category',
                                'type' => 'multiple',
                                'options' => $cat_list_arr,
                            ),
                            array(
                                'name' => 'filter_menu_color',
                                'label' => 'Filter Menu Color',
                                'type' => 'color_picker',
                                'value' => '#666666',
                                'admin_label' => true,
                                'description' => __('Choose your color', 'kidschool')
                            ),
                            array(
                                'name' => 'filter_menu_active_color',
                                'label' => 'Filter Menu Active Color',
                                'type' => 'color_picker',
                                'value' => '#008c99',
                                'admin_label' => true,
                                'description' => __('Choose your color', 'kidschool')
                            ),
                            array(
                                'name' => 'filter_menu_active_bg_color',
                                'label' => 'Filter Menu Active Bg Color',
                                'type' => 'color_picker',
                                'value' => '',
                                'admin_label' => true,
                                'description' => __('Choose your color', 'kidschool')
                            ),
                        )// Params
					)
		        )
			);

		}
	}
}



if( !function_exists ('kidschool_gallery_shortcode_func')){
	function kidschool_gallery_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'item_limit'  					=> '',
			'filter_menu_color'  			=> '',
			'filter_menu_active_color'  	=> '',
            'filter_menu_active_bg_color'   => '',
			'exclude_category'  	=> '',
		), $atts);

		extract($shortcode);

        // gallery query
        $args = array(
            'post_type'         => 'gallery',
            'posts_per_page'    => $item_limit == 0 ? -1 : $item_limit,
        );


        if($exclude_category){
           $args['tax_query'] = array(
                'relation' => 'AND',
                array(
                    'taxonomy' => 'gallery_cat',
                    'field'    => 'term_id',
                    'terms'    => array( $exclude_category ),
                    'operator' => 'NOT IN',
                )
            );
        }

        // get all categories
        $cats = get_terms(array(
            'taxonomy'  => 'gallery_cat',
            'hide_empty' => true,
            'exclude'   => $exclude_category
        ));

        $portfolio = new WP_Query($args);
		ob_start();

?>

<!--Start of gallery Area-->
<div class="project-area">
	<div class="portfolio-menu mb-40 text-center">
        <button class="active" data-filter="*">all</button>

        <?php foreach($cats as $cat): ?>
           <button class="filter" data-filter=".<?php echo $cat->slug; ?>"><?php echo $cat->name; ?></button>
        <?php endforeach; ?>
	</div>

    <div class="row">
        <div class="grid">

        <?php if($portfolio->have_posts()): while($portfolio->have_posts()) :$portfolio->the_post();

            $item_classes = '';
            $item_cats = get_the_terms(get_the_id(), 'gallery_cat');

            if($item_cats){
                foreach($item_cats as $item_cat) {
                        $item_classes .= $item_cat->slug . ' ';
                }
            }

            $full_image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'full',true)[0];

        ?>

		<div class="col-md-3 col-sm-3 col-xs-12 grid-item  <?php echo $item_classes; ?>">
		    <div class="portfolio-img">
			    <?php the_post_thumbnail('full'); ?>
                <div class="portfolio-hover">
                    <a class="img-poppu" href="<?php echo $full_image; ?>">
                        <i class="icofont icofont-plus"></i>
                    </a>
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
<!-- End of gallery Area -->

<style type="text/css">
    .portfolio-menu button{
        color:<?php echo $filter_menu_color; ?>;
    }
    .portfolio-menu button.active{
        color:<?php echo $filter_menu_active_color; ?>;
        background-color:<?php echo $filter_menu_active_bg_color; ?>;
    }
</style>

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_gallery','kidschool_gallery_shortcode_func');
}