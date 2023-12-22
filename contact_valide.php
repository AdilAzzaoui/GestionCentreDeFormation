<?php
$nom=$_POST["nom"];
$prenom=$_POST["prenom"];
$email=$_POST["email"];
$portable=$_POST["Portable"];

$message=$_POST["message"];
require("db.php");
$query="INSERT Into contact Values('$nom','$prenom','$email','$portable','$message')";
$conn ->exec($query);

$conn=null;
?>