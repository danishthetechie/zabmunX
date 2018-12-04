<?php include "db.php";
	session_start(); ?>
	<!DOCTYPE html>
	<html lang="en" class="no-js">
	<head>
		
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ZABMUN</title>
		

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/nice-select.css">			
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>

		<header id="header" id="home">
        <?php include 'header.php' ?>
    </header>
    <!-- #header -->

			<!-- Start banner Area -->
			<section class="generic-banner">				
				<div class="container">
					<div class="row height align-items-center justify-content-center">
						<div class="col-lg-10">
							<div class="generic-banner-content">
								<h2 class="text-white">ZABMUN X</h2>
								<p class="text-white">Resolving Disputes | Reaching Milestones</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			<?php
				// If form submitted, insert values into the database.
				if(isset($_POST["submit"])){
				// removes backslashes
				$email = stripslashes($_REQUEST['email']);
				//escapes special characters in a string
				$email = mysqli_real_escape_string($con,$email);
				$password = stripslashes($_REQUEST['password']);
				$password = mysqli_real_escape_string($con,$password);
				//Checking is user existing in the database or not
					$query = "SELECT u.email, u.password, u.role, u.del_type, d.committee FROM users u, delegates d WHERE u.email='$email' and u.password='$password' and d.email = u.email";
					$result = mysqli_query($con,$query) or die(mysql_error());
					$rows = mysqli_num_rows($result);
					if($rows = mysqli_fetch_array($result)){
						$role = $rows['role'];
						$type = $rows['del_type'];
						$email1= $rows['email'];
						$comm = $rows['d.committee'];
						
						$_SESSION['email'] = $email1;
						//echo "<script> window.alert(''.$type);</script>";
						if($type !=null){
							if($type == '0' && $comm != 'disec' && $comm != 'specpol'){
								//show single delegate portal
								echo "<script> window.open('home-single.php','_self');</script>";
							}
							else if($type == '1' || $comm == 'disec' || $comm == 'specpol'){
								//show member delegate portal
								echo "<script> window.open('home-member.php','_self');</script>";
							}
							else{
								echo "<script> window.alert('There is an error signing you in. Please try later','_self');</script>";
							}
						}
						else{
							echo "<script>alert('Email or Password incorrect')</script>";
							echo "<script> window.open('login.php','_self');</script>";
						}
					}
					else{
						$query1 = "SELECT * FROM users WHERE email='$email' and password='$password'";
						$result1 = mysqli_query($con,$query1) or die(mysql_error());
						$rows1 = mysqli_num_rows($result1);
						if($rows1 = mysqli_fetch_array($result1)){
							$userid2 = $rows1['userid'];
							$email2= $rows1['email'];
							$role2 = $rows1['role'];
							
							$_SESSION['email'] = $email2;
							if($role2 == 'finance'){
								
								//show finance panel
								echo "<script> window.open('admin/finance/index.php','_self');</script>";
								
							}
							else if($role2 == 'registration'){
								//show registration panel
								echo "<script> window.open('admin/registrations/single-delegate.php','_self');</script>";
							}
							else if($role2 == 'hr'){
								//Show HR Panel
								echo "<script> window.open('admin/hr/viewattendance.php','_self');</script>";
							}
							else if($role2 == 'eb'){
								//show delegates to ahmer and romaiza without any functionalities
								echo "<script> window.open('admin/eb/index.php','_self');</script>";
							}
						
						
						}
						else{
							echo "<script>alert('Email or Password incorrect')</script>";
							echo "<script> window.open('login.php','_self');</script>";
						}
					}
				}else{
			?>
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">LOGIN</h3>
								<form action="" method="post">
									
									<div class="mt-10">
										<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" id="pwd" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
									</div>
									
									<div class="button-group-area mt-10">
										<input type="submit" name="submit" id="submit" class="genric-btn danger-border radius" value = "Sign in">
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
							<h3 class="mb-30">Helping Points</h3>
								<div class="">
									<ul class="unordered-list">
										<li></li>
										<li>You can add your members after signign in.</li>
										<li>Forgot Password? Email us at: it@zabmun.com.pk</li>
										<li>You will be assigned a unique-ID after registration. Each delegate will be known by their IDs during conference</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
				</div>
			<?php } ?>
			<!-- End Align Area -->
				
			
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
        <?php include 'footer.php' ?>
    </footer>	
			<!-- End footer Area -->



			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
			<script src="js/owl.carousel.min.js"></script>			
			<script src="js/jquery.sticky.js"></script>
			<script src="js/jquery.nice-select.min.js"></script>			
			<script src="js/parallax.min.js"></script>	
			<script src="js/mail-script.js"></script>				
			<script src="js/main.js"></script>	
		</body>
	</html>