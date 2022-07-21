<?php
session_start();
if (! empty($_SESSION['login_main'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Donor | Medicine Request View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->

	</head>
  <body>
        
  <div class="d-sm-flex align-items-center mb-4">
                      <h2 class="col-md-10 text-center mb-2">REQUEST APPROVAL</h2>
        
              
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                    </div>
                      <table class="table">
                        <thead> 
                          <tr style="font-size: 17px";>
              <th class="font-weight-bold">User Name</th>						
						  <th class="font-weight-bold">Medicine Name</th>
							<th class="font-weight-bold">Medicine Company</th>
							<th class="font-weight-bold">Dose</th>
              <th class="font-weight-bold">Quantity</th>
							<th class="font-weight-bold">Id Proof</th>
							<th class="font-weight-bold">Income Certificate</th>
							<th class="font-weight-bold">Prescription</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                          include 'db.php';
$sql="select * from enquiry where status='Rejected'";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($res))
{
$id=$row['id'];
$sql1="select * from enquiry where userid=$id";
$res1=mysqli_query($conn,$sql1);

$r1=mysqli_fetch_array($res1);
?>
		<tr style="font-size: 17px";>
    <td><?php echo $row['username'];?></br></br></td>       
    <td><?php echo $row['medicine_name'];?></br></br></td>
    <td><?php echo $row['medicinecompany'];?></br></br></td>
    <td><?php echo $row['dose'];?></br></br></td>
    <td><?php echo $row['quanitity'];?></br></br></td>

  
		
    <td>
    <?php echo $row['idproof'];?></br></br>
    <img src="../img/<?php echo $row['idproof'];?>" width="100" height="100"/></td>

    <td>
    <?php echo $row['prescription'];?></br></br>
    <embed src="../img/<?php echo $row['prescription'];?>" width="100" height="100"/></td>

    <td>
    <?php echo $row['incproof'];?></br></br>
    <embed src="../img/<?php echo $row['incproof'];?>" width="100" height="100"/></td>

  

		
        
				</tr>
                      <?php
}
?>
                        </tbody>
                      </table>
                      <button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black"><a href="dashboard.php" style="text-align:right">Back</a></button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="./vendors/chart.js/Chart.min.js"></script>
    <script src="./vendors/moment/moment.min.js"></script>
    <script src="./vendors/daterangepicker/daterangepicker.js"></script>
    <script src="./vendors/chartist/chartist.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="./js/dashboard.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
<?php
}
else
header('location:log.php');
?>