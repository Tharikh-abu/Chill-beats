<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}


define('AUTH_KEY',         '39a+DmWq3wnEIBUN7tD0IKQ/kW9508Z2b1+1224SVtqrHivPZGOfLTP5BwH0KF0e9rQlfPsudTJ9pbITsvGrjg==');
define('SECURE_AUTH_KEY',  'vHpONFSRH+uO1CApJHxFEdtmVZreLB+P+p/zNKM7SWWERRixvTxKdDdfBF+Ha+wy/SUIEQWQl1qfvx0SLncwmQ==');
define('LOGGED_IN_KEY',    'q4FLyAPVGaSJ/UTO6arLZR/CtIU0mH+mM0qHEZAoM1GuGWDEXLSyKhF6TWXicvvPpAeCo7lHU0inq4DLHZxKjw==');
define('NONCE_KEY',        'mLEzZqrQ2xPfswyCc77s+uMZPDql/Vgsno1WSeArINDf3q1/luvffZlZLLiz6kWswMkk+zuyJFn61PbfDQ75VA==');
define('AUTH_SALT',        'cQc+kNKgTw9L0csFK1Ubdt4Wl663N1ty06lA3wIciKk0/LBrLzzyPbD1QB4kWecv77ll1Y8sw3EEKMX5u8UtIQ==');
define('SECURE_AUTH_SALT', 'd4ydD7FSDFLQvIXxQ0PoRKj87SZeagmVEmhtrssIH6GQcCsS9AG5X6m31O0VSigNEH5/PI77HbgRDoHtCVXOqA==');
define('LOGGED_IN_SALT',   'A0OW/4irfvLr8ObvG++rlAiQ6IUi01T2trI3id5x28ZZCf6n3iyHhkzGcer+npyQLxvM7Fv/cnk+uhsJzVq6pg==');
define('NONCE_SALT',       'bMF+pYYK7J5A/ncuggoLENSL6jYel9ZOa39q7w3muiUaHJarN2H4EMITIB/L9Rl+9KYv704RS60Dqx+LC/9XNA==');
define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
