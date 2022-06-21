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
define( 'DB_NAME', 'little' );

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
define( 'AUTH_KEY',         'D)x,fKu-zizAlxJUAcyB3jw4%^dLp?^Ac#=|J#=)&,w^P1<#U]%hZfs)N4aP/dN~' );
define( 'SECURE_AUTH_KEY',  '*Cj*Z4zp5}T<76XsQP|cnWK~HWs4o8e/yAPg%G~,Y3WI-L[)6v*,:gw/;|s%6FU1' );
define( 'LOGGED_IN_KEY',    'R6%~:?Fe:m=eyq!)QR)^_qR@?)FNy7tw}RHWU5^H`m_ir2-fKnh0li3jS<J0OP-X' );
define( 'NONCE_KEY',        '*cC2%|NrSYOwV1#.v~jVxP@xqhFjDr=vxzZ5M,(( SYG_$;7a ^!T<((/ZlzBBoz' );
define( 'AUTH_SALT',        'rtM$vH8>8(fhrihz9:?=ASE=4gWH3~=!$WUwnD}8XWvOQF8`}EPy5= |T^VPR&(k' );
define( 'SECURE_AUTH_SALT', '>.`OU>K=)j9-g7X}D0 &,Q<<(2M,g>o]DfEsF>|Tf[B.jT&ewS>XG9Sd/_d7G4$4' );
define( 'LOGGED_IN_SALT',   'WeUXN^`R/eQrf_3qoRZMu8(h-dd[!3t+wJ}^6bE~;vbU7lZd2=?@HV!~O}l94O_T' );
define( 'NONCE_SALT',       'BTklre^m##u]$&vB~N7]6Fhf,K1!KW{uW9FL|EyFWoAea-[00uo/(D7TiZ7QaMRZ' );

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
