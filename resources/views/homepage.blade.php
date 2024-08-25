<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
<!-- Bootstrap Version 4 -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- Font Awesome CSS link -->
<link rel="stylesheet" href="{{ asset('assets/css/all.min.css') }}">
<!-- Custom CSS link -->
<link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

<!-- Google Font link -->
<link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

<title> Online Customer Services Portal - OCSP </title>

</head>
<body>
  
 <!-- Start of  Navigation -->
  <nav class="navbar navbar-expand-sm navbar-dark bg-primary pl-5 fixed-top">
   <a href="index.php" class="navbar-brand"> OCSP </a>
   <span class="navbar-text"> Online Customer Service Portal </span>
   
   <!-- Nav button for mobile screen -->
   <button type="button" class="navbar-toggler" data-toggle="collapse" 
         data-target="#myMenu"> <span class="navbar-toggler-icon"></span>
   </button>
   <div class="collapse navbar-collapse" id="myMenu">
    <ul class="navbar-nav pl-5 custom-nav">
     <li class="nav-item"><a href="index.php" class="nav-link"> Home </a></li>
     <li class="nav-item"><a href="#Services" class="nav-link"> Services </a></li>
     <li class="nav-item"><a href="#registration" class="nav-link"> Registration </a></li>
     <li class="nav-item"><a href="Requester/RequesterLogin.php" class="nav-link"> Login 
                                                                                </a></li>
     <li class="nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
    </ul>
   </div>
  </nav> 
  <!-- End of Navigation -->

  <header class="jumbotron back-image" style="background-image: url(images/Banner1.jpg);">
    <div class="myclass mainHeading">
      <h1 class="text-uppercase text-primary font-weight-bold">
                                         Welcome to OCSP      </h1>
      <p class="font-italic"> Customer satisfaction, our top priority </p>
      
      <a href="Requester/RequesterLogin.php" class="btn btn-success mr-4"> Login </a>
      <a href="#registration" class="btn btn-primary mr-4"> Sign Up </a>
    </div>
  </header> 
  
  <div class="container">
    <!--Introduction Section-->
    <div class="jumbotron">
      <h3 class="text-center"> About Us </h3>
       <p>
       We are dedicated to deliver top-notch assistance for all your electronic product that 
       are baught from us. Whether you require online support or home services, 
       our team is committed to ensuring your devices are 
       well taken care of. We specialize in a wide range of electronic products, 
       providing comprehensive solutions tailored to meet your requirements. 
       Our goal is to enhance your experience with our prompt and reliable services, 
       ensuring your satisfaction every step of the way.
      </p>
    </div>
  </div>
  <!--Introduction Section End-->
  
 
 
 
 
 
 
  <!-- Start of What Services we Offer -->
  <div class="container text-center border-bottom" id="Services">
   <h2> Services We Offer </h2>
    <div class="row mt-4">
     <div class="col-sm-4 mb-4">
      <a href="#"><i class="fas fa-tv fa-8x text-success"></i></a>
      <h4 class="mt-4"> Desktop/TVs </h4>
      </div>
    <div class="col-sm-4 mb-4">
     <a href="#"><i class="fas fa-laptop fa-8x text-primary"></i></a>
     <h4 class="mt-4"> Laptop/PC </h4>
    </div>
    <div class="col-sm-4 mb-4">
        <a href="#"><i class="fas fa-mobile fa-8x text-info"></i></a>
        <h4 class="mt-4"> Mobiles </h4>
      </div>
    </div>
   </div> 
  <!-- End of Services We Offer -->



  
  <!-- Start Happy Customer  -->
  <div class="jumbotron bg-primary" id="Customer">
    <!-- Start Happy Customer Jumbotron -->
    <div class="container">
      <!-- Start Customer Container -->
      <h2 class="text-center text-white">Happy Customers</h2>
      <div class="row mt-5">
        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 1st Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar1.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title"> Rajeeb </h4>
              <p class="card-text"> "Services provided here are very good, 
                one can get their system repaired at home."
              </p>
            </div>
          </div>
        </div> <!-- End Customer 1st Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 2nd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar2.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title"> Sudhanshu  </h4>
              <p class="card-text"> "They provide very well known technician, 
                I requested a home service, it was very good" </p>
            </div>
          </div>
        </div> <!-- End Customer 2nd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 3rd Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar3.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title"> Sudhansu </h4>
              <p class="card-text"> "They provide offline type services at the 
                comfort of our home. I repaired many prodducts from them."
              </p>
            </div>
          </div>
        </div> <!-- End Customer 3rd Column-->

        <div class="col-lg-3 col-sm-6">
          <!-- Start Customer 4th Column-->
          <div class="card shadow-lg mb-2">
            <div class="card-body text-center">
              <img src="images/avtar4.jpeg" class="img-fluid" style="border-radius: 100px;">
              <h4 class="card-title"> David </h4>
              <p class="card-text"> "I did a display replacement at a very afforadble 
                price in my home. It was a good experience."
              </p>
            </div>
          </div>
        </div> <!-- End Customer 4th Column-->
      </div> <!-- End Customer Row-->
    </div> <!-- End Customer Container -->
  </div> <!-- End Customer Jumbotron -->

  
  
  
  <!--Start Contact Us-->
  <div class="container" id="Contact">
    <!--Start Contact Us Container-->
    <h2 class="text-center mb-4">Contact US</h2> <!-- Contact Us Heading -->
    <div class="row">

      <div class="col-md-4 text-center">
        <!-- Start Contact Us 2nd Column-->
        <strong>Headquarter:</strong> <br>
        anyCompany Pvt Ltd, <br>
        Sec IV, Bokaro <br>
        Utar Pradesh - 834005 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.anyCompany.com</a> <br>

        <br><br>
        <strong>Odisha Branch:</strong> <br>
        anyCompany Pvt Ltd, <br>
        Madanpur, Janla <br>
        Bhubaneswar - 804002 <br>
        Phone: +00000000 <br>
        <a href="#" target="_blank">www.anyCompany.com</a> <br>
      </div> <!-- End Contact Us 2nd Column-->
    </div> <!-- End Contact Us Row-->
  </div> <!-- End Contact Us Container-->
  <!-- End Contact Us -->


  <!-- Start Footer-->
  <footer class="container-fluid bg-dark text-white mt-5" style="border-top: 3px solid #DC3545;">
    <div class="container">
      <!-- Start Footer Container -->
      <div class="row py-3">
        <!-- Start Footer Row -->
        <div class="col-md-6">
          <!-- Start Footer 1st Column -->
          <span class="pr-2">Follow Us: </span>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-facebook-f"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-twitter"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-youtube"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fab fa-google-plus-g"></i></a>
          <a href="#" target="_blank" class="pr-2 fi-color"><i class="fas fa-rss"></i></a>
        </div> <!-- End Footer 1st Column -->

        <div class="col-md-6 text-right">
          <!-- Start Footer 2nd Column -->
          <small> 
            &copy; MCA Major Project by Sudhanshu, IMIT-Cuttack
          </small>
          <small class="ml-2"><a href="Admin/login.php">Admin Login</a></small>
        </div> <!-- End Footer 2nd Column -->
      </div> <!-- End Footer Row -->
    </div> <!-- End Footer Container -->
  </footer> <!-- End Footer -->

  
<!-- JavaScript -->
<script src="{{ asset('assets/js/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/all.min.js') }}"></script>

</body>
</html>