<?php

/**
 * Plugin Name: Skeleton
 * Description: Skeleton
 * Author: Glitchsolvers Dev Team
 * Version: 1.0.0
 * Requires at least: 6.8
 * Requires PHP: 8.2
 * Text Domain: skeleton
 * Domain Path: /languages
 * License: GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 */

add_action('plugins_loaded', function () {
   add_skeleton_menu();
   error_log("plugin loaded");
}, 20);



function add_skeleton_menu()
{
   add_action('admin_menu', function () {
      add_menu_page(
         page_title: __('Skeleton', 'skeleton'),
         menu_title: __('Skeleton', 'skeleton'),
         capability: 'manage_options',
         menu_slug: 'skeleton',
         callback: function () {
            $my_var = 'Ma variable';
            echo '<div class="wrap"><h1>' . __('Hello world', 'skeleton') . '</h1></div>';
         },
         icon_url: 'dashicons-id',
         position: null,
      );
   });
}
