<?php
session_start();
include('db.php');	

if(isset($_POST['submit']))
{
	$donorname=$_POST['donorname'];
    $donoraddress=$_POST['donoraddress'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];
    $idproof=$_FILES['idproof']['name'];
    $targdir="./img/";
    $targetpath=$targdir.$idproof;
    move_uploaded_file($_FILES['idproof']['tmp_name'],$targetpath);
    $medicine_name=$_POST['medicine_name'];
	$medicinecompany=$_POST['medicinecompany'];
	$dose=$_POST['dose'];
    $quantity=$_POST['quantity'];
    $type=$_POST['type'];
    $category=$_POST['category'];
    $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
  
$sql ="INSERT INTO `donatemedicine`(`donorid`, `donorname`, `donoraddress`, `phone`, `email`, `idproof`, `medicine_name`, `medicinecompany`, `dose`, `quantity`, `type`, `category`, `manufacture_date`, `expiry_date`, `status`) VALUES ('$id','$donorname','$donoraddress','$phone','$email','$idproof','$medicine_name','$medicinecompany','$dose','$quantity','$type','$category','$manufacture_date','$expiry_date','active')";
$result = mysqli_query($conn,$sql);
echo "<script> alert('Medicine Added'); window.location.href='donatemedicine.php';</script>";
}
?>


<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    
    <!-- Title Page-->
    <title>MEDICINES</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i"
        rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Main CSS-->
    <link href="css/style.css" rel="stylesheet" media="all">
</head>

<body>
  
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #f5f5f5;">
        <div class="wrapper wrapper--w790">
            <div class="card card-10">
                <div class="card-heading" style="background-color: #14c2da;">
                    <h2 class="title" style="color:#883d3d" align="center">ADD MEDICINES</h2>
                </div>
                
                    <form method="POST" style="align:center" enctype="multipart/form-data">

                    <div class="card-body">
                   <div class="form-row m-p-55" style="margin: right 500px;">
                            <div class="name">Donor Name :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <input class="input--style-5" type="text" name="donorname" id="donorname">
                                </div>
                            </div>
                            </div>
                        </div> <br>

                        <div class="form-row m-p-55">
                            <div class="name">Donor Address :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="donoraddress">
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row m-p-55">
                            <div class="name">Mobile :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="phone" class="form-control">
                                </div>
                            </div>
                        </div><br><br>
                        
                        
                        <div class="form-row m-p-55">
                            <div class="name">Email :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                <input class="input--style-5" type="text" name="email" id="email">
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row m-b-55">
                            <div class="name">Upload Id Proof :</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" id="file" name="idproof"
                                                style="width: 494px;">
                                            </div>
                                              </div>
                                        </div><br>
                                   
                        <div class="form-row m-p-55">
                            <div class="name">Medicine Name :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="medicine_name">
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row">
                            <div class="name">Medicine Company :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="medicinecompany">

                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row">
                            <div class="name">Dose :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="dose">

                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row m-p-55">
                            <div class="name">Quantity :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="quantity">
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row m-p-55">
                            <div class="name">Medicine Type :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                <select name="category">
                                        <option value="">Select Type</option>
                                            <?php $query=mysqli_query($conn,"select * from medcategory");
                                          while($row=mysqli_fetch_array($query))
                                          {?>
                                           <option value="<?php echo $row['mcname'];?>"><?php echo $row['mcname'];?>
                                            </option>
                                            <?php } ?>
                                      
                                        <div class="select-dropdown"></div>  </select>
                                </div>
                            </div>
                        </div><br><br>


                        <div class="form-row">
                            <div class="name">Medicine Category :</div>
                            <div class="value">
                            <div class="row row-space">
                                <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    
                                        <select name="category">
                                        <option value="">Select Category</option>
                                            <?php $query=mysqli_query($conn,"select * from medicine_category");
                                          while($row=mysqli_fetch_array($query))
                                          {?>
                                           <option value="<?php echo $row['category'];?>"><?php echo $row['category'];?>
                                            </option>
                                            <?php } ?>
                                      
                                        <div class="select-dropdown"></div>  </select>
                                    </div>
                                </div>
                            </div>
                            <br><br>
                        
                        <div class="form-row">
                            <div class="name">Manufacture Date :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="manufacture_date">
                                </div>
                            </div>
                        </div><br><br>

                        <div class="form-row">
                            <div class="name">Expiry Date :</div>
                            <div class="value">
                            <div class="row row-space">
                                    <div class="col-2">
                                <div class="input-group-desc">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="expiry_date">

                                </div>
                            </div>
                        </div><br><br>


                            <button type="submit" name="submit" style="background-color:white ;" ><h3 style="color:#883d3d" align="center">ADD</h3></button>
                                          
                            <h3 style="color:#883d3d" align="center"><a href="index.php">Home</a></h3>
                                                
                       
                    </form>
                    </div>
            </div>
        </div>
    </div>
    
            
    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>
	

	
<script>
</script>	

</body>

</html>