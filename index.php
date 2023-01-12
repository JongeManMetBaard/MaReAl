<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Meester Proef</title>
</head>
<body>
    <header class="intro">
        
        <h1 class="title">NextGenGames</h1>
        <ul class="menu_bar">
            <li><a href="Gamepage.php">Gamepage</a></li>
            <li><a href="news.asp">Planning</a></li>
            <li><a href="contact.asp">Information</a></li>
          </ul>
    </header>
    <h2 class="WelcomeText">Welcome</h2>

    <footer>
        <?php
        include 'footer.php'
        ?>
    </footer>
</body>
</html>


<?php

 $servername = "localhost";
 $username = "root";
 $password = "mysql";
 $dbname = "mareal";

 try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT id ,name, image, description FROM games");
  $stmt->execute();


  $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach($stmt->fetchAll() as $v) {
    echo $v["name"];
    echo "<a id= ".$v["id"]. "src=images/" .$v["image"] ."></a>";
  }

} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

$drie = 3
?>
