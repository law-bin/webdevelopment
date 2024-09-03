<?php
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";

    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
    ?>



<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: ROAD SAFETY- A SOCIAL CAUSE ::</title>
  <!-- favicon icon -->
  <!-- <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/favicon.png"> -->
    <!-- bootstrap css -->
    <link href="css/plugins/bootstrap.min.css" rel="stylesheet">
    <!-- fontawesome css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- lineicons css -->
    <link rel="stylesheet" href="https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css">
     <!-- google font -->
     <link rel="preconnect" href="https://fonts.googleapis.com">
     <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
     <link href="https://fonts.googleapis.com/css2?family=Marcellus&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
    <!--owl-carousel-css-->
    <link href="css/plugins/owl.carousel.min.css" rel="stylesheet">
    <link href="css/plugins/owl.theme.default.min.css" rel="stylesheet">
    <!-- custom style css -->
    <link href="css/custom-style.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="js/plugins/modernizr.js"></script>

    <script>
        function validatePasswords() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm_password").value;
            var errorMessage = document.getElementById("error-message");
            var submitButton = document.getElementById("submit-button");

            if (password !== confirmPassword || password === "" || confirmPassword === "") {
                errorMessage.style.display = "block"; // Show error message
                submitButton.disabled = true; // Disable the submit button
            } else {
                errorMessage.style.display = "none"; // Hide error message
                submitButton.disabled = false; // Enable the submit button
            }
        }
    </script>
  <!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
          href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
<style>
        .form-submit-area {
            text-align: center; /* Center-align the container */
        }

        .form-control {
            margin-bottom: 15px; /* Add space between form elements */
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
        }

        .error-message {
            color: red;
            font-size: 14px;
            display: none; /* Hidden by default */
        }

        .form-submit-area input[type="submit"]:disabled {
            background-color: #cccccc; /* Grey color when disabled */
            cursor: not-allowed; /* Not-allowed cursor when disabled */
        }
    </style>
<body>

<!------ topbar-area-start --------->
<section class="topmain">
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-9">
                    <div class="top-bar-left">
                        <ul>
                            <li>
                                <a href="tel:+123 123456789">
                                    <i class="fa fa-mobile" aria-hidden="true"></i>+123 123456789</a>
                                    
                                </li>
                                <li>
                                    <a href="mailto:example@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>example@gmail.com</a>
                                    </li>
                                    <li>
                                        <a href="campaign-participation.html">
                                          <i class="fas fa-hand-holding-usd"></i>Donate</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-3">
                            <div class="top-bar-right">
                                <ul>
                                    <li>
                                        <a href="https://facebook.com/" class="icon-facebook" data-placement="bottom" data-toggle="tooltip" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://x.com/" class="icon-twitter" data-placement="bottom" data-toggle="tooltip" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                                    </li>
                                    <li><a href="https://www.instagram.com/" class="icon-instagram" data-placement="bottom" data-toggle="tooltip" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a>
                                    </li>
                                    <li>
                                        <a href="https://www.youtube.com/" class="icon-google" data-placement="bottom" data-toggle="tooltip" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a>
                                    </li>
                                    <li><a href="https://www.linkedin.com" class="icon-linkedin" data-placement="bottom" data-toggle="tooltip" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                                    </li>
                                  
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
    </section>
    <header id="menu-area">
        <div class="navigation-wrap start-header start-style">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="index.html">
                            <!-- <img src="assets/images/logo.png" loading="lazy" alt=""/> -->
                             <h3>ROAD SAFETY- A SOCIAL CAUSE</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav center-area ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="index.php">Home</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#one">About Us</a>
                                </li>
                               
                             
                               
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                  <a class="nav-link" href="#three">Contact Us</a>
                              </li>
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="login.php">Login</a>
                            </li>
                            <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                <a class="nav-link" href="signup.php">Sign up</a>
                            </li>
                            
                            </ul>
                            <div class="dropdown">
                                <button class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg></button>
                                <div class="dropdown-content">
                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>My Account</a>
                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>Sign Out</a>
                                </div>
                              </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</section>
