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
define( 'DB_NAME', 'childtheme' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         ')}D/$~/3nALaX$k%+av11Z85w/!m?OaB0K@+n/&R{I|KPkxCaXzVz.JabZE7 {yx' );
define( 'SECURE_AUTH_KEY',  'GOw-w9E[Aqd(x&]y2LGC.RUqE/oEGC*E,K$@Il8=fBElSTS_Un<=pkGTlJJ-g O`' );
define( 'LOGGED_IN_KEY',    '3&!zc_j@0~0#K?Of]v.WmPTm+WDl%Qcw+}GkV6 PuVd07h.tc)vt?LtrL5AvwQ*@' );
define( 'NONCE_KEY',        'z@XAN<eZxJS)^K=!@#XBmrXGR}c@6Q=!<rw|mE1uIvVt|Y~,_^N*5n^76B<?25lf' );
define( 'AUTH_SALT',        '&!n9I(zg1cq2oci|zgLGj:;LqwSPc,+2e)dM:bgIWdI+;6oAYa1FkZ,`M(8c@dfF' );
define( 'SECURE_AUTH_SALT', '<*zqGGW/+=aiMO0?1LWo&MD1fix7ypI7!llk,~N~}zBx `T4{0YT(rry!R9L%8-E' );
define( 'LOGGED_IN_SALT',   ',}$#_hC*<iK5sgm#KCZu9lgtLXTzh/g=|t^&wMJnF,a%& ZX|dtT`Z_TT~ibAF)j' );
define( 'NONCE_SALT',       '*-xAfDhy&h#wkB5OvqtRA<h4ElknAdv`|$`2=C(|L}!g/jLMhq&T7M$pDw+$.hz,' );

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
