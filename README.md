# Kurs Wordpress Plugin

## Konfiguracja apache
```bash
<VirtualHost *:80>
	ServerAdmin webmaster@localhost
	ServerName <adres lokalnej strony internetowej>.local
	ServerAlias www.<adres lokalnej strony internetowej>.local
	DocumentRoot /<adres folderu gdzie znajduje się wordpress>

	ErrorLog ${APACHE_LOG_DIR}/error-wordpress-plugin.log
	CustomLog ${APACHE_LOG_DIR}/access-kurs-wordpress-plugin.log combined

	<Directory "/<adres folderu gdzie znajduje się wordpress>">
	   Order allow,deny
	   Allow from all
	   Require all granted
	</Directory>

</VirtualHost>
```