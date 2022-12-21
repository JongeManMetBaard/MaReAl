<?php

function Connectdatabase()
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mareal";
    try {
     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     $stmt = $conn->prepare("SELECT id , min_players, max_players, play_minutes, explain_minutes, name, image, description FROM games");
     $stmt->execute();
     }

 catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;
echo "</table>";
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $v) {
    echo "<a id= ".$v["id"]. "src=images/" .$v["image"] ."></a>";

?> 