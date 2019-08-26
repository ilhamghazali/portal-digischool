<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kidschool
 */

get_header(); 
get_template_part('/inc/includefile/header-page-title');
	
	
	global $kidschool_opt;
	$kidschool_blog_single = '' ;
	
	if( isset ( $kidschool_opt ['kidschool_single_pos'] ) ){
		$kidschool_blog_single = $kidschool_opt ['kidschool_single_pos'];
	} 
?>
	<div class="blog-story-area pt-80">
		<div class="container">
			<div class="row">
				<?php	if( $kidschool_blog_single == 'full'){ ?>
				<!-- single blog full width start -->
				<div class="col-md-10 col-md-offset-1">
					<?php get_template_part('/template-parts/content-single'); ?>
				</div>
				<!--single blog full width end -->
				<?php }elseif( $kidschool_blog_single == 'left'){ ?>
				<!-- single blog left sidebar start -->
				<div class="col-lg-3 col-md-3">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-lg-9 col-md-9">
					<?php get_template_part('/template-parts/content-single'); ?>
				</div>
				<!-- single blog left sidebar end -->
				<?php }else{ ?>
				<!-- single blog right sidebar start -->
				<div class="col-lg-8 col-md-8">
					<?php get_template_part('/template-parts/content-single'); ?>
				</div>
				<div class="col-lg-4 col-md-4">
					<?php get_sidebar(); ?>
				</div>
				<!--single blog right sidebar end -->
				<?php }	?>
			</div>
		</div>
	</div>
<?php
get_footer();
