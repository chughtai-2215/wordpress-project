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
define( 'DB_NAME', 'Developer' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'x]1?0$,*i(Sy,^0e$d6[W5*`a=7(j2r`YHvZ8aFY$ELxurj0(DxJgjLc6x[|@{~*' );
define( 'SECURE_AUTH_KEY',  'fU&3T{$^JmU%Y8|2fHQz_4@:W5G3)kYTBd/@8QU,7nma3wg|h=Zu7`4B|q1lubcL' );
define( 'LOGGED_IN_KEY',    'rXa>&RCD*=0vCaVa$<>!Ne^wr$6O$]XVShQA&HBqB#g;{G;8oj^L!|lOs9q+krj+' );
define( 'NONCE_KEY',        'BlhI:^*au!1b:9D!6?eG.ftV5PxTes_s&#8]<hRf(#9@K%6VCn:L /*yYK>u-C8p' );
define( 'AUTH_SALT',        '=l_ch@rz^.=C =`)0G0;$H`RmK{a>$A_FcxmP^;yFlT)aCN+|q3t=tz7P.%kypwr' );
define( 'SECURE_AUTH_SALT', 'l?]SF[O7Dz!|B<WHV?#l:#![MWxn{`YN,%p9q:g=z84#s!VWjR2YyYx6(&ZCRc{G' );
define( 'LOGGED_IN_SALT',   'NagVc.K*)}o[#NkK~nvvE^9m|I*,9I$/;?pKw#QPZYK|[,]>TV[0_Y`m_>727)W4' );
define( 'NONCE_SALT',       'oBzVK47l%zHzhdzU!=ZPk,XRj`Il#R@q9ROR$A<Y 4,IGlnVA@|NGc$,b#V9gcc3' );

/**#@-*/

/**
 * WordPress database table prefix.
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
