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
define( 'DB_NAME', 'ecom' );

/** MySQL database username */
define( 'DB_USER', 'soltee' );

/** MySQL database password */
define( 'DB_PASSWORD', '11111111' );

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
define( 'AUTH_KEY',         'WyM}d-]g.z8itbunt:i;iU9_gJ,48K:Mp%;&:_i:S8ykPxRUK}niEagg$l4%)py7' );
define( 'SECURE_AUTH_KEY',  'Wo{nLY<R@6Ieqq~oJG33dMio?UGZ2txdg@VfGY,YwI`m`lw%fQ~?y%%AFL}~-T^A' );
define( 'LOGGED_IN_KEY',    'h1Ik)e.n?1gKiypx2[)nh|QK>DANx+!dhOniQg[XQ.>#aKeBIwoQm?9Q0K<cO+}X' );
define( 'NONCE_KEY',        'DY)C(X>k94F8 k(35VC)lC!L1Sh|X&>(]Qt;N|.Jgi3#4fVgt-kS_2!%&EGbsLI4' );
define( 'AUTH_SALT',        ']gNh&yyR<96}*}kg+1_-X^AKv+Ui:JLpN*xKEqnKRip(S7JAz}{af!2D%_i/[M?F' );
define( 'SECURE_AUTH_SALT', 'y#sx6pV+bPehL<lVCl!MtL8ZU=KjRP$RvPV}3:9,1j<-73nE-LPPF5mkh<#K1~7;' );
define( 'LOGGED_IN_SALT',   'V%3x-,u!ZImQgT[~6`NS9WCA](WdbRVd-! _YTcM5WMtsS6T_sL]rYRn jzw!yfI' );
define( 'NONCE_SALT',       '`mro/m5=d6~D.Vr!f9xsl#K0k8}#|?L/CUWrAvmy3b`A7ml@3h/i TwKDqEV/0:^' );

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
