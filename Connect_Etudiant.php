<?php
require("auth.php");
$user = $_SESSION["Email"];
require("db.php");
$query = "SELECT * FROM etudiant WHERE Email='$user'";
$stmt = $conn->query($query);
$res = $stmt->fetch(PDO::FETCH_ASSOC);
$key='Password';
if ($res && array_key_exists($key, $res)) {
  $nom = $res['Nom'];
    $prenom = $res['Prenom'];
    $email = $res['Email'];
    $portable=$res['Portable'];
    $dn=$res["DN"];
    $filiere=$res["Filiere"];
} else {
    // Handle the case when the key is not defined
    $prenom = ""; // or any other default value
}
$query="select * from Etudiant where Filiere='$filiere' ";
$stmte=$conn->query($query);
$data=$stmte->fetchall();
foreach($data as $lign)
{
    $id=$lign["Email"];
}
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
<div class="container" style="margin-top: 50px;">
    <div class="row">
      <div class="col-md-6 offset-md-3 mt-5">
        <div class="card">
          <div class="card-header text-center">
            <h4>Interface Étudiant</h4>
          </div>
          <div class="card-body">
            <h5>Informations Étudiant</h5>
            <ul class="list-group">
              <li class="list-group-item"><strong>Nom:</strong> <?= $nom;?></li>
              <li class="list-group-item"><strong>Prénom:</strong> <?= $prenom;?></li>
              <li class="list-group-item"><strong>Email:</strong>  <?= $email;?></li>
              <li class="list-group-item"><strong>Téléphone:</strong> <?= $portable;?></li>
              <li class="list-group-item"><strong>Date de Naissance:</strong> <?= $dn;?></li>
              <li class="list-group-item"><strong>Filiére:</strong><?= $filiere;?></li>
              <li class="list-group-item"><a href="printer" >Ton Attestation</a></li> 
            </ul>
          </div>
          <div class="card-footer">
            <h5>Sélectionner une option</h5>
            <div class="row">
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Absences</h6>
                    <img src="Photos/absent.jpeg" alt="Absences" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Notes</h6>
                    <a href="note_etudiant.php">
                    <img src="Photos/note.jpeg" alt="Notes" class="img-fluid" >
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-4">
                <div class="card">
                  <div class="card-body">
                    <h6 class="card-title">Emploi du Temps</h6>
                    <img src="Photos/emploi.jpg" alt="Emploi du Temps"  class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="d-flex justify-content-center align-items-center">
    <div class="container">
      <h1 class="text-center mb-4">Votre - Notes</h1>
      
      <table  class="table table-striped">
        <thead>
          <tr>
            <th>Module</th>
            <th>Communication écrite</th>
            <th>Communication orale</th>
            <th>Moyenne</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?=$filiere ?></td>
            <td>15/20</td>
            <td>17/20</td>
            <td>16/20</td>
          </tr>

          <!-- Ajouter d'autres lignes pour d'autres modules -->
        </tbody>
      </table>
    </div>
  </div>
  <div class="container">
    <h1 class="text-center mt-4">Votre - Absences  </h1>
    <div class="table-responsive mt-4">
      <table class="table table-striped">
        <thead>
          <tr>
            <th>Module</th>
            <th>Date</th>
            <th>Motif</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><?=$filiere ?></td>
            <td>2023-05-01</td>
            <td>Maladie</td>
          </tr>

          <!-- Ajouter d'autres lignes pour les autres absences -->
        </tbody>
      </table>
    </div>
  </div>
  <div class="container text-center">
    <h1>Votre - emploi</h1>
    <?php
    require("db.php");
    $queryy = "SELECT photo FROM picture where filiere='$filiere'";
    $stmt = $conn->query($queryy);
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    $imagePath = $result['photo'];
    echo '<img src="' ."picture/". $imagePath . '" alt="Photo"  class="img-fluid">';
    ?>

  </div>
<?php
require("copyright.php");
?>
</body>
</html>