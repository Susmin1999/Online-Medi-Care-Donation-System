<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Reject Medical Shop</title>
</head>

<body>
<?php
session_start();
include 'db.php';
$id=$_GET['id'];
$sql1 = "update medshop_tbl set status='Rejected' where shopid=$id";
mysqli_query($conn, $sql1);
echo "<script> alert('Rejected'); window.location.href='viewmshoprequest.php';</script>";
?>
</body>
</html>
