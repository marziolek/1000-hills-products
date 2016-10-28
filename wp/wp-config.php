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

if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {

  /**
	 * Settings for local environment loaded if available from wp-config-local.php
	 */

  include dirname( __FILE__ ) . '/wp-config-local.php';
} else {

  /**
	 * Settings for non-local environments, used when wp-config-local.php not available
	 */

  // ** MySQL settings - You can get this info from your web host ** //
  /** The name of the database for WordPress */
  define('DB_NAME', 'hills_wp1000');

  /** MySQL database username */
  define('DB_USER', 'hills_wp1000');

  /** MySQL database password */
  define('DB_PASSWORD', 'CoffeeandTea2016!');

  /** MySQL hostname */
  define('DB_HOST', '1000hillsproductscom.ipagemysql.com');


  /**
	 * WordPress Database Table prefix.
	 *
	 * You can have multiple installations in one database if you give each
	 * a unique prefix. Only numbers, letters, and underscores please!
	 */
  $table_prefix = '1000_hills_products_';

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
  define( 'WP_DEBUG', false );

  /** The Database Collate type. Don't change this if in doubt. */
  define( 'DB_COLLATE', '' );

}

/**
 * Configuration for all available environments
 */

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
/*define('AUTH_KEY',         '72EvzXR4O+fgzBdbamIkteno6N8HtLhy/rHS1VYe');
define('SECURE_AUTH_KEY',  '2/y6UfmSNTcquTlt3qb72iu+QrqtxeJhGv8zP3jm');
define('LOGGED_IN_KEY',    'nYXih1gcxrJyN+uQoxUnieJYOSslF7Y4bZmkI2Vo');
define('NONCE_KEY',        'dxmN5lcmCdFfww4mw4n6jQmxPuVavB1rT17E3rCd');
define('AUTH_SALT',        'r9/Rgt/MXMVPmhwRGLnbrBp6ICi1pVRLPwEu4AkD');
define('SECURE_AUTH_SALT', '6R8hBEYMUb+nL/XweDzn8JoWG/xsIBwu5y3BJBf+');
define('LOGGED_IN_SALT',   'X9vhBfPrEUXf0XYBBNF4HPWjhvOFEZ+I87NNUl+S');
define('NONCE_SALT',       'dzTVNCSq+ex50MBzHwvEdj02qHBI5QnIj05QpE6G');*/
define('AUTH_KEY', 'B;jSmJ;k_YzoP?vV|Kt<|YHAZ@R}Kv&=bDlKF?iRy)wNqPCu<ljHM^V!ZcNSZfBRZi/]Zlf@r?o@]XXOgSwtPh=<Xzq*qVUb*COobDZOhnOQIHSStGSb?XCpb[_T/m_n');
define('SECURE_AUTH_KEY', 'A((ZUchbt**xno)e)P>CfNec-Er<bCiai<U/yWkTWp/uffzDtxp!)X]<TA+}yoIL[})[*Zj=-!j]rO?Q*h+[NwhuQx>igu-BfX{P<mPH&$+ZR<AVK*^(T{(zjpx=m%qz');
define('LOGGED_IN_KEY', 'E=bAN(y*c{?*Mb|VNsYc+kQixl$dl(VgYp-CQhpcO/{iFxM%bU>M<J&Zg{hj(h<wD*}p[ajQ;vxWkCu(d<cAl|/M)^&^bFE=nTY)>[TusgB/N{wLXph(KER_=o*j@b)>');
define('NONCE_KEY', 'fJBlzjquoYMr}NS$%bQrAJE)=A-E)(fH^G+Qme[r_t@VHZ@?@|of|zSwJ}DUr|Kb|_PJS+(w{]/%?WM?ckci(qc-KZ[Zem|$W%j]S?|DZjs-q&CxP/OMX%lXHa^+=tBE');
define('AUTH_SALT', '_b_OUbF$mt/_VWA(H}-u[X;yTEoGVydhg-QRPR<KqD/uFhyeGLOhOz>hnOxe;EI&?>lf?a{xA{fQyN@eGIvcw]$osjnXJP(lWavYIU;daO_FJdDhCfTODB&uzLN[/XM>');
define('SECURE_AUTH_SALT', '/*Hb)h?W(gP$|N>SyvCzxeeElSMb>kJ<UO[rEQ(gzQPgn|O)as{iZcLsBMY)h;P{TgOWiDOodpEy[T_$SSJpEFGV=uUOzoE_<xM;}gmO|HY**GU|-kq$nb!el^<dbnsr');
define('LOGGED_IN_SALT', 'n]AV)[^mGWmWpCc_KOP]OyS-(oYJckE$l_Whvh/v!Szq]f&kV%;LS%V|cyv-Ml_XjZfbrLj*Qt|l<-YNtY([kFPxAyVR|cu;w-y}%}/MX>E@EnDJDJxxIUB+Zyqk{l;B');
define('NONCE_SALT', 'R>lk<?^&zAQ!s&]_=]]A>k[Ss|AR>%UZ!jl**jVJUADlf%$E$BFLI$zK&T(H(ChCNFsB&kJq!Ic$?=%{PH/_JCa&naZRj<aam^_xCTVW^|ew%ciL-R|*P+uJ>EeK*}Wa');


/**#@-*/

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
  define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
