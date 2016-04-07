<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('WP_REDIS_HOST', 'wordpress.r6bxaf.0001.usw2.cache.amazonaws.com');


define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'wordpress');

/** MySQL hostname */
define('DB_HOST', 'wordpress.claofdqzdaqw.us-west-2.rds.amazonaws.com:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '-wW!cjwNK$88xg(tV}Kt|`uq{CP&?[Qb+H+r7KTap1L(p:M;q:,QegW9bD<`K5_3');
define('SECURE_AUTH_KEY',  'psK=vPdi i%bBo0MgG_vL!|U|x8p74Ws~7(4|Y+CTAQ+ Obp>2n =_`uP9hjx$*m');
define('LOGGED_IN_KEY',    'u$9-$Hz]Kn~Egp2kQS!1Y!-CT!oc!VfKS&f,wYl1AvU?In4$+eg+3l:$TN~2Yb%>');
define('NONCE_KEY',        '80@*NQ5jH3SIuT83mKJ5wH}~LWc1z|JU?+*`Gm;Tbi! aFu&S%ks#5i@Hd#XiFUn');
define('AUTH_SALT',        '-}jT,{GscZ>O_Wq|IB;ES X^M)`Hg1EQ/<|U,|%#*mt$l((p7VvQ:2&l$q8F.tR+');
define('SECURE_AUTH_SALT', 'aH`S0H|>#y/bz5-O7?{zcycq-rY?D$3hwGbc0}2^UjrZ +*@hz|Vh,-m=}I+(i_f');
define('LOGGED_IN_SALT',   'Z4w>/Z%PWg]Hugmm!,7 =*#;XKeHakE.0xlO%fc)K*1TKO|Mg~H>^93.@4HP|O(-');
define('NONCE_SALT',       '!S![T,w:th-VH Cs;ZgI?RKh);X-(>%o$Dy2W:41^3Q}!ac3)@TtVwve0#+4u}U[');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
        define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
