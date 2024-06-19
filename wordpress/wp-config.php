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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_od_hp' );

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
define( 'AUTH_KEY',         '5nbNFg6cMUz_DAn(H-v)*iW=jG(<W$3XcW>:<14rLWofH_P^:vNMXzICdz&/XD7z' );
define( 'SECURE_AUTH_KEY',  'uT4{j2LKZ1]mo(RN?]@fMh.KNU`b`oV2-}@Bzp_KL@*DZ:UqSjBFje-`B[=J9hN>' );
define( 'LOGGED_IN_KEY',    '=XD(%z|g4yPG,:>V1TsGKIT7(RNf_PmC=SL1)$%HkDu ) C,wl;.U#x~d:DaYw!b' );
define( 'NONCE_KEY',        '}_.<EdGu$vs}}0r.16{@MoS0yT/_7+*$yb)58tHeZ]RTWXP&*d.IQ82@Hi)X))wK' );
define( 'AUTH_SALT',        'P+9dCp*g_msViHat`9w>qN[ulL@#z;[D.&k6dTEcz Zwwidbl>mL6 ;*ylcmVO`M' );
define( 'SECURE_AUTH_SALT', '3KQ,K+s%h@0zDpkekz~A @kN27G{^0uq2%c6O|{]=1i6CeOWGn~c|E:FXK0=%T^Z' );
define( 'LOGGED_IN_SALT',   'u`[}h3~m8GFMPoOj@Zls85bhK;vrK0!{k64QhqLbQT1djLDzsJuz<(gKo~INSvru' );
define( 'NONCE_SALT',       'If_ jIyQ7+!$jzb]32CG2;*mNLk+Oa7KH]|=&9nMs{fYgs9#M{Fx@-e[CS3^31ml' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
