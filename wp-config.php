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
define('DB_NAME', 'trusty');

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
define('AUTH_KEY',         ' V,O{7Pj.=zrUv!!Ulf3oJ]cN`)YEJklV[p3:M+UX087Lq!@IXMYdg2.Gz2a2PTH');
define('SECURE_AUTH_KEY',  'V_,IA,Tk]/B5)Sm:ndaT*v=r2D$*JUzDi50;YMFmt5aAITC&^_9^$%yHgND0o.Cr');
define('LOGGED_IN_KEY',    '#=J2<m!u3UA}*]=h?ndwWt0Ke|+U1qWa<uCMqY.FS;*[ RiWt.mR#$p x8.MR+8k');
define('NONCE_KEY',        'VF/3I%GM)gntQ_jn}X19?!3@Vo~91]1>]&5Y|mnU/?/!}UhTo#|k;Jx7(:.VQ@w+');
define('AUTH_SALT',        'i6<8C7~~|u1o2x-(`gb7Tjsh8+A6f/&q|TLXvi$jguo]^^t uel}z*R(yxQXJwS!');
define('SECURE_AUTH_SALT', '|}xYH[Xw6|[n@m%qNX[@xS+mPgqueg*~>J=An=i>D8nVle>ILSgK;!k61zER^]uR');
define('LOGGED_IN_SALT',   ';PHQsPQH[+?M&T4}IU9Kz:8/FLG%BK~T8qQQ&!7!6`NyFOU<G0Z!m=2jrI!o*^Qu');
define('NONCE_SALT',       'ak_0#;^tCqAuY+#_mFl[$D5SCv,bM-.x&VTj(Zn(AK7z9fr7.aTmr6ii+FH9QUYR');

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

//*add your FTP credentials*
define('FTP_HOST', '127.0.0.1');
define('FTP_USER', 'FTP_username');
define('FTP_PASS', 'FTP_password');
//*If you like and can use a SSL connection set this to true*
define('FTP_SSL', true);

define( 'FS_METHOD', 'direct' );
define( 'FS_CHMOD_DIR', 0777 );
define( 'FS_CHMOD_FILE', 0777 );


