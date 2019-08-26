<?php

global $kidschool_opt;
		$kidschool_banner_bg_color = $kidschool_banner_bg_repeat = $kidschool_banner_bg_size = $kidschool_banner_bg_attacement = $kidschool_banner_bg_position = $kidschool_banner_bg_image = "";	

	if ( isset( $kidschool_opt['kidschool_breadcrumbs_bg_optins'] ) ) {
		$kidschool_banner_bg_options = "";
		$kidschool_banner_bg_options = $kidschool_opt['kidschool_breadcrumbs_bg_optins'];	
	}

	if(isset($kidschool_banner_bg_options['background-color'])){
		$kidschool_banner_bg_color = $kidschool_banner_bg_options['background-color'];
	}

	if(isset($kidschool_banner_bg_options['background-repeat'])){
		$kidschool_banner_bg_repeat = $kidschool_banner_bg_options['background-repeat'];
	}

	if(isset($kidschool_banner_bg_options['background-size'])){
		$kidschool_banner_bg_size = $kidschool_banner_bg_options['background-size'];
	}

	if(isset($kidschool_banner_bg_options['background-attachment'])){
		$kidschool_banner_bg_attacement = $kidschool_banner_bg_options['background-attachment'];
	}

	if(isset($kidschool_banner_bg_options['background-position'])){
		$kidschool_banner_bg_position = $kidschool_banner_bg_options['background-position'];
	}
	if(isset($kidschool_banner_bg_options['background-image'])){
		$kidschool_banner_bg_image = $kidschool_banner_bg_options['background-image'];
	}

	$wphas_id = get_the_ID();
	$kidschool_banner_img = get_post_meta($wphas_id,'_kidschool_banner_img',true);
	$kidschool_banner_background = get_post_meta($wphas_id,'_kidschool_banner_color',true);

?>


<?php

  //show bar and content
  if( '1' == $kidschool_opt['kidschool_page_title_bar'] ){ ?>
	 <!-- breadcrumbs start -->
	<section class="breadcrumbs-area breadcrumbs-bg" style="background-image: url(<?php if( $kidschool_banner_img ){echo esc_url( $kidschool_banner_img ); }else{ echo esc_url( $kidschool_banner_bg_image ); } ?>) ; background-color:<?php if( $kidschool_banner_background ){ echo esc_attr( $kidschool_banner_background ); }else{ echo esc_attr( $kidschool_banner_bg_color ); } ?>;  background-repeat: <?php echo esc_attr( $kidschool_banner_bg_repeat ); ?>; background-size: <?php echo esc_attr( $kidschool_banner_bg_size ); ?>; background-attachment: <?php echo esc_attr( $kidschool_banner_bg_attacement ); ?>; background-position: <?php echo esc_attr( $kidschool_banner_bg_position ); ?>">
		<div class="<?php if( $kidschool_opt['kidschool_breadcrumbs_full'] == true ){ echo 'container-fluid'; }else{ echo 'container'; }?>">
			<div class="row">
				<div class="col-md-12">
				<?php 
					$breadcrumbs_title_position_cmb = get_post_meta($wphas_id,'_kidschool_breadcrumbs_position',true);
					$breadcrumbs_title_position_redux = $kidschool_opt['kidschool_breadcrumbs_text'];

					if(!empty( $breadcrumbs_title_position_cmb )){
							$breadcrumbs_title_position = $breadcrumbs_title_position_cmb;
					}else{
						if( isset( $breadcrumbs_title_position_redux ) ){
						   $breadcrumbs_title_position = $breadcrumbs_title_position_redux;
						}			
					} 
				?>

					<div class="breadcrumbs breadcrumbs-title-<?php echo esc_attr( $breadcrumbs_title_position ); ?>">
						<?php 
						if( $kidschool_opt['kidschool_breadcrumbs_area']==true ): ?>
						<!---breadcrumbs title start-->
						<h2 class="page-title"><?php wp_title(''); ?></h2>
						<!---breadcrumbs title end -->
						<?php endif; ?>
							
						<div class="page-title-bar">
							<?php 
								if( $kidschool_opt['kidschool_breadcrumbs_content_blog'] == '2' ){
								//breadcrumbs function
									kidschool_breadcrumbs();
								}elseif($kidschool_opt['kidschool_breadcrumbs_content_blog'] == '3'){
									?>
									<!---breadcrumbs serch start-->
									<div class="page-title-search-box">
										<form action="<?php echo esc_url(home_url( '/' )); ?>" method="GET">
											<input type="text" placeholder="<?php echo esc_attr__('Search', 'kidschool' ); ?>" name="s">
											<button type="submit"> <i class="fa fa-search"></i> </button>
										</form>
									</div>
									<!---breadcrumbs serch end-->		
									<?php
								} else{
									
								}
							?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- breadcrumbs end -->
	<?php
	//show content only
 }elseif( '2' == $kidschool_opt['kidschool_page_title_bar'] ) {


 }else { ?>
	<div class="breadcrumbs-area breadcrumbs-bg breadcrumbs-area-default">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="breadcrumbs breadcrumbs-title-center">
						<h2 class="page-title"><?php wp_title(''); ?></h2>
						<div class="page-title-bar">
							<?php kidschool_breadcrumbs(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div> 
<?php }
