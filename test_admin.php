<?php
require("db.php");
$id=$_GET["email"];
$email=$_GET["id"];
$query="UPDATE `etudiant` SET Action='validé' WHERE email='$id' ";
$conn->exec($query);
$sql="DELETE from Etudiant WHERE email='$email' ";
$conn->exec($sql);
$emploi=$_POST['emploi'];
$img=$_FILES["file"]["name"];

//$fileName = uniqid(true) . '_' .$img; // Accédez à l'élément 'name' du tableau $_FILES['file']
$targetPath = 'picture/' . $img;
move_uploaded_file($_FILES['file']['tmp_name'], $targetPath);
$queryy="INSERT into picture values('$emploi','$img')";
$conn->exec($queryy);
//echo '<img src="' . $targetPath . '" alt="Photo">';
if($conn)
{
    header("location:connect_admin");
}
?>