<?php 

   global $kidschool_opt; 
   if( $kidschool_opt['kidschool_header_show']==true ):

   $topbar_widht = $kidschool_opt['kidschool_header_top_width'];
		if( isset( $topbar_widht ) && true == $topbar_widht ){
			$topbar_widht = 'container-fluid';
		}else {
			$topbar_widht = 'container';
	}

?>
	<div class="header-top-area">
		<div class="<?php echo esc_attr( $topbar_widht ); ?>">
			<div class="row">
				<div class="col-md-6 col-sm-6">
				<?php 						
					if( $kidschool_opt['kidschool_left_content_section'] == '1'){
						?>
						<div class="header-social">
							<ul>
							   <?php  
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
						<?php
					}elseif( $kidschool_opt['kidschool_left_content_section'] == '2'){
						?>
						<div class="top-bar-left-menu">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'left-menu',
									'container'      => false,
								));
							?>
						</div>
						<?php
					}elseif( $kidschool_opt['kidschool_left_content_section'] == '4'){
						?>								
						<div class="top-bar-left-content">
							<p>
								<?php if( isset($kidschool_opt['kidschool_left_text_area']) && $kidschool_opt['kidschool_left_text_area']!='' ) {
									echo wp_kses($kidschool_opt['kidschool_left_text_area'], array(
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
										esc_html_e('Lorem ipsum dolor sit amet', 'kidschool');
									}
								?>
							</p>
						</div>								
						<?php
					}elseif( $kidschool_opt['kidschool_left_content_section'] == '5'){
					}else{
						?>
						<div class="header-info">
							<?php if( !empty( $kidschool_opt['kidschool_left_contact_info'] ) ): ?>
								<span><a href="tel:<?php echo esc_html($kidschool_opt['kidschool_left_contact_info'] ); ?>"> <?php echo esc_html($kidschool_opt['kidschool_left_contact_info_text'] ); ?> <?php echo esc_html($kidschool_opt['kidschool_left_contact_info'] ); ?></a></span>
							<?php endif;
								if( !empty($kidschool_opt['kidschool_left_contact_email'] ) ): ?>
								<span class="mail-us"><a href="mailto:<?php echo esc_html($kidschool_opt['kidschool_left_contact_email']); ?>"><?php echo esc_html($kidschool_opt['kidschool_left_contact_email']); ?></a></span>
							<?php endif; ?>

						</div>
					<?php
					}
				?>
				</div> 
				<div class="col-md-6 col-sm-6">
				<?php global $kidschool_opt;
					if( $kidschool_opt['kidschool_right_contactinfo'] == '0'){
						?>

						<div class="header-info text-right">
							<span><a target="_blank" href="<?php echo wp_login_url(); ?>">  Login</a></span>
							<span class="mail-us"><a target="_blank" href="<?php echo wp_registration_url(); ?>">  Register</a></span>
						</div>

						<?php
					}
					elseif( $kidschool_opt['kidschool_right_contactinfo'] == '1'){
						?>
						<div class="header-social text-right">
							<ul>
							   <?php 
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
						<?php
					}elseif( $kidschool_opt['kidschool_right_contactinfo'] == '2'){
						?>
						<div class="top-bar-left-menu text-right">
							<?php 
								wp_nav_menu(array(
									'theme_location' => 'right-menu',
								));
							?>
						</div>
						<?php
					}elseif( $kidschool_opt['kidschool_right_contactinfo'] == '4'){
						?>								
						<div class="top-bar-left-content text-right">
							<p>
								<?php if( isset($kidschool_opt['kidschool_right_text_area']) && $kidschool_opt['kidschool_right_text_area']!='' ) {
									echo wp_kses($kidschool_opt['kidschool_right_text_area'], array(
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
										esc_html_e('Lorem ipsum dolor sit amet', 'kidschool');
									}
								?>
								</p>
						</div>								
						<?php
					}elseif( $kidschool_opt['kidschool_right_contactinfo'] == '5'){
					}else{
						?>
						<div class="header-info text-right">
							<?php if( !empty( $kidschool_opt['kidschool_right_contact_info'] ) ): ?>
								<span><a href="tel:<?php echo esc_html( $kidschool_opt['kidschool_right_contact_info'] ); ?>"> <?php echo esc_html( $kidschool_opt['kidschool_right_contact_info_text'] ); ?> <?php echo esc_html( $kidschool_opt['kidschool_right_contact_info'] ); ?></a></span>
							<?php endif; if( !empty( $kidschool_opt['kidschool_right_contact_email'] ) ): ?>
								<span class="mail-us"><a href="mailto:<?php echo esc_html( $kidschool_opt['kidschool_right_contact_email'] ); ?>" target="_top">  <?php echo esc_html( $kidschool_opt['kidschool_right_contact_email'] ); ?></a></span>
							<?php endif; ?>

						</div>
					<?php
					}
				?>
				</div>
			</div>
		</div>
	</div>
	<?php endif; ?>