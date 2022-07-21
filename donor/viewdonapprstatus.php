<?php
session_start();
$id=$_SESSION['login_main'];
if (! empty($_SESSION['login_main'])) {
	?>

<!doctype html>
<html lang="en">
<head>
<title>View Donor Request</title>
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
							<td><b>Donor Details</b></td>
                            <td><b>Donor ID Proof</b></td>
				            <td><b>Status</b></td>
                            </tr>
                        </thead>
                    <?php
								include 'db.php';
								$sql="select * from donor_tbl where status='Approved'";
								$res1=mysqli_query($conn,$sql);								
								while($r=mysqli_fetch_array($res1))
								{
								$id=$r['login_id'];
								$sql1="select * from donor_tbl where login_id='$id'";
								$res11=mysqli_query($conn,$sql1);
								$j=mysqli_fetch_array($res11);

								?>	

							
		
    <tr><td style="font-size: 17px";>  
    <b>Donor Name : </b> <?php echo $r['donname'];?></br></br>
	<b>Donor Address : </b> <?php echo $r['donaddress'];?></br></br>
    <b>Gender : </b> <?php echo $r['gender'];?></br></br>
	<b>Mobile : </b> <?php echo $r['mobile'];?></br></br></td>

	<td><img src="../img/<?php echo $r['donidproof'];?>" width="100" height="100"/></td>

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