<?php

if ( ! function_exists( 'kidschool_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function kidschool_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on kidschool, use a find and replace
	 * to change 'kidschool' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'kidschool', get_template_directory() . '/languages' );
	
	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style('css/editor-style.css');
	
	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
	 * Let WordPress manage the document title.
	 * By adding theme support, we declare that this theme does not use a
	 * hard-coded <title><title> tag in the document head, and expect WordPress to
	 * provide it for us.
	 */
	add_theme_support( 'title-tag' );

	/*
	 * Enable support for Post Thumbnails on posts and pages.
	 *
	 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
	 */
	add_theme_support( 'post-thumbnails' );
	add_image_size('kidschool_blog_img',870,400,true);
	add_image_size('kidschool_teacher_img',270,350,true);
	add_image_size('550x805-crop',550,805,true); // home 2 gallery carousel
	

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary'        => esc_html__( 'Primary', 'kidschool' ),
		'onepage'        => esc_html__( 'One Page Menu', 'kidschool' ),
		'left-menu'      => esc_html__( 'Top Bar Menu Left', 'kidschool' ),
		'right-menu' 	 => esc_html__( 'Top Bar Menu Right', 'kidschool' ),
		'header-menu-left' 	 => esc_html__( 'Header Menu Left', 'kidschool' ),
		'header-menu-right'  => esc_html__( 'Header Menu Right', 'kidschool' ),
		'copyright-menu' => esc_html__( 'Footer Copyright Menu', 'kidschool' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'search-form',
		'comment-form',
		'comment-list',
		'gallery',
		'caption',
	) );

	// Load regular editor styles into the new block-based editor.
	add_theme_support( 'editor-styles' );

	// Load default block styles.
	add_theme_support( 'wp-block-styles' );

	// Add support for responsive embeds.
	add_theme_support( 'responsive-embeds' );

	// Add support for custom color scheme.
	add_theme_support(
		'editor-color-palette',
		array(
			array(
				'name'  => __( 'Dark Gray', 'kidschool' ),
				'slug'  => 'dark-gray',
				'color' => '#1a1a1a',
			),
			array(
				'name'  => __( 'Medium Gray', 'kidschool' ),
				'slug'  => 'medium-gray',
				'color' => '#686868',
			),
			array(
				'name'  => __( 'Light Gray', 'kidschool' ),
				'slug'  => 'light-gray',
				'color' => '#e5e5e5',
			),
			array(
				'name'  => __( 'White', 'kidschool' ),
				'slug'  => 'white',
				'color' => '#fff',
			),
			array(
				'name'  => __( 'Blue Gray', 'kidschool' ),
				'slug'  => 'blue-gray',
				'color' => '#4d545c',
			),
			array(
				'name'  => __( 'Bright Blue', 'kidschool' ),
				'slug'  => 'bright-blue',
				'color' => '#007acc',
			),
			array(
				'name'  => __( 'Light Blue', 'kidschool' ),
				'slug'  => 'light-blue',
				'color' => '#9adffd',
			),
			array(
				'name'  => __( 'Dark Brown', 'kidschool' ),
				'slug'  => 'dark-brown',
				'color' => '#402b30',
			),
			array(
				'name'  => __( 'Medium Brown', 'kidschool' ),
				'slug'  => 'medium-brown',
				'color' => '#774e24',
			),
			array(
				'name'  => __( 'Dark Red', 'kidschool' ),
				'slug'  => 'dark-red',
				'color' => '#640c1f',
			),
			array(
				'name'  => __( 'Bright Red', 'kidschool' ),
				'slug'  => 'bright-red',
				'color' => '#ff675f',
			),
			array(
				'name'  => __( 'Yellow', 'kidschool' ),
				'slug'  => 'yellow',
				'color' => '#ffef8e',
			),
		)
	);	
	
	// Set up the WordPress core custom background feature.
	add_theme_support( 'custom-background', apply_filters( 'kidschool_custom_background_args', array(
		'default-color' => 'ffffff',
		'default-image' => '',
	) ) );

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );
}
endif;
add_action( 'after_setup_theme', 'kidschool_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */

 if ( !function_exists( 'kidschool_content_width')){
	 	function kidschool_content_width() {
		$GLOBALS['content_width'] = apply_filters( 'kidschool_content_width', 640 );
	}
} 
add_action( 'after_setup_theme', 'kidschool_content_width', 0 );

/**
 * Register custom fonts.
 */
 if ( !function_exists( 'kidschool_fonts_url' ) ) :
function kidschool_fonts_url() {
	$fonts_url = '';
	$fonts     = array();
	$subsets   = 'latin,latin-ext';

	/* translators: If there are characters in your language that are not supported by Open Sans, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Open Sans font: on or off', 'kidschool' ) ) {
		$fonts[] = 'Bitter:300,400,600,700';
	}

	/* translators: If there are characters in your language that are not supported by Raleway, translate this to 'off'. Do not translate into your own language. */
	if ( 'off' !== _x( 'on', 'Lora font: on or off', 'kidschool' ) ) {
		$fonts[] = 'Lora:300,400,500,600,700,900';
	}
	if ( $fonts ) {
		$fonts_url = add_query_arg( array(
			'family' => urlencode( implode( '|', $fonts ) ),
			'subset' => urlencode( $subsets ),
		), 'https://fonts.googleapis.com/css' );
	}

	return $fonts_url;
}
endif;

/**
 * Enqueue scripts and styles.
 */
function kidschool_scripts() {
	
	wp_enqueue_style('kidschool-font',kidschool_fonts_url());
	wp_enqueue_style('bootstrap',get_template_directory_uri() . '/css/bootstrap.min.css');
	wp_enqueue_style('font-awesome',get_template_directory_uri() . '/css/font-awesome.min.css');
	wp_enqueue_style('icofont',get_template_directory_uri() . '/css/icofont.css');
	wp_enqueue_style('magnific-popup',get_template_directory_uri() . '/css/magnific-popup.css');
	wp_enqueue_style('animate',get_template_directory_uri() . '/css/animate.css');
	wp_enqueue_style('owl-carousel',get_template_directory_uri() . '/css/owl-carousel.css');
	wp_enqueue_style('meanmenu',get_template_directory_uri() . '/css/meanmenu.min.css');
	wp_enqueue_style( 'owl-carousel');
	wp_enqueue_style( 'kidschool-style', get_stylesheet_uri() );
	wp_enqueue_style('kidschool-responsive',get_template_directory_uri() . '/css/blocks.css');
	wp_enqueue_style('kidschool-responsive',get_template_directory_uri() . '/css/responsive.css');
	wp_enqueue_style('kidschool-default',get_template_directory_uri() . '/css/default.css');
	
	wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '3.3.6', true );
	wp_enqueue_script( 'jquery-scrollUp', get_template_directory_uri() . '/js/jquery.scrollUp.min.js', array('jquery'), '3.2', true );
	wp_enqueue_script( 'jquery-magnific-popup', get_template_directory_uri() . '/js/jquery.magnific-popup.min.js', array('jquery'), '1.1.0', true );
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/js/isotope.pkgd.min.js', array('jquery'), '3.0.1', true );
	wp_enqueue_script( 'imagesloaded' );
	wp_enqueue_script( 'jquery-owl-carousel', get_template_directory_uri() . '/js/owl.carousel.min.js', array('jquery','owl-carousel'), '2.0.0', false );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/js/wow-min.js', array('jquery'), '1.1.2', true );
	wp_enqueue_script( 'navigation', get_template_directory_uri() . '/js/navigation.js', array(), '', true );
	wp_enqueue_script( 'skip-link-focus-fix', get_template_directory_uri() . '/js/skip-link-focus-fix.js', array(), '', true );
	wp_enqueue_script( 'jquery-meanmenu', get_template_directory_uri() . '/js/jquery.meanmenu.min.js', array(), '', true );
	wp_enqueue_script( 'jquery-onepage.nav', get_template_directory_uri() . '/js/jquery.onepage.nav.js', array(), '', true );
	wp_enqueue_script( 'kidschool-main-js', get_template_directory_uri() . '/js/main.js', array('jquery'), '1.0.0', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'kidschool_scripts' );

// kidschool Company Info widget js
if( !function_exists('kidschool_media_scripts') ) {
  function kidschool_media_scripts() {
	wp_enqueue_style( 'kidschool_wp_admin_css', get_template_directory_uri() . '/css/admin-style.css', false, '1.0.0' );
    wp_enqueue_media();
    wp_enqueue_script('kidschool-logo-uploader', get_template_directory_uri() .'/js/site-logo-uploader.js', false, '', true );
  }
}
add_action('admin_enqueue_scripts', 'kidschool_media_scripts');


/**
 * Enqueue styles for the block-based editor.
 */
function kidschool_block_editor_styles() {
	// Block styles.
	wp_enqueue_style( 'kidschool-block-editor-style', get_template_directory_uri() . '/css/editor-blocks.css', array(), '20181230' );
	// Add custom fonts.
	wp_enqueue_style( 'kidschool-fonts', kidschool_fonts_url(), array(), null );
}
add_action( 'enqueue_block_editor_assets', 'kidschool_block_editor_styles' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Custom functions that act independently of the theme templates.
 */
require get_template_directory() . '/inc/extras.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
require get_template_directory() . '/inc/jetpack.php';
/*
	Load options framework
*/
require get_template_directory().'/inc/admin/option-framework.php';

/*
	Load metabox
*/
require get_template_directory().'/inc/metabox/metabox.php';
/*
	Load breadcrumb
*/
require get_template_directory().'/inc/includefile/breadcrumb.php';

/*
	Load widget
*/
require get_template_directory().'/inc/widget-register.php';
/*
	Load custom function
*/
require get_template_directory().'/inc/tgm-plugin/required-plugins.php';

/*
	Load demo import
*/
require get_template_directory().'/inc/demo-import.php';
/*
	Load global function
*/
require get_template_directory().'/inc/global-functions.php';
/*
	Comment form
*/
require get_template_directory().'/inc/comment-form.php';


/*
 inline css form reduxframework
*/
require get_template_directory().'/inc/inline-css.php';
/**
* Content word count
*/

if(!function_exists('kidschool_read_more_text')){
	function kidschool_read_more_text($limit){
		$content = explode(' ', get_the_content());
		$count   = array_slice($content, 0 , $limit);
		echo implode (' ', $count);
	}
}
//blog pagination
if(!function_exists('kidschool_blog_pagination')){
	function kidschool_blog_pagination(){
		?>
		<div class="post-pagination">
		<?php
			the_posts_pagination(array(
				'prev_text'          => '<i class="fa fa-angle-left"></i>',
				'next_text'          => '<i class="fa fa-angle-right"></i>',
				'screen_reader_text' => ' ',
				'type'               => 'list'
			));
			?>
			</div>
		<?php
	}
}

// Mobile menu
if(!function_exists('kidschool_mobile_script')){
	function kidschool_mobile_script() {
 		global $kidschool_opt;
 		if( isset( $kidschool_opt['kidschool_mobile_menu_width'] ) && !empty( $kidschool_opt['kidschool_mobile_menu_width'] ) ){
			$kidschool_mobile_menu = $kidschool_opt['kidschool_mobile_menu_width'];
		}else{
			$kidschool_mobile_menu = 991;
		}

	    $array = array(
	       "key_1" => "$kidschool_mobile_menu"
	    );
	
	    wp_localize_script( "kidschool-main-js", "php_vars", $array );
	}
}
add_action( "wp_enqueue_scripts", "kidschool_mobile_script",100 );




if( !function_exists('kidschool_fallback')){
function kidschool_fallback( ) { 
	if(is_user_logged_in()):
?>

	<ul>
		<li><a href="<?php echo admin_url('nav-menus.php'); ?>"><?php echo esc_html__('Create Menu','kidschool');?></a></li>
	</ul>
<?php endif; } }


