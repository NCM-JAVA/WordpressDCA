<?php
/*
Plugin Name: Minister Info
Description: Plugin to manage and display minister information.
Version: 1.0
Author: Your Name
*/

defined('ABSPATH') or die('No script kiddies please!');

// Activation: Create table
register_activation_hook(__FILE__, function () {
    require_once plugin_dir_path(__FILE__) . 'includes/create-table.php';
    create_ministerinfo_table();
});

// Admin menu
add_action('admin_menu', function () {
    add_menu_page('Minister Info Form', 'Add Minister Info', 'manage_options', 'minister-info-form', function () {
        include plugin_dir_path(__FILE__) . 'admin/form.php';
    });

    add_submenu_page('minister-info-form', 'Manage Minister Info', 'Manage Entries', 'manage_options', 'manage-ministerinfo', function () {
        include plugin_dir_path(__FILE__) . 'admin/view-list.php';
    });
});

// Handle form actions
include_once plugin_dir_path(__FILE__) . 'includes/handle-form.php';

// Register shortcode for public display
include_once plugin_dir_path(__FILE__) . 'shortcode/display-table.php';

include plugin_dir_path(__FILE__) . 'public/ministerinfo-shortcode.php';
