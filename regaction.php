<?php
include 'db.php';
session_start();

    $fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$address=$_POST['address'];
    $gender=$_POST['gender'];
    $city=$_POST['city'];
	$street=$_POST['street'];
	$district=$_POST['district'];
	$pin=$_POST['pincode'];
    $phn=$_POST['phone'];
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $role=$_POST['usertype'];
    $a="INSERT INTO `login_tbl`(`username`,`password`,`type`,`status`) VALUES ('$email','$pass','$role',0)";
    $sql=mysqli_query($conn,$a);
    $rid = mysqli_insert_id($conn);
    $sql1 = "INSERT INTO `reg_tbl` (`login_id`, `fname`, `lname`, `gender`, `address`, `street`, `city`, `district`, `pin`, `phone`) VALUES ($rid, '$fname', '$lname', '$gender', '$address', '$street', '$city', '$district', '$pin', '$phn')";
    $qry = mysqli_query($conn,$sql1);
    echo "<script>alert('Successfully Registered')</script>";
    header("Location:log.php"); 
?>