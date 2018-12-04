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
                        <h1>Update Hand Cash Payments</h1>
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
		
		<div class="content mt-3">
            <div class="animated fadeIn">
			    <div class="row">
					<?php
						$id = $_GET["id"];
						$query = "SELECT * FROM delegates d,payments p where p.del_id = '$id' and p.del_id = d.del_id";
						$run = mysqli_query($con,$query);
						if($row = mysqli_fetch_array($run)){
								$id = $row['del_id'];
								$fname = $row['first_name'];
								$lname = $row['last_name'];
								$committee = $row['committee'];
								$del_type = $row['type'];
								
								$pay_id = $row['pay_id'];
								$amount = $row['amount'];
								$balance = $row['balance'];
								$info = $row['discount_info'];
								$total_amount = $row['total_amount'];
								$delegation_type = 'Single Delegate';
								$member_count = 0;
								 //= 3500;
								
								//checking delegation type
								if($del_type == 0 && $committee != 'disec' && $committee != 'specpol'){
									$delegation_type = "Single Delegate";
								}
								else if($del_type == 0 && ($committee == 'disec' || $committee == 'specpol')){
									$delegation_type = "Double Delegation";
								}
								else if($del_type == 1){
									$delegation_type = "Team Delegation";
								}
								
								
								//checking member count and total amount on basis of member count
								if($delegation_type == "Double Delegation"){
									$member_count = 2;
									//$total_amount = 7000;
								}
								else if($delegation_type == "Team Delegation"){
									//selecting members
									$query2 = "SELECT COUNT(head_del) FROM `delegate_members` where head_del = '$id'";
									$run2 = mysqli_query($con,$query2);
									if($row2 = mysqli_fetch_array($run2)){
										$member_count = $row2['COUNT(head_del)'];
										//$total_amount = 3500 * $member_count;
									}
								}
								else{
										$member_count = 0;
										//$total_amount = 3500;
								}
								
						}
					?>
					<div class="col-lg-12">
                    <div class="card">
                      <div class="card-header">
                        <strong>Cash Payments</strong>
						<?php echo $pay_id; ?>
                      </div>
                      <div class="card-body card-block">
                        <form action="" method="post" class="form-horizontal">
                          
                          <div class="row form-group">
                            <div class="col col-md-3"><label for="select" class=" form-control-label">Head Delegate ID: ZAB-X-</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="head_del" value="<?php echo $id.". ".$fname." ".$lname; ?>" disabled="" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Delegation Type</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="del_type" value="<?php echo $delegation_type; ?>" disabled="" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Member Count</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="members" value="<?php echo $member_count; ?>" disabled="" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="disabled-input" class=" form-control-label">Total Amount</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="disabled-input" name="tot_amount" value="<?php echo $total_amount; ?>" disabled="" class="form-control"></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="textarea-input" class=" form-control-label">Additional Info</label></div>
                            <div class="col-12 col-md-9"><textarea name="info" id="textarea-input" rows="9" value ="<?php echo $info; ?>" class="form-control"></textarea></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Amount</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="amount" value="<?php echo $amount; ?>" class="form-control"><small class="form-text text-muted">Enter Amount in figures</small></div>
                          </div>
						  <div class="row form-group">
                            <div class="col col-md-3"><label for="text-input" class=" form-control-label">Balance</label></div>
                            <div class="col-12 col-md-9"><input type="text" id="text-input" name="balance" value="<?php echo $balance; ?>" class="form-control"><small class="form-text text-muted">Keep it 0 if there is no remaining balance</small></div>
                          </div>
						  <div>
                            <button id="payment-button" type="submit" name="submit" class="btn btn-lg btn-info btn-block">
								<i class="fa fa-money fa-lg"></i>&nbsp;
								<span id="payment-button-amount">Pay</span>
                            </button>
                            </div>
                        </form>
                      </div>
                    </div>
                  </div>
					
					<?php
						if(isset($_POST["submit"])){
							//$head_delegate = $_POST['head_del'];
							//$total_amount = $_POST['tot_amount'];
							//$info = $_POST['info'];
							$amount = $_POST['amount'];
							$balance = $_POST['balance'];
							$date = date("Y-m-d");
							$status = "Approved";
							if($balance > 0){
								$status = "Pending";
							}
							
							$query3 = "Update payments set amount = '$amount', balance = '$balance', payment_date = '$date', status = '$status' WHERE pay_id = '$pay_id'";
							$result3 = mysqli_query($con,$query3);
							if($result3){
								echo "<script>alert('Payment Updated Successfully')</script>";
								echo "<script> window.open('add-cash-payment.php','_self');</script>";
							}
							else{
								echo "<script>alert('Payment Not Updated')</script>";
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
