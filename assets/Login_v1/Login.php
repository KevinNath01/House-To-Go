<?php

include ("Connect.php");

if(isset($_POST['Login'])) 
{
    $Email = mysqli_real_escape_string($db, $_POST['Email']);
	$pwd = mysqli_real_escape_string($db, $_POST['pwd']);

	$query = "SELECT * FROM member WHERE Email='$Email'";
	$result = mysqli_query($db, $query);
	if(mysqli_num_rows($result) > 0)
	{
		while($row = mysqli_fetch_array($result))
		{
			if(password_verify($pwd, $row["pwd"]))
			{
				session_start();
				$_SESSION['id_Member'] 	= $id_Member;
				$_SESSION['Email'] 		= $Email;
				$_SESSION['status']		= "login";
				$_SESSION['First_Name']	= $First_Name;
				$_SESSION['Last_Name']	= $Last_Name;
				$_SESSION['Birthday']	= $Birthday;
				$_SESSION['Phone_Number']= $Phone_Number;
				$_SESSION['addres']          = $addres;
     		 	$_SESSION['city']            = $city; 
      			$_SESSION['post_code']       = $post_code;
				$_SESSION['id_Member']	= $row['id_Member'];
				$_SESSION['user_type']	= $row['user_type'];
			    $_SESSION['First_Name']	= $row['First_Name'];
				$_SESSION['Last_Name']	= $row['Last_Name'];
				$_SESSION['Birthday']	= $row['Birthday'];
				$_SESSION['Phone_Number']= $row['Phone_Number'];
				$_SESSION['addres']          = $row['addres'];
     			$_SESSION['city']            = $row['city']; 
       			$_SESSION['post_code']       = $row['post_code'];
				header("Location: User.php");
			}
			else{
				echo '<script>window.alert("Gagal Login");window.location.href = "Login.php";</script>';
			}
		}
	}
	else{
		echo '<script>window.alert("Gagal Login");window.location.href = "Login.php";</script>';  
}      
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				
				<div class="login100-pic js-tilt" data-tilt>
				<a href="../../index.html">
					<img src="images/Picture2.png" alt="IMG">
				</a>
				</div>

				<form class="login100-form validate-form" method="POST">
					<span class="login100-form-title">
						Member Login
					</span>
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="Email" placeholder="Email" id="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="pwd" placeholder="Password" id="pwd">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="Login" name="Login" >
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
						<a class="txt2" href="Forgot Password/ForgotPasssword.html">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="SignUp/index.html">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>