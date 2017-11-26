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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost/8888');

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
define('AUTH_KEY',         '.X`Lfw-b_gFOzbEPad#e=]7]5D9g?aAAIw(d0>[;AHRY!/la/.HPm+_J~WQ[.uMC');
define('SECURE_AUTH_KEY',  '/4wPf;itAho:uG%_*c2G#g^Eb;u&e&Xnj28;~I4t>}C-LM3S>p)pkekRcqqo7~<t');
define('LOGGED_IN_KEY',    'NtFZPKO7g( xa~ox64m{eJ#:dqS{( 6-#lA{V[cR[cw9o,5ku@32EF)+[T|@(,#_');
define('NONCE_KEY',        '8$9{V!aFK/7R7N5x^mCNJiZSXQU]~j`xdyK0QKY(Ff>[%mye$y_XkNmkagMgwLom');
define('AUTH_SALT',        '>%jz-5~[K>7#h4#&WQu~=q|f>*on&p!px8.(_2LB#l[[6rcObk0vi1eZ(LH[0C?3');
define('SECURE_AUTH_SALT', 'KMpQ#o[|ONi*?nxd-n5RBdFy-~=.3O&-OJ#w!l6#/.ha.5o^A{FXcSXuE;:<-!vg');
define('LOGGED_IN_SALT',   'm:l7] A;Q9/`#|^)Ar`b! wFe{2k _fPfp4/Z4l&7,O9ZM>W|NUy3Z!Efw+2$NQ_');
define('NONCE_SALT',       'q+H[<?8HbQZc!B* K6BZ8wU*~h:xGjNS1)Ms?dW<&bQfMo2x]9*{F*`0Ddajgk]i');

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
