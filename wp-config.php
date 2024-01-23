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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/srv/disk2/4431943/www/akaexcel.atwebpages.com/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', '4431943_wpress29d90034' );

/** Database username */
define( 'DB_USER', '4431943_wpress29d90034' );

/** Database password */
define( 'DB_PASSWORD', '1T6h6V4mutYzy46o9RwfMwlYSPfhR4DL' );

/** Database hostname */
define( 'DB_HOST', 'fdb1034.runhosting.com' );

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
define( 'AUTH_KEY',         'jV~uX^NTt/W]pN3O3C7h>V%C>lB$=JW_WNX!O3R8iW=dUu$oG3uM0(8@q=GPW0,e' );
define( 'SECURE_AUTH_KEY',  'e:3F4J6>c[=P*4.Vhc{nyX4qRe.G<_=SN+&sEJn)t(V07V%GHq_brldx|[NOA;Gt' );
define( 'LOGGED_IN_KEY',    '22u48xc(/5BYo,og/RG{>oFe%8zYYMFD{4dRo|kL1N?Lw3$`je4*N:Q07.b|*Ux:' );
define( 'NONCE_KEY',        ' en7J!/ER[/~x1f5$fL^zEbe!WsXqK)6H!sVb[tAI4TT3SA{UNzfp}xQI>{t%?tA' );
define( 'AUTH_SALT',        'D=QMR$;U*s1y:_(pUi]sUJF1B#KW=l<f`g)IllJTg9cm1OA-%d %E;sp)qbv;dSa' );
define( 'SECURE_AUTH_SALT', 'I77w_t}w<E1$nFDzxo|o<F/~RCQ1p>Rj5IlLR-M?cAF*h4;:!RtPOx( h}IgfZ%]' );
define( 'LOGGED_IN_SALT',   'hbG.s(ppy2BuJpiY%X]JL77yY(UAaW_Dm!:}s/V6-5hJq9##<UkRuIStvrK4ijBQ' );
define( 'NONCE_SALT',       '?o&=IOWbmJzehppx9w?no])J&xM}OSvo2f>>pzAh.X2;-t<8SS(eQ~JF*T4/|FY;' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
