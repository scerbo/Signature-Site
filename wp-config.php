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
define('DB_NAME', 'prometi8_wo9837');

/** MySQL database username */
define('DB_USER', 'prometi8_wo9837');

/** MySQL database password */
define('DB_PASSWORD', 'M0lXtCQYcrTO');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY', 'JypkOoV]t}^$$TxB&Ot/gkZOGPut/;ndQaxoXFmIoBR-QbB&K+HFF<YWm]L}Z?x)S}xNcJtl{ttHfCx]!{=Rkn}AZ%ML@%z}dMfUM|YWr{SAj+oi>rWRc-ZnPqM[jLV?');
define('SECURE_AUTH_KEY', 'sddLXoDQ^|uNY%XYnay{wiMT<C()J;_PP^EiAGW-[eS[FBMO_SDIEQGOHv?&xyZr;-yn!lf!*alq^=_>d]&/@%YYjU<e*}-FTYIjUtM&|ze?h&JX}FHfCsda$y{Qkxr!');
define('LOGGED_IN_KEY', 'TzH);QOLXnD_|Sn)Ti-qs$/+VISS-hZ;^?WSOMC><Zd|+$C%amRQTeA<[RjsfIvwG-ZNak}%/&ntpdAF_HVK|J[atg|-Z[N!i+?Y(KxGOgkucd-WhZ)Bb%nUUtO-hBG+');
define('NONCE_KEY', 'MRwM?OzF]xUEf[%S(BoVhVMgstJO/JvZGcIFRW>M)!Mt*uNp=+dP@p=<j<x<i??]VE<KOSLIdEYn!}%ucFzsJif|/}<]laRSze^IA;d><Ms}i|)@K;AANUudHRUei]!I');
define('AUTH_SALT', 'o}gxaOLJ@;?JpmZDD/xpkbJDubR_CetS_>+uvWn^rBIjK!@]>=W]VdJBZ&cw|=KGWIAn]pBr/]<w<]$Zf!fCbFlwQ!?Of=E+f=JyjAJFPkZq}(iIbyqO[X*|QU*^KPIs');
define('SECURE_AUTH_SALT', 'VBjK*qYAWWiwEnm%wSe@^kTw*JRtEcG^VT@^[qTsOCGvRREZ=B-(rT/SEb+rdZ&frSmLR+TAXn!<MSWJovYCnzD>(Fal!HLJqQkxDAl$RYnL[bDm$^XM}H*_}h^<YgL}');
define('LOGGED_IN_SALT', '}K-GSvbi*sT<oW<W=ognieix>?PwqxpXo!dE<tEEKIF-Yv)|*f-lkG_{i/oV?EGggOdVO$-U|bYbOLn)NGnzH[sv(?{Yu-zSDuBZDJalbBlfMzMXS|&V;ooG&FuQ>WbD');
define('NONCE_SALT', '<N[RE(ffWzLxUWdNDMVIRo;k-nrz]PQOO{Tuey?kHTOs^|y/&@D+WKR[qp)PF&<*n^T{yS!BHv(KI*kqBEe!?@a/M>Jmvd-<$$>;%v|$nN]r[ooekqyDSz*^rS)>)zl{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_dzlc_';

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

/**
 * Include tweaks requested by hosting providers.  You can safely
 * remove either the file or comment out the lines below to get
 * to a vanilla state.
 */
if (file_exists(ABSPATH . 'hosting_provider_filters.php')) {
	include('hosting_provider_filters.php');
}
