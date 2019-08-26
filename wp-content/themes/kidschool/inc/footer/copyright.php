<?php 
	global $kidschool_opt;
	$column = '';
	if($kidschool_opt['kidschool_copyright_column']== '1'){
		$column = 12 .' text-center';
	}elseif($kidschool_opt['kidschool_copyright_column']== '3'){
		$column = 4;
	}else{
		$column = 6;
	}
?>

<div class="col-sm-<?php echo esc_attr( $column ); ?> col-xs-12">
	<div class="copyright-text">
		<p><?php 
			global $kidschool_opt;
			if(isset( $kidschool_opt['kidschool_copyright'] ) && $kidschool_opt['kidschool_copyright']!=='' ){
				echo wp_kses( $kidschool_opt['kidschool_copyright'] , array(
					'a' => array(
						'href' => array(),
						'title' => array()
					),
					'br' => array(),
					'em' => array(),
					'strong' => array(),
					'img' => array(
						'src' => array(),
						'alt' => array()
					),
				));
			}else{  
				esc_html_e('Copyright', 'kidschool'); ?>&copy; <?php echo date("Y").' '.get_bloginfo('name');  esc_html_e(' All Rights Reserved.', 'kidschool' ); 
			}
		?></p>
	</div>
</div>

