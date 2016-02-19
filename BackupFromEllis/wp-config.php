<?php
/**
 * The base configurations of the WordPress.
 *
 * This file is a custom version of the wp-config file to help
 * with setting it up for multiple environments. Inspired by
 * Leevi Grahams ExpressionEngine Config Bootstrap
 * (http://ee-garage.com/nsm-config-bootstrap)
 *
 * @package WordPress
 * @author Abban Dunne @abbandunne
 * @link http://abandon.ie/wordpress-configuration-for-multiple-environments
 */


// Define Environments - may be a string or array of options for an environment
$environments = array(
	'local'       => 'local.',
	'development' => 'dev.',
	'staging'     => 'stage.',
);

// Get Server name
$server_name = $_SERVER['SERVER_NAME'];

foreach($environments AS $key => $env){
	if(stristr($server_name, $env)){
		define('ENVIRONMENT', $key);
		break;
	}
}

// If no environment is set default to production
if(!defined('ENVIRONMENT')) define('ENVIRONMENT', 'production');

// Define different DB connection details depending on environment
switch(ENVIRONMENT){

	case 'local':
		define('DB_NAME', 'wordpress_local');
		define('DB_USER', 'wp_local_user');
		define('DB_PASSWORD', 'wlocalu_pass');
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', true);
		//define('WP_SITEURL', 'http://bootstrap.local/');
		//define('WP_HOME', 'http://bootstrap.local/');
		break;
	case 'development':
		define('DB_NAME', 'wordpress_dev');
		define('DB_USER', 'wp_dev_user');
		define('DB_PASSWORD', 'wdu_pass');
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', true);
		break;
	case 'staging':
		define('DB_NAME', 'wordpress_stage');
		define('DB_USER', 'wp_stage_user');
		define('DB_PASSWORD', 'wsu_pass');
		define('DB_HOST', 'localhost');
		define('WP_DEBUG', true);
		break;
}

// If batabase isn't defined then it will be defined here.
// Put the details for your production environment in here.
if(!defined('DB_NAME'))
	define('DB_NAME', 'thespri8_wp');

if(!defined('DB_USER'))
	define('DB_USER', 'thespri8_wp');

if(!defined('DB_PASSWORD'))
	define('DB_PASSWORD', ')*c&FecX3y4*');

if(!defined('DB_HOST'))
	define('DB_HOST', 'localhost');

if(!defined('DB_CHARSET'))
	define('DB_CHARSET', 'utf8');

if(!defined('DB_COLLATE'))
	define('DB_COLLATE', '');

/** Enable W3 Total Cache */
// Added by W3 Total Cache
if(!defined('WP_CACHE'))
	define('WP_CACHE', true);

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
if(!defined('AUTH_KEY'))
	define('AUTH_KEY',         '$=u8 -4gH+) ZPAK T5DQnWHS14xjB3eJpM|AP3HB:zIZ*:PM1o7zG^SDXP_AL.?');
if(!defined('SECURE_AUTH_KEY'))
	define('SECURE_AUTH_KEY',  'b$~Uvi!OMPB`JDqS}MUWC#Fi7YmJ-EBF|0LstRb8eJaRydo_yMj*W_h~b-L7ydkF');
if(!defined('LOGGED_IN_KEY'))
	define('LOGGED_IN_KEY',    '7_ m[Zn&F<*YjCo.7B0sq/b;|bg|Ch9e{j#&tE]YRLrA w9p3gI>0#i62 1kMLsQ');
if(!defined('NONCE_KEY'))
	define('NONCE_KEY',        'os?WKGqIaw TgQ;(?x0-2]!TMC-Fd_-|<CFBIaNe9!4o!d#!cU&Qlx)s]>lY!-pM');
if(!defined('AUTH_SALT'))
	define('AUTH_SALT',        '*RG:M}Avz/#YE[tNAMki&/N%>F>*1S(y=nf(>>ULbY?w{3&aJsbE#+x|FC,]X7I2');
if(!defined('SECURE_AUTH_SALT'))
	define('SECURE_AUTH_SALT', 'as=W#K@_-4h[E2QPQUyF<?Xc}wr|T^_~eKxD89-)*E=MgsKdePXC*b eV{8pd~9Z');
if(!defined('LOGGED_IN_SALT'))
	define('LOGGED_IN_SALT',   'J-=!k,|^eU`:{EOq*bUKRza<+G8%m,zdx]cL/^Fe;phTdICvsJ?Y^K g`Z0mLdy+');
if(!defined('NONCE_SALT'))
	define('NONCE_SALT',       '>xq-^cOf%<B37u%+sH6.idO(.)oF.=oFy*n}+vV=zcl%eRZZ+vQ-aG,S<|Dd/q?;');


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if(!isset($table_prefix)) $table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if(!defined('WPLANG'))
	define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if(!defined('WP_DEBUG'))
	define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


