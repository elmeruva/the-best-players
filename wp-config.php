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
define( 'AUTH_KEY',          's:$[GYZOAY*=hf<nx=l0-^E}z!KFo$TiU|-6nMq3:g(+35:NbB0uT8V7H5TuT!)^' );
define( 'SECURE_AUTH_KEY',   'J$ncco<;#=gLLxJUO3*_2v36KfQ11<VP@9 [ZOeI_om(UTxKSGc(;.Ak,s|$!#[I' );
define( 'LOGGED_IN_KEY',     'z]#=umrLizl.~]nmzU^cVCcea:3zE(y+GtFca0W&1e=W[+,& 77WS$DTh&?r^p^ ' );
define( 'NONCE_KEY',         'rzTU]E~x&^8IN[:0Js4uxixRNNw_B=KtV8m_sns=euagXHyl<bnD|qdt5NwPgZj}' );
define( 'AUTH_SALT',         'EAJ8Q1@LgOWHGlOFQG_+Q)*HHf(8e^Js8^To2CXqMV)|DR<=VzkhPOYmj*cY+8u=' );
define( 'SECURE_AUTH_SALT',  '^X6*!Lt9@fg;51Xwe 7yB[AGh. 91*0`S&]:3LE,[%WQigx0I4)V$rHE,STa9(/s' );
define( 'LOGGED_IN_SALT',    '+a44hK+pgLET4nT1bP6VWhg;[[:]{JHyzvg&!7C8]^^T&6H|`t<M+5<;EIKXN.tC' );
define( 'NONCE_SALT',        '^(E!-nEsF3r5F`:ySz.&(V7_a*sRY2(p75HC>=(g*XP=4SQ7Ed.uZ+_i2/d~]!aM' );
define( 'WP_CACHE_KEY_SALT', '-V3lDmE~f?=R{dl{mx]4of{JWxs(UK[8a;C2]MJNicJsRYnIS$P_,HSvr@UXn*P5' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
