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
define( 'DB_NAME', 'wp_galaxy' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '#yi!XHj~ZM]{z`a>i,[2)_c{)[#T5Wc7Hxq+`MSPX/N~1J0=^U/D6#?<kE`_HE2T' );
define( 'SECURE_AUTH_KEY',  '+g>X#*ZoqhAJ8yWV@aJMS+%MHib*y~3f!3Bu, j7[g}^#[xK@!tJ.PkX%YKI~/)O' );
define( 'LOGGED_IN_KEY',    'CR0bd!R<L|*9@HSau#GKC%#AeXppl|eSn#C%pi;D!3N9&1K!yka)Nw^v>j?yH6;v' );
define( 'NONCE_KEY',        '$:j;aqoKbiAn(Lc8m$?Ve7~.LKTNZZ5M5JOwykWdh,^efON&Wxwl(<.17]QPR5bZ' );
define( 'AUTH_SALT',        '.uVQ EOzn8.B up]=VRO&QOdC[-C~=F4e1E8IG!&KJyVX2p2nKZl!khZV}aius!J' );
define( 'SECURE_AUTH_SALT', '!L6Czjk>6TS!8&Qih_2M:K=.,mlFXcIRktxGug4^Al}6bPsi/Z`w(-|g6Ra~fF}o' );
define( 'LOGGED_IN_SALT',   ';uk!F-YTd`N|J:18}+8,~@TxP}h)zt)Yp@r&SsSoN6l}?X}=Bj6_R~SVqvO5,ZCN' );
define( 'NONCE_SALT',       'HY+C/Voy;+J}}Pa!9zQl^J`NGZ4y5pHiBC#7agL#OZ@xpoX9T}<*:e4v:;@}kVq{' );

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
