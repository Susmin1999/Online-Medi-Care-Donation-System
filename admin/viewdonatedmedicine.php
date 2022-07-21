<?php
session_start();
include 'db.php';

if (! empty($_SESSION['login_main'])) {
    if(isset($_GET['del']))
		  {
		          mysqli_query($conn,"delete from donatedmedicine where donorid = '".$_GET['id']."'");
                  $_SESSION['msg']="data deleted !!";
		  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>View Donated Medicine</title>
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
                      <h2 class="card-title" style="text-align:center" style="text-color:blue">DONATED MEDICINES</h2>
                      <button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black"><a href="dashboard.php" style="text-align:right">Back</a></button>
        
              
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                    </div>
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Donor Details</th>
                           <th class="font-weight-bold">Medicine Details</th> 
                            <th class="font-weight-bold">Donor Id Proof</th>            
                            <th class="font-weight-bold">Action</th>
                            
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                          include 'db.php';
$sql="select * from donatemedicine where status='active'";
$res=mysqli_query($conn,$sql);

while($row=mysqli_fetch_array($res))
{
$id=$row['donorid'];
$sql1="select * from donatemedicine where donorid=$id";
$res1=mysqli_query($conn,$sql1);
$r1=mysqli_fetch_array($res1);
?>
		<tr><td>
        <b>Donor Name:</b> <?php echo $r1['donorname'];?></br></br>
        <b>Donor Address:</b> <?php echo $r1['donoraddress'];?></br></br>
	      <b>Mobile:</b> <?php echo $r1['phone'];?></br></br>
        <b>Email:</b> <?php echo $r1['email'];?></br></br></td>
		    <!-- <td><b>Id Proof:</b> <?php echo $r1['idproof'];?></td> -->

		<td>
    <b>Medicine Name:</b> <?php echo $row['medicine_name'];?></br></br>
	  <b>Medicine Company:</b> <?php echo $row['medicinecompany'];?></br></br>
    <b>Dose:</b> <?php echo $row['dose'];?></br></br>
	  <b>Quantity:</b> <?php echo $row['quantity'];?></br></br>
    <b>Type:</b> <?php echo $row['type'];?></br></br>
    <b>Category:</b> <?php echo $row['category'];?></br></br>
    <b>Manufacture Date:</b> <?php echo $row['manufacture_date'];?></br></br>
    <b>Expiry Date:</b> <?php echo $row['expiry_date'];?></br></br>
    </td>
    <td><img src="../img/<?php echo $row['idproof'];?>" width="100" height="100"/></td>


		
        		<td>
                <div class="visible-md visible-lg hidden-sm hidden-xs">
                    <a href="viewdonatedmedicine.php?id=<?php echo $row['donorid']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><button>Delete</button></i></a>
</div>
                </td>
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