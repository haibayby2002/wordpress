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
 * @link https://codex.wordpress.org/Editing_wp-config.php
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
define( 'AUTH_KEY',         'FJ`A/dT@{^jd!f+))%Hj`MhM;HqLGF(a=@3B}!rLA1ULshmh:R,:Bre2^w7v6]>9' );
define( 'SECURE_AUTH_KEY',  '=iu,/)l-OoJWbSl6+y(!/b73K it&F3tv;[#krPRe7olaunQV:r|YvilU.-wD4X:' );
define( 'LOGGED_IN_KEY',    'F0Yw{XxD?h3j>YD]=ohs[[)_*roum^{rG@fdw^[]BG~izFf;d*zVQrfaD9wu|3Nz' );
define( 'NONCE_KEY',        '7ucr`[p[/mthGcW) &LJwBxaT1~:V/UOT1r?Ij#,N+Z(.9 #Af$KRhOKlJ8)tq`$' );
define( 'AUTH_SALT',        '!#,xYD67^e+tXAQt>N]cIIE&NK?^N37:$B]2|P}S21]W9B-?1Ug3!*wj!%PMsERd' );
define( 'SECURE_AUTH_SALT', 'KpY%#sLx[Xbh?g`Qd$y(4}rK NGkGr:ks( ArU@U7W)Hir6}Z2?hzLO>+L7Wdt3M' );
define( 'LOGGED_IN_SALT',   'IBkNdc483|hG(uDf |pZSVuz4eo)%5iIDNItMlpIf@iJ:toHC~psd~2M2*{3HZ(T' );
define( 'NONCE_SALT',       'lUQ@=Y<kq3Zl9(`Y?*f~(=Z!mjF78+l,T$?wC,mi o{ZGsMmAr+-f=vxBC76Q)U+' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );

