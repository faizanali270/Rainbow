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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'd,Wq1#k160?j5J)iF#)[F78e?I{$Oe2f=^U>, 6Dmc?KnvtiEvukb5^(Hg/-t3{U' );
define( 'SECURE_AUTH_KEY',  'r,7;oT(,c^S6^v[gj9mh%>4Hp(K0_x(Y4UY4[Z+RAl4M9`C8_1u([[c.cKnD>3_S' );
define( 'LOGGED_IN_KEY',    '2CFs>TAblEl=VT{S/@Lt3dOu=|Ej149^+Y}HZelWf2tfJ%L,l5kNQ)9<<A~xXfg]' );
define( 'NONCE_KEY',        '$Qc}QPJo+73O*s7J=o`Qv(c6wcZ:i=N3iDsjG./G,V8%T8Q4CKm?n+]u**1aCayM' );
define( 'AUTH_SALT',        '5B`Wm= Ibj]2sC0}k<Wp?{u@~6shLqaTO4&6bb?EG0Gbq}1^B~LK=6Hl5t)-?:i;' );
define( 'SECURE_AUTH_SALT', '-fLO5c3%TDY]#y-MHtL@O _H?*{/[z_4ErNngn%@`7s5I$BIhEA!GG&GD8fXm43x' );
define( 'LOGGED_IN_SALT',   'pra__%1 ?9cIy*w9R y0azglG.?E+GfCdAoAC!sV50u&YE.uwR3T&nV@CciM(mkd' );
define( 'NONCE_SALT',       'JnPRH5m.Ql%*CRHhhh2i/S^qJijmBpE~{.uI78O;:)BG%pO+06@q67N$H~{]4>k#' );

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
