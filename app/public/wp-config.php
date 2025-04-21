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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'V,Rit/]>ckX.lTMd}% 6uW9n#>l[072^jjQhx`QI9l<+J@Yz9PO$P3|l%09n[U^`' );
define( 'SECURE_AUTH_KEY',   '(!@(mY>e#`lc$WFI:L;SRhSm|)5|VkR[@ +]_#6jxw&rKt2]1T&j{$Z_s1B0O^0a' );
define( 'LOGGED_IN_KEY',     'kaj)!%qr{s2rXiO1kh36e%n4AM/=L&l?kLIbL$~SD>G u8kZ)VtVCM][N;8WiBI!' );
define( 'NONCE_KEY',         'vATfL6ph.1~pP!cNxJ!0dl|WSzDV,Qa)Ci}.YB{}doa>[-PPDO,P5::rpGx[Z{/u' );
define( 'AUTH_SALT',         '7i,vkE>=FCJ!IH$R,{Qy)jt~~WY+{:HcGj7sB(;EG59qFiYd,UTtl YqT}l@&mN*' );
define( 'SECURE_AUTH_SALT',  'gcD=[tm|NDU*,[FmrU(.QRv1PbF4Qg+Ysh=`vQ5{mT[|L:,y)_I!s=Jz]:X@?#Sm' );
define( 'LOGGED_IN_SALT',    'i|PH7XuRa#<!63kn@80W_&z*AwL7OGIWQ$}zf?c1|J$yBv<s0?Ak{ B/pPQJXx9z' );
define( 'NONCE_SALT',        'G+S^F^U17MCm.9J#^[r<J0P4_0DoF/wLCSdh,.AB_?#.=;5$/-UrN7oM{4;LKi_e' );
define( 'WP_CACHE_KEY_SALT', 'y0zj{2^{b}?T}!{O.N2?([KwI3jrprbCyLta~DvO@j-I~tWG+Tv:^RMowM;gE0[[' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
