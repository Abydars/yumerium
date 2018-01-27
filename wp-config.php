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
define( 'DB_NAME', 'db_yumerium' );

/** MySQL database username */
define( 'DB_USER', 'yum_wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', '$YmR#rmYW1P' );

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
define( 'AUTH_KEY',         'S#B2]`^eR<dT%8:iR6$_{|p?ji2T^D*.jnUi/V-1[9s90oe4guZ?awxQoqLGa~Q<' );
define( 'SECURE_AUTH_KEY',  'yI12b$:-b2&~d~:M]0|X?PyYPkLUT87~ 8!4!]%fQ#tO?cS{jX8UE+B(,>4NVh;6' );
define( 'LOGGED_IN_KEY',    '<^NPzja?uM]C&4Lg8hYUT<dcGgO$]lXch!RFZC6X8lzYk9B/moJSo~dS2=$ZufCR' );
define( 'NONCE_KEY',        'c^Vk=XS*)3/akRMdFcF,Bb/6.qtHakPDDdVy3nSU0_r&,@IZ&cRhy%8-&}UcA`/p' );
define( 'AUTH_SALT',        '8rP((M^(7LTs|{+HZ2<s]EN*m)9fqLuV?E2_y@7uY/ 02>`j#IF*7>H0)ZqPK1<}' );
define( 'SECURE_AUTH_SALT', 'iuz#EY#<on.ke<-.dAW*`JsaMGx53k}Y.F}RhS$.~|q~f92;L1->:_rIR*(:agVN' );
define( 'LOGGED_IN_SALT',   '9a!RQCXtwV?Az8ZVH9OGr^r_Xhkx_*m]`BLB_]no}7m<Laz|JBD-|!k =k*N}q[`' );
define( 'NONCE_SALT',       'Oa5SOlMzH_cHcm].cvb?rPm~{]T7Hf- yg>E=W5}:%}Kd@?L2>g]x#|.wl4>8kWh' );

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
