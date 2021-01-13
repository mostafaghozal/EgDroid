<?php
include_once "DBconnection.php";

if (isset($_REQUEST["id"]))
{
    $sql="delete from user where id=".$_REQUEST["id"];
		mysqli_query($conn,$sql);

}
header('Location: Display.php' );


?>