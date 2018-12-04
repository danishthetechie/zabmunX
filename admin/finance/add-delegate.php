<?php include "db.php";

?>
<!doctype html>
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ZABMUN</title>
    <meta name="description" content="ZABMUN">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/themify-icons.css">
    <link rel="stylesheet" href="assets/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
    <!-- <link rel="stylesheet" href="assets/css/bootstrap-select.less"> -->
    <link rel="stylesheet" href="assets/scss/style.css">
    <link href="assets/css/lib/vector-map/jqvmap.min.css" rel="stylesheet">

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
						<h1>Single Delegates</h1>
					</div>
				</div>
			</div>
			<div class="col-sm-8">
				<div class="page-header float-right">
					<div class="page-title">
						<ol class="breadcrumb text-right">
							<li><a href="#">Dashboard</a></li>
							<li class="active">Add Delegate</li>
						</ol>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class="content mt-3">
			<div class="animated fadeIn">
			
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Add Delegate</strong>
                        </div>
                        <div class="card-body">
                          <!-- Credit Card -->
                          <div id="pay-invoice">
                              <div class="card-body">
                                  <form action="" method="post" novalidate="novalidate">
                                      <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">First Name</label>
                                          <input id="cc-name" name="fname" type="text" class="form-control cc-name valid">
                                          
                                      </div>
									  <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">Last Name</label>
                                          <input id="cc-name" name="lname" type="text" class="form-control cc-name valid">
                                          
                                      </div>
									  <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">Email - optional</label>
                                          <input id="cc-name" name="email" type="email" class="form-control cc-name valid">
										  
                                      </div>
									  <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">CNIC - optional</label>
                                          <input id="cc-name" name="cnic" type="text" class="form-control cc-name valid" placeholder="#ID for SZABIST students">
                                          
                                      </div>
									  <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">Contact</label>
                                          <input id="cc-name" name="phone" type="text" class="form-control cc-name valid">
                                          
                                      </div>
									  <div class="form-group has-success col-lg-6 col-md-6">
                                          <label for="cc-name" class="control-label mb-1">Institute - optional</label>
                                          <input id="cc-name" name="institute" type="email" class="form-control cc-name valid">
										  
                                      </div>
										<div class="form-group has-success col-lg-6 col-md-6">
											<label for="selectLg" class=" form-control-label">Select Preffered Committee</label>
											
											  <select name="pref_comm" id="selectLg" class="form-control-md form-control">
												<option value="unsc">UNSC</option>
												<option value="disec">DISEC (DD Committee)</option>
												<option value="specpol">SPECPOL (DD Committee)</option>
												<option value="ecosoc">ECOSOC</option>
												<option value="csw">CSW</option>
												<option value="iaea">IAEA</option>
												<option value="who">WHO</option>
												<option value="arab-league">ARAB LEAGUE</option>
												<option value="hcc">HCC</option>
												<option value="majlis-e-shura">MAJLIS-E-SHURA</option>
											  </select>
											
										  </div>
										  <div class="form-group has-success col-lg-6 col-md-6">
											<label for="selectLg" class=" form-control-label">Select Delegate Type</label>
											
											  <select name="typee" id="selectLg" class="form-control-md form-control">
												<option value="0">Single Delegate</option>
												<option value="1">Team Delegation</option>
											  </select>
											
										  </div>									  
                                      <div class="form-group has-success col-lg-12 col-md-12">
                                          <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-success btn-block">
                                              <i class="fa fa-plus fa-lg"></i>&nbsp;
                                              <span id="payment-button-amount">Add Delegate</span>
                                          </button>
                                      </div>
                                  </form>
                              </div>
                          </div>
						<?php
							if(isset($_POST["submit"])){
								$fname = $_POST['fname'];
								$lname = $_POST['lname'];
								$phone = $_POST['phone'];
								$email = $_POST['email'];
								$cnic = $_POST['cnic'];
								$institute = $_POST['institute'];
								$comm = $_POST['pref_comm'];
								$type = $_POST['typee'];
								$date = date("Y-m-d");
								$status=true;
								if($email != null){
									$query="INSERT INTO delegates(first_name, last_name, contact, email, cnic, institute, committee, register_date, status, type) 
									VALUES ('$fname','$lname','$phone', '$email', '$cnic', '$institute', '$comm','$date','$status','$type')";
								}
								else{
									$query="INSERT INTO delegates(first_name, last_name, contact, cnic, institute, committee, register_date, status, type) 
									VALUES ('$fname','$lname','$phone', '$cnic', '$institute', '$comm','$date','$status','$type')";
								}
									

								$result = mysqli_query($con,$query);

								if($result)
								{
									echo "<script>alert('Registered Successfully');</script>";
								}
								else{
									echo "<script>alert('Not Registered');</script>";
								}
							
							}
						?>
                        </div>
                    </div> <!-- .card -->

                  </div><!--/.col-->

				</div>
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
