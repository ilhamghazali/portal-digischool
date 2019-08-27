<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kidschool
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>
	<?php

		global $kidschool_opt;

		$kidschool_layout_width = $kidschool_opt['kidschool_layout_width'];
		
		if ( isset( $kidschool_layout_width ) ) {
			$kidschool_layout_width_value = $kidschool_layout_width;
		} else {
			$kidschool_layout_width_value = $kidschool_layout_width;
		};

		if( isset( $kidschool_layout_width_value ) && 'boxed-layout' == $kidschool_layout_width_value){
			$kidschool_layout_width_body_class = 'boxed-layout-active';
		}else{
			$kidschool_layout_width_body_class = 'wide-layout-active';
		}

	?>
<body <?php body_class(); ?>>

	<div id="page" class="site site-wrapper <?php echo esc_attr( $kidschool_layout_width_value ); ?>">
	<div id="kidschool">

		<header>
			
			<?php

				get_template_part('/inc/header/header-top-bar');

				$onepage = get_post_meta(get_the_id(),'_kidschool_page_menu_style',true);
				$theme_header_layout = isset($kidschool_opt ['kidschool_header_layout']) ? $kidschool_opt ['kidschool_header_layout']: '';

				$header_layout = isset($_GET['header']) ? $_GET['header'] : $theme_header_layout;

				if( !empty( $onepage == 'one_page' ) || !empty($header_layout == 'onepage' )){
					get_template_part('/inc/header/header-one-page');
				} elseif ( !empty($header_layout == '3')){
					get_template_part('/inc/header/header-3');
				} elseif ( !empty($header_layout == '2')){
					get_template_part('/inc/header/header-2');
				} else {
					get_template_part('/inc/header/header-1');
				}
			?>
			
		</header>
	<div id="content" class="site-content">
