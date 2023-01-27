<!DOCTYPE <html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <?php 
        require('functions.php');
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
   
     
    <footer>   
        <?php
        include('footer.php')
        ?>
    </footer>

    <?php
     try {
      $conn = Connectdatabase();
      
      $stmt = $conn->prepare("SELECT id ,name, image, description FROM games");
      $stmt->execute();
    
    
      $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
      foreach($stmt->fetchAll() as $v) {
        // echo $v["name"];

        $img_name = $v['name'];
        $img_src = $v['image'];
        echo '<a href="detail_page.php" class="button">klik hier!</a><br>';
        ?>
        <img src="afbeeldingen/<?php echo $img_src; ?>" alt="" title="<?php echo $img_name; ?>" class="img-responsive" />
        <?php
        echo $v["description"];

    
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