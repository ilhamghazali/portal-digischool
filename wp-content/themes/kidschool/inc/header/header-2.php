<?php 

	global $kidschool_opt;

	// header widht
	if( isset( $kidschool_opt['kidschool_header_full_width'] ) && $kidschool_opt['kidschool_header_full_width'] ){
		$header_widht = 'container-fluid';
	} else {
		$header_widht = 'container';
	}

	// sticky header
	$header_class = '';
	if ( isset( $kidschool_opt['kidschool_header_sticky'] ) && $kidschool_opt['kidschool_header_sticky'] ) {
		$header_class .= "header-sticky";
	}

	// transparent header
	if ( isset( $kidschool_opt['kidschool_header_transparent'] ) && $kidschool_opt['kidschool_header_transparent'] ) {
		$header_class .= "header-transparent";
	}

?>
<div class="header-area header-style-2 <?php echo esc_attr( $header_class ); ?>">
	<div class="header-menu-wrap">
		<div class="header-mid hr-style-1">
			<div class="<?php echo esc_attr( $header_widht ); ?>">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="header-mid-inner logo-left-search-right">
							<div class="site-logo">
								<?php 
								if( isset( $kidschool_opt['kidschool_head_logo']['url'])){
								?>

								<a href="<?php echo esc_url( home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name','kidschool')); ?>" rel="home" >
							<?php if ( $kidschool_opt['kidschool_main_logo']=='1'){ ?>
							<img src="<?php  echo esc_url( $kidschool_opt['kidschool_head_logo']['url']); ?>" alt="<?php  echo esc_attr(get_bloginfo('name')); ?>">
								<?php } else{
									 if( $kidschool_opt['kidschool_main_logo']=='2' ){echo esc_html( $kidschool_opt['kidschool_logo_text'] );} 
									}?>
							</a>

								<?php
								}else{ ?> 
								<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php if($kidschool_opt['kidschool_logo_text']){ echo esc_html( $kidschool_opt['kidschool_logo_text'] );} else{ bloginfo( 'name' );
									} ?></a>
								</h3>
								<?php }
								?>
							</div>
							<div class="header-search hidden-xs">
								<form action="<?php echo esc_url(home_url( '/' )); ?>" method="GET">
									<input type="text" name="s" placeholder="<?php echo esc_attr__( 'Search', 'kidschool' ); ?>" />
									<button><i class="fa fa-search"></i></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="header-buttom">
			<div class="<?php echo esc_attr( $header_widht ); ?>">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<div class="sticky_menu_logo">
							<div class="site-logo hidden">
								<?php 
								if( isset( $kidschool_opt['kidschool_head_logo']['url'])){
								?>
								<a href="<?php echo esc_url( home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name','kidschool')); ?>" rel="home" >
							<?php if ( $kidschool_opt['kidschool_main_logo']=='1'){ ?>
							<img src="<?php  echo esc_url( $kidschool_opt['kidschool_head_logo']['url']); ?>" alt="<?php  echo esc_attr(get_bloginfo('name')); ?>">
								<?php } else{
									 if( $kidschool_opt['kidschool_main_logo']=='2' ){echo esc_html( $kidschool_opt['kidschool_logo_text'] );} 
									}?>
							</a>
								<?php
								}else{ ?> 
								<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php if($kidschool_opt['kidschool_logo_text']){ echo esc_html( $kidschool_opt['kidschool_logo_text'] );} else{ bloginfo( 'name' );	} ?></a>
								</h3>
								<?php }
								?>
							</div>
							<div class="primary-nav-wrap nav-horizontal">
								<nav>
									<?php
										wp_nav_menu(array(
											'theme_location' => 'primary',
											'container'      => false,
											'fallback_cb'    => 'kidschool_fallback'
										));
									?>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Menu  -->
		<div class="mobile-menu"></div>
	</div>
</div>