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

@ini_set( 'upload_max_filesize' , '400M' );
@ini_set( 'post_max_size', '400M');
@ini_set( 'memory_limit', '400M' );
@ini_set( 'max_execution_time', '300' );
@ini_set( 'max_input_time', '300' );

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
define( 'AUTH_KEY',         '#/c&Cy;bE_A2OV}2fn}q7G{PrvYZQga.A|xuy!,io9H(e5,bx92c[PDqS-6MRn2M' );
define( 'SECURE_AUTH_KEY',  'CZd^:>k}JJ9}x-KH^l?7TI,[n/sT0bzd &0_AyVm|QPPS Ki.?ey={-4K/B![D(?' );
define( 'LOGGED_IN_KEY',    'b{t>yOy@{[)Z`3b:a3@%J+NyxxV;{2mCf,;}.,Zdwo?oh>hoTT1CaAMx]16TtTt|' );
define( 'NONCE_KEY',        'd!-F%EA`K6MP~N],#Ho84UF5h5s8mf&iMak9,4:y^iK|6zFgGK]FUi$exklVD3&Z' );
define( 'AUTH_SALT',        'q.a},Vc5nc2Yy{p@J#mR#;A0*^`O7(*2R+#l.f08I v6#TtZ[RiCcE_fmfhgArnh' );
define( 'SECURE_AUTH_SALT', 'F|jH0l)}SsOdXK[%A_KP70K?neygEJ3w)mP4UVNm;`T &<{#LUw@@%^$M9C&F5_c' );
define( 'LOGGED_IN_SALT',   '/P@X?BKsb<df=I3~)Q>$CZjq1usZPAmL-j)e=CI(FVhn!=`nbN)!`#azXHt oMQl' );
define( 'NONCE_SALT',       '~akU:~wG$3KHdF&z.g<kPN.MzPoeZxS|()4zI8o<>Nh3T@+By{J291p(bPMbpg*i' );

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
