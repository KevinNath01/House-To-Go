<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile</title>
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
  <link href="profile.css" rel="stylesheet">
  <link href="table/css/main.css" rel="stylesheet">
  <link href="table/css/util.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Arsha - v2.2.1
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-inner-pages">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto" style="font-family: Jost,sans-serif;"><a href="user.php">House To Go</a></h1>
    

      <nav class="nav-menu d-none d-lg-block" style="font-family: Jost,sans-serif;">
        <ul>
          <li><a href="user.php">Home</a></li>
         
          <li><a href="Products.php">Products</a></li>
          <li><a href="Team.html">Team</a></li>
         
          <li class="active"><a href="profile.php">Profile</a></li>

        </ul>
      </nav><!-- .nav-menu -->

      <a href="logout.php" class="get-started-btn scrollto">Logout</a>

    </div>
  </header><!-- End Header -->
   
  
<?php
include ("Connect.php");
 session_start();

?>


<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">

<body>
  <div class="main-content">
  
        <ul class="navbar-nav align-items-center d-none d-md-flex">
          <li class="nav-item dropdown">
            <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <div class="media align-items-center">
                
                
              </div>
            </a>
            <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
              <div class=" dropdown-header noti-title">
                <h6 class="text-overflow m-0">Welcome!</h6>
              </div>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-single-02"></i>
                <span>My profile</span>
              </a>
              
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-calendar-grid-58"></i>
                <span>Activity</span>
              </a>
              <a href="../examples/profile.html" class="dropdown-item">
                <i class="ni ni-support-16"></i>
                <span>Support</span>
              </a>
              <div class="dropdown-divider"></div>
              <a href="#!" class="dropdown-item">
                <i class="ni ni-user-run"></i>
                <span>Logout</span>
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!-- Header -->
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center" style="min-height: 600px; background-image: url(https://raw.githack.com/creativetimofficial/argon-dashboard/master/assets/img/theme/profile-cover.jpg); background-size: cover; background-position: center top;">
      <!-- Mask -->
      <span class="mask bg-gradient-default opacity-8"></span>
      <!-- Header container -->
      <div class="container-fluid d-flex align-items-center">
      <?php
    $id_Member = $_SESSION['id_Member'];
    $query = "SELECT * FROM member WHERE id_Member = $id_Member LIMIT 1";
    $result = mysqli_query($db,$query);
    $row = mysqli_fetch_array($result);

    if(mysqli_num_rows($result)>0)
    { 
        ?>
        <div class="row">
          <div class="col-lg-7 col-md-10">
            <h1 class="display-2 text-white">Hello <?php echo $row['First_Name'];?></h1>
            <p class="text-white mt-0 mb-5">This is your profile page. You can see the progress you've made with your work and manage your projects or assigned tasks</p>
            <a href="edit_profile.php" class="btn btn-info">Edit Profile</a>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        <div class="col-xl-4 order-xl-2 mb-5 mb-xl-0">
          <div class="card card-profile shadow">
            <div class="row justify-content-center">
              <div class="col-lg-3 order-lg-2">
                <div class="card-profile-image">
                  <a href="#">
                    <img src="https://demos.creative-tim.com/argon-dashboard/assets/img/theme/team-4.jpg" class="rounded-circle">
                  </a>
                </div>
              </div>
            </div>
            <div class="card-header text-center border-0 pt-8 pt-md-4 pb-0 pb-md-4">
            </div>
            <div class="card-body pt-0 pt-md-4">
              <div class="row">
                <div class="col">
                  <div class="card-profile-stats d-flex justify-content-center mt-md-5">
                   
                  </div>
                </div>
              </div>
              <div class="text-center">
                <h3 style = "font-size: 30px;">
                <?php echo $row['First_Name'];?> <?php echo $row['Last_Name'];?> <span class="font-weight-light"></span>
                </h3>
                <div class="h5 font-weight-300">
                  <i class="ni location_pin mr-2"></i>
                </div>
                <div class="h5 mt-4">
                  <i class="ni business_briefcase-24 mr-2"></i>
                </div>
                <div>
                  <i class="ni education_hat mr-2"></i>
                </div>
                
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-8 order-xl-1">
          <div class="card bg-secondary shadow">
            <div class="card-header bg-white border-0">
              <div class="row align-items-center">
                <div class="col-8">
                  <h3 class="mb-0">My account</h3>
                </div>
                
              </div>
            </div>
            <div class="card-body">
              <form>
                <h6 class="heading-small text-muted mb-4">User information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group">
                        <label class="form-control-label" for="input-email">Email address</label>
                        <input type="email" id="input-email" class="form-control form-control-alternative" value="<?php echo $row['Email'];?>" readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-first-name">First name</label>
                        <input type="text" id="input-first-name" class="form-control form-control-alternative" value="<?php echo $row['First_Name'];?>"readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-last-name">Last name</label>
                        <input type="text" id="input-last-name" class="form-control form-control-alternative" value="<?php echo $row['Last_Name'];?>"readonly>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-phone-number">Phone Number</label>
                        <input type="tel" id="input-phone-number" class="form-control form-control-alternative" value="<?php echo $row['Phone_Number'];?>"readonly>
                      </div>
                    </div>
                    <div class="col-lg-6">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-Birthday">Birthday</label>
                        <input type="text" id="input-Birthday" class="form-control form-control-alternative" value="<?php echo $row['Birthday'];?>"readonly>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                <hr class="my-4">
                <!-- Address -->
                <h6 class="heading-small text-muted mb-4">Contact information</h6>
                <div class="pl-lg-4">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-address">Address</label>
                        <input id="input-address" class="form-control form-control-alternative" placeholder="Home Address" value="<?php echo $row['addres'];?>"type="text" readonly> 
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-city">City</label>
                        <input type="text" id="input-city" class="form-control form-control-alternative" placeholder="City" value="<?php echo $row['city'];?>"readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group focused">
                        <label class="form-control-label" for="input-country">Country</label>
                        <input type="text" id="input-country" class="form-control form-control-alternative" placeholder="Country" value="Indonesia" readonly>
                      </div>
                    </div>
                    <div class="col-lg-4">
                      <div class="form-group">
                        <label class="form-control-label" for="input-country">Postal code</label>
                        <input type="number" id="input-postal-code" class="form-control form-control-alternative" placeholder="Postal code" value="<?php echo $row['post_code'];?>"readonly>
                      </div>
                    </div>
                  </div>
                  <?php }  ?>
                </div>
                
  <h6 class="heading-small text-muted mb-4" style="text-align = center;">My Product</h6>
    <div class="pl-lg-4">
      <div class="wrap-table100">
				<div class="table100">
					<table>
						<thead>
							<tr class="table100-head" style="background: #B88E0F">
								<th class="column1">Date Posted</th>
								<th class="column2">Product ID</th>
								<th class="column3">Name</th>
								<th class="column4">Address</th>
								<th class="column5">Category</th>
                <th class="column6">Project Date</th>
                <th class="column7"></th>
                <th class="column7"></th>
							</tr>
						</thead>
						<tbody>
            <?php 
              $id_Member = $_SESSION['id_Member'] ;
              $query = "SELECT * FROM produk  where id_Member='$id_Member'";
              $result = mysqli_query($db,$query); 
              if(mysqli_num_rows($result) > 0 )
              { 
                while ($row = mysqli_fetch_array($result))
                {?>
							  	<tr>
								  	<td class="column1"><?php echo $row["tanggal_dibuat"];?></td>
									  <td class="column2"><?php echo $row["id_produk"];?></td>
									  <td class="column3"><?php echo $row["nama"];?></td>
									  <td class="column4"><?php echo $row["alamat"];?></td>
									  <td class="column5"><?php echo $row["kategori"];?></td>
                    <td class="column6"><?php echo $row["tanggal_projek"];?></td>
                    <td class="column7"><a href="hapus.php?id_produk='<?php echo $row["id_produk"];?>'"class="btn btn-info" style="padding-top: 5px;padding-bottom: 5px;
                    padding-left:15px;padding-right:15px;">Hapus</a></td>
                    <td class="column7"><a href="update_page.php?id_produk='<?php echo $row["id_produk"];?>'"class="btn btn-info" style="padding-top: 5px;padding-bottom: 5px;
                    padding-left:15px;padding-right:15px;">Edit</a></td>
                  </tr>
                <?php
                } 
              }?>
            </tbody>
					</table>
				</div>
		  </div> 
                  
                </div>
                </div>
             </div>  
          </div>
        </div>
      </div>
    </div>
  </div>
  

  
</body>


 <!-- ======= Footer ======= -->
 <footer id="footer">


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