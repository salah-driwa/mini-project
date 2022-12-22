<?php
session_start();
require 'connexion.php';
if (isset($_POST['username']) && isset($_POST['password'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];
	$sql = "select * from users where username='$user' and password='$pass' ";
	$result = $cn->query($sql)->fetch();
	if($result)
	{
		$_SESSION['nom'] = $result['nom'];
		$_SESSION['prenom'] = $result['prenom'];
		header('location:client.php');
	}
	else $_SESSION['message']="login ou password incorrect";
}
?>

<!DOCTYPE html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://getbootstrap.com/docs/5.2/assets/css/docs.css" rel="stylesheet">
  <title>Bootstrap Example</title>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="navbar.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- jQuery CDN Link -->
  <script src="https://cdn.lordicon.com/qjzruarw.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <title>Transparent form</title>
</head>
 
<body>
  <!-- navbar -->

  <nav class="navbar indx1  navbar-light glass rounded-0 p-0 navbar-expand-md">
    <div class="container-fluid">
      <lord-icon
    src="https://cdn.lordicon.com/wxnxiano.json"
    trigger="morph"
    colors="primary:red,secondary:black"
    style="width:80px;height:80px">
</lord-icon>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarScroll">
        <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
      <div class="content ">
      
        <ul class="links ">
         
              <li >
            <a href="#" class="desktop-link rounded-4   ">lesson</a>
            
            <label for="show-features ">Features</label>
            <ul class="margin">
              <li c><a href="#" class="desktop-link px-4 py-2 ">1st year</a>
                <label for="show-items ">1st</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
              <li><a href="#" class="desktop-link px-4 py-2 ">2nd year</a>
                <label for="show-items ">2nd</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
              <li><a href="#" class="desktop-link px-4 py-2 ">3rd year</a>
                <label for="show-items">3rd</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li>
            <a href="#" class="desktop-link rounded-4">send</a>
            
            <label for="show-features ">send</label>
            <ul>
              <li><a href="#" class="desktop-link px-4 py-2 ">1st year</a>
                <label for="show-items ">1st</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
              <li><a href="#" class="desktop-link px-4 py-2 ">2nd year</a>
                <label for="show-items ">2nd</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
              <li><a href="#" class="desktop-link px-4 py-2 ">3rd year</a>
                <label for="show-items">3rd</label>
                <ul>
                  <li><a href="#">Computer Science</a></li>
                  <li><a href="#">Internet of Things</a></li>
                  <li><a href="#">Telecome</a></li>
                </ul>
              </li>
            </ul>
          </li>
          
          <li><a class="rounded-4"href="#">Feedback</a></li>
        </ul>
      </div>
     
        </ul>
        <form class="d-flex ">
          <input class="form-control glass me-2 input-search-bar" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>
  </nav>
    <!-- navbar -->

  <div class="container-fluid  indx ">
    <div class="row mt-5 " >
      <div class="col mt-5">
    <div class="form glass marginformleft ">
      <div class="btn login-button  ">
        <button class="signUpBtn">SIGN UP</button>
        <button class="loginBtn">LOG IN</button>
      </div>
      <form class="signUp" action="register_query.php" method="get">
        <div class="formGroup">
          <input type="text" id="userName" placeholder="User Name" autocomplete="off" name="username">
        </div>
        <div class="formGroup">
          <input type="email" placeholder="Email ID" name="email" required autocomplete="off"  name="email">
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required autocomplete="off" name="password">
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">I agree with term & conditions</span>
        </div>
        <div class="formGroup">
          <button type="button" class="btn2">REGISTER</button>
        </div>
 
      </form>
        
      <!------ Login Form -------- -->
      <form class="login" action="" method="get">
        
        <div class="formGroup">
          <input type="text" placeholder="Email ID"  required autocomplete="off" name='nom'>
        </div>
        <div class="formGroup">
          <input type="password" id="password" placeholder="Password" required autocomplete="off" name="password" >
         
        </div>
        <div class="checkBox">
          <input type="checkbox" name="checkbox" id="checkbox">
          <span class="text">Keep me signed in on this device</span>
        </div>
        <div class="formGroup">
          <button type="button" class="btn2" >REGISTER</button>
        </div>
      </form>
    </div>
  </div>
  </div>

<div class="row p-0 mt-5" >
  <div class="col p-0 mt-5">
    

<!-- Footer -->
<footer class="text-center text-lg-start    glass rounded-0">
  <!-- Section: Social media -->
  <section class="d-flex justify-content-center  justify-content-lg-between  border-bottom p-1">
    <!-- Left -->
    <div class="me-1 d-none d-lg-block pt-3">
      <span>Get connected with us on social networks:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div >       <div class="social-buttons">         <a href="#" class="social-button social-button--facebook" aria-label="Facebook" style="width: 40px;height: 40px;">           <i class="fab fa-facebook-f"></i>         </a>         <a href="#" class="social-button social-button--linkedin " aria-label="LinkedIn"  style="width: 40px;height: 40px;" >           <i class="fab fa-linkedin-in"></i>         </a>       </div>            </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3  ">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-2">
            <i class="fas fa-gem me-3"></i>Company name
          </h6>
          <p>
            Here you can use rows and columns to organize your footer content. Lorem ipsum
            dolor sit amet, consectetur adipisicing elit.
          </p>
        </div>
        <div class="col-md-1  mx-auto mb-4"><div class="vl"></div>
          </div>

        <!-- Grid column -->

        <!-- Grid column -->
        
        <!-- Grid column -->
       
        <!-- Grid column -->
        <div class="col-md-3  mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-2">
            Useful links
          </h6>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Pricing</a>
          </p>
          <p>
            <a href="#!" class="text-reset text-decoration-none">Settings</a>
          </p>
         
      
         
          <p>
            <a href="#!" class="text-reset text-decoration-none">Help</a>
          </p>
          
        </div>
        <!-- Grid column -->
      <div class="col-md-1  "><div class="vl1"></div>
          </div>

        <!-- Grid column -->
        <div class="col-md-3  mb-md-0 mb-4 ">
          <!-- Links -->
        
          <h6 class="text-uppercase fw-bold mb-2">Contact</h6>
          <p><i class="fas fa-home me-3"></i> New York, NY 10012, US</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            info@example.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 01 234 567 88</p>
          <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->

  <!-- Copyright -->
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



  </div>






</div>
</div>










  
 
  <script src="jQuery.js"></script>
 
</body>
 
</html>






    