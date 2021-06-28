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
define( 'DB_NAME', 'aluraviagens' );

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
define( 'AUTH_KEY',         '=C0#@lI0=w_m!ToFd7*-G6s$Ed@AJTPm9_i;pW4y<s9n<Sw2s~Z#58D_--tMJ<_U' );
define( 'SECURE_AUTH_KEY',  'aX~#X{ojryPZ8Asnao~.INEiG;5yIdv**ke}y;u?D%`78<s<de-8y_:E:F@uyQFb' );
define( 'LOGGED_IN_KEY',    '?VS[PVK5uL1cFLw.K@w53.w7}p)*wc#y0= N4rOJQa55.HEwG?C.REy?PGC1,eir' );
define( 'NONCE_KEY',        'K{,EsSh7S(S.90>_I*MKeYU*cci*M3nXru-?ED>&:|.tG/ I7QqI6_JA|>b:G+sa' );
define( 'AUTH_SALT',        '_1Tg_vB(m9XVs:kJx0rh8{Qhn4t/%^At<UuT3hD[4e 1B y!i`O-a7 rX/&S/)/d' );
define( 'SECURE_AUTH_SALT', 'Sv,``Ls#c!hsy{YPu1a^EZ5f-;DRS/sqH$l(OAh(iE8EI{X:.V^#j}]Xa$2_:;#%' );
define( 'LOGGED_IN_SALT',   'iwx,tUSd:-=Ck~J^USX%W9+|B`;|(Ty&#jp.}~osi|CBRL=s,ils^cz$_KJ-$H?,' );
define( 'NONCE_SALT',       ')l([Mb+A2ki.?P[LUst;>d8I(VwVR)E,xz)d<ypL44%KgD./v2lyRM/5V=dHtLC)' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
