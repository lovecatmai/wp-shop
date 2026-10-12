<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shop_db' );

/** Database username */
define( 'DB_USER', 'shop_user' );

/** Database password */
define( 'DB_PASSWORD', 'shop_pass123' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'z%l`Ex87QZnWlQgTI#/J&,J<)~N2FH87fXTsGYyJttyEWEp!rNnc>Mah`sVTJGKw' );
define( 'SECURE_AUTH_KEY',  'H:$/ozik/0&pUV-4nR/DF5.bY)rz=Q7PYlXzBp8_6x/&/g@#6c~F|Do)yT`xHPbh' );
define( 'LOGGED_IN_KEY',    'q3`1kk{ 7m:NBA_<_*pm2V?uCpmbizc{8935YnD8>Mb;^sqZ~D?W&n@tr^AkQf8S' );
define( 'NONCE_KEY',        '2~s;=u#[@1$2zjgZn^<&]!mPQKYZRiA^+{+Q8C =}Y>$;Hk:YDI?]Y.a_LBCCf({' );
define( 'AUTH_SALT',        ',I]g2qaSIOSb)Z;e+JR23O9MLGQGF^;=ql$8Vx;J1e`N87ng:f?DrL92Fg$YV8#}' );
define( 'SECURE_AUTH_SALT', 'rJ@-)<|LiuTQS]FB=d%Xn5:oRtx,;D4:!>$_c7K5D(@|eA#DVT&,6l920~I/hVQu' );
define( 'LOGGED_IN_SALT',   '193*#R}b]][chGmZx|^YulchlG]yx:z,TjS (@SA9J)f9zTYecIWQ,:q8KB6h1hA' );
define( 'NONCE_SALT',       'ut^TSl2XxN$=@kcvl/aC>[iBoT7p.ew/Q)h&}WHq1E7qPPGzYJ&R:llhd_xM2_`l' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
