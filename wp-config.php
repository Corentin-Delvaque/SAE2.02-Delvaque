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
define( 'DB_NAME', 'CoMove' );

/** Database username */
define( 'DB_USER', 'Admin_CoMove' );

/** Database password */
define( 'DB_PASSWORD', 'pazxof-5gekhy-jedJot' );

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
define( 'AUTH_KEY',         '5%m9_GEd!{I(|[m>={yq}`EJE9V;AQ./gx#8S8{le^!g8>C_=$N9o%4@e.-r0v*J' );
define( 'SECURE_AUTH_KEY',  '5d.iT/J(qJ|k)0?gAERAQ}i-B85gwCuhL.iye@x!}hDY!X{WQNb0MB;>Jr!SbP,l' );
define( 'LOGGED_IN_KEY',    ' 1zOyvX`vd.9XsLT6xs2[Y,~Oh(FN?UC@Ye6;1PXGiHR5;c2F )o^FO/ORfB9fbM' );
define( 'NONCE_KEY',        'kS7+y9S7#(r)7T()k[DqyBq~>^pvoZD`>Y^)OIHWGDPLf_:s6/z|y8FL]|v#5^/h' );
define( 'AUTH_SALT',        'gA:c-.i;jd(M]s_*Ki%`(cDz!`<n0wQ~hMyX_{MiI!:O3T[cnwZ4)~,-XaBsKG~?' );
define( 'SECURE_AUTH_SALT', 'W)C&djr8imQ;~sCbPp,6UJ6:IU(AVc:PkWU!G*Xi)%ytakE<r<oa<#NPx]c1qk g' );
define( 'LOGGED_IN_SALT',   'P[VV>z<W`3H.w/v0?QN^[CBm_K0f |wAP3RHUX((:V)+$R:j+/%b-bo!/d0C{+SP' );
define( 'NONCE_SALT',       '5D.G#G%YH#G]CAIrs/*RR-eX9cJx]4J;6{#FQyNf^|d:h_|Ir5]!M7&g^[YR6C#m' );

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
