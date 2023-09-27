<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'PW' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '1234' );

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
define( 'AUTH_KEY',         'VAQ%n<8xeSvx0:aA)j[7:e`V%USN#9A*gQ;zAvUa4v>1@1`F Pi.Mdg7,Fk> &M^' );
define( 'SECURE_AUTH_KEY',  '5uIXv`0e2[ogo*!.03L=,tI1fYzHcPIt5*lDf3DEB}nE e@R-i~*eG/|bRWsodpo' );
define( 'LOGGED_IN_KEY',    'n%sa5l_xh4-Uz7vOVWDS JC@G$X1G1j8I/6#j;t0UQ_0z_q(oj@6c4QG0XlI6si8' );
define( 'NONCE_KEY',        'I 9^-Ex=-pszu<@a-uC*ZO._$R:8oIJz%m[NAW7mM^R_;6RPAcOE`sgbKlj7AB w' );
define( 'AUTH_SALT',        '+W50h^%He<5<qZzFq= p9{=v&t..6gdYsjOK)8O=TtNtJF6jQ+Z/uc^a&Al%qGIf' );
define( 'SECURE_AUTH_SALT', '+Y}=*#LR|!z/5|].1v)s/GJi0tilLmV7JU0xtLk?^uQ(BsCk5a4n_~#vz,}qON%Y' );
define( 'LOGGED_IN_SALT',   'x%KbhZvt`0j, ~(}!94$zCz7NFE(L-rU ~i6][eR_+G0zCoN8ElW,jjj?F$|4K{F' );
define( 'NONCE_SALT',       'biQD8L(!FR|=v>4FGIVQ$(XAl@>lfgF,?c}RM~qz{pMQPw-xO`~;S}W1yjco./Xv' );

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

define('FS_METHOD','direct');

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';


