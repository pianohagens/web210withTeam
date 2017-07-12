<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'phagens_com_8');

/** MySQL database username */
define('DB_USER', 'itc260_name');

/** MySQL database password */
define('DB_PASSWORD', '468311GGbb..');

/** MySQL hostname */
define('DB_HOST', 'mysql.phagens.com');

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
define('AUTH_KEY',         'W&AZZA!;3:11wgJP4:kTziW|#z1iE~`~n5zE@$5v7JjBOeHQpF~uCG?|S_Yy+/)O');
define('SECURE_AUTH_KEY',  'mfL"0HnuVn7&+bK||avy3_`+Lf(FwFG"wd"+$)RlWek3!uu2@W#:c28o)C84T%I:');
define('LOGGED_IN_KEY',    'JonY$*c/CP8s?+Pf#f(82vH?ESk$3ZGc#4OY&M&?aUv5r2R5@5IbDrc+p/%E!_Cw');
define('NONCE_KEY',        ')X~2;CLmVIAowppN"STp@/#e;(puuA_9|`:~m)LDfcCf"HE4D2`iwv2#M9G;@g(W');
define('AUTH_SALT',        '|KhE#!HX(k?3h9u@R*so8dW^~#:58k4:YVc(4/A%zJ~;93|NGjQ*Q!a9ll&kCvVW');
define('SECURE_AUTH_SALT', 'rv"OO6KikFBeW:^?fWapc$VSbk*iT7gE/3lwXbZdsEY7JX$%FpCNBH?KzLs#TOrO');
define('LOGGED_IN_SALT',   'pjA7~m$zEL~J3%|~bI6wT7nX/ppnvDy(|2bn%95#3aQC8#Kv@&K8f_Jo3$5Ba7M+');
define('NONCE_SALT',       '|4NDBiZ@o:9GxBA4"y%~ed190ffNISu~4i*bxZut0ryVG?n_cPVUQhL$8Bg/"1oE');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_rnggrz_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

