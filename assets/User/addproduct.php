<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Add Products</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  
  <!-- Favicons -->
  <link href="assets/img/Picture2.png" rel="icon">
  <link href="assets/img/Picture2.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style1.css" rel="stylesheet">
  

  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    <section id="portfolio" class="portfolio" style="padding-bottom: 0px;">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2 style="padding-top: 20px;">Add Your Products</h2>
            <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>

          </div>
        </div>
      </section>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages" style="font-family:Jost, sans-serif;">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto" style="font-family:Jost, sans-serif;"><a href="index.html">House To Go</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block" style="font-family:Jost, sans-serif;">
        <ul>
          <li><a href="user.php">Home</a></li>
          <li class="active"><a href="#portfolio">Products</a></li>
          <li><a href="Team.html">Team</a></li>
          <li><a href="profile.php">Profile</a></li>
          <!--<li class="drop-down"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="drop-down"><a href="#">Deep Drop Down</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact</a></li>-->

        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
  <div class="container">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!------ Include the above in your HEAD tag ---------->

    <form class="form-horizontal" action="addproductdb.php" method="POST"  style="font-family:Jost, sans-serif;" enctype="multipart/form-data">
    <fieldset>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="product_id">PRODUCT ID</label>  
  <div class="col-md-4">
  <input id="product_id" name="product_id" placeholder="PRODUCT ID" class="form-control input-md" required="" type="text">
    
  </div>
</div>-->

<!-- Text input-->

<div class="form-group">
  <label class="col-md-4 control-label" for="nama">Member Id</label>  
  <div class="col-md-4">
  <input id="id_Member" name="id_Member" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text" value="<?= $_SESSION['id_Member']?>" readonly>
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="nama">PRODUCT NAME</label>  
  <div class="col-md-4">
  <input id="nama" name="nama" placeholder="PRODUCT NAME" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="deskripsi">PRODUCT DESCRIPTION</label>  
  <div class="col-md-4">
  <input id="deskripsi" name="deskripsi" placeholder="PRODUCT DESCRIPTION" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="kategori">PRODUCT CATEGORY</label>
  <div class="col-md-4">
    <select id="kategori" name="kategori" class="form-control">
    <option value="New House">New House</option>
    <option value="Old House">Old House</option>
    <option value="Empty Land">Empty Land</option>
    <option value="Other">Other</option>
      </select>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="available_quantity">ADDRESS</label>  
  <div class="col-md-4">
  <input id="alamat" name="alamat" placeholder="alamat" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="klien">CLIENT</label>  
  <div class="col-md-4">
  <input id="klien" name="klien" placeholder="Client" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<div class="form-group">
  <label class="col-md-4 control-label" for="klien">PHONE NUMBER</label>  
  <div class="col-md-4">
  <input id="phone_number" name="phone_number" placeholder="Client" class="form-control input-md" required="" type="text" value="<?= $_SESSION['Phone_Number']?>">
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="tanggal_projek">TANGGAL PROJEK</label>
  <div class="col-md-4">                     
 <input id="tanggal_projek" name="tanggal_projek" class="form-control input-md" required="" type="date">
  </div>
</div>

<!-- Textarea 
<div class="form-group">
  <label class="col-md-4 control-label" for="product_name_fr">TANGGAL POST</label>
  <div class="col-md-4">                     
  <input id="tanggal_projek" name="tanggal_projek" placeholder="" class="form-control input-md" required="" type="date">
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="percentage_discount">PERCENTAGE DISCOUNT</label>  
  <div class="col-md-4">
  <input id="percentage_discount" name="percentage_discount" placeholder="PERCENTAGE DISCOUNT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_alert">STOCK ALERT</label>  
  <div class="col-md-4">
  <input id="stock_alert" name="stock_alert" placeholder="STOCK ALERT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Search input
<div class="form-group">
  <label class="col-md-4 control-label" for="stock_critical">STOCK CRITICAL</label>
  <div class="col-md-4">
    <input id="stock_critical" name="stock_critical" placeholder="STOCK CRITICAL" class="form-control input-md" required="" type="search">
    
  </div>
