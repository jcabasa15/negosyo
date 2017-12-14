<!DOCTYPE html>
<html>
<head>
	  <title>Nego$yo</title>
	  <meta charset="utf-8">
	  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  	<meta name="description" content="">
  	<meta name="author" content="">
  	<!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Page level plugin CSS-->
    <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>
<body class="fixed-nav sticky-footer bg-dark" id="page-top">
	<!--Navbar-->
		<nav class="navbar navbar-expand-lg bg-dark navbar-dark fixed-top" id="mainNav">
			<a class="navbar-brand pl-4" href="index.html"><img src="img/nego$yo.png" class="d-inline-block alt="Logo" style="width:50px;"> NEGO$YO</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-controls="collapsibleNavbar" aria-expanded="false" aria-label="Toggle navigation">
 				<span class="navbar-toggler-icon"></span>
    		</button>
  			<!--Sidebar-->
  		<div class="collapse navbar-collapse" id="collapsibleNavbar">
  		<ul class="navbar-nav navbar-sidenav pt-3" style="margin-top: 60px;" id="exampleAccordion">
     			<li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
     				<a class="nav-link" href="index.html">
     					<i class="fa fa-fw fa-dashboard"></i>
     					<span class="nav-link-text"> Home</span>
     				</a>
     			</li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Catalog">
                    <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseCatalog" data-parent="#exampleAccordion">
                        <i class="fa fa-fw fa-book"></i>
                        <span class="nav-link-text"> Catalog</span>                        
                    </a>
                    <ul class="sidenav-second-level collapse" id="collapseCatalog">
                            <li>
                                <a href="products.php">Products</a>
                            </li>
                            <li>
                                <a href="categories.php">Categories</a>
                            </li>
                        </ul>
                </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Customers">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-user-circle"></i>
              <span class="nav-link-text"> Customers</span>
            </a>
                    <ul class="sidenav-second-level collapse" id="collapseComponents">
                        <li>
                            <a href="navbar.html">Customers</a>
                        </li>
                        <li>
                            <a href="cards.html">Customer Roles</a>
                        </li>
                        <li>
                            <a href="navbar.html">Online Customers</a>
                        </li>
                        <li>
                            <a href="cards.html">Customer Reports</a>
                        </li>
                        <li>
                            <a href="navbar.html">Vendors</a>
                        </li>
                        <li>
                            <a href="cards.html">Activity Log</a>
                        </li>
                    </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sales">
            <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseSales" data-parent="#exampleAccordion">
              <i class="fa fa-fw fa-shopping-cart"></i>
              <span class="nav-link-text"> Sales</span>
            </a>
                    <ul class="sidenav-second-level collapse" id="collapseSales">
                        <li>
                            <a href="navbar.html">Orders</a>
                        </li>
                        <li>
                            <a href="cards.html">Shipments</a>
                        </li>
                        <li>
                            <a href="navbar.html">Return Requests</a>
                        </li>
                        <li>
                            <a href="cards.html">Recurring Payments</a>
                        </li>
                        <li>
                            <a href="navbar.html">Gift Cards</a>
                        </li>
                        <li>
                            <a href="cards.html">Currents Shopping Cards</a>
                        </li>
                         <li>
                            <a href="navbar.html">Currents Wishlists</a>
                        </li>
                        <li>
                            <a href="cards.html">Best Sellers</a>
                        </li>
                        <li>
                            <a href="navbar.html">Products Never Purchased</a>
                        </li>
                        <li>
                            <a href="cards.html">Country Report</a>
                        </li>
                    </ul>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
                    <a class="nav-link" href="table.php">
                        <i class="fa fa-fw fa-truck"></i>
                        <span class="nav-link-text"> New Arrivals</span>
                    </a>
               </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tables">
            <a class="nav-link" href="table.php">
              <i class="fa fa-fw fa-table"></i>
              <span class="nav-link-text"> Tables</span>
            </a>
          </li>
          <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Charts">
            <a class="nav-link" href="#">
              <i class="fa fa-fw fa-area-chart"></i>
              <span class="nav-link-text"> Chart</span>
            </a>
          </li>
        </ul>
        <ul class="navbar-nav sidenav-toggler">
            <li class="nav-item">
                <a class="nav-link text-center" id="sidenavToggler">
                  <i class="fa fa-fw fa-angle-left"></i>
                </a>
            </li>
        </ul>
     		<!--Navbar-->
        <ul class="navbar-nav ml-auto">
    		<form class="form-inline my-2 my-lg-0 mr-lg-2">
            	<div class="input-group">
             	 <input class="form-control" type="text" placeholder="Search for...">
              		<span class="input-group-btn">
                		<button class="btn btn-success" type="button">
                			<i class="fa fa-search"> </i>
               			</button>
              		</span>
           		</div>
     		</form>
     		<li class="nav-item">
          		<a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            	<i class="fa fa-fw fa-sign-out"></i>Logout
            	</a>
        	</li>
     	</ul>
  		</div>
	</nav>
	<div class="content-wrapper">
    	<div class="container-fluid pt-3">
    	<!--BreadCrumbs-->
    		<ol class="breadcrumb">
    		 	<li class="breadcrumb-item">
    		 		<a href="#">Dashboard</a>
    		 	</li>
    		 	<li class="breadcrumb-item active">CRUD Table</li>
    		</ol>
        <!--CRUD Table-->
    <div class="card mb-3">
        <div class="card-header">
          <i class="fa fa-table"></i>&nbsp CRUD Table</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Titled</th>
                  <th>Description</th>
                  <th>Created at</th>
                  <th>Actions</th>
                </tr>
              </thead>
              </table>
    	</div>
       <button class="btn btn-primary ml-3 mt-3.5" onclick="location.href='#'">Add New</button>
    </div>
    </div>

	<!-- Logout Modal-->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button type="button" class="btn btn-primary">Logout</button>
          </div>
        </div>
      </div>
    </div>
    <footer class="sticky-footer">
    	<div class="container">
    		<div class="text-center">
    			<small>COPYRIGHT © 2017 NEGO$YO PHILIPPINES. ALL RIGHT RESERVED</small>
    		</div>
    	</div>
    </footer>
    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
    <!-- Page level plugin JavaScript-->
    <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script>
    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin.min.js"></script>
    <!-- Custom scripts for this page-->
    <script src="js/sb-admin-datatables.min.js"></script>
    <script src="js/sb-admin-charts.min.js"></script>
</body>
</html>