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
define('DB_NAME', 'blog');

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
define('AUTH_KEY',         'N[/nHZ` e8:2gof<-,wmH6@ySXx6z`q~W0G1-l-(8-4eawAk/)`g59oU5CVld Dx');
define('SECURE_AUTH_KEY',  '2_ltk}7ER9kufMDdy4PL5b8KTzH6sl&~KLKwxPl7MK^1DG^GUUDb~T#u){5(c&sx');
define('LOGGED_IN_KEY',    ':H ]{a,?37S8vDmgV`7F gjd3hdgu_:>m%s/8)!$7fz4%me.n~o0-<Y@7*~JLBr$');
define('NONCE_KEY',        'n|w|$/q)U8IjA2W@w+0Y4zMT0-Lik cfs@Al?]c%wx>OyK8*mIf6,54usn`sYJ}X');
define('AUTH_SALT',        'e>@Ot3G]Z_+V s6SDi26Eny%PDNY<]sao|!/!5HoC,S<25OT!l@~E+ !^jfJ.Sy ');
define('SECURE_AUTH_SALT', 'upF! )j>gR.~&bQgPMt[881sYkl7<~KH~${:[)z>p3_dY4$O~JX6;dEZ]*(%V3>X');
define('LOGGED_IN_SALT',   'ih`gAa+gTfRTU$>SR{Vy%fd9|U7Une2<1;}^8rpb=f`*_O&pc5`bA?Lm>EMt)==%');
define('NONCE_SALT',       'Dp(-uDA(~lN5A E?j-sQ[xI#=#(_GH.Zr5?^nI&Q*7Ywrn%P ctk%PXM/2i]Zgd~');

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
