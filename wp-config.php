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
define('DB_NAME', 'id6475140_dongoyo');

/** MySQL database username */
define('DB_USER', 'id6475140_root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'L=Vy[NR[<Q#jqKHg<^$x/nKre`_pc:ycSLszR^(:{2(ZH=F1N[LtQeemBw.b9Th)');
define('SECURE_AUTH_KEY',  '?7.=Q0oN17(D<tz&<xm8*LQ r 9~G LXq,F`5bg]+^mUn{3+jNs!(^t6YGc^~`=:');
define('LOGGED_IN_KEY',    'wny9B4,(BGQpnVCG@Nc~&lZ#0BB L%MUL<VCl!^YPT3{M iJ~:-S.TSa8TI=o]yM');
define('NONCE_KEY',        '#?:+3tJ`[|>P75D [;gbM?0o)=:Q>v=^-u!I&rY$=A5 bcd8!(`0MIXIAe1=0[K&');
define('AUTH_SALT',        'M3zEB&##8ASsY]Q4lGCe%>]L/Pg{O<<ew9gZo AO8@&sd[jd,eMf`9HPByda[!|i');
define('SECURE_AUTH_SALT', ';&I!(x2Fm~55##[E8~Ve]6x (DZ_t2&d+4Xs>j3-3VzcQa~DXAz={)1+mnU<iu:7');
define('LOGGED_IN_SALT',   '9K)2838`1meCq(y6jkF^Pwk!g]hDA?;rHGbPSpJ~@WcuFfCdr l9;6D9p#T1774<');
define('NONCE_SALT',       '!5~%8jt<#hcl9y0[_p&[!m$x}_F}^`!DhUX=eA4r-^z@&W-QyvS&Py;GlJ{Vhi_:');

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
