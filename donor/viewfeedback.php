<?php
session_start();
include('db.php');  


?>
<!DOCTYPE html>
<html lang="en">

<head>
<style>
table, th, td{
  border: 1px solid;
  width: 35%;
  height: 50px;
  text-align: center;
  background: snow;
}
.susu{
    margin-left: 500px;
    margin-top:100px;
    
}



/* table {
  width: 100%;
}

th {
  height: 70px;
} */
</style>

</head>

<body class="animsition" style="background:azure;" >
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        
        <!-- END HEADER MOBILE-->

             
            </div>
        </aside>
       
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            <form class="form-header" action="" method="POST">
                             
                                </button>
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    <div class="noti__item js-item-menu">
                                       
                                            <div class="mess__title">
                                                
                                            </div>
                                            <div class="notifi__footer">
                                                <a href="#"></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        
                                        <div class="content">
                                            <a class="js-acc-btn" href=""></a>
                                        </div>
                                        
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section_content section_content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                               <section class="grids-section bd-content">

                <!-- Grids Info -->
                <div class="susu"  >
                    <h4 class="tittle-w3-agileits mb-4" style="margin-left: 350px;;" >FEEDBACK</h4>
                    <table class="table table-bordered table-striped" style="width: 800px;">
                        <thead>
                            <tr style="text-align:center;">
                                <th >Name</th>
                                <th>Email</th>
                                <th>Message</th>
                                <th>Status</th>
                         </tr>
                        </thead>
                        <tbody>
                           
                          <?php
                        include 'db.php';
$sql="select * from feedback WHERE status='reported'";
$result = mysqli_query($conn, $sql);
//$r= mysqli_fetch_assoc($result);
while($r=mysqli_fetch_array($result))
{?>
        <tr><td><?php echo $r['name'];?></td>
            <td><?php echo $r['email'];?></td>
            <td><?php echo $r['message'];?></td>
            <td><?php echo $r['status'];?></td>
          
        
        
                </tr>
                      <?php
}
?>
</tbody>
                    </table>
                    <br><br>
                    <button><a href="dashboard.php">Back</a></button>

                </div>
                            </div>
                        </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
