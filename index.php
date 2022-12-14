<<<<<<< Updated upstream
=======
<<<<<<< HEAD
<?php
 $hostName = "localhost";
 $userName = "root";
 $password = "";
 $dbName = "mareal";
 $conn= new mysqli($hostName,$userName,$password,$dbName);
 if($conn){
    echo "connected";
 }else{
    echo "not connected";
 }

  ?>
=======
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
=======
>>>>>>> 028330c2a2de5658aff8fc332fba8c416bd2df49
>>>>>>> Stashed changes
