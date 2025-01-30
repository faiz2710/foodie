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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_latihan_wp1' );

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
define( 'AUTH_KEY',         'xDm:Nqg;J!?uIFYiSU,%>14{Xpp=#dI7du}p$STCyd3aZe&N(ilAlwk-3kt_Sl)|' );
define( 'SECURE_AUTH_KEY',  'ZO:?NrP|lpM|mYLX~ssv)1_A|77FMYmP PlzoW4yGts0,d]>jbo9J4MeZ/?cjSV,' );
define( 'LOGGED_IN_KEY',    ':K00%6zjM(wc-4?TS*:|[{;wvm$6a`8zz]b<hqws;Eq)XiXh%aSVQ$}+htc &I+t' );
define( 'NONCE_KEY',        'o9cu}a^9oh/Cu&7?XCq?P-s>9HeH{AyD&Xn+S~`{l:g+C}{%w9Ju{xmF^zD^R0TD' );
define( 'AUTH_SALT',        'S^.S};H,{)Mm|-MjubQf3Ac0T%dK]5x7!T&27S?LZ-<YcDHxP#ZAea{6r_E7^n0V' );
define( 'SECURE_AUTH_SALT', '9.[lm6%Wx;ir>jYOr%}LNR`0C&#bjHoM;i6$$Aif;Z=$y?sy^28=2k[slbSrW3Ig' );
define( 'LOGGED_IN_SALT',   '=qwY5{%P5zmsbdJU*t{P7Lg~{7~&u*4-5m;I,IVpB2)MQj77:}*<Y)@#AMLsJlP!' );
define( 'NONCE_SALT',       'mU/#Hs]|M8|;Xc=QGH^MRc^4g7A2LNZ.Ki(%P4RyW|D:C0y3w=LY10n4vBw{>Q]-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
