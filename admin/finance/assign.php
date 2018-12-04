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
                        <h1>Assign Committee</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Committee</a></li>
                            <li class="active">Assign Committee</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
		<div class="content mt-3">
            <div class="animated fadeIn">
			    <div class="row">
					<?php
						$id = $_GET["id"];
						$query = "SELECT * FROM delegates where del_id = '$id'";
						$run = mysqli_query($con,$query);
						if($row = mysqli_fetch_array($run)){
								$id = $row['del_id'];
								$fname = $row['first_name'];
								$lname = $row['last_name'];
								$email = $row['email'];
								$cnic = $row['cnic'];
								$phone = $row['contact'];
								$institute = $row['institute'];
								$committee = $row['committee'];
								$del_type = $row['type'];
								$member_count = 0;
								$delegation_type = "Single Delegate";
								
								//checking delegation type
								if($del_type == 0 && ($committee == 'disec' || $committee == 'specpol')){
									$delegation_type = "Double Delegation";
								}
								else if($del_type == 1){
									$delegation_type = "Team Delegation";
								}
								
						}
					?>
					<div class="col-md-12 col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Delegates</strong>
                        </div>
                        <div class="card-body">
						<form method="post" action="" enctype="multipart/form-data">
						<table id="bootstrap-data-table" class="table table-responsive table-bordered" style="font-size:11px;">
						<thead>
						  <tr>
							<th>Delegate ID</th>
							<th>Full Name</th>
							<th>Email</th>
							<th>CNIC</th>
							<th>Phone</th>
							<th>Institute</th>
							<th>Preferred Committee</th>
							<th>Assign Committee</th>
							<th>Assign Country</th>
						  </tr>
						</thead>
						<tbody>
						  <tr style="background-color: #D4DDFF;">
							<td>
							<input type="hidden" name="headid" value = "<?php echo $id;?>" />
							ZAB-X-<?php echo $id; ?></td>
							<td><?php echo $fname." ".$lname; ?></td>
							<td><?php echo $email; ?></td>
							<td><?php echo $cnic; ?></td>
							<td><?php echo $phone; ?></td>
							<td><?php echo $institute; ?></td>
							<td><?php echo $committee; ?></td>
							<td>
								<select data-placeholder="Choose Committee" name="ass_comm_head" class="standardSelect" tabindex="1">
                                    <option value=""></option>
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
							</td>
							<td>
								<input type="text" id="country" name="ass_country_head" placeholder="Country name" class="form-control">
							</td>
						  </tr>
						  <?php
							if($delegation_type != "Single Delegate"){
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
									$mdate = $row1['mem_addeddate'];
							?>
								
								<tr>
									<td>
									<input type="hidden" name="memid[]" value = "<?php echo $mid;?>" />
									ZAB-M-<?php echo $mid; ?></td>
									<td><?php echo $mfname." ".$mlname; ?></td>
									<td><?php echo $memail; ?></td>
									<td> - </td>
									<td><?php echo $mcontact; ?></td>
									<td> - </td>
									<td><?php echo $mcommittee; ?></td>
									<td>
										<select data-placeholder="Choose Committee" name="ass_comm_mem[]" class="standardSelect" tabindex="1">
											<option value=""></option>
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
									</td>
									<td>
										<input type="text" id="country" name="ass_country_mem[]" placeholder="Country name" class="form-control">
									</td>
								</tr>
								
								
								
							<?php } //while loop
								} //if
						  ?>
						</tbody>
					  </table>
						<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
							<i class="fa fa-flag-checkered fa-lg"></i>&nbsp;
							<span id="payment-button-amount">Assign Committee</span>
						</button>
					  </form>
                        </div>
                    </div>
                </div>
					
					<?php
						if(isset($_POST["submit"])){
							$head_id = $_POST['headid'];
							$head_comm = $_POST['ass_comm_head'];
							$head_country = $_POST['ass_country_head'];
							
							$mem_id = $_POST['memid'];
							$mem_comm = $_POST['ass_comm_mem'];
							$mem_country = $_POST['ass_country_mem'];
							$length= sizeof($mem_id);
							
							$query = "Update delegates set assigned_committee = '$head_comm', assigned_country = '$head_country' where del_id = '$head_id'";
							$result = mysqli_query($con,$query);
							
							if($result){
								if($mem_id != null){
									for($i=0; $i< $length ;$i++){
										$mem_id1 = $mem_id[$i];
										$mem_comm1 = $mem_comm[$i];
										$mem_country1 = $mem_country[$i];
										$query2 = "Update delegate_members set mem_asscomm = '$mem_comm1', mem_asscountry = '$mem_country1' where del_memid = '$mem_id1'";
										$result2 = mysqli_query($con,$query2);
									}
									if($result2){
										echo "<script>alert('Committees Assigned Successfully');</script>";
										echo "<script> window.open('assign-committee.php','_self');</script>";
									}
									else{
										echo "<script>alert('Committees Not Assigned');</script>";
									}
								}
								else{
									echo "<script>alert('Committees Assigned Successfully');</script>";
									echo "<script> window.open('assign-committee.php','_self');</script>";
								}
							}
							else{
								echo "<script>alert('Committees Not Assigned');</script>";
							}
						}
					
					?>
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
