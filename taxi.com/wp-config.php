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
define( 'DB_NAME', 'taxi' );

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
define( 'AUTH_KEY',         '6ajyx)/X6jWRl0hWn[{1>Hk8=j-w[qK1kU ;Hzxa<L@.Ff7O&4O8<w@X2o]^2t?n' );
define( 'SECURE_AUTH_KEY',  '+&yOL>8FXjRTn)[p-/f@EGj(VIiaTnP>;,05x+>[Vd83UmG,whVAf#]C=ix# wuV' );
define( 'LOGGED_IN_KEY',    'UY!.lO&B31,mY=QgT16fc>7:BEH:egfu+|-T~h!9p q^&R9Aw_Y<$wsF`VSS+x<z' );
define( 'NONCE_KEY',        'jv0a|.I4TH~amo<#TO`xXNpQJc@9&Q$#s-y!2$o*.8,H2R&bQyY@o)%(sglh>?J6' );
define( 'AUTH_SALT',        '4.+-z{sIkxDqdVwCtB=]/MYP[4atBl+u5rX~&QyyU_>aYX<yz)=v}qPxrC,mIt[+' );
define( 'SECURE_AUTH_SALT', 'mh]h~mZ-deiVGav[c5|(i:Chq1}KWeR:l=%qhaL#D+HT0WTY3TT,/PA5).#$l@$R' );
define( 'LOGGED_IN_SALT',   'M:SrzQzHT;4gCD-#xi}rp]dTReG[WjEaqTFQAUm%&-qlKzC4?1M_8yUs:L$|4Re5' );
define( 'NONCE_SALT',       ' HNpeKkR<H$&gVRtf3+eOa^QECqDAbI,o.B%UKNt2@pWML~D=e,qYr>,:wlLt5yp' );

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
