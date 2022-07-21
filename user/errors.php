<?php if (count($errors) > 0) :  ?>
	<div class="error">
		<?php foreach ($errors as $error) : ?>
			<p><?php echo $error ?> </p>
		<?php endforeach ?>
	</div>
<?php endif ?>



<?php
include 'db.php';
session_start();
?>
<!DOCTYPE html>
<html class="no-js">
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="..........................................................................." />
    <meta name="description" content="........................................................................" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico..........................................." />
    <link rel="apple-touch-icon" type="image/x-icon" href="apple-touch-icon.png..............................." />
    <title>Find Medicine</title>
    <link rel="stylesheet" type="text/css" href="style.css" media="all" />
    <script type="text/javascript" src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    </head>

<body>
<div>
<div>
   
        <form class="col-md-4 col-sm-offset-4 text-center" style="margin: 10%;text-align: center;margin-left: 30%;padding-top: 10%;padding-bottom: 10%;" method="post" action="searchmedicine.php">
                <div class="form-group center">      
                    <input style="width:140px;height:35px;border:1px solid black;" type="text" name="search" placeholder="Search Medicine">
                    &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
                    <button type="submit" style="background:#56CDF0;border:1px solid #56CDF0;padding:6px 20px;border-radius:5px;" class="btn btn-default">Search</button>
                    <br><br><br><br><br><br>
                  </div>
    
		
		<div class="result_table" style="margin-left: 2%;text-align: center">
            <table style="background:white;border:1px solid black;" class="text-center">
                <thead>
                    <tr>
                        <th style="border:1px solid black">Medicine Name</th>
                        <th style="border:1px solid black">Medicine Company</th>
                        <th style="border:1px solid black">Dose</th>
                        <th style="border:1px solid black">Medicine Category</th>
                        <th style="border:1px solid black">Manufacture Date</th>
                        <th style="border:1px solid black">Expiry Date</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    
                         {
//                        $str1=$_POST["search"];
                        $conn=mysqli_connect("localhost","root","","med");
                        // Make sure we connected successfully
                        if(! $conn)
                        {
                            die('Connection Failed'.mysql_error());
                        }

                        // Select the database to use
                        mysqli_select_db($conn,'med');
                        //$row = mysqli_fetch_array($result);
                         $result = mysqli_query($conn,"SELECT * FROM medicines;") or die("Failed to fetch".mysql_error());
                             
                             if( mysqli_num_rows( $result)==0 ){
                             $result1 = mysqli_query($conn,"SELECT * FROM medicines where medicine_name='".$str1."';") or die("Failed to fetch".mysql_error()); 
                                if( mysqli_num_rows( $result1)==0 ){
                                    echo '<tr><td colspan="4">No Rows Returned</td></tr>';
                                }
                                
                                
                             }
                        else{
                        while( $row = mysqli_fetch_assoc( $result) ){
                            echo "<tr>
                            <td>{$row['medicine_name']}</td>
                            <td>{$row['medicinecompany']}</td>
                            <td>{$row['dose']}</td>
                            <td>{$row['med_category']}</td>
                            <td>{$row['manufacture_date']}</td>
                            <td>{$row['expiry_date']}</td></tr>\n";
                        }
                            }
                         } 
            ?>
                
                </tbody>
            </table>
                </div>
            </form>                
            <br>
    </div>
    </div>

</body>

</html>
