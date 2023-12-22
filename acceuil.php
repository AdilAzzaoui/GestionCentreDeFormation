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
            <img src="Photos/univ1.jpg" alt="Los Angeles" class="w-100" style="height: 100vh ;">
          </div>
          <div class="carousel-item">
            <img src="Photos/univ3.jpg" alt="Chicago" class="w-100" style="height: 100vh ;">
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
      <p  style="font-family: 'Courier New', Courier, monospace; font-size: x-large;font-weight: bold;" id="section2" >Nos filiéres</p>
    </div>
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/deve.jpg" class="card-img-top" alt="Informatique">
              <div class="card-body">
                <h5 class="card-title">Développement Informatique </h5>
                <p class="card-text">Le développement informatique est le processus de création,
                     de conception et de construction d'applications, de logiciels et de sites Web en utilisant 
                     différents langages de programmation</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/france.jpg" class="card-img-top" alt="Littérature française">
              <div class="card-body">
                <h5 class="card-title">Langue française</h5>
                <p class="card-text">
                    Le français est une langue romane appartenant à la famille des langues indo-européennes. C'est l'une des langues les plus parlées dans le monde et elle est largement utilisée en tant que langue officielle dans de nombreux pays. Le français est la langue maternelle de millions de personnes en France, au Canada,
                     en Belgique, en Suisse, 
                     dans certains pays d'Afrique et d'autres régions francophones.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card">
              <img src="Photos/anglais.jpg" class="card-img-top" alt="Linguistique anglaise">
              <div class="card-body">
                <h5 class="card-title">Langue Anglaise</h5>
                <p class="card-text">
                    L'anglais est une langue germanique appartenant à la famille des langues indo-européennes. C'est l'une des langues les plus parlées et largement utilisées dans le monde. L'anglais est considéré comme la langue internationale de la communication, des affaires, de la technologie, 
                    de la science, de l'aviation, du tourisme et de nombreux autres domaines.</p>
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
