<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>:: Social Awarness ::</title>
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
    <!-- swiper css -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <!-- custom style css -->
    <link href="css/custom-style.css" rel="stylesheet">
    <!-- responsive css -->
    <link href="css/responsive.css" rel="stylesheet">
    <!-- modernizr js -->
    <script src="js/plugins/modernizr.js"></script>
  <!--[if lt IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a
          href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
  <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>
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
                                        <a href="campaign-participation.php">
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
                        <a class="navbar-brand" href="index.php">
                            <!-- <img src="assets/images/logo.png" loading="lazy" alt=""/> -->
                             <h3>SOCIAL AWARNESS</h3>
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
                                    <a class="nav-link" href="#two">Campaign</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#three">Contact Us</a>
                                </li>
                                <?php if(isset($_SESSION['uid'])):?>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="campaign-creation.php">Create Campaign</a>
                                    </li>
                                <?php else:?>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="login.php">Login</a>
                                        </li>
                                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                        <a class="nav-link" href="signup.php">Sign up</a>
                                    </li>
                                    
                                <?php endif?>
                            </ul>
                            <?php if(isset($_SESSION['uid'])):?>
                                <div class="dropdown">
                                    <button class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg></button>
                                    <div class="dropdown-content">
                                    <a href="user-dashboard.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg>My Account</a>
                                    <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>Sign Out</a>
                                    </div>
                                </div>
                            <?php endif?>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
</section>
<!------ topbar-area-end --------->