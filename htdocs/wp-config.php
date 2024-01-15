<?php

//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL
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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'epiz_31287728_w753' );

/** Database username */
define( 'DB_USER', '31287728_2' );

/** Database password */
define( 'DB_PASSWORD', 'G207p2)[BS' );

/** Database hostname */
define( 'DB_HOST', 'sql201.byetcluster.com' );

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
define( 'AUTH_KEY',         'optxtryi1c64okhsbsterdj3wxb5lwnm6rqc5ksmqkqzcw3alcylytz9apivt1sf' );
define( 'SECURE_AUTH_KEY',  'cljjrgledifddywwjl6jcuvhjirdjpeyeagjefjj5ljoku916hvxjrznqw9obnb5' );
define( 'LOGGED_IN_KEY',    'kzd1otfpx720i3p3awotly9cxuarlkfquunby4lgykemutqwsm5xptm6wf9ok8ay' );
define( 'NONCE_KEY',        'mjclm0kpqf7knpsdsbdqbzjbeexlzji1ikc5870fvwdnn20ru37q8srkfjnzm3is' );
define( 'AUTH_SALT',        'f4wlw9ep3yhe74tchxvzm83o8byekrb7sgw4la4xzpteeazogyji7deit3akxp5m' );
define( 'SECURE_AUTH_SALT', 'rtiofuiid7ykz2nkxlobwnx4odbgqpjl7ewvqjfxw3jbxjugxp8bzbwek2f34s8x' );
define( 'LOGGED_IN_SALT',   'jeowbgjwyef2g4mvfpza4q5p0xmyo8st1u8jevh7xtncu3ovkcatqxniyo6vmmyy' );
define( 'NONCE_SALT',       'g1iy5ohvbp0bqnnuvuuxuwuwtcpfxqc2qbhz0c8p0vwatjy1t8zc5xp2ka1gjdsv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpri_';

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
