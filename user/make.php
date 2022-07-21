<!-- inseration part-->
<?php
include 'db.php';
session_start();
$id = $_SESSION['id'];
//echo $id;
$medicine_name=$_POST['medicine_name'];
$medicinecompany=$_POST['medicinecompany'];
$dose=$_POST['dose'];
$quanitity=$_POST['quanitity'];
$idproof=$_FILES['idproof']['name'];
move_uploaded_file($_FILES['idproof']['tmp_name'],"../uploads/".$idproof);
$prescription=$_FILES['prescription']['name'];
move_uploaded_file($_FILES['prescription']['tmp_name'],"../uploads/".$prescription);




 //$rs = mysqli_query($con,"SELECT * FROM tbl_login WHERE status='1' and type1='user' and loginid=$id" );
                          //$row1=mysqli_fetch_assoc($rs);
            //$logid=$row1['loginid'];
            //$cs = mysqli_query($con,"SELECT * FROM tbl_reg WHERE loginid='$logid' " );
$sql1="insert into enquiry(medicine_name,medicinecompany,dose,idproof,prescription,quanitity,status) 
values($medicine_name','$medicinecompany','$dose','$idproof','$prescription','$quanitity',$status)";
$result = mysqli_query($conn, $sql1);
echo "<script> alert('Successfully Requested for Medicine'); window.location.href='makeenquiry.php';</script>";
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
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.jpg">

    <!-- Title Page-->
    <title>MEDI-CARE</title>
    

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
    <link href="css_insert/main.css" rel="stylesheet" media="all">

</head>

<body>
<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">
    <link rel="shortcut icon" href="images/logo.jpg" type="image/x-icon">
    <link rel="apple-touch-icon" href="images/logo.jpg">

    <!-- Title Page-->
    <title>MEDI-CARE</title>
    

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
    <link href="css_insert/main.css" rel="stylesheet" media="all">

</head>

<body>

    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #f5f5f5;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">


            <form method="POST" action="makeenquiryacc.php">
                <div class="card-heading" style="background-color: #14c2da;">
                    <h2 class="title">SEND REQUEST</h2>
                </div>               
                 <div class="card-body">
                        <div class="form-row m-b-55">
                            <div class="name">Medicine Name</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" id="medicine_name" value="<?php echo $medicine_name;?>" >
                                        
                                        </div>
                                        <span id="msg1" style="color:red;"></span>

                                    </div>

                                </div>
                            </div>
                        </div>

                        <!--  <div class="card-body">-->
                        <div class="form-row m-b-55">
                            <div class="name">Dose</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" value="<?php echo $dose;?>" type="text" style="width: 494px;">
                                        
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
     


                        <div class="form-row">
                            <div class="name">Category</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="category">
                                        <option value="">Select Category</option>
                                            <?php $query=mysqli_query($conn,"select * from medicine_category");
                                          while($row=mysqli_fetch_array($query))
                                          {?>

                                            <option value="<?php echo $row['id'];?>"><?php echo $row['category'];?>
                                            </option>
                                            <?php } ?>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row">
                            <div class="name">Quantity</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" min="1" max="50" name="quanitity">
                                </div>
                            </div>
                        </div>


                        
                    
                        <div class="form-row m-b-55">
                            <div class="name">Medicine Company</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text"  value="<?php echo $medicinecompany ?>" id="medicinecompany" name="medicinecompany"
                                                style="width: 494px;">    
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                      
                    
                        <div class="form-row m-b-55">
                            <div class="name">Upload Id Proof</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" id="file" name="idproof"
                                                style="width: 494px;" required onchange="fileValidation();">
                                        
                                        </div>
                                        <script>
        function fileValidation() {
            var fileInput =
                document.getElementById('file');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf|\.jpg|\.png|\.jpeg|\.wpd)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Invalid file type');
                fileInput.value = '';
                return false;
            }
        }
    </script>
                                    </div>

                                </div>
                            </div>
                        </div>

                        
                        <div class="form-row m-b-55">
                            <div class="name">Upload Prescription</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="file" name="prescription"
                                                style="width: 494px;" id="file1" >
                                        
                                        </div>
                                       
                                    </div>

                                </div>
                            </div>
                        </div>
                        

                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" style="background-color:#d33b33">Send Medicine Request </button><br><br>    
                            <button class="" type="submit" name="submit" style=""><a href="viewmedicine.php">BACK</button></div>
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

</body>

</html>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body>

</html>