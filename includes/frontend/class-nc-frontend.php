<?php
/**
 * Nepali_Calendar Frontend.
 *
 * @class    NC_Admin
 * @version  1.0.0
 * @package  Nepali_Calendar/Frontend
 * @category Admin
 * @author   ThemeEgg
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * NC_Admin Class
 */
class NC_Frontend
{

    /**
     * Hook in tabs.
     */
    public function __construct()
    {


        add_action('init', array($this, 'includes'));
    }

    /**
     * Includes any classes we need within admin.
     */
    public function includes()
    {

        include_once(NC_ABSPATH . 'includes' . NC_DS . 'frontend' . NC_DS . 'class-nc-frontend-scripts.php');

       
    }
}

return new NC_Frontend();
