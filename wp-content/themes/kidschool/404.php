<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package kidschool
 */

global $kidschool_opt;

get_header(); ?>

		
	<div class="page-not-found-wrap">
		<div class="container">
			<div class="row">
				
	            <div class="col-md-12">
	                <div class="pnf-inner-wrap">
		                <div class="pnf-inner text-center">

		                	<?php if ( 'image' == $kidschool_opt['kidschool_404_control']){
		                		?>
		                		<img src="<?php echo esc_url($kidschool_opt['kidschool_404_img']['url']); ?>" alt="<?php echo esc_attr__('Not found','kidschool');?>">
		                		<?php
		                	}elseif('title' == $kidschool_opt['kidschool_404_control']){ ?>

		                	<h1><?php echo esc_html($kidschool_opt['kidschool_404_title']); ?></h1> <?php }else{ ?>
		                		<h1><?php echo esc_html__('404','kidschool'); ?></h1> <?php
		                		}  ?>
							
							<?php if($kidschool_opt['kidschool_404_subtitle']){ ?>
		                    <h2><?php echo esc_html( $kidschool_opt['kidschool_404_subtitle'] ); ?></h2>
		                   <?php }else{ ?>
		                   	<h2><?php echo esc_html__('PAGE NOT FOUND','kidschool'); ?></h2>
		                  <?php } 

		                   if($kidschool_opt['kidschool_404_info']) { ?>

		                    <p><?php echo esc_html($kidschool_opt['kidschool_404_info']); ?></p>
		                    <?php }else { ?> <p> <?php echo esc_html__('The page you are looking for does not exist or has been moved.','kidschool'); ?> </p> <?php
		                    	} ?>
		                    

		                    <a href="<?php echo esc_url(home_url('/')); ?>" class="btn"><?php if( $kidschool_opt['kidschool_button_text'] ){echo esc_html( $kidschool_opt['kidschool_button_text'] ); }else{echo esc_html__( 'Go back to Home Page', 'kidschool' ); } ?></a>

		                </div>
	                </div>
	            </div>
				
			</div>
		</div>	
	</div>

<?php

get_footer();
