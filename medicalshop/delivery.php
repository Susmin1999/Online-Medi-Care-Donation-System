<?php
include 'db.php';
session_start();
$del=$_SESSION['login_main'];
$s=$_GET['id'];
$a=mysqli_query($conn,"UPDATE `enquiry` SET `status`='Delivered' WHERE id='$s'");
echo "<script>alert('Delivered')</script>";
echo "<script>window.location='viewenquiry.php';</script>";
?>
