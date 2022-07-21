<?php
session_start();
include('db.php');
$a = $_POST['name'];
$b = $_POST['age'];
$c = $_POST['address'];
$d = $_POST['mobile'];
$e = $_POST['email'];
$f = $_POST['idproof'];
$cat = $_POST['category'];
$g = $_POST['experience'];
$h = $_POST['qualification'];
$p = $_POST['password'];
$insert="INSERT INTO `login_tbl`(`username`,`password`,`type`,`status`) VALUES ('$e','$p','manager',0)";
$suss=mysqli_query($conn,$insert);
$sql = "INSERT INTO `manager`(`name`,`age`,`address`,`mobile`,`username`,`id proof`,`category`,`experience`,`qualification`,`password`) VALUES ('$a','$b','$c','$d','$e','$f','$cat','$g','$h','$p')";
$s=mysqli_query($conn,$sql);
echo "<script> alert('Manager Added');</script>";
header("location: addmanager.php");
?>




