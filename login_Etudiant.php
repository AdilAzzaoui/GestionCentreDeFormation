<?php

$Email=$_POST["Email"];
$pass=$_POST["Password"];
$pass=md5($pass);
require("db.php");
$query="SELECT *from etudiant where Email='$Email' and Password ='$pass' and Action='validé'";
$stmt = $conn->query($query);

// Fetch the results
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    session_start();
    $_SESSION["Email"]=$Email;
    $_SESSION["auth"]=true;
    header("location:Connect_Etudiant");
    
} else 
{
    $message = "Erreur en attendant admin de confirm ton inscription";
    header("location:Etudiant?message=$message");
}
?>