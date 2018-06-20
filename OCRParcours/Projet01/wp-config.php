<?php

// BEGIN iThemes Security - Ne pas modifier ou supprimer cette ligne
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Désactiver l’éditeur de fichier - Sécurité > Réglages > Modifications de WordPress > Éditeur de fichier
// END iThemes Security - Ne pas modifier ou supprimer cette ligne

define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/franceinsoumiseloire-atlantique.fr/httpdocs/siegfriedchapotin.com/ocrprojet01.siegfriedchapotin.com/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', false);// Ce paramètre a été défini par WordPress Toolkit pour empêcher les mises à jour automatiques de WordPress. Ne le modifiez pas pour éviter les conflits avec la fonction de mise à jour automatique de WordPress Toolkit.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'francein_wp_rqxn6' );

/** MySQL database username */
define( 'DB_USER', 'franc_wp_isld7' );

/** MySQL database password */
define('DB_PASSWORD', '68fK$T4Lba');

/** MySQL hostname */
define( 'DB_HOST', 'sql-10.proxgroup.fr:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'v!Bjc|4%[(x#ZVJrZ7]86P9Mb8h-7]xqi%u~_SE)z!BwJ&R-nD:my2qoiHB*3504');
define('SECURE_AUTH_KEY', 'D_2UK;6[z/~i8)7D%g&@:2)TN9U%a(J25S[Q!pi;]qM*5v%7R+ZA;v7L#VF[y~K9');
define('LOGGED_IN_KEY', 'p+@9C@]Du!@t0KG&q2[1!-82jM(X28/olhzy4;886_q:(J96uJ4L8iv;yg@SQ*KK');
define('NONCE_KEY', '5fZ#M1ysc587tcJ02Yoo8b[@L(Ucm3~T7Sl1U8!;bW3]1wi5ga40@upj*6pt_||t');
define('AUTH_SALT', 'v462G!yphviJ@10696;YT)%;:d75b25@f3/2tq8zYw#xuk6qm3d2Va;62lE#xt_E');
define('SECURE_AUTH_SALT', 'Y2z2[1)_4jK628_LlRHUTa28GwtE!77;-p8w-%xjW)*K5504_22*AT7i8:m@D1nQ');
define('LOGGED_IN_SALT', 'nPk5Z]0*8q5I%oD42YGJplNe045Kb7&g#w!|IN[c5os7+8Te:@5;)9m2%~11bd18');
define('NONCE_SALT', 'R23rfH7urC1ta7x6RdBd1i0W0@pEwfp47@;2-+6b5j2BX2*C1Q&yA2rO*oaILBt(');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jn0ZA_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
