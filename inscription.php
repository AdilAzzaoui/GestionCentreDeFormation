<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" />
    <?php
    require("Bootstrap.php");
    $email=$_GET["erreur"]
    ?>
    <title>Inscription</title>
</head>
<body>
<?php 
  include("menu.php");
  ?>
  <form method="post" action="validation_inscription.php">
 <div class="container" style="margin-top: 80px;" >
    <div class="row">
      <div class="col-md-6" >
        <h2 class="text-center">Inscription Étudiant</h2>
       
          <div class="form-group" >
            <label for="nom">Nom :</label>
            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrez votre nom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Prénom :</label>
            <input type="text" class="form-control" id="prenom"  name="prenom" placeholder="Entrez votre prénom" required>
          </div>
          <div class="form-group">
            <label for="prenom">Date Naissance :</label>
            <input type="date" class="form-control" id="date" name="date" required>
          </div>
          <div class="form-group">
            <label for="email">Email :</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="Entrez votre email" required>
            <div name="erreur" style="color: red;"><?=$email ?></div>
          </div>
          <div class="form-group">
            <label for="portable">Portable :</label>
            <input type="tel" class="form-control" id="portable" name="portable" placeholder="Entrez votre numéro de portable" required>
          </div>
          <div class="form-group">
            <label for="filiere" >Filière :</label>
            <select class="form-control" name="filiere" id="filiere"  required>
              <option value="">Sélectionnez votre filière</option>
              <option value="Développement informatique">Développement informatique</option>
              <option value="anglais">Anglais</option>
              <option value="francais">Français</option>
            </select>
          </div>
          <div class="form-group">
            <label for="portable">Password :</label>
            <input type="password" class="form-control" id="password" name="password" placeholder="Entrez votre Mot de Passe " required>
          </div>
          <button type="submit" class="btn btn-danger" style="margin-left: 170px;">S'inscrire</button>
        
      </div>
      <div class="col-md-6">
        <div >
          <img src="Photos/prof.jpg" alt="Photo" height="100%" width="150%">
        </div>
      </div>
    </div>
  </div>
  </form>
  <?php
require("copyright.php");
?>
</body>
</html>