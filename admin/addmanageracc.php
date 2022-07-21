<?php
include 'db.php';

    $category=$_POST['category'];
    $a="INSERT INTO `manager`(`category`) VALUES ('$category')";
    $sql=mysqli_query($conn,$a);
    echo "<script>alert('Successfully Registered')</script>";
    header("Location:log.php"); 
?>