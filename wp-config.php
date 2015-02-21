<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
error_reporting(E_ALL); ini_set('display_errors', 1);

define( 'WP_DEBUG', true);

define('DB_NAME', 'nashtechnology');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sniggle');

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
define('AUTH_KEY',         '>8xK.R]U+e0@4lz<0CCQcIk,a{~Jmet+>IxmD]OT1;P[o:ApTi);T%)UiD^jb+9)');
define('SECURE_AUTH_KEY',  'Yn zH98EQ{hUMy9F8j}BGnw Re]+=!uP*@.v8wgFPdHFvH>|];5hfa8iQt6`B[%(');
define('LOGGED_IN_KEY',    'ci?%CiIMHX>j;!LxQOWh|Aw=&F#U*omu~0bh1w7YTu3r6j6lHsS+j4/UT:mqgdJ~');
define('NONCE_KEY',        'UBUl~^%Gk!(zIX?9aDxp=HoI<.zbouwhHZ2^EjmjZ.5g%MM6cojd,NODqNi,BU3&');
define('AUTH_SALT',        'z-wD.uA)}A/.k.,*kFWws .-ISRlNCT{~fs|IUOd|P :&N6J[/)w=[Jm3?pnB!79');
define('SECURE_AUTH_SALT', '$t27{&H)Sg68^PP>zx)G yfR68}j}`H6g(/5]s>]CD*aAhUCH@kmN&#ALX9j4o=L');
define('LOGGED_IN_SALT',   ':_vp}_#F&dZn*3rXw$3~]Inr6G,6<`uc| ~Nve-nw~AQsuL5vbX$xJG8:wC@=&~n');
define('NONCE_SALT',       '`?Z8r>{RsGfc`J76ip&-qq 4+zysYMH$1mgu@Ke|yo3oK.>iA=z#3b3T5EU@E{>(');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
