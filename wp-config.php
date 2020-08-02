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
define( 'DB_NAME', 'wp_dev' );

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
define( 'AUTH_KEY',         '|Lc_8=x&v SY,DtvWX]&=8{AacT;sPw{NJok-V)q?W(rOPxHSi&QJt:9MBMf5Y`z' );
define( 'SECURE_AUTH_KEY',  '9m+_%v)7YTRJ;*<q)cx[=Klv/n)#86A7m:/5ep$E!+!]CvzQ9T;c(1;p@jJ^,B3[' );
define( 'LOGGED_IN_KEY',    'CZJgNnIl_vM7ld1,aM6tHG&2+_xQIM(V-spP%aBzqku_YY{0so0x1_0dz%9YQ+t&' );
define( 'NONCE_KEY',        '0Sz4VU-W-Kwl@nrBApp$PrM? ALmv[|l]|(L>g n W+Q${PR*`1r2d$J/4gEo4&j' );
define( 'AUTH_SALT',        'NuWOsK#omaU_k8q$ICGx?{[}2xf?-KUHsUwgH*f>XhC-Sh_E}%a,)j2U739E$i)U' );
define( 'SECURE_AUTH_SALT', 'ArpflzB|B:.G}tgXxT@D<|gL[5P[0O4^[ET3;eVh^n~  dF531C66?~28|7?Sv|:' );
define( 'LOGGED_IN_SALT',   'KOJe0Hk$f4cyF(_p$Av&^GJT{i,<Udk4iNX(Y^/2glAd?0Erm1!no>l;7KU|/p3^' );
define( 'NONCE_SALT',       '~#C(]HzO3q*~wq=oJ+y,r4&xAFqUU 8dBSAG]nhT%wxH;beq!J.;d2LcP/y^<y54' );

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
