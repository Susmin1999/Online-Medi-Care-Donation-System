<?php
session_start();
//error_reporting(0);
include('db.php');

$eid = $_GET['id'];
$uid = $_SESSION['login_main'];
$sqlii="SELECT enquiry.userid,enquiry.id,enquiry.username,enquiry.status,enquiry.medicine_name,enquiry.medicinecompany,medicines.quantity,enquiry.quanitity,medicines.price,enquiry.medicine_name,medicines.medicine_name from enquiry join medicines on medicines.medicine_name=enquiry.medicine_name where enquiry.id='$eid'";
$result = mysqli_query($conn, $sqlii);
$row=mysqli_fetch_array($result);
$id=$row['id'];
$username=$row['username'];
$med=$row['medicine_name'];
$medc=$row['medicinecompany'];
$quan=$row['quanitity'];
$price=$row['price'];
$prices=$row['quanitity']*$row['price'];




if(isset($_POST['finish'])){
    
    header("location:final.php");
}

?>
<html>
    <head>
        <title>Invoice</title>
        <style>
        .ord-inv-cont{
            margin-left: 25%;
            
}
.inv-body{
    margin-top: 30px;
 background-color: whitesmoke;
 box-shadow: 1px 1px 1px 1px;
 width: 55%;

}
.inv-dtls{
    text-align: center;
}
.inv-dtls h2{
    padding-top:4%;
    font-style: bold;
    color:black;
}
.inv-dtls p{
    font-size: 12px;
    font-style: italic;
    margin-top:-5px;
}
.inv-conts{
    margin: 50px;
}

.inv-head h5{
    margin-bottom: 20px;
}
.inv-addr{
    margin-left: 8%;
    margin-bottom: 10%;
}
.inv-tbl table{
   width: 100%;
}
.inv-tbl table tr{
    width: 100%;
}.inv-tbl table th{
    width: 10%;

}.inv-tbl table td{
    width: 10%;
    margin-left: 100px;
}
.inv-tot{
    margin-top: 20px;
}
.inv-tot text{
    float: left;
    text-align: inline;
}

.pay-stat{
    margin-top: 40px;
    width: 70%;
    background-color: #5cf78d;
    height: 30px;
    margin-left: 60px;
    color: black;
    text-align: center;
    margin-bottom: 10px;
}
.ord-stat{
    width: 70%;
    background-color: #2cf56c;
    height: 30px;
    margin-left: 60px;
    color: black;
    text-align: center;
    margin-bottom: 30px;
}
.inv-footer{
    margin-top:15px;
    padding-bottom: 10px;
    text-align: center;
}
.inv-btn{
    border: none;
    width: 150px;
    height:30px;
    border-radius:6px;
    background-color:#57d7fa;
    color: black;
    margin-left: 25%;
}
.inv-btn:hover{
    border: none;
    border-radius:6px;
    background-color:#51ad89;
    color: black;
}
.inv-btn1{
    border: none;
    width: 150px;
    height:30px;
    border-radius:6px;
    background-color:orange;
    color: black;
}
.inv-btn1:hover{
    border: none;
    border-radius:6px;
    background-color:lawngreen;
    color: black;
}


    </style>
    </head>
    <body>
<div class="ord-inv-cont" >
            <div class="inv-body" id="invoice">
                <div class="inv-dtls">
                    
                    <h2>MEDI-CARE</h2>
                    <p>The Complete Medical Aid</p>
                </div>
                <form method="post">
                <div class="inv-conts">
                    <div class="inv-head">
                    <h5>Customer Name :&nbsp; <?php echo $username; ?></h5>
                    <h5>Medicine Name :&nbsp; <?php echo $med ?></h5>
                    <h5>Medicine Company&nbsp; <?php echo $medc ?></h5>
                    <h5>Quantity:&nbsp; <?php echo $quan ?></h5>
                    <h5>Price:&nbsp; <?php echo $price ?></h5>
                    <h5>Totalprice:&nbsp; <?php echo $prices ?></h5>
					
                    </div>
                  
                    <div class="inv-tbl">        
                    <div class="inv-footer">
                        <text>Thank you for Cooperating with us</text>
                    </div>
                </div>
              
            </div>
            <p>

            <button class="inv-btn" onclick="printDiv('invoice')">Download Invoice</button>
            <button class="inv-btn1" type="submit" name="finish"><a href="dashboard.php">Finish</a></button></p>
            
     </div>
</form>
<!-- print screen -->
<script type="text/javascript">
      function printDiv(divName) {
     var printContents = document.getElementById(divName).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
    </script>
    </body></html>