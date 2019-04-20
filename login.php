<?php
session_start();
require_once('connect.php');
if(isset($_POST) & !empty($_POST))
{
  $username=mysqli_real_escape_string($connection, $_POST['username']);
  $password=md5($_POST['password']);

  $sql="SELECT * FROM userinfo WHERE username='$username' AND password='$password'";
  $result=mysqli_query($connection, $sql);
  $count=mysqli_num_rows($result);

  if($count==1)
  {
    $_SESSION['username'] = $username;
    header("Location: account-info.php");
  }
  else
  {
    $fmsg = "Invalid username/password";
  }

}
  if(isset($_SESSION['username']))
  {
    $smsg = "User already logged in";
  }
?>


<!DOCTYPE html>
<html lang="en">
<head>

  <!-- SITE TITTLE -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bookseeking - Login</title>
  
  <!-- PLUGINS CSS STYLE -->
  <link href="plugins/jquery-ui/jquery-ui.min.css" rel="stylesheet">
  <!-- Bootstrap -->
  <link href="plugins/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- Owl Carousel -->
  <link href="plugins/slick-carousel/slick/slick.css" rel="stylesheet">
  <link href="plugins/slick-carousel/slick/slick-theme.css" rel="stylesheet">
  <!-- Fancy Box -->
  <link href="plugins/fancybox/jquery.fancybox.pack.css" rel="stylesheet">
  <link href="plugins/jquery-nice-select/css/nice-select.css" rel="stylesheet">
  <link href="plugins/seiyria-bootstrap-slider/dist/css/bootstrap-slider.min.css" rel="stylesheet">
  <!-- CUSTOM CSS -->
  <link href="css/style.css" rel="stylesheet">

  <!-- FAVICON -->
  <link href="img/favicon.png" rel="shortcut icon">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

</head>

<body class="body-wrapper">

<!-- Header Area Starts -->
<section>
  <div class="container" style="height: 160px; margin-top: -100px; margin-bottom:90px;" >
    <div class="row">
      <div class="col-md-12">
        <nav class="navbar navbar-expand-lg  navigation">
          <a class="navbar-brand" href="index.html">
            <img style="height:280px; width:280px;" src="images/logo.png" alt="">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto main-nav ">
              <li class="nav-item active">
                <a class="nav-link" href="index.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="all-posts.html">All Books</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="account-info.php">Dashboard</a>
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Categories <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="category.html">Engineering</a>
                  <a class="dropdown-item" href="single.html">Business</a>
                  <a class="dropdown-item" href="store-single.html">English</a>
                  <a class="dropdown-item" href="dashboard.html">Comics</a>
                  <a class="dropdown-item" href="user-profile.html">Novels</a>
                  <a class="dropdown-item" href="submit-coupon.html">Poems</a>
                  <a class="dropdown-item" href="blog.html">Travel</a>
                  <a class="dropdown-item" href="single-blog.html">Religious</a>
                </div>
              </li>
              <li class="nav-item dropdown dropdown-slide">
                <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Deals <span><i class="fa fa-angle-down"></i></span>
                </a>
                <!-- Dropdown list -->
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="#">Buy</a>
                  <a class="dropdown-item" href="#">Sell</a>
                  <a class="dropdown-item" href="#">Borrow</a>
                  <a class="dropdown-item" href="#">Exchange</a>
                  <a class="dropdown-item" href="#">Lend</a>
                </div>
              </li>
            </ul>
            <ul class="navbar-nav ml-auto mt-10">
              
              <li class="nav-item">
                <a class="nav-link add-button" href="login.php"><i class="fa fa-plus-circle"></i> Add Post</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
