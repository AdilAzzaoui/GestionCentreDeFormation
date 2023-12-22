<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$date=$_POST["date"];
$email=$_POST["email"];
$portable=$_POST["portable"];
$filiere=$_POST["filiere"];
$pass=$_POST["password"];
$pass=md5($pass);
require("db.php");
$quer = "SELECT * FROM etudiant WHERE Email = '$email'";
$result = $conn->query($quer);
$data=$result->fetch(PDO::FETCH_ASSOC);
if($data)
{
    header("Location: inscription.php?erreur=Cette adresse e-mail existe déjà");   
}
else 
{
  
$query="INSERT Into etudiant Values('$nom','$prenom','$date','$email','$portable','$filiere','$pass','En attente de validation')";
$conn ->exec($query);
if($conn)
{
header("location:inscription");
}
}


$conn=null;
?>