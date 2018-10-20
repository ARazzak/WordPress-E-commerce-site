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
define('DB_NAME', 'myecomsite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'g4=7@Fxzz42)Z(KdFv%*DrIKHlN8}KKq3*rj8g0__B4(-jy0yIE&1jk$8GozRDf4');
define('SECURE_AUTH_KEY',  '8,WSGFDhkjlZW,r~ z80V9~FMh7f,@J0k`S*?|U&e8FqP~^JCKpHT4nRi+c}o%z&');
define('LOGGED_IN_KEY',    'cQIEJ?u`.-MJbj]$0[fi38wh]]Z!clU*5e&.{:DJd,]85d@-;Ll8 I(JnRJ$(N3z');
define('NONCE_KEY',        'Jd_vhv0-E_DXz49x57vN=tctW>1yY7RPyZ7%io:I3_)= ~oE(&SIjWdPo<TX `$|');
define('AUTH_SALT',        'hsDqggA5HSE!Lj7?`xD`:Q$D%UV${[{P3LYw5r};(O`Ex(yYAdBNbx4ok:lWrr|f');
define('SECURE_AUTH_SALT', 'km$jov1|ZG|w;(;WSp<2:>+64m(x-`MN@ZoLpn[AYAW0ae=E(7!DGgcy{yHfRvV0');
define('LOGGED_IN_SALT',   'HbX60-g3BMM@55(R~Qx2L%rndO9q&1;r%Twt-XijY0t5*xO8=l9+64q(l(.6432g');
define('NONCE_SALT',       'T)2+Z^s/R!Krt/>TmASV5V_0eRi6.Gu/t&aLuQtXyR?d[zLBWVdI@Bb-AP^-!mBZ');

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
