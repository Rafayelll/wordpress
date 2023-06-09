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
define( 'DB_NAME', 'rafo' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '8X7,/LV:nq),fd>EPE~8{k!4vj`Gq+2S5mpTS#g&!DP%OYxiaczau,EO:H>z7$zy' );
define( 'SECURE_AUTH_KEY',  'nk Kee-1uL:v@pY$h-B4kTxM9^Oo!pjE}Y9]fimCwMT)3V7dqGB>>HV$G(skzj#m' );
define( 'LOGGED_IN_KEY',    '9{!g!IhQEO@c5uyL~1QM?UNnML0NMMg[IdB-KA&6W=QkNcsbDASR?zU{5f}xod4:' );
define( 'NONCE_KEY',        'KLv.%?I]^EXLS7m-l(-n$.Vpc76Z+4jXu#.%Om&G,K9O$]L~&rl[Un^@Y~}p41|h' );
define( 'AUTH_SALT',        '3D-(.U2mJK2he.<3gIjE-ayPn8!8wIQ4|[c6;FMm|-R3<2TxlRAAj,XrASbz. Yc' );
define( 'SECURE_AUTH_SALT', '(y5Uj4)R#:yaV<Bx mE*X`1One(SXAItwRErr#]3-7T{Kunn!UHVhw35i_DXw@Os' );
define( 'LOGGED_IN_SALT',   '&vEy@ySA%}Vtph.BSc2vs}i>FD[r|< X^zyNPU!jdkB!12ZigXZF1/`5~|x)MsUa' );
define( 'NONCE_SALT',       '6G`(&#2X,V2</c{b-I{c_vgZ~$t<c7%/S-b3VFJ+[T=-g_9)!a<;N+D_ml*r62,`' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
