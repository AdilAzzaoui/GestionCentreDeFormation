<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
  
    <?php
    session_start();
     require("menu_connect.php");
$filiere=$_SESSION["Filiere"];
    require("db.php");
    $queryy = "SELECT photo FROM picture where filiere='$filiere'";
    $stmt = $conn->query($queryy);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $imagePath = $result['photo'];

    ?>
    <form >
    <h1 style="margin-top: 80px;margin-left: 500px;">Votre Emploie</h1>
 <img src="picture/<?php echo $imagePath; ?>" height="400" width="700" class="d-flex m-auto">
    </form>

  </div>
</body>
</html>
<style>
  body{
    background-image: linear-gradient(to bottom, #f4f4f4, #ccc);
  }
</style>