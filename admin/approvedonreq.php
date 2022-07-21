<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Approve Donor</title>
</head>

<body>
<?php
session_start();
 include 'db.php';
  $id =$_GET['id'];
  $email=$_GET['email'];
  $sql1="update donor_tbl set status='Approved' where donid=$id";
  mysqli_query($conn, $sql1); 
  // $sql2="update login_tbl set status='1' where login_id='$id'";
  // mysqli_query($conn, $sql2);
  echo "<script>window.location.href='../src/verifymail.php?email=$email';</script>";
?>
</body>
</html>
