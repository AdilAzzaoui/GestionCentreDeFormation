<?php
require("menu_connect.php");
   session_start();
   
if(isset($_SESSION["email"]))
{
$fil = $_SESSION["Filiere"];

$email=$_SESSION["email"];
echo "<form style='margin-top:100px;' class='text-center' method='post'>";
require("db.php");
require("bootstrap.php");

$sql = "SELECT nom, prenom FROM etudiant WHERE Filiere = '$fil' and email='$email'";
$result = $conn->query($sql);
$result = $result->fetchAll(PDO::FETCH_ASSOC);

echo "<table class='table-hover table-bordered table-striped ' style='margin-left:400px;'>";
echo "<tr><th>Absent</th><th>Nom</th><th>Prenom</th><th>Absence</th><th>Motif</th></tr>";
for ($i = 0; $i < count($result); $i++) {
    $nom = $result[$i]["nom"];
    $prenom = $result[$i]["prenom"];
    echo "<tr>";
    echo "<td><input type='checkbox' name='absent[]' placeholder='Absence'></td>";
    echo "<td><label>$nom</label></td>";
    echo "<td><label>$prenom</label></td>";
    echo "<td><input type='datetime-local' name='note[]' placeholder='Absence'></td>";
    echo "<td><select name='motif'><option>Maladie</option><option>Problèmes de transport</option><option>Raisons familiales</option></select></td>";
    echo "<input type='hidden' name='nom[]' value='$nom'>";
    echo "<input type='hidden' name='prenom[]' value='$prenom'>";
    echo "</tr>";
}
echo "</table>";
echo "<input type='submit' name='submit' value='Ajouter' class='btn-danger'>";
echo "</form>";

if (isset($_POST['submit'])) {
    if (isset($_POST['absent'])==1) {
        $absent = $_POST["absent"];
        $noms = $_POST['nom'];
        $prenoms = $_POST['prenom'];
        $notes = $_POST['note'];
        $motif = $_POST["motif"];

        for ($i = 0; $i < count($noms); $i++) {
            $nom = $noms[$i];
            $prenom = $prenoms[$i];
            $note = $notes[$i];

            $query = "INSERT INTO absence_etud VALUES ('$nom', '$prenom', '$note','$motif')";
            $conn->exec($query);
        }
        echo "Les notes ont été ajoutées avec succès.";
    } else {
        echo "Aucune case n'a été cochée.";
    }
}

require("copyright.php");
}
else
header("Location:acceuil");
?>

