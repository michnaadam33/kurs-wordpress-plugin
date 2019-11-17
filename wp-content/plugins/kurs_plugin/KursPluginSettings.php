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
        register_setting( 'kurs_plugin_group', 'kurs_plugin_cytat');
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
                <?php
                settings_fields( 'kurs_plugin_group' );
                $optionsCytat = get_option('kurs_plugin_cytat');
                ?>
                <table class="kurs-plugin-option-table">
                    <?php foreach ($optionsCytat as $key => $option): ?>
                    <tr valign="top" id="option-id-<?=$key?>" class="kurs-plugin-option-tr">
                        <th scope="row">
                            <label for="kurs_plugin_cytat<?= $key ?>"><?=$key?>:</label>
                        </th>
                        <td>
                            <input type="text" id="kurs_plugin_cytat<?= $key ?>" name="kurs_plugin_cytat[<?=$key?>]"
                                   value="<?= get_option('kurs_plugin_cytat')[$key]; ?>" />
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>
        <?php
    }
}