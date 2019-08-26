<?php 
	/**
	 * The template for displaying searchform.
	 *
	 *
	 * @link https://codex.wordpress.org/Template_Hierarchy
	 *
	 * @package kidschool
	 */

?>
	<form id="search" action="<?php echo esc_url(home_url( '/' )); ?>" method="GET">
		<input type="text"  name="s"  placeholder="<?php echo esc_attr_x( 'Search', 'placeholder', 'kidschool' ); ?>" />
		<button type="submit"><?php echo esc_html__('Search','kidschool'); ?></button>
	</form>
