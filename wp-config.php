<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'seo' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Tushitha2514' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '2Lk}JCRGU.y#FXQr_A/+;j>RFLE^cZ>D;|Ir]xqlHn89>KQ=t.u)Ia.$i@bJ. !B' );
define( 'SECURE_AUTH_KEY',  'b[~z$~0]NLfxd>ZK!]5HA&[6Q%?Z7cn4,kyQei/Hsd6Ui#}Y<s%:n=70|@HA==Ka' );
define( 'LOGGED_IN_KEY',    '%`Vr=4z~G@vS,]9=77B.#9rs`Y,+Fx0s8+Lf1NM/Q9!Tx=ue$m(}*<Kew(LR+F!#' );
define( 'NONCE_KEY',        'xc5ovO>Yz0MoY ]?@;z^Od.T|CF!DEI~e8O_FIqDq7&f:qiy88F|x7mTi$^9:xjK' );
define( 'AUTH_SALT',        '*<i#%!g{e *p^3.3+;%a.>VjWVP#tywMse#i^xG2nP;8fhe^e}i,<p1!%%1`-kj=' );
define( 'SECURE_AUTH_SALT', ',5{IPxX&<@/v~`Vrf00g]%/`bjAtA#[gp{rxwT82%pNB$v-j!J![%m7O-QYecIq|' );
define( 'LOGGED_IN_SALT',   '+XqaM+,w}TJFDv4^i!P%sr,oDnvZz9EodT2s@i>7j+T)^N7tvwPnfkAHpHczD9<!' );
define( 'NONCE_SALT',       '=`x? tXtd``2F|0uAb_*g+`/[9hQBrE|%DJatr54WgZn^ZgQgUJIvH~fz|NnezhT' );

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

define('FS_METHOD', 'direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
