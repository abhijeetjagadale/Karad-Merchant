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
define( 'DB_NAME', 'karadmerchant_db' );

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
define( 'AUTH_KEY',         'm*]cR0:}a/iMvqEI5?5]wU`0.LN0vI3O7&Rp4`^TDGd*(Y}_M{kD=:y|9:m~`(:;' );
define( 'SECURE_AUTH_KEY',  'wY:*D}%wT4eK8(s3xUZW_6fmG:* 8o[ Egz-?_}H$*@[:ppE~ga=E;ak94>NciO?' );
define( 'LOGGED_IN_KEY',    '8bsL|M|Qf*eGf>urqzS[^!MmyjyW?Q|udX?BC2  &w00(Lsd`|?8N*O#mHF$4g6u' );
define( 'NONCE_KEY',        '|5J&!r$1t9wkitDQIMIe*RjL~QLljl]1>ddrZLt`x{mG92Qu=ukqL_P|ml+Ql,7/' );
define( 'AUTH_SALT',        'iT?WOsTx&tILg96;5DIr-Le0LDYgQm.LmtW!v~K/&#-zjDAV=`W4bO}]mg(/b2PL' );
define( 'SECURE_AUTH_SALT', 'y60c[JWSC5!K<4 w=K#DfU~jX!|O{Q EuPm`{aQs[dUosb1n)ufSU7Dl4q0SiV=$' );
define( 'LOGGED_IN_SALT',   'Zfw:x(eWfE}Ji!s<-n?@f+IVAOQ9ZO{A]cB9Q~H 7!!j[qnvAT+=#H@GgHS0DsDw' );
define( 'NONCE_SALT',       'HH~aDz{bVHrqJ6Y!9yP^1L$99WM,>$IsK+.R#c;?dR$%l!.gtngfYWI1305VE#=$' );

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
