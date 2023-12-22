<?php
$Email=$_POST["Email"];
$pass=$_POST["Password"];
require("db.php");
$query="SELECT *from admin where Email='$Email' and Password ='$pass' ";
$stmt = $conn->query($query);

// Fetch the results
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    session_start();
    $_SESSION["Email"]=$_POST["Email"];
    header("location:connect_admin");
    
} else {
    header("location:login_admin");
}

?>