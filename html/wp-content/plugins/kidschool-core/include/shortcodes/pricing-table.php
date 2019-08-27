<?php 
/*
  * Pricing Shortcode 
  * Author: Hastech
  * Author URI: http://hastech company
  * Version: 1.0.0
  *
  *
  * =======================================================
  *    Register pricing shortcode
  * =======================================================
*/

add_action('init', 'kidschool_pricing_maping_func');
if(!function_exists('kidschool_pricing_maping_func')){
	function kidschool_pricing_maping_func(){
		if(function_exists('kc_add_map')){

			kc_add_map(
	 			array(
		        	'wphash_pricing' => array(
						'name'        => esc_html__('Kidschool Pricing', 'kidschool'),
						'description' => esc_html__('', 'kidschool'),
						'icon'        => 'fa-header',
						'category'    => 'KidSchool',
						'params'      => array(
							'general' => array(
								array(
									'type' 			=> 'toggle',
									'name'		 	=> 'highlight',
									'label' 		=> esc_html__( 'Highlight This', 'kidschool' ),
									'description' 	=> esc_html__( 'Toggle the button to YES to make it highlighted', 'kidschool' ),
									'value' 		=> esc_html__( 'no', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'title',
									'label' 		=> esc_html__( 'Title', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( 'Text Title', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'price',
									'label' 		=> esc_html__( 'Price', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( '270', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'currency',
									'label' 		=> esc_html__( 'Currency', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( '$', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'per',
									'label' 		=> esc_html__( 'Per', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( 'MONTH', 'kidschool' ),
								),
								array(
									'type' 			=> 'textarea',
									'name'		 	=> 'attributes',
									'label' 		=> esc_html__( 'Attributes', 'kidschool' ),
									'description' 	=> esc_html__( 'Place one item  per line', 'kidschool' ),
								),
								array(
									'type' 			=> 'toggle',
									'name'		 	=> 'show_button',
									'label' 		=> esc_html__( 'Show Button', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value'			=> 'yes',
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'button_text',
									'label' 		=> esc_html__( 'Button Text', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( 'CONTACT US', 'kidschool' ),
								),
								array(
									'type' 			=> 'text',
									'name'		 	=> 'button_link',
									'label' 		=> esc_html__( 'Button Link', 'kidschool' ),
									'description' 	=> esc_html__( '', 'kidschool' ),
									'value' 		=> esc_html__( '#', 'kidschool' ),
								),
							),//general
							'styling'	=> array(
								array(
									'type' 			=> 'css',
									'name'		 	=> 'custom_css',
									'options' 		=> array(
										array(
											'Title'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table h3',
												),
												array(
													'label'		=> esc_html__( 'Hover Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table:hover .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Hover BG Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table:hover .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .single-table h3',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .single-table h3',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .single-table h3',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .single-table h3',
												),

											),//title
											'Price'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table h2',
												),
												array(
													'label'		=> esc_html__( 'BG Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table h2',
												),

											),//price
											'List Items'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table .table-body ul li',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .single-table .table-body ul li',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .single-table .table-body ul li',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .single-table .table-body ul li',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ .single-table .table-body ul li',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .single-table .table-body ul li',
												),

											),//List Items
											'button'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table .table-body a',
												),
												array(
													'label'		=> esc_html__( 'BG Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table .table-body a',
												),
												array(
													'label'		=> esc_html__( 'Hover Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table .table-body a:hover',
												),
												array(
													'label'		=> esc_html__( 'Hover BG Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table .table-body a:hover',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .single-table .table-body a',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .single-table .table-body a',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .single-table .table-body a',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .single-table .table-body a',
												),
											),//button
											'Highlight'		=> array(
												array(
													'label'		=> esc_html__( 'Color', 'kidschool' ),
													'property'	=> 'color',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'BG Color', 'kidschool' ),
													'property'	=> 'background-color',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Font Family', 'kidschool' ),
													'property'	=> 'font-family',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Font Size', 'kidschool' ),
													'property'	=> 'font-size',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Font Weight', 'kidschool' ),
													'property'	=> 'font-weight',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Font Style', 'kidschool' ),
													'property'	=> 'font-style',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
												array(
													'label'		=> esc_html__( 'Text Transform', 'kidschool' ),
													'property'	=> 'text-transform',
													'selector'	=> '+ .single-table.active .table-title h3',
												),
											)//Highlight
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


//[wphash_pricing highlight="" title="" price="" currency="" per="" attributes="" button_text="" button_link=""]
if( !function_exists ('kidschool_pricing_shortcode_func')){
	function kidschool_pricing_shortcode_func( $atts,$content){
		
		$shortcode = shortcode_atts( array(
			'highlight'  		=> '',
			'title'  			=> '',
			'price'  			=> '',
			'currency'  		=> '',
			'per'  				=> '',
			'attributes'  		=> '',
			'show_button'  		=> '',
			'button_text'  		=> '',
			'button_link'  		=> '',
		), $atts);

		extract($shortcode);

		//get kc classes
		$kc_classes = apply_filters( 'kc-el-class', $atts );
		$kc_classes = implode(' ', $kc_classes);

		//var_dump($attributes);

		ob_start();

?>

<!-- Start of Pricing Area -->
<div class="<?php echo $kc_classes; ?> text-center">
    <div class="single-table <?php echo ($highlight == 'yes') ? 'active' : ''; ?>">
        <div class="table-title">
            <h3><?php echo $title; ?></h3>
            <h2><span><?php echo $currency; ?></span><?php echo $price; ?><span><?php echo $per; ?></span></h2>
        </div>
        <div class="table-body">
        	<?php
        		$arr = explode(PHP_EOL, $attributes);
        		if(!empty($arr)):
        	?>

            <ul>
            	<?php foreach($arr as $item){
            		echo "<li>$item</li>";
            	} ?>
            </ul>

            <?php
            	endif;

            	if($show_button){
            		echo '<a target="_blank" href="'.$button_link.'">'.$button_text.'</a>';
            	}
            ?>
        </div>
    </div>
</div>
<!-- End of Pricing Area -->

<?php 

		return ob_get_clean();
			
		}

	add_shortcode('wphash_pricing','kidschool_pricing_shortcode_func');
}