<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY',		 'VkvM[}o)<0,@TuG-E3Zd+qM[f%ZB0zZ;>F@o~u}59%;EdVO?H(E_k?}]t$Wi%$zD');
define('SECURE_AUTH_KEY',  '6_D{(?5bC^X|9PEz.aNxAg@W@us@tX)Ad~5FrBx_J;ORVim8:h3JXZEaLCFd}n_$');
define('LOGGED_IN_KEY',	'%yu-6W.dMer§(CNa;yrZ^9[FtHjAy-Y?>eK}5@w<CWV}-}KZxnOfatev[[`9Q$DV');
define('NONCE_KEY',		't1hwmX t)(71DcXbsy%8cYI%G._3)haF,(k!b$%@gz1q6!16v&{!C+;`84g1vFFh');
define('AUTH_SALT',		'=w15.ZTa&9wjI2-R.Yeq?y+J X=qR>O94+!gw9nmt3,j5?,xhuaHSrvLCC$fwhBT');
define('SECURE_AUTH_SALT', ';r$GO>weHTcHd8>f1r>=;5>Jqf GQLcmt_e7K4%h/NVf _ug9(MNTbAhInznN!2}');
define('LOGGED_IN_SALT',   ')K}(M=&HR3ia8!%7yVrx[CJ$TELXb§?vuK91]M4K+@Py{VMF0§l2G6my[,UE>c=h');
define('NONCE_SALT',	   '/J%O=7|;IX[ fQfUrr$1DuW-;LFy_V(fU^a[u?6LL>m[UaVCIgTcQ<&4IC=%dwB^');

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
