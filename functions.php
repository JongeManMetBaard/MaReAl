<?php

function Connectdatabase(){
  $servername = "localhost";
  $username = "Game";
  $password = "Game";
  $dbname = "mareal";
  try {
   $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  return $conn;
  }

  catch(PDOException $e) {
   echo "Error: " . $e->getMessage();
  }
}
?>
