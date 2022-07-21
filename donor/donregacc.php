<?php
include 'db.php';
session_start();

    $donname=$_POST['donname'];
	$donaddress=$_POST['donaddress'];
    $gender=$_POST['gender'];
    $mobile=$_POST['mobile'];

    $donidproof=$_FILES['donidproof']['name'];
    $targdir="medi/img/";
    $targetpath=$targdir.$donidproof;
    move_uploaded_file($_FILES['donidproof']['tmp_name'],$targetpath);
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $role=$_POST['usertype'];

    $aa = "INSERT INTO `login_tbl`(`username`,`password`,`type`,`status`) VALUES ('$email','$password','donor',0)";
    $sql = mysqli_query($conn,$aa);
    $id = mysqli_insert_id($conn);
    $sql1 = "INSERT INTO `donor_tbl`(`login_id`,`donname`,`donaddress`,`gender`,`mobile`,`donidproof`,`status`) VALUES ('$id','$donname','$donaddress','$gender','$mobile','$donidproof','Reported')";
    $qry = mysqli_query($conn,$sql1);
    echo "<script>alert('Successfully Registered')</script>";
    header("Location:../log.php"); 
?>