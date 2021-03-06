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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u472444683_enugu' );

/** MySQL database username */
define( 'DB_USER', 'u472444683_unesy' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ahezeRuzup' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

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
define('AUTH_KEY',         'D%0$+~v^Mxw}f+A<@Lqox|1(ER~@25oy:EtXIR#U;3Lti [J{Gnu~a#]S-ee6.L!');
define('SECURE_AUTH_KEY',  'g{h& f5Qq&SDi`V;u1bL(+M&Nove-9.pGV*f7R#Fd|Fxf8@fzOR&CL;LbvQ}:-2E');
define('LOGGED_IN_KEY',    'xY.WGr}9/M,@D%v]dR`a-<dZ/@R*VbD)eUI$&|-+_z+`/+;nSQk%OX6TNv`|U<KB');
define('NONCE_KEY',        '}JM{?MZBH+#|I6t>D_J%xp8w>;8-s$F|.rsfcxZ/Pv]me239;[n1f6yjigc|1y8*');
define('AUTH_SALT',        '$<5@+-4 #^tdQ8#~9:_4yBznYCMy|?b}RD.WE^8ztPbQzpM%d&4Y{2!u18@$#v}|');
define('SECURE_AUTH_SALT', 'b08eZip_W*X|Ej)]]~{5?(,nvV-O?%&KiO0}D|sO0k8Tv:b^E=Bp_lbASLh1z!3U');
define('LOGGED_IN_SALT',   '/n]jP6lL#+UKI&HJO!t7^YZ6lfz5uuGTu&}>)-&`gp}K-Xx$Hr{_h B!p}XR9N3&');
define('NONCE_SALT',       '%n*}~7L:Wt6EH4L+%l]didUXt^-|[-01Vy_C9NN#KJER[J5EE^Sx15*hB oF-|+a');


/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
