<?php
//define
define( 'SPLG_URL', plugins_url() );
define( 'SPLG_DIR', dirname( __FILE__ ) );


// Call shortcode file
include_once(SPLG_DIR. '/include/shortcodes/section-title.php');
include_once(SPLG_DIR. '/include/shortcodes/activiti.php');
include_once(SPLG_DIR. '/include/shortcodes/gallery.php');
include_once(SPLG_DIR. '/include/shortcodes/gallery-style-2.php');
include_once(SPLG_DIR. '/include/shortcodes/classes.php');
include_once(SPLG_DIR. '/include/shortcodes/teachers.php');
include_once(SPLG_DIR. '/include/shortcodes/events.php');
include_once(SPLG_DIR. '/include/shortcodes/testimonial.php');
include_once(SPLG_DIR. '/include/shortcodes/pricing-table.php');
include_once(SPLG_DIR. '/include/shortcodes/slider.php');
include_once(SPLG_DIR. '/include/shortcodes/slider-style-2.php');
include_once(SPLG_DIR. '/include/shortcodes/event-style-2.php');
