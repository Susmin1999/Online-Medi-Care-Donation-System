<?php
session_start();
include('db.php');	

if(isset($_POST['submit']))
{
	$mcname=$_POST['mcname'];
	$des=$_POST['des'];


$valid=mysqli_query($conn,"select * from medcategory where mcname='$mcname'");
if(mysqli_num_rows($valid)>0){
	echo"<script>location=addmedcategory.php</script>";
}else{
$sql=mysqli_query($conn,"insert into medcategory(mcname,des,status) values('$mcname','$des','active')");
echo "<script>alert('Category Added');</script>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    <title>Add | Medi-Category</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="vendors/simple-line-icons/css/simple-line-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="vendors/select2/select2.min.css">
    <link rel="stylesheet" href="vendors/select2-bootstrap-theme/select2-bootstrap.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link href="style.css" rel="stylesheet">
    
  </head>
  <body>
    
    
            <div class="row">
          
              <div class="col-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title" style="text-align: center;">Add Medicine Category</h4>
					<br>
                   
                    <form method="post" enctype="multipart/form-data">
                      
                      <div class="form-group">
                        <label for="exampleInputName1">Category Name :</label>
                        <input type="text" name="mcname" id="mcname" class="form-control" value="" required onchange="Validate();">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName1">Description :</label>
                       <input type="text" name="des" id="des" class="form-control" value="">
                      </div>
                      
					  
                     
                    <div>
                      <button type="submit" class="btn btn-primary mr-2" name="submit">Add Category</button>
					  <button><h7 class="paragraph-agileits-w3layouts mt-2"><a href="dashboard.php">Back to Home</a></h7></button>
                    </div>
                     
                    </form>
                  </div>
                </div>
              </div>
            </div>
          
          <!-- content-wrapper ends -->
          <!-- partial:partials/_footer.html -->
       
          <!-- partial -->
        
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="vendors/select2/select2.min.js"></script>
    <script src="vendors/typeahead.js/typeahead.bundle.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="js/off-canvas.js"></script>
    <script src="js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="js/typeahead.js"></script>
    <script src="js/select2.js"></script>
    <!-- End custom js for this page -->
  </body>
</html>
