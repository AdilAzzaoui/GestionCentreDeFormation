<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require("bootstrap.php");?>
</head>
<body>
    
<?php
session_start();
$fil = $_SESSION["Filiere"];
require("menu_connect.php");
echo "<form style='margin-top:100px;' class='text-center' method='post'>";
require("db.php");
$sql = "SELECT email, nom, prenom FROM etudiant WHERE Filiere = '$fil'";
$result = $conn->query($sql);
$result = $result->fetchAll(PDO::FETCH_ASSOC);
echo "<table class='table-hover table-bordered table-striped' style='margin-left: 300px;'> ";
echo "<tr><th>Email</th><th>Nom</th><th>Prenom</th><th>Filiere</th><th>Note</th><th>Module</th></tr>";
for ($i = 0; $i < count($result); $i++) {
    $email = $result[$i]["email"];
    $nom = $result[$i]["nom"];
    $prenom = $result[$i]["prenom"];
    echo "<tr>";
    echo "<td><label>$email</label></td>";
    echo "<td><label>$nom</label></td>";
    echo "<td><label>$prenom</label></td>";
    echo "<td><label>$fil</label></td>";
    echo "<td><input type='text' name='note[]' placeholder='Entrer la note'></td>";
    echo "<input type='hidden' name='email[]' value='$email'>";
    echo "<input type='hidden' name='nom[]' value='$nom'>";
    echo "<input type='hidden' name='prenom[]' value='$prenom'>";
    echo "<input type='hidden' name='fil[]' value='$fil'>";
    echo "<td>
            <select name='module[]'>
                <option value='TD'>TD</option>
                <option value='TP'>TP</option>
             
            </select>
          </td>";
    echo "</tr>";
}
echo "</table>";
echo "<input type='submit' name='submit' value='Ajouter' class='btn-danger'>";
echo "</form>";

if (isset($_POST['submit'])) {
    $emails = $_POST['email'];
    $noms = $_POST['nom'];
    $prenoms = $_POST['prenom'];
    $notes = $_POST['note'];
    //&$notes = $_POST['fil'];
    $modules = $_POST['module'];

    for ($i = 0; $i < count($noms); $i++) {
        $email = $emails[$i];
        $nom = $noms[$i];
        $prenom = $prenoms[$i];
        $note = $notes[$i];
        $module = $modules[$i];

        if (!empty($note)) {
            $query = "INSERT INTO note_etud (email, nom, prenom, note, filiere, module) VALUES ('$email', '$nom', '$prenom', '$note', '$fil', '$module')";
            $conn->exec($query);
        }
    }
    echo "Les notes ont été ajoutées avec succès.";

}

// require("copyright.php");
?>
</body>
</html>
