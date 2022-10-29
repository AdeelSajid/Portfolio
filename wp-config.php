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
define( 'DB_NAME', 'portfolio-dbs' );

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
define( 'AUTH_KEY',         'EL($9:K_NO.Dc@ITrTTpTU&+kE0@)=M@[g=>:{{wPwq&E~6kx;Hik wmu_|5Aqyd' );
define( 'SECURE_AUTH_KEY',  'kt=YQ:XxJ[axr`+xXGB5Z`Ecd/$YZd!ItgDw-(nQ%hGW 6z$U3fAYbnxsx;y&3#7' );
define( 'LOGGED_IN_KEY',    'lre|M5D3,)bL<zVC~cZP)G:^(M7@^v]On_9yE[_2mv`Q37gv9tOE3T>h ZWOY%A^' );
define( 'NONCE_KEY',        '5AE!G ^+^%[L>6oBzr^;%*2RNv973w5AA6n#D9R2]?/diimap (k7:VlE[0D+g!)' );
define( 'AUTH_SALT',        's5#kw.THdNnyw=)& *`o+m^/AUP7A(plz>q8g MN`anK$LJ^5 I)dn<m<0 98hF3' );
define( 'SECURE_AUTH_SALT', '/sdsV?ooR`-t*$9:a!!g7-;hpWEt~ra|JG*X0HSjn8eFNcIT}8Mjrc]fsw_+M(dq' );
define( 'LOGGED_IN_SALT',   '&pe!:Dssxr2EE`rQ;@J9z&4c@H,<sI-+]y[f*LoBxC~)^DCvN5@Z0vR(O~3!fu3*' );
define( 'NONCE_SALT',       '[m!Xgf;?f=7ne{&buDaZ8pS>;-9x%DZj|wJA1<>l!mh(,%J|7K}[7Lz]Mm~,QQ!e' );

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
