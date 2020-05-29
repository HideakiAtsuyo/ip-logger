<?php
$ip = $_SERVER['REMOTE_ADDR'];
$user_agent = $_SERVER['HTTP_USER_AGENT'];
$port = $_SERVER['REMOTE_PORT'];
$date = date('d/m/Y h:i:s a', time());
$fichier = fopen('Skids.html', 'a+');
fwrite($fichier, "<p> Time: ".$date." IP: ".$ip." // User_agent: ".$user_agent." // Port: ".$port." //\n\n\n");
fclose($fichier);
?>
