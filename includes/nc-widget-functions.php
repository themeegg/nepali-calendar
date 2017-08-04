<?php
/**
 * nepali calendar widget function
 *
 * Widget related functions and widget registration.
 *
 * @author        ThemeEgg
 * @category    Core
 * @package    NepaliCalendar/Functions
 * @version     1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

// Include widget classes.
include_once( dirname( __FILE__ ) . '/abstracts/abstract-nc-widget.php' );
include_once( dirname( __FILE__ ) . '/widgets/class-nc-widget-nepali-calendar.php' );


/**
 * Register Widgets.
 *
 * @since 1.0.0
 */
function nc_register_widgets() {

	register_widget( 'NC_Widget_Nepali_Calendar' );

}

add_action( 'widgets_init', 'nc_register_widgets' );
