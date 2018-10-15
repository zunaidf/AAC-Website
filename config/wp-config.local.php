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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ONWocoXCKstL96Ru9ResfHJru3MFTZZiTh7tFEqzxBR+c9LSdtcuwSdLa8M+hm+MWljl8ic8vzIKY7l2jgfMng==');
define('SECURE_AUTH_KEY',  'CPbI+/Zwl9hE0FqLG24/sXtaeqN0gmt5Np97XoFTNRshRsYRwvpP0iB2sSP+Avgpj70NbUSn2OwWl2XjZVeegg==');
define('LOGGED_IN_KEY',    'xTkTDkRg2eK8UQY1a3AYGltnVndmTvNSpU/rtFpotIX/EpmoftqLPzyZb9gQodPBugtU186nblPnhBYa4ZS63Q==');
define('NONCE_KEY',        'ODEeGnRd6+SLqzJw0YL7O4geOpmMv6Lxk7z5J9NF/+ch7JoyL3UT46Sv6N63hi8HLKtw+Gbp2hvNc0aN/RJ+RA==');
define('AUTH_SALT',        'L4ygWV2jv1ChnwS0yL8yNSwxGB/G8ZXWipBJ5Wwklru9DM5031DlMX0rNdh8q8PHc/EOTY4Rk84pHm4PqbnnvA==');
define('SECURE_AUTH_SALT', 'joNuhDGeCltJS5qUL70mNGbRhD7MDKkbFNNGACGW5nz1YjJe3urgfBWF7Gdz+pgaHux5SMjJlwVwu6a4nVsJFA==');
define('LOGGED_IN_SALT',   'UwAxaZm811CfRjtzjn4sjyqyEZxDjvhR9CHEOgJMTpTo9JWnVvGqRfAr8bbdaNpB5+drN0iNXWeI7wptRkgXWA==');
define('NONCE_SALT',       'o7FXi59+oF4+SQRUFS+fbDY3zF3juEUiimt6W9JV93onrerRUKTrMR5i757X/hj8J1Si8P0KC/qDlAhKiJhZNA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