<!------ topbar-area-end --------->

<!------ signup-area-start --------->
<section class="login-area section">
  <div class="container">
    <div class="main-form-area">
      <div class="logo-area">
        <h3>ROAD SAFETY- A SOCIAL CAUSE</h3>
        <p>Please fill the below details to create your account</p>
      </div>

      <form method="POST" action="signup_process.php" onsubmit="return validatePassword()">
        <label for="Username">Username</label>
        <input type="text" id="Username" name="Username" class="form-control" placeholder="Enter Username" required>
        <div class="error-message" id="usernameError"></div>

        <label for="Mobile">Mobile</label>
        <input type="int" id="Mobile" name="Mobile" class="form-control" placeholder="Enter Phone Number" required>
        <div class="error-message" id="mobileError"></div>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" class="form-control" placeholder="Enter Email Address" required>
        <div class="error-message" id="emailError"></div>

        <label for="password">Password</label>
        <input type="password" id="password" name="passwordHash" class="form-control" placeholder="Enter Password" required>
        <div class="error-message" id="passwordError"></div>

        <label for="confirm_password">Confirm Password</label>
        <input type="password" id="confirm_password" name="confirm_password" class="form-control" placeholder="Confirm Password" required>
        <div class="error-message" id="confirmPasswordError"></div>

        <div class="form-submit-area">
          <input type="submit" value="Sign Up" id="submit-button">
        </div>

      </form>

      <div class="signup-wrap">
        <p>
          Already have an account?
          <a href="login.php">Sign in here</a>
        </p>
      </div>
      <div class="login-separater text-center mb-5">
        <span>OR SIGN IN WITH</span>
        <hr>
      </div>
      <div class="list-inline contacts-social text-center">
      <a href="https://www.facebook.com/" class="list-inline-item bg-facebook text-white border-0 rounded-3" data-placement="top" data-toggle="tooltip" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a>
                <a href="https://x.com/" class="list-inline-item bg-twitter text-white border-0 rounded-3" data-placement="top" data-toggle="tooltip" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="https://www.google.com/" class="list-inline-item bg-google text-white border-0 rounded-3" data-placement="top" data-toggle="tooltip" title="Google Plus" target="_blank"><i class="fab fa-google"></i></a>
                <a href="https://www.linkedin.com/" class="list-inline-item bg-linkedin text-white border-0 rounded-3" data-placement="top" data-toggle="tooltip" title="Linkedin-in" target="_blank"><i class="fab fa-linkedin-in"></i></a>
        </div>
    </div>
  </div>
</section>


<!------ signup-area-end --------->
<head>
  <script>
    function validatePassword() {
  const username = document.getElementById('Username').value;
  const mobile = document.getElementById('Mobile').value;
  const email = document.getElementById('email').value;
  const password   
 = document.getElementById('password').value;
  const confirmPassword = document.getElementById('confirm_password').value;   


  const usernameError = document.getElementById('usernameError');
  const mobileError = document.getElementById('mobileError');
  const emailError = document.getElementById('emailError');
  const passwordError = document.getElementById('passwordError');   

  const confirmPasswordError = document.getElementById('confirmPasswordError');   


  // Clear previous error messages
  usernameError.textContent = '';
  mobileError.textContent = '';
  emailError.textContent = '';
  passwordError.textContent = '';
  confirmPasswordError.textContent = '';

  // Basic validation for required fields using HTML5 required attribute
  // Browser will display default message for empty fields

  // Password match check and custom error message
  if (password !== confirmPassword) {
    confirmPasswordError.textContent = 'Passwords do not match';
    return false;
  }

  return true; // Allow form submission if all checks pass
}
  </script>
</head>
<body>
  </body>

