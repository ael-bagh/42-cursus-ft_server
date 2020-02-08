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
define( 'DB_NAME', 'wp_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Asw75123691997' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '_bPI3f.b#{-L|hu?KgFUt ixKo8YzDpK -456k}qXBJp];PEIreqP9fU_wBc&B!5' );
define( 'SECURE_AUTH_KEY',  'LH@p,7w[w$&_1T7sg,ub!K]0L47Y}rAydX$OKbWw*IVMX$B#ZsjYX?H`{r!xZ3l8' );
define( 'LOGGED_IN_KEY',    '{F>nth|d[!Au!t=xE;Jbs<Lb`2mf`/rV9+YHNKIztR`i-NKn$=W79!JbGyiW@wf!' );
define( 'NONCE_KEY',        'MP%8[vv?a e|01q;SD^|eZ6>6LHM.*gtp_B*rJHd|We]C|]A|VEVz_8WC(>OM`i1' );
define( 'AUTH_SALT',        'NToK#NY{(9P/u-qv3t/OY{r@?!;Ji]W3Svu2G>-7rZ[yl@z:I;J,HFFFOs]l+`#A' );
define( 'SECURE_AUTH_SALT', 'e^ptv{KW#(5^9#wK0ImplWb`f!&9(k#%Ci^4w~uDa.w!2aF7X{K6TsqI$hbq8s~V' );
define( 'LOGGED_IN_SALT',   'aV!fb}:yKQcWTm3`*]t|&;AEM5=t#6U[@M[c(@e%e4p%kP Ut1]LJqL5h,HLkaMN' );
define( 'NONCE_SALT',       '&(jiZ[tgSde%0*[3OQ^x)/JByLdCeV[<bnwb9p-Xz`!]ut-1&eibktH2UA8-X&A9' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_db';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
