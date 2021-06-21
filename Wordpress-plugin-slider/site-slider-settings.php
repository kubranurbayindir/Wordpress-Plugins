<?php
/**
 * Plugin Name: Site Slider Ayarları
 * Plugin URI: http://kubra.sitebilisim.com/
 * Description: Site Slider Fotoğtaflarının Belirlenmesi.
 * Version: 0.2
 * Text Domain: site-slider
 * Author: Kübra Nur Bayındır
 * Author URI: http://kubra.sitebilisim.com/
 */

add_action("admin_menu", "sitesliders");
function sitesliders()
{
  add_menu_page("Site Slider Ayarları", "Site Slider", "manage_options", "plugin-kubra-slider/slider.php", "");
}

add_action("admin_init", "plugin_settings_slider");

function plugin_settings_slider(){
    register_setting('slider_adding', 'site_slider_title');
    register_setting('slider_adding', 'site_slider_des');
    register_setting('slider_adding', 'site_btn');
    register_setting('slider_adding', 'site_link');
}
