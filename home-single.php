<?php include "db.php";
session_start(); 
?>
	<!DOCTYPE html>
	<html lang="en" class="no-js">
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
        <div class="container">
            <div class="row align-items-center justify-content-between d-flex">
                <div id="logo">
                    <a href="#"><img src="img/zabmun-logo.png" alt="" title="" /></a>
                </div>
                <nav id="nav-menu-container">
                    <ul class="nav-menu">
                        <li><a class="generic-btn btn-danger" href="logout.php">Logout</a></li>
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
								<h2 class="text-white">Welcome</h2>
								<p class="text-white">Please upload your deposit slip here</p>
							</div>
						</div>
					</div>
				</div>
			</section>		
			<!-- End banner Area -->
			
			<?php
			$id = '';
			$assigned_committee = '';
			$assigned_country = '';
			$status = '';
			
		if($_SESSION['email']==null){
			echo "<script> window.open('login.php','_self');</script>";
		}
		
		
		$email = $_SESSION['email'];
		$query = "select * from delegates where email = '$email'";
			$run = mysqli_query($con,$query);
			if($row = mysqli_fetch_array($run)){
					$id = $row['del_id'];
					$fname = $row['first_name'];
					$lname = $row['last_name'];
					$cnic = $row['cnic'];
					$contact = $row['contact'];
					$email = $row['email'];
					$gender = $row['gender'];
					$dob = $row['dob'];
					$institute = $row['institute'];
					$city = $row['city'];
					$committee = $row['committee'];
					$address = $row['address'];
					$date = $row['register_date'];
					if($row['assigned_committee'] != null){
						$assigned_committee=$row['assigned_committee'];
					}
					else{
						$assigned_committee ='Pending' ;
					}
					if($row['assigned_country'] != null){
						$assigned_country=$row['assigned_country'];
					}
					else{
						$assigned_country ='Pending' ;
					}
					$amount = '';
						if($date <= '2018-10-31'){
							$amount = '2900';
						}
						else{
							$amount = '3500';
						}
					$status = $row['status'];
					
					$query1 = "Select * from payments where del_id = '$id'";
					$run1 = mysqli_query($con,$query1);
					if($row1 = mysqli_fetch_array($run1)){
						$status = $row1['status'];
			
						
					}
					else{
						$status = 'Not Paid';
					}
?>
			
			
			<!-- Start Align Area -->
			<div class="whole-wrap">
				<div class="container">
					<div class="section-top-border">
						<h3 class="mb-30">Status</h3>
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">Del ID</div>
									<div class="country">First Name</div>
									<div class="country">Last Name</div>
									<div class="country">Payment Amount</div>
									<div class="country">Payment Status</div>
									<div class="country">Committee</div>
									<div class="country">Country</div>
								</div>
								<div class="table-row">
									<div class="serial"><?php echo $id; ?></div>
									<div class="country"><?php echo $fname; ?></div>
									<div class="country"><?php echo $lname; ?></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $amount ;?></button></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $status ;?></button></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $assigned_committee; ?></button></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $assigned_country; ?></button></div>
								</div>
							</div>
						</div>
					</div>
					
					<div class="section-top-border">
						<div class="row">
							<div class="col-lg-4 col-md-4">
								<div class="">
									<h3 class="mb-30">Your Details</h3>
									<ul class="unordered-list">
										<li><strong>Delegate ID:</strong> <?php echo $id; ?></li>
										<li><strong>First Name:</strong> <?php echo $fname; ?></li>
										<li><strong>Last Name:</strong> <?php echo $lname; ?></li>
										<li><strong>Email:</strong> <?php echo $email; ?></li>
										<li><strong>CNIC:</strong> <?php echo $cnic; ?></li>
										<li><strong>Contact:</strong> <?php echo $contact; ?></li>
										<li><strong>Date of Birth:</strong> <?php echo $dob; ?></li>
										<li><strong>Institute:</strong> <?php echo $institute; ?></li>
										<li><strong>Preferred Committee:</strong> <?php echo $committee; ?></li>
										<li><strong>Delegate Status:</strong> Single</li>
										<li><strong>Gender:</strong> <?php echo $gender; ?></li>
										<li><strong>Address:</strong> <?php echo $address; ?></li>
									</ul>
								</div>
								<div class="">
									<hr>
									
								</div>
							</div>
							<div class="col-lg-8 col-md-8 mt-sm-30">
							<!--<h3 class="mb-30">Upload Deposit Slip</h3>
								<form action="home-single.php" method="post" enctype="multipart/form-data">
									<div class="mt-10">
										<input type="file" name="image" placeholder="Add Deposit Slip" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Add Deposit Slip'" required class="single-input">
									</div>
									<div class="button-group-area mt-10">
										<input type="submit" name="submit1" id="submit1" class="genric-btn primary-border radius" value = "Upload Deposit Slip">
									</div>
								</form>-->
								<h3 class="mb-30">Your Details has been sent to finance department</h3>
									<ul class="unordered-list">
										<li>Please submit your delgate fee to our account. Details are as follows:
											<ul>
												<li>Bank Details: <strong>Dubai Islamic Bank, Khayaban-e-Ittehad - Karachi</strong></li>
												<li>Acc Name: <strong>SZABIST Student Council</strong></li>
												<li>Acc No: <strong>0082320001</strong></li>
											</ul>
										</li>
										<li>Take a picture of paid deposit slip and mail it to registrations@zabmun.com.pk OR hand over your cash to our Finance Department
											<ul>
												<li>Ishraq Ahmed : (+92) 333 2816673</li>
												<li>Shaheer : (+92) 347 2066703</li>
											</ul>
										</li>
										
										<li>You will receive an email as soon as your amount gets approved</li>
										<li>Please email with your Delegate ID, if you need any changes in your details at registrations@zabmun.com.pk</li>
									</ul>
								</div>
								<?php
									if(isset($_POST["submit1"])){ 
										$image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
										$image_name = addslashes($_FILES['image']['name']);
										$sql = "INSERT INTO payments (del_id, total_amount, image, image_name, status) VALUES ('$id', '$amount', '$image', '$image_name', 'Pending')";
										$result = mysqli_query($con,$sql);
										if ($result) { // Error handling
											echo "<script>alert('Slip Uploaded Successfully');</script>"; 
											echo "<meta http-equiv='refresh' content='0'>";
										}
										else{
												echo "<script>alert('There is an error while uploading. Please try again');</script>"; 
										}
										
									}
			}
								?>
								
								
								
							
						</div>
					</div>
					
				</div>
			</div>
			
			<!-- End Align Area -->

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
                            
                            Copyright &copy;
                            <script>
                                document.write(new Date().getFullYear());
                            </script> All rights reserved | Theme By <i class="icon-heart3" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank">Colorlib</a>
							<br> Developed By <i class="icon-heart3" aria-hidden="true"></i><a href="http://abacusdevs.com" target="_blank">Abacus Devs</a>
                            
                        </p>
                    </div>
                </div>
                <div class="col-lg-5  col-md-6 col-sm-6">
                    <div class="single-footer-widget">
                        <h6>Important Emails</h6>
                        <li><span>For Payment Queries: finance@zabmun.com.pk</span></li>
						<li><span>For Committees & Countries: registrations@zabmun.com.pk</span></li>
						<li><span>For Trainig Programs: ztp@zabmun.com.pk</span></li>
						<li><span>For Portal Queries: it@zabmun.com.pk</span></li>
						<li><span>For Other Queries: zabmun.khi@gmail.com</span></li>
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