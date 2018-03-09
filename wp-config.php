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
define('DB_NAME', 'smart_stream');

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
define('AUTH_KEY',         'XL{~7~r^!E#bjaI%PFE*~)&$*!4^?gj.pwnXQK%wXQNhI+&2_5f$<]G.mwb2>+e5');
define('SECURE_AUTH_KEY',  '1hp_X-3HxNpE*?QP07#k2pT,%=DawIU2cSDs-a_%h1Upe|OAVz}z)yF-4wUi(9`Q');
define('LOGGED_IN_KEY',    'FXWB^?ANVCK`C;{XeS<cvtzvLT4#xw%VAD1hRv&^RkU)L}:(X]NQi{imwU%:g10I');
define('NONCE_KEY',        '7eRsd;EqUN6br|e7_ECFx/8n+9x5o/{3ip}.m)c7u{Q#EH-){:m$cu}=6)1*]we)');
define('AUTH_SALT',        '(Uz9{nBG7}qyX%rg>}Hs{~%Z,VQ-,e-./!w19U0.5:o:2Q(VVa5wZ|iOYKdpah(t');
define('SECURE_AUTH_SALT', 'I9q^PN`;8>?I=ZI1Z_t}1U@Ek)802G${S}8=+%kVH7M9VF_.L)g3`oz$p#l ,&Z1');
define('LOGGED_IN_SALT',   'ysw573sgZj&MYo)SOkBkdW4!|k_DDb&eh}(;iXQ]Z@I0_3+`s;o6uSiNpEJIdI!0');
define('NONCE_SALT',       'm1TRLTeD3.p4lsw6pH(y&M?;5*BR@3v*;eVK#;cnHgk@[f...`R]2{<d~lCnY^/H');

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
