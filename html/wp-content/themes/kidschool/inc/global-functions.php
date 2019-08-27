<?php 

 //Blog Header

	function kidschool_blog_header(){ 

		global $kidschool_opt;

		if (isset( $kidschool_opt['kidschool_blog_text'] )){

			echo esc_html($kidschool_opt['kidschool_blog_text']);

		}

		else{

			esc_html_e('Blog', 'kidschool');

		}

	}

	

	

 

  /*

 * =======================================================

 *    Register Post Excerpt Function   

 * =======================================================

 */

	function kidschool_post_excerpt(){

		global $kidschool_opt;

		if(isset ($kidschool_opt['kidschool_excerpt_length'])){

			kidschool_read_more_text( $kidschool_opt['kidschool_excerpt_length'] );

		}else{

			kidschool_read_more_text(29);

		}

	}

  /*=====Register blog read more Function====*/



	function kidschool_read_more(){

		global $kidschool_opt;

		if(isset($kidschool_opt)){ echo esc_html($kidschool_opt['kidschool_readmore_text']); } else { esc_html_e('Read more', 'kidschool');}	

	}

	

	/*=====footer area ====*/

	function kidschool_footer_area(){

		global $kidschool_opt;

		

		if( $kidschool_opt['kidschool_footer_widget'] == true || $kidschool_opt['kidschool_footer_widget'] == ''):
			if(is_active_sidebar('kidschool-footer-1') || is_active_sidebar('kidschool-footer-2') || is_active_sidebar('kidschool-footer-3') || is_active_sidebar('kidschool-footer-4')):

		?>

		<div class="footer-top-area">

			<div class="<?php if( $kidschool_opt['kidschool_footer_widget_width']==true ){ echo esc_attr('container-fluid');}else{ echo esc_attr( 'container' );} ?>">

				<div class="row">

					<?php 



						 $footer_widget_column = $kidschool_opt['kidschool_footer_layoutcolumns'];



						if( $footer_widget_column ){

							$footer_widget_column = $footer_widget_column;

						}else{

							$footer_widget_column = 4;

						}

						$footer_sidebar_count= $footer_widget_column;  

						

						if( 0 != $footer_sidebar_count ) {  

						if( '' == $footer_sidebar_count ) $footer_sidebar_count = $footer_widget_column;

						$footer_sidebar_class = floor( 12/$footer_sidebar_count ); 

						

						for( $footer = 1; $footer <= $footer_sidebar_count; $footer++ ) { 

						 if ( is_active_sidebar('kidschool-footer-' . $footer) ) : ?>	

					<div class="col-sm-6 col-md-<?php echo esc_attr( $footer_sidebar_class ); ?>  col-xs-12 ">



						<?php dynamic_sidebar('kidschool-footer-' . $footer); ?>

					</div>

						<?php endif; } } ?>

				</div>

			</div>

		</div>

		

		<?php

		

		endif;
		endif;

	}

	

	/*====footer copyright text area====*/

	

	function kidschool_copyright_text(){

		global $kidschool_opt;

		

		

		if( $kidschool_opt['kidschool_footer_bottom_show'] ==true ){

		?>

		

		<div class="footer-bottom">

			<div class="<?php if( $kidschool_opt['kidschool_footer_copyright_width']==true ){ echo esc_attr('container-fluid');}else{ echo esc_attr( 'container' );} ?>">

				<div class="copyright">

					<div class="row">

						<?php 				

							$layout = $kidschool_opt['kidschool_footer']['enabled'];

							if ($layout): foreach( $layout as $key=>$value ) {

							switch($key) {

								case 'copyright': get_template_part( 'inc/footer/copyright' ); 

								break;	

								

								case 'socialicon': get_template_part( 'inc/footer/social','icon' );

								break;

								case 'copyrightmenu': get_template_part( 'inc/footer/copyright','menu' );

								break;		 

							}

						}

						endif;	

						?>

					</div>

				</div>

			</div>

		</div>

		<?php

		}else{

			?>

			<div class="footer-bottom">

				<div class="container">

					<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">

							<div class="copyright-text">

								<p><?php 

									esc_html_e('Copyright', 'kidschool'); ?> &copy; <?php echo date("Y").' '.get_bloginfo('name');  esc_html_e(' All Rights Reserved.', 'kidschool' ); 



								?></p>

							</div>

						</div>

					</div>

				</div>

			</div>

			<?php

		}

	}

	