<!------ footer-area-start --------->
<footer id="footer-area">
    
    <div class="row">
    <div class="col-md-4">
      <div class="footer-area-inner-content">
        <div class="logo-area">
        <a href="index.php">
        <!-- <img src="images/footer-logo.png" loading="lazy" alt=""> -->
         <h3>SOCIAL AWARNESS</h3>
        </a>
        </div>
      <p>
        Thank you for visiting our Social Awareness website. Your support is vital to our mission of creating a more just and equitable world. Connect with us on social media, subscribe to our newsletter, and get involved in our campaigns. Together, we can drive change.
      </p>
        </div>
    </div>
    <div class="col-md-4">
    <div class="footer-area-inner-content">
    <h4>Quick Links</h4>
    <ul class="quick-links">
    <li>
    <i class="fas fa-angle-double-right"></i>
    <a href="index.php">Home</a></li>
    <li>
    <i class="fas fa-angle-double-right"></i>
    <a href="#one">About</a>
    </li>
    <li>
    <i class="fas fa-angle-double-right"></i>
    <a href="#two"> Events</a>
    </li>

    <!-- <li>
        <i class="fas fa-angle-double-right"></i>
        <a href="#">Gallery</a>
        </li> -->
        <li>
            <i class="fas fa-angle-double-right"></i>
            <a href="login.php">Login</a>
        </li>
        <li>
            <i class="fas fa-angle-double-right"></i>
            <a href="signup.php">Signup</a>
        </li>
        <li>
          <i class="fas fa-angle-double-right"></i>
          <a href="#three">Contact Us</a>
          </li>
    <li>
      </li>
    </ul>
    </div>
    </div>
 
    <div class="col-md-4">
    <div class="footer-area-inner-content">
    <h4>Contact us</h4>
    <ul class="quick-links">
    <li class="media">
    <i class="fas fa-map-marker-alt"></i>
    <div class="media-body">
    <a class="borderhide" href="#">
        ABC Raod, AB Colony
    </a>
    </div>
    </li>
    <li class="media">
    <i class="far fa-envelope"></i>
    <div class="media-body">
    <a class="borderhide" href="mailto:example@gmail.com">
       example@gmail.com
    </a>
    </div>
    </li>
    <li class="media">
    <i class="fas fa-mobile-alt"></i>
    <div class="media-body">
    <a class="borderhide" href="tel:+123 123456789">  
        +123 123456789
    </a>
    </div>
    </li>
    </ul>
    <h4>Get in Touch:</h4>
    <ul class="social-links">
    <li><a href="https://www.facebook.com/" data-placement="top" data-toggle="tooltip" title="Facebook" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
    <li><a href="https://www.twitter.com" data-toggle="tooltip" title="Twitter" target="_blank"><i class="fab fa-twitter"></i></a></li>
    <li><a href="https://www.instagram.com/" data-toggle="tooltip" title="Instagram" target="_blank"><i class="fab fa-instagram"></i></a></li>
    <li><a href="https://www.youtube.com/" data-toggle="tooltip" title="Youtube" target="_blank"><i class="fab fa-youtube"></i></a></li>
    <li><a href="https://www.linkedin.com" data-toggle="tooltip" title="Linkedin" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
    </ul>
    </div>
    </div>
    <div class="footer-bottom">
        <div class="col-md-12">
        <div class="copy-right">
            <p> Copyright © <span class="year"></span> SOCIAL AWARNESS / All Rights Reserved. <a href="#" target="_blank"></a></p>
        </div>
        </div>
        </div>
    </div>
    </div>
</footer>
<!------ footer-area-end --------->

<!------ scroll-to-top-area-start ------->
<section id="scroll-top">
    <div id="stop" class="scrollTop">
        <span><a href="#">
          <i class="fas fa-arrow-up"></i>
        </a></span>
    </div>
  </section>
<!------ scroll-to-top-area-end ------->


<script src="js/plugins/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/plugins/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/plugins/bootstrap.min.js"></script>
<!--owl-carousel-js-->
<script src="js/plugins/owl.carousel.min.js"></script>
<!-- main js -->
<script src="js/custom-main.js"></script>
</body>
</html>
