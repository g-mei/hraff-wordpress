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
define('DB_NAME', 'raspberry');

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
define('AUTH_KEY',         '<!OB#aE]Vl|NhJ8f1o1WIySE*3@ !Bd8Q<R`i/;!Tr-Jgb)_Ri}$C/N$6=xLf`D,');
define('SECURE_AUTH_KEY',  'RpV)LL[%]b1ok&pI]S]Ivp,JG_uXjQ`|l|S6S`aIEP7gd5=#rq,#jd>hQh4?1nuX');
define('LOGGED_IN_KEY',    'ggmp(*l&H`5LI+xdJ&?cA,/OklUu0dMV4/z P{m[kLL|yKIC[c)BMia#S)l4oh4a');
define('NONCE_KEY',        'a<~AyXAPbU=Yu~^#J9: HCR;RWq7TF/!z@750/OH/.(bTks!(q~:nu_Gj3DI8l~y');
define('AUTH_SALT',        'J)0U`wWyY8W,k]zI&hLMPP~=fGl98b8O(0LxEG)pHB[aP[G5hzElgpnB7xC5~An=');
define('SECURE_AUTH_SALT', '+X!x;UXM`~Lq@sdDJ]3*e#rlN Z4P.SB0t`G|vP,c1psQ_=[E>7wo<5L!zsP)y]H');
define('LOGGED_IN_SALT',   ':h$n#DX<KF:7P<;y=ni4-:6jv5?@z9f|b|vXd4/6;.$eW-IiRG*%{h<@ *gi%4qs');
define('NONCE_SALT',       ')erS4K6#v1#tjPdB-k>&eX8:Q[i2JgqFlq-m<xMoGK3g*wlXw1HRQEb%43Twtt=d');

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
