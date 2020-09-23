<?php 
    /**
        *Plugin Name: Disable Admin Bar
        *Description: Toggle the admin bar on and off with ease!

    **/

    add_action('after_setup_theme', 'remove_admin_bar');
 
    function remove_admin_bar() {
    if (!current_user_can('administrator') && !is_admin()) {
      show_admin_bar(false);
    }
    }

?>