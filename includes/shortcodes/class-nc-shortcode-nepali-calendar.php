<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * NC Shortcodes
 *
 * Used to nepali calendar
 *
 * @author       ThemeEgg
 * @category    Shortcodes
 * @package     Nepali_Calendar/Shortcodes
 * @version     1.0.0
 */
class NC_Shortcode_Nepali_Calendar implements NC_Shortcode_Interface {


	/**
	 * Output the cart shortcode.
	 *
	 * @param array $atts
	 */
	public static function output( $atts = array() ) {
//		if ( empty( $atts ) ) {
//			return '';
//		}

		nc_get_template( 'shortcodes/content-shortcode-nepali-calendar.php' );


	}
}