</section>
<!-- Header Area Ends -->


        <!-- Content section Start --> 
    <section id="content" style="margin-bottom: 50px;">
      <div class="container text-center">
        <div class="row">
          <div class="col-md-3"></div> 
          <div class="col-md-6" "col-md-offset-6" style="background-color:light;">
            <div class="page-login-form box">

             <!-- PHP Alert Box starts -->
                  <?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
      <?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
            <!-- PHP Alert Box ends -->

              <div class="col-md-3"></div>
              <h3 style="margin-bottom: 20px;">
                Login
              </h3>
              <form method="POST" action="login.php" role="form" class="login-form">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-user"></i>
                    <input type="text" style="text-align:center" id="username" class="form-control" name="username" placeholder="Username" required>
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon fa fa-unlock-alt"></i>
                    <input type="password" style="text-align:center" class="form-control" name="password" id="password" placeholder="Password" required>
                  </div>
                </div>                  
                <div class="checkbox">
                  <input type="checkbox" id="remember" name="rememberme" value="forever" style="float: center;">
                  <label for="remember">Remember me</label>
                </div>
                <button class="btn btn-success" style="background-color:green; margin-bottom: 20px; margin-top: 20px;">Submit</button>
              </form>
              <ul class="form-links"">
                <li class="pull-left"><a href="signup.php">Don't have an account?</a></li>
                <li class="pull-right"><a href="forget-password.html">Lost your password?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 




<!--============================
=            Footer            =
=============================-->

<footer class="footer section section-sm">
  <!-- Container Start -->
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-7 offset-md-1 offset-lg-0">
        <!-- About -->
        <div class="block about">
          <!-- footer logo -->
          <img src="images/logo.png" alt="" style="width: 200px; height:80px;">
          <!-- description -->
          <p class="alt-color">Bookseeking is an online platform where users can exchange books with other users and also borrow, lend, buy and sell books online. </p>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 offset-lg-1 col-md-3">
        <div class="block"  style="margin-top:40px">
          
          <ul>
            <li><a href="#">About us</a></li>
            <li><a href="#">Contact us</a></li>
            <li><a href="#">Deals & Coupons</a></li>
            <li><a href="#">Articls & Tips</a></li>
            <li><a href="#">Terms of Services</a></li>
          </ul>
        </div>
      </div>
      <!-- Link list -->
      <div class="col-lg-2 col-md-3 offset-md-1 offset-lg-0">
        <div class="block" style="margin-top:40px">
          
          <ul>
            <li><a href="#">Browse categories</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">Donate</a></li>
          </ul>
        </div>
      </div>
      <!-- Promotion -->
      <div class="col-lg-4 col-md-7" style="margin-top:42px;">
        <!-- App promotion -->
        <div class="block-2 app-promotion">
          <a href="">
            <!-- Icon -->
            <img src="images/footer/phone-icon.png" alt="mobile-icon" >
          </a>
          <p>Get the BookSeeking Mobile App </p>
        </div>
      </div>
    </div>
  </div>
  <!-- Container End -->
</footer>
<!-- Footer Bottom -->
<footer class="footer-bottom">
    <!-- Container Start -->
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-12">
          <!-- Copyright -->
          <div class="copyright">
            <p>Copyright © 2017. All Rights Reserved</p>
          </div>
        </div>
        <div class="col-sm-6 col-12">
          <!-- Social Icons -->
          <ul class="social-media-icons text-right">
              <li><a class="fa fa-facebook" href=""></a></li>
              <li><a class="fa fa-twitter" href=""></a></li>
              <li><a class="fa fa-pinterest-p" href=""></a></li>
              <li><a class="fa fa-vimeo" href=""></a></li>
            </ul>
        </div>
      </div>
    </div>
    <!-- Container End -->
    <!-- To Top -->
    <div class="top-to">
      <a id="top" class="" href=""><i class="fa fa-angle-up"></i></a>
    </div>
</footer>

  <!-- JAVASCRIPTS -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <script src="plugins/tether/js/tether.min.js"></script>
  <script src="plugins/raty/jquery.raty-fa.js"></script>
  <script src="plugins/bootstrap/dist/js/popper.min.js"></script>
  <script src="plugins/bootstrap/dist/js/bootstrap.min.js"></script>
  <script src="plugins/seiyria-bootstrap-slider/dist/bootstrap-slider.min.js"></script>
  <script src="plugins/slick-carousel/slick/slick.min.js"></script>
  <script src="plugins/jquery-nice-select/js/jquery.nice-select.min.js"></script>
  <script src="plugins/fancybox/jquery.fancybox.pack.js"></script>
  <script src="plugins/smoothscroll/SmoothScroll.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
  <script src="js/scripts.js"></script>

</body>
</html>



