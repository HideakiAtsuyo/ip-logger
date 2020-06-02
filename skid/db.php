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