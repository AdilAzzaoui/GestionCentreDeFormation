<?php
session_start();

require("db.php");
$email=$_SESSION["email"];
$query="select * from formateur where email= '$email'";
$stmt=$conn->query($query);
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $ligne)
{
  $email=$ligne["email"];
  $nom=$ligne["Nom"];
  $prenom=$ligne["Prenom"];
  $portable=$ligne["Telephone"];
  $filiere=$ligne["Filiere"];

}
$_SESSION["Filiere"]=$filiere;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require("Bootstrap.php")
    ?>
    <title>Document</title>
</head>
<body>
<?php 
  include("menu_connect.php");
  ?>
    <div class="container"  style="margin-top: 80px;">

    <div class="card-body">
            <h5>Informations Formateur</h5>
            <ul class="list-group">
              <li class="list-group-item"><strong>Nom:</strong> <?=$nom ?></li>
              <li class="list-group-item"><strong>Prénom:</strong> <?=$prenom ?></li>
              <li class="list-group-item"><strong>Email:</strong> <?=$email ?></li>
              <li class="list-group-item"><strong>Téléphone:</strong> <?=$portable ?></li>
              <li class="list-group-item"><strong>Filiere:</strong> <?=$filiere ?></li>
          
            </ul>
          </div>

    <div class="row">
      <div class="col-md-4">
        <div class="card">
         <a href='note_etud.php?filiere=<?php echo $filiere?>'> <img src="photos/note.jpeg" class="card-img-top" alt="Photo">
          <div class="card-body">
            <h5 class="card-title">Saisir les notes</h5></a>
            <!-- Formulaire de saisie des notes -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
       
        <a href='absence_etud.php' >
         
          <img src="photos/absent.jpeg" class="card-img-top" alt="Photo">
          <div class="card-body">
            <h5 class="card-title">Saisir les absences</h5></a>
            <!-- Formulaire de saisie des absences -->
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card">
        <a href='emploi_form.php?filiere=<?php echo $filiere?>'>
          <img src="photos/emploi.jpg" class="card-img-top" alt="Photo">
          <div class="card-body">
            <h5 class="card-title">Voir l'emploi du temps</h5></a>
            <!-- Affichage de l'emploi du temps -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
require("copyright.php");
?>
</body>
</html>