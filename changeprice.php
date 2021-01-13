<?php
include_once "DBconnection.php";


  $price= $_GET["price"];

  $pid=$_GET["pid"];
  echo $pid;
$sql="UPDATE products SET`price`='".$price."'  WHERE pid='".$pid."'";

if(mysqli_query($conn, $sql)){
    echo "Records updated successfully.";
    header('Location: displayusers.php' );
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}
?>