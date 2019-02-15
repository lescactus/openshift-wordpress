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
define('DB_NAME', $_ENV['_WORDPRESS_WEB_DATABASE_NAME']);

/** MySQL database username */
define('DB_USER', $_ENV['_WORDPRESS_WEB_DATABASE_USERNAME']);

/** MySQL database password */
define('DB_PASSWORD', $_ENV['_WORDPRESS_WEB_DATABASE_PASSWORD']);

/** MySQL hostname */
define('DB_HOST', $_ENV['_WORDPRESS_WEB_DATABASE_HOST']);

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
define('AUTH_KEY',         '4AK^p*Ks|d:S<D.J|yv8jD(7.71nH$8S}5LYzR-/5E5s(,b#2Pfhc6>e5Rne!X*7');
define('SECURE_AUTH_KEY',  'c8K(8JBo3-Hl0|TtG]1R2Q[VUc??i^WL`EQ(GcC,K8|t[l0:E5Pg86~iKTxz(`~+');
define('LOGGED_IN_KEY',    'eUbcRhSYiLF?MsX-r}Tys{D7405Ynbs9_M@3jyXNzof=M_22_BZ=0t,mvQ@_|xXT');
define('NONCE_KEY',        'xiRr?c,:~K2Fgoq^]NY5jnv9+&|4Q`Lby@]%A{CSl<.)OK5AsdTy5 |4sFq4M_Kv');
define('AUTH_SALT',        '/d&+]M`X[@(4j8hGISX&Ps=k)SSgT!Ce-aZH,a7^4s6|#6+uh|}oI/9i_#f!EUfL');
define('SECURE_AUTH_SALT', 'D}<#t*d8BAjFXL>xlWp%CFbBn+(t3|MQT!@I=Ygo[ysGx%PPJA#n]r@+5 B2/xA*');
define('LOGGED_IN_SALT',   'D!NAn7nsj+Q[]ouW,QoW{/J1K|/^<PV;e`I#QE/87c]C$0rAD.q9hnIh7ii7yw-[');
define('NONCE_SALT',       'E}KHRseuB UoIFa3=EHC,J=+X/=3CC=tGEbigY`QbBEk]LYc3s0;)h8[RZij?xd{');

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
define('WP_DEBUG', $_ENV['_WORDPRESS_WEB_DATABASE_DEBUG']);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
