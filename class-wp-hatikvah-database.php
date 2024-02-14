<?php
if ( ! class_exists( 'WP_Hatikvah_Database' ) ) {
    class WP_Hatikvah_Database {
        /**
         * Single instance of the class.
         *
         * @var WP_Hatikvah_Database
         */
        protected static $_instance = null;

        /**
         * Main WP Hatikvah Database Instance.
         *
         * Ensures only one instance of WP Hatikvah Database is loaded or can be loaded.
         *
         * @return WP_Hatikvah_Database - Main instance.
         */
        public static function instance() {
            if ( is_null( self::$_instance ) ) {
                self::$_instance = new self();
            }
            return self::$_instance;
        }

        /**
         * WP Hatikvah Database Constructor.
         */
        public function __construct() {
            $this->includes();
        }

        /**
         * Include required core files used in admin and on the frontend.
         */
        private function includes() {
            require_once WP_HATIKVAH_DATABASE_DIR . 'includes/modules/class-wp-hatikvah-database-backup.php';
            require_once WP_HATIKVAH_DATABASE_DIR . 'includes/modules/class-wp-hatikvah-database-optimize.php';
            require_once WP_HATIKVAH_DATABASE_DIR . 'includes/modules/class-wp-hatikvah-database-cleanup.php';
        }
    }
}
