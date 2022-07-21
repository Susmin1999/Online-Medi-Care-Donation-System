<?php 
include 'db.php';
session_start();
$session=$_SESSION['login_main'];

$amo=$_GET['aid'];
$bid=$_GET['bid'];

$sql="INSERT into tbl_payment(`login_id`,`enquiry_id`,`totalprice`,`status`)VALUES('$session','$bid','$amo','success')";
mysqli_query($conn,$sql);
 
$sqlyy="UPDATE enquiry SET `status`='Paid' where id='$bid'";
mysqli_query($conn,$sqlyy);
  echo "<script>alert('Transaction succesfull');
  location='final.php?bid=$bid';
  </script>";

?>