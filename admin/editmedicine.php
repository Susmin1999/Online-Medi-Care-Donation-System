<?php
include('db.php');

error_reporting(0);
include('include/config.php');

session_start();
//include('include/checklogin.php');
$mediid = $_SESSION['mediid'];
$uid = $_GET['uid'];
	
if(isset($_POST['submit']))
{
$medicine_name=$_POST['medicine_name'];
$medicinecompany=$_POST['medicinecompany'];
$dose=$_POST['dose'];

$sql = "UPDATE `medicines` SET `medicine_name`='$medicine_name',`medicinecompany`='$medicinecompany',`dose`='$dose' where mediid='$uid'";
$med_update = mysqli_query($con,$sql);
if($med_update)
{
	$msg="Successfully Updated";
}else{
	$msg="fail";
}
// $sql=mysqli_query($con,"UPDATE medicines set medicine_name='$medicine_name',medicinecompany='$medicinecompany',dose='$dose' where mediid='".$_SESSION['login_main']."'");
// if($sql)
// {
// $msg="Medicine updated Successfully";
// }

}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | Edit Medicine</title>
		
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
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Edit | Medicine</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Edit </span>
									</li>
									<li class="active">
										<span>Medicine</span>
									</li>
								</ol>
							</div>
						</section>
						<!-- end: PAGE TITLE -->
						<!-- start: BASIC EXAMPLE -->
						<div class="container-fluid container-fullw bg-white">
							<div class="row">
								<div class="col-md-12">
<h5 style="color: green; font-size:18px; ">
<?php if($msg) { echo htmlentities($msg);}?> </h5>

									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Medicine</h5>
												</div>
												<div class="panel-body">
                                                  
									<?php 
$sql=mysqli_query($conn,"select * from medicines where mediid='".$_SESSION['login_main']."'");
while($data=mysqli_fetch_array($sql))
{
?>
</div>
<h4><?php echo htmlentities($data['medicine_name']);?>'s Medicine</h4>
												<form role="form" name="edit" method="post">
													

                                                <div class="form-group">
															<label for="medicine_name">
																Medicine Name
															</label>
	<input type="text" name="medicine_name" class="form-control"  writeonly="writeonly" value="<?php echo $data['medicine_name'];?>">
	</div>

														<div class="form-group">
															<label for="medicinecompany">
																Medicine Company
															</label>
	<input type="text" name="medicinecompany" class="form-control" writeonly="writeonly" value="<?php echo $data['medicinecompany'];?>">
														</div>

                                                        <div class="form-group">
															<label for="dose">
																Dose
															</label>
	<input type="text" name="dose" class="form-control" writeonly="writeonly" value="<?php echo $data['dose'];?>">
														</div>


<button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
<button type="submit" class="btn btn-o btn-primary"><a href="viewmedicine.php">Back</button>

													</form>
													
<?php } ?>
													<?php  ?>
												</div>
											</div>
										</div>
											
											</div>
										</div>
									<div class="col-lg-12 col-md-12">
											<div class="panel panel-white">		
											</div>
										</div>
									</div>
								</div>
						
						<!-- end: BASIC EXAMPLE -->
			
					
					
						
						
					
						<!-- end: SELECT BOXES -->
						
					</div>
				</div>
			</div>
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			
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
</html>
