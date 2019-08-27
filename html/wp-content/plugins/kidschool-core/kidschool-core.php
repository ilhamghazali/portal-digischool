<?php
/**
 * Plugin Name: kidschool Core
 * Plugin URI: https://devitems.com/
 * Description: After install the kidschool WordPress Theme, you must need to install this "kidschool Core Plugin" first to get all functions of kidschool Theme.
 * Version: 1.0.0
 * Author: Alberuni Azad- HasTech
 * Author URI: http://hastech.company/
 * Text Domain: kidschool
 * License: GPL/GNU.
 /*Copyright 2017 kidschool(email:support@bootexperts.com)
    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


//define
define( 'PLG_URL', plugins_url('', __FILE__));
define( 'PLG_DIR', dirname( __FILE__ ) );

/**----------------------------------------------------------------*/
/* Include all file
/*-----------------------------------------------------------------*/  
include_once(PLG_DIR. '/include/custom-post.php');
include_once(PLG_DIR. '/include/custom-texanomy.php');
include_once(PLG_DIR. '/shortcode-act.php');

include_once (PLG_DIR . '/include/widgets/company-info-widget.php');
include_once (PLG_DIR . '/include/widgets/recent-post.php');
include_once (PLG_DIR . '/include/widgets/newsletter.php');

add_action( 'init', 'kidschool_add_king_composer_support');
function kidschool_add_king_composer_support(){
  global $kc;
  if($kc){
    $kc->add_content_type( 'teacher' );
  }
}