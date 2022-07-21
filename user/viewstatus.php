<?php
session_start();
$id=$_SESSION['login_main'];
if (! empty($_SESSION['login_main'])) {
	?>

<!doctype html>
<html lang="en">
<head>
<title>View Request</title>
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
   
<button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black"><a href="dashboard.php" style="text-align:right">Back</a></button>
<br><br>
                    <table class="table table-bordered table-striped">
					<thead>
                            <tr>
							<td><b>Medical Details</b></td>
				            <td><b>Status</b></td>
                            </tr>
                        </thead>
                    <?php
								include 'db.php';
								$sql="select * from enquiry where status='Approved' and userid='$id'";
								$res1=mysqli_query($conn,$sql);								
								while($r=mysqli_fetch_array($res1))
								{
								$id=$r['id'];
								$sql1="select * from enquiry where id=$id";
								$res11=mysqli_query($conn,$sql1);
								$j=mysqli_fetch_array($res11);
								$idd=$j['category'];
								$sql2="select * from medicine_category where id=$idd";
								$res12=mysqli_query($conn,$sql2);
								$r3=mysqli_fetch_array($res12);

								?>	

							
		
    <tr><td>
    
    <b>Category:</b> <?php echo $r3['category'];?></br></br>
    <b>Medicine Name:</b> <?php echo $r['medicine_name'];?></br></br>
	<b>Medicine Company:</b> <?php echo $r['medicinecompany'];?></br></br>
    <b>Dose:</b> <?php echo $r['dose'];?></br></br>
	<b>Quantity:</b> <?php echo $r['quanitity'];?></br></br></td>
	<td><b>Status:</b><?php echo $j['status'];?></td>
    </tr>
								<?php
								}
								?>
                                
                    </table>
	

			</div>
				</div>
		</div>
	</div>
</body>
</html>
<?php
}
else
header('location:log.php');
?>