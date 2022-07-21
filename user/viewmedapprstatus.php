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
   
<button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black ;font-size: 17px";><a href="dashboard.php" style="text-align:right">Back</a></button>
<br><br>
                    <table class="table table-bordered table-striped">
					<thead >
                            <tr style="font-size: 17px";>
							<td><b >Medicine Details</b></td>
							<td><b>ID Proof</b></td>
                            <td><b>Prescription</b></td>
                            <td><b>Income Certificate</b></td>
				            <td><b>Status</b></td>
                            </tr>
                        </thead>
                    <?php
								include 'db.php';
								$sql="SELECT * FROM enquiry where status='Delivered' && `userid`='$id'";
								$res1=mysqli_query($conn,$sql);								
								while($r=mysqli_fetch_array($res1))
								{
								$id=$r['id'];
                                $sql2="select medshop_tbl.shopname,medshop_tbl.shopaddress,medshop_tbl.mobile,medshop_tbl.licenseno,medshop_tbl.licenseproof,medshop_tbl.login_id,login_tbl.login_id,login_tbl.username from medshop_tbl join login_tbl on medshop_tbl.login_id=login_tbl.login_id where medshop_tbl.login_id=$id";
								$sql1="select * from enquiry where status = 'Delivered' and id='$id'";
								$res11=mysqli_query($conn,$sql1);
								$j=mysqli_fetch_array($res11);
							
								// select * from `medshop_tbl` where `status`='Approved' and `login_id`='$id'";
								?>	

							
		
    <tr><td style="font-size: 17px";>  
    <b>Medicine Name:</b> <?php echo $r['medicine_name'];?></br></br>
	<b>Medicine Company:</b> <?php echo $r['medicinecompany'];?></br></br>
	<b>Dose:</b> <?php echo $r['dose'];?></br></br>
    <b>Quantity:</b> <?php echo $r['quanitity'];?></br></br></td>

	<td><img src="../img/<?php echo $r['idproof'];?>" width="150" height="150"/></td>

    <td><embed src="../img/<?php echo $r['incproof'];?>" width="150" height="150"/></td>

    <td><embed src="../img/<?php echo $r['prescription'];?>" width="150" height="150"/></td>

	
	<td style="font-size: 17px";><b>Status:</b><?php echo $j['status'];?></td>
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