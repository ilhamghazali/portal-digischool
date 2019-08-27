<?php
/**
 * Template Name: Left sidebar
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kidschool
 */

get_header();
	get_template_part('/inc/includefile/header-page-title');
?>
	<div class="page-area ptb-80">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<?php get_sidebar(); ?>
				</div>
				<div class="col-md-9">
					<?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div><!-- #primary -->
	</div><!-- #primary -->
<?php
get_footer();