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
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.png" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="#"><i class="fa fa-power -off"></i>Logout</a>
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
                        <h1>Assign Committee</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Committees</a></li>
                            <li class="active">Assign Committee</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		<form method = "post">
        <div class="content mt-3">
            <div class="animated">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <strong class="card-title">Assign Committee</strong>
                            </div>
                            <div class="card-body">
								<form method="post" enctype="multipart/form-data">
                                <table id="bootstrap-data-table" class="table table-responsive table-striped table-bordered" style="font-size:11px;">

									<thead>
										<tr>
											<th>Delegate ID</th>
											<th>Full Name</th>
											<th>Email</th>
											<th>CNIC</th>
											<th>Phone</th>
											<th>Institute</th>
											<th>Preferred Committee</th>
											<th>Type</th>
											<th>Register Date</th>
											<th>Action</th>
											
										</tr>
									</thead>
									<tbody>
										<?php
											$useremail = $_SESSION['email'];
											
											$query = "select * from delegates d, payments p where p.del_id = d.del_id and d.assigned_committee is NULL";
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
												$address = $row['address'];
												$type = $row['type'];
												$date = $row['register_date'];
												$delegate_type = "Single Delegate";
												if($type == 0 && ($committee == "disec" || $committee == "specpol")){
													$delegate_type = "Double Delegate";
												}
												else if($type == 1){
													$delegate_type = "Team Delegation";
												}
										?>
										<tr>
											<td>ZAB-X-<?php echo $id; ?></td>
											<td><?php echo $fname." ".$lname; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $cnic; ?></td>
											<td><?php echo $contact; ?></td>
											<td><?php echo $institute; ?></td>
											<td><?php echo $committee; ?></td>
											<td><?php echo $delegate_type; ?></td>
											<td><?php echo $date; ?></td>
											<td>
												<a href = "assign.php?id=<?php echo $id;?>"><button type="button" class="btn btn-success btn-sm"><i class="fa fa-plus"></i>&nbsp; Assign Committee</button></a>
											</td>
										</tr>
											<?php } 
											mysqli_close($con);
											?>
									</tbody>
								</table>
								</form>
                            </div>
                        </div>
						
                    </div>
            </div><!-- .animated -->
			
        </div><!-- .content -->
		</form>






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
