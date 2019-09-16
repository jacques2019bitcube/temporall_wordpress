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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'ODtig5NjA7qNJLmEXR7os9AAqrUmVkdt51nsgcAkkq/P335EjslmEswpjmjSIbXSrIWmaegWWk7656JJ2YerbQ==');
define('SECURE_AUTH_KEY',  'GvDg77zo2oABiXovN6qoImYo1+6Zdyq74Rc8MQhCG1jp9x5qS68ZxKbIj0XyZRrGi1H5NxuZwtTA+dObxnUOkA==');
define('LOGGED_IN_KEY',    'MLoV7Zett3cQxSvOdBDC8ozhuOU4WiWPExuYkRbRviFonIbFuy9eOuOcNOxFE+YLAHNhRaxeLvUIKeWOpgdZPA==');
define('NONCE_KEY',        'oec1/zdj/n/wkRVoHLn60sQsbygHxR9F2Blpvl5wr5Swn6BDi5hicI2J9NKYKDc2HupDaKiqHuADLmlHJgVimQ==');
define('AUTH_SALT',        'DkARcSLRpWv73tUmkoySnLE8nZBKYuBoDnBmn/Z04kyEoGjmXMzaFQl+gQlH3hiXm5rm25Pj6KyiPauNfzymsA==');
define('SECURE_AUTH_SALT', '/qesuLU7d+7RJUI5bXc4MZcvvNp1h/JdWRQi+YOt1W8gL9N91HUFcMhKLUbG+KkWpVXZLemYzhgMdyBunAqHTg==');
define('LOGGED_IN_SALT',   'Ax3Od3jQje2em61LKIX17oUO0h+cP11btvsK/qL/4HO3lGUn5+6+wJrBebz+9+QEqx9Sh/ivU7xMn45bgqDSpw==');
define('NONCE_SALT',       'RKlSmLB55FhP3yIuMMtANhWjlD3EBgpUcPalcYovUPVavrUF6T6hDMVjzaQ4J2r5s3dItvMiQdmYExQJ9A+gJA==');

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
