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
	<div class="footer-copyright-menu">
	
		<?php wp_nav_menu(array(
			'theme_location' => 'copyright-menu',
			'container'      => false,
		)); ?>
	</div>
</div>