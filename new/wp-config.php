<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'leyve1_db');

/** MySQL database username */
define('DB_USER', 'leyve');

/** MySQL database password */
define('DB_PASSWORD', 'pPGVGwi0');

/** MySQL hostname */
define('DB_HOST', 'n6-mysql5-3.smartyhost.com.au');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link http://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'KBB)M$qc4S5RksKc4ci4WpKgfd$4iG5kIPVZIKpk(x0E)R2xjlAYPsqb6NwRrKg(');
define('SECURE_AUTH_KEY',  '!6)fQt&bWVZZGfAUGU#RakY$29y53orhU1pd^81(v8t^C8VFjshNZtWrIn%P3oz&');
define('LOGGED_IN_KEY',    'K6OAap6F8ORODCs$xKl&K6vtTuUXe9E))ElRAB2R6PA7h*^9&L2p^HmuOrF@Yws%');
define('NONCE_KEY',        'v%CpH0Ky3fN79q2IGT4z)A)2x@dJVpy6IpCRFWayDhWYs(lS66@G@%EBfE&tBxXW');
define('AUTH_SALT',        'IR(qOPm0tuQA!f8Z^6w!4CmnfGj65w&m2qQHT6F(GyW&J05mtUa^dGg)TtS8g!v3');
define('SECURE_AUTH_SALT', 'AZBRb3dSkgS8V*%upplHy%Uee91PAKrKu%@JG8QCAhn2)$AXxw$mo&XOKy0GQnHT');
define('LOGGED_IN_SALT',   'n#dogEWdsvH4n)PYFHjrDeNn6LAE64DwVW)Mec3^Op3M(jIeSvSuaDr7*vTofMN*');
define('NONCE_SALT',       '@*a8(t8(q5L9pZGF)cCE4KInu$#a06anc!x^E%nv2N2H!B#6NeoWc(&Xc70eNPA8');
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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', 'en_US');

define ('FS_METHOD', 'direct');

define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

?>
