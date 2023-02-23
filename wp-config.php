<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u679771289_Lz6U3' );

/** Database username */
define( 'DB_USER', 'u679771289_TeTbM' );

/** Database password */
define( 'DB_PASSWORD', 'UfIKU2IbUG' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Q87ro[vrDiO{`+q$h/nS54Q)Alo_~*JElZgj$.3AVUX1_Z:WlB<0ry^ip`E;hwK^' );
define( 'SECURE_AUTH_KEY',   'y)6bLo5nW1o%5^XxiriM:Wr&XL7;x!U-c^OF2*`QR4)ZwuoAGWV$ZorJ&Y2~UHK{' );
define( 'LOGGED_IN_KEY',     'xW,N_~wSkK_8:c7_Qw.#<ej*w+aeX.o1fV6HjNSI`=B=d.LN!;bUY7AK<8|s$_G_' );
define( 'NONCE_KEY',         '33oc$<2)j6^(y!oOFKk;H4E|2%K(7=THIY1%(/*2{}V5PEbxdu-(V[f_hI|$l/o~' );
define( 'AUTH_SALT',         'w)l|mt[@`[^MPcZ|W,*XCX&Xok,8;A&yF.cI  i$B=,F5&}W7xH&K3_0f,oj6A7c' );
define( 'SECURE_AUTH_SALT',  ':a,RG3=h1w`VOHQZ::}#H~E9D~xS&+P:UbdJ0>$D7NqrXRhONqjcRu@vaq#qfKX`' );
define( 'LOGGED_IN_SALT',    '{u2iVM#}/Tr^^MnbBiYFv7$>JdHfO_xKtY{6CgWZHtHdOKoOb^5jJu3$sMu;VN=F' );
define( 'NONCE_SALT',        'Bm0!H$CNj[p1He )?2Hg#R#snsS<IkJ#(J2]Ly`K$!dIZYBrHAoEt;6V,-oLdH7Z' );
define( 'WP_CACHE_KEY_SALT', 'j3,(s5R|KG<vvEuPn!wh >aIF@5AX$<ge/]-&Pw>tnY7)P~3J!V^M_Q%+GIk9eU{' );


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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );


/* Add any custom values between this line and the "stop editing" line. */



define( 'FS_METHOD', 'direct' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
