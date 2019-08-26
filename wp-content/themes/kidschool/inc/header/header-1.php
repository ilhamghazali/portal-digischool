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
<div class="header-area header-style-1 <?php echo esc_attr( $kidschool_header_sticky_class ); ?> <?php echo esc_attr( $kidschool_header_transparent_class ); ?>  ">
	<div class="<?php echo esc_attr( $header_widht ); ?>">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				<?php 
					$kidschool_logo_position = $kidschool_opt['kidschool_logo_position'];
					$kidschool_logo_position_value = '';
					if (isset( $kidschool_logo_position )) {
						$kidschool_logo_position_value = $kidschool_logo_position;
					}
				?>

				<div class="header-menu-wrap logo-<?php echo esc_attr( $kidschool_logo_position_value ); ?> ">
					<div class="site-logo">
						<?php 
							if($kidschool_opt['kidschool_head_logo']['url'] ){
						?>
							<a href="<?php echo esc_url( home_url('/')); ?>" title="<?php echo esc_attr( get_bloginfo('name','kidschool')); ?>" rel="home" >
							<?php if ( $kidschool_opt['kidschool_main_logo']=='1'){ ?>
							<img src="<?php  echo esc_url( $kidschool_opt['kidschool_head_logo']['url']); ?>" alt="<?php  echo get_bloginfo('name'); ?>">
								<?php } else{
									 if( $kidschool_opt['kidschool_main_logo']=='2' ){echo esc_html( $kidschool_opt['kidschool_logo_text'] );} 
									}?>
							</a>
						<?php
							}else{ ?> 
								<h3><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php if($kidschool_opt['kidschool_logo_text']){ echo esc_html( $kidschool_opt['kidschool_logo_text'] );} else{ bloginfo( 'name' );

									} ?></a></h3>
								<?php 
									$description = get_bloginfo( 'description', 'display' );
									if ( $description || is_customize_preview() ) : ?>
									<p class="site-description"><?php echo esc_html($description ); /* WPCS: xss ok. */ ?></p>
								<?php
									endif;
							}
						?>
					</div>
					<div class="primary-nav-wrap nav-horizontal nav-effect-1">
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
		<!-- Mobile Menu  -->
		<div class="mobile-menu"></div>

	</div>
</div>

<div class="modal fade mt-5" id="loginmodal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-sm right" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="exampleModalLongTitle">Login Sebagai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
		  <div class="kc-col-container">
			  <div class="row">
			<div class="col-sm-5 text-center">
				<div class="kc-elm kc-button-main">
					<a href="http://teacher.indischool.id" title="Login Guru">
						<span class="creative_title">Guru</span>	</a>
				</div>
				  </div>
				  <div class="col-sm-2 ">
					 Atau
				  </div>
				  <div class="col-sm-5 text-center">
				<div class="kc-elm kc-button-main">
					<a href="http://student.indischool.id" title="Login Siswa">
						<i class="fa fa-chalkboard-teacher"></i><span class="creative_title">Siswa</span>	</a>
			</div>
		  </div>
		  </div>
        	
      </div>
    </div>
  </div>
</div>
