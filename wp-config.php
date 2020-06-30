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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'growshop1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '}-Is$QrT?PEVcA1z]N<d9mUidB!~Ll+YU:TW{z2_MZEzyOeb{I&+Y#@zqM{uz[md' );
define( 'SECURE_AUTH_KEY',  '?QckjB;r-+~0:c@x4yxG,;?ha[TRA[W%K<aLQ`~iAxb@|}_#}(z9k;jb7nkgOi j' );
define( 'LOGGED_IN_KEY',    'W <7mEm=?6!i#-(/a6|td5hOb+KGPV* -Tsq7IJh$>jNQUfj{YP][<&A=23[TUuq' );
define( 'NONCE_KEY',        '_g5]pSx7M`Fi-26)5pP;8,nT&h/=-7smb2-]_HAcb9X.nw9V$PPw$My=^lc.mXaO' );
define( 'AUTH_SALT',        ':93m#xV&teF![5%oR1$ F]B`ncWo_v?8l$[8Fn|dx -BPE^y]&GmGI]}W(?TA<Lf' );
define( 'SECURE_AUTH_SALT', '0mhJrHcK08_&DB?ESn3H->#qw7Y}FzdmYh[)qSi7rF1i,v)YXe|c:V5ekln GJO{' );
define( 'LOGGED_IN_SALT',   '~|v}HHdBX4U/P/f]]^]s+h_T-EKE?mV5R4=Yy!R:VXfd]O?RzCjUb*TGY28Su/[ ' );
define( 'NONCE_SALT',       '2]sqOJ.+nJpke2+D,q-f$#[/C E,O)=HYAcXr|N%|BH1^]/b-Rujeu.@|<^(UqY8' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
