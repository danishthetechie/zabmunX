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
		<?php include "db.php" ?>

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
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="index.html"><img src="img/zabmun-logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About Us</a></li>
						<li class="menu-has-children"><a href="#">Committees</a>
                            <ul>
                                <li><a href="unsc.html">UNSC</a></li>
                                <li><a href="disec.html">DISEC</a></li>
								<li><a href="specpol.html">SPECPOL</a></li>
								<li><a href="ecosoc.html">ECOSOC</a></li>
								<li><a href="csw.html">CSW</a></li>
								<li><a href="iaea.html">IAEA</a></li>
								<li><a href="who.html">WHO</a></li>
								<li><a href="arab.html">Arab League</a></li>
								<li><a href="hcc.html">HCC</a></li>
								<li><a href="majlis.html">Majlis-e-Shura</a></li>
						    </ul>
                        </li>
                        <li><a href="ztp.html">ZABMUN Training Program</a></li>
						<li><a href="team.html">ZABMUN Team</a></li>
                        <li><a class="ticker-btn" href="delegate-registration.php">Register</a></li>
						<li><a class="generic-btn btn-danger" href="login.php">Login</a></li>
                    </ul>
                </nav>
                <!-- #nav-menu-container -->
            </div>
        </div>
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
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Delegate Registration</h3>
								<form action="delegate-registration.php" method="post" id="form">
									<div class="mt-10">
										<input type="text" name="fname" placeholder="First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'First Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="lname" placeholder="Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Last Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" id="pwd" name="pwd" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="password" id="pwd1" onChange="isPasswordMatch();" name="repwd" placeholder="Retype Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Retype Password'" required class="single-input">
										<p id="checkpass"></p>
									</div>
									<div class="mt-10">
										<input type="text" name="cnic" placeholder="CNIC or Parent's CNIC (xxxxx-xxxxxxx-x)" onfocus="this.placeholder = ''" onblur="this.placeholder = 'CNIC OR B-Form (xxxxx-xxxxxxx-x)'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="phone" placeholder="Mobile Number" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Mobile Number'" required class="single-input">
									</div>
									<div class="mt-10">
										<label>&nbsp; &nbsp; &nbsp;Date of Birth</label>
										<input type="date" name="dob" placeholder="Date of Birth" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Date of Birth'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="institute" placeholder="Institute" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Institute'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="address" placeholder="Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-bookmark" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="committee">
												<option value="unsc">UNSC</option>
												<option value="disec">DISEC (Double Delegate Committee)</option>
												<option value="specpol">SPECPOL (Double Delegate Committee)</option>
												<option value="ecosoc">ECOSOC</option>
												<option value="csw">CSW</option>
												<option value="iaea">IAEA</option>
												<option value="who">WHO</option>
												<option value="arab-league">ARAB LEAGUE</option>
												<option value="hcc">HCC</option>
												<option value="majlis-e-shura">MAJLIS-E-SHURA</option>
											</select>
										</div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-male" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
												<option value="other">Other</option>
											</select>
										</div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-group" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="type">
												<option value="0">Single Delegate</option>
												<option value="1">Team Delegation</option>
											</select>
										</div>
									</div>
									<div class="button-group-area mt-10">
										<input type="submit" name="submit" id="submit" class="genric-btn danger-border radius" value = "Register">
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
							<h3 class="mb-30">Helping Points</h3>
								<div class="">
									<ul class="unordered-list">
										<li>Please provide your Parent's CNIC No. if you're below 18</li>
										<li></li>
										<li>Please state if you are a single delegate or a part of delegation
											<ul>
												<li>You can add your members after signing in to your portal</li>
												<li>one delegation can be of maximum 10 members</li>
											</ul>
											<ul>
												<li>For team delegation, you will be considered as a Head-Delegate of your team</li>
											</ul>
										</li>
										<li>Please select your committee from the list</li>
										<li>You will be asked to login through your email address</li>
										<li>You will be assigned a unique-ID after registration. Each delegate will be known by their IDs during conference</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->
			
			
			<!-- Submission Code Starts Here -->
			<?php

	if(isset($_POST["submit"])){
		
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$cnic = $_POST['cnic'];
			$email = $_POST['email'];
			$pwd = $_POST['pwd'];
			$dob = $_POST['dob'];
			$phone = $_POST['phone'];
			$institute = $_POST['institute'];
			$address = $_POST['address'];
			$city = 'Karachi';
			$gender = $_POST['gender'];
			$committee = $_POST['committee'];
			$type = $_POST['type'];
			$date = date("Y-m-d");
			$repassword=$_POST['repwd'];
			$status=true;
			$role="delegate";
			if($repassword == $pwd)
			{
			$query="INSERT INTO delegates(first_name, last_name, cnic, contact, email, gender, dob, institute, city, committee, address, register_date, status, password, type) 
			VALUES ('$fname','$lname','$cnic','$phone','$email','$gender','$dob','$institute','Karachi','$committee','$address','$date',$status,'$pwd',$type)";	

				$result = mysqli_query($con,$query);

				if($result)
				{
					echo "<script>alert('Registered Successfully');</script>";
					
					$query1 = "INSERT INTO users (email,password,role,del_type) VALUES ('$email','$pwd','$role','$type')";
					$result1 = mysqli_query($con,$query1);
					if($result1)
					{
						ini_set( 'display_errors', 1 );
						error_reporting( E_ALL );
						$from = "registrations@zabmun.com.pk";
						$subject = "ZABMUN X Registrations";
						$message = "Dear ".$fname."\n You have been successfully registered to ZABMUN X. You will be contacted shortly for further details.
						 \n Your login details are as follows: \n email: ".$email."\n password: ".$pwd."\n \n Bank Details: Dubai Islamic Bank, Khayaban-e-Ittehad \n Title: SZABIST Student Council
						\n Acc No: 0082320001 \n \n  Email your deposit slip to zabmun.khi@gmail.com or registrations@zabmun.com.pk \n \n Thankyou \n Regards \n ZABMUN X";
						$headers = "From:" . $from;
						mail($email,$subject,$message, $headers);
						echo "<script>alert('Cofirmation message has been sent on your mail. Thankyou');</script>";
					}
					else{
						echo "<script>alert('You will be contact shortly. Thankyou '.$fname);</script>";	
					}
				}
				else{
					echo "<script>alert('Email already exist');</script>";
				}
			}
			else{
				echo "<script>alert('ReType-Password should be same');</script>";
			}
    mysqli_close($con);
	
		
}?>
			
			<!-- Submission Code Ends Here -->
			
			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>About Us</h6>
                        <p>
                            This year, ZABMUN is celebrating its' decade long successful promotion of diplomacy, and the art of debate and discourse at ZABMUN X.<br>
							The conference will pay homage to the ten-year long journey, and all the obstacles overcome and milestones achieved with the theme:
							<strong> Resolving Disputes | Reaching Milestones.</strong>
                        </p>
                        <p class="footer-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Theme By <i class="icon-heart3" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">Colorlib</a>
							<br> Developed By <i class="icon-heart3" aria-hidden="true"></i><a href="http://abacusdevs.com" target="_blank">Abacus Devs</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Important Links</h6>
                        <li><span><a href="delegate-registration.html" style="color: #777">Register as a Single Delegate</a></span></li>
						<li><span><a href="delegate-registration.html" style="color: #777">Register for a Delegation</a></span></li>
						<li><span><a href="delegate-registration.html" style="color: #777">How to Register</a></span></li>
						<li><span><a href="recoverpassword.html" style="color: #777">Recover You Login Password</a></span></li>
						<li><span><a href="sponsor.html" style="color: #777">Sponsor Us</a></span></li>
						<li><span><a href="contact.html" style="color: #777">Contact Us</a></span></li>
                        
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 social-widget">
                    <div class="single-footer-widget">
                        <h6>Follow Us</h6>
                        <p>Let us be social</p>
                        <div class="footer-social d-flex align-items-center">
                            <ul>
							<li><i class="fa fa-facebook"></i>&nbsp; zabmun</li>
                            <li><i class="fa fa-twitter"></i>&nbsp; zabmun</li>
                            <li><i class="fa fa-instagram"></i>&nbsp; zabmun</li>
                            <li><i class="fa fa-snapchat"></i>&nbsp; zabmun</li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>	
			<!-- End footer Area -->

			<script>
				function isPasswordMatch() {
				var password = $("#pwd").val();
				var confirmPassword = $("#pwd1").val();

				if (password != confirmPassword){
					$("#checkpass").html("Passwords do not match");
					$("#submit").prop('disabled', true);
				}
				else {
					$("#checkpass").html("Passwords match.");
				}
			}
			
			
			function clearForm(){
					document.getElementById('form').reset()
			}
			</script>


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