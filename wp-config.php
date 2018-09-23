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
define('DB_NAME', 'jeewitbachan');

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
define('AUTH_KEY',         'dj>K,uwsT r7u%ebA(o$NRZ30;i/rI9e{G$r>d0?JK0t7MNRv*]k`xl|9|H&X0VQ');
define('SECURE_AUTH_KEY',  'Kyhm.GK!X:evC~94D8,ic^5W Fl+sZe}4v]KhrYTF;M7GV8%:nGfjW?rRht+7qM1');
define('LOGGED_IN_KEY',    'MLhB,$H:3o3AzE&3%-#t@xY.y8SuQ+1m$ejs}|BXS3(:gS-=Fnft7hI!J|Z{qz-t');
define('NONCE_KEY',        'YYFU.i$yw[Du*X %=gU).H`j,toCtm&h;A1c@i={FOC`vqqsDzj1c%XQ;P;KG?fj');
define('AUTH_SALT',        '6etEa5(z^nZ<!0>rdsK<WbDyP YRH#S:/ :Z-GnBRjZT*G$dm#EB]:xu888Ph?[^');
define('SECURE_AUTH_SALT', '5+~[]1.B+z!KWFuFLy.2~m^&`WKjgS7= M&Y@i.pS,.6T*vWIe!ikv11WvYYL~YJ');
define('LOGGED_IN_SALT',   'BbssD;QmnK.|0J<4|1rs/8+NkO0b}e]Hfm|=oHKSplA++J> ZkTuW-ZYtTj{Y5`9');
define('NONCE_SALT',       'X-mnvxDoqxT4|)n)-0B]UikWT@MID][nYBs=YbL.RA94Et4D&[4+F~nmK}swyim6');

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
