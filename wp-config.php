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
define( 'DB_NAME', 'genetechies' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'qq1788lover' );

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
define( 'AUTH_KEY',         '~UF;BZWmbVMYety5&JN*1!?u+^N_5ofu!k4GIDKsapdqk:Nb1+raF:B^9W6Dk-c=' );
define( 'SECURE_AUTH_KEY',  'cox_WZ<c`Q{GMSYyZANDUva7Jn7k]]L{B9v!~AMNIT>f%Hl<W~Ll|fX<DdpG_oUo' );
define( 'LOGGED_IN_KEY',    ')$D#UT&QN=4J7h:1Z=hOZ$$J.,Ps^c.{lG7`m5SDW~i)i= :tKet-}2?HsWB*dk`' );
define( 'NONCE_KEY',        'Sy@^1qi5f0n)CFs&~[J!55Zl_G.~6E3L?:@P@>&.c@mb[rJK^:s;oP7[tIEs:$#7' );
define( 'AUTH_SALT',        ':JMVUYZlO$Yf3M?PdV(]mcsh$=x5xrw(fj,1e@Aw^Z6O:(aU8%<q/sg(R+Bz|<O<' );
define( 'SECURE_AUTH_SALT', 'SQ$ksO >PSC^^{+D4*.hNwo5n;D]vNYuU9lcC~Iw7Dvuk&GmKqA%,aUx$_LHL}|q' );
define( 'LOGGED_IN_SALT',   '?E.GhMK.K<:q92U`8<D-x:RQ+UE{p%Ov)}CEF`zjH#UxGj9M_z-},Z.RqRe;d;@[' );
define( 'NONCE_SALT',       '[YYk2haK7119tpfQn8LEb:wL`4NdqOuqQ~Fv^p *p^}|yQA<@hIon^vu&T$+3*k}' );

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
