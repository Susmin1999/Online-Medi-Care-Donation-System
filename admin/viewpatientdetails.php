<?php
session_start();
//error_reporting(0);
include('db.php');
include('include/config.php');
$conn=mysqli_connect("localhost", "root", "", "med");
if(isset($_POST['submit']))
  {
    $category=$_POST['category'];
    $dose=$_POST['dose'];
	$medicinecompany=$_POST['medicinecompany'];
	$medicine_name=$_POST['medicine_name'];
	$idproof=$_POST['idproof'];
	$prescription=$_POST['prescription'];
	$quantity=$_POST['quanitity'];
  
    $query.=mysqli_query($conn, "insert enquiry(userid,category,medicinecompany,medicine_name,idproof,prescription,quanitity)value('$userid','$category','$dose','$medicinecompany','$medicine_name','$idproof','$prescription','$quantity')");  
    if ($query) {
    echo '<script>alert("Medical data has been added.")</script>';
    echo "<script>window.location.href ='viewmshopaddmedicine.php'</script>";
  }
  else
    {
      echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }
}



?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Admin | View Patient Details</title>
		
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
<div class="main-content" >
<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
<section id="page-title">
<div class="row">
<div class="col-sm-8">
<h1 class="mainTitle">Admin | View Patient Details</h1>
</div>
<ol class="breadcrumb">
<li>
<span>Admin</span>
</li>
<li class="active">
<span>View Patient Details</span>
</li>
</ol>
</div>
</section>
<div class="container-fluid container-fullw bg-white">
<div class="row">
<div class="col-md-12">
<h5 class="over-title margin-bottom-15">View <span class="text-bold">Patient Details</span></h5>
<?php
                               $userid=$_GET['userid'];
                               $ret=mysqli_query($conn, "select * from reg_tbl where login_id='$userid'");
$cnt=1-1;
while ($row=mysqli_fetch_array($ret)) {
                               ?>
<table border="1" class="table table-bordered">
 <tr align="center">
<td colspan="4" style="font-size:20px;color:blue">
 Patient Details</td></tr>

    <tr>
    <th scope>First Name</th>
    <td><?php  echo $row['fname'];?></td>
    </tr>
	<tr>
	<th scope>Last Name</th>
    <td><?php  echo $row['lname'];?></td>
    </tr>
	<tr>
	<th scope>Gender</th>
    <td><?php  echo $row['gender'];?></td>
	</tr>
	<tr>
	<th scope>Address</th>
    <td><?php  echo $row['address'];?></td>
    </tr>
	<tr>
	<th scope>Street</th>
    <td><?php  echo $row['street'];?></td>
    </tr>
	<tr>
	<th scope>City</th>
    <td><?php  echo $row['city'];?></td>
	</tr>
	<tr>
    <th scope>District</th>
    <td><?php  echo $row['district'];?></td>
	</tr>
	<tr>
	<th scope>Pincode</th>
    <td><?php  echo $row['pin'];?></td>
	</tr>
	<tr>
	<th scope>Mobile</th>
    <td><?php  echo $row['phone'];?></td>
	</tr>
	<tr>
    

<?php } ?>
</table>

<?php  
$ret=mysqli_query($conn,"select * from medicines where mediid='$userid'");
?>

<table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
  <tr align="center">
   <th colspan="8">Medical Data</th> 
  </tr>
  <tr>
<th>#</th>
<th>Category</th>
<th>Dose</th>
<th>Medicine Company</th>
<th>Medicine Name</th>
<th>Id Proof</th>
<th>Prescription</th>
<th>Quantity</th>
</tr>

<?php  
while ($row=mysqli_fetch_array($ret)) { 
  ?>
<tr>
  <td><?php echo $cnt+1;?></td>
 <td><?php  echo $row['category'];?></td>
 <td><?php  echo $row['dose'];?></td>
 <td><?php  echo $row['medicinecompany'];?></td>
 <td><?php  echo $row['medicine_name'];?></td>
 <td><?php  echo $row['idproof'];?></td>
 <td><?php  echo $row['prescription'];?></td>  
 <td><?php  echo $row['quanitity'];?></td>
</tr>
<?php $cnt=$cnt+1;} ?>
</table>
      
<div>
<button style="align: center; width: 500px;height: 50px; margin-top: 5px;"><a href="viewpatient.php">Back To Home</button>
</div>

</div>
</div>
</div>
</div>
</div>
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
