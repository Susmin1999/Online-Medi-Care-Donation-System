<?php
session_start();
if (! empty($_SESSION['login_main'])) {
?>

<!DOCTYPE html>
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
        
  <div class="d-sm-flex align-items-center mb-4">
                      <h2 class="card-title" style="text-align:center" style="text-color:blue">REQUEST APPROVAL</h2>
                      <button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black"><a href="dashboard.php" style="text-align:right">Back</a></button>
        
              
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                    </div>
                      <table class="table">
                        <thead>
                          <tr style="font-size: 17px";>
                            <th class="font-weight-bold">Shop Details</th>
                            <th class="font-weight-bold">License proof</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                          include 'db.php';
$sql="select * from medshop_tbl where status='Approved'";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($res))
{
$id=$row['login_id'];
$sql1="select * from medshop_tbl where login_id=$id";
$res1=mysqli_query($conn,$sql1);

$r1=mysqli_fetch_array($res1);
?>
		<tr><td style="font-size: 17px";>
    <b>Shop Name : </b><?php echo $r1['shopname'];?></br></br>
	  <b>Shop Address : </b><?php echo $r1['shopaddress'];?></br></br>
    <b>Mobile : </b><?php echo $r1['mobile'];?></br></br>
    <b>License No : </b><?php echo $r1['licenseno'];?></br></br></td>
		
    <td>
    <?php echo $row['licenseproof'];?></br></br>
    <img src="../img/<?php echo $row['licenseproof'];?>" width="100" height="100"/></td>

		
        
				</tr>
                      <?php
}
?>
                        </tbody>
                      </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
         <?php include_once('include/footer.php');?>
          <!-- partial -->
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