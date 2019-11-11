<?php
/*
Plugin Name: Kurs plugin
Description: To jest plugin tworzony podczas kursu
Plugin URI: https://www.example.com
Author: Adam Michna
Version: 0.0.2
*/
define( 'KURS__PLUGIN_DIR', plugin_dir_path( __FILE__ ) );

require_once(KURS__PLUGIN_DIR."KursPlugin.php");
require_once(KURS__PLUGIN_DIR."KursPluginSettings.php");

$kursPlugin = new KursPlugin();

if (is_admin()){
    $settings = new KursPluginSettings();
}
