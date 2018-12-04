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
                        <h1>Add Bank Slip Payments</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">Payments</a></li>
                            <li class="active">Add Payments</li>
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
                                <strong class="card-title">Add Payments</strong>
                            </div>
                            <div class="card-body">
                                <table id="bootstrap-data-table" class="table table-striped table-bordered" style="font-size:11px;">

                                    <thead>
                                        <tr>
                                            <th>Delegate ID</th>
                                            <th>First Name</th>
                                            <th>Email</th>
                                            <th>CNIC</th>
                                            <th>Phone</th>
                                            <th>Total Amount</th>
                                            <th>View Invoice</th>
											<th>Add Cash</th>
											<th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php
											$query = "select *,p.status as pstatus from payments p, delegates d where p.del_id = d.del_id and p.image is not NULL and p.status = 'Pending'";
											$run = mysqli_query($con,$query);
											$count = 1;
											while($row = mysqli_fetch_array($run)){
												$payid = $row['pay_id'];
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
												$img = $row['image'];
												$pay_status = $row['pstatus'];
												$amount = $row['amount'];
												$totalamount = $row['total_amount'];
												
										?>
                                        <tr>
                                            <td><?php echo $id; ?><input type="hidden" name="pay_id[]" value="<?php echo $payid; ?>"></td>
                                            <td><?php echo $fname ." ". $lname; ?></td>
                                            <td><?php echo $email; ?></td>
                                            <td><?php echo $cnic; ?></td>
                                            <td><?php echo $contact; ?></td>
                                            <td><?php echo $totalamount; ?></td>
											<td><button type="button" class="btn btn-link btn-sm" data-toggle="modal" data-target="#scrollmodal<?php echo $count; ?>">View Bank Slip</button></td>
                                            <td><input  type="text" name="amount[]" value="<?php echo ($amount == null)? '0': $amount; ?>"></td>
											<td>
												<select name="status[]" id="SelectLm" class="form-control-sm">
													<option value="<?php echo $pay_status; ?>" selected><?php echo $pay_status; ?></option>
													<option value="Approved">Approved</option>
												 </select>
											</td>
                                        </tr>
										<div class="modal fade" id="scrollmodal<?php echo $count; ?>" tabindex="-1" role="dialog" aria-labelledby="scrollmodalLabel" aria-hidden="true">
									<div class="modal-dialog modal-lg" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												<?php echo '<img src="data:image/jpeg;base64,'.base64_encode($img).'"/>'; ?>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-primary" data-dismiss="modal">Okay</button>
											</div>
										</div>
									</div>
								</div>
										<?php $count++; }  //while loop end ?>
                                    </tbody>
                                </table>
								<button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
								  <i class="fa fa-lock fa-lg"></i>&nbsp;
								  <span id="payment-button-amount">Update Payment</span>
								</button>		
                            </div>
							
                        </div>
						
                    </div>
            </div><!-- .animated -->
			
        </div><!-- .content -->
		</form>
		
		<?php
						if(isset($_POST["submit"])){
							$result2 = '';
							$pid = $_POST['pay_id'];
							$pamount = $_POST['amount'];
							$pstatus = $_POST['status'];
							$length = sizeof($pid);
							echo $pid[0];
							for($i=0;$i<$length ;$i++){
								
								$pid2 = $pid[$i];
								$pstatus2 = $pstatus[$i];
								$pamount2 = $pamount[$i];
								//echo "<script>alert('$pid2');</script>";
								$query2 = "Update payments set `status` = '$pstatus2', `amount` = '$pamount2' where `pay_id` = '$pid2' ";
								$result2 = mysqli_query($con,$query2);
							}
							
							if($result2){
							echo "<script>alert('Payment Updated');</script>";
							echo "<meta http-equiv='refresh' content='0'>";
						  }
						} 
						
						mysqli_close($con);
						?>






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
