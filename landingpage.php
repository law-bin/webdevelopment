<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
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
                             <h3> ROAD SAFETY- A SOCIAL CAUSE S</h3>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                                aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav center-area ml-auto py-4 py-md-0">
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                                    <a class="nav-link" href="landingpage.php">Home</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#one">About Us</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#two">Road Safety and Awareness</a>
                                </li>
                                <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                    <a class="nav-link" href="#four">Events</a>
                                </li> 
                              <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                                  <a class="nav-link" href="#three">Contact Us</a>
                              </li>
                              
                            </li>
                            
                            </li>
                           
                            </ul>
                            <div class="dropdown">
                                <button class="dropbtn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg></button>
                                <div class="dropdown-content">
                                  <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M12 2a5 5 0 1 0 5 5 5 5 0 0 0-5-5zm0 8a3 3 0 1 1 3-3 3 3 0 0 1-3 3zm9 11v-1a7 7 0 0 0-7-7h-4a7 7 0 0 0-7 7v1h2v-1a5 5 0 0 1 5-5h4a5 5 0 0 1 5 5v1z"></path></svg><?php echo $_SESSION['username']; ?></a>
                                  <a href="logout.php"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"><path d="M16 13v-2H7V8l-5 4 5 4v-3z"></path><path d="M20 3h-9c-1.103 0-2 .897-2 2v4h2V5h9v14h-9v-4H9v4c0 1.103.897 2 2 2h9c1.103 0 2-.897 2-2V5c0-1.103-.897-2-2-2z"></path></svg>Sign Out</a>
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

<!------ banner-area-start --------->
<section class="banner-new">
    <div class="row">
        <div class="container-fluid">
            <div class="banner-new-pic">
                <img src="images/main-banner-1.jpg" loading="lazy" alt="Banner_pic"/>
                <div class="caption-banner">
                    <h3>
                        Speeding, distracted driving, and reckless behavior put lives at risk. Let’s change that!
                    </h3>
                    <div class="button-area">
                        <a href="#" class="header_btn_a">health care</a>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>
<!------ banner-area-end --------->

<!------ about-us-area-start --------->
    <section class="who_we_area p-bottom-80" id="one">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>About Us</h2>        
        </div>
                </div>
            </div>
            <div class="bg-white">
                <div class="row about-wrap">
                    <div class="col-lg-6">
                        <div class="aboutsection">
                            <div class="aboutimg first">
                                <img src="images/about-1.jpg" loading="lazy" alt="image">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="who_content">
                            <div class="who_content_1">
                                <!-- <h2 class="heading_h2">Who We Are?</h2> -->
                                <p class="service_p p-top-8">Welcome to our social awareness website. We are dedicated to raising awareness and driving change on critical social issues. Our mission is to inform, inspire, and mobilize communities to take action and make a positive impact.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!------ about-us-area-end --------->


<!------ who-we-area-start --------->
        <section class="who_we_area p-bottom-80" style="padding-bottom: 90px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="heading">
                            <h2>Who We Are</h2>        
            </div>
                    </div>
                </div>
                <div class="bg-white">
                    <div class="row about-wrap">
                        <!-- <div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="who_img_div">
                                <img src="images/about-2.jpg" alt="image" class="who-image">
                            </div>
                        </div> -->
                        <div class="col-lg-6">
                            <div class="aboutsection">
                                <div class="aboutimg first">
                                    <img src="images/about-2.jpg" loading="lazy" alt="image">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="who_content">
                                <div class="who_content_1">
                                    <!-- <h2 class="heading_h2">Who We Are?</h2> -->
                                    <p class="service_p p-top-8">We are a passionate team of advocates, educators, and community leaders committed to addressing pressing social issues. Through education, advocacy, and collaboration, we strive to create a more just and equitable world for all.</p>
                            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!------ who-we-area-end --------->

