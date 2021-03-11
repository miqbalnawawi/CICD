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

define( 'DB_NAME', getenv('DB_NAME') );

/** MySQL database username */
define( 'DB_USER', getenv('DB_USER') );

/** MySQL database password */
define( 'DB_PASSWORD', getenv('DB_PASS') );

/** MySQL hostname */
define( 'DB_HOST', getenv('DB_HOST') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'E2LnY*!LWXI43s#2rPo-egRe /Mb<Z-JE@Ph@A[/lZ{ =,.0wLnt<+?Nj>>EcAHx' );
define( 'SECURE_AUTH_KEY',  '7;9]?,]V@<&=0>|5_FyC6?E-8V}kg]cYw hB}4),%<SiEL?Ej3/^%-[oWYD,j=5u' );
define( 'LOGGED_IN_KEY',    'Wbi5qjY-{bki95;WvG?vU&4?EAuGv3M:mXk|Iat+X@`i5R|4Nr1j-+GI62B|NTGc' );
define( 'NONCE_KEY',        'At-KM#K~5Y3NN]-pj4>Y@^aH50}8+d6Cn@f:yr~w|y6L[0o*&>ic1q>7C{i]Q+_O' );
define( 'AUTH_SALT',        '16V=fD$Z__(KD[(%wq}LXF$3s_r}Ke-!XL=Klzg2]f;qw#9$Naps~1)%P8oK7HxY' );
define( 'SECURE_AUTH_SALT', 'hR{J}x&/K2?Y%q.+azF)5$vr=`8>[TK5.7&U}eO3`!<Me]ky5_Z*&J`6Av9J?I-^' );
define( 'LOGGED_IN_SALT',   ')4M5l8{=*.%1.OWh6$CFE[NTx)rB,f7jV@/D+|%aRyQQ=MT)06q9DCg3g54&_nk2' );
define( 'NONCE_SALT',       '4nGex`o4h9-m.j{q^Nwep/)!>In9>5kLdCupX1Y-+vb%x|ks,NCcr{h7P:y f(/i' );

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

$_SERVER['HTTPS']='on';

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
