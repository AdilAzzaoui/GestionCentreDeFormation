<?php
session_start();
require("db.php");
$email=$_SESSION["Email"];
$query="select * from formateur where email= '$email'";
$stmt=$conn->query($query);
$data=$stmt->fetchAll(PDO::FETCH_ASSOC);
foreach($data as $ligne)
{
  $nom=$ligne["Nom"];
  $prenom=$ligne["Prenom"];
  $portable=$ligne["Telephone"];
  $filiere=$ligne["Filiere"];

}
?>

<!DOCTYPE html>
<html>
<head>

    <title>Attestation</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 30px;
        }

        .page-header {
            text-align: center;
            margin-bottom: 20px;
        }

        .details {
            margin-bottom: 30px;
        }

        .details p {
            margin: 5px 0;
        }

        .logo {
            text-align: center;
        }

        .logo img {
            max-width: 200px;
            margin-bottom: 20px;
        }

        .signature {
            text-align: right;
        }

        .signature img {
            max-width: 150px;
            margin-top: 20px;
        }
    </style>
    <script>
        function printPartie() {
            var printContent = document.getElementById("partieImprimer").innerHTML;
            var originalContent = document.body.innerHTML;
            document.body.innerHTML = printContent;
            window.print();
            document.body.innerHTML = originalContent;
        }
    </script>
</head>
<body>

    <div class="container">
        <div id="partieImprimer">
            <div class="logo">
                <img src="photos/Gc_cercle.png" alt="Logo">
            </div>

            <div class="page-header">
                <h1>Attestation D'Etudiant</h1>
            </div>

            <div class="details">
                <p>Nom : <span id="nom"><?=$nom ?></span></p><br>
                <p>Prénom : <span id="prenom"><?=$prenom ?></span></p><br>
                <p>Titre : <span id="titre">Attestation de participation</span></p><br>
                <p>Date : <span id="date"><?php echo date('Y-m-d'); ?></span></p><br>
                <p>Formation : <span id="formation"><?=$filiere ?></span></p><br>
            </div>

            <div class="signature">
                Signature<p>.............................</p>
            </div>
        </div>
    </div>

    <div class="container">
        <button type="button" class="btn btn-primary d-flex m-auto" onclick="printPartie()">Print</button>
    </div>
    <?php
   require("bootstrap.php");
   ?>
</body>
</html>
