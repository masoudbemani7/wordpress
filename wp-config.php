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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'word1');

/** MySQL database password */
define('DB_PASSWORD', 'word1');

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
define('AUTH_KEY',         'eOfdbjNF%>3Pw{azApo1#d2*{;Z<Gz0@n.9Nejw_](k6%fCk@k/GxK~r4/XhN|+<');
define('SECURE_AUTH_KEY',  '`2i63i&TZdaW8l<)HhYy!F[F(cf|85s>.UKx~tzU#/8aB6kR-YWGfG-u>n-xERYS');
define('LOGGED_IN_KEY',    '=gg{Zy.S9<1cZ4[x#y yv#Fy@8J*H~@/tfTjqyFBnb[^eY+x,_?^kvRVZ.+rU;wE');
define('NONCE_KEY',        '4X>2GZ1&412Sk`ZLTh9mP*=YFgC()EzAy8M5eOWMpGx$BGl]udtL5p&D;Z#:QW;c');
define('AUTH_SALT',        'L1+)]wFSpn(J0JYg72e?jdf|ys%=(TZev+LW-KuOd?/<B^7Mfvb3liJQx4q}$DBO');
define('SECURE_AUTH_SALT', '^pXXTU-#8 Y 6@wi>9x=$`=_nVfVHFS378 WYY}4rOh>49PY;gpvC]<M}.oBq<[B');
define('LOGGED_IN_SALT',   'hX_K&JOg3@+Xa3ownZ]z!nB:m1#fif)gSoz&uG^POTWKWS/01xkw)-uA@V*_9rue');
define('NONCE_SALT',       'G^~TKm%I|b{|:_7sHBWFk?q& ?4nk?FA;c$wNW?>rxkqT]8v1$Em#&tBQ1+<RGhI');

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
