<?php
session_start();
include 'db.php';
$id=$_SESSION['login_main'];
$sql="select * from login_tbl where login_id=$id";
$res=mysqli_query($conn,$sql);
$row=mysqli_fetch_assoc($res);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Patient  | Change Password</title>
		
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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="assets/css/themes/theme-1.css" id="skin_color" />


	</head>
	<body>
		<div id="app">		
<?php include('include/sidebar.php');?>
			<div class="app-content">
				
						<?php include('include/header.php');?>
						
				<!-- end: TOP NAVBAR -->
				<div class="main-content" >
					<div class="wrap-content container" id="container">
						<!-- start: PAGE TITLE -->
						<section id="page-title">
							<div class="row">
								<div class="col-sm-8">
									<h1 class="mainTitle">Patient | Change Password</h1>
																	</div>
								<ol class="breadcrumb">
									<li>
										<span>Patient</span>
									</li>
									<li class="active">
										<span>Change Password</span>
									</li>
								</ol>
							</div>
						</section>


						

<div id="content">
  <div class="content-wrapper">
    <div class="container-fluid">

      <div class="row">
        <div class="col-md-12 lg-12 sm-12">

          <h1 class="page-title">Change Password</h1>
        </div>
      </div>
          <div class="row">
            <div class="col-md-10">
              <div class="panel panel-default">
                <div class="panel-heading">Password Fields</div>
                <div class="panel-body">
                  <form method="post" name="chngpwd" class="form-horizontal">

                    <div class="form-group" method="post">
                      <label class="col-sm-4 control-label">Current Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="currpassword" id="password" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">New Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="newpassword" id="newpassword" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>

                    <div class="form-group">
                      <label class="col-sm-4 control-label">Confirm Password</label>
                      <div class="col-sm-8">
                        <input type="password" class="form-control" name="confirmpassword" id="confirmpassword" required>
                      </div>
                    </div>
                    <div class="hr-dashed"></div>



                    <div class="form-group">
                      <div class="col-sm-8 col-sm-offset-4">

                        <button class="btn btn-primary" name="submit" type="submit">Save changes</button>
                        <button class="btn btn-primary" name="submit" type="submit"><a href="dashboard.php" style="color: white">BACK TO HOME</a></button>
                      </div>
                    </div>

                  </form>

                </div>
              </div>
            </div>
            </div>

<?php
if(isset($_POST["submit"])){
  // $sid = $_POST['login_id'];
  $password=mysqli_real_escape_string($conn,$_POST["currpassword"]);
  // $sql="select * from login_tbl where login_id='$sid'";
  $result=mysqli_query($conn,$sql) or die("query failed.");
  if(mysqli_num_rows($result)>0)
  {
    while($row=mysqli_fetch_array($result)){
      if($password==$row['password']){

    $newpassword=mysqli_real_escape_string($conn,$_POST["newpassword"]);
    $confpassword=mysqli_real_escape_string($conn,$_POST["confirmpassword"]);

    if($newpassword==$confpassword)
    {
      if($newpassword!=$password)
      {
      $sql1="UPDATE login_tbl set password='{$newpassword}' where login_id='{$id}'";
      $result1=mysqli_query($conn,$sql1) or die("query failed.");
      echo '<div class="alert alert-success alert_dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><b> Password Changed Successfully.</b></div>';
      }
      else {
          echo  '<div class="alert alert-info alert_dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><b>New Password Can not be same as Current Password..</b></div>';
          }
      }

      else {
        echo '<div class="alert alert-warning alert_dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button> <b>New Password and Confirm Password Not Matched!</b></div>';
      }
    }
  else {
    echo '<div class="alert alert-danger alert_dismissible"><button type="button" class="close" data-dismiss="alert">&times;</button><b> Current Password not matched!</b></div>';
  }
}
}
}
?>

    <form method="post" name="" action="log.php" class="form-horizontal">
      <div class="form-group">
        <div class="col-sm-8 col-sm-offset-4" style="float:left">

        </div>
      </div>
    </form>
<?php 
 ?>
</div>
</div>
</div>												
											</div>
										</div>
									
								</div>
							
						
						
			
					
					
						
						
					
					
			<!-- start: FOOTER -->
	<?php include('include/footer.php');?>
			<!-- end: FOOTER -->
		
			<!-- start: SETTINGS -->
	<?php include('include/setting.php');?>
			<>
			<!-- end: SETTINGS -->
		</div>
		<!-- start: MAIN JAVASCRIPTS -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/modernizr/modernizr.js"></script>
		<script src="vendor/jquery-cookie/jquery.cookie.js"></script>
		<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
		<script src="vendor/switchery/switchery.min.js"></script>
		<!-- end: MAIN JAVASCRIPTS -->
		<!-- start: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<script src="vendor/maskedinput/jquery.maskedinput.min.js"></script>
		<script src="vendor/bootstrap-touchspin/jquery.bootstrap-touchspin.min.js"></script>
		<script src="vendor/autosize/autosize.min.js"></script>
		<script src="vendor/selectFx/classie.js"></script>
		<script src="vendor/selectFx/selectFx.js"></script>
		<script src="vendor/select2/select2.min.js"></script>
		<script src="vendor/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
		<script src="vendor/bootstrap-timepicker/bootstrap-timepicker.min.js"></script>
		<!-- end: JAVASCRIPTS REQUIRED FOR THIS PAGE ONLY -->
		<!-- start: CLIP-TWO JAVASCRIPTS -->
		<script src="assets/js/main.js"></script>
		<!-- start: JavaScript Event Handlers for this page -->
		<script src="assets/js/form-elements.js"></script>
		<script>
			jQuery(document).ready(function() {
				Main.init();
				FormElements.init();
			});
		</script>
		<!-- end: JavaScript Event Handlers for this page -->
		<!-- end: CLIP-TWO JAVASCRIPTS -->
	</body>
</html>
