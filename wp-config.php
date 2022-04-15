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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'twp' );

/** MySQL database username */
define( 'DB_USER', 'twp' );

/** MySQL database password */
define( 'DB_PASSWORD', 'twp' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'm HPaAA<nwgvK#~_4/5143gjP|o>o}`5&Hu7ws(yLp89e+f%Ik[!A5$oPV!@m`~3' );
define( 'SECURE_AUTH_KEY',  'HXQH/*gO#fM)tkG8m2rkB26bqZdoC#i8%W9TxZ*:_9gCw(_^*L[)l|cLSr>_kfcC' );
define( 'LOGGED_IN_KEY',    'PnZ&I~=RV+~a{USt4&aYs{RR;Q6FeFf5kI!B@*0I`,Hm]fjicpM&xM=rh5*VN;a:' );
define( 'NONCE_KEY',        'L*axIi$qam|.{0q#+,`#isB~9rPg!bbpAvl=C);x!5lLWYYvMt.Rc)Qu_}RB E:C' );
define( 'AUTH_SALT',        '>9>@}k^|p>WH]yWDYxETh6{7zlDeHssS#;Aw{I|(CTE&C]b[U6%Y(LiM_*F>[kk$' );
define( 'SECURE_AUTH_SALT', '9B a6S5rT6jn?{jdpv PY+e[xiQ5W ChToBpdv!jcCi|&9B`OQDM^*FeM+j4zCX/' );
define( 'LOGGED_IN_SALT',   '|z 40/`>C~^R/-eVvgJcH:Hj&cL?Fr$R7?(2T=vte6?Y>Ons`#cy7[EZUA=xeUwQ' );
define( 'NONCE_SALT',       '>ZH7EH% yj=TBIe:u154i$_~^o_(oCdN%?qw#s<Gl)3TT/CH;LaFCj:?;$,Ey=>9' );

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
