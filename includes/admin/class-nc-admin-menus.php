<?php
/**
 * Setup menus in WP admin.
 *
 * @author   ThemeEgg
 * @category Admin
 * @package  Nepali_Calendar/Admin
 * @version  1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

if ( ! class_exists( 'NC_Admin_Menus', false ) ) :

	/**
	 * NC_Admin_Menus Class.
	 */
	class NC_Admin_Menus {

		/**
		 * Hook in tabs.
		 */
		public function __construct() {
			// Add menus
			add_action( 'admin_menu', array( $this, 'admin_menu' ), 9 );


		}

		/**
		 * Add menu items.
		 */
		public function admin_menu() {
			global $menu;


			add_menu_page( __( 'Nepali Calendar', 'nepali-calendar' ),
				__( 'Nepali Calendar', 'nepali-calendar' ),
				'manage_options',
				'nepali-calendar',
				array( $this, 'settings_page' ), 'dashicons-calendar-alt', '55.5' );


		}


		/**
		 * Init the settings page.
		 */
		public function settings_page() {
			NC_Admin_Settings::output();
		}

	}

endif;

return new NC_Admin_Menus();
