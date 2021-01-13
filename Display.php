
<!DOCTYPE html>
<html>
<body style="
    background-image: url('https://www.xmple.com/wallpaper/gradient-red-linear-purple-1920x1080-c2-8b0000-4b0082-a-225-f-14.svg');
    background-repeat: no-repeat;
    background-size: 100%;
    color:white;
    font-size:x-large;
    "
    
    
    >  
<center><h2 style="color:mintcream">Admin Control Panel</h2></center>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "lab9";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, email, passwrd FROM user  ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<br> Id: ". $row["id"]. " <br> Name: ". $row["email"]. " <br> Password:" . $row["passwrd"] . "<br>"  ;
        ?>
        <br>
        <a href="updateuser.php?id=<?php echo $row["id"]; ?>" style="color:gold;">Update</a>
        <a href="delete.php?id=<?php echo $row["id"]; ?>"  style="color:gold; padding-left:70px">Delete</a>
        <?php

    }
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
