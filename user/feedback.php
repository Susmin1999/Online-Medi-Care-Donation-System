<?php
session_start();
include 'db.php';
$res=$_SESSION['login_main'];


if(isset($_POST['submit']))
{
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$sql=mysqli_query($conn,"insert into feedback(login_id,name,email,message,status) values('$res','$name','$email','$message','Reported')");
echo "<script> alert('Successfully reported your feedback'); window.location.href='feedback.php';</script>";
}
	
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Feedback</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="assets/css/styles.css" rel="stylesheet" media="all">

</head>
 

<body class="animsition">
    <style>
    .animsition {
        padding: -35px;
        font-size: 20px;
        margin-left:0px;
        
    background: #cde8ff;
    }
    .susu{
        margin-left:450px;
        margin-top:100px;

    }
    </style>
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
                
                  
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                                                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                            <div class="mess__title">
                                                </div>
                                            <div class="notifi__footer">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href=""></a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            
                                            <div class="account-dropdown__body">

                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="susu">
                            <div class="col-md-12">
                               <div class="leave-comment">
						<form class="form-horizontal" role="form" method="post" action="" enctype="multipart/form-data">
							
							<div class="form-group">
                            <h4  style="margin-left: 200px;">FEEDBACK</h4>
						    	<label for="inputname" class="col-sm-2 control-label"> Full Name:</label>
							    <div class="col-sm-10">
							      	<input  type="text" class="" style="width:500px;" name="name" id="name" required />
							    </div>
						  	</div><br>

							<div class="form-group">
						    	<label for="inputname" class="col-sm-2 control-label">Email:</label>
							    <div class="col-sm-10">
							      	<input  type="text" class="" style="width:500px;" name="email" required />
							    </div>
						  	</div><br>
							
							<div class="form-group">
						    	<label for="inputname" class="col-sm-2 control-label">Message:</label>
							    <div class="col-sm-10">
							      	<textarea  type="text" class="" placeholder="" style="width:500px;"  name="message" required /></textarea>
							    </div>
						  	</div><br>
							
						  		
							<div class="form-group">
						    	<div class="col-sm-offset-2 col-sm-10">
						      		<button type="submit" name="submit" class="btn btn-primary">Post</button>
                                &nbsp &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
                                      <button type="submit" name="submit" class=""><a href="dashboard.php">Back</a></button>

									<!--<a href="index.php">Back to Home</a>-->
						    	</div>
						  	</div>	<!-- End of /.form-group -->
						</form>	<!-- End of /.form-horizontal -->
					</div>	<!-- End of /.leave comments -->
				</div>	<!-- End of /.col-md-9 -->

                        
                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>

<!-- end document-->
