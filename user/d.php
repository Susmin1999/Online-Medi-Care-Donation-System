<?php
session_start();
include('db.php');


if(isset($_POST['submit']))
{
	$medicine_name=$_POST['medicine_name'];
	$medicinecompany=$_POST['medicinecompany'];
	$dose=$_POST['dose'];
    $quanitity=$_POST['quanitity'];
    $idproof=$_FILES['idproof']['name'];
    move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$idproof);
    $prescription=$_FILES['prescription']['name'];
    move_uploaded_file($_FILES['prescription']['tmp_name'],"../uploads/".$prescription);


$sql=mysqli_query($conn,"insert into enquiry(medicine_name,medicinecompany,dose,quanitity,idproof,prescription,status) values('$medicine_name','$medicinecompany','$dose','$quanitity','$idproof','$prescription',0)");

echo"<script>alert('Request Sended');</script>";
echo"<script>window.location='dummyenquiry.php';</script>";  

}
?>
