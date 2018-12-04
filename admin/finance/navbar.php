<nav class="navbar navbar-expand-sm navbar-default">
            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./"><img src="images/zabmun-white.png" alt="Logo"></a>
                <a class="navbar-brand hidden" href="./"><img src="images/zabmun-white.png" alt="Logo"></a>
            </div>
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="add-delegate.php"> <i class="menu-icon fa fa-dashboard"></i>Add Delegate </a>
                    </li>


                    <h3 class="menu-title">Registrations</h3><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-laptop"></i>Delegates</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-user"></i><a href="single-delegate.php">Single Delegate</a></li>
                            <li><i class="fa fa-users"></i><a href="delegations.php">Delegations</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-money"></i>Payments</a>
                        <ul class="sub-menu children dropdown-menu">
                            <!--<li><i class="fa fa-plus"></i><a href="add-bank-payment.php">View Bank Slip Payments</a></li>-->
							<li><i class="fa fa-plus"></i><a href="add-cash-payment.php">Add Payments</a></li>
							<li><i class="fa fa-plus"></i><a href="balance-payment.php">Balance Remaining Payments</a></li>
							<!--<li><i class="fa fa-plus"></i><a href="invoice.php">View Invoice</a></li>-->
							
                        </ul>
                    </li>
					<h3 class="menu-title">Committees</h3><!-- /.menu-title -->
					<li>
                        <a href="committees.php"> <i class="menu-icon ti-credit-card"></i>View Comittees</a>
                    </li>
					<li>
                        <a href="assign-committee.php"> <i class="menu-icon ti-credit-card"></i>Assign Committees</a>
                    </li>
					<h3 class="menu-title">Paid Delegates</h3><!-- /.menu-title -->
                    <li>
                        <a href="paid-single-delegate.php"> <i class="menu-icon ti-credit-card"></i>Single Delegates</a>
                    </li>
					<li>
                        <a href="paid-delegations.php"> <i class="menu-icon ti-credit-card"></i>Delegations/Double Delegates</a>
                    </li>
                    <h3 class="menu-title">Take Care</h3><!-- /.menu-title -->
                    <li>
                        <a href="logout.php"> <i class="menu-icon ti-share"></i>Logout</a>
                    </li>

                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>