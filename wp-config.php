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
define( 'DB_NAME', 'wpdclout' );

/** MySQL database username */
define( 'DB_USER', 'forge' );

/** MySQL database password */
define( 'DB_PASSWORD', 'SRnJ04NcPbna2SlJsciu' );

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
define('ALLOW_UNFILTERED_UPLOADS', true);
define( 'AUTH_KEY',         '_mM cj}I}@,u./U-W}n=)_-t;5ihL-MPr hV6QvD9/sx8IA/9qC[Uq6l Ga,/Mq/' );
define( 'SECURE_AUTH_KEY',  '$w-p:-~sxCMbk}9i`LytC:NQH?Qi`s7x#c_8|MEvieCp6[,|vfFPII%E;J}G`w]H' );
define( 'LOGGED_IN_KEY',    '>&qm<Z(*wbaZ;G21bi7Px;8ZL>Si%?YSxKIX5AfOVh_|3~Eys%`,MKm*}^fH|r,E' );
define( 'NONCE_KEY',        '1``ZHyyU gc%psa5>zFUXpinmb)s`8?Dpiv24W2`Ej+.wJ(QePZ1c*r&y;;_zKb`' );
define( 'AUTH_SALT',        '-&o!q.Ab:{)yLs%`dD+J!L_x{7;2mS%uv47^rfxZzcIFb[w<262k0*[,mcn[?ewU' );
define( 'SECURE_AUTH_SALT', '04;DC4Q VQ@P#5S.1HbVwns0L{-.dqb]L05uK75~Zi/_[E[#u$wn-u6X4mpO#k95' );
define( 'LOGGED_IN_SALT',   '>HlO~t=N$LF-EpGp%{>d,45mf!Mb]Hzryu(+c*G>*z7(r/:l}:-2mMZMxEL*xlF6' );
define( 'NONCE_SALT',       ';=(+8!tXA,%>@vt)$)wn>Zzk&CaOc1Q0+ EoD^c&f{ V(olU#p{tn@c5Q>{aU{y+' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dc_';

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
