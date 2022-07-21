<?php
session_start();
include 'db.php';
$id=$_SESSION['login_main'];
$n=mysqli_query($conn,"SELECT * FROM `login_tbl` WHERE login_id='$id'");
$rr = mysqli_fetch_assoc($n);
$uname=$rr['username'];

if(isset($_POST['submit']))
   {
    $medicine_name=$_POST['medicine_name'];
    $medicinecompany=$_POST['medicinecompany'];
    $dose=$_POST['dose'];
    $category = $_POST['category'];
    $quanitity=$_POST['quanitity'];
    $idproof=$_FILES['idproof']['name'];
    $targdir="./img/";
    $targetpath=$targdir.$idproof;
    move_uploaded_file($_FILES['idproof']['tmp_name'],$targetpath);
    

    $incproof=$_FILES['incproof']['name'];
    $targetpath2=$targdir.$prescription;
    move_uploaded_file($_FILES['incproof']['tmp_name'],$targetpath2);

    $prescription=$_FILES['prescription']['name'];
    $targetpath2=$targdir.$prescription;
    move_uploaded_file($_FILES['prescription']['tmp_name'],$targetpath2);

$insert="INSERT INTO `enquiry`(`userid`, `username`, `category`, `dose`, `medicinecompany`, `medicine_name`, `idproof`, `incproof`, `prescription`,  `quanitity`, `status`) VALUES ('$id','$uname','$category','$dose','$medicinecompany','$medicine_name','$idproof','$incproof','$prescription','$quanitity','Reported')";
$sql=mysqli_query($conn,$insert);
echo "<script> alert('Successfully Requested')</script>";
header("location:viewmedicine.php");
   }
?>