<?php

    /**

     * ReduxFramework Sample Config File

     * For full documentation, please visit: http://docs.reduxframework.com/

     */

    if ( ! class_exists( 'Redux' ) ) {

        return;

    }

    // This is your option name where all the Redux data is stored.

    $opt_name = "kidschool_opt";



    // This line is only for altering the demo. Can be easily removed.

    $opt_name = apply_filters( 'redux_demo/opt_name', $opt_name );

    /**

     * ---> SET ARGUMENTS

     * All the possible arguments for Redux.

     * For full documentation on arguments, please refer to: https://github.com/ReduxFramework/ReduxFramework/wiki/Arguments

     * */



    $theme = wp_get_theme(); // For use with some settings. Not necessary.



    $args = array(

        // TYPICAL -> Change these values as you need/desire

        'opt_name'             => $opt_name,

        // This is where your data is stored in the database and also becomes your global variable name.

        'display_name'         => $theme->get( 'Name' ),

        // Name that appears at the top of your panel

        'display_version'      => $theme->get( 'Version' ),

        // Version that appears at the top of your panel

        'menu_type'            => 'submenu',

        //Specify if the admin menu should appear or not. Options: menu or submenu (Under appearance only)

        'allow_sub_menu'       => true,

        // Show the sections below the admin menu item or not

        'menu_title'           => esc_html__( 'Theme Options', 'kidschool' ),

        'page_title'           => esc_html__( 'Theme Options', 'kidschool' ),

        // You will need to generate a Google API key to use this feature.

        // Please visit: https://developers.google.com/fonts/docs/developer_api#Auth

        'google_api_key'       => '',

        // Set it you want google fonts to update weekly. A google_api_key value is required.

        'google_update_weekly' => false,

        // Must be defined to add google fonts to the typography module

        'async_typography'     => true,

        // Disable this in case you want to create your own google fonts loader

        'admin_bar'            => true,

        // Show the panel pages on the admin bar

        'admin_bar_icon'       => 'dashicons-portfolio',

        // Choose an icon for the admin bar menu

        'admin_bar_priority'   => 50,

        // Choose an priority for the admin bar menu

        'global_variable'      => '',

        // Set a different name for your global variable other than the opt_name

        'dev_mode'             => false,

        // Show the time the page took to load, etc

        'update_notice'        => true,

        // If dev_mode is enabled, will notify developer of updated versions available in the GitHub Repo

        'customizer'           => true,

        // OPTIONAL -> Give you extra features

        'page_priority'        => null,

        // Order where the menu appears in the admin area. If there is any conflict, something will not show. Warning.

        'page_parent'          => 'themes.php',

        // For a full list of options, visit: http://codex.wordpress.org/Function_Reference/add_submenu_page#Parameters

        'page_permissions'     => 'manage_options',

        // Permissions needed to access the options panel.

        'menu_icon'            => '',

        // Specify a custom URL to an icon

        'last_tab'             => '',

        // Force your panel to always open to a specific tab (by id)

        'page_icon'            => 'icon-themes',

        // Icon displayed in the admin panel next to your menu_title

        'page_slug'            => '',

        // Page slug used to denote the panel, will be based off page title then menu title then opt_name if not provided

        'save_defaults'        => true,

        // On load save the defaults to DB before user clicks save or not

        'default_show'         => false,

        // If true, shows the default value next to each field that is not the default value.

        'default_mark'         => '',

        // What to print by the field's title if the value shown is default. Suggested: *

        'show_import_export'   => true,

        // Shows the Import/Export panel when not used as a field.



        // CAREFUL -> These options are for advanced use only

        'transient_time'       => 60 * MINUTE_IN_SECONDS,

        'output'               => true,

        // Global shut-off for dynamic CSS output by the framework. Will also disable google fonts output

        'output_tag'           => true, 

        // FUTURE -> Not in use yet, but reserved or partially implemented. Use at your own risk.

        'database'             => '',

        // possible: options, theme_mods, theme_mods_expanded, transient. Not fully functional, warning!

        'use_cdn'              => true,

        // If you prefer not to use the CDN for Select2, Ace Editor, and others, you may download the Redux Vendor Support plugin yourself and run locally or embed it in your code.



        // HINTS

        'hints'                 => array(

            'icon'              => 'el el-question-sign',

            'icon_position'     => 'right',

            'icon_color'        => 'lightgray',

            'icon_size'         => 'normal',

            'tip_style'         => array(

                'color'     => 'red',

                'shadow'    => true,

                'rounded'   => false,

                'style'     => '',

            ),

            'tip_position'  => array(

                'my' => 'top left',

                'at' => 'bottom right',

            ),

            'tip_effect'    => array(

                'show' => array(

                    'effect'   => 'slide',

                    'duration' => '500',

                    'event'    => 'mouseover',

                ),

                'hide' => array(

                    'effect'   => 'slide',

                    'duration' => '500',

                    'event'    => 'click mouseleave',

                ),

            ),

        )

    );



    // ADMIN BAR LINKS -> Setup custom links in the admin bar menu as external items.

    $args['admin_bar_links'][] = array(

        'id'    => 'redux-docs',

        'href'  => 'http://docs.reduxframework.com/',

        'title' => esc_html__( 'Documentation', 'kidschool' ),

    );



    $args['admin_bar_links'][] = array(

        'id'    => 'redux-support',

        'href'  => 'https://github.com/ReduxFramework/redux-framework/issues',

        'title' => esc_html__( 'Support', 'kidschool' ),

    );



    $args['admin_bar_links'][] = array(

        'id'    => 'redux-extensions',

        'href'  => 'reduxframework.com/extensions',

        'title' => esc_html__( 'Extensions', 'kidschool' ),

    );



    // SOCIAL ICONS -> Setup custom links in the footer for quick links in your panel footer icons.

    $args['share_icons'][] = array(

        'url'   => 'https://www.facebook.com/devitems',

        'title' => 'Like us on Facebook',

        'icon'  => 'el el-facebook'

    );

    $args['share_icons'][] = array(

        'url'   => 'https://twitter.com/devitemsllc',

        'title' => 'Follow us on Twitter',

        'icon'  => 'el el-twitter'

    );

    $args['share_icons'][] = array(

        'url'   => 'https://www.linkedin.com/in/devitems-llc-a87b38106/',

        'title' => 'Find us on LinkedIn',

        'icon'  => 'el el-linkedin'

    );

    $args['share_icons'][] = array(

        'url'   => 'https://www.behance.net/DevItems',

        'title' => 'Find us on Behance',

        'icon'  => 'el el-behance'

    );

    $args['share_icons'][] = array(

        'url'   => 'https://dribbble.com/devitems',

        'title' => 'Find us on Dribbble',

        'icon'  => 'el el-dribbble'

    );

    $args['share_icons'][] = array(

        'url'   => 'https://www.instagram.com/devitems/',

        'title' => 'Find us on Instagram',

        'icon'  => 'el el-instagram'

    );



    Redux::setArgs( $opt_name, $args );



    /*

     * ---> END ARGUMENTS

     */

    /*

     * ---> START HELP TABS

     */



    $tabs = array(

        array(

            'id'      => 'redux-help-tab-1',

            'title'   => esc_html__( 'Theme Information 1', 'kidschool' ),

            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'kidschool' )

        ),

        array(

            'id'      => 'redux-help-tab-2',

            'title'   => esc_html__( 'Theme Information 2', 'kidschool' ),

            'content' => esc_html__( 'This is the tab content, HTML is allowed.', 'kidschool' )

        )

    );

    Redux::setHelpTab( $opt_name, $tabs );



    // Set the help sidebar

    $content = esc_html__( 'This is the sidebar content, HTML is allowed.', 'kidschool' );

    Redux::setHelpSidebar( $opt_name, $content );

    /*

     * <--- END HELP TABS

     */

    // -> START Basic Fields

	//layout

	Redux::setSection( $opt_name, array(

		'title'            => esc_html__( 'Layout', 'kidschool' ),

		'id'               => 'kidschool_layout',

		'customizer_width' => '400px',

		'icon'             => 'el el-website',

		'fields'           => array(

				array(

					'id'        			=> 'kidschool_layout_width',

					'type'      			=> 'button_set',

					'title'     			=> esc_html__('Theme Layout', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the site layout.', 'kidschool'),

					'options'   			=> array(

						'wide-layout'       => esc_html__('Full Width',  'kidschool'),

                        'boxed-layout'      => esc_html__('Boxed', 'kidschool'), 

					 ), 

					'default'   			=> 'wide-layout'

				),

                array(

                    'id'                    => 'kidschool_layout_page',

                    'type'                  => 'text',

                    'required'              => array('kidschool_layout_width','equals','wide-layout'),

                    'title'                 => esc_html__('Site Width', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the overall site width. Enter value excluding any valid CSS unit, ex: 1170', 'kidschool'),

                ),

				array(

					'id'        			=> 'kidschool_boxlayout_box_width',

					'type'      			=> 'text',

                    'required'              => array('kidschool_layout_width','equals','boxed-layout'),

					'title'     			=> esc_html__('Site Width For Box Layout', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the overall site width. Enter value excluding any valid CSS unit, ex: 1170', 'kidschool'),

				),

                array(

                    'id'                    => 'kidschool_boxlayout_body_bg',

                    'type'                  => 'background',

                    'required'              => array( 'kidschool_layout_width','equals','boxed-layout'),

                    'output'                => array('body.boxed-layout-active'),

                    'title'                 => esc_html__('Box Layout Background', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the background color when the site is in box layout.', 'kidschool'),

                    'default'               => array(

                        'background-color'  => '#ffffff',

                    )

                ),

				array(

					'id'        			=> 'kidschool_page_layout_padding',

					'type'      			=> 'spacing',

					'output'    			=> array('.page-area'),

					'title'     			=> esc_html__('Page Content Padding', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the top /bottom padding for page content. Enter values including any valid CSS unit, ex: 80px,80px.', 'kidschool'),

					'mode'      			=> 'padding',

					'units'     			=> array('em','px'),

					'units_extended' 		=> 'false',

					'left' 					=> 'false',

					'right' 				=> 'false',

					'default'   			=> array(

						'padding-top'   	=> '80px',

						'padding-right' 	=> '0px',

						'padding-bottom'	=> '80px',

						'padding-left'  	=> '0px',

					),

				),

                array(

                    'id'                    => 'kidschool_body_background_color',

                    'type'                  => 'background',

                    'output'                => array('body, .site-wrapper.boxed-layout'),

                    'title'                 => esc_html__('Body Background Color.', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the  background color of the body which is everything below header and above footer.', 'kidschool'),

                    'default'               => array(

                        'background-color'  => '#fff',

                    )

                ),



			)

		) 

	);



  //Header top bar

    Redux::setSection( $opt_name, array(

        'title'      => esc_html__( 'Header', 'kidschool' ),

        'id'         => 'header_id',

		'icon'       =>'el el-arrow-up',

        'fields'     => array(

                array(
                    'required'              => array('kidschool_header_layout','equals',array('1','2')),

                    'id'                    => 'kidschool_header_bg',

                    'type'                  => 'background',

                    'background-attachment' => false,

                    'background-repeat'     => false,

                    'background-size'       => false,

                    'background-position'   => false,

                    'background-image'      => false,

                    'output'                => array('.header-area'),

                    'title'                 => esc_html__('Header Background color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the header background color( default #f1f1f1 ).', 'kidschool'),

                    'default'               => array(

                        'background-color'  => '#f1f1f1',

                    )

                ),

				array(

					'id'          			=> 'kidschool_header_layout',

					'title'       			=> esc_html__('Select Header Layout', 'kidschool'),

					'subtitle'    			=> esc_html__('Controls the header layout.', 'kidschool'),

					'type' 			        => 'image_select',

					'options' 				=> array(

						'1' 				=> array(

							'title' 		=> esc_html__('Header Layout One', 'kidschool'),

							'img'  			=> get_template_directory_uri().'/image/optionframework/style1.png',

						),

                        '2'                 => array(

                            'title'         => esc_html__('Header Layout Two', 'kidschool'),

                            'img'           => get_template_directory_uri(). '/image/optionframework/style2.png',

                        ),

                        '3'                 => array(

                            'title'         => esc_html__('Header Layout Three', 'kidschool'),

                            'img'           => get_template_directory_uri(). '/image/optionframework/style3.png',

                        ),

						'onepage'                 => array(

							'title'         => esc_html__('Header One Page', 'kidschool'),

							'img'           => get_template_directory_uri(). '/image/optionframework/style1.png',

						),

					),

					'default'               => '1'

				),

                array(
                    'required'              => array('kidschool_header_layout','equals',array('1','2')),

                    'id'                    => 'kidschool_logo_position',

                    'type'                  => 'button_set',

                    'title'                 => esc_html__('Logo Position','kidschool'),

                    'subtitle'              => esc_html__('Controls the position of the logo.','kidschool'),

                    'options'               => array(

                        'left'              => esc_html__('Left','kidschool'),

                        'center'            => esc_html__('Center','kidschool'),

                        'right'             => esc_html__('Right','kidschool'),

                        'left-top'          => esc_html__('Left Top','kidschool'),

                        'center-top'        => esc_html__('Center Top','kidschool'),

                        'right-top'         => esc_html__('Right Top','kidschool'),

                    ), 

                    'default'               => 'left'

                ),

                array(

                    'id'                    => 'kidschool_header_full_width',

                    'type'                  => 'switch',

                    'title'                 => esc_html__( 'Full Width Header', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the width of the header area. ', 'kidschool' ),

                    'default'               => false,

                ),

                array(

                    'id'                    => 'kidschool_header_sticky',

                    'type'                  => 'switch',

                    'title'                 => esc_html__( 'Sticky Header', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Turn on to activate the sticky header.', 'kidschool' ),

                    'default'               => true,

                ),

                array(
                    'required'              => array('kidschool_header_layout','equals',array('1','2')),

                    'id'                    => 'kidschool_header_transparent',

                    'type'                  => 'switch',

                    'title'                 => esc_html__( 'Transparent Header', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Turn on to make the header area transparent.', 'kidschool' ),

                    'default'               => false,

                ),



			)

		) 

	);

  //Header top bar left

    Redux::setSection( $opt_name, array(

        'title'      => esc_html__( 'Top Bar left', 'kidschool' ),

        'id'         => 'kidschool_header_left',

		'icon'       =>'el el-arrow-right',

		'subsection' => true,

        'fields'     => array(

				array(

					'id'        			=> 'kidschool_left_content_section',

					'type'      			=> 'button_set',

					'title'     			=> esc_html__( 'Top Bar Left Content', 'kidschool' ),

					'subtitle'  			=> esc_html__( 'Controls the content that displays in the top left section.', 'kidschool' ),

					'options'      			=> array(

                        '1'       		 	=> esc_html__('Social Icon','kidschool'),

                        '2'        			=> esc_html__('Left Menu','kidschool'),      

                        '3'        			=> esc_html__('Contact Info','kidschool'),

                        '4'        			=> esc_html__('Content','kidschool'),

                        '5'        			=> esc_html__('Leave Empty','kidschool'),

                    ),

					'default'      			=> '3'

				),

				array(

					'id'        			=> 'kidschool_left_contact_info_text',

					'type'      			=> 'text',

					'required'              => array('kidschool_left_content_section','equals','3'),

					'title'     			=> esc_html__( 'Header Contact Text', 'kidschool' ),

					'subtitle'  			=> esc_html__( 'This content will display header contact number on top left bar', 'kidschool' ),

					'default'   			=> 'Call Us',

				),

				array(

					'id'        			=> 'kidschool_left_contact_info',

					'type'      			=> 'text',

					'required'              => array('kidschool_left_content_section','equals','3'),

					'title'     			=> esc_html__( 'Header Contact Number', 'kidschool' ),

					'subtitle'  			=> esc_html__( 'This content will display header contact number on top left bar', 'kidschool' ),

					'default'   			=> '+0123456789',

				),

				array(

					'id'        			=> 'kidschool_left_contact_email',

					'type'      			=> 'text',

					'required'              => array('kidschool_left_content_section','equals','3'),

					'title'     			=> esc_html__( 'Header Contact Email Address', 'kidschool' ),

					'subtitle'  			=> esc_html__( 'This content will display header contact email address on top left bar', 'kidschool' ),

					'default'   			=> 'info@hashdemo.com',

				),

				array(

					'id'        			=> 'kidschool_left_text_area',

					'type'      			=> 'editor',

					'required'              => array('kidschool_left_content_section','equals','4'),

					'title'     			=> esc_html__( 'Header Default Text', 'kidschool' ),

					'subtitle'  			=> esc_html__( 'This content will display the default text on top left bar', 'kidschool' ),

					'args'   			    => array(

						'teeny'             => true,

						'textarea_rows'     => 2

					),

				),

			)

		) 

	);

  //Header top bar right

    Redux::setSection( $opt_name, array(

        'title'      => esc_html__( 'Top Right Bar', 'kidschool' ),

        'id'         => 'kidschool_header_right',

        'icon'       =>'el el-arrow-right',

        'subsection'=> true,

        'fields'     => array(

                array(

                    'id'                    => 'kidschool_right_contactinfo',

                    'type'                  => 'button_set',

                    'title'                 => esc_html__( 'Top Bar Right Content', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the content that displays in the top left section.', 'kidschool' ),

                    'options'               => array(

                        '1'                 => esc_html__('Social Icon','kidschool'),                        

                        '2'                 => esc_html__('Right Menu','kidschool'),                        

                        '0'                 => esc_html__('Login/Resigter','kidschool'),                        

                        '3'                 => esc_html__('Contact Info','kidschool'),                        

                        '4'                 => esc_html__('Content','kidschool'),                        

                        '5'                 => esc_html__('Leave Empty','kidschool'),                        

                    ),

                    'default'               => '0'

                ),

                array(

                    'id'                    => 'kidschool_right_login_text',

                    'type'                  => 'text',

                    'required'              => array('kidschool_right_contactinfo','equals','0'),

                    'title'                 => esc_html__( 'Login Text', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display header top-bar right', 'kidschool' ),

                    'default'               => 'Login',

                ),

                array(

                    'id'                    => 'kidschool_right_register_text',

                    'type'                  => 'text',

                    'required'              => array('kidschool_right_contactinfo','equals','0'),

                    'title'                 => esc_html__( 'Registration text', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display header top-bar right', 'kidschool' ),

                    'default'               => 'Register',

                ),

                array(

                    'id'                    => 'kidschool_right_contact_info_text',

                    'type'                  => 'text',

                    'required'              => array('kidschool_right_contactinfo','equals','3'),

                    'title'                 => esc_html__( 'Header Contact Text', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display header contact number on top right bar.', 'kidschool' ),

                    'default'               => 'Call Us',

                ),

                array(

                    'id'                    => 'kidschool_right_contact_info',

                    'type'                  => 'text',

                    'required'              => array('kidschool_right_contactinfo','equals','3'),

                    'title'                 => esc_html__( 'Header Contact Number', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display header contact number on top right bar.', 'kidschool' ),

                    'default'               => '+0123456789',

                ),

                array(

                    'id'                    => 'kidschool_right_contact_email',

                    'type'                  => 'text',

                    'required'              => array('kidschool_right_contactinfo','equals','3'),

                    'title'                 => esc_html__( 'Email Address For Contact Info', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display if you have "Contact Info" email.', 'kidschool' ),

                    'default'               => 'info@hashdemo.com',

                ),

                array(

                    'id'                    => 'kidschool_right_text_area',

                    'type'                  => 'editor',

                    'required'              => array('kidschool_right_contactinfo','equals','4'),

                    'title'                 => esc_html__( 'Header Default Text', 'kidschool' ),

                    'subtitle'              => esc_html__( 'This content will display the default text on top right bar', 'kidschool' ),

                    'args'                  => array(

                        'teeny'             => true,

                        'textarea_rows'     => 2

                    )

                ),

            )

        ) 

    );

  //Header top bar right

    Redux::setSection( $opt_name, array(

        'title'      => esc_html__( 'Topbar Customize', 'kidschool' ),

        'id'         => 'kidschool_header_topbar_customize',

		'icon'       =>'el el-arrow-right',

		'subsection'=> true,

        'fields'     => array(

				array(

                    'id'                    => 'kidschool_header_show',

                    'type'                  => 'switch',

                    'title'                 => esc_html__( 'Top Bar', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Turn on if you want to show the top bar area.', 'kidschool' ),

                    'default'               => true,

                ),

                array(

                    'id'                    => 'kidschool_header_top_width',

                    'type'                  => 'switch',

                    'title'                 => esc_html__( 'Full Width Top Bar', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Turn on if you want the top bar to be of full width.', 'kidschool' ),

                    'default'               => false,

                ),

                array(

                    'id'                    => 'kidschool_header_topbg',

                    'type'                  => 'background',

                    'background-attachment' => false,

                    'background-repeat'     => false,

                    'background-size'       => false,

                    'background-position'   => false,

                    'background-image'      => false,

                    'output'                => array('.header-top-area'),

                    'title'                 => esc_html__('Top Bar Background Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the background color of the header top bar area( default #008c99 ).', 'kidschool'),

                    'default'               => array(

                        'background-color'  => '#008c99',

                    )

                ),

                 array(

                    'id'                    => 'kidschool_top_text_colors',

                    'type'                  => 'color',

                    'output'                => array('.top-bar-left-content,.header-info' ),

                    'title'                 => esc_html__('Top Bar Text Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the color of the top bar text.', 'kidschool'),

                    'transparent'           => false,

                    'default'               => '#fff',

                ),

                array(

                    'id'                    => 'kidschool_top_link_colors',

                    'type'                  => 'color',

                    'output'                => array('.header-info span a, .header-social ul li a, .top-bar-left-content p a, .top-bar-left-menu ul li a, .header-social ul li a' ),

                    'title'                 => esc_html__('Top Bar Link Color ', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the link color of the top bar.', 'kidschool'),

                    'transparent'           => false,

                    'default'               => '',

                ),

                array(

                    'id'                    => 'kidschool_top_link_colors_hover',

                    'type'                  => 'color',

                    'output'                => array('.header-info span a:hover, .header-social ul li a:hover, .top-bar-left-content p a:hover'),

                    'title'                 => esc_html__('Top Bar Link Hover Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the link hover color of the top bar.', 'kidschool'),

                    'transparent'           => false,

                ),

                array(

                    'id'                    => 'kidschool_top_bar_padding',

                    'type'                  => 'spacing',

                    'mode'                  => 'padding',

                    'title'                 => esc_html__('Top Bar padding ', 'kidschool'),

                    'subtitle'              => esc_html__('Controls header Top Bar padding.', 'kidschool'),

                    'right'                 => false,

                    'left'                  => false,

                    'output'                => array('.header-top-area'),

                    'units'                 => array('em','px'),

                    'default'               => array(

                        'padding-top'       => '15px',

                        'padding-right'     => '0px',

                        'padding-bottom'    => '15px',

                        'padding-left'      => '0px',

                        'units'             => 'px',

                    ),

                ),

			)

		) 

	);

	//Main menu

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Menu', 'kidschool' ),

        'id'               => 'kidschool-header-contact-top',

		'icon'             => 'el el-lines',

        'customizer_width' => '500px',

        'fields'           => array(

				

            )

		) 

	);

    //Menu tryphograpy

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Menu Typography', 'kidschool' ),

        'id'               => 'kidschool_menu_typography',

        'icon'             => 'el el-arrow-right',

        'subsection'       => 'true',

        'customizer_width' => '500px',

        'fields'           => array(

                array(

                    'id'                    => 'kidschool_menufont',

                    'type'                  => 'typography',

                    'title'                 => esc_html__('Menu Font Settings', 'kidschool'),

                    'google'                => true,     

                    'subsets'               => false,

                    'line-height'           => false,

                    'text-transform'        => true,

                    'text-align'            => false,

                    'all_styles'            => true,    

                    'output'                => array('.primary-nav-wrap ul li a'), 

                    'units'                 => 'px',

                    'subtitle'              => esc_html__('Controls the font settings of the menu text', 'kidschool'),

                    'default'               => array(

                        'google'            => true,

                    )

                ),

                array(

                    'id'                    => 'kidschool_menu_hover_colors',

                    'type'                  => 'color',

                    'output'                => array('.primary-nav-wrap > nav > ul > li:hover > a, .primary-nav-wrap > nav > ul > li.current_page_item > a' ),

                    'title'                 => esc_html__('Menu Hover Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the menu hover color of the menu text(default: #333).', 'kidschool'),

                    'transparent'           => false,

                    'validate'              => 'color',

                ),

               

               array(

                    'id'                    => 'kidschool_main_menu_padding',

                    'type'                  => 'spacing',

                    'title'                 => esc_html__( 'Main Menu Padding', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the top and bottom padding of the main menu', 'kidschool' ),

                    'output'                => array('.primary-nav-wrap nav .menu > li'),

                    'mode'                  => 'padding',

                    'right'                 => false,

                    'left'                  => false,

                    'units_extended'        => 'false',

                    'units'                 => array('em','px'),

                    'default'               => array(

                        'padding-top'       => 'px',

                        'padding-right'     => '0px',

                        'padding-bottom'    => 'px',

                        'padding-left'      => '0px',

                        'units'             => 'px',

                        )

                ),

                array(

                    'id'                    => 'kidschool_menu_item_spacing',

                    'type'                  => 'text',

                    'title'                 => esc_html__( 'Main Menu Item Spacing', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the menu item spacing of the main menu', 'kidschool' ),    

                ),

               



            )

        ) 

    );

    //Menu tryphograpy

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Dropdown menu', 'kidschool' ),

        'id'               => 'kidschool_menu_dropdown',

        'icon'             => 'el el-arrow-right',

        'subsection'       => 'true',

        'customizer_width' => '500px',

        'fields'           => array( 

             array(

                    'id'                    => 'kidschool_submenufont',

                    'type'                  => 'typography',

                    'title'                 => esc_html__('Submenu Font Settings', 'kidschool'),

                    'google'                => true,       

                    'subsets'               => false,

                    'line-height'           => false,

                    'transition'            => false,

                    'text-align'            => false,

                    'all_styles'            => true,    

                    'text-transform'        => true,    

                    'output'                => array('.primary-nav-wrap .sub-menu > li > a'), 

                    'units'                 => 'px',

                    'subtitle'              => esc_html__('Controls the font settings of the submenu text', 'kidschool'),

                    'default'               => array(

                        'google'            => true,

                    )

                ),

                array(

                    'id'                    => 'kidschool_submenu_hover_colors',

                    'type'                  => 'color',

                    'output'                => array('.primary-nav-wrap .sub-menu > li:hover > a' ),

                    'title'                 => esc_html__('Submenu Hover Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the submenu hover color(default: #333).', 'kidschool'),

                    'transparent'           => false,

                    'validate'              => 'color',

                ),



                array(

                    'id'                    => 'kidschool_submenu_background_color',

                    'type'                  => 'color',

                    'title'                 => esc_html__('Submenu Background', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the background color of the submenu', 'kidschool'),

                ),

                 array(

                    'id'                    => 'kidschool_bropdown_bg_hover',

                    'type'                  => 'background',

                    'background-attachment' => false,

                    'background-repeat'     => false,

                    'background-size'       => false,

                    'background-position'   => false,

                    'background-image'      => false,

                    'output'                => array('.primary-nav-wrap .sub-menu > li:hover > a'),

                    'title'                 => esc_html__('Submenu Hover Background.', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the hover background color of the submenu( default #333 ).', 'kidschool'),

                    'default'               => array(

                        'background-color'  => '#333',

                    )

                ),



                 array(

                    'id'                    => 'kidschool_menu_dropdowshowh_color',

                    'output'                => array('.primary-nav-wrap ul.sub-menu li + li'),

                     'type'                 => 'border',

                        'title'             => esc_html__('Submenu Separator Color', 'kidschool'),

                        'subtitle'          => esc_html__('Controls the separator color of the submenu', 'kidschool'),

                        'output'            => array('.primary-nav-wrap ul.sub-menu li + li'),

                        'right'             => false,

                        'bottom'            => false,

                        'left'              => false,

                        'default'           => array(

                            'border-color'  => '#333', 

                            'border-style'  => 'solid', 

                            'border-top'    => '1px', 

                        )

                ),

                 array(

                    'id'                    => 'kidschool_menu_dropdownwidth',

                    'type'                  => 'text',

                    'title'                 => esc_html__( 'Submenu Width', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the submenu width', 'kidschool' ),

                ),

                  array(

                    'id'                    => 'kidschool_dropdown_item_padding',

                    'type'                  => 'text',

                    'title'                 => esc_html__( 'Submenu Item Height', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the height of the submenu item', 'kidschool' ),

                ),



            )

        ) 

    );

    //Sticky Header Menu

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Sticky Menu', 'kidschool' ),

        'id'               => 'kidschool_sticky_menu_typography',

        'icon'             => 'el el-arrow-right',

        'subsection'       => 'true',

        'customizer_width' => '500px',

        'fields'           => array(

             array(

                    'id'                    => 'kidschool_menu_link_colors',

                    'type'                  => 'color',

                    'output'                => array('.header-area.header-sticky.sticky .primary-nav-wrap ul > li > a' ),

                    'title'                 => esc_html__( 'Sticky Header Menu Text Color', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the header menu text color when the header is sticky', 'kidschool' ),

                    'transparent'           => false,

                    'default'               => '#333',

                ),

                array(

                    'id'                    => 'kidschool_header_sticky_bg',

                    'type'                  => 'background',

                    'background-attachment' => false,

                    'background-repeat'     => false,

                    'background-size'       => false,

                    'background-position'   => false,

                    'background-image'      => false,

                    'output'                => array('.header-area.sticky'),

                    'title'                 => esc_html__( 'Sticky Header Background color', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the header background color when the header is sticky( default #ffffff ).', 'kidschool' ),

                    'default'               => array(

                        'background-color'  => '#ffffff',

                    )

                ),



            )

        ) 

    );

	//Mobile Menu Visibility

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Mobile Menu', 'kidschool' ),

        'id'               => 'kidschool_Mobile_menu',

		'icon'             => 'el el-arrow-right',

		'subsection'       => 'true',

        'customizer_width' => '500px',

        'fields'           => array(

                array(

                    'id'                    => 'kidschool_mobile_menu_width',

                    'type'                  => 'text',

                    'title'                 => esc_html__( 'Display Mobile Menu at', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls in which screen size the mobile menu will be displayed( ex. 991px )', 'kidschool' ),

                ),

			)

		) 

	);



	//logo

	Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Logo', 'kidschool' ),

        'id'               => 'kidschool_logo',

        'customizer_width' => '400px',

		'icon'             => 'el el-plus-sign',

		'fields'           => array(

				array(

					'id'        			=> 'kidschool_main_logo',

					'type'      			=> 'button_set',

					'title'     			=> esc_html__('Enable / Disable Logo','kidschool'),

					'desc'      			=> esc_html__('By enabling the logo you will be able to set a logo in the header and by disabling the logo you will be able to set site title in the header.','kidschool'),

					'options'   			=> array(

						'1'                 => 'Enable',

						'2'                 => 'Disable',

					),

					'default'               => '1'

				),

                array(

                    'id'                    => 'kidschool_head_logo',

                    'type'                  => 'media',

                    'required'              => array('kidschool_main_logo','equals','1'),

                    'title'                 => esc_html__('Logo','kidschool'),

                    'desc'                  => esc_html__('Upload your logo here','kidschool'),

                    'default'               => array(

                        'url'               => get_template_directory_uri().'/image/logo.png'

                    ),

                ),

				array(

					'id'        			=> 'kidschool_logo_text',

					'type'      			=> 'text',

					'required'              => array('kidschool_main_logo','equals','2'),

					'title'     			=> esc_html__('Site Title','kidschool'),

					'desc'      			=> esc_html__('Enter your site title here','kidschool'),

					'default'   			=> get_bloginfo('name')

				),

                array(

                    'id'                    => 'kidschool_logo_text_font',

                    'type'                  => 'typography',

                    'title'                 => esc_html__('Site Title Font Settings', 'kidschool'),

                    'required'              => array('kidschool_main_logo','equals','2'),

                    'google'                => true,     

                    'subsets'               => false,

                    'line-height'           => false,

                    'text-transform'        => true,

                    'transition'            => false,

                    'text-align'            => false,

                    'all_styles'            => true,    

                    'output'                => array('.site-logo a'), 

                    'units'                 => 'px',

                    'subtitle'              => esc_html__('Controls the font settings of the site title', 'kidschool'),

                    'default'               => array(

                        'google'            => true,

                    )

                ),

			)

		) 

	);



	//Page Title Bar

	Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Page Title', 'kidschool' ),

        'id'               => 'kidschool_breadcrumbs',

        'customizer_width' => '400px',

		'icon'             => 'el el-adjust-alt',

		'fields'           => array(

				array(

					'id'       				=> 'kidschool_page_title_bar',

					'title'    				=> esc_html__('Show Page Title Area','kidschool'),

					'subtitle' 				=> esc_html__('Show or Hide the page title area from here','kidschool'),

					'type'     				=> 'button_set',

					'options'  				=> array(

						'1'    				=> esc_html__('Show','kidschool'),

						'2'    				=> esc_html__('Hide','kidschool'),

					),

					'default'               => '1',

				),

				array(

					'id'       				=> 'kidschool_breadcrumbs_area',

					'type'     				=> 'switch',

					'title'    				=> esc_html__( 'Show Page Title', 'kidschool' ),

					'subtitle'    			=> esc_html__( 'Show or Hide the page title from here', 'kidschool' ),

					'default'  				=> true,

				),

                array(

                    'id'                    => 'kidschool_page_title_colors',

                    'type'                  => 'typography',

                   'title'                  => esc_html__('Page Title Font Settings', 'kidschool'),

                    'google'                => true,     

                    'subsets'               => false,

                    'line-height'           => false,

                    'text-transform'        => true,

                    'transition'            => false,

                    'text-align'            => false,

                    'all_styles'            => true,    

                    'output'                => array('.breadcrumbs h2.page-title'), 

                    'units'                 => 'px',

                    'subtitle'              => esc_html__('Controls the font settings of page title', 'kidschool'),

                    'default'               => array(

                        'google'            => true,

                    )

                ), 

                array(

                    'id'                    => 'kidschool_breadcrumbs_text',

                    'type'                  => 'button_set',

                    'title'                 => esc_html__('Page Title Text Alignment','kidschool'),

                    'subtitle'              => esc_html__('Controls the text alignment settings of the page title','kidschool'),

                    'options'               => array(

                        'left'              => esc_html__('left','kidschool'),

                        'center'            => esc_html__('center','kidschool'),

                        'right'             => esc_html__('right','kidschool'),

                    ), 

                    'default'               => 'center'

                ),

				array(

					'id'       				=> 'kidschool_breadcrumbs_full',

					'type'     				=> 'switch',

					'title'    				=> esc_html__( 'Full Width Page Title', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Turn on to have the page title area display at 100% width according to the window size. Turn off to follow site width.', 'kidschool' ),

					'default'  				=> false,

				),

                array(

                    'id'                    => 'kidschool_breadcrumb_lg_height',

                    'type'                  => 'spacing',

                    'title'                 => esc_html__( 'Page Title Area Padding', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the height of the page title area. Enter value excluding any valid CSS unit, ex: 100', 'kidschool' ),

                    'output'                => array(''),

                    'mode'                  => 'padding',

                    'left'                  => false,

                    'right'                 => false,

                    'units_extended'        => 'false',

                    'default'               => array(

                        'padding-top'       => '100px',

                        'padding-right'     => '0px',

                        'padding-bottom'    => '100px',

                        'padding-left'      => '0px',

                        )

                ),

				array(

					'id'       				=> 'kidschool_breadcrumbs_mobile_height',

					'type'     				=> 'spacing',

					'title'    				=> esc_html__( 'Page Title Area Padding on Mobile', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the height of the page title area on mobile device. Enter value excluding any valid CSS unit, ex: 80', 'kidschool' ),

					'output'   				=> array(''),

					'mode'     				=> 'padding',

					'left'     				=> false,

					'right'    				=> false,

					'units_extended' 		=> 'false',

					'units'    				=> array('em','px'),

					'default'  				=> array(

						'padding-top'    	=> '90px',

						'padding-right'  	=> '0px',

						'padding-bottom' 	=> '90px',

						'padding-left'   	=> '0px',

						'units'          	=> 'px',

						)

				),

                array(

                    'id'                    => 'kidschool_breadcrumbs_bg_optins',

                    'type'                  => 'background',

                    'output'                => array(' '),

                    'title'                 => esc_html__('Background Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the background color of the page title area.', 'kidschool'),

                    'default'               => array(
                        'background-image'  => get_template_directory_uri(). '/image/1.jpg',
                    )

                ),

                array(

                    'id'                    => 'kidschool_breadcrumbs_overlay_color',

                    'type'                  => 'color',

                    'output'                => array('' ),

                   'title'                  => esc_html__('Overlay Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the overlay color of the page title area.', 'kidschool'),

                    'transparent'           => false,

                    'validate'              => 'color',
                    'default'               => '#008C99',

                ),

                array(

                    'id'                    => 'kidschool_breadcrumbs_overlay_color_opacity',

                    'type'                  => 'slider',

                    'title'                 => esc_html__('Overlay Opacity', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the opacity of the overlay color', 'kidschool'),

                    'desc'                  => esc_html__('Overlay opacity. Min: 0, max: 1, step: .1, default value: .8', 'kidschool'),

                    "default"               => .6,

                    "min"                   => 0,

                    "step"                  => .1,

                    "max"                   => 1,

                    'resolution'            => 0.1,

                    'display_value'         => 'text'

                )

            )

		) 

	);

	//breadcrumbs

	Redux::setSection( $opt_name, array(

		'title'    	=> esc_html__('Breadcrumb','kidschool'),

		'icon'      => 'el el-arrow-right',

        'id'        => 'kidschool_blog_breadcrumb',

		'subsection'=> true,

		'fields'    => array(

				array(

					'id'       				=> 'kidschool_breadcrumbs_content_blog',

					'type'     				=> 'button_set',

					'title'    				=> esc_html__( 'Show Breadcrumb Content', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls what displays in the breadcrumb area.', 'kidschool' ),

					'options'  				=> array (

						'1'   				=> esc_html__('None','kidschool'),

						'2'   				=> esc_html__('Breadcrumbs','kidschool'),

						'3'   				=> esc_html__('Search Box','kidschool'),

					),

					'default' 				=> '2',

				),

				array(

					'id'       				=> 'kidschool_breadcrumbs_mobile',

					'type'     				=> 'switch',

					'title'    				=> esc_html__( 'Breadcrumb on Mobile Devices', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Turn on to display breadcrumb on mobile devices.', 'kidschool' ),

					'default'  				=> true,

				),



				array(

					'id'        			=> 'kidschool_breadcrumbs_separator',

					'type'      			=> 'text',

					'title'     			=> esc_html__('Breadcrumb Separator','kidschool'),

					'subtitle'  			=> esc_html__('Set the breadcrumb separator here','kidschool'),

					'default'   			=> ' / '

				),



				array(

					'id'          			=> 'kidschool_breadcrumbs_font_blog',

					'type'        			=> 'typography',

					'title'       			=> esc_html__('Breadcrumb Font Settings', 'kidschool'),

					'google'      			=> true,      

					'subsets'     			=> false,

					'line-height' 			=> false,

					'transition'  			=> false,

					'text-align'  			=> false,

					'font-style'  			=> false,    

					'font-family' 			=> false,    

					'font-family' 			=> false,    

					'font-weight' 			=> false,    

					'output'      			=> array('.breadcrumbs ul li a,.breadcrumbs ul, .breadcrumbs ul li'), 

					'units'      			=> 'px',

					'subtitle'    			=> esc_html__('Controls the font settings of the breadcrumb.', 'kidschool'),

					'default'     			=> array(

						'font-style'    	=> '300',

						'font-family'   	=> 'poppins',

						'font-size'     	=> '18px',

						'color'         	=> '#24273e',

						'google'        	=> true,

					)

				),

				array(

					'id'        			=> 'kidschool_breadcrumbs_font_size',

					'type'      			=> 'text',

					'output'    			=> array(''),

					'title'     			=> esc_html__('Breadcrumb Text Size', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the size of the breadcrumb text.', 'kidschool'),

				 ),

				array(

					'id'        			=> 'kidschool_breadcrumbs_font_blog',

					'type'      			=> 'color',

					'output'    			=> array(''),

					'title'     			=> esc_html__('Breadcrumb Text Color', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls breadcrumb text color.', 'kidschool'),

				 ),

				array(

					'id'        			=> 'kidschool_breadcrumbs_text_hover_blog',

					'type'      			=> 'color',

					'output'    			=> array(''),

					'title'     			=> esc_html__('Breadcrumb Text Hover Color', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls breadcrumb text hover color.', 'kidschool'),

				 ),



				array(

					'id'        			=> 'kidschool_breadcrumbs_post_cat',

					'type'      			=> 'switch',

					'title'     			=> esc_html__('Show Post Categories on Breadcrumb', 'kidschool'),

					'subtitle'  			=> esc_html__('Turn on to display the post categories in the breadcrumb path.', 'kidschool'),

					'default'   			=> true,

				 ),

				

				

			)

		)

	);

	 //Header center

    Redux::setSection( $opt_name, array(

        'title'     	   => esc_html__('Social Icon', 'kidschool'),

        'id'               => 'kidschool-social-icon',

		'icon'             => 'el el-arrow-right',		

        'fields'           => array( 

				array(

					'id'       	          	=> 'kidschool_social_icons',

					'type'     	  			=> 'sortable',

					'title'       			=> esc_html__('Social Icons', 'kidschool'),

					'subtitle'    			=> esc_html__('Enter social links to show the icons', 'kidschool'),

					'mode'        			=> 'text',

					'label'       			=> true,

					'options'     			=> array(        

						'facebook'    		=> '',

						'twitter'      		=> '',

						'instagram'    		=> '',

						'tumblr'       		=> '',

						'pinterest'    		=> '',

						'google-plus'  		=> '',

						'linkedin'     		=> '',

						'behance'      		=> '',

						'dribbble'     		=> '',

						'youtube'      		=> '',

						'vimeo'        		=> '',

						'rss'          		=> '',

				),

				'default'                   => array(

					'facebook'    			=> 'https://www.facebook.com/',

					'twitter'     			=> 'https://twitter.com/',

					'instagram'	  			=> 'https://instagram.com/',

					'tumblr'     			=> '',

					'pinterest'   			=> '',

					'google-plus' 			=> 'https://plus.google.com/',

					'linkedin'    			=> '',

					'behance'     			=> '',

					'dribbble'    			=> 'https://dribbble.com/',

					'youtube'     			=> '',

					'vimeo'       			=> '',

					'rss'         			=> '',

				),

			))

		) 

	);

	//Fonts

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('Typography', 'kidschool'),

        'id'        => 'kidschool_fonts',

        'icon'      => 'el el-fontsize',

        'fields'    => array(

                array(

                    'id'            	    => 'kidschool_bodyfont',

                    'type'         			=> 'typography',

                    'title'         		=> esc_html__('Body Typography', 'kidschool'),

                    'google'        		=> true,        

                    'subsets'       		=> false, 

					'word-spacing'          => true, 

					'letter-spacing'        => true,

                    'text-align'    		=> false,

                    'all_styles'    		=> true,    

                    'output'       			=> array('body'), 

                    'units'         		=> 'px',

                    'subtitle'      		=> esc_html__('Controls the typography for all body font settings.', 'kidschool'),

                    'default'       		=> array(

                        'google'        	=> true,

                    )

                ),

                array(

                    'id'                    => 'kidschool_bodyfont_link',

                    'type'                  => 'color',

                    'output'                => array( 'a'),

                    'title'                 => esc_html__('Link Color','kidschool'),

                    'subtitle'              => esc_html__('Controls the color of all links.','kidschool'),

                ),

				array(

					'id'       				=> 'kidschool_bodyfont_link_hover',

					'type'     				=> 'color',

					'output'   				=> array( 'a:hover, a:focus, a:active'),

					'title' 				=> esc_html__('Link Color Hover','kidschool'),

					'subtitle' 				=> esc_html__('Controls the hover color of all links.','kidschool'),

				),

            )

		) 

	);



	//Heading font

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('Heading Typography', 'kidschool'),

        'id'        => 'kidschool_headingfont',

        'icon'      => 'el el-arrow-right',

		'subsection'=> true,

        'fields'    => array(

				array(

					'id'            		=> 'kidschool_headingfonth1',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H1 Typography', 'kidschool'),

					'google'        		=> true,    

					'text-transform'   		=> true, 

					'word-spacing'          => true, 

					'letter-spacing'        => true,					

					'subsets'       		=> false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h1'), 

					'units'        			=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H1 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

				array(

					'id'            		=> 'kidschool_headingfonth2',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H2 Typography', 'kidschool'),

					'google'        		=> true,  

					'text-transform'        => true, 

					'letter-spacing'        => true,					

					'word-spacing'   		=> true,    

					'subsets'       	    => false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h2'), 

					'units'         		=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H2 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

				array(

					'id'            		=> 'kidschool_headingfonth3',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H3 Typography', 'kidschool'),

					'google'        		=> true, 

					'text-transform'        => true, 

					'letter-spacing'        => true,					

					'word-spacing'   		=> true,    

					'subsets'       		=> false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h3'), 

					'units'         		=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H3 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

				array(

					'id'            		=> 'kidschool_headingfonth4',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H4 Typography', 'kidschool'),

					'google'        		=> true,    

					'text-transform'   		=> true, 

					'word-spacing'          => true, 

					'letter-spacing'        => true,					

					'subsets'       		=> false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h4'), 

					'units'         		=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H4 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

				array(

					'id'            		=> 'kidschool_headingfonth5',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H5 Typography', 'kidschool'),

					'google'        		=> true,    

					'text-transform'   		=> true, 

					'word-spacing'          => true, 

					'letter-spacing'        => true,					

					'subsets'       		=> false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h5'), 

					'units'         		=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H5 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

				array(

					'id'            		=> 'kidschool_headingfonth6',

					'type'          		=> 'typography',

					'title'         		=> esc_html__('Heading H6 Typography', 'kidschool'),

					'google'        		=> true,    

					'text-transform'   		=> true,  

					'word-spacing'          => true, 

					'letter-spacing'        => true,					

					'subsets'       		=> false, 

					'text-align'    		=> false,

					'all_styles'    		=> true,    

					'output'        		=> array('h6'), 

					'units'         		=> 'px',

					'subtitle'      		=> esc_html__('These settings control the typography for all H6 Headings.', 'kidschool'),

					'default'       		=> array(

						'google'        	=> true,

					)

				),

        )

    ) );

	// Blog options

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('Blog', 'kidschool'),

        'icon'      => 'el el-file-edit',

        'id'        => 'kidschool_blog',

        'fields'    => array(

				array(

                    'id'        			=> 'kidschool_bolg_title_bar',

                    'type'      			=> 'switch',

                    'title'     			=> esc_html__('Page Title Area', 'kidschool'),

					'subtitle'  			=> esc_html__('Turn on to show the page title area for the assigned blog page in "settings > reading" or blog archive pages.','kidschool'),

                    'default'   			=> true,

                ),

                array(

                    'id'        			=> 'kidschool_readmore_text',

                    'type'      			=> 'text',

                    'title'     			=> esc_html__('Read More Text', 'kidschool'),

                    'default'   			=> esc_html__('Read more','kidschool')

                ),

                array(

                    'id'        			=> 'kidschool_excerpt_length',

                    'type'      			=> 'slider',

                    'title'     			=> esc_html__('Excerpt Length On Blog Page', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the excerpt length on blog page','kidschool'),

                    "default"   			=> 30,

                    "min"       			=> 10,

                    "step"      			=> 2,

                    "max"       			=> 130,

                    'display_value' 		=> 'text'

                ),

				array(

                    'id'       				=> 'kidschool_sidebarblog_pos',

                    'type'     				=> 'button_set',

                    'title'    				=> esc_html__('Blog Style', 'kidschool'),

                    'subtitle' 				=> esc_html__('Choose your blog style', 'kidschool'),

                    'desc'     				=> esc_html__('Select blog page style', 'kidschool'),

                    'options'  				=> array(

                        'single'   		    => esc_html__('Single Column','kidschool'),

                        'twocolumn'   		=> esc_html__('Blog two column','kidschool'),

                        'threecolumn' 		=> esc_html__('Blog three colum','kidschool'),

                        'left'        		=> esc_html__('Blog Left sidebar','kidschool'),

                        'right'       		=> esc_html__('Blog Right sidebar','kidschool'),

					),

                    'default'  				=> 'right',

                ),

                array(

                    'id'                    => 'kidschool_blog_pheights',

                    'type'                  => 'spacing',

                    'title'                 => esc_html__( 'Blog Page Padding.', 'kidschool' ),

                    'subtitle'              => esc_html__( 'Controls the top and bottom padding of the blog page', 'kidschool' ),

                    'output'                => array('.our-blog-area'),

                    'mode'                  => 'padding',

                    'units_extended'        => 'false',

                    'left'                  => 'false',

                    'right'                 => 'false',

                    'units'                 => array('em','px'),

                    'default'               => array(

                        'padding-top'       => '80px',

                        'padding-right'     => '0px',

                        'padding-bottom'    => '80px',

                        'padding-left'      => '0px',

                        'units'             => 'px',

                        )

                ),





            )

		) 

	);	

	// Blog archive

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('Blog Page Title', 'kidschool'),

        'icon'      => 'el el-arrow-right',

        'id'        => 'kidschool_blog_id',

		'subsection'=> true,

        'fields'    => array(			

				array(

                    'id'        			=> 'kidschool_blog_text',

                    'type'      			=> 'text',

                    'title'     			=> esc_html__('Blog Page Title', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the title text that displays in the page title area of the assigned blog page. This option only works if your front page displays your latest post in "settings > reading" or blog archive pages.','kidschool'),

                    'default'   			=> 'Blog',

                ),

				array(

                    'id'        			=> 'kidschool_bolg_subtitle',

                    'type'      			=> 'text',

                    'title'     			=> esc_html__('Blog Page Subtitle', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the subtitle text that displays in the page title area of the assigned blog page. This option only works if your front page displays your latest post in "settings > reading" or blog archive pages.','kidschool'),

                ),

				array(

                    'id'        			=> 'kidschool_bolg_title_color',

                    'type'      			=> 'color',

                    'output'                => array('.post-breadcrumb-banner-area h1, .post-breadcrumb-banner-area h3 '),

                    'title'     			=> esc_html__('Blog Title Color', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls blog title color.','kidschool'),

                ),

				array(

                    'id'        			=> 'kidschool_bolg_title_position',

                    'type'      			=> 'button_set',

                    'title'     			=> esc_html__('Blog Title Position', 'kidschool'),

					'subtitle'  			=> esc_html__('Controls the position of the blog title','kidschool'),

                    'options'               => array(

                        'left'              => esc_html__('Left','kidschool'),

                        'center'            => esc_html__('Center','kidschool'),

                        'right'             => esc_html__('Right','kidschool'),

                    ),

                    'default'               => 'center',

                ),

				array(

                    'id'        			=> 'kidschool_blog_banner',

                    'type'      			=> 'background',

					'output'                => array('.post-breadcrumb-banner-area'),

                    'title'     			=> esc_html__('Blog Page Title Banner', 'kidschool'),

                ),

            )

		) 

	);	

	// Single blog

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('Blog Single', 'kidschool'),

        'icon'      => 'el el-arrow-right',

        'id'        => 'kidschool_blog_single',

		'subsection'=> true,

        'fields'    => array(

				array(

                    'id'       				=> 'kidschool_single_pos',

                    'type'     				=> 'button_set',

                    'title'    				=> esc_html__('Single Blog Style', 'kidschool'),

                    'subtitle' 				=> esc_html__('Choose Single Blog Style', 'kidschool'),

                    'options'  				=> array(

                        'full'        		=> esc_html__('Single Full Width','kidschool'),

                        'left'        		=> esc_html__('Single Left Sidebar','kidschool'),

                        'right'       		=> esc_html__('Single Right sidebar','kidschool'),

					),

                    'default'  				=> 'right',

                ),

				array(

					'id'       				=> 'kidschool_blog_spheights',

					'type'     				=> 'spacing',

					'title'    				=> esc_html__( 'Blog Single Page Padding.', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the top and bottom padding of the single blog page', 'kidschool' ),

					'output'   				=> array('.blog-story-area'),

					'mode'     				=> 'padding',

					'units_extended' 		=> 'false',

					'left' 					=> 'false',

					'right' 				=> 'false',

					'units'    				=> array('em','px'),

					'default'  				=> array(

						'padding-top'   	=> '80px',

						'padding-right'	 	=> '0px',

						'padding-bottom'	=> '80px',

						'padding-left'  	=> '0px',

						'units'         	=> 'px',

						)

				),



				

            )

    ) );



	//footer section

	Redux::setSection($opt_name, array(

		'title'   => esc_html__('Footer setting','kidschool'),

		'id'      => 'kidschool_footer_section',

		'icon'    => 'el el-brush',

		'fields'  => array(

			array(

				'id'       					=> 'kidschool_footer_widget',

				'type'     					=> 'switch',

				'title'    					=> esc_html__( 'Show Footer Widgets Area', 'kidschool' ),

				'subtitle' 					=> esc_html__( 'Turn on to display footer widgets area','kidschool' ),

				'default'  					=> true,

			),

            array(

                'id'                        => 'kidschool_footer_layoutcolumns',

                'title'                     => esc_html__('Number of Footer Columns','kidschool'),

                'subtitle'                  => esc_html__( 'Controls the number of columns in the footer.', 'kidschool' ),

                'desc'                      => esc_html__( 'Select the number of columns', 'kidschool' ),

                'type'                      => 'button_set',

                'options'                   => array(

                    '1'                     => esc_html__('One Column','kidschool'),

                    '2'                     => esc_html__('Two Column','kidschool'),

                    '3'                     => esc_html__('Three Column','kidschool'),

                    '4'                     => esc_html__('Four Column','kidschool'),

                ),

                'default'                   => '4'

            ),

			array(

                'id'       					=> 'kidschool_footer_bg_color',

                'type'     					=> 'background',

                'output'   					=> array( '.footer-top-area ' ),

                'title'    					=> esc_html__( 'Footer Area Background Color', 'kidschool' ),

                'subtitle' 					=> esc_html__( 'Control the background color of the footer area(default: #008c99).', 'kidschool' ),

                'default'  					=> '#008c99',

            ),

            array(

                    'id'                    => 'kidschool_footer_overlay_color',

                    'type'                  => 'color',

                    'output'                => array('' ),

                   'title'                  => esc_html__('Overlay Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the overlay color of the footer area.', 'kidschool'),

                    'transparent'           => false,

                    'validate'              => 'color',

            ),

            array(

                    'id'                    => 'kidschool_footer_overlay_color_opacity',

                    'type'                  => 'slider',

                    'title'                 => esc_html__('Overlay Opacity', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the opacity of the overlay color', 'kidschool'),

                    'desc'                  => esc_html__('Overlay opacity. Min: 0, max: 1, step: .1, default value: .8', 'kidschool'),

                    "default"               => .8,

                    "min"                   => 0,

                    "step"                  => .1,

                    "max"                   => 1,

                    'resolution'            => 0.1,

                    'display_value'         => 'text'

            ),

			array(

                'id'       					=> 'kidschool_footer_widget_width',

                'type'     					=> 'switch',

                'title'    					=> esc_html__( 'Full Width Footer', 'kidschool' ),

                'subtitle' 					=> esc_html__( 'Turn on to make the footer area full width', 'kidschool' ),

                'default'  					=> false,

            ),

			array(

                'id'       					=> 'kidschool_footer_widget_height',

                'type'     					=> 'spacing',

                'title'    					=> esc_html__( 'Footer Padding', 'kidschool' ),

                'subtitle' 					=> esc_html__( 'Controls the top and bottom padding for the footer. Enter values excluding any valid CSS unit, ex: 50, 0,', 'kidschool' ),

				'output'   					=> array('.single-footer'),

				'mode'     					=> 'margin',

				'units_extended' 			=> 'false',

				'left' 						=> 'false',

				'right' 					=> 'false',

				'units'    					=> array('em','px'),

                'default'  					=> array(

					'margin-top'    		=> '50px',

					'margin-right'  		=> '50px',

					'margin-bottom' 		=> '50px',

					'margin-left'   		=> '50px',

					'units'          		=> 'px',

				)

            ),

			

		)

	));

	//footer typography

	Redux::setSection( $opt_name, array(

		'title'            => esc_html__('Footer Typography', 'kidschool'),

		'id'               => 'kidschool_footer_typography',

		'subsection'       => true,

		'icon'             => 'el el-arrow-right',

		'fields'           => array( 

				array(

                    'id'            		=> 'kidschool_footerfont',

                    'type'          		=> 'typography',

                    'title'         		=> esc_html__('Widget Title Typography', 'kidschool'),

                    'google'        		=> true,       

                    'subsets'       		=> false, 

					'text-transform'        => true, 

					'letter-spacing'        => true, 

                    'text-align'    		=> false,

                    'all_styles'    		=> true,    

                    'output'        		=> array('.footer-title'), 

                    'units'         		=> 'px',

                    'subtitle'      		=> esc_html__('Controls the font settings of the widget title', 'kidschool'),

                    'default'       		=> array(

                        'google'        	=> true,

                    )

                ),

				array(

                    'id'            		=> 'kidschool_footerfontbody',

                    'type'          		=> 'typography',

                    'title'         		=> esc_html__('Footer Body Typography', 'kidschool'),

                    'google'        		=> true,          

                    'subsets'       		=> false, 

                    'text-align'    		=> false,

                    'all_styles'    		=> true,    

                    'output'        		=> array('.footer-brief, .textwidget'), 

                    'units'         		=> 'px',

                    'subtitle'      		=> esc_html__('Controls the font settings of the footer body', 'kidschool'),

                    'default'       		=> array(

                        'google'        	=> true,

                    )

                ),

				array(

				'id'       					=> 'kidschool_footer_link',

				'type'     					=> 'color',

				'output'   					=> array('.footer-top-area a, .single-footer ul li a'),

				'title'    					=> esc_html__( 'Footer Link Color', 'kidschool' ),

				'subtitle' 					=> esc_html__( 'Controls the footer link color.', 'kidschool' ),

				),

				array(

					'id'       				=> 'kidschool_footer_link_hover',

					'type'     				=> 'color',

					'output'   				=> array( '.single-footer a:hover, .single-footer ul li a:hover'),

					'title'    				=> esc_html__( 'Footer Link Hover Color', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the footer link hover color .', 'kidschool' ),

				),

			)

		) );

	//footer copyright

	Redux::setSection( $opt_name, array(

		'title'            => esc_html__('Copyright Setting', 'kidschool'),

		'id'               => 'kidschool_footer_id',

		'subsection'       => true,

		'icon'             => 'el el-arrow-right',

		'fields'           => array( 

                    array(

                        'id'                => 'kidschool_footer_bottom_show',

                        'type'              => 'switch',

                        'title'             => esc_html__( 'Copyright Area', 'kidschool' ),

                        'subtitle'          => esc_html__( 'Turn on to display the copyright area.', 'kidschool' ),

                        'default'           => true,

                     ),

					array(

					'id'       				=> 'kidschool_copyright_column',

					'type'     				=> 'image_select',	

					'title'    				=> esc_html__('Footer Copyright Style','kidschool'),

					'subtitle' 				=> esc_html__( 'Choose footer copyright style', 'kidschool' ),

					'options' 				=> array(

						'1' 				=> array(

							'title' 		=> esc_html__('Style One','kidschool'),

							'img'  			=> get_template_directory_uri().'/image/optionframework/fs-1.png',

						),

						'2'                 => array(

							'title'         =>  esc_html__('Style Two','kidschool'),

							'img'           => get_template_directory_uri(). '/image/optionframework/fs-2.png',

						),

						'3'                 => array(

							'title'         => esc_html__('Style Three','kidschool'),

							'img'           => get_template_directory_uri(). '/image/optionframework/fs-3.png',

						)

					),	

					'default'               => '2',

				),

				array(

					'id'       				=> 'kidschool_footer',

					'type'     				=> 'sorter',	

					'title'    				=> esc_html__( 'Footer Copyright Content','kidschool'),

					'subtitle' 				=> esc_html__( 'Enable and disable footer copyright area content just by dragging and dropping.', 'kidschool' ),

					'options'  				=> array(

						'enabled'     		=> array(

						'copyright'   		=> esc_html__('Copyright','kidschool'),

						'socialicon'  		=> esc_html__('Social icon','kidschool')

						),

						'disabled'    		=> array(

						'copyrightmenu'     => esc_html__('Menu','kidschool')

						)

					)				

				),

								

				array(

                'id'       					=> 'kidschool_footer_copyright_width',

                'type'     					=> 'switch',

                'title'    					=> esc_html__( 'Full width Footer', 'kidschool' ),

                'subtitle' 					=> esc_html__( 'Turn on to make full width copyright area', 'kidschool' ),

                'default'  					=> false,

				),

				array(

					'id'       				=> 'kidschool_footer_copyright_height',

					'type'     				=> 'spacing',

					'title'    				=> esc_html__( 'Footer Copyright Padding', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the top and bottom padding of the copyright area. Enter values excluding any valid CSS unit, ex: 20, 20,', 'kidschool' ),

					'output'   				=> array('.footer-bottom'),

					'mode'    				=> 'padding',

					'units_extended' 		=> 'false',

					'left' 					=> 'false',

					'right' 				=> 'false',

					'units'    				=> array('em','px'),

					'default'  				=> array(

						'padding-top'   	=> '20px',

						'padding-right' 	=> '0px',

						'padding-bottom'	=> '20px',

						'padding-left'  	=> '0px',

						'units'         	=> 'px',

					),

				),

				array(

					'id'       				=> 'kidschool_copyrightbg_color',

					'type'     				=> 'background',

					'background-attachment' => false,

					'background-size' 		=> false,

					'background-position' 	=> false,

					'background-image' 	    => false,

					'background-repeat' 	=> false,

					'output'   				=> array( '.footer-bottom' ),

					'title'    				=> esc_html__( 'Footer Copyright Background Color', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Control the background color of the copyright area(default: #008c99 ).', 'kidschool' ),

					'default'  				=> '#008c99',

				),

				array(

					'id'        			=> 'kidschool_copyright',

					'type'      			=> 'editor',

					'title'     			=> esc_html__('Copyright Content', 'kidschool'),

					'subtitle'  			=> esc_html__('Enter your copyright content here. HTML tags allowed: a, br, em, strong', 'kidschool'),

					'args'      			=> array(

                    'wpautop'          	 	=> false,

                    'teeny'             	=> true,

                    'textarea_rows'     	=> 5

					)

				),

				array(

                    'id'            		=> 'kidschool_footercopyright',

                    'type'              	=> 'typography',

                    'title'         		=> esc_html__('Footer Copyright Typography', 'kidschool'),

                    'google'        		=> true,     

                    'subsets'       		=> false, 

                    'text-align'    		=> false,

                    'all_styles'    		=> true,    

                    'output'       			=> array('.copyright-text,.copyright-text > p'), 

                    'units'         		=> 'px',

                    'subtitle'      		=> esc_html__('Controls the font settings of the footer copyright text', 'kidschool'),

                    'default'       		=> array(

                        'google'        	=> true,

                    )

                ),

				array(

					'id'       				=> 'kidschool_footer_copyright',

					'type'     				=> 'color',

					'output'   				=> array( '.copyright-text a,.footer-bottom ul li a'),

					'title'    				=> esc_html__( 'Footer Copyright Link Color', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the link color of the copyright text', 'kidschool' ),

				),

				array(

					'id'       				=> 'kidschool_footer_copyright_hover',

					'type'     				=> 'color',

					'output'   				=> array( '.copyright-text a:hover, .footer-bottom ul li a:hover'),

					'title'    				=> esc_html__( 'Footer Copyright Link Hover Color', 'kidschool' ),

					'subtitle' 				=> esc_html__( 'Controls the link hover color of the copyright text(default: #ff7f00).', 'kidschool' ),

					'default'  				=> '#fff',

				),

			)

		)

	);

    //404 error page

    Redux::setSection( $opt_name, array(

        'title'     => esc_html__('404 Page', 'kidschool'),

        'id'        => 'kidschool_error_page',  

        'icon'      => 'el-icon-picture',

        'fields'    => array(                

                array(

                    'id'        => 'background_404',

                    'type'      => 'background',

                    'output'    => array('.error-area'),

                    'title'     => esc_html__('404 Page Background', 'kidschool'),

                    'subtitle'  => esc_html__('Controls the background of 404 page.', 'kidschool'),

                    'default'   => array(

                        'background-color' => '#FFFFFF',

                    )

                ),

                array(

                    'id'                    => 'kidschool_404_control',

                    'type'                  => 'button_set',

                    'title'                 => esc_html__('404 Style', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the 404 title or image.', 'kidschool'),

                    'options'               => array(

                        'title'             => esc_html__('Title',  'kidschool'),

                        'image'             => esc_html__('Image', 'kidschool'), 

                     ), 

                    'default'               => 'title'

                ),

                 array(

                    'id'        => 'kidschool_404_title',

                    'type'      => 'text',

                    'required'  => array('kidschool_404_control','equals','title'),

                    'title'     => esc_html__('Title', 'kidschool'),

                    'subtitle'  => esc_html__('Insert your page not found page title ( 404 )', 'kidschool'),

                    'value'     => '404',

                    'default'   => '404'

                ),

                 array(

                    'id'        => 'kidschool_404_img',

                    'type'      => 'media',

                    'required'  => array('kidschool_404_control','equals','image'),

                    'title'     => esc_html__('Title or 404 Image', 'kidschool'),

                    'subtitle'  => esc_html__('Upload your 404 image.', 'kidschool'),

                ),

                array(

                    'id'        => 'kidschool_404_subtitle',

                    'type'      => 'text',

                    'title'     => esc_html__('Sub Title', 'kidschool'),

                     'subtitle'  => esc_html__('Insert your page not found page subtitle.', 'kidschool'),

                    'default'   => esc_html__('PAGE NOT FOUND', 'kidschool'),

                ), 

                 array(

                    'id'        => 'kidschool_404_info',

                    'type'      => 'editor',

                    'title'     => esc_html__('Information', 'kidschool'),

                    'default'   => esc_html__('The page you are looking for does not exist or has been moved.', 'kidschool'),

                    'args'      => array(

                        'teeny'            => true,

                        'textarea_rows'    => 5,

                    )

                ),

                array(

                    'id'        => 'kidschool_button_text',

                    'type'      => 'text',

                    'title'     => esc_html__('Button Text', 'kidschool'),

                    'default'   => esc_html__('Go back to home page', 'kidschool'),

                ), 

                array(

                    'id'            => 'kidschool_404font',

                    'type'          => 'typography',

                    'title'         => esc_html__('404 Page Title Font', 'kidschool'),

                    'google'        => true,    

                    'font-style'   => false,    

                    'font-weight'       => false, 

                    'font-family'   => false,

                    'subsets'    => false,

                    'line-height'   => false,

                    'text-align'   => false,

                    'all_styles'    => true,    

                    'output'        => array('.pnf-inner > h1'), 

                    'units'         => 'px',

                    'subtitle'      => esc_html__('404 page font.', 'kidschool'),

                    'default'       => array(

                        'google'        => true,

                    )

                ), 

                array(

                    'id'            => 'kidschool_404font_subtitle',

                    'type'          => 'typography',

                    'title'         => esc_html__('404 Page Title Font', 'kidschool'),

                    'google'        => true,    

                    'font-backup'   => false,    

                    'subsets'       => false, 

                    'line-height'   => false,

                    'text-align'    => false,

                    'text-transform'    => true,    

                    'all_styles'    => true,    

                    'output'        => array('.pnf-inner > h2'), 

                    'units'         => 'px',

                    'subtitle'      => esc_html__('404 page font.', 'kidschool'),

                    'default'       => array(

                        'google'        => true,

                    )

                ),

                array(

                    'id'            => 'kidschool_404font_sub',

                    'type'          => 'typography',

                    'title'         => esc_html__('404 Page Sub Title Font', 'kidschool'),

                    'google'        => true,    

                    'font-backup'   => false,    

                    'subsets'       => false, 

                    'line-height'   => false,

                    'text-align'    => false,

                    'text-transform'    => true,    

                    'all_styles'    => true,    

                    'output'        => array('.pnf-inner > p'), 

                    'units'         => 'px',

                    'subtitle'      => esc_html__('404 page sub title font.', 'kidschool'),

                    'default'       => array(

                        'google'            => true,

                    )

                ),

            )

    ) );

    //layout

    Redux::setSection( $opt_name, array(

        'title'            => esc_html__( 'Extra', 'kidschool' ),

        'id'               => 'kidschool_extra',

        'customizer_width' => '400px',

        'icon'             => 'el el-arrow-right',

        'fields'           => array(

                array(

                    'id'                    => 'kidschool_scroll_button_enable_disable',

                    'type'                  => 'switch',

                    'title'                 => esc_html__('Scroll To Top Enable/Disable', 'kidschool'),

                    'subtitle'              => esc_html__('Turn on/off the scroll to top button', 'kidschool'),

                    'default'               => true,

                ),

                array(

                    'id'                    => 'kidschool_scroll_button_color',

                    'type'                  => 'color',

                    'title'                 => esc_html__('Scroll To Top Button Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls scroll to top button background color', 'kidschool'),

                ),

                array(

                    'id'                    => 'kidschool_blog_pagination_color',

                    'type'                  => 'color',

                    'output'                => array(' '),

                    'title'                 => esc_html__('Pagination Hover & Active Background Color', 'kidschool'),

                    'subtitle'              => esc_html__('Controls the background color of pagination when it is hovered over and active', 'kidschool'),

                ),

            )

        ) 

    );
		

    /*

     * <--- END SECTIONS

     */