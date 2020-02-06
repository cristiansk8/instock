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
define( 'DB_NAME', 'depuracr_instock-new' );

/** MySQL database username */
define( 'DB_USER', 'depuracr_instok2' );

/** MySQL database password */
define( 'DB_PASSWORD', '?k&*5w=G%%$P' );

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
define( 'AUTH_KEY',         'WFe!ibg*Nk|A<Z|2lj<[m!a-w B<R-i5l16tnJYPPCT2i&GGZY2-Fz)dUx[Z4{N:' );
define( 'SECURE_AUTH_KEY',  'Al(p(:*9th_uO.^hGq%j]N=[E%{`6e^=i.=.4b]ne,VP+r1He1^=7a6qX[@ktkMP' );
define( 'LOGGED_IN_KEY',    '#!s/`Z`^zX !Yh=p:?UdXqLMW-xwe* h$oE+`=gl_m>O`-lX0}Szwk#%UxC9V_H*' );
define( 'NONCE_KEY',        'XnE]ca2Kq44DK@| B~gxWC>LH1~UE {c}Du~B!#EZy,l^P=&.!Kk*>Zc?[:l)y:l' );
define( 'AUTH_SALT',        '(m}fr4`:%feZLhl<,k[v%2+Ukv$:H4U(=]eAo#lwO`HyYfY],=N|>[:l08%-L/ZF' );
define( 'SECURE_AUTH_SALT', 'O51f}Q&,8G:kuX2Mbr+^sB-AeS28r+K-9hQy,G!=x+Qi6]=*YQwg;VJ#sZFG?zKZ' );
define( 'LOGGED_IN_SALT',   'p1p{ }scc=xs~N[(lAE{G$eFHa;Y=9m}K9!>g68YyelDw)tkb61D9JlX*~7j+$Im' );
define( 'NONCE_SALT',       '5)@H KbGom;H[0RsR1)QGRlus`lA^$@M7+w98.*Bx TLS05](XcmkZvX&){zj6&$' );

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
