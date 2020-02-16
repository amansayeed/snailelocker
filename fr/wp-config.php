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
define( 'DB_NAME', 'snailelockers_FR' );

/** MySQL database username */
define( 'DB_USER', 'snailelockers_FR' );

/** MySQL database password */
define( 'DB_PASSWORD', '7wx*tXF09{t6' );

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
define( 'AUTH_KEY',         '9^ 2sxDXDE^!mA$b)${-ws*)-*Qf!).LQO)`g[*&0N(w9=nk(Hl +%7Msyw^@*a0' );
define( 'SECURE_AUTH_KEY',  'B80[~[-h+(j=6*YBtI*3267YBX.& Q8EYxNADFJ7<4&bL&sRdqY3D>x_De#lcEJE' );
define( 'LOGGED_IN_KEY',    'Bd9bk-mG^jlw%uYs?^U^nc3qLt}.T*27Z%x%FhZ9=CnY2GXqcZg$d61P5G9aKGTC' );
define( 'NONCE_KEY',        'd{{EhDT?~}77mhAeuC$J(zOuuV/g?X3%)tJ#P|:.f4Bx$]3[Y1.x7iGKbq{PC[fd' );
define( 'AUTH_SALT',        'sw0&(}~iBvZ4!V-Bz;IF(Eb3BIC3[(;3~-7)SHGsDrK6A gc1pti 4V.tm9BPt{(' );
define( 'SECURE_AUTH_SALT', '*rGREhfDDbMmm6q9/s]C4FghXRnakC>GhHsTBR-9puL*UOge~oFVf8sAX $y_}Mz' );
define( 'LOGGED_IN_SALT',   '>x=yN4SOP;gkBf(aR^~#w_6FualxWZ>]rMdXg+=&DP.LoZ@jP2|suTqvuFA&r;f3' );
define( 'NONCE_SALT',       ' Fo-8$96_j[5@:ob=eq=b(j13R}RH:Dl2l.YDRNpgOpt~C/5z+f6S6E_VM&$BkRU' );

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

// adding webp file in wordpress
	
define('ALLOW_UNFILTERED_UPLOADS', true);
