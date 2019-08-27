<?php 

	global $kidschool_opt;

	$header_widht = $kidschool_opt['kidschool_header_full_width'];
	if( isset( $header_widht ) && true == $header_widht ){
		$header_widht = 'container-fluid';
	}else {
		$header_widht = 'container';
	}


	$kidschool_header_sticky_class = "";
	$kidschool_header_sticky = $kidschool_opt['kidschool_header_sticky'];
	if ( isset( $kidschool_header_sticky ) && true == $kidschool_header_sticky ) {
	$kidschool_header_sticky_class = "header-sticky";
	}

	$kidschool_header_transparent_class = "";
	$kidschool_header_transparent = $kidschool_opt['kidschool_header_transparent'];
	if ( isset( $kidschool_header_transparent ) && true == $kidschool_header_transparent ) {
	$kidschool_header_transparent_class = "header-transparent";
	}


?>
<div class="header-area <?php echo esc_attr( $kidschool_header_sticky_class ); ?> <?php echo esc_attr( $kidschool_header_transparent_class ); ?>">
	<div class="<?php echo esc_attr( $header_widht ); ?>">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<?php 
					$kidschool_logo_position = $kidschool_opt['kidschool_logo_position'];

					if (isset( $kidschool_logo_position )) {
						$kidschool_logo_position_value = $kidschool_logo_position;
					}
				?>
				<div class="header-menu-wrap logo-<?php echo esc_attr( $kidschool_logo_position_value ); ?> ">
					<div class="site-logo">
						<?php 
							if( isset( $kidschool_opt['kidschool_head_logo']['url'])){
						?>
							<a href="<?php echo esc_url( home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name')); ?>" rel="home" >
							<?php if ( $kidschool_opt['kidschool_main_logo']=='1'){ ?>
							<img src="<?php  echo esc_url( $kidschool_opt['kidschool_head_logo']['url']); ?>" alt="<?php  echo get_bloginfo('name'); ?>">
								<?php } else{
									 if( $kidschool_opt['kidschool_main_logo']=='2' ){echo esc_html( $kidschool_opt['kidschool_logo_text'] );} 
									}?>
							</a>
						<?php
							}else{ ?> 
								<h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php echo esc_html( $kidschool_opt['kidschool_logo_text'] ); ?></a></h1>
							<?php }
						?>
					</div>
					<div class="primary-nav-wrap primary-nav-one-page nav-horizontal uppercase nav-effect-1">
						<nav>
							<?php
								wp_nav_menu(array(
									'theme_location' => 'onepage',
									'container'      => false,
								));
							?>
						</nav>
					</div>
				</div>
			</div>
		</div>
		<!-- Mobile Menu  -->
		<div class="mobile-menu"></div>
	</div>
</div>
			