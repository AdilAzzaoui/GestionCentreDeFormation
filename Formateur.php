<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require("Bootstrap.php")
    ?>
    <title>Formateur</title>
</head>
<body>
<?php 
  include("menu.php");
  ?>
  <style>
    body
    {
        background-image: url("photos/profbac.jpg");
       
    }
    #se-connecter {
  transition: transform 0.3s ease-in-out;
}

#se-connecter:hover {
  transform: scale(1.4);
}

  </style>
  <form method="post" action="test_formateur">
    <div class="container" style="margin-top: 100px;">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Connexion Formateur</h4>
                    </div>
                    <div class="card-body">
                        <form>
                            <div class="form-group">
                                <label for="username">Nom d'utilisateur</label>
                                <input type="email" class="form-control" name="email" placeholder="Nom d'utilisateur">
                            </div>
                            <div class="form-group">
                                <label for="password">Mot de passe</label>
                                <input type="password" class="form-control" name="password" placeholder="Mot de passe">
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
    <?php
require("copyright.php");
?>
  </form>
</body>
</html>
