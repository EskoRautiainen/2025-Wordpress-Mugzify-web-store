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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_amk1005131' );

/** MySQL database username */
define( 'DB_USER', 'amk1005131' );

/** MySQL database password */
define( 'DB_PASSWORD', 'pDYaUsxN' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          '}O,3LW4|D:}zcX_lD}.3DQ9KaMyHr#bId`ucJg(x^]C1#!!f@$~`]Jk= Y}Olg$8' );
define( 'SECURE_AUTH_KEY',   'yK,ag6;m |B$),Vcl~(R3ouSwMN[?CNj}}Y*9QEt*&G:Q|g2Z}L; {f?p+vpKjH>' );
define( 'LOGGED_IN_KEY',     'j(G00U|OS/XZH8gf3wi%sNFn,=BOw_N%*W3=JG]#VQ8=/M=OJ$>^cXqy9Zz}K-Ze' );
define( 'NONCE_KEY',         '!%mYLX`+Rn]JSZZ6zP FnS&/2n(vqeieU!k!bEWU ?=G5RBON[x%6J.)+TvvSnN?' );
define( 'AUTH_SALT',         '_6:z#WFG`cVT!ewR[4Us-FIPh[N?wac5=L$Z+NTWRY#hGl/sCtb.Qc3ofT=:z!k)' );
define( 'SECURE_AUTH_SALT',  't}@G:Na-#7r,*oR)4mdThOet^~fnenl=T$Z3AV}dl:2:>E#`<VaIPhhHJwYZ:{[F' );
define( 'LOGGED_IN_SALT',    '5OuO;Ra2d|YeonJ}8e>)~Zg xN:<r9fRTwnsy4~JPH9-NoxJHX!$g/N#*-Mu9(tY' );
define( 'NONCE_SALT',        '1$Wjom;z)5RmR7x(oqvTIH5lVD%NLwAxgX.-Zlt:@`nqNY&8)d~hog|<&E Wm7-*' );
define( 'WP_CACHE_KEY_SALT', 'h<2Zn_*fsh/&4S/x@?=MMvDdd/z1DMqOIy]RjgVO.GqG8O.0}yZ^:qA1?JO{{>Bp' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
