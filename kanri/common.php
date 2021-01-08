<?php

  function connect() {
    $user = "suzuki";
    $pass = "Ryotaro03";
    return new PDO("mysql:host=localhost;dbname=shop;charset=utf8"
    ,$user, $pass);
  }
?>