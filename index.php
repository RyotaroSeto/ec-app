<?php
  require 'common.php';
  $pdo = connect();
  $st = $pdo->query("SELECT * FROM goods");
  $goods = $st->fetchAll();  //該当する全てのデータを配列として返す
  require 't_index.php';
?>