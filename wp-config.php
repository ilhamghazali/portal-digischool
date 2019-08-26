<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', getenv('MYSQL_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('MYSQL_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('MYSQL_PASSWORD') );

/** MySQL hostname */
define( 'DB_HOST', getenv('MYSQL_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'bu|[LZ`~s&oqcZbav>K]/N0]6Yl1g.Tp<w|EJ!|u#K$<^Yx(~?KnbFi&3cs;qJe$');
define('SECURE_AUTH_KEY',  '*;J6aRD|f~ANtv-sFF7Q~a5d)&+^!PX0:SE}JT>g}j8F[>%U18<VhC3>Y/]QZ8i]');
define('LOGGED_IN_KEY',    '|{Hw-;^]T98,A7,ey1[GTycl7+7,*OT*#$GI4n;CP!y~`fU+)Fp=3_4omx!nu]At');
define('NONCE_KEY',        ':<3gg,ox7l6X A<.cS&@T~+Oh--|aI-%1h<3Ei^ra>eF+w4mHUn!D)?A<z|@OSi2');
define('AUTH_SALT',        'Cwpi+p4sx&bZ|G-_`+mvv.[_%6GGj`=tv%l!h?[emCg$o~sN_aQI-Tbh(r,P}Q< ');
define('SECURE_AUTH_SALT', '*ly3>#8OH1]yvPFPC)T-xyhBR-kBF@YXvb52tUs)7>?j{s!tHyi+V&UFf-)-HSmH');
define('LOGGED_IN_SALT',   'h1T91e`eZt21]CAD<gR;OT:9((>QX^h0M-,40+(+_.oMs+x`NuU:Jo]Q>SPe-4_.');
define('NONCE_SALT',       'J!g -_x8WLi?5cw,*{=Vy>-w6p_jMb*J8`A+`H-Eu&5Y~Hl8BueNGa}Gl4yy|5!>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
