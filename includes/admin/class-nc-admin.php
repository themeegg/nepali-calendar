<?php
/**
 * Nepali_Calendar Admin.
 *
 * @class    NC_Admin
 * @version  1.0.0
 * @package  Nepali_Calendar/Admin
 * @category Admin
 * @author   ThemeEgg
 */

if (!defined('ABSPATH')) {
    exit;
}

/**
 * NC_Admin Class
 */
class NC_Admin
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

        include_once(dirname(__FILE__) . '/nc-admin-functions.php');

        include_once(dirname(__FILE__) . '/class-nc-admin-menus.php');

        include_once(dirname(__FILE__) . '/class-nc-admin-assets.php');

        include_once(dirname(__FILE__) . '/class-nc-admin-notices.php');

    }
}

return new NC_Admin();
