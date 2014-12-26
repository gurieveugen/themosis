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
define('DB_NAME', 'themosis');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';`R:#nEQm. y,7+m+}3CGQ*W}+5|<w^] X3)=?_Y:gqd,_aj?WWd>Sou-b#*(kPP');
define('SECURE_AUTH_KEY',  'k~6dOS1{|mN|AR5(jc*DpM3h`N7+sDV6fH];Lvui%OvRS-&)4}L}SV+ho=(wk+!C');
define('LOGGED_IN_KEY',    '43p|xaE~}5d]I6jA5C2.h?||9>}n-q^nWD4D_-6gO]S6(;f-<6Ap^+-u5|w~n5h&');
define('NONCE_KEY',        '!w4hhH<(.v@d|Ra-aiMTABjk*31KAZ1(YG0y5cRNp]e]6@{1i[,x(9=6FzBGEfA-');
define('AUTH_SALT',        'VmLm5l=lF=%PQPO%%KSV{Gbig_WbrcK%^n{)nw6+XF:9d@.,kslmn63*n~,?x}qs');
define('SECURE_AUTH_SALT', '^LGxd^7gIj!]71OcIu3JqE`++#4|>*5As|Bn/~qbT%OJwhZG:>UuSP3`6np*hVbR');
define('LOGGED_IN_SALT',   'K~HdnW>5+uqq9rWDz`/=^8;U/M~h1T0{eWUdK|~a_wJFL*{1)?!F5VXpqY+|iStm');
define('NONCE_SALT',       'OQ6>:3uYT-KCM$4pi4@u[sdP1X5r7:J9o//0LPZ8$h8sRRX<R?sV))PS#}2{9;U=');


define('SAVEQUERIES', true);
define('SCRIPT_DEBUG', true);

// Themosis framework
define('THEMOSIS_ERROR_DISPLAY', true);
define('THEMOSIS_ERROR_SHUTDOWN', true);
define('THEMOSIS_ERROR_REPORT', -1);

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
