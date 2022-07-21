<?php
session_start();
include('db.php');	

if(isset($_POST['submit']))
{
	$medicine_name=$_POST['medicine_name'];
	$medicinecompany=$_POST['medicinecompany'];
	$dose=$_POST['dose'];
    $quantity=$_POST['quantity'];
    $price=$_POST['price'];
    $med_category=$_POST['med_category'];
    $lifespancategory=$_POST['lifespancategory'];
    $manufacture_date=$_POST['manufacture_date'];
    $expiry_date=$_POST['expiry_date'];
  


$sql="insert into medicines(medicine_name,medicinecompany,dose,quantity,price,med_category,lifespancategory,manufacture_date,expiry_date,status) values('$medicine_name','$medicinecompany','$dose','$quantity','$price','$med_category','$lifespancategory','$manufacture_date','$expiry_date','active')";
$result = mysqli_query($conn,$sql);
echo "<script> alert('Item Added'); window.location.href='mshopaddmedicine.php';</script>";

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
    <link href="main.css" rel="stylesheet" media="all">
</head>

<body>
  
    
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50" style="background-color: #009dd04d;">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading" style="background-color:#106969;">
                    <h2 class="title">ADD MEDICINES</h2>
                </div>
                <div class="card-body">
                    <form method="POST" enctype="multipart/form-data">
 		   
 
                        <div class="form-row m-p-55">
                            <div class="name">Medicine Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="medicine_name" id="medicine_name" required onchange="Validate();">
                                    <span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('medicine_name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('medicine_name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Medicine Company</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="medicinecompany" id="medicinecompany" required onchange="Validatecom();">
                                    <span id="msg2" style="color:red;"></span>
						<script>		
function Validatecom() 
{
    var val = document.getElementById('medicinecompany').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('medicinecompany').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Dose</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="dose">

                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Quantity</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number"  min="1"  name="quantity">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Price</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="price">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Medicine Category</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                        <select name="med_category">
                                        <option value="">Select Category</option>
                                            <?php $query=mysqli_query($conn,"select * from medcategory");
                                          while($row=mysqli_fetch_array($query))
                                          {?>
                                           <option value="<?php echo $row['mcname'];?>"><?php echo $row['mcname'];?>
                                            </option>
                                            <?php } ?>
                                      
                                        <div class="select-dropdown"></div>  </select>
                                    </div>
                                </div>
                            </div>
                            <br>
   
                            <div class="form-row">
                            <div class="name">Life Span Category</div>
                            <div class="value">
                                <div class="input-group">
                                    
                                        <select name="lifespancategory">
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
                            <br> 
            

                        
                        <div class="form-row">
                            <div class="name">Manufacture Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="manufacture_date">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Expiry Date</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="expiry_date">

                                </div>
                            </div>
                        </div>




						
    
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" style="background-color:#d33b33">Add</button>
                            <button class="btn btn--radius-2 btn--red" type="submit" name="submit" style="background-color:white"><a href=dashboard.php>Back To Home</button>
                        </div>
                       
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
	

	
<!-- <script>
$(document).ready(function(){
	$('#category-dropdown').on('change', function() {
var cat_id = this.value;
$.ajax({
url: "category_product.php",
type: "POST",
data: {
	category: cat_id 
	},
cache: true,
success: function(result){
$("#product-dropdown").html(result);
}
});
});    
});
</script>	 -->

</body>

</html>