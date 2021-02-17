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
define( 'DB_NAME', 'Deiner' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Wp4ndMpoIHjlbmN0' );

/** MySQL hostname */
define( 'DB_HOST', 'devkinsta_db' );

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
define( 'AUTH_KEY',          '%{^oju%,@txV 2JWf+X$M9u_RF!r-rt_&P=0XFB9H]&TiJ-.`YHKIH(y=3SD_7&I' );
define( 'SECURE_AUTH_KEY',   'DPBuM_6{``}M!Dv*]7%56BS:Mn-/Y+Z3a@=GD|&l_`n{V&!9D^!c=7^N%F5-Yk>!' );
define( 'LOGGED_IN_KEY',     '543rz:kfzy]_$5D3H8?0{L(s1blCv[+$goV<lKivR&JfO}qm%E;%xt%oXSxR|V!N' );
define( 'NONCE_KEY',         '@U:dGYYJtUB[8[Zbziv&0&GvMp3+-$&^^5m-Y*?}hwHC}f@G3K*ls$VTF<f*t05M' );
define( 'AUTH_SALT',         'QBE7G#PSm[!f[W6 J>$ONl&~$;q$t}%gk<>~YSbGR18vHr(?q)CVnwooX}WGU3KW' );
define( 'SECURE_AUTH_SALT',  'x<aA_oW6mjDgwf25NBc[7U`Km!CKql]u,]FRyMI^?`=pV.,_0iq$@2XAf)$/SsBS' );
define( 'LOGGED_IN_SALT',    'OfQFWF[?>9JM08`_]7q0Cf%]en=4_`V@#@Z9MEvO/EKcILsb<~tPCs]&l5tek&)W' );
define( 'NONCE_SALT',        'B*cA7.hco;aZs&]6iv9Zsy-Bb_LGzZCsJTLII VLE<M3unzfA9?Kg$nHow$2j5AT' );
define( 'WP_CACHE_KEY_SALT', 'kd+gC,=(4Wau=cjBQR+9B_}A12:_2:_:N^)&9uus>A69/5AV(tEF6)#`a<4KQmi4' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'WP_DEBUG', 'true' );
define( 'WP_DEBUG_LOG', 'true' );
define( 'WP_DEBUG_DISPLAY', 'true' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
