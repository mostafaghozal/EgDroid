<?php
include_once "DBconnection.php";

$username=$_GET["username"];
  $email= $_GET["email"];
  $password=$_GET["psw"];
  $id=$_GET["id"];
  echo $id;
$sql="UPDATE user SET `passwrd`=md5('".$password."'),`email`='".$email."',`username`='".$username."'  WHERE id='".$id."'";

if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('Location: displayusers.php' );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>