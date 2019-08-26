<?php

if( !class_exists('Kidschool_Newsletter_Widget') ){
	class Kidschool_Recent_Post extends WP_Widget{
		/**
		 * Register widget with WordPress.
		 */
		function __construct(){
			$widget_ops = array('description' => esc_html__( 'Kidschool blog recent post here','kidschool' ));
			parent:: __construct('Kidschool_Recent_Post',esc_html__( 'Kidschool: Recent Post', 'kidschool' ), $widget_ops );
		}
		/**
		 * Front-end display of widget.
		 *
		 * @see WP_Widget::widget()
		 *
		 * @param array $args     Widget arguments.
		 * @param array $instance Saved values from database.
		 */
		public function widget($args, $instance){
			if ( ! isset( $args['widget_id'] ) ) {
			$args['widget_id'] = $this->id;
		}
		
		$title = ( ! empty( $instance['title'] ) ) ? $instance['title'] : esc_html__( 'Recent Posts','kidschool' );
		/** This filter is documented in wp-includes/widgets/class-wp-widget-pages.php */
		$title = apply_filters( 'widget_title', $title, $instance, $this->id_base );
		$number = ( ! empty( $instance['number'] ) ) ? absint( $instance['number'] ) : 3;
		$num_word = ( ! empty( $instance['numberw'] ) ) ? absint( $instance['numberw'] ) : 10;
		$num_wordt = ( ! empty( $instance['numbert'] ) ) ? absint( $instance['numbert'] ) : 10;
		if ( ! $num_word );
		if ( ! $num_word );
		if ( ! $num_wordt );
			
		$show_date = isset( $instance['show_date'] ) ? $instance['show_date'] : false;
			echo $args['before_widget']; 
			if( $title ): 
		    echo $args['before_title'];  
			echo $title;  
		 	echo $args['after_title']; 
			endif; 

				
					$posts = new WP_Query(array(
						'post_type'      => 'post',
						'posts_per_page' => $number,
						'numberw'        => $num_word,
						'numbert'        => $num_wordt,
					));
					while($posts->have_posts()) : $posts->the_post(); 
				  ?>
				<div class="product-item">
					<?php if( has_post_thumbnail()): ?>
					<div class="product-img">
						<a href="<?php echo esc_url(get_the_permalink() ); ?>">
						<?php the_post_thumbnail( array(100,100) ); ?>
						</a>
					</div>
					<?php endif; ?>
					<div class="product-info">
					<h6 class="product-title multi-line">
						<a href="<?php echo esc_url(get_the_permalink() ); ?>"><?php echo wp_trim_words( get_the_title(), $num_wordt,'') ; ?></a>
					</h6>

						<p ><?php esc_html_e('Post By ','kidschool'); ?><?php the_author_posts_link(); ?> <?php if ( $show_date ){ echo get_the_date('j M'); } ?></p>
						<p> <?php echo wp_trim_words( get_the_content(), $num_word,' '); ?></p>
					</div>
				</div> 
				<?php endwhile; ?>

			<?php echo $args['after_widget']; ?>
			
			<?php
				wp_reset_postdata();
		}
		/**
		 * Sanitize widget form values as they are saved.
		 *
		 * @see WP_Widget::update()
		 *
		 * @param array $new_instance Values just sent to be saved.
		 * @param array $old_instance Previously saved values from database.
		 *
		 * @return array Updated safe values to be saved.
		 */
		public function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
		$instance['title'] = sanitize_text_field( $new_instance['title'] );
		$instance['number'] = (int) $new_instance['number'];
		$instance['numberw'] = (int) $new_instance['numberw'];
		$instance['numbert'] = (int) $new_instance['numbert'];
		$instance['show_date'] = isset( $new_instance['show_date'] ) ? (bool) $new_instance['show_date'] : false;
		return $instance;
	}

	 	/**
		 * Back-end widget form.
		 *
		 * @see WP_Widget::form()
		 *
		 * @param array $instance Previously saved values from database.
		 */

		public function form( $instance ) {
		$title     = isset( $instance['title'] ) ? esc_attr( $instance['title'] ) : '';
		$number    = isset( $instance['number'] ) ? absint( $instance['number'] ) : 3;
		$numberw    = isset( $instance['numberw'] ) ? absint( $instance['numberw'] ) : 3;
		$numbert    = isset( $instance['numbert'] ) ? absint( $instance['numbert'] ) : 3;
		$show_date = isset( $instance['show_date'] ) ? (bool) $instance['show_date'] : false;
	?>
		<p><label for="<?php echo esc_attr($this->get_field_id( 'title' )); ?>"><?php echo esc_html__( 'Title:','kidschool' ); ?></label>
		<input class="widefat" id="<?php echo esc_attr($this->get_field_id( 'title' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'title' )); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></p>
		
		<p><label for="<?php echo esc_attr($this->get_field_id( 'numbert' )); ?>"><?php echo esc_html__( 'Number of title word:','kidschool' ); ?></label>
		<input class="tiny-text" id="<?php echo esc_attr(esc_attr($this->get_field_id( 'numbert' ))); ?>" name="<?php echo esc_attr($this->get_field_name( 'numbert' )); ?>" type="number" step="1" min="1" value="<?php echo esc_attr( $numbert ); ?>" size="3" /></p>
		
		<p><label for="<?php echo esc_attr($this->get_field_id( 'numberw' )); ?>"><?php echo esc_html__( 'Number of content word:','kidschool' ); ?></label>
		<input class="tiny-text" id="<?php echo esc_attr(esc_attr($this->get_field_id( 'numberw' ))); ?>" name="<?php echo esc_attr($this->get_field_name( 'numberw' )); ?>" type="number" step="1" min="1" value="<?php echo esc_attr( $numberw ); ?>" size="3" /></p>
		
		<p><label for="<?php echo esc_attr($this->get_field_id( 'number' )); ?>"><?php echo esc_html__( 'Number of posts to show:','kidschool' ); ?></label>
		<input class="tiny-text" id="<?php echo esc_attr(esc_attr($this->get_field_id( 'number' ))); ?>" name="<?php echo esc_attr($this->get_field_name( 'number' )); ?>" type="number" step="1" min="1" value="<?php echo esc_attr($number); ?>" size="3" /></p>
		
		

		<p><input class="checkbox" type="checkbox"<?php checked( $show_date ); ?> id="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>" name="<?php echo esc_attr($this->get_field_name( 'show_date' )); ?>" />
		<label for="<?php echo esc_attr($this->get_field_id( 'show_date' )); ?>"><?php echo esc_html__( 'Display post date?','kidschool' ); ?></label></p>
	<?php
		}
	}
}
	// register Contact  Widget widget
	function Kidschool_Recent_Post(){
		register_widget('Kidschool_Recent_Post');
	}
	add_action('widgets_init','Kidschool_Recent_Post');
