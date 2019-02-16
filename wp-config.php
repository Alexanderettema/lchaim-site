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
define('DB_NAME', 'wordpress_speedtest');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'YGHewv se6),~?,mgg+ ?37Nmx?`m*4k/f/dM0%K3#%a0sls%k~?Y`(C37||<>8~');
define('SECURE_AUTH_KEY',  'HkP*x5$J#XQDT9?oy5h<>Y/:*.UwQ*oFL4LJOGml6mMb6Ts22.em! Y)m=0.t@xP');
define('LOGGED_IN_KEY',    'M0C|qv^% 7b%Sqed)^eO`#30SSRG`=VBq@^:HW_|Lyh<_<p}x?#Dl90RQRD83h#_');
define('NONCE_KEY',        ')cI*d%}_afQYO%A&CZb7kIl+ Nk30-om9J0NvV^uQ@U[K5[KB{}l.j[t]F2pnwJQ');
define('AUTH_SALT',        'p(u)$ztD$wm,UV*T*Wbx@U`!1A&Sj].-:/Lza<`== nAW3z{*`Q V[+ql{u11:6y');
define('SECURE_AUTH_SALT', 'lXL:9LY&vn!R|{`j}ZDy?P)?v/8Je_mWsZ+2:,1)8=0&SUR|Wm#W|BlB,Efb(@QN');
define('LOGGED_IN_SALT',   ' B,U7<D,g^E+)|J&-$O#WA/ew:4RF)7s^y0t~mP>Pw99ozn!uBTmsBV,tzcOu5JX');
define('NONCE_SALT',       'tF&w7kYEU[4ld3}bQnZC2e&vLtyf`4Vhjx<GE2^o:t=hD=^g/?9k%^|W}^8=_?mm');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);
define( 'JETPACK_DEV_DEBUG', true );
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** For Importing Demo Content POFA Theme. */
@ini_set( ‘upload_max_filesize’ , ‘100M’ );
@ini_set( ‘post_max_size’ , ‘100M’ );
@ini_set( ‘max_execution_time’ , ‘180’ );
@ini_set( ‘memory_limit’ , ‘256M’ );
@ini_set( ‘max_input_vars’ , ‘2000’ );
@ini_set( 'upload_max_size' , '20M' );
