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
define( 'DB_NAME', 'ecm_DB' );

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
define( 'AUTH_KEY',         '.EYA!F7q^@*F|/~kbzRHO! i@Z],wQ`So@]>e%u>TIo7>&N^veNf~a?3wQ@EAUQo' );
define( 'SECURE_AUTH_KEY',  '06yn66ud+ZG:U`Y?]CNzW/OO5v94z]sX_?3S~hEhH&M6a!?=R9XEP*.Pr{IZ?UAD' );
define( 'LOGGED_IN_KEY',    '$$Vo`CFG|RuR0Z^2u/%59sf:G.KWUw[N8+rt^*l?xQzA @4}O9vUn2Tpxa`__.,<' );
define( 'NONCE_KEY',        'k/pL3ybOlTsv@ij%Fp`EJJz.#MKT_09>#3SA%O~G[[)/p#b}0xZ^N,N$aS %k><8' );
define( 'AUTH_SALT',        '6#ucXS@f<rTGDfLf@1!xR 4W ATemI`*4kQX=BJV7hrNH%A(p$YS5%?Z6jrj4Ut3' );
define( 'SECURE_AUTH_SALT', '@%:Kbr*Oaf=FBZo&5Q=#QR]D@(Z8`mFEXm$c%._*&)(^W9;8`w`j[g=VGyv[%Bhc' );
define( 'LOGGED_IN_SALT',   'DaZg*hJ,|nWESLihCz:8 P:P(Wi(9GR@%WemrwdLlwKn2s$jVSiB%G7AO>mvP-Pr' );
define( 'NONCE_SALT',       'SM():4Zr5h^w&.Iy-K^i:~vVy7O=+Wh,Lo~,n:&7}0(Za_b3,N `2LOh[[3Dw-i+' );

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
