<?php
include 'db.php';
session_start();

    $shopname=$_POST['shopname'];
	$shopaddress=$_POST['shopaddress'];
    $mobile=$_POST['mobile'];
    $licenseno=$_POST['licenseno'];

    $licenseproof=$_FILES['licenseproof']['name'];
    $targdir="medi/img/";
    $targetpath=$targdir.$licenseproof;
    move_uploaded_file($_FILES['licenseproof']['tmp_name'],$targetpath);
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['usertype'];

    $aa = "INSERT INTO `login_tbl`(`username`,`password`,`type`,`status`) VALUES ('$email','$password','medicalshop',0)";
    $sql = mysqli_query($conn,$aa);
    $id = mysqli_insert_id($conn);
    $sql1 = "INSERT INTO `medshop_tbl`(`login_id`,`shopname`,`shopaddress`,`mobile`,`licenseno`,`licenseproof`,`status`) VALUES ('$id','$shopname','$shopaddress','$mobile','$licenseno','$licenseproof','Reported')";
    $qry = mysqli_query($conn,$sql1);
    echo "<script>alert('Successfully Registered')</script>";
    header("Location:../log.php"); 
?>