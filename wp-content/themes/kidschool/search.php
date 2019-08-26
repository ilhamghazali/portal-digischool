<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package kidschool
 */
get_header(); 
	get_template_part('inc/includefile/header-page-title');
?>
	<div class="our-blog-area">
		<div class="container">
			<div class="row">
					<?php
					if ( have_posts() ) : ?>
						<div class="col-md-12">
							<header class="page-header">
								<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'kidschool' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
							</header><!-- .page-header -->
						</div>
						<?php
						/* Start the Loop */
							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/content', get_post_format() );

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif; ?>
			</div><!-- #row -->
		</div><!-- #container -->
	</div><!-- #primary -->

<?php
get_footer();
