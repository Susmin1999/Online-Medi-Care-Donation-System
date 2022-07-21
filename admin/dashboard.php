<?php
session_start();
error_reporting(0);
include('include/config.php');		
$d=$_SESSION['login_main'];
if($d)
{

?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin  | Dashboard</title>
		
		<link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.min.css">
		<link href="vendor/animate.css/animate.min.css" rel="stylesheet" media="screen">
		<link href="vendor/perfect-scrollbar/perfect-scrollbar.min.css" rel="stylesheet" media="screen">
		<link href="vendor/switchery/switchery.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.css" rel="stylesheet" media="screen">
		<link href="vendor/select2/select2.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-datepicker/bootstrap-datepicker3.standalone.min.css" rel="stylesheet" media="screen">
		<link href="vendor/bootstrap-timepicker/bootstrap-timepicker.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="assets/css/styles.css">
		<link rel="stylesheet" href="assets/css/plugins.css">
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
        <?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						<?php include('db.php'); ?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Admin | Dashboard</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Admin</span>
									</li>
									<li class="active">
										<span>Dashboard</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->


						
						<div class="container-fluid container-fullw bg-white">
							<div class="row-sm-4">
						<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Medicines</h2>
											
											<p class="links cl-effect-1">
												<a href="addmedicine.php">
													Add Medicines
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="viewmedicine.php">
													View Medicines
												</a>
											</p>
										</div>
									</div>
								</div> -->


								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Medical Shop</h2>
											
											<p class="links cl-effect-1">
												<a href="viewmshoprequest.php">
													View Medical Shop Request
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="approvedmshopreq.php">
													Approved Medical Shop
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="rejectedmshopreq.php">
													Rejected Medical Shop
												</a>
											</p>
										</div>
									</div>
								</div>


								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Donor</h2>
											
											<p class="links cl-effect-1">
												<a href="viewdonrequest.php">
													View Donor Request
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="approveddonreq.php">
													Approved Donors
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="rejecteddonreq.php">
													Rejected Donors
												</a>
											</p>
										</div>
									</div>
								</div>


								



								<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Medicine Category</h2>
											
											<p class="links cl-effect-1">
												<a href="addmedcategory.php">
													Add Medicine Category
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="viewmedcategory.php">
													Actions/View
												</a>
											</p>
										</div>
									</div>
								</div> -->
							
				

							<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Manager</h2>
											
											<p class="links cl-effect-1">
												<a href="addmanager.php">
													Add Manager
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="viewmanager.php">
													View Manager
												</a>
											</p>
										</div>
									</div>
								</div> -->
								
							<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-smile-o fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle">Patients</h2>
											
											<p class="links cl-effect-1">
												<a href="viewpatient.php">
													View Patients
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="viewenquiry.php">
													View Patients Request
												</a>
											</p>
											<p class="links cl-effect-1">
												<a href="viewenquiry.php">
													View Status
												</a>
											</p>
											
										</div>
									</div>
								</div>


								<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle"> View Enquiry</h2>
											
											<p class="links cl-effect-1">
												<a href="viewenquiry.php">
													View Medicine Enquiry
												</a>
											</p>
										</div>
									</div>
								</div>
 -->

								<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle"> View Donated Medicine</h2>
											
											<p class="links cl-effect-1">
												<a href="viewdonatedmedicine.php">
												Donated Medicine
												</a>
											</p>
										</div>
									</div>
								</div> -->

                            
								<div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i><p></p></span>
											<h2 class="StepTitle"> View Shop Added Medicine</h2>
											
											<p class="links cl-effect-1">
												<a href="viewmshopaddmedicine.php">
												Shop Added Medicine
												</a>
											</p>
										</div>
									</div>
								</div>
							


								<!-- <div class="col-sm-4">
									<div class="panel panel-white no-radius text-center">
										<div class="panel-body">
											<span class="fa-stack fa-2x"> <i class="fa fa-square fa-stack-2x text-primary"></i> <i class="fa fa-terminal fa-stack-1x fa-inverse"></i> </span>
											<h2 class="StepTitle"> Request Approval</h2>
											
											<p class="links cl-effect-1">
												
													<a href="requestapproval.php">
												<?php $sql= mysqli_query($conn,"SELECT * FROM reg_tbl");
                                                 $num_rows2 = mysqli_num_rows($sql);
                                                  {
                                                  ?>
											Total Request :<?php echo htmlentities($num_rows2);  } ?>	
												</a>
												</a>
											</p>
										</div>
									</div>
								</div> -->


								<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
	<?php
}
header("Location:../log.php");
?>
</html>
