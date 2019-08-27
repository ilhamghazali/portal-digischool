<?php

$kidschool_page_titlebar = get_post_meta( get_the_id(),'_kidschool_page_titlebar_enable',true);
if ( is_home() ) : 
global $kidschool_opt;
if( $kidschool_opt['kidschool_bolg_title_bar']==true || $kidschool_opt['kidschool_bolg_title_bar']==''):
?>
<div class="post-breadcrumb-banner-area bg-img-2 bg-opacity">
	<div class="container">
		<div class="row">
			<div class="breadcrumb-text">
				<h1><?php kidschool_blog_header(); ?></h1>
				<?php 
					if( !empty($kidschool_opt['kidschool_bolg_subtitle']) ):
				?>
				<h3><?php echo  esc_html( $kidschool_opt['kidschool_bolg_subtitle'] ); ?></h3>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>
<?php endif; elseif(!is_front_page() && is_page() )  : 
	if( $kidschool_page_titlebar == 'yes' || $kidschool_page_titlebar == '' ):
	 get_template_part('/inc/includefile/pagetitle');
	endif;
//archive page
 elseif( is_archive() ) : 
get_template_part('/inc/includefile/pagetitle');
	
 elseif(is_single()) : 
if( $kidschool_page_titlebar == 'yes' || $kidschool_page_titlebar == '' ): 
get_template_part('/inc/includefile/pagetitle');
endif;
	//404 page --->
 elseif(is_404()) : 
get_template_part('/inc/includefile/pagetitle');
	//search page--->
 elseif(is_search()) : 
get_template_part('/inc/includefile/pagetitle');
 else : 
 endif;