

<!DOCTYPE html>
<html>
<head>
<script src="https://smtpjs.com/v3/smtp.js"></script>
<?php

session_start();

if((time()-$_SESSION['last_time'])>100){
  
  echo '<script type="text/javascript">'; 
  echo 'alert("Session Timeout , You Will be Logged Out for Secuirty Purposes");'; 
  echo 'window.location.href = "home.php";';
  echo '</script>';
  session_destroy();


}

?>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
  background-image: url("images/x.jpg");
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: orangered;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  display: block;
  margin-left: auto;
  margin-right: auto;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
  align-content: center;    
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

  <nav class="navbar navbar-expand-lg" >
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
            <a id="x" href="loggedin.php">Home</a>
          </li>
          <li style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a  href="productsloggedin.php">Our Products</a>
          </li>
          <li   style="  display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a  href="aboutloggedin.php">About Us</a>
          </li">
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;">
            <a  href="contactloggedin.php">Contact Us</a>
          </li >
          </li>
          <li style="   display:inline-block;
          color: white;
          text-align: center;
          padding: 14px 16px;
          text-decoration: none;"> 
            <a  href="home.php">Log Out</a>
          </li>
              
          
        </ul>
      </div>
    </div>
  </nav>
  <br>
  <br>
<div class="row">
  <div class="col-75">
    <div class="container"style="  display: inline-block; margin-left:450px;">
      
      <form action="/action_page.php" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe"  required>
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com" required>
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street" required>
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York" required>

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY" required>
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001" required>
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe" required>
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444" required>
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September" required>
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352" required>
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
       
        <input type="button" class="btn" herf="checkout_successful.html"value="Send Email" onclick="sendEmail()"> 
      </form>
      <script type="text/javascript ">
      function sendEmail(){
        Email.send({
      
    Host : "smtp.gmail.com",
    Username : "mido.is.one1@gmail.com",
    Password : "oooo0000",
    To : document.getElementById('email').value,
    From : "mido.is.one1@gmail.com",
    Subject : "EGDroids",
    Body : "Your Purchase was sucessfuly completed , your order will be recieved within 3 days ,  "+ "Total Cost  :" +localStorage.getItem("totalCost") +"$"
    
}).then(
  message => alert(message)
);
window.location.href = "checkout_successful.html";
      }
      </script>
      </form>
    
    </div>
  </div>
  <div class="col-25">

  </div>
</div>

</body>
</html>
