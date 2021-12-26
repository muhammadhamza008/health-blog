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
define( 'DB_NAME', 'testing_1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '!>yH$az{#_]3y_r=`+x,B~s[h6)0J#7&}>Bb&6)nKHJB[B8ZW/z4>8L?/(!0!nV>' );
define( 'SECURE_AUTH_KEY',  '7igi@FilGwQX:Hm7JQ~/A1H,Th!bLN2*dGGDT?ktA[V)V $jz|o#0WFO~eI(t36:' );
define( 'LOGGED_IN_KEY',    'EJ48hY3/dXbm>Ob7Bk=!pg%N3taMUW BdVp%|rZ|t2Tb^<&vjbXNIyUxwi([6r>R' );
define( 'NONCE_KEY',        'g7Au}SA5~-bW3]%q,H3~2}s:@!tK}$Q~ 8%VkwT!:?L;n]$p7g-sqhc.&|1D,E$&' );
define( 'AUTH_SALT',        ':0f[*i[7O[D(BBE`nDk:L0YhP-&$bYUhKkaz}btvphrwtid2oj]-jogSxy<PQwc|' );
define( 'SECURE_AUTH_SALT', 'v.Z[StC+weX:feDg?[:GkHr,hyVP@(YaCq~G5ANdgjm6IrVLQm#l +?_mTsBwwXt' );
define( 'LOGGED_IN_SALT',   'oD?u?|%81pf6 L<xovt/U?H5y;pUyeHrp)79njZIG:0)<V1V<yR};c@s2)*doicS' );
define( 'NONCE_SALT',       '%t`J^n1^w`+wTrX3}R4m (_HA.!OWun^.9h6p55=323uTp04ijy [wrJaO+^2qc&' );

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

define('WP_MEMORY_LIMIT', '256M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
