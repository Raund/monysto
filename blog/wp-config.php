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
define('DB_NAME', 'icase_monysto');

/** MySQL database username */
define('DB_USER', 'icase_monysto');

/** MySQL database password */
define('DB_PASSWORD', 'lmmjpz64');

/** MySQL hostname */
define('DB_HOST', 'icase.mysql.ukraine.com.ua');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'x*m<_/UQ1x_=}6>aMw[;#90~,/1+sLd5PrcuR*L,Two>g^p4*XcXYA`|WSaupA6G');
define('SECURE_AUTH_KEY',  '}u~tyXumQ#. .DH:+|Ib*o=>G6bQL]T7NEFJ8q+9 8C.{s,e?8bS0HKBYfu9W_P,');
define('LOGGED_IN_KEY',    '`#O,SV]0f:9_5SHCF(<CIQ`QGrU+U*O2$+ D#olccHro}//[o #%*aIi=/Ra+Jvd');
define('NONCE_KEY',        'H0w<H^~fT;6c_Q<xP&ae/k#8Qb<cR=%vuk(!&(DQ6x)3xLvVGJcg@9cO3Pw0dvyG');
define('AUTH_SALT',        '`%hIDf?yBxBo46 yh6BuA}&5prdR=(x`QTc!kCbhP :nTZw<{|-sGC6.$c;=`7Vn');
define('SECURE_AUTH_SALT', '1/;CX8!^%?$z!S*/O9}%bbcH3G#yQ4[HzLfY`.T,e{VEMIFf94!KgMtJh6XFb^nL');
define('LOGGED_IN_SALT',   '1_mv%z_BlTNQ_fOb(]][P2E3l5!Wm-uooPNTEoxvG,cqOBM:U_Xp.6Ds }WS-NXs');
define('NONCE_SALT',       'T_6Q(;R}^=o)A75dMStv&0KTr9bAxx3R)hK:s(+$*;4Jt=I6m|[q:CqF3`Oqnphh');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
