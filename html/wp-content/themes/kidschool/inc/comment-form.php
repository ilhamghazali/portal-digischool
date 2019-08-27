<?php 



//blog contact form

add_filter('comment_form_default_fields','kidschool_comments_form');

if(!function_exists('kidschool_comments_form')){

    function kidschool_comments_form($default){

		$default['kidschool_comment'] = '<textarea id="comment" rows="8" cols="45" name="comment" placeholder="'.esc_attr__( 'Comment', 'kidschool' ).'"></textarea>';

        $default['author'] = '<input type="text" name="author" placeholder="'.esc_attr__( 'Name*', 'kidschool' ).'">';

        $default['email'] = '<input type="email" name="email" placeholder="'.esc_attr__( 'Email*', 'kidschool' ).'">';

        $default['url'] = '<input type="text" name="url" placeholder="'.esc_attr__( 'Website', 'kidschool' ).'">';



        return $default;

    }

}

 

add_filter('comment_form_defaults','kidschool_form_default');

 if(!function_exists('kidschool_form_default')){

    function kidschool_form_default($default_info){

        if(!is_user_logged_in()){

            $default_info['comment_field'] = '';

        }else{

            $default_info['comment_field'] = '<textarea id="comment" rows="8" cols="45" name="comment" placeholder="'.esc_attr__( 'Comment', 'kidschool' ).'"></textarea>';

        }

         

        $default_info['submit_button'] = '<button type="submit">'.esc_html__('post comment','kidschool').'</button>';

        $default_info['submit_field'] = '<div class="shopping-button">%1$s %2$s</div>';

        $default_info['comment_notes_before'] = ' ';

        $default_info['title_reply'] = esc_html__('Leave a Reply','kidschool');

        $default_info['title_reply_before'] = '<div class="section-small-title"><h3> ';

        $default_info['title_reply_after'] = '</h3></div> ';

 

        return $default_info;

    }

 

 }

	

//kidschool comment show

if(! function_exists('kidschool_replay_commment')){

	function kidschool_replay_commment($comment,$arg, $depth){

		$GLOBALS ['comment'] = $comment;

		?>

		<li>
			<div class="comment-area">
			<div class="author-top push-bottom clearfix">

				<?php edit_comment_link(esc_html__('(Edit)' , 'kidschool' ),'<small class="pull-right">','</small>') ?>

				<div class="author-img">

					<?php echo get_avatar($comment,80); ?>

				</div>

				<div class="author-comment">

					<h5 class="author-name"><a href="<?php comment_author_link(); ?>"><?php echo get_comment_author(); ?></a></h5>

					<small><?php echo get_comment_date(get_option('date_format')); ?></small>

				</div>				

			</div>

			<div class="copy small">

				<?php comment_text() ?>

				<?php comment_reply_link( array_merge( $arg, array('reply_text' => 'Reply', 'depth' => $depth, 'max_depth' => $arg['max_depth']))); ?>				

			</div>
			</div>

		</li>

	

		<?php

	}

}

