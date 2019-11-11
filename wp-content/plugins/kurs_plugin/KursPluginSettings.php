<?php


class KursPluginSettings
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'addAdminPage']);
    }

    public function addAdminPage()
    {
        add_options_page(
            'Kurs plugin',
            'Kurs plugin',
            'manage_options',
            'kurs-pugin',
            [$this, 'pageRender']
        );
    }

    public function pageRender()
    {
        echo "TODO";
    }
}