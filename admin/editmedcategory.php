<?php      
    include 'db.php';
    $mcid=$_GET['mcid'];
    $sql="select * from `medcategory` where mcid='$mcid'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $mcname=$row['mcname'];
    $des = $row['des'];
    //$file = $row['file'];
    //$officer_email = $row['officer_email'];
    //$officer_password = $row['officer_password'];

    if(isset($_POST['submit']))
    {
    $cid=$_GET['mcid'];
	$cname = $_POST['mcname'];
    $des = $_POST['des'];
    mysqli_query($conn,"UPDATE `medcategory` SET `mcid`='$mcid',`mcname`='$mcname',`des`='$des' where mcid='$mcid'");
    header('location:viewmedcategory.php');
     }    
 ?>




<!doctype html>
 <html lang="en" class="no-focus"> <!--<![endif]-->
    <head>
 <title>Admin Edit Category</title>
<link rel="stylesheet" id="css-main" href="style.css">

</head>
    <body>
        <div id="page-container" class="sidebar-o sidebar-inverse side-scroll page-header-fixed main-content-narrow">
     

   

            <!-- Main Container -->
            <main id="main-container">
                <!-- Page Content -->
                <div class="content">
                
                    <div>
                    <h2 class="content-heading" style="text-align:center;">UPDATE CATEGORY</h2>
    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Bootstrap Register -->
                            <div class="block block-themed">
                                <div class="block-header bg-gd-emerald">
                                    
                                
                                </div>
                                <div class="block-content">
                                    
                                    <form method="post">
                                        <div class="form-group row">
                                            <label class="col-12" for="register1-username">Category Name</label>
                                            <div class="col-12">
                                                <input type="text" class="form-control" name="mcname" id="mcname" onfocusout="f1()" value="<?php echo $mcname ?>" required onChange="Valmcname();">
                                            </div>
                                        </div>
										<span id="msgr" style="color:red;"></span>
<script>		
function Valmcname() 
{
    var val = document.getElementById('mcname').value;
	 if(val=="")
	 {
	    document.getElementById('msgmcname').innerHTML="** please fill program name";
		return false;
		}
     if (!val.match(/^[A-Z][a-z\ ]{3,}$/)) 
    {
        document.getElementById('msgmcname').innerHTML="Start with a Capital letter & Only alphabets !!";
		            document.getElementById('mcname').value = "";
        return false;
    }
document.getElementById('msgmcname').innerHTML=" ";
    return true;
}
</script>
                                        
                                      
                                         <div class="form-group row">
                                            <label class="col-12" for="register1-password">Description</label>
                                            <div class="col-12">
                                                 <input type="text" class="form-control" name="des" id="des"  onfocusout="f1()" value="<?php echo $des ?>">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <button type="submit" name="submit" style="text-align: center;" style="color: #107fee;">
                                                    Update
                                                </button>
												<button type="submit" style="text-align: center;" >
                                                    <a href="viewmedcategory.php">Cancel
                                                </button>
                                            </div>
                                        </div>
                                    </form>

                                </div>
                            </div>
                            <!-- END Bootstrap Register -->
                        </div>
                        
                       </div>
                </div>
                <!-- END Page Content -->
            </main>
            <!-- END Main Container -->

          
        </div>
        <!-- END Page Container -->

        <!-- Codebase Core JS -->
        <script src="assets/js/core/jquery.min.js"></script>
        <script src="assets/js/core/popper.min.js"></script>
        <script src="assets/js/core/bootstrap.min.js"></script>
        <script src="assets/js/core/jquery.slimscroll.min.js"></script>
        <script src="assets/js/core/jquery.scrollLock.min.js"></script>
        <script src="assets/js/core/jquery.appear.min.js"></script>
        <script src="assets/js/core/jquery.countTo.min.js"></script>
        <script src="assets/js/core/js.cookie.min.js"></script>
        <script src="assets/js/codebase.js"></script>
    </body>
</html>
