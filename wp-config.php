<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'CO{!JA%n&YUB2A,WTETg:qxzjs5A2NEsQy=-Tu9Xex3%~Ym~r(9Dd.j$959i[niT' );
define( 'SECURE_AUTH_KEY',  'TJD^Y2]8$B2_OBGS8;0%pUy<3a@VE{R]?v*~i#~dqV5S>l*{3>dyvc;ZqW-Lu~q}' );
define( 'LOGGED_IN_KEY',    '^@Ubvi|;hUr=A7`J2QGelS6A[Sz~PW$ugMTK9@v1Gs=W$jZgyzUQgt`+gdZ??L~b' );
define( 'NONCE_KEY',        'G)?p`:$$fqegSJP)ElKBcg~ ^&$>(6#o105>nJpX3%47<()BImH^8R~8Do[.Ro!%' );
define( 'AUTH_SALT',        'Bl9l5GJTPM%C8>WLVK4zKNa/}c?[:3faURWOZ_UVoCT&?pN1cZ2DMN84ms4$u$(+' );
define( 'SECURE_AUTH_SALT', 'w3_y{^qk,F|U>6a??xt5=G2>b16V$~y=IRea7:X~RaiO&UTHFl4#:s#TERQ8xBw:' );
define( 'LOGGED_IN_SALT',   'WoWA-C`Z~z@^=#A<wKl8lT^^VZMW29*Nd5Y30^VUSW<_-B4=%*]zbh4=)fXT;5<(' );
define( 'NONCE_SALT',       '3TK .&>sXKy#@VoLHeI-@)lASYAj]Gv 1_t*szN*fygc#25KZH+3z9`#9Z93 r,&' );

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
