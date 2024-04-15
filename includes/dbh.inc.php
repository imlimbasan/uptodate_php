<?php

$dsn = "mysql:host=localhost; dbname=up_to_date";
$dbusername = "root";
$dbpassword = "PasssS2@";


try {
  $pdo = new PDO ($dsn, $dbusername, $dbpassword);
  $pdo->setAttribute (PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } 
  catch (PDOException $e) {
  }
  echo "Connection failed: " . $e->getMessage();

