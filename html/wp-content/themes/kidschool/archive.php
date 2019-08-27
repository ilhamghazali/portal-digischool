<?php
/**
 * The template for displaying archive pages
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package kidschool
 */

get_header();
	get_template_part('inc/includefile/header-page-title');

 ?>

	<div class="our-blog-area pt-80 pb-60">
		<div class="container">
			<div class="row">
				<?php
					if ( have_posts() ) : ?>
					<div class="col-lg-12 col-md-12">
						<header class="page-header">
							<?php
								the_archive_title( '<h1 class="page-title">', '</h1>' );
								the_archive_description( '<div class="archive-description">', '</div>' );
							?>
						</header><!-- .page-header -->
					</div>
					<?php
						get_template_part( 'template-parts/content', get_post_format() );
					else :
					get_template_part( 'template-parts/content', 'none' );
					endif; ?>
			</div><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
