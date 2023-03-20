<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

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
define( 'DB_NAME', 'course-hero' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '998lr:;6-d9+~KMCa-UF&f^:dET4+7GqN)DZSGT83iH9j{s,HuqYCbF IB=Q%E6R' );
define( 'SECURE_AUTH_KEY',  'tjV!sy@JU=VvOKB&M!-6$1T5Aj|Dra`u}7Ug5coVB3koL~[-}|SZ>nDWve-n@z(R' );
define( 'LOGGED_IN_KEY',    '^T3FjP hq]pI2QaI|CmL_UsX0W]Zq|{7O!<1}wSTK(KCZyXVR|C;nL9~~Hiy|7HF' );
define( 'NONCE_KEY',        'S^v>-A5/.R:y7C&x6<vj83&f7BC!@Cm?2PL4FP%Aou*7M|T]CH3:W5 |qn{DVgp ' );
define( 'AUTH_SALT',        'Po4fTTGG^ [!{JmFrU1e:`hl=07AkTYTdsFN6{-Fo=I0ZZz4Q/.@e&[.=8M;VDui' );
define( 'SECURE_AUTH_SALT', '==!W16}]6AO1h6p81WeKVW |aCJ5^yeq0A[|lqp(tkx+MP1r1nkfwIE,_l:16KBL' );
define( 'LOGGED_IN_SALT',   'BRNR8,}2t4Ixa;5< $L_!%&(}ZNiS0b$ZO(Mh2#Gq2s%eIIz(v)U,c=@VJdFd/85' );
define( 'NONCE_SALT',       '2T$sDi!Pxp{9=&,vG5iRtvEGViH]7Xf)V{;mOs~X2jr_@d9:y P`EHVqR$!1z$.d' );

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
