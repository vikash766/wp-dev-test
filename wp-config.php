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
define('DB_NAME', 'wpfr');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

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
define('AUTH_KEY',         'D_Uqo*Ey:%z1GZ91ie2vL2o[&D;24GaJ(4{9cH<_j<X1}oxLsDS>/u%gI#X_&$m9');
define('SECURE_AUTH_KEY',  'nGs5FEm9A~kr^Z2[LL#UL@&J;-+uq;rjN[^(fC10*<Uq8t8vjlM)%oPNZ64_)572');
define('LOGGED_IN_KEY',    'psCrfc~von^Tn]Ih.o8Er_vO<Xfj?~=R5LS>TtDe<%};zt%bh|!ByqrTzsF+lhI ');
define('NONCE_KEY',        'UHP;D@3S[N/o&4[CL)@d.EQ*-)TCEk3_:p6:IC<C2<D^a-+Id<oIsZOo:)=j%Mr7');
define('AUTH_SALT',        ':;>yx4}}i[R{XRjFCJ;nG<r>FV,0`[yM%iMk.5)w6oBu8-g8ED73N97Rr%:>+@$p');
define('SECURE_AUTH_SALT', 'zULX<Kfk:+>$kK@V|`lo~UH{A:~(yIu^pNQ1Ocb}wxd>Dp)y+#~ah:94#$]>}y^y');
define('LOGGED_IN_SALT',   'vn5a6 Y? Y|1P{/8<btJ&acvykB~kFY8XFZII]!UW3vxvysMM>:28CtH8U]1o&:f');
define('NONCE_SALT',       'uWrD_C~KE&a(A;VSSZV)zs]l&dH,uLm_U`:|INIJ[lE`Q9T_,pc64vA]w#mEzb3R');

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
