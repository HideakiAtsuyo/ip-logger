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
<style>
  table
  {
    border-collapse: collapse;
    background-color: #2f3136;
    }
    td, th
    {
      border: 2px solid black;
      color: #0eff00;
    }
    caption
    {
      color: #0eff00;
    }
</style>
<table align="center" class="table table-striped">
  <caption color="#0eff00">VICTIMS</caption>
  <thead>
    <tr>
      <th class="text-center" style="font-size: 20px;"></th>
      <th style="font-size: 20px;">IP</th>
      <th style="font-size: 20px;">UA(User-Agent)</th>
      <th style="font-size: 20px;">TIME</th>
    </tr>
  </thead>
  <tbody style="font-size: 24px;">
    <?php
    $GetKidsVictims = $odb->query("SELECT * FROM `ips`");
    while ($oof = $GetKidsVictims->fetch(PDO::FETCH_ASSOC)) {
      $ip       = $oof['ip'];
      $ua     = $oof['UA'];
      $time    = $oof['Time'];
      echo '<tr>
      <td></td>
      <td>'.$ip.'</td>
      <td>'.$ua.'</td>
      <td>'.$time.'</td>
      </tr>';
    }
    ?>  
  </tbody>
</table>
</body>
</html>
