<?php include "db.php";

?>
<!doctype html>
<html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZABMUN</title>
    <meta name="description" content="ZABMUN">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="icon.png">
    <link rel="shortcut icon" href="icon.png">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
	<link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->

</head>
<body>
	<!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <?php include 'navbar.php'; ?>
    </aside><!-- /#left-panel -->
    <!-- Left Panel -->
	
	
    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">
			<div class="header-menu">
				<div class="col-sm-7">
                </div>
				<div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>
						<div class="user-menu dropdown-menu">
                            <a class="nav-link" href="logout.php"><i class="fa fa-power -off"></i>Logout</a>
                        </div>
                    </div>
				</div>
            </div>
		</header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Team Delegation/ Double Delegates</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Registered Delegates</a></li>
                            <li class="active">Team Delegation & Double Delegate</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated">
				
                <div class="card">
                    <div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" v-if="headerText">Delegations</strong>
					</div>
                    <div class="card-body">
						<?php
							$useremail = $_SESSION['email'];
							$count = 1;
							$query = "select * from delegates where type = 1 and assigned_committee IS NOT NULL";
							$run = mysqli_query($con,$query);
							while($row = mysqli_fetch_array($run)){
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
								$asscommittee = $row['assigned_committee'];
								$asscountry = $row['assigned_country'];
								$address = $row['address'];
								$date = $row['register_date'];
								
								
						?>

                        <!-- Button trigger modal -->
                      <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodal<?php echo $count; ?>">
                          <?php echo $fname." ".$lname; ?>
                      </button>
					  
					  <!--Modal -->
					<div class="modal fade" id="scrollmodal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Team Members</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
								<!-- Head Delegate Details -->
								<div class="row">
								<div class="col-lg-12 col-md-12">
									<section class="card">
										<div class="bg-dark">
											<div class="media">
												<a href="#">
													<img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
												</a>
												<div class="media-body">
													<h2 class="text-white display-6"><?php echo $fname." ".$lname; ?></h2>
													<p class="text-light">Head Delegate</p>
												</div>
											</div>
										</div>
										<div class="weather-category twt-category">
											<ul>
												<li class="active">
													<h5>Del ID</h5>
													ZAB-X-<?php echo $id; ?> 
												</li>
												<li>
													<h5>Email</h5>
													<?php echo $email; ?>
												</li>
												<li>
													<h5>CNIC</h5>
													<?php echo $cnic; ?>
												</li>
											</ul>
											<ul>
												<li class="active">
													<h5>Phone</h5>
													<?php echo $contact; ?>
												</li>
												<li class="active">
													<h5>Institute</h5>
													<?php echo $institute; ?>
												</li>
												<li>
													<h5>Rgister Date</h5>
													<?php echo $date; ?>
												</li>
											</ul>
											<ul>
												<li>
													<h5>Preferred Committee</h5>
													<?php echo $committee; ?>
												</li>
												<li>
													<h5>Assigned Committee</h5>
													<?php echo $asscommittee; ?>
												</li>
												<li>
													<h5>Assigned Country</h5>
													<?php echo $asscountry; ?>
												</li>
											</ul>
										</div>
									</section>
								</div>
								</div>
								
								<!-- Table for Members -->
								<div class= "row">
                                <table id="bootstrap-data-table" class="table table-responsive table-striped table-bordered" style="font-size:11px;">

                                    <thead>
                                        <tr>
                                            <th>Member ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Preferred Committee</th>
                                            <th>Assigned Committee</th>
											<th>Assigned Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										
										<?php
											$query1 = "select * from delegate_members where head_del = '$id'";
											$run1 = mysqli_query($con,$query1);
											while($row1 = mysqli_fetch_array($run1)){
												$mid = $row1['del_memid'];
												$mfname = $row1['mem_fname'];
												$mlname = $row1['mem_lname'];
												$mcontact = $row1['mem_phone'];
												$memail = $row1['mem_email'];
												$mgender = $row1['mem_gender'];
												$mcommittee = $row1['mem_prefcomm'];
												$masscommittee = $row1['mem_asscomm'];
												$masscountry = $row1['mem_asscountry'];
												$mdate = $row1['mem_addeddate'];
										?>
                                        <tr>
                                            <td>ZAB-M-<?php echo $mid; ?></td>
                                            <td><?php echo $mfname; ?></td>
                                            <td><?php echo $mlname; ?></td>
                                            <td><?php echo $memail; ?></td>
                                            <td><?php echo $mcontact; ?></td>
                                            <td><?php echo $mcommittee; ?></td>
											<td><?php echo $masscommittee; ?></td>
											<td><?php echo $masscountry; ?></td>
                                        </tr>
										<?php } //inner while loop for members ?>
                                    </tbody>
                                </table>
								</div> <!-- row closed for table -->
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                            </div>
                        </div>
						</div>
					</div>
					<?php $count++; } //while loop ends?>  
                    </div>
					<hr>
					
					<!-- For Double Delegate -->
					<div class="card-header">
                        <i class="mr-2 fa fa-align-justify"></i>
                        <strong class="card-title" v-if="headerText">Double Delegates</strong>
					</div>
                    <div class="card-body">
						<?php
							$count1 = 1;
							$query3 = "select * from delegates where type = 0 and (committee = 'disec' or committee = 'specpol') and assigned_committee IS NOT NULL";
							$run3 = mysqli_query($con,$query3);
							while($row3 = mysqli_fetch_array($run3)){
								$id1 = $row3['del_id'];
								$fname1 = $row3['first_name'];
								$lname1 = $row3['last_name'];
								$cnic1 = $row3['cnic'];
								$contact1 = $row3['contact'];
								$email1 = $row3['email'];
								$gender1 = $row3['gender'];
								$dob1 = $row3['dob'];
								$institute1 = $row3['institute'];
								$city1 = $row3['city'];
								$committee1 = $row3['committee'];
								$asscommittee1 = $row3['assigned_committee'];
								$asscountry1 = $row3['assigned_country'];
								$address1 = $row3['address'];
								$date1 = $row3['register_date'];
								
						?>

                        <!-- Button trigger modal -->
                      <button type="button" class="btn btn-secondary mb-1" data-toggle="modal" data-target="#scrollmodaldouble<?php echo $count1; ?>">
                         <?php echo $fname1." ".$lname1; ?>
                      </button>
					  
					  <!--Modal -->
					<div class="modal fade" id="scrollmodaldouble<?php echo $count1; ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
						<div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="scrollmodalLabel">Double Delegation</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
								<!-- Head Delegate Details -->
								<div class="row">
								<div class="col-lg-12 col-md-12">
									<section class="card">
										<div class="bg-dark">
											<div class="media">
												<a href="#">
													<img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
												</a>
												<div class="media-body">
													<h2 class="text-white display-6"><?php echo $fname1." ".$lname1; ?></h2>
													<p class="text-light">Head Delegate</p>
												</div>
											</div>
										</div>
										<div class="weather-category twt-category">
											<ul>
												<li class="active">
													<h5>Del ID</h5>
													ZAB-X-<?php echo $id1; ?> 
												</li>
												<li>
													<h5>Email</h5>
													<?php echo $email1; ?>
												</li>
												<li>
													<h5>CNIC</h5>
													<?php echo $cnic1; ?>
												</li>
											</ul>
											<ul>
												<li class="active">
													<h5>Phone</h5>
													<?php echo $contact1; ?>
												</li>
												<li>
													<h5>Institute</h5>
													<?php echo $institute1; ?>
												</li>
												<li>
													<h5>Rgister Date</h5>
													<?php echo $date1; ?>
												</li>
											</ul>
											<ul>
												<li>
													<h5>Preferred Committee</h5>
													<?php echo $committee1; ?>
												</li>
												<li>
													<h5>Assigned Committee</h5>
													<?php echo $asscommittee1; ?>
												</li>
												<li>
													<h5>Assigned Country</h5>
													<?php echo $asscountry1; ?>
												</li>
											</ul>
										</div>
									</section>
								</div>
								</div>
								
								<!-- table for member -->
								<div class="row">
								<table id="bootstrap-data-table" class="table table-responsive table-striped table-bordered" style="font-size:11px;">

                                    <thead>
                                        <tr>
                                            <th>Member ID</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Preferred Committee</th>
                                            <th>Assigned Committee</th>
											<th>Assigned Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											
											$query4 = "select * from delegate_members where head_del = '$id1'";
											$run4 = mysqli_query($con,$query4);
											while($row4 = mysqli_fetch_array($run4)){
												$mid1 = $row4['del_memid'];
												$mfname1 = $row4['mem_fname'];
												$mlname1 = $row4['mem_lname'];
												$mcontact1 = $row4['mem_phone'];
												$memail1 = $row4['mem_email'];
												$mgender1 = $row4['mem_gender'];
												$mcommittee1 = $row4['mem_prefcomm'];
												$masscommittee1 = $row4['mem_asscomm'];
												$masscountry1 = $row4['mem_asscountry'];
												$mdate1 = $row4['mem_addeddate'];
										?>
                                        <tr>
                                            <td>ZAB-M-<?php echo $mid1; ?></td>
                                            <td><?php echo $mfname1; ?></td>
                                            <td><?php echo $mlname1; ?></td>
                                            <td><?php echo $memail1; ?></td>
                                            <td><?php echo $mcontact1; ?></td>
                                            <td><?php echo $mcommittee1; ?></td>
                                            <td><?php echo $masscommittee1; ?></td>
											<td><?php echo $masscountry1; ?></td>
                                        </tr>
										<?php } //inner while loop for members ?>
                                    </tbody>
                                </table>
                            </div>
							</div> <!-- table row ended -->
							
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
                            </div>
                        </div>
						</div>
					</div>
					<?php $count1++; } //while loop ends
					mysqli_close($con);
					?>  
                    </div>
					
					
					
                </div> <!-- Main Card Ends -->

            </div><!-- .animated -->
        </div><!-- .content -->





    </div><!-- /#right-panel -->
    <!-- Right Panel -->

    <script src="assets/js/vendor/jquery-2.1.4.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/plugins.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="assets/js/lib/data-table/datatables.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
    <script src="assets/js/lib/data-table/jszip.min.js"></script>
    <script src="assets/js/lib/data-table/pdfmake.min.js"></script>
    <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
    <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
    <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
    <script src="assets/js/lib/data-table/datatables-init.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#bootstrap-data-table-export').DataTable();
        });
    </script>

</body>
</html>