<!------ Campaign-area-start --------->
<section class="events_area  p-bottom-80" id="two">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Road Safety and Awareness</h2>
        <p class="short-txt">Join us in our latest campaign to combat [specific issue]. We believe that collective action can bring about significant change. Learn more about how you can get involved, spread the word, and support our cause.</p>
        
        </div>
                </div>

                <div class="col-lg-12">
                    <div class="Campaign-tab">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                              <a class="nav-link active" id="driver-tab" data-toggle="tab" href="#driver" role="tab" aria-controls="driver" aria-selected="true">Drivers</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="Pedes-tab" data-toggle="tab" href="#Pedes" role="tab" aria-controls="Pedes" aria-selected="false">Pedestrians</a>
                            </li>
                            <li class="nav-item">
                              <a class="nav-link" id="Cyclists-tab" data-toggle="tab" href="#Cyclists" role="tab" aria-controls="Cyclists" aria-selected="false">Cyclists</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="rules-tab" data-toggle="tab" href="#rules" role="tab" aria-controls="rules" aria-selected="false">Australian road safety rules</a>
                              </li>
                          </ul>
                          <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="driver" role="tabpanel" aria-labelledby="driver-tab">
                              <div class="new-tab-content">
                                <ul>
                                    <li>
                                        <div class="left-pic">
                                            <a href="https://www.roadsafety.gov.au/" target="_blank">
                                                <img src="images/drivers-pic.jpg" loading="lazy" alt="tab_one"/>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="right-part">
                                            <ul class="inner">
                                                <li class="inner">
                                                    <i class="fas fa-dot-circle"></i>
                                                    <span>Adhere to Speed Limits: </span>
                                                    Follow posted speed limits to ensure you have enough time to react to unexpected situations. Learn More
                                                </li>
                                                <li class="inner">
                                                    <i class="fas fa-dot-circle"></i>
                                                    <span>Avoid Distractions: </span>
                                                    Keep your focus on the road by avoiding phone use and other distractions. Safe Driving Tips
                                                </li>
                                                <li class="inner">
                                                    <i class="fas fa-dot-circle"></i>
                                                    <span>Always Wear a Seatbelt: </span>
                                                    Ensure that everyone in your vehicle is wearing a seatbelt. It’s a simple step that significantly reduces injury risk. Seatbelt Laws
                                                </li>
                                                <div class="button-area">
                                                    <a href="https://www.roadsafety.gov.au/" target="_blank" class="header_btn_a">Read More</a>
                                                </div>
                                             </ul>
                                        </div>
                                    </li>
                                </ul>
                              </div>
                            </div>
                            <div class="tab-pane fade" id="Pedes" role="tabpanel" aria-labelledby="Pedes-tab">
                                <div class="new-tab-content">
                                    <ul>
                                        <li>
                                            <div class="left-pic">
                                                <a href="https://www.infrastructure.gov.au/infrastructure-transport-vehicles/road-transport-infrastructure/road-safety#:~:text=The%20Australian%20Government%20takes%20road,by%202050%20(Vision%20Zero)" target="_blank">
                                                    <img src="images/about-1.jpg" loading="lazy" alt="tab_one"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right-part">
                                                <ul class="inner">
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Use Crosswalks: </span>
                                                        Always cross at designated crosswalks and wait for the pedestrian signal. Pedestrian Safety
                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Stay Alert: </span>
                                                        Avoid distractions such as using your phone while crossing the street. Walk Safely
                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Be Visible: </span>
                                                        Wear bright clothing and use reflective gear in low-light conditions. Visibility Tips
                                                    </li>
                                                    <div class="button-area">
                                                        <a href="https://www.infrastructure.gov.au/infrastructure-transport-vehicles/road-transport-infrastructure/road-safety#:~:text=The%20Australian%20Government%20takes%20road,by%202050%20(Vision%20Zero)" target="_blank" class="header_btn_a">Read More</a>
                                                    </div>
                                                 </ul>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="Cyclists" role="tabpanel" aria-labelledby="Cyclists-tab">
                                <div class="new-tab-content">
                                    <ul>
                                        <li>
                                            <div class="left-pic">
                                                <a href="https://www.roadsafety.gov.au/rsa" target="_blank">
                                                    <img src="images/Cyclists.webp" loading="lazy" alt="tab_one"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right-part">
                                                <ul class="inner">
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Wear a Helmet: </span>
                                                        Helmets significantly reduce the risk of head injuries. Helmet Laws
                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Use Bike Lanes: </span>
                                                        Where available, use designated bike lanes for safer travel. Bike Lane Info
                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Signal Turns: </span>
                                                        Always use hand signals to indicate your turns and stops to other road users. Cyclist Safety
                                                    </li>
                                                    <div class="button-area">
                                                        <a href="https://www.roadsafety.gov.au/rsa" target="_blank" class="header_btn_a">Read More</a>
                                                    </div>
                                                 </ul>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                            </div>
                            <div class="tab-pane fade" id="rules" role="tabpanel" aria-labelledby="rules-tab">
                                <div class="new-tab-content">
                                    <ul>
                                        <li>
                                            <div class="left-pic">
                                                <a href="https://www.roadsafety.gov.au/" target="_blank">
                                                    <img src="images/campaign-1.jpg" loading="lazy" alt="tab_one"/>
                                                </a>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="right-part">
                                                <ul class="inner">
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Speed Limits: </span>
                                                        Adhere to posted speed limits to give yourself enough time to react to any hazards.
                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Avoid Distractions: </span>
                                                        Keep your attention on driving—using your phone or other distractions while driving is illegal. Safe Driving Tips

                                                    </li>
                                                    <li class="inner">
                                                        <i class="fas fa-dot-circle"></i>
                                                        <span>Seatbelts: </span>
                                                        Ensure all vehicle occupants wear seatbelts at all times. This simple step greatly reduces the risk of injury. Seatbelt Laws

                                                    </li>
                                                    <div class="button-area">
                                                        <a href="https://www.roadsafety.gov.au/" target="_blank" class="header_btn_a">Read More</a>
                                                    </div>
                                                 </ul>
                                            </div>
                                        </li>
                                    </ul>
                                  </div>
                            </div>
                          </div>
                    </div>
                 
                </div>
            </div>
        </div>
    </section>
