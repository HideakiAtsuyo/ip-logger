<!doctype HTML>
<head>
<title>Error !</title>
</head>

<body>
<h1><center><strong>Error of connection</strong></center></h1>
<br>
<br>
<center><h3>VPNs and Proxies are forbidden !</h3></center>
<br>
<hr/>
<br>
<center><strong>Your IP:  
<?php
echo $_SERVER["REMOTE_ADDR"];
?>
<br>

<?php
$hostname = gethostbyaddr($_SERVER['REMOTE_ADDR']);

echo "Your hostname : $hostname";
?>
<br>
Your ISP(Internet Service Provider) : Later
<!--Need to be putted lol-->
<br>
Your Country :
<?php

if (isset($_SERVER['HTTP_CLIENT_IP']))
{
    $RealIP = $_SERVER['HTTP_CLIENT_IP'];
}

if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
{
    $RealIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
}
else
{
    $RealIP = $_SERVER['REMOTE_ADDR'];
}

$cip = $RealIP;
$iptolocation = 'http://api.hostip.info/country.php?ip=$cip';
$creatorlocation = file_get_contents($iptolocation);

?>
<?php 
$file = fopen ('vpnproxies.txt', 'a+'); 
fwrite($file, $_SERVER['REMOTE_ADDR']."\r\n<br>")
//Bruh logs vpn/proxy ip xd
?>
</storng></center>
</body>