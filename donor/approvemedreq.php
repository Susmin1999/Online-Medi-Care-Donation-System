<!-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Approved Medicine Request</title>
</head>

<body> -->
<?php
session_start();
 include 'db.php';
  $idd = $_GET['id'];
  $sql1 = "update enquiry set status='Approved' where id=$idd";
  mysqli_query($conn, $sql1); 
  echo "<script> alert('Approved'); window.location.href='approvedmedreq.php';</script>";
?>
<!-- </body>
</html> -->
