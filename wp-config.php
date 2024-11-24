<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u728664664_qLWsR' );

/** Database username */
define( 'DB_USER', 'u728664664_M3Pgn' );

/** Database password */
define( 'DB_PASSWORD', 'mIaO5YldD1' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'O6``cfwGHvKeXWlVb$h4q!B#=u*~vpgSkzH:6|(T)TznjK^?0`M$q8hywLz+2V8N' );
define( 'SECURE_AUTH_KEY',   'SY4*PHpHkx()Bz0}Z]9:i 0;C-w`!iw@ _*AEmP80~_{u1.Db_tvX1!S?C!]ZXX-' );
define( 'LOGGED_IN_KEY',     '.s2PqBAn)P)^ia>@&d].!X0{QsT14e#j|x2G`g*6-)o[X2TLAq(95=3j#*Yt`A@3' );
define( 'NONCE_KEY',         '0^96K&a&L74(S6#5xf|,(TVbM@k1hJc;7I2p4P~<~J}kI X|AyGA1o}yCCP>Z(,`' );
define( 'AUTH_SALT',         'm#]h5~_z}=)*tU$Br|&eVH8)_4n,H&4aoU#LHQUB0E?o*`YKbLhl:v|#*H>~_cyw' );
define( 'SECURE_AUTH_SALT',  '8A!rjo@8(XSMXDYO[nDgo$#!RtU5~~I`CLq;+>A?d1*kzEG-^$EBxAzuhBK0vIAs' );
define( 'LOGGED_IN_SALT',    'tBdP)n;<4p`qF@F<X.uJ626+A!DNY=?<*<nAgh,?0e_a=4Mz-IbZv!21TXt;P*SE' );
define( 'NONCE_SALT',        'h]T@i_mU~BWR]ft{MiZVc:_z8|oy*;$Lx3JIo)qW#2~}yyN.gUmDo*NBdbmD10Z0' );
define( 'WP_CACHE_KEY_SALT', 'pn,sjEtRFAbI(Rdm7h]m)fJ?Z$wfx >3!|R#h:iK;[}jiODcs/3;w+smf5p1^-uE' );


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



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
