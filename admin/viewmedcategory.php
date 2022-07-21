<?php
session_start();
if (! empty($_SESSION['login_main'])) {
?>

<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>View | Medi-Category</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="./vendors/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="./vendors/chartist/chartist.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="style.css">
    <!-- End layout styles -->
   
  </head>
  <body>
    
  <div class="main-panel">
          <div class="content-wrapper">
             <div class="page-header">
            </div>
  
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="d-sm-flex align-items-center mb-4">
                    <h4 class="card-title" style="text-align: center;">View Medicine Category</h4></div>
                    <br>

                    <form method="post" enctype="multipart/form-data">
            
                    <div class="table-responsive border rounded p-1">
                      <table class="table">
                        <thead>
                          <tr>
                            <th class="font-weight-bold">Category Name</th>
                            <th class="font-weight-bold">Description</th>
                            <th class="font-weight-bold">Action</th>
                          </tr>
                        </thead>
                        <tbody>
</div>
                           
                        <?php
include 'db.php';
$sql="select * from medcategory WHERE status='active'";
$result = mysqli_query($conn, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{?>
		<tr><td><?php echo $r['mcname'];?></td>
		 <td><?php echo $r['des'];?></td>
		<td><a style="color:blue" href="editmedcategory.php?mcid=<?php echo $r['mcid'];?>"><b>Edit</a></td>
		<td><a style="color:#F63" href="deletemedcategory.php?id=<?php echo $r['mcid'];?>"><b>Delete</a></td>
                </tr>
                      <?php
}
?>
                        </tbody>
</table>

<button><h7 class="paragraph-agileits-w3layouts mt-2"><a href="dashboard.php">Back to Home</a></h7></button>

</form>       
              </div>
            </div>
          </div> 
        </div>
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
header('location:viewmedcategory.php');
?>
