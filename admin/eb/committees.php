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
                        <h1>Committees</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li class="active">View Committees</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <div class="content mt-3">
            <div class="animated fadeIn">
                <?php
					$useremail = $_SESSION['email'];
					$query = "select * from committees";
					$run = mysqli_query($con,$query);
					while($row = mysqli_fetch_array($run)){
						$id = $row['commid'];
						$name = $row['comm_name'];
						$shortname = $row['comm_shortname'];
						$desc = $row['comm_desc'];
						$topic1 = $row['topic1'];
						$topic2 = $row['topic2'];
						$type = $row['comm_type'];
						$cd1 = $row['cd1'];
						$cd2 = $row['cd2'];
						$acd1 = $row['acd1'];
						$acd2 = $row['acd2'];
						$acd3 = $row['acd3'];
						$delegates = $row['delegates'];
				?>
				<div class="col-md-4">
                        <section class="card">
                            <div class="bg-dark">
                                <div class="media">
                                    <a href="#">
                                        <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="images/admin.jpg">
                                    </a>
                                    <div class="media-body">
                                        <h2 class="text-white display-6"><?php echo $shortname; ?></h2>
                                        <p class="text-light"><?php echo $name." (".$type.")"; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="weather-category twt-category">
                                <ul>
                                    <li class="active">
                                        <h5>Topic 1</h5>
                                        <?php echo $topic1; ?> 
                                    </li>
                                    <li>
                                        <h5>Topic 2</h5>
                                        <?php echo $topic2; ?>
                                    </li>
                                </ul>
								<ul>
                                    <li class="active">
                                        <h5>Delegates</h5>
                                        <?php echo $delegates; ?> 
                                    </li>
                                    <li>
                                        <h5>Director 1</h5>
                                        <?php echo $cd1; ?>
                                    </li>
									<li>
                                        <h5>Director 2</h5>
                                        <?php echo $cd2; ?>
                                    </li>
                                </ul>
								<ul>
                                    <li class="active">
                                        <h5>Asst.CD 1</h5>
                                        <?php echo $acd1; ?> 
                                    </li>
                                    <li>
                                        <h5>Asst.CD 2</h5>
                                        <?php echo $acd2; ?>
                                    </li>
									<li>
                                        <h5>Asst.CD 3</h5>
                                        <?php echo $acd3; ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="twt-write col-sm-12">
                                <textarea placeholder="<?php echo $desc; ?>" rows="1" class="form-control t-text-area" disabled></textarea>
                            </div>
                        </section>
				</div>
				<?php } ?>
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
