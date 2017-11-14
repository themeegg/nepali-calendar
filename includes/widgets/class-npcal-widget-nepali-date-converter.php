<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Twitter Trends Widget.
 *
 * Displays twitter trends widget.
 *
 * @author   ThemeEgg
 * @category Widgets
 * @package  NepaliCalendar/Widgets
 * @version  1.0
 * @extends  NPCAL_Widget
 */
class NPCAL_Widget_Nepali_Date_Converter extends NPCAL_Widget {

	/**
	 * Constructor.
	 */
	public function __construct() {

		$this->widget_cssclass    = 'nepali_date_converter_widget';
		$this->widget_description = __( "AD To BS Date converter widget.", 'nepali-calendar' );
		$this->widget_id          = 'nepali_date_converter_widget';
		$this->widget_name        = __( 'AD To BS Date Converter', 'nepali-calendar' );
		$this->settings           = array(
			'title' => array(
				'type'  => 'text',
				'std'   => __( 'AD To BS Date Converter', 'nepali-calendar' ),
				'label' => __( 'Title', 'nepali-calendar' ),
			),
		);

		parent::__construct();
	}

	/**
	 * Output widget.
	 *
	 * @see WP_Widget
	 *
	 * @param array $args
	 * @param array $instance
	 */
	public function widget( $args, $instance ) {

		if ( apply_filters( 'nepali_calendar_date_converter_widget_is_hidden', false ) ) {
			return;
		}

		$this->widget_start( $args, $instance );


		$data = array(

			'instance' => $instance
		);

		//npcal_get_template( 'widgets/content-widget-nepali-date-converter.php', $data );


		$this->widget_end( $args );
	}
}
