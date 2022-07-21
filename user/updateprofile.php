<?php

//error_reporting(0);
include('include/config.php');

session_start();
//include('include/checklogin.php');

	
if(isset($_POST['submit']))
{
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$address=$_POST['address'];
$gender=$_POST['gender'];
$phone=$_POST['phone'];
$street=$_POST['street'];
$city=$_POST['city'];
$district=$_POST['district'];
$pin=$_POST['pin'];


$sql=mysqli_query($con,"UPDATE reg_tbl set fname='$fname',lname='$lname',gender='$gender',address='$address',street='$street',city='$city',district='$district',pin='$pin',phone='$phone' where login_id='".$_SESSION['login_main']."'");
if($sql)
{
$msg="Your Profile updated Successfully";
}
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient | Edit Profile</title>
		
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
									<h1 class="mainTitle">Patient | Edit Profile</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Patient </span>
									</li>
									<li class="active">
										<span>Edit Profile</span>
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
<!-- <?php if($msg) { echo htmlentities($msg);}?> </h5> -->

									<div class="row margin-top-30">
										<div class="col-lg-8 col-md-12">
											<div class="panel panel-white">
												<div class="panel-heading">
													<h5 class="panel-title">Edit Profile</h5>
												</div>
												<div class="panel-body">
                                                  
									<?php 
$sql=mysqli_query($conn,"select * from reg_tbl where login_id='".$_SESSION['login_main']."'");
while($data=mysqli_fetch_array($sql))
{
?>
</div>
<h4><?php echo htmlentities($data['fname']);?>'s Profile</h4>
<?php } ?>
												<form role="form" name="edit" method="post">
													

<div class="form-group">
															<label for="fname">
																First Name
															</label>
	<input type="text" name="fname" class="form-control" writeonly="writeonly">
														</div>

														<div class="form-group">
															<label for="lname">
																Last Name
															</label>
	<input type="text" name="lname" class="form-control" writeonly="writeonly">
														</div>

														<div class="form-group">
									<label for="gender">
																Gender
															</label>

<select name="gender" class="form-control" required="required" >
<option value=""></option>
<option value="male">Male</option>	
<option value="female">Female</option>	
<option value="other">Other</option>	
</select>
</div>

<div class="form-group">
															<label for="address">
																 Address
															</label>
	<textarea name="address" class="form-control" value=""></textarea>
														</div>

<div class="form-group">
    <label for="fess">Street</label>
					<input type="text" name="street" class="form-control" writeonly="writeonly">
					
					</div>
														
					<div class="form-group">
    <label for="fess">City</label>
					<input type="text" name="city" class="form-control" writeonly="writeonly">
					
					</div>	

					<div class="form-group">
    <label for="fess">District</label>
					<input type="text" name="district" class="form-control" writeonly="writeonly">
					
					</div>

					<div class="form-group">
    <label for="fess">Pin</label>
					<input type="text" name="pin" class="form-control" writeonly="writeonly">
					
					</div>


<div class="form-group">
    <label for="fess">Phone</label>
					<input type="text" name="phone" class="form-control" writeonly="writeonly">
					
					</div>

<button type="submit" name="submit" class="btn btn-o btn-primary">Update</button>
<button type="submit" name="submit" class="btn btn-o btn-primary"><a href="dashboard.php">Back To Home</button>

													</form>
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
