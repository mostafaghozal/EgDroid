<?php
include_once "DBconnection.php";

if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  } 
 

  $result1=mysqli_query($conn,"SELECT * FROM products WHERE pid = 1 ");
  $flag1 =mysqli_fetch_assoc($result1); // get flag element in array
  echo $pdname2=$flag1['price'];
  echo $pdname2;

  $result4=mysqli_query($conn,"SELECT * FROM products WHERE pid = 4 "); 
 $flag4 =mysqli_fetch_assoc($result4); // get flag element in array
 echo $pdname3=$flag4['price'];
 echo $pdname3;
 // $flag =mysqli_fetch_assoc($result)
//$resultCheck =mysqli_num_rows($result);
//if($resultCheck>0)
//while($row=mysqli_fetch_assoc($result))
//echo $row['price'];
//
?>

