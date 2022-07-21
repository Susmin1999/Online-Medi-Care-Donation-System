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
	<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->

	</head>
	<body>
       
	<section class="ftco-section">
		<div class="container"  style="margin-right:550px">
			<div class="row justify-content-center">
				<div class="col-md-10 text-center mb-2">
					<h2 class="heading-section">View Enquiry</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-580">
					<!-- <div class="table-wrap"> -->
						<table class="table">
						  <thead class="thead-dark">
						    <tr>
						      
						      <th>User Name</th>
						      <th>Life Span Category</th>
						      <th>Medicine Name</th>
							  <th>Medicine Company</th>
							  <th>Dose</th>
                              <th>Quantity</th>
							  <th>Id Proof</th>
							  <th>Income Certificate</th>
							  <th>Prescription</th>
                              <th>Action</th>
						    </tr>
						  </thead>
						  <tbody>
						  <?php
                                $sql3="select * from enquiry e join reg_tbl s on e.userid = s.login_id where e.status='Reported'";
                                $res = mysqli_query($conn,$sql3);
                                while($rr = mysqli_fetch_array($res)){
									$idd=$rr['category'];
									$sql1="SELECT * from medicine_category where category='$idd'";
									$res1=mysqli_query($conn,$sql1);
									$r1=mysqli_fetch_array($res1);
									?>

						      <tr class="alert" role="alert"> 
						      <td>
							  <b>Email : </b> <?php echo $rr['username'];?></br></br>
							  <b>Name : </b> <?php echo $rr['fname'];?></br></br>
	                          <b>Address : </b> <?php echo $rr['address'];?></br></br>
	                          <b>Mobile : </b> <?php echo $rr['phone'];?></br></br></td></td>
						      <td><?php echo $idd?></td>
						      <td><?php echo $rr['medicine_name'];?></td>
							  <td><?php echo $rr['medicinecompany'];?></td>
							  <td><?php echo $rr['dose'];?></td>
                              <td><?php echo $rr['quanitity'];?></td>							  
							  <td>
    <?php echo $rr['idproof'];?></br></br>
    <img src="../img/<?php echo $rr['idproof'];?>" width="150" height="150"/></td>


	<td>
    <?php echo $rr['prescription'];?></br></br>
    <embed src="../img/<?php echo $rr['prescription'];?>" width="150" height="150"/></td>


	<td>
    <?php echo $rr['incproof'];?></br></br>
    <embed src="../img/<?php echo $rr['incproof'];?>" width="150" height="150"/></td>


	<td>
	<br><br><br>
	<a href="approvemedreq.php?id=<?php echo $rr[0];?>&id=<?php echo $rr[0]; ?>">Approve</a>
    <a href="rejectmedreq.php?id=<?php echo $rr[0];?>">Reject</a></td>
                             
							</tr>
							<?php } ?>

						  </tbody>
						</table>
						<button style="align: center; width: 369px;height: 33px; margin-top: 8px;"><i class="icon icon-save icon-large"><a href="dashboard.php"></i> Back To Home</button>
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
