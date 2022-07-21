<?php
session_start();
//error_reporting(0);

include('db.php');
$uid = $_SESSION['login_main'];
if($_SESSION['login_main']==""){
  header('location:../log.php');
}    
?>

<!doctype html>
<html lang="en">
  <head>
  	<title>MED-Enquiry View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="bootstrap.min.css">

	</head>
	<body>
       
	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center mb-5">
					<h2 class="heading-section">View Enquiry</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<!-- <div class="table-wrap"> -->
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      
						      <th>User Name</th>
						      <th>Category</th>
						      <th>Medicine Name</th>
							  <th>Medicine Company</th>
							  <th>Dose</th>
                              <th>Quantity</th>
                              <th>Status</th>
							  <th>Delivery</th>
							  <!-- <th>Action</th> -->
						    </tr>
						  </thead>
						  <tbody>
						  <?php
                                $sql3="SELECT * FROM  enquiry where status='Paid'";
                                $res = mysqli_query($conn,$sql3);
                                while($r = mysqli_fetch_array($res)){
									$idd=$r['category'];
									$sql1="SELECT * from medicine_category where category='$idd'";
									$res1=mysqli_query($conn,$sql1);
									$r1=mysqli_fetch_array($res1);
									
									?>
						      <tr class="alert" role="alert"> 
						      <td><?php echo $r['username'];?></td>
						      <td><?php echo $idd?></td>
						      <td><?php echo $r['medicine_name'];?></td>
							  <td><?php echo $r['medicinecompany'];?></td>
							  <td><?php echo $r['dose'];?></td>
                              <td><?php echo $r['quanitity'];?></td>
                              <td><?php echo $r['status'];?></td>
							  <td><button><a href="delivery.php?id=<?php echo $r['id'];?>">Delivery Assigned</a></button></td>
							  <!-- <td><a class='btn btn-primary btn-sky-blue' href='viewenquiry.php?uid=<?php echo $row['id'];?>'>Send</td> -->
							  </tr>
							<?php } ?>

						  </tbody>
						</table>
						<button style="align: center; width: 369px;height: 33px; margin-top: 8px;"><i class="icon icon-save icon-large"><a href="dashboard.php"></i> Back To Home </button>
						&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
						<!-- <button style="align: center; width: 369px;height: 33px; margin-top: 8px;"><i class="icon icon-save icon-large"><a href="payment.php"></i> Proceed to Checkout </button> -->
					</div>
				</div>
			</div>
		</div>
	</section>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

	</body>
</html>	 
