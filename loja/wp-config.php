<?php

$uh_wpconfig_dir = preg_replace('/\\\\/', '/', dirname(__FILE__));
$uh_wp_path = preg_replace('/(E:\/home\/[^\/]+\/[^\/]+\/|\/var\/www\/html\/[^\/]+\/)web(.*)/', '$2', $uh_wpconfig_dir);
if (!empty($_SERVER['HTTP_HOST'])) {
    $uh_site_url = 'http://' . $_SERVER['HTTP_HOST'] . $uh_wp_path;
    define('WP_SITEURL', $uh_site_url);
    define('WP_HOME', $uh_site_url);
}
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'radiad_loja');

/** MySQL database username */
define('DB_USER', 'radiad_loja');

/** MySQL database password */
define('DB_PASSWORD', 'lI5+XrX5');

/** MySQL hostname */
define('DB_HOST', 'radiad-loja.mysql.uhserver.com:');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'Q)84@hXdnYF!E*ijTf2sjrKFZdTuUaIEw)6@xANFzNHd^Na!by%ku0lmd0TRqw0*');
define('SECURE_AUTH_KEY',  'YS2H0j&STuyaMeNDUZgtaXU#S01xDl&cN*GE6JQn^JDqaz@S)qTncfrGUKaGDqSg');
define('LOGGED_IN_KEY',    'dp39D^&jrLhzP1(fLx%*aw!aG&zT5)hlsCn#IbLH4fu&%F4MQod)nLmDTpY(tTbE');
define('NONCE_KEY',        '@7(HCMThd9BHa0^jLSMnXKh1gpE)st(VRWOgSPBN0JazQ58UhRuy3x5Do)Y^%m8Z');
define('AUTH_SALT',        'EwHxpCHuk&aun2riw#A7EZJGyZYmn@tuD3SBrLnT3MHeSmLC)^C4vFsFXog7HFJ5');
define('SECURE_AUTH_SALT', 'dm4&KvibaLtn!L#Pun1Qze)ipAwroO4uiySw4itCs^7(LWoNi(2nu*qLM0tD&PV8');
define('LOGGED_IN_SALT',   'l0giu%tvXkqEHmNHYXiUQv^hdn#533jPZR5t5Cu(WaMkC&PDO%!#VP@!(A87j!Bx');
define('NONCE_SALT',       '1PDYlZF@%A%&pWDA328QqI3ef1fDSyjMQAv%anSu*GjSG2Ceb%PtSyL^lYdc%lCw');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'apswp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'pt_BR');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');

//--- disable auto upgrade
define( 'AUTOMATIC_UPDATER_DISABLED', true );
?>