<!------ Campaign-area-end --------->
<!---events ---->
<section class="contact_area p-bottom-80" id="four">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Events</h2>
        </div>
                </div>
            </div>
            <div class="row align-items-center">
           
    <br><br>
    
    <div class="row">

    
        <style>.events-section {
    padding: 50px 0;
    text-align: center;
}

.events-section .heading h2 {
    font-size: 2em;
    margin-bottom: 10px;
}

.events-section .heading p {
    font-size: 1.2em;
    margin-bottom: 30px;
}

.event-card {
    background: #fff;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-bottom: 30px;
    text-align: left;
}

.event-card img {
    width: 100%;
    height: 200px;
    object-fit: cover;
}

.event-info {
    padding: 15px;
}

.event-info h3 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.event-info p {
    margin-bottom: 8px;
}

.event-link {
    display: inline-block;
    margin-top: 10px;
    color: #ff7e29;
    text-decoration: none;
    font-weight: bold;
}

.event-link:hover {
    text-decoration: underline;
}

</style>




<section class="contact_area p-bottom-80" id="four">
<?php
    $host = "localhost";
    $dbuser = "root";
    $dbpass = "Red1!@#$";
    $dbase = "webpagedb";

    $dbc = mysqli_connect($host, $dbuser, $dbpass, $dbase)
        or die("Unable to select database");
?>
    <div class="container">
        <div class="row align-items-center">
            <?php
            $query1 = "SELECT * FROM events";
            $exe1 = mysqli_query($dbc, $query1);
            while ($row1 = mysqli_fetch_array($exe1)) {
                $name = $row1['name'];
                $desc = $row1['description'];
                $type = $row1['type'];
                $date = $row1['date'];
                $time = $row1['time'];
               
                echo "
                <div class='col-md-4'>
                    <div class='event-card'>
                        
                        <div class='event-info'>
                            <h3>$name</h3>
                            <p>$desc</p>
                            <p>Type: $type</p>
                            <p>Date: $date</p>
                            <p>Time: $time</p>
                            
                        </div>
                    </div>
                </div>";
            }
            ?>
        </div>
    </div>
</section>
        </div>
        
    </div>

    <div class="center-button">
<a href="components\event_request\event_request.php" class="header_btn_a">Create Events?</a>
  </div>
</section>

<!----eventsend-->


<!------ contact-area-start --------->
    <section class="contact_area p-bottom-80" id="three">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="heading">
                        <h2>Contact Us</h2>
        </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <div class="contact_content_outer">
                        <div class="contact_card">
                            <h6 class="contact_h6">Phone</h6>
                            <div class="contact_card_1">

                                <div class="contact_icon_div">
                                    <span><i class="fa fa-phone contact_icon" aria-hidden="true"></i></span>
                                </div>
                                <div class="contact_content">

                                    <ul class="contact_ul">
                                        <li class="contact_li"><a class="contact-infor" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact_card">
                            <h6 class="contact_h6">Email</h6>
                            <div class="contact_card_1">

                                <div class="contact_icon_div">
                                    <span><i class="fa fa-envelope contact_icon" aria-hidden="true"></i></span>
                                </div>
                                <div class="contact_content">

                                    <ul class="contact_ul">
                                        <li class="contact_li"><a class="contact-infor" href="#"></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="contact_card">
                            <h6 class="contact_h6">Address</h6>
                            <div class="contact_card_1">

                                <div class="contact_icon_div">
                                    <span> <i class="fas fa-map-marker-alt"></i></span>
                                </div>
                                <div class="contact_content">

                                    <ul class="contact_ul">
                                        <li class="contact_li">Australia</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 col-sm-12">
                    <div class="contact_image_div">
                        <img src="images/contact-us-image-1.jpg" alt="contact-img" class="contact-img">
                    </div>
                </div>
            </div>
        </div>
    </section>
<!------ contact-area-end --------->


<!------ footer-area-start --------->
<footer id="footer-area">
   
    <div class="row">
    <div class="col-md-4">
      <div class="footer-area-inner-content">
        <div class="logo-area">
        <a href="index.html">
        <!-- <img src="images/footer-logo.png" loading="lazy" alt=""> -->
         <h3> ROAD SAFETY- A SOCIAL CAUSE </h3>
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
    <a href="#one">About us</a>
    </li>
    <li>
    <i class="fas fa-angle-double-right"></i>
    <a href="#two">Events</a>
    </li>

    <!-- <li>
        <i class="fas fa-angle-double-right"></i>
        <a href="#">Gallery</a>
        </li> -->
      
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
            <p> Copyright © <span class="year"></span>  ROAD SAFETY- A SOCIAL CAUSE  / All Rights Reserved. <a href="#" target="_blank"></a></p>
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
<!-- swiper js -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<!-- main js -->
<script src="js/custom-main.js"></script>


<script>
// home-page-main-banner-area-start //
var mySwiper = new Swiper('.mySwiper', {
  direction: 'horizontal',
  loop: true,
  centeredSlides: true,
  
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
    dynamicBullets: true,
  },

  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  autoplay: {
    delay: 5000,
    disableOnInteraction: false,
  },

  speed: 1000,
  effect: 'fade',
  fadeEffect: {
        crossFade: true,
   },
});
// home-page-main-banner-area-start //
</script>
</body>
</html>