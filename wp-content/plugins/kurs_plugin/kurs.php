<?php
/*
Plugin Name: Kurs plugin
Description: To jest plugin tworzony podczas kursu
Plugin URI: https://www.example.com
Author: Adam Michna
Version: 0.0.2
*/

class KursPlugin {

    public function __construct()
    {
        add_filter('the_content', [$this, 'theContentFilter']);
    }

    public function theContentFilter($content){
        return $content . '<p>Dziękujemy, zapraszamy ponownie.</p>';
    }
}

$kursPlugin = new KursPlugin();
