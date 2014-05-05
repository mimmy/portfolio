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
define('DB_NAME', 'ivanshul_mi6ofka');

/** MySQL database username */
define('DB_USER', 'ivanshul_mi6ofka');

/** MySQL database password */
define('DB_PASSWORD', 'obi4amka6a');

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
define('AUTH_KEY',         'NM)P9*G@K)D1u!x*%dbmC?3@zGTmA]I(CY6iAd>crHcT}dLi!=QdIG&A7G=F BY(');
define('SECURE_AUTH_KEY',  '7oWnBR/QBc1na]2hr^k+-2l#VZtWIm|9_rff %;HDz?<$3Av9+xqi/]}HvPK$s#z');
define('LOGGED_IN_KEY',    'BLs;qQC$@nOdG4=AO[PLkVA!wKs(QVkNTo#K1>~6+S:7F5+[-%QXq]3V|8/w:fzq');
define('NONCE_KEY',        'G*FMNc6+GyBt}-*DHeJ;zm;<PWF ,uht-RRWt>NM,|b _T)<F^hR#M(Bv;.[xHMo');
define('AUTH_SALT',        '>aV:8|)qWJeo5$A&%dm*y{%C+3SY{-wS;>_Oordwgb.lVF#.ryZlc|;_^mf#PBg6');
define('SECURE_AUTH_SALT', '7FR-D6Rk/W|75}|;4yK<3qs#02HC^K|GS}]GtQ&7MCe!NZMwB;Y=9>9Ix}+B;=dL');
define('LOGGED_IN_SALT',   '4rFt}1-)%*ryyxRM(*Q=^ia$aZ,1._6D9vh;^=!(|di7KoiY&_0J$S}>wOPb-w1r');
define('NONCE_SALT',       'h[U.FJ4X0k$cf(Q9m|AWs{m.-2zxsAOS1#dQTWKIq0Aouq0vhawiA=>&)F_1>3Q_');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
