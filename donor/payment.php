<?php
        $dd=$_GET['id'];
        $apiKey="rzp_test_12VENFtTWICGi9";
        include 'db.php';
        session_start();
        $session=$_SESSION['login_main'];
        $sqlii="SELECT enquiry.userid,enquiry.id,enquiry.username,enquiry.status,enquiry.medicine_name,enquiry.medicinecompany,medicines.quantity,enquiry.quanitity,medicines.price,enquiry.medicine_name,medicines.medicine_name from enquiry join medicines on medicines.medicine_name=enquiry.medicine_name where enquiry.status='Approved' and enquiry.id='$dd'";
        $result = mysqli_query($conn, $sqlii);
        while ($row = mysqli_fetch_assoc($result)){
            $ot=$row['quantity'];
            $qot=$row['quanitity'];
            $qo=$row['price'];
            $kk=$row['medicine_name'];
            $vvy=$qot*$qo;
            $jj= $ot-$qot;
       
?>
<form action="payaction.php?aid=<?php echo $vvy; ?>&&bid=<?php echo $dd;?>" method="POST">
<script
    src="https://checkout.razorpay.com/v1/checkout.js"
    data-key="<?php echo $apiKey; ?>" // Enter the Test API Key ID generated from Dashboard → Settings → API Keys
    data-amount="<?php echo $vvy * 100; ?>" // Amount is in currency subunits. Hence, 29935 refers to 29935 paise or ₹299.35.
    data-currency="INR"// You can accept international payments by changing the currency code. Contact our Support Team to enable International for your account
    data-order_id="<?php rand(100000, 999999);?>"// Replace with the order_id generated by you in the backend.
    data-buttontext="Pay"
    data-name="Medi-Care"
    data-description="The Complete Medicine Aid"
    data-image=""
    data-prefill.name=""
    data-prefill.email=""
    data-theme.color="#F37254"
></script>
<input type="hidden" custom="Hidden Element" name="hidden">
</form> 
<?php } ?>

<!--style>
.razorpay-payment-button { display:none; }
</style>


<script type="text/javascript">
  $(document).ready(function(){
    $('.razorpay-payment-button').click();

});
</script-->