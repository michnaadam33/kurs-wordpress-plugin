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
        add_shortcode('kurs_ad_shortcode', [$this, 'adShortCode']);
    }

    public function theContentFilter($content){
        return $content . '<p>Dziękujemy, zapraszamy ponownie.</p>';
    }

    public function adShortCode($atts)
    {
        $a = shortcode_atts([
            'text' => 'Kliknij mnie!',
            'url' => 'https://example.com'
        ], $atts);
        return '<a href="'.$a['url'].'">'.$a['text'].'</a>';
    }
}

$kursPlugin = new KursPlugin();
