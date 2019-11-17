jQuery(document).ready(function() {
    var count = parseInt(jQuery('#kurs_plugin_count').val());

    jQuery( "#add-cytat" ).click(function() {
        count++;
        var html = "<tr valign=\"top\" id=\"option-id-" +
            count +
            "\" class=\"kurs-plugin-option-tr\">\n" +
            "<th scope=\"row\">\n" +
            "<label for=\"kurs_plugin_cytat"+
            count +
            "\">" +
            count +
            ":</label>\n" +
            "</th>\n" +
            "<td>\n" +
            "<input type=\"text\" id=\"kurs_plugin_cytat"+
            count +
            "\" name=\"kurs_plugin_cytat[]\"\n" +
            "value=\"\" />\n" +
            "</td>\n" +
            "<td>\n" +
            "<button type=\"button\" class=\"button delete-cytat\">-</button>\n" +
            "</td>"
            "</tr>";
        jQuery('.kurs-plugin-option-table').append(html);
    });
    jQuery( ".delete-cytat" ).click(function() {
        jQuery(this).parent().parent().remove();
    });
});