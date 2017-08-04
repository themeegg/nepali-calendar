<?php
/**
 * Nepali Calendar Settings
 *
 * @author   ThemeEgg
 * @category Admin
 * @package  Nepali_Calendar/Admin
 * @version  1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

if (!class_exists('NC_Settings_Advance', false)) :

    /**
     * NC_Settings_Advance.
     */
    class NC_Settings_Advance extends NC_Settings_Page
    {

        /**
         * Constructor.
         */
        public function __construct()
        {


            $this->id = 'advance';

            $this->label = __('Advance', 'nepali-calendar');

            add_filter('nepali_calendar_settings_tabs_array', array($this, 'add_settings_page'), 20);
            add_action('nepali_calendar_settings_' . $this->id, array($this, 'output'));
            add_action('nepali_calendar_settings_save_' . $this->id, array($this, 'save'));
            add_action('nepali_calendar_sections_' . $this->id, array($this, 'output_sections'));
        }

        /**
         * Get sections.
         *
         * @return array
         */
        public function get_sections()
        {

            $sections = array(
                '' => __('Template Setting', 'nepali-calendar'),

                // 'other_settings' => __('Other Settings', 'nepali-calendar'),

            );

            return apply_filters('nepali_calendar_get_sections_' . $this->id, $sections);
        }

        /**
         * Output the settings.
         */
        public function output()
        {
            global $current_section;

            $settings = $this->get_settings($current_section);

            NC_Admin_Settings::output_fields($settings);
        }

        /**
         * Save settings.
         */
        public function save()
        {
            global $current_section;

            $settings = $this->get_settings($current_section);
            NC_Admin_Settings::save_fields($settings);
        }

        /**
         * Get settings array.
         *
         * @param string $current_section
         *
         * @return array
         */
        public function get_settings($current_section = '')
        {
            if ('other_settings' == $current_section) {

                $settings = apply_filters('nepali_calendar_layout_settings', array(

                    array(
                        'title' => __('Other Settings', 'nepali-calendar'),
                        'type' => 'title',
                        'desc' => '',
                        'id' => 'nc_advance_other_settings'
                    ), array(
                        'type' => 'sectionend',
                        'id' => 'nepali_calendar_layout_settings',
                    ),


                ));

            } else {
                $settings = apply_filters('nepali_calendar_general_settings', array(
                    array(
                        'title' => __('Dialog Layouts', 'nepali-calendar'),
                        'type' => 'title',
                        'id' => 'nc_advance_templates_settings'),

                    array(
                        'title' => __('Templates ', 'nepali-calendar'),
                        'desc' => __('Templates list', 'nepali-calendar'),
                        'id' => 'nc_layout_list',
                        'default' => '',
                        'type' => 'select',
                        'class' => 'teg-select',
                        'css' => 'min-width: 200px;',
                        'desc_tip' => true,
                        'options' => nc_templates(),
                    ),

                    array(
                        'type' => 'sectionend',
                        'id' => 'product_rating_options',
                    ),

                ));
            }

            return apply_filters('nepali_calendar_get_settings_' . $this->id, $settings, $current_section);
        }
    }

endif;

return new NC_Settings_Advance();
