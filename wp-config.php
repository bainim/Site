<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'espritlibre');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'king1990');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'v)w:j4Tr3q*0j{Z$$JuD 4>@vvGJW94k-^*na{ZFDB5wXJKruy {hC>0|idkMG4%');
define('SECURE_AUTH_KEY',  'X!wy)T~ceW/0K@#s}$WMC]7io+:gU6O`H-C::}-{p4(]}7<P Ewz8_9S{V+4fZ1c');
define('LOGGED_IN_KEY',    '(_L0xXIUD@]P@!%U8I.]yZ>>v]CmyGCg:@M-Z8S!sz2?5@fPBs)5@_0IDs|c4A*s');
define('NONCE_KEY',        'uX>,q5H+-o`A:iM),YTU;HA,p+HBpPTyo(-9/?E_XHXGbDW^D1mhr#QeLRZN@v,Y');
define('AUTH_SALT',        ':PHiI]JY|5aAz)ANJE:T|/@xwOQ(Skhg$H(Z8*XCTL8=baNk|-7]%HfG|f|q Va-');
define('SECURE_AUTH_SALT', 'U]u3n4Iu3#~F/L#UTVC6?d{XAUdKT.HND9-HFgg;+|#E@JXvt.~Z:|!F0)z^dP@5');
define('LOGGED_IN_SALT',   'xH(gZEHFI24}bveGSP oMUVVs>o1MB#ZE})AR.:C{U*}V(|4.1+QL@B?D0(uT-AZ');
define('NONCE_SALT',       ';:j9mz:<+trt?765x8z](I(X0xD4P 4D[a=2kPpH3|@vcPi`TdWy3X9=u30j:cu8');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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