</div>

<!-- Search input
<div class="form-group">
  <label class="col-md-4 control-label" for="tutorial">TUTORIAL</label>
  <div class="col-md-4">
    <input id="tutorial" name="tutorial" placeholder="TUTORIAL" class="form-control input-md" required="" type="search">
    
  </div>
</div>

<!-- Search input
<div class="form-group">
  <label class="col-md-4 control-label" for="tutorial_fr">TUTORIAL FR</label>
  <div class="col-md-4">
    <input id="tutorial_fr" name="tutorial_fr" placeholder="TUTORIAL FR" class="form-control input-md" required="" type="search">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="online_date">ONLINE DATE</label>  
  <div class="col-md-4">
  <input id="online_date" name="online_date" placeholder="ONLINE DATE" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="author">AUTHOR</label>  
  <div class="col-md-4">
  <input id="author" name="author" placeholder="AUTHOR" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="enable_display">ENABLE DISPLAY</label>  
  <div class="col-md-4">
  <input id="enable_display" name="enable_display" placeholder="ENABLE DISPLAY" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="comment">COMMENT</label>  
  <div class="col-md-4">
  <input id="comment" name="comment" placeholder="COMMENT" class="form-control input-md" required="" type="text">
    
  </div>
</div>

<!-- Text input
<div class="form-group">
  <label class="col-md-4 control-label" for="approuved_by">APPROUVED BY</label>  
  <div class="col-md-4">
  <input id="approuved_by" name="approuved_by" placeholder="APPROUVED BY" class="form-control input-md" required="" type="text">
    
 <!-- File Button -->
<div class="form-group">
  <form action="" method="post" enctype="multipart/form-data">
  <label class="col-md-4 control-label" for="filebutton">IMAGE</label>
  <div class="col-md-4">
    <input id="file" name="foto[]" class="input-file" type="file" multiple>
  </div>
</div>
<!-- File Button -- 
<div class="form-group">
  <label class="col-md-4 control-label" for="filebutton">auxiliary_images</label>
  <div class="col-md-4">
    <input id="filebutton" name="filebutton" class="input-file" type="file">
  </div>
</div>-->

<!-- Button -->



<div class="form-group">
    <div class="text-center" style="text-align: center;">
    <button id="submit" name="submit" class="btn btn-primary" style=" background-color:#B88E0F ">Submit</button>
  </div>
  </div>
</fieldset>
</form>

      </div>
    </section><!-- End Breadcrumbs -->

   

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Join Our Newsletter</h4>
        <p>Subscribe tou our newsletter to get the updated news about architecture and others</p>
        <form action="" method="post">
          <input type="email" name="email"><input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>House To Go</h3>
        <p>
          Jalan MH.Thamrin KM 2,3 <br>
          Menteng, Jakarta Pusat<br>
          Indonesia <br><br>
          <strong>Phone:</strong> (+62)21-4523453<br>
          <strong>Email:</strong> Housetogo@Gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
        <li><i class="bx bx-chevron-right"></i> <a href="user.php">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="user.php">About us</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="user.php">Services</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
        </ul>
      </div>


    

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Follow us to get the updated infromation that you dont want to miss !!</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div> 

    </div>
  </div>
</div>

<div class="container footer-bottom clearfix">
  <!--<div class="copyright">
        &copy; Copyright <strong><span>Arsha</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
      <!-- Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>-->
</footer><!-- End Footer -->

<a href="#" class="back-to-top"><i class="ri-arrow-up-line"></i></a>
<div id="preloader"></div>

<!-- Vendor JS Files -->
<script src="assets/vendor/jquery/jquery.min.js"></script>
<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
<script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="assets/vendor/venobox/venobox.min.js"></script>
<script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
<script src="assets/vendor/aos/aos.js"></script>

<!-- Template Main JS File -->
<script src="assets/js/main.js"></script>

</body>

</html>