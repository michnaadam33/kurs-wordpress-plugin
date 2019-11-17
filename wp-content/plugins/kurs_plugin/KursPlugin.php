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

    public function addCssStyl()
    {
        wp_enqueue_style('kurs-style', plugins_url('/css/kurs_style.css', __FILE__), [], '1.0');
    }

    public function theContentFilter($content){
        return $content . $this->cytatHtml();
    }

    public function adShortCode($atts)
    {
        return $this->cytatHtml();
    }

    private function cytatHtml()
    {
        $options = get_option('kurs_plugin_cytat');
        $sentenceNumber = rand(1, count($options));
        $sentence = $options[$sentenceNumber];


        $html = '<div class="content kurs_plugin_cytat_content">
							<h3>'.$sentence.'</h3>
				</div>';

        return $html;
    }
}