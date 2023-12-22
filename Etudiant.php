<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php
    require("Bootstrap.php")
    ?> 
  <title>Etudiant</title>
</head>
<body>
  <?php 
  include("menu.php");
 $id=$_GET["message"];

  ?>
  <style>
    body
    {
        background-image:url("photos/studentback.avif");
    }
    #se-connecter {
  transition: transform 0.3s ease-in-out;
}

#se-connecter:hover {
  transform: scale(1.4);
}
  </style>
  <form method="post" action="login_Etudiant">
  <div class="container" style="margin-top: 85px;">
    <div class="row justify-content-center mt-5">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="text-center">Connexion Étudiant</h4>
                </div>
                <div class="card-body">
                    <form>
                        <div class="form-group">
                            <label for="username">Votre Email </label>
                            <input type="text" class="form-control" name="Email" id="Email" placeholder="Nom d'utilisateur">
                        </div>
                        <div class="form-group">
                            <label for="password">Mot de passe</label>
                            <input type="password" class="form-control" name="Password" id="Password" placeholder="Mot de passe">
                            <span name="erreur" style="color:red;"><?=$id ?></span>
                        </div>
                        <div class="form-group">
                            <div class="text-right">
                                <a href="#">Mot de passe oublié ?</a>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary d-flex m-auto" id="se-connecter">Se connecter</button>
                    </form>
                </div>
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