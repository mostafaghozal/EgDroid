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