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
define('DB_NAME', 'wordpress_1');

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
define('AUTH_KEY',         'EYaegvJ.Cx!t]OcOlN 0gAcK*,:LF/u<TqPpg.zt6W$.E^M@MD@m7lGO|R9jFL%$');
define('SECURE_AUTH_KEY',  'i!*^7Gbh#Z$Gcr}]N+>q0GOr/8zT=TP=3(*q[fLoWeD-f,`f}Q{<O t90%b6:I!U');
define('LOGGED_IN_KEY',    'h/#U#(3iF*Z_B%&Xq~i(Q,ed!`Kid&!=q4E)P(oZX,/})k6vp<qzZH$=2_ pnL#l');
define('NONCE_KEY',        '8Od|[oX`eqfY|[5!QKU(K]--=lytMzFaqvQ{tE4fyI+&guEa(=<nAbB8WU}-@R->');
define('AUTH_SALT',        ':wHlpC}z^;O;,Mq-Sw. Bn8v=O<bhlB;Lf&F3BB*vDR9QATcdZy]mY0 SRSb;xGa');
define('SECURE_AUTH_SALT', '(26qtXP@?)I!vw}~)<z/4S?RCngi^`Hlow0k62WpE:>kw7 f]))h.`p@E,zo4ap:');
define('LOGGED_IN_SALT',   'nktAtc#R3Vd(QMI^wtne|92v<6Re&5eWQRuCYC)_:viJ(:-Foeh7joz#uiUK+&{}');
define('NONCE_SALT',       'w.eE HV;xzjA<)Z+,0TXR m0[& XW|owf[bR-($exf^}L(cFdD& yc^*fT=P#tHp');

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
