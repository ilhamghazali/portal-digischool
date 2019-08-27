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
	<div class="footer-social">
		<ul>
			<?php global $kidschool_opt;
				foreach($kidschool_opt['kidschool_social_icons'] as $key=>$value ) { 
				 if($value!=''){
					if($key=='vimeo'){
					 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-vimeo-square"></i></a></li>';
					} else {
					 echo '<li><a class="'.esc_attr($key).' social-icon" href="'.esc_url($value).'" title="'.ucwords(esc_attr($key)).'" target="_blank"><i class="fa fa-'.esc_attr($key).'"></i></a></li>';
					}
				   }
				} 
			?>
		</ul>
	</div>
</div>