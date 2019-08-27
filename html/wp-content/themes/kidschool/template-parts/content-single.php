<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package kidschool
 */


 while ( have_posts() ) : the_post();

?>

	<div class="blog-story">

		<?php if( has_post_thumbnail() ): ?>

		<div class="blog-img-2">

			<?php the_post_thumbnail( 'kidschool_blog_img'); ?>

		</div>

		<?php endif; ?>


		<div class="story-hbtitle">

			<?php
				the_content( sprintf(
					/* translators: %s: Name of current post. */
					wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'kidschool' ), array( 'span' => array( 'class' => array() ) ) ),
					the_title( '<span class="screen-reader-text">"', '"</span>', false )
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'kidschool' ),
					'after'  => '</div>',
				) );
			?>

		</div>

		<div class="meta-info">

			<span class="meta-item"><i class="fa fa-user" aria-hidden="true"></i><?php esc_html_e('By ','kidschool'); ?><?php the_author_posts_link(); ?> </span>

			<span> <i class="fa fa-comment"></i> <?php comments_popup_link( esc_html__('NO Comment','kidschool'), esc_html__('1 Comment','kidschool'), esc_html__('% Comments','kidschool'), ' ', esc_html__('Comments off','kidschool')) ?></span>

			<?php								

				if(has_tag()):

			?>

			<span class="meta-item"><i class="fa fa-tags" aria-hidden="true"></i> <?php the_tags('',' , ' ,' ' ); ?></span>

			<?php endif; ?>

			<span class="meta-item"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo get_the_time(get_option('date_format')); ?> </span>

			

		</div>

		<div class="contact-form">

			<?php 

				if ( comments_open() || get_comments_number() ) :

					comments_template();

				endif;

			?>

		</div>

	</div>

	<?php

		endwhile; // End of the loop.

	?>