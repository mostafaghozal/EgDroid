<?php
session_start();
include_once "DBconnection.php";


  $email= $_GET["email"];
  $password=$_GET["psw"];
  $username=$_GET["username"];


$sql="UPDATE user SET `passwrd`=md5('".$password."'),`email`='".$email."',`username`='".$username."'  WHERE id='".$_SESSION['sess_id']."'";

if(mysqli_query($conn, $sql)){
  echo 'alert("Account is Updated Successfly , Please Log-in again");'; 
    header('Location: logout.php');
  //  header('Location: Display.php' );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>
