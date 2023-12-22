
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php  require("Bootstrap.php");?>
    <title>Document</title>
</head>
<body>
<form action="test_admin.php" method="post" enctype="multipart/form-data">
<?php

require("menu_connect.php");
require("db.php");
$sql = "SELECT * FROM contact";
$result = $conn->query($sql);

if ($result) {
    echo "<h1 class=text-center style=margin-top:80px> Boîte de reception </h1>";
    echo "<table class=table style=margin-top:80px>";
    echo "<tr><th>Nom</th><th>Prénom</th><th>Email</th><th>Potable</th><th>Message</th></tr>";

    while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>".$row["nom"]."</td>";
        echo "<td>".$row["prenom"]."</td>";
        echo "<td>".$row["email"]."</td>";
        echo "<td>".$row["portable"]."</td>";
        echo "<td>".$row["message"]."</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Aucun résultat trouvé.";
}  

echo "<h1 class=text-center> Les etudiants </h1>";

 echo "  <table border='1' class=table>";
 echo "  <tr>
            <th>Nom</th>
            <th>Prenom</th>
            <th>DN</th>
            <th>Email</th>
            <th>Portable</th>
            <th>Filiere</th>
            <th>Validation</th>
            <th>Action</th>
          

</tr>";


require("db.php");
$query="select*from etudiant";
$stmt=$conn->query($query);
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);

foreach($data as $lign)
{
    $Nom=$lign["Nom"];
    $Prenom=$lign["Prenom"];
    $DN=$lign["DN"];
    $email=$lign["Email"];
    $Portable=$lign["Portable"];
    $Filiere=$lign["Filiere"];
    $Action=$lign["Action"];

    echo "<tr>";
   echo "<td>$Nom</td>";
   echo "<td>$Prenom</td>";
   echo "<td>$DN</td>";
   echo "<td>$email</td>";
   echo "<td>$Portable</td>";
   echo "<td>$Filiere</td>";
   echo "<td>$Action</td>";

  echo "<td><a href='test_admin.php?email=$email'>valider</a> \t <a href='test_admin.php?id=$email'>Supprimer</a></td>";
   echo "</tr>";
}

echo "</table>";
?>
 Choisir Filiere:<select name="emploi">
    <option value="anglais">anglais</option>
    <option value="francais">français</option>
    <option value="Développement informatique">Développement informatique</option>
</select><br>
   Inserer Emploi de Temps <input type="file" name="file"/><br>
   <input type="submit" value="Inserer Emploi" class="btn-danger"/>

   </form>
</body>
</html>
<?php
   require("copyright.php");
   ?>