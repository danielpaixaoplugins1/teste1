<?php
/**
 * Plugin Name: WP Hatikvah Database
 * Plugin URI: http://wphobby.com
 * Description: WordPress Database Backup, Optimize & Cleanup
 * Version: 1.3
 * Author: Daniel Oliveira da Paixão
 * Author URI: https://wphobby.com/
 *
 * @package WP_Hatikvah_Database
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Exit if accessed directly
}

/**
 * Set constants
 */
define( 'WP_HATIKVAH_DATABASE_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_HATIKVAH_DATABASE_URL', plugin_dir_url( __FILE__ ) );
define( 'WP_HATIKVAH_DATABASE_VERSION', '1.3' );

/**
 * Include the main WP Hatikvah Database class.
 */
if ( ! class_exists( 'WP_Hatikvah_Database' ) ) {
    include_once dirname( __FILE__ ) . '/includes/class-wp-hatikvah-database.php';
}

/**
 * Main instance of WP Hatikvah Database.
 *
 * Returns the main instance to prevent the need to use globals.
 *
 * @return WP_Hatikvah_Database
 */
function WP_HATIKVAH_DATABASE() {
    return WP_Hatikvah_Database::instance();
}

// Global for backwards compatibility.
$GLOBALS['wp_hatikvah_database'] = WP_HATIKVAH_DATABASE();
