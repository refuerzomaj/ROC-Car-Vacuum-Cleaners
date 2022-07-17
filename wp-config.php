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
define( 'DB_NAME', 'roc_car_vacuum' );

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
define( 'AUTH_KEY',         'L{X+ o&`g VzMitR_*3Q&@=b{eYBtz.F|rw]z$R/$Q&=&(}dDr_UoC<xn:V$4ajP' );
define( 'SECURE_AUTH_KEY',  'h0K=FcrMn4:-lLv?)Uvf>0-Xrs&AT,ix3i4M7K5M1?`95$6dn*e^%IZE5+%>pj-~' );
define( 'LOGGED_IN_KEY',    '?&:;-FCw2Js*U,y$3hG<OJ<75$mx.l/__{Oa_I|.ExXG$e;DF%:==E26sl S@8Cu' );
define( 'NONCE_KEY',        ' .]_OHJ+j,/wb*V(en${]bk(gA3?ZmITs]Pj%O>D7y=s=X^F^9+)63eFzp]t@#{d' );
define( 'AUTH_SALT',        '%gQ}Bw[A_a p }_^GF6d/&>oNlf_]6#B8%BRUqBP_Wt2h[T3V|8YCWCW2>&640#;' );
define( 'SECURE_AUTH_SALT', 'LmnSm_f&@E>tUuLM,:B|%B<!O/7<cD/QN$WCU+I/H3ai by@F-`qp<9rRyR|;Vq;' );
define( 'LOGGED_IN_SALT',   '46aH~^^H0JeE!.fX*xu?Vq$(ZUswe+W}*&X|X96k;,#~e7z`a++fVh[a/2@cq%kq' );
define( 'NONCE_SALT',       'nYd/Zml!D~|ENCSz0R|6#)OqK_#4*9imdCU_n4C_^1Er/B&P944A ##f$h?rcFJk' );

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
