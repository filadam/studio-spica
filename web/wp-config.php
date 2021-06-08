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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_spica' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '5_FH7l`{QIG]-rmcF8,+);ab@^YN)v6lY<>,i2<Ou#%5{+IvT8M3pe6Hdq=Q*;Xt' );
define( 'SECURE_AUTH_KEY',  'NvD!E_V&8;XG3-RmZ1:4`ab;WG_mS.J<=CAGT<83EOe$m*`8BarGcmn28mU=5~1P' );
define( 'LOGGED_IN_KEY',    '_dge?rsBjfN#&HKBV)Ew1}[rxTOyS@xi{s1C~2`n-n^vk,hYVq/RL7&o9R;H)5+*' );
define( 'NONCE_KEY',        'f@:X4zG$jKe=9&@_mHn_I~~&3hF%Yc,DK]vxn~,ExIo~j8Vdbbg?K;;e3>Dr4IgK' );
define( 'AUTH_SALT',        '`0!XH&x0i_HJimebBp9,JC5kKk2Zlu8oJCYK6?iAqz15`Ufg~I8a-lSi`asiOLZS' );
define( 'SECURE_AUTH_SALT', 'M%lY9Bq6FE&c >X@$3tHX ~^FXuXU+,^HB*2FB^N)gBZMX%N~4E56+6^V>_,9sKc' );
define( 'LOGGED_IN_SALT',   '#@deE-/jV[4<Y 26+TQI{Eq8zfwo@@w_}/Zn/o]mV 4Q!<b68C5Ou6c4SmXcp}Jn' );
define( 'NONCE_SALT',       'iN$]qRs@gR&pp.;G*r_ofl=*NS[wW#ID</B0Ac]rK}=#Iv7IE!5d<I<r$sV|EX>o' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'hg4_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
