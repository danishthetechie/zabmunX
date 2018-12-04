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
		<meta name="author" content="colorlib">
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
								<p class="text-white">Add your members and upload deposit slip</p>
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
			$amount = 0;
			$count =0;
			$delegation_type = '';
			$total = 0;
			
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
					$del_type = $row['type'];
					
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
					
					if($row['type'] == 1){
						$delagation_type = 'Team Delegation';
					}
					else{
						$delagation_type = 'Double Delegate';
					}
					
						if($date <= '2018-10-31'){
							$amount = 2900;
							$total = 2900;
						}
						else{
							$amount = 3500;
							$total = 3500;
						}
					
					
					$query3 = "Select * from payments where del_id = '$id'";
					$run3 = mysqli_query($con,$query3);
					if($row3 = mysqli_fetch_array($run3)){
						$status = $row3['status'];
			
						
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
						<hr>
						<h3>Members</h3>
						
						<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="country">Member Name</div>
									<div class="country">Email</div>
									<div class="country">Preferred Committee</div>
									<div class="country">Assigned Committee</div>
									<div class="country">Assigned Country</div>
								</div>
								
								<!-- query to select all memebers -->
								<?php
									$query1 = "select * from delegate_members where head_del = '$id'";
									$run1 = mysqli_query($con,$query1);
									while($row1 = mysqli_fetch_array($run1)){
										$memid = $row1['del_memid'];
										$mem_fname = $row1['mem_fname'];
										$mem_lname = $row1['mem_lname'];
										$mem_email = $row1['mem_email'];
										$mem_phone = $row1['mem_phone'];
										$mem_gender = $row1['mem_gender'];
										$mem_committee = $row1['mem_prefcomm'];
										$mem_asscomm = $row1['mem_asscomm'];
										$mem_asscountry = $row1['mem_asscountry'];
										
										if($row1['mem_asscomm'] != null){
											$mem_asscomm = $row1['mem_asscomm'];
										}
										else{
											$mem_asscomm = 'Pending' ;
										}
										
										
										if($row1['mem_asscountry'] != null){
											$mem_asscountry = $row1['mem_asscountry'];
										}
										else{
											$mem_asscountry ='Pending' ;
										}
								
								?>
								<div class="table-row">
									<div class="country"><?php echo $mem_fname ?></div>
									<div class="country"><?php echo $mem_email ?></div>
									<div class="country"><button class="genric-btn danger circle arrow"><?php echo $mem_committee ?></button></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $mem_asscomm ?></button></div>
									<div class="country"><button class="genric-btn success circle arrow"><?php echo $mem_asscountry ?></button></div>
								</div>
								<?php 
									$total += $amount;
								} //while loop of members end ?>
							</div>
						</div><br>
						<a href="#addmem"><button class="genric-btn primary circle arrow" style="float: right;">Add Member<span class="lnr lnr-plus"></span></button></a>
						<button class="genric-btn primary circle arrow" style="float: right;">Total Amount: <?php echo $total; ?><span class="lnr lnr-plus"></span></button>
					</div>
					
					
					<div class="section-top-border" id="addmem">
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
										<li><strong>Delegate Status:</strong> <?php echo $delegation_type; ?></li>
										<li><strong>Gender:</strong> <?php echo $gender; ?></li>
										<li><strong>Address:</strong> <?php echo $address; ?></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-4 col-md-4" >
								<h3 class="mb-30">Add Members</h3>
								<form action="" method="post">
									<div class="mt-10">
										<input type="text" name="mem_fname" placeholder="Member First Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Member First Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="mem_lname" placeholder="Member Last Name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Member Last Name'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="email" name="email" placeholder="Email address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email address'" required class="single-input">
									</div>
									<div class="mt-10">
										<input type="text" name="phone" placeholder="Phone" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Phone'" required class="single-input">
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-male" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="gender">
												<option value="male">Male</option>
												<option value="female">Female</option>
											</select>
										</div>
									</div>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-bookmark" aria-hidden="true"></i></div>
										<div class="form-select" id="default-select">
											<select name="committee">
												<option value="unsc">UNSC</option>
												<option value="disec">DISEC</option>
												<option value="specpol">SPECPOL</option>
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
									<div class="button-group-area mt-10">
										<input type="submit" name="submit" id="submit" class="genric-btn primary-border radius" value = "Add Member">
									</div>
								</form>
							</div>
							<div class="col-lg-3 col-md-4 mt-sm-30">
							
								<!--<form action="" method="post" enctype="multipart/form-data">
									<div class="mt-10">
										<input type="file" name="image" placeholder="Add Deposit Slip" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Add Deposit Slip'" required class="single-input">
									</div>
									<div class="button-group-area mt-10">
										<input type="submit" name="submit1" id="submit1" class="genric-btn primary-border radius" value = "Upload Deposit Slip">
									</div>
								</form> -->
								<h3 class="mb-30">Payment Notice</h3>
									<ul class="unordered-list">
										<button class="genric-btn success circle arrow">Total Amount to be paid: <?php echo $total; ?></button>
										<li>You can not add more than 12 members including head delegate.</li>
										<li>Bank Details: <strong>Dubai Islamic Bank, Khayaban-e-Ittehad - Karachi</strong></li>
										<li>Acc Name: <strong>SZABIST Student Council</strong></li>
										<li>Acc No: <strong>0082320001</strong></li>
										<li>you will not be able to add more members once payment is finalized.</li>
										<li>Take a picture of paid deposit slip and mail it to <strong>registrations@zabmun.com.pk</strong> <br> OR hand over your cash to our Finance Department
											<ul>
												<li>Ishraq Ahmed : (+92) 333 2816673</li>
												<li>Shaheer : (+92) 347 2066703</li>
											</ul>
										</li>
										<li>You will receive an email as soon as your amount gets approved.</li>
										<li>Please email us at registrations@zabmun.com.pk with your Delegate ID, if you need any changes in your details.</li>
									</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Align Area -->
			<?php 
				//to add member
				if(isset($_POST["submit"])){
		
			$mfname = $_POST['mem_fname'];
			$mlname = $_POST['mem_lname'];
			$memail = $_POST['email'];
			$mphone = $_POST['phone'];
			$mgender = $_POST['gender'];
			$mcommittee = $_POST['committee'];
			$mdate = date("Y-m-d");
			
			$query2="INSERT INTO delegate_members(mem_fname, mem_lname, head_del, mem_email, mem_phone, mem_gender, mem_prefcomm, mem_addeddate) 
			VALUES ('$mfname','$mlname','$id','$memail','$mphone','$mgender','$mcommittee','$mdate')";	

				$result2 = mysqli_query($con,$query2);

				if($result2)
				{
					echo "<script>alert('Member Added Successfully');</script>";
					echo "<meta http-equiv='refresh' content='0'>";
				}
				else{
					echo "<script>alert('There is an issue while adding Member. Please email us at registrations@zabmun.com.pk');</script>";
				}
			}
			
			//to add deposit slip
			// if(isset($_POST["submit1"])){ 
				// $image = addslashes(file_get_contents($_FILES['image']['tmp_name'])); //SQL Injection defence!
				// $image_name = addslashes($_FILES['image']['name']);
				// $sql = "INSERT INTO payments (del_id, total_amount, image, image_name, status) VALUES ('$id', '$total', '$image', '$image_name', 'Pending')";
				// $result = mysqli_query($con,$sql);
				// if ($result) { // Error handling
					// echo "<script>alert('Slip Uploaded Successfully');</script>"; 
					// echo "<meta http-equiv='refresh' content='0'>";
				// }
				// else{
						// echo "<script>alert('There is an error while uploading. Please try again');</script>"; 
				// }
				
			// }


} //end if ?>

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