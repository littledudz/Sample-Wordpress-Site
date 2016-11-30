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
define('DB_NAME', 'startwordpress');

/** MySQL database username */
define('DB_USER', 'dudley');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'aq?pv]1,w V=>K{IaNoo6gxbIU5[RiO Dynk7XdY;ektb~f0U2hq24C.Y8vZkcVP');
define('SECURE_AUTH_KEY',  'aCfG>f*yJd| [7=iuE3pk2A0_pf,B5|qp/M%eOv&Q0kgfwgQ`-BkB^^V~2dh]:ZL');
define('LOGGED_IN_KEY',    '^`^tJF%tJ]utT?4Qu,H(yzv 88UyC}<;d3H*3E9i2{7>GG0ABN)3|&{vr&P{p}Sj');
define('NONCE_KEY',        'V*cpl4foHkS_:p5_hzth`$~d5O6K`<U::thCTjE!&<y[ ([(io8m}4U#M*(bA/,K');
define('AUTH_SALT',        'eJ*5igPW@)6>MAvz{*IV@]8yY`&]-UwfldK!}|@}3!sNJpfTIDc#8*)!$QP`5r%^');
define('SECURE_AUTH_SALT', 'P40lxh]xO]5d-O}nnl)r!y)*F 4Bme<>A4yQ;Jh59H[+`7uQ];rPb#hm]o+SDXwq');
define('LOGGED_IN_SALT',   'zz0@im3$BrdHO/<V}b{Z%LS*`D=M_Ie*<=%=uxqb^lu1iO3k:QGFRf X$p)Y*=]l');
define('NONCE_SALT',       'cu(Gwy99Qj8UGDXKqzBg;nq,>xQjTHwjOf0[bv4,eS1{h>M)X<jYS+Qdizv=HNG<');

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
