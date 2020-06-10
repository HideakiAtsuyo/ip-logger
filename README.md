# ip-logger


Basic PHP ip logger for kids who can't ip log.<br>Later this can be updated for add better things because too basics sorry i want to help you skids just wait :/<br><br>Grab IPs in a database and if the ip is already in, die with `:(`<br><br>Used: MariaDB Server, PHPMYADMIN and apache2(work also with nginx, and httpd for #centos lol :))<br>BLABLA = ip or mydomain.extension<br>DBNAME = the name choosend for the db<br><br>Go to: https://BLABLA/phpmyadmin/server_databases.php?server=1 create a database with name "iplogger" you can change this isn't a magic trick ;)<br>After go to: https://BLABLA/phpmyadmin/db_import.php?db=DBNAME "https://i.imgur.com/FeDkGCe.png" (YEAH FRENCH JUST USE THE BUTTONS!?)<br>Now set the settings in `skid/db.php`<br>
```php
<?php
date_default_timezone_set("Europe/Paris");

define('DB_HOST', 'localhost');
define('DB_NAME', 'iplogger');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'anexample');
define('ERROR_MESSAGE', 'Fuck an error you\'re not a skid for nothing. :(');

try {
	$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch( PDOException $Exception ) {
	die(ERROR_MESSAGE);
}
?>
```

Replace : `root`, `anexample` and `iplogger` if you change the db name and save...<br><br>EASY NO!?<br><br><br><br>To Do:<br>- Add a page with all the ip collected in table form<br>- Add Anti-Proxy/VPN(Simple repositories already exist for that so I'm not going to break my brain.)<br>- Add settings file
