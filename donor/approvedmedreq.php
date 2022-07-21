<?php
session_start();
if (! empty($_SESSION['login_main'])) {
?>

<!DOCTYPE html>
<html lang="en">
<head>
  	<title>Donor | Medicine Request View</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="style.css">
	<!-- <link rel="stylesheet" href="bootstrap.min.css"> -->

	</head>
  <body>
        
  <div class="d-sm-flex align-items-center mb-4">
                      <h2 class="col-md-10 text-center mb-2" style="text-align:center" style="text-color:#184f8c"><b>REQUEST APPROVAL</b></h2>
        
              
                      <a href="#" class="text-dark ml-auto mb-3 mb-sm-0"></a>
                    </div>
                      <table class="table">
                        <thead  class="thead-dark"> 
                          <tr>
                            <th class="font-weight-bold">User Name</th>						
						  <th class="font-weight-bold">Medicine Name</th>
							<th class="font-weight-bold">Medicine Company</th>
							<th class="font-weight-bold">Dose</th>
              <th class="font-weight-bold">Price</th>
              <th class="font-weight-bold">Quantity</th>
							<th class="font-weight-bold">Id Proof</th>
							<th class="font-weight-bold">Income Certificate</th>
							<th class="font-weight-bold">Prescription</th>
              <th class="font-weight-bold">Total Price</th>
              <th class="font-weight-bold">Action</th>
                          </tr>
                        </thead>
                        <tbody>
                           <?php
                          include 'db.php';
                          $sql="SELECT enquiry.userid,enquiry.id,enquiry.username,enquiry.status,enquiry.idproof,enquiry.prescription,enquiry.incproof,enquiry.medicine_name,enquiry.medicinecompany,enquiry.dose,medicines.quantity,enquiry.quanitity,medicines.price,enquiry.medicine_name,medicines.medicine_name from enquiry join medicines on medicines.medicine_name=enquiry.medicine_name where enquiry.status='Approved'";
//$sql="select * from enquiry where status='Approved'";
$res=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($res))
{
?>

		<tr>
    <td><?php echo $row['username'];?></br></br></td>       
    
    <td><?php echo $row['medicine_name'];?></br></br></td>
    <td><?php echo $row['medicinecompany'];?></br></br></td>
    <td><?php echo $row['dose'];?></br></br></td>
    <td><?php echo $row['price'];?></br></br></td>
    <td><?php echo $row['quanitity'];?></br></br></td>
    <td>
    <?php echo $row['idproof'];?></br></br>
    <img src="../img/<?php echo $row['idproof'];?>" width="100" height="100"/></td>

    <td>
    <?php echo $row['prescription'];?></br></br>
    <embed src="../img/<?php echo $row['prescription'];?>" width="100" height="100"/></td>

    <td>
    <?php echo $row['incproof'];?></br></br>
    <embed src="../img/<?php echo $row['incproof'];?>" width="100" height="100"/></td>
    <td><?php echo $row['quanitity']*$row['price']?></br></br></td>
 
    <td>
    <br><br><br>
    <button><a href="payment.php?id=<?php echo $row['id'];?>">Proceed to Pay</a></button></td>
			</tr>
                      <?php
}
?>
                        </tbody>
                      </table>
                      <button class="breadcrumb-item" style="align: center; width: 200px;height: 30px; margin-top: 5px; text-color:black"><a href="dashboard.php" style="text-align:right">Back</a></button>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
  </body>
</html>
<?php
}
else
header('location:log.php');
?>