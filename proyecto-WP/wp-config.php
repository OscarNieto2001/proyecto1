<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'estosvatos' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'JMDsxs 8b]&fm>JB)zEr3PS`3f+ T;Ws[`w{JXt[X%}+Y%}fU&K+Q@GU[eb_mL`a' );
define( 'SECURE_AUTH_KEY',  ';5#fmBl% .TK~^ller-3JeaEErjoA+!xQx-v@2,q:v(N[|j@!0]^NP/2m`e}2?9=' );
define( 'LOGGED_IN_KEY',    ';&r:|0wjulv.yx4!1-Gn>s@6?O$:){]S72<FZK/~J4tc`Kc;h^Oe*6/a^G|$RubP' );
define( 'NONCE_KEY',        ']H8lSESc=U6JH$}b%OY@<>J~q]*r-TfGR,icahm@-fwJF`]=21GA=8 B%}!Tg]!%' );
define( 'AUTH_SALT',        ')oHz[Y6di/Qfl)olR!xX8?n6ym$g4fV$13Xs:x(e9agDG`8/K3/Ylo!9M*,_O&j,' );
define( 'SECURE_AUTH_SALT', 'Xa36=- J>-jpafhz>AdJ0:w{pI.IeMXhJpO(xu]AC9LE:4;zsqsal(dSNrvp5+Z&' );
define( 'LOGGED_IN_SALT',   'II7B{:29,M(^lv:)Eof$,JROG}vNmlc)hG#+*MM+e]|KZJb,(1oI_$cJgU$nG|#V' );
define( 'NONCE_SALT',       '-ay<{c%$tkCBR!5b0v;oIdFf;^A<>9&9J%XGO5rj:;gwhGeAK2S6Y6XOjpR.{K #' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
