<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kidschool
 */

	global $kidschool_opt;
	$kidschool_blog_layout_opts = '' ;
		if( isset ( $kidschool_opt ['kidschool_sidebarblog_pos'] ) ){
			$kidschool_blog_layout_opts = $kidschool_opt ['kidschool_sidebarblog_pos'];
		}
		if( $kidschool_blog_layout_opts == 'single'){
			if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post();
		?>
		<!---full width-->
		<div class="col-md-10 col-md-offset-1">
			<?php get_template_part( 'template-parts/blog','layout' ); ?>
		</div>
		<?php	
		endwhile; /* End Loop */
		endif;
		}elseif( $kidschool_blog_layout_opts == 'twocolumn'){
	
		if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post();
	
		?>
		<!---2 column width-->
		<div class="col-lg-6 col-md-6 col-sm-6">
			<?php get_template_part( 'template-parts/blog','layout' ); ?>
		</div>
		<?php endwhile;/* End Loop */
			endif; 
		?>
		<div class="col-md-12 text-center">
			<?php kidschool_blog_pagination(); ?>
		</div>
		<?php } elseif( $kidschool_blog_layout_opts == 'threecolumn' ){
		if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) : the_post(); ?>
		<!---3 column width-->
		<div class="col-lg-4 col-md-4 col-sm-6">
			<?php get_template_part( 'template-parts/blog','layout' ); ?>
		</div>
		<?php  endwhile;/* End Loop */
		endif;
		?>
		<div class="col-md-12 text-center">
			<?php kidschool_blog_pagination(); ?>
		</div>
		<?php } elseif( $kidschool_blog_layout_opts == 'left'){ ?>
		<!---left sidebar-->
		<div class="col-lg-3 col-md-3 mb-30">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-lg-9 col-md-9">
		<?php
			if ( have_posts() ) :
			/* Start the Loop */
			while ( have_posts() ) : the_post();
	
			get_template_part( 'template-parts/blog','layout' );
		
			endwhile;/* End Loop */
			endif;
		?>
			<?php kidschool_blog_pagination(); ?>
		</div>
		<?php } else{ ?>
			<!---right sidebar-->
			<div class="col-lg-9 col-md-9">
			<?php
				if ( have_posts() ) :
				/* Start the Loop */
				while ( have_posts() ) : the_post();

				 get_template_part( 'template-parts/blog','layout' );
				endwhile;/* End Loop */
				endif;
			?>
				<?php kidschool_blog_pagination(); ?>
			</div>
			<div class="col-lg-3 col-md-3 mb-30">
				<?php get_sidebar(); ?>
			</div>
	<?php
	} ?>



