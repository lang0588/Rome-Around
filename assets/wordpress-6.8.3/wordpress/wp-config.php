<?php
/**
 * The base configuration for WordPress
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rome-around' );

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
define('AUTH_KEY',         'E3-yh|+Y/&G-Kd+wt^+JA9K~m+PQq}Ew-:IrH&L5Y|FEF1-]@Dq6|oNt4k7Ug8.');
define('SECURE_AUTH_KEY',  'ny~ub%x],jD|}V!Q:gXLta6Z}H2b{YKW+Ww[jMD|q#n-*Pe5T0|fF{4;qIs}QqS~');
define('LOGGED_IN_KEY',    'TsS`@0&Y+5p[M6-Qse^Nl0(,j:_~qr=nlM&8*L|h`zYV.jd`9>:K5m!RwZx{4#Et');
define('NONCE_KEY',        'v#FkG9j]m~qa_,4>s@L6|P2X+8iNbW}U:eYH5^tK3$cM-*xB&D.7nVyIhQozTwEl');
define('AUTH_SALT',        '1BmN3vC@x#K8jF&h5nR*qP9$sW4tY7zL+cE6^aU2|M_.kG-QwD}IyHuXoZbT!Vl,');
define('SECURE_AUTH_SALT', 'Qw#ErT5$yU7*iO9(pA2@sD4}fG6!hJ8_kL0^mN1|xB.vC-zM+cX3&nY5bH,IuW~q');
define('LOGGED_IN_SALT',   'aS3$dF5*gH8(jK0!mN6^pR2@tU4#wX7_yB.vE9+cL1|iO-zQ&xM,nW5bC}hI~kY)');
define('NONCE_SALT',       'K8*mN4#pR6^tU2@wX9$yB1!cE5(hJ7_iL3&vO0|aS-zQ+dF,nW~bG}xM.kY)uH~q');

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
    define( 'ABSPATH', dirname(__FILE__) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';