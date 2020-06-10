<?php 
require_once 'skid/db.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="utf-8">
  <title>List of kids ;)</title>
</head>
<body style="background-color:#000000;">

<!-- 00ff1c = H4X0R COLOR :P -->
<?php
$SQLGetUsers = $odb->query("SELECT * FROM `ips`");
while ($getInfo = $SQLGetUsers->fetch(PDO::FETCH_ASSOC)) {
    $ip       = $getInfo['ip'];
    $ua     = $getInfo['UA'];
    $time    = $getInfo['Time'];
    echo '<p style="color: #00ff1c; text-align: center"><tr>
    <td></td>
    <td>' . $ip . '</td>
    <td>' . $ua . '</td>
    <td>' . $time . '</td>
    </tr></p>';
}
?> 
</body>
</html>
