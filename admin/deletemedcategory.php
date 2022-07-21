<?php
session_start();
$id=$_GET["id"];
include 'db.php';
$sql="update `medcategory` set status='inactive' where mcid=$id";
 mysqli_query($conn, $sql);
header("location:viewmedcategory.php");
?>