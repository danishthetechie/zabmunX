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
        <?php include "navbar.php" ?>
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
                        <h1>Members</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a>Members</a></li>
                            <li style="font-weight:bold">View Members</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">
                <div class="row">
				
				<div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <strong class="card-title">Members</strong>
                        </div>
                        <div class="card-body">
                  <form method="post" enctype="multipart/form-data">
				  <table id="bootstrap-data-table" class="table table-striped table-bordered table-responsive">
                    <thead>
                      <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
						<th>Position</th>
						<th>Email</th>
                        <th>Contact</th>
						<th>Status</th>
						</tr>
                    </thead>
                    <tbody>
                      <?php
						//		if($fname==null and $department==null){
									 $query = "SELECT `mem_id`, `first_name`, `last_name`, `gender`, `dob`, `phone`, `department`, `register_date`, `status`, `email`, `position` FROM `members` where status = 1";
												// }
								 // else{
										 // $query = "SELECT `mem_id`, `first_name`, `last_name`, `gender`, `dob`, `phone`, `department`, `register_date`, `status`, `email`, `position` FROM `members` WHERE first_name like '%$fname%' and department like '%$department%' and status = 1";
									 // }
											$run = mysqli_query($con,$query);
											$i=1;
															
											while($row = mysqli_fetch_array($run)){
											$mem_id = $row['mem_id'];
											$fname = $row['first_name'];
											$lname = $row['last_name'];
											$memberid = $row['mem_id'];
											$dept = $row['department'];
											$email=$row['email'];
											$Contact=$row['phone'];
											$position=$row['position'];
											$status='';
											if($row['status']==1){
												$status='Active';
											}
											else{
												$status='Not Active';
											}
											
					   ?>
					  <tr>
                        <td>
						<input type="hidden" name="memid" value="<?php $mem_id; ?>" />
						<?php echo $fname;?></td>
                        <td><?php echo $lname;?></td>
                        <td><?php echo $dept;?></td>
                        <td><?php echo $position;?></td>
                        <td><?php echo $email;?></td>
                        <td><?php echo $Contact;?></td>
						<td><?php echo $status;?></td>
						
						
						
                      </tr>
                    <?php  
					 }//While Ends
						mysqli_close($con);
						
					 ?>
					</tbody>
					
                  </table>
				  </form>
                        </div>
                    </div>
                </div>
						


                </div>
            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->
	<?php 
		if(isset($_POST["update"])){
			echo "<script>alert('Attd ');</script>";
			 $id=$_POST["memid"];
			 $_SESSION['id'] = $id;
			  header('Location: updatemembers.php?id='.$id);
			  exit;
		}
	?>
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
        $(document).ready(function() {
          $('#bootstrap-data-table-export').DataTable();
        } );
    </script>

</body>
</html>
