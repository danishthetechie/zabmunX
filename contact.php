	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/elements/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="abacusdevs">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>ZABMUN X</title>
		

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
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-8 col-md-8">
								<h3 class="mb-30">Contact Us</h3>
								<form action="contact.html" method="post">
									
									<div class="mt-10">
										<input type="text" name="name" placeholder="Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="textarea" name="text" placeholder="Your Text Here" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Text Here'" required class="single-input">
									</div>
									
									
									<div class="button-group-area mt-10">
										<input type="submit" name="submit" id="submit" class="genric-btn danger-border radius" value = "Sign in">
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
							<h3 class="mb-30">Contact Details</h3>
								<div class="">
									<ul class="unordered-list">
										<li>Registration Department - Hamza Ahmed<br> 0336-2549161</li>
										<li>Registration Department - Kissa Abbas<br> 0301-8233574</li>
										<br>
										<li>Secretary General - Syeda Romaiza Ibad<br> 0334-3126762</li>
										<li>Chairperson - Syed Ahmer Hussain<br> 0333-6211463</li>
										<br>
										<li>For Further Queries, mail us at zabmun.khi@gmail.com<br> romaiza@zabmun.com.pk<br> ahmer@zabmun.com.pk<br> registrations@zabmun.com.pk</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->
			<?php
				if(isset($_POST["submit"])){
					$name = $_POST['name'];
					$email = $_POST['email'];
					$msg = $_POST['text'];
					$to = "zabmun.khi@gmail.com";
					
					ini_set( 'display_errors', 1 );
						error_reporting( E_ALL );
						$from = "queries@zabmun.com.pk";
						$subject = "ZABMUN X Queries";
						$message = "Message Sent By Contact Us Form on Website. \n Visitor's Name: ".$fname."\n Visitor's Email: ".$email."
						 \n Visitor's Query: ".$msg."\n\n Support By Abacus Devs - www.abacusdevs.com";
						$headers = "From:" . $from;
						mail($to,$subject,$message, $headers);
						echo "<script>alert('Your Query has been sent. Thank you');</script>";
				}
			?>
			
			
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