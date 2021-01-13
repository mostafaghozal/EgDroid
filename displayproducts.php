
<!DOCTYPE html> <!-- FOR ADMIN  -->
<html>
  
<body style=" 
    background-image: url('images/adminbg.jpg');
    background-repeat: no-repeat;
    background-size:cover;
    color:white;
    font-size:x-large;
    "
    >  
    <nav style="position:sticky;  font-size:x-large;  " >
    <div">
  
     
        <span ></span>
      </button>
      <div >
       
   
        <ul style="  list-style-type: none;
        margin: 0;
        padding: 0;
  
        overflow: hidden;
        background-color: rgba(0, 0, 0, 0.664); text-align: center;">
          <li style="  
          display:inline-block;
       
          text-align: center;
        
          text-decoration: none;">
          <h2 style="color: white;">Egy <em style="color: orangered;" >Droids</em></h2>
        </li>
        
            <li style="  
        
            display:inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;">
            <a id="x" style="color:gold" href="loggedin.php">Home</a>
          </li>
          <li style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a  style="color:gold" href="productsloggedin.php">Our Products</a>
          </li>
          <li   style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a style="color:gold" href="aboutloggedin.php">About Us</a>
          </li">
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a  style="color:gold" href="contactloggedin.php">Contact Us</a>
          </li >
          </li>
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;"> 
            <a style="color:gold" href="home.php">Log Out</a>
          </li>
              
          
        </ul>
      </div>
    </div>
  </nav>
   
<center><h2 style="color:red; font-family:Arial, Helvetica, sans-serif;
"> Admin Control Panel </h2></center>
<center>
<?php
   session_start();
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

$sql2 = "SELECT pid ,pname , price FROM products ";

$result2= $conn->query($sql2);



if ($result2->num_rows > 0) {
  // output data of each row
  while($row = $result2->fetch_assoc()) {
      
      echo " <br> PId: ". $row["pid"]. " <br> Product: ". $row["pname"]. "  <br> price: ". $row["price"]. " <br> "  ;
      ?>
      <br>
      <a href="updateprice.php?pid=<?php echo $row["pid"]; ?>" style="color:gold;">Update</a>
      <br>
  ......................................................................................
      <?php

  }
} else {
  echo "0 results";
}

$conn->close();
?>
</center>
<center>
<a href="controlpanel.php" style="
	box-shadow: 3px 4px 0px 0px #8a2a21;
	background:linear-gradient(to bottom, #c62d1f 5%, #f24437 100%);
	background-color:#c62d1f;
	border-radius:18px;
	border:1px solid #d02718;
	display:inline-block;
	cursor:pointer;
	color:#ffffff;
	font-family:Arial;
	font-size:22px;
	padding:25px 60px;
	text-decoration:none;
	text-shadow:0px 1px 0px #810e05;
">Back</a>
</center>
</body>
    
</html>
