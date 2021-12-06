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
define('AUTH_KEY',         'g4kB+PIV5W5pvzjscE1JFtUH1HOOnEseQGy4pzB1Kc8raSNtpSAfRl4pNjyMB++yVxCUlJ1A8iODj2uAuqcYiA==');
define('SECURE_AUTH_KEY',  'vGWc4D56oimFFl1L2UlpIw9AdNdcHw2YTkqA5ckua+DHOJqm+hocbrSYa7sbLZCKzTjr2l929EzngsLDf9fJhw==');
define('LOGGED_IN_KEY',    'yyoxXbgaC1A64cV985dfuVuy+Ry31CjQmBx0IAyzkpGeIx5c9+MUi6KMDpYyuv2Sbh1LVj2isKNZ/bYIjX8w7Q==');
define('NONCE_KEY',        'bdsOPHv5/zuQnVgGlMx5rork7VqJ69h4VUDsPNsbiS8H74uUA8PZApeeIQL+bOGlO+eA5HHnkCBltnYKGHCC2A==');
define('AUTH_SALT',        'zHnBkaeNCSWqehM6KT+vowSquMhpWXvCc4+7oLnnrFuLOj8aiTP97pLdvhFMVXvKXb5w4Ga7P13YrqYR8sIFKQ==');
define('SECURE_AUTH_SALT', 'chVVXEaXNt/zDIomRE1+3BxLp74BqSuNu6RU2d5JFQF14nibNC9IE69J7Q/3KqHqJBAp3zsYpYNjtJ7UdV0gKw==');
define('LOGGED_IN_SALT',   '8FD2QLND5rDPkCTxm/GQmGJiET/0Is+bxArzDP3UB77R57ZhSHQWJabXBIgEgLHB9qgg9FRux3aHPyl5x3TCew==');
define('NONCE_SALT',       'JPdB8q7ruaU3Bgdhn2gJ0s+UHA2E5BGuUHK/JH2WGUE0XecOhgQKZBWxobRetNUu6BsjqHJkHTKA98kDoKiHMw==');

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
