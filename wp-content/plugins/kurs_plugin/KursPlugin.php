<?php


class KursPlugin {

    public function __construct()
    {
        add_filter('the_content', [$this, 'theContentFilter']);
        add_shortcode('kurs_ad_shortcode', [$this, 'adShortCode']);
    }

    public function addJsScripts()
    {
        wp_enqueue_script('kurs-script', plugins_url('/js/kurs_script.js', __FILE__),['jquery']);
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