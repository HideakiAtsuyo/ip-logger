<?php 

ob_start();
require_once 'skid/db.php';

$user_agent = $_SERVER['HTTP_USER_AGENT'];
$timer = date('d/m/Y h:i:s a', time());

$cloudflare = true;

if($cloudflare == true){
	$ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
} else if($cloudflare == false){
	$ip = $_SERVER['REMOTE_ADDR'];
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
