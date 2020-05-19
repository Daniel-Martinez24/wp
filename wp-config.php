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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'Qw[f2(1SvH/upJYrQjS>:%1z7KLksMZWMdC(AV(+rR:lPEQ0LX+[ U/>eT4Ha~|,' );
define( 'SECURE_AUTH_KEY',  '&Nz+0)!Xp2zN,.(}T5dK50gsMj1fQ^RsC0jz} ek 1@<2 l hl9i})J:;ZG&!i8L' );
define( 'LOGGED_IN_KEY',    'Zt$mbS}i1[fSR)Z-`HWd4Q~Sed0MF$NljOniW?nt%<tNsv}C_=)sz:V(fxV[gax%' );
define( 'NONCE_KEY',        'x?-*VT}U+j1YeYEdVz`T&{~`u*3=.2fR+BYAu?~Ts&CZU8M9@}Es2i3/E|LAhV!R' );
define( 'AUTH_SALT',        '-CM;n:mtA*< .*~;MB9h^<yEk.,U4Otzv!CDAr7^[saS_>Aa?^r-|`l>JX_-?zp$' );
define( 'SECURE_AUTH_SALT', '.dYx#>A{0I=a7+69*Wpl08m?GVQE`~cP%7, tq#m5d231O`Gk>[<$Tr233%0+tL2' );
define( 'LOGGED_IN_SALT',   'J0gbo}|(E{l~v?.64+^g)84U-&wMEfou*#?ar#1yyjF`QsF30DV9U3*h|:[>M|hd' );
define( 'NONCE_SALT',       '&@M[L3nT?uF,E7<gi^j+6SefY.E3.*,r8|OIl^QkJQ)|VE+WbX*4{ B5*r`hB Xj' );

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
