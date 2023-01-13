<!DOCTYPE <html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php 
        require('functions.php');
        Connectdatabase();
        ?>
    </head>
    <body>
        <header class="intro">
            
            <h1 class="title">Gamepage</h1>
            <ul class="menu_bar">
                <li><a href="Gamepage.php">Gamepage</a></li>
                <li><a href="news.asp">Planning</a></li>
                <li><a href="contact.asp">Information</a></li>
            </ul>
        </header>
        <div class="page-wrap">
        
        
        <div class="push"></div>
    </body>
   
    <a href="detail_page.php" class="button">klik hier!</a><br>
        </div>
     
    <footer>   
        <?php
        include('footer.php')
        ?>
    </footer>

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
        // echo $v["name"];
        echo '<img style="position:relative; left:510px; top:10px" image alt="7_wonders" width="225" height="250">';
        // echo "<a id= ".$v["id"]. "src=images/" .$v["image"] ."></a>";
      }
    
    } catch(PDOException $e) {
      echo "Error: " . $e->getMessage();
    }
    $conn = null;
    echo "</table>";
    
    $drie = 3
    ?>
    </body>
</html>