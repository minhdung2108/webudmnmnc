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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'webudmnmnc' );

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
define( 'AUTH_KEY',         'ZkrQ7[Kw0:j[)uz;L=EG1?an5L&VyO#9-R$Bg#Rn[Cn1%^2w@PBBF!&kP)*_H!%)' );
define( 'SECURE_AUTH_KEY',  '+[Pl0I(|00|X)^LJrS~PBE 9(&e7IM968h;,!uAz(:1L5++A[xz%=8%N),I4,cy0' );
define( 'LOGGED_IN_KEY',    '6vp2XuEC;F$3<zG>Wsk$Qb,*JehE$hE:rucU~&{wb}tFYvAmN0x;h!d0hmNv2&pB' );
define( 'NONCE_KEY',        'LGS8pbcd)FFNyh1f;B9&?bg%+R/KP9&@wS|SpV&=C*PZm-{H^i buR1njg>~.n]U' );
define( 'AUTH_SALT',        'l2(<ikL9!,ho7kdKca=q`1j&g;f/mcp1lfnt#?1m+)6MVCSBI*QUJmASdXG,YtKq' );
define( 'SECURE_AUTH_SALT', 'M#ltOQIYSg)[?.ryN@t!WSJ5Rdz`5Mpgn:|kQ?NtfDF@cM&SqBAfk=tFc+;FlRXv' );
define( 'LOGGED_IN_SALT',   'N}eF;BcX;u_. ZV{ M)QypV/pDcgWO+UteUE!OPU357vWz=rtkd/nx/,G_nf651Y' );
define( 'NONCE_SALT',       'y*TTae=l8yO|N?bH)Y!=sF]i-Wc34kCbTp?sOrJ.$i9vV<F-fYaaEM<`iFT$4C/)' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
