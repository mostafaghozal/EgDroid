<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab9"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if($conn)
{
	echo"database is connected";
}
else
  echo"database is not connected";

$_GET["psw"];
$_GET["email"];
$_GET["username"];

$sql="INSERT INTO `user`(`email`, `passwrd`,`username`)VALUES ('".$_GET["email"]."',md5('".$_GET["psw"]."'),'".$_GET["username"]."')";

if(mysqli_query($conn, $sql)){
    echo "Records inserted successfully.";
    header("Location: home.php");  
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>