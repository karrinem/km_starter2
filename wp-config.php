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
define('DB_NAME', 'kmstarter');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'ymt1{1D(_#c;#hEN .~1`&G.0cmx6<LGCA) I+kNF,(9jey_o]}vOXKVc@L9w_ED');
define('SECURE_AUTH_KEY',  'G92B`JIlI@iw_^:kE(oK{ie~ME;),X=ZP4yT=!Wbu?@jmzAQ#((nOc-nW)Q1&3K#');
define('LOGGED_IN_KEY',    'e^P?P; _FBnq#]:J;#>;zT=_WRG2`t[^k[~X7}L@07IY5h5-H9#?V(aNg}{3M002');
define('NONCE_KEY',        'hkmkAoGyuRfUcn?.o8hRy1}VPADnf*lrW[wJPY3H:&?J5s43~A|Y.Q|&68Y.Fg1/');
define('AUTH_SALT',        ';{vI]iz%V/p%U=2dR{ 04:67i Q[YR*iH|AGihPqiMdo.{SB.*6P66g($5Yg{/`@');
define('SECURE_AUTH_SALT', '87Iacp.4@|~Cpc)4AeP]r<yDeh~0-c(OH=?8F@HEyOM>AJ#2/~X4uKo;$R#NlrsD');
define('LOGGED_IN_SALT',   'cCNr1gNe:Wkk0/#IO_%)jeSxjt:9gJsfqKU|*I8tG2p*L&k7YvdyLcw2I@c2TO-?');
define('NONCE_SALT',       'RU:h|v]J(:)3;-Z )9:+;hQOXsidt7F.XVrbZGTNUEf_|rhty3wST:C]X!^xmV,N');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
