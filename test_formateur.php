<?php
  require("db.php");
$email=$_POST["email"];
$pass=$_POST["password"];
if(isset($_POST["email"]) && !empty($_POST["email"]))
{
 
    $query="SELECT *from formateur where email='$email' and Password ='$pass' ";
    $stmt = $conn->query($query);
    
    // Fetch the results
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    
    if ($result) {
        session_start();
       $_SESSION["email"]= $_POST["email"];
        header("location:Connect_formateur");
        
    } else {
        header("location:formateur");
    }
}

?>