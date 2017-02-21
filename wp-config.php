<?php
/**
#x https://generatewp.com/wp-config/
 * Custom WordPress configurations on "wp-config.php" file.
 *
 * This file has the following configurations: MySQL settings, Table Prefix, Secret Keys, WordPress Language, ABSPATH and more.
 * For more information visit {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php} Codex page.
 * Created using {@link http://generatewp.com/wp-config/ wp-config.php File Generator} on GenerateWP.com.
 *
 * @package WordPress
 * @generator GenerateWP.com
 */


/* MySQL settings */
define( 'DB_NAME',     'wordpress' );
define( 'DB_USER',     'wordpress' );
define( 'DB_PASSWORD', 'Password.1' );
define( 'DB_HOST',     'db' );
define( 'DB_CHARSET',  'utf8' );


/* MySQL database table prefix. */
$table_prefix = 'wp_';


/* Authentication Unique Keys and Salts. */
/* https://api.wordpress.org/secret-key/1.1/salt/ */
define( 'AUTH_KEY',         'Ohorrl6uSWisBL0Et3Ouky here' );
define( 'SECURE_AUTH_KEY',  'z9wFFebZiUeJlGLGZi42mT here' );
define( 'LOGGED_IN_KEY',    'EVN9YXHrEv9s0yzzG0O4E2 here' );
define( 'NONCE_KEY',        'RUpdffzFcdl0Q1RONyn4vb here' );
define( 'AUTH_SALT',        '7TrLrwZQxYFMKV9zrMpMpuENu2e' );
define( 'SECURE_AUTH_SALT', 'kVxMDJ6UPPJmpI8NQVnspGMgW8J' );
define( 'LOGGED_IN_SALT',   'esySHIHmHhnV8k0m4EwtSMFIekT' );
define( 'NONCE_SALT',       'XB8vFyvbVuL9aYd0I2T6Xs16Ukn' );


/* Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/* Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
