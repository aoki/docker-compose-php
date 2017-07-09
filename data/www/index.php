<?php
  try {
    $pdo = new PDO('mysql:host=maria:3306;dbname=sample;charset=utf8mb','root','maria',
    array(PDO::ATTR_EMULATE_PREPARES => false));
  } catch (PDOException $e) {
    exit('Database connetion failed'.$e->getMessage());
  }
  phpinfo();
