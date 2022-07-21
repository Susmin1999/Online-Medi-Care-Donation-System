<?php
session_start();
include 'db.php';
?>
<!DOCTYPE html>
<html lang="en"> 
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
	<title>MEDICINE DONATION - Responsive HTML &amp; Bootstrap Template</title>
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=BenchNine:300,400,700' rel='stylesheet' type='text/css'>
	<script src="js/modernizr.js"></script>
	<!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
    <![endif]-->

</head>
<body>
	
	
	<!-- ====================================================
	header section -->
	<header class="top-header">
		<div class="container">
			<div class="row align-items-start">
			<h2 style="color:#42b3e5;"><img src="img/medicine.png" style="margin-top: -45px;margin-bottom: -50px;">Online Medicine Portal</h2>
				

				<div class="col-12 col-md-8 align-items-center">
					<nav class="navbar navbar-default">
					  <div class="container-fluid nav-bar">
					    <!-- Brand and toggle get grouped for better mobile display -->
					    <div class="navbar-header">
						
					      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					        <span class="sr-only">Toggle navigation</span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					        <span class="icon-bar"></span>
					      </button>
					    </div>
						

					    <!-- Collect the nav links, forms, and other content for toggling -->
						
					    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
										      
							<ul class="nav navbar-nav navbar-center">
								<li><a class="menu active" href="index.php">Home</a></li>
								<li><a class="menu" href="log.php">Sign In</a></li>
								<!-- <li><a class="menu" href="reg.php">Sign Up</a></li> -->
								<li class="dropdown">
   <a href="" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Sign Up <span class="caret"></span></a>
    <ul class="dropdown-menu" role="menu">
       <li><a class="menu" href="reg.php">Patient</a></li>
       <li><a class="menu" href="mshopreg.php">Medical Shop</a></li>
       <li><a class="menu" href="donreg.php">Donor</a></li>
    </ul>
</li>
								<li><a class="menu" href="donatemedicine.php">Donate Medicine</a></li>
								</ul>
					    </div>
					  </div>
					</nav>
				</div>
				<div style="float: right;align-items:center;padding: 40px;">
					<ul style="display: block;">
					<?php 
						if(isset($_SESSION['login_main'])){
							$uid = $_SESSION['login_main'];
							$sql = mysqli_query($conn,"SELECT * from login_tbl where login_id='$uid'");
						while($row=mysqli_fetch_array($sql)){
						  $name = $row['username'];
						?>
						<li class="dropdown current-user " style="font-size: 15px;">
								<a href class="dropdown-toggle" data-toggle="dropdown">
									<img src="admin/assets/images/images.jpg" style="width: 15px;" > <span class="username">
                                            <?php echo $name; ?>
											<?php echo $uid;?>
									<i class="ti-angle-down"></i></i></span>
								</a>
								
							<?php }}?>
					
				</div>
			</div>
		</div>
	</header> <!-- end of header area -->


	<section class="slider" id="home">
		<div class="container-fluid">
			<div class="row">
			    <div id="carouselHacked" class="carousel slide carousel-fade" data-ride="carousel">
					<div class="header-backup"></div>
			        <!-- Wrapper for slides -->
			        <div class="carousel-inner" role="listbox">
			            <div class="item active">
			            	<img src="img/slide1.jpg" alt="">
			                <div class="carousel-caption">
							<h2 style="color:#42b3e5;">Online Medicine Portal</h2>
							<button><a href="reg.php"  style="color:white;">Register</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide2.jpg" alt="">
			                <div class="carousel-caption">
							<h2 style="color:#42b3e5;">Online Medicine Portal</h2>
							<button><a href="reg.php" style="color:white;">Register</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide3.jpg" alt="">
			                <div class="carousel-caption">
							<h2 style="color:#42b3e5;">Online Medicine Portal</h2>
							<button><a href="reg.php"  style="color:white;">Register</a></button>
			                </div>
			            </div>
			            <div class="item">
			            	<img src="img/slide4.jpg" alt="">
			                <div class="carousel-caption">
							<h2 style="color:#42b3e5;">Online Medicine Portal</h2>
							<button><a href="reg.php"  style="color:white;">Register</a></button>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
		</div>
	</section><!-- end of slider section -->




	<!-- about section -->
	
	<section class="about text-center" id="about">
		<div class="container">
			<div class="row">
				<h2>About</h2>
				<h4>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled</h4>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail clearfix">
						<div class="about-img">
							<img class="img-responsive" src="img/item1.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>CH</h1>
							</div>
							<h3>Children’s Medicines</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item2.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>AD</h1>
							</div>

							<h3>Adults Medicines</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6">
					<div class="single-about-detail">
						<div class="about-img">
							<img class="img-responsive" src="img/item3.jpg" alt="">
						</div>
						<div class="about-details">
							<div class="pentagon-text">
								<h1>EL</h1>
							</div>
							<h3>Elders Medicines</h3>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
						</div>
					</div>
				</div>
			</div>
		</div>
</section>
<!-- end of about section -->





	

	<!-- map section -->
	<!-- end of map section -->

	<!-- contact section starts here -->
	<section class="contact">
		<div class="container">
			<div class="row">
				<div class="contact-caption clearfix">
					<div class="contact-heading text-center">
						<h2>Contact</h2>
					</div>
					<div class="col-md-5 contact-info text-left">
						<h3>contact information</h3>
						<div class="info-detail">
							<ul><li><i class="fa fa-calendar"></i><span>Sunday - Saturday</span>24*7</li></ul>
							<ul><li><i class="fa fa-map-marker"></i><span>Address : </span>abc Gandhi Nagar  2nd Street, Ernakulam</li></ul>
							<ul><li><i class="fa fa-phone"></i><span>Phone : </span>9756832145</li></ul>
							<ul><li><i class="fa fa-fax"></i><span>Meassge : </span>9908564534</li></ul>
							<ul><li><i class="fa fa-envelope"></i><span>Email : </span>medicinecorner@gmail.com</li></ul>
						</div>
					</div>
					<div class="col-md-6 col-md-offset-1 contact-form">
						<h3>Leave Your Suggestions Here</h3>

						<form class="form">
							<input class="name" type="text" placeholder="Name:">
							<input class="email" type="email" placeholder="Email:">
							<input class="phone" type="text" placeholder="Phone No:">
							<textarea class="message" name="message" id="message" cols="30" rows="10" placeholder="Message:"></textarea>
							<input class="submit-btn" type="submit" value="SUBMIT">
						</form>
					</div>
				</div>
			</div>
		</div>
	</section><!-- end of contact section -->


	<!-- footer starts here -->
	<footer class="footer clearfix">
		<div class="container">
			<div class="row">
				<div class="col-xs-6 footer-para">
					<p>&copy;All right reserved</p>
				</div>
				<div class="col-xs-6 text-right">
					<a href=""><i class="fa fa-facebook"></i></a>
					<a href=""><i class="fa fa-twitter"></i></a>
					<a href=""><i class="fa fa-skype"></i></a>
				</div>
			</div>
		</div>
	</footer>


	<!-- script tags
	============================================================= -->
	<script src="js/jquery-2.1.1.js"></script>
	<script src="http://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/gmaps.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/custom.js"></script>
</body>
</html>


