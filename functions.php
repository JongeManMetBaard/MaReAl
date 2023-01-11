<?php

function Connectdatabase(){
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mareal";
    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
     }catch (PDOException $exception){
        exit("failed to connect")
     }
}


// $conn = null;
// echo "</table>";
// $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
//   foreach($stmt->fetchAll() as $v) {
    // echo "<a id= ".$v["id"]. "src=images/" .$v["image"] ."></a>";
//   }
?> 