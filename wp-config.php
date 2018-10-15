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

// Support multiple environments
// set the config file based on current environment
/**/
if (strpos(filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING),'local') !== false) {
    // local development
    $config_file = 'config/wp-config.local.php';
}
elseif  ((strpos(getenv('WP_ENV'),'stage') !== false) ||  (strpos(getenv('WP_ENV'),'prod' )!== false )){
      //single file for all azure development environments
      $config_file = 'config/wp-config.azure.php';
}
$path = dirname(__FILE__) . '/';
if (file_exists($path . $config_file)) {
    // include the config file if it exists, otherwise WP is going to fail
    require_once $path . $config_file;
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');
	
/** The Database Collate type. Don't change this if in doubt. */
	define('DB_COLLATE', '');

//Relative Paths
define('WP_HOME', 'http://' . filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));
define('WP_SITEURL', 'http://' . filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));
define('WP_CONTENT_URL', '/wp-content');
define('DOMAIN_CURRENT_SITE', filter_input(INPUT_SERVER, 'HTTP_HOST', FILTER_SANITIZE_STRING));

//HTTP to HTTPS redirect
define('FORCE_SSL_ADMIN', true); 
if ( isset($_SERVER['HTTP_X_ARR_SSL']) ) 
    $_SERVER['HTTPS']='on';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
