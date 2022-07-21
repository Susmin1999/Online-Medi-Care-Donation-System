<?php
session_start();
$id=$_SESSION['login_main'];
	if (! empty($_SESSION['login_main'])) {
	?>

<!doctype html>
<html lang="en">
<head>
<title>View Medical Shop Request</title>
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
                            <tr style="font-size: 17px";>
							<td><b>Medical Shop Details</b></td>
							<td><b>License ID Proof</b></td>
				            <td><b>Status</b></td>
                            </tr>
                        </thead>
                    <?php
								include 'db.php';
								$sql="SELECT * FROM medshop_tbl where status='Approved'";
								$res1=mysqli_query($conn,$sql);								
								while($r=mysqli_fetch_array($res1))
								{
								$id=$r['login_id'];
								$sql1="select * from medshop_tbl where status = 'Approved' and login_id='$id'";
								$res11=mysqli_query($conn,$sql1);
								$j=mysqli_fetch_array($res11);
							
								// select * from `medshop_tbl` where `status`='Approved' and `login_id`='$id'";
								?>	

							
		
    <tr><td style="font-size: 17px";>
    
   
    <b>Shop Name:</b> <?php echo $r['shopname'];?></br></br>
	<b>Shop Address:</b> <?php echo $r['shopaddress'];?></br></br>
	<b>Mobile:</b> <?php echo $r['mobile'];?></br></br>
    <b>License No:</b> <?php echo $r['licenseno'];?></br></br></td>

	<td><img src="../img/<?php echo $r['licenseproof'];?>" width="100" height="100"/></td>
	
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