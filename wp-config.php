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

/**
 * Database connection information is automatically provided.
 * There is no need to set or change the following database configuration
 * values:
 *   DB_HOST
 *   DB_NAME
 *   DB_USER
 *   DB_PASSWORD
 *   DB_CHARSET
 *   DB_COLLATE
 */

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

define('AUTH_KEY',         'B{y!{)}L[ll}H}mOqj31%45_8>{$9o,B4B_sHe24pnBZ1j.Uhl__5oqR|AQ%,L(S');
define('SECURE_AUTH_KEY',  'u#jlY>jH!7ot+U$#X6wfJxFRqn)rOfi6EE85fE0XjDU4,6~#LtFO?5Y#T;f{j~3I');
define('LOGGED_IN_KEY',    '|zpTi#1CD>cFhbMz26dPDGU:5_eQ=vC=V%t;:sg?$E7FJYn=$;aMcxjdeKLi4!{S');
define('NONCE_KEY',        ']wCggcfcsLV:EgPDlg]Wr<Y|9g%XORllO97CWcA{V#2wALCF7}+i,^Zh|d..3axL');
define('AUTH_SALT',        'qywD]qhhd|mD)fRKZsO2Wm9Mq2=Y{mouAgB{3!|]_-=02QM4qtt^AAnPI$3N!@,j');
define('SECURE_AUTH_SALT', 'jUtv-p7GAe$NmU!AScZ#TMhuOb8>ANBs<h$m[o}RMH!n{0w-rjrS3a<@kuFqq$0^');
define('LOGGED_IN_SALT',   'BO7!ckJ)@*fSmmZC;ai1ypC)+>pCYn<-[zR]SZ!or}#l93bO>>h;GnE-ZQcB<cd7');
define('NONCE_SALT',       '>6EIiu^DPFpd1%-2n|^;~We7u#9301v>:H1y,+H8w.}wc_Wgy(a5Fm5_DdU@4E!2');

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
if ( ! defined( 'WP_DEBUG') ) {
	define('WP_DEBUG', false);
}

define( 'WP_ENVIRONMENT_TYPE', 'production' );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
