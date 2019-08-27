<?php

	global $kidschool_opt;

	// header widht
	if( isset( $kidschool_opt['kidschool_header_full_width'] ) && $kidschool_opt['kidschool_header_full_width'] ){
		$header_widht = 'container-fluid';
	} else {
		$header_widht = 'container';
	}

	$header_class = '';

	// sticky header
	if ( isset( $kidschool_opt['kidschool_header_sticky'] ) && $kidschool_opt['kidschool_header_sticky'] ) {
		$header_class .= "header-sticky";
	}

?>

<div class="header-area header_style_3 <?php echo esc_attr($header_class) ?>">
	<div class="<?php echo esc_attr( $header_widht ); ?>">
		<div class="row">

			<div class="col-lg-12">
				<div class="primary-nav-wrap desktop-menu">
					<nav>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'header-menu-left',
								'container'      => false,
								'menu_class'    => 'menu_left hidden-xs',
								'fallback_cb'    => 'kidschool_fallback'
							));
						?>
						<ul class="centered_logo">
							<li class="logo">
								<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

									<?php

										if (isset($kidschool_opt['kidschool_main_logo']) && $kidschool_opt['kidschool_main_logo'] =='1' && $kidschool_opt['kidschool_head_logo']['url']):

										    echo '<img src="'. esc_url( $kidschool_opt['kidschool_head_logo']['url']) .'" alt="'. esc_attr(get_bloginfo('name')) .'">';

										elseif (isset($kidschool_opt['kidschool_main_logo']) && $kidschool_opt['kidschool_main_logo'] =='2' && $kidschool_opt['kidschool_logo_text']):

										    echo '<h3>'. esc_html( $kidschool_opt['kidschool_logo_text'] ) . '</h3>';

										else:

										    echo '<h3>'. esc_html( get_bloginfo('name') ) . '</h3>';

										endif;

									?>

								</a>
							</li>
						</ul>
						<?php
							wp_nav_menu(array(
								'theme_location' => 'header-menu-right',
								'container'      => false,
								'menu_class'    => 'menu_right hidden-xs',
								'fallback_cb'    => 'kidschool_fallback'
							));
						?>
					</nav>
				</div>

				<div class="header-menu-wrap logo-left">
					<div class="site-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">

							<?php

								if (isset($kidschool_opt['kidschool_main_logo']) && $kidschool_opt['kidschool_main_logo'] =='1' && $kidschool_opt['kidschool_head_logo']['url']):

								    echo '<img src="'. esc_url( $kidschool_opt['kidschool_head_logo']['url']) .'" alt="'. esc_attr(get_bloginfo('name')) .'">';

								elseif (isset($kidschool_opt['kidschool_main_logo']) && $kidschool_opt['kidschool_main_logo'] =='2' && $kidschool_opt['kidschool_logo_text']):

								    echo '<h3>'. esc_html( $kidschool_opt['kidschool_logo_text'] ) . '</h3>';

								else:

								    echo '<h3>'. esc_html( get_bloginfo('name') ) . '</h3>';

								endif;

							?>

						</a>
					</div>
					<div class="primary-nav-wrap nav-horizontal uppercase nav-effect-1">
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



			<!-- Mobile Menu  -->
			<div class="mobile-menu"></div>
		</div>
	</div>
</div>