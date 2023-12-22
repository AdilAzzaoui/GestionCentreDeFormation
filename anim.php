<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
    require("Bootstrap.php");
    ?>
      <title>Acceuil</title>
    <style>
        .menu-container {
            position: relative;
            z-index: 100;
        }
        .footer {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
        }
     
    </style>
</head>
<body>
<?php 
  include("menu.php");
  ?>
    <div id="demo" class="carousel slide " data-ride="carousel"  >
          
        <div class="carousel-inner" >
          <div class="carousel-item active" >
            <img src="Photos/ehei.jpg" alt="Los Angeles" class="w-100" style="height: 100vh ;">
          </div>
          <div class="carousel-item">
            <img src="Photos/ehei.jpg" alt="Chicago" class="w-100" style="height: 100vh ;">
          </div>
        </div>
      
      
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
          <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
          <span class="carousel-control-next-icon"></span>
        </a>
      </div>
      <div class="d-flex align-items-center justify-content-center">
      <p id="section2" style="font-family: 'Courier New', Courier, monospace; font-size: x-large;font-weight: bold;" >Nos filiéres</p>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/deve.jpg" class="card-img-top" alt="Génie Informatique">
              <div class="card-body">
                <h5 class="card-title">Génie Informatique </h5>
                <p class="card-text">Le génie informatique est une discipline qui se situe à l'intersection de l'informatique et de l'ingénierie. C'est un domaine d'études supérieures qui vise à former des professionnels capables de concevoir, développer, mettre en œuvre et gérer des systèmes informatiques complexes.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/gestion.jpg" class="card-img-top" alt="Informatique et gestion">
              <div class="card-body">
                <h5 class="card-title">Informatique et Gestion</h5>
                <p class="card-text">
                La filière Informatique et Gestion est un domaine d'études supérieures qui combine des connaissances en informatique et en gestion d'entreprise. Cette filière vise à former des professionnels qui comprennent à la fois les aspects techniques de l'informatique et les concepts de gestion nécessaires pour soutenir et optimiser les opérations informatiques au sein d'une organisation.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/industrie.jpg" class="card-img-top" alt="Génie des Systèmes Industriels">
              <div class="card-body">
                <h5 class="card-title">Génie des Systèmes Industriels</h5>
                <p class="card-text">
                Le Génie des Systèmes Industriels est une filière d'études supérieures qui se concentre sur la conception, l'optimisation et la gestion des systèmes complexes dans le domaine industriel. Cette discipline vise à former des professionnels capables d'analyser, de concevoir, de mettre en œuvre et d'améliorer les systèmes de production, les processus et les opérations industrielles.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">Télécharger l'application De Espace Etudiant</h5>
    <p class="card-text">Cliquez sur le lien ci-dessous pour télécharger l'application :</p>
    <a href="untitled.exe"  class="btn btn-primary" download>Télécharger</a>
  </div>
</div>
<div class="card">
  <div class="card-body text-center">
    <h5 class="card-title">Télécharger l'application De Espace Formateur</h5>
    <p class="card-text">Cliquez sur le lien ci-dessous pour télécharger l'application :</p>
    <a href="chemin_vers_l_application.zip" class="btn btn-primary" download>Télécharger</a>
  </div>
</div>

<?php
require("copyright.php");
?>
  
</body>
</html>
