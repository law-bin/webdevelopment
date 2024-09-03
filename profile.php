<?php require_once 'include/dashhead.php'?>
<?php 
  require_once 'include/dbconnect.php';
  $uid =  $_SESSION['uid'];

  $query = "SELECT * FROM Users WHERE UserID = '$uid'";

  $sql = "SELECT * FROM userprofiles WHERE UserID = '$uid'";

  $result = mysqli_query($conn,$query);

  $res = mysqli_query($conn,$sql);


  $data = mysqli_fetch_assoc($result);

  $da = mysqli_fetch_assoc($res);


?>


<!------ campaign-overview-area-start --------->
<section class="campaign-overview">
  
  <div class="edit-profile">
    <div class="container">
      <div class="heading-center text-center">
        <h3>
          Edit Profile
        </h3>
        <p>
          Update your personal information
        </p>
        <?php if(isset($_SESSION['success'])):?>
            <div class="alert alert-success">
                <?php echo $_SESSION['success']; unset($_SESSION['success'])?>
            </div>
        <?php elseif(isset($_SESSION['error'])):?>
            <div class="alert alert-danger">
                <?php echo $_SESSION['error']; unset($_SESSION['error'])?>
            </div>
        <?php endif?>
      </div>
      <div class="edit-form-area">
        <form method="post" action="include/form.php" enctype="multipart/form-data">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group bottom-gap">
                <label>Full Name</label>
                <input type="text" class="form-control" name="fullname" placeholder="John Doe" value="<?php echo $data['Fullname']?>">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="johndoe@example.com" value="<?php echo $data['Email']?>">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <label>Bio</label>
                <input type="text" class="form-control" name="bio" placeholder="Tell us about yourself" value="<?php echo isset($da['Bio']) ? htmlspecialchars($da['Bio']) : ''; ?>">

              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <label>Profile Image</label>
                <input type="file" class="form-control" name="image" placeholder="Tell us about yourself"/>
              </div>
            </div>
          </div>
          <div class="button-area">
            <input type="submit" class="btn-black btn-primary" value="Save Changes" name="update">
        </div>
      </div>
        </form>
        
    </div>
  </div>
 
  <div class="footer-bottom">
    <p>© 2022 User Dashboard. All rights reserved.</p>
  </div>
</section>
<!------ campaign-overview-area-end --------->

<!-- scroll-to-top-area-start -->
<section id="scroll-top">
  <div id="stop" class="scrollTop">
      <span><a href="#">
        <i class="fas fa-arrow-up"></i>
      </a></span>
  </div>
</section>
<!-- scroll-to-top-area-end -->


<script src="js/plugins/jquery-3.4.1.min.js"></script>
<!-- popper js -->
<script src="js/plugins/popper.min.js"></script>
<!-- bootstrap js -->
<script src="js/plugins/bootstrap.min.js"></script>
<!--owl-carousel-js-->
<script src="js/plugins/owl.carousel.min.js"></script>
<!--chart-js-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<!--Swiper-slider-js-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- <script src="js/plugins/chart.min.js"></script>
<script src="js/plugins/chart-js-script.js"></script> -->
<!-- main js -->
<script src="js/main.js"></script>

</body>
</html>
