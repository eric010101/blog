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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'esbcwp_blog');

/** MySQL database username */
define('DB_USER', 'ESBCadmin');

/** MySQL database password */
define('DB_PASSWORD', 'ESBChappy');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'vsgqajpb6hkbd51ye9o36wfcjaxxxmbbfvwbnlyvy3fccu5hbbydhw27uzp1m9zg');
define('SECURE_AUTH_KEY',  'm2vldtgd5tiebd7pxf1ccbhgrtay9o8i5tacn0yyldevufzu4fbllkxa1epdbmij');
define('LOGGED_IN_KEY',    'mypdvm7thm7t8lqljya4jk3hgahoggeiy7dymkev1djqtatp5c0zm0cnlwcnu6qu');
define('NONCE_KEY',        'w51ohlyp1c0jlnuwnttz1zwtiwfstnawldzahsbxjcithtulywwnfwohojhnhds4');
define('AUTH_SALT',        'ceyrwgcsuz66pfmf1fn39bygbksx5mnclsauccjwtorwqddkqcvjfmempf3d7ett');
define('SECURE_AUTH_SALT', 'voc3hr1s5tdoihzpsnkifbfnpbke65twbuz2pf3grqzukopz4u9jpv3i3geyhwq8');
define('LOGGED_IN_SALT',   'v4gpvjuevovdc07iqqp2yrpljjdrxsp9bcf0l7z4n5qcqt1yt8augtzeyjgoneob');
define('NONCE_SALT',       'gssyovj3aovrszgfzhc0sok71qtpw58lkvt2a0sm1nmttzie5xvqwspb7qqnhi1r');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
