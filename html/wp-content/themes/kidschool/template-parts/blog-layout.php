<?php

/**

 * Template part for displaying posts

 *

 * @link https://codex.wordpress.org/Template_Hierarchy

 *

 * @package kidschool

 */

 $image = wp_get_attachment_image_src(get_post_thumbnail_id(get_the_id()),'kidschool_blog_img',true);

?>



	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<div class="single-blog mb-40">

		<?php if(has_post_thumbnail()): ?>

		<div class="bolg-img">

			<a href="<?php echo esc_url( get_the_permalink() ); ?>"><img src="<?php echo esc_url( $image[0] ); ?>" alt="<?php echo esc_attr__('Blog Image','kidschool');?>" /></a>

		</div>

		<?php endif; ?>

		<div class="blog-text">

			<h2><a href="<?php echo esc_url(get_the_permalink()); ?>"><?php the_title(); ?></a></h2>

			<div class="blog-date">

				<span><i class="fa fa-calendar"></i> <?php echo get_the_time(get_option('date_format')); ?></span>

				<span><i class="fa fa-folder-o"></i> <?php the_author_posts_link(); ?></span>

				<span><i class="fa fa-comment"></i> <?php comments_popup_link(esc_html__('0','kidschool'),esc_html__('1','kidschool'),' ',esc_html__('Comment off','kidschool') );?> </span>



			</div>

			<p> <?php the_excerpt();		

					wp_link_pages( array(

						'before'      => '<div class="pagination"><span class="page-links-title">' . esc_html__( 'Pages:', 'kidschool' ) . '</span>',

						'after'       => '</div>',

						'pagelink'    => '<span class="screen-reader-text">' . esc_html__( 'Page', 'kidschool' ) . ' </span>%',

					) );

			 ?></p>

			<a href="<?php echo esc_url(get_the_permalink()); ?>"><?php kidschool_read_more(); ?></a>

		</div>

	</div>

</article><!-- #post-## -->

