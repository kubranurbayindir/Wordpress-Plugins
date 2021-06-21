<?php
/**
 * Plugin Name: Site Ayarları
 * Plugin URI: http://kubra.com/
 * Description: Site Ayarları: SEO, İletişim Ayarları, Sosyal Medya Ayarları
 * Version: 0.1
 * Text Domain: site-ayarlari
 * Author: Kübra Nur Bayındır
 * Author URI: http://kubra.com/
 */
 
 
add_action("admin_menu", "sitesettings");
function sitesettings()
{
  add_menu_page("Site Settings Title", "Site Ayarları", "manage_options", "plugin-kubra/seo-ayarlar.php", "");
}


add_action("admin_init", "plugin_settings_seo");

function plugin_settings_seo(){
    register_setting('seo_adding', 'site_title');
    register_setting('seo_adding', 'site_description');
    register_setting('seo_adding', 'site_keywords'); 
}

add_action("admin_init", "plugin_settings_media");
function plugin_settings_media(){ 
    register_setting('media_adding', 'site_instagram');
    register_setting('media_adding', 'site_twitter');
    register_setting('media_adding', 'site_facebook');
    register_setting('media_adding', 'site_youtube');
    register_setting('media_adding', 'site_linkedin');
}

add_action("admin_init", "plugin_settings_phone");
function plugin_settings_phone(){ 
    register_setting('contact_adding', 'site_phone');
    register_setting('contact_adding', 'site_gsm');
    register_setting('contact_adding', 'site_fax');
    register_setting('contact_adding', 'site_mail');
    register_setting('contact_adding', 'site_address');
    
}



