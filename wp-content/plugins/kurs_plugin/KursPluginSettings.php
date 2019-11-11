<?php


class KursPluginSettings
{
    public function __construct()
    {
        add_action('admin_menu', [$this, 'addAdminPage']);
        add_action('admin_init', [$this, 'registerOption']);
    }

    public function registerOption()
    {
        add_option( 'kurs_plugin_cytat');
        add_option( 'kurs_plugin_cytat2');
        register_setting( 'kurs_plugin_group', 'kurs_plugin_cytat');
        register_setting( 'kurs_plugin_group', 'kurs_plugin_cytat2');
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
       ?>
        <div class="wrap">
            <h2>Opcje konfiguracyjne</h2>
            <form method="post" action="options.php">
                <?php settings_fields( 'kurs_plugin_group' ); ?>
                <table>
                    <tr valign="top">
                        <th scope="row">
                            <label for="kurs_plugin_cytat">Cytat:</label>
                        </th>
                        <td>
                            <input type="text" id="kurs_plugin_cytat" name="kurs_plugin_cytat"
                                   value="<?= get_option('kurs_plugin_cytat'); ?>" />
                        </td>
                        <th scope="row">
                            <label for="kurs_plugin_cytat2">Cytat2:</label>
                        </th>
                        <td>
                            <input type="text" id="kurs_plugin_cytat2" name="kurs_plugin_cytat2"
                                   value="<?= get_option('kurs_plugin_cytat2'); ?>" />
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}