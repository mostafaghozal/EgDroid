<!DOCTYPE html>
<html lang="en">

  <head>
   
  <?php

session_start();

   $name=$_SESSION['sess_name'];
   if ($name==NULL){
    header("Location:home.php");
  }
  
?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>EgyDroids - Robot Store</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>
      

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="loggedin.php"><h2>Egy <em>Droids</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              
                <li class="nav-item active ">
                <a class="nav-link" id="x" href="loggedin.php">Home</a>
              </li>
              <li class="nav-item ">
                <a class="nav-link" href="productsloggedin.php">Our Products</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="aboutloggedin.php">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="contactloggedin.php">Contact Us</a>
              </li>
              </li>
              
              <li class="nav-item">
                <a class="nav-link" href="logout.php"  >Log Out</a>
              </li>
                  <li class="nav-item" >
                      
                <a class="nav-link" href="member.php" ><strong style="color:red"> Welcome, <?=$_SESSION['sess_name']?> </a>
              </li>
              
            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>Best Offer</h4>
            <h2 >New Arrivals On Sale</h2>
          </div>
        </div>
        <div class="banner-item-02">
          <div class="text-content">
            <h4>Flash Deals</h4>
            <h2>Get your best products</h2>
          </div>
        </div>
        <div class="banner-item-03">
          <div class="text-content">
            <h4>Last Minute</h4>
            <h2>Grab last minute deals</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest Products</h2>
              <a href="products.php">view all products <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
          <div class="product-item">
                   <center><a href="#"><img src="assets/images/product_01.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                  
                   
                       
                <a href="#"><h4><?=$_SESSION['pname1'];?> </h4></a>
                <h6>$<?=$_SESSION['price1'];?></h6>
                <p>comes with everything needed for scientific R&D and business applications.</p>
                
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
               
                <span>Reviews (24)</span>
</div>
                <center>
                <a class="add-cart cart1" href="#" style="color:orangered">Add to Cart </a>
</center>
              
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <center> <a href="#"><img src="assets/images/product_02.jpg" alt="" style="width: 46.7%" height="46.7% " ></a></center>
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname2'];?> </h4></a>
                <h6>$<?=$_SESSION['price2'];?></h6>
                <p>Helps in work productivity</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>

                <span>Reviews (21)</span>
                
              </div>
              <center>
              <a class="add-cart cart2" href="#"style="color:orangered">Add to Cart </a>
              </center>   
            </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                        <center> <a href="#"><img src="assets/images/product_03.jpg" alt="" style="width:80%" height="80% " ></a></center>
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname3'];?></h4></a>
                <h6>$<?=$_SESSION['price3'];?></h6>
                <p>Cleans and feeds pet</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (36)</span>
              </div>
<center>
              <a class="add-cart cart3" href="#" style="color:orangered">Add to Cart </a>
</center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all gra">
                      <div class="product-item">
                         <center><a href="#"><img src="assets/images/product_04.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname5'];?></h4></a>
                <h6>$<?=$_SESSION['price5'];?></h6>
               <p>For Kids Entertainment </p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (48)</span>
              </div>
              <center>
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
              </center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all dev">
                      <div class="product-item">
                        <center><a href="#"><img src="assets/images/product_05.jpg" alt="" style="width: 80%" height="80% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4><?=$_SESSION['pname6'];?></h4></a>
                <h6>$<?=$_SESSION['price6'];?></h6>
                <p>Features a lean, self-charging robotic cleaning machine</p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (16)</span>
              </div>
<center>
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
</center>
                      </div>
                    </div>
                    <div class="col-lg-4 col-md-4 all des">
                      <div class="product-item">
                      <center><a href="#"><img src="assets/images/product_06.jpg" alt="" style="width: 76%" height="76% " ></a></center> 
              <div class="down-content">
                <a href="#"><h4> <?=$_SESSION['pname4'];?></h4></a><br>
                <h6><?=$_SESSION['price4'];?></h6>
                <p></p>
                <ul class="stars">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
                <span>Reviews (32)</span>
              </div>
              <center>
              <a class="add-cart cart4" href="#"style="color:orangered">Add to Cart </a>
              </center>
                      </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Egy Droids</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>Ready for the future?</h4>
              <p> We are the first robot store in the middle east , offering high range of service robots that will help changing your life to the better , more comfortable at home in automated fashion </p>
              <ul class="featured-list">
                <li><a href="#">Service Robots </a></li>
                <li><a href="#">Pet Care Automated Products</a></li>
                <li><a href="#">Educational Robot Toys</a></li>
                <li><a href="#">Maintaince Services</a></li>
              </ul>
              <a href="about.html" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/feature-image.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>


   

 


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
    <script src="assets/js/slick.js"></script>
    <script src="assets/js/isotope.js"></script>
    <script src="assets/js/accordions.js"></script>


    <script language = "text/Javascript"> 
      cleared[0] = cleared[1] = cleared[2] = 0; 
      function clearField(t){                   
      if(! cleared[t.id]){                      
          cleared[t.id] = 1;  
          t.value='';         
          t.style.color='#fff';
          }
      }
    </script>


  </body>

</html>
