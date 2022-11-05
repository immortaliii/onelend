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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'onelend' );

/** Database username */
define( 'DB_USER', 'onelend' );

/** Database password */
define( 'DB_PASSWORD', 'onelend' );

/** Database hostname */
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
define( 'AUTH_KEY',         'MHd ukNAvIL ,S,4&_6/LHv:B>v$6/pE#Eu_TV34T(C9+_95n,mAdxY@P@*k_@R9' );
define( 'SECURE_AUTH_KEY',  'IpwVLV+$MhY0yjTAibLpMe} Q9v@1@NBT1EDK:Fs5HW# hnXDp@^k<(cdlHsgZkZ' );
define( 'LOGGED_IN_KEY',    'I#$`A+ cMI=a6oedxe9Pj@pu<-*Lr]-u[7i;1J+X=_22M<Q?i>>POEJFats`]p3j' );
define( 'NONCE_KEY',        '8iy+]# 9.e^_o2%GCZ[EZQ}_TT^E6)>$s>Y!f-->b~ZR:r7}ILu[rM!r!_Eu)`o:' );
define( 'AUTH_SALT',        'VgemKuaB;rKbewHxBO-P(AIJtsC}U$[5DrJY<bzlLb;=8i;6{0{i?V.@jU`@V]:u' );
define( 'SECURE_AUTH_SALT', '_|ob5o[>,{!zZ^qC0$1ZYeC%?q:HJKH<i;phy-xix(WYD}Cp~hkS|00g/~K:,7g~' );
define( 'LOGGED_IN_SALT',   '-Pvrr)9vQd;|Um8]X)y%bfEqpp+{D%F`TS2DA2/)]h?m^GOIVEl5.CC&m;.`3|Xm' );
define( 'NONCE_SALT',       'r;YKTk>|V<>bFkoEn7x/cC{4Crd;j@/i&3|y;i/ 8GmJS8$IO,nRUi-g[%MLO;`y' );

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
