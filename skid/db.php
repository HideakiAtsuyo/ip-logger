<?php
$config = include('../config.php');
date_default_timezone_set("Europe/Paris");

define('DB_HOST', $configs->host);
define('DB_NAME', $configs->dbName);
define('DB_USERNAME', $configs->user);
define('DB_PASSWORD', $configs->pass);
define('ERROR_MESSAGE', 'Fuck an error you\'re not a skid for nothing. :(');

try {
	$odb = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USERNAME, DB_PASSWORD);
} catch( PDOException $Exception ) {
	die(ERROR_MESSAGE);
}
?>
