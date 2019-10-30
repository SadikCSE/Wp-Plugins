<?php
/*
Plugin Name: WP Test
Plugin URI: exonhost.com
Description: My First Plugin test by Wordpress
Version: 1.0
Author: PurpleIT
Author URI:
License:  GPLv2 or later
License URI:
Text Domain: text-plugin
Domain Path:/languages/
*/


add_action("admin_menu","addMenu");
function addMenu()
    {
       add_menu_page("Plugins Option","Plugins Option",4,"plugins-option","pluginsMenu");
       add_submenu_page("plugins-option","Option 1","Option 1",4,"plugins-option-1","option1");
    }
function pluginsMenu(){
    echo "Wellcome to Our Plugin page";
}


function option1(){
    echo "Wellcome to Our Plugin Submenu page";
}

