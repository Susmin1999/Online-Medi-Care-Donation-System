 <?php
include('db.php');
if(!isset($_SESSION)) { 
  session_start(); 
} 
error_reporting(0);
include("include/config.php");
     
    if(isset($_POST['submit'])){
      $username=$_POST['username'];
      $pass=$_POST['password'];  

    $conn=mysqli_connect("localhost", "root", "", "med");
    $sql="select * from login_tbl where username='$username' and password='$pass'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result);
  }
    if(!empty($rows))
{
 if($rows['type']=="manager")
    {
      $_SESSION['login_main'] = $rows['login_id'];   
        header("location:Manager/dashboard.php");
    }
    else if($rows['type']=="medicalshop")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:dashboard.php");
     } 
     else if($rows['type']=="donor")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:donor/dashboard.php");
     } 
     else if($rows['type']=="patient")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:user/dashboard.php");
     } 
     else if($rows['type']=="admin")
     {
      $_SESSION['login_main'] = $rows['login_id'];
        header("location:admin/dashboard.php");
     }
   
     else {
         "<script> alert('Username and password are incorrect'); window.location:'log.php'</script>";
        // echo "<script>window.location:'log.php'</script>";
        }
}
?> 


<html lang="en">
<head>
  
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Medi-Care</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
<style>
body{
  margin: 1;
  padding: 3;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
  width: 100%;
  height: 100vh;
  display: flex;
  align-items: right;
  justify-content: right;
  background: url('img/slide2.jpg');
}
::selection{
  color: #fff;
  background: #5372F0;
}
.wrapper{
  width: 450px;
  padding: 30px 30px 30px 30px;
  background: ash;
  border-radius: 5px;
  text-align: center;
  box-shadow: 10px 10px 15px rgba(32, 155, 149, 0.1);
}
.wrapper header{
  font-size: 35px;
  font-weight: 600;
}
.wrapper form{
  margin: 40px 0;
}
form .field{
  width: 100%;
  margin-bottom: 20px;
}
form .field.shake{
  animation: shake 0.3s ease-in-out;
}
@keyframes shake {
  0%, 100%{
    margin-left: 0px;
  }
  20%, 80%{
    margin-left: -12px;
  }
  40%, 60%{
    margin-left: 12px;
  }
}
form .field .input-area{
  height: 50px;
  width: 100%;
  position: relative;
}
form input{
  width: 100%;
  height: 100%;
  outline: none;
  padding: 0 45px;
  font-size: 22px;
  background: none;
  caret-color: #5372F0;
  border-radius: 5px;
  border: 1px solid #bfbfbf;
  border-bottom-width: 2px;
  transition: all 0.2s ease;
}
form .field input:focus,
form .field.valid input{
  border-color: #FFAEBC;
}
form .field.shake input,
form .field.error input{
  border-color: #dc3545;
}
.field .input-area i{
  position: absolute;
  top: 50%;
  font-size: 22px;
  pointer-events: none;
  transform: translateY(-50%);
}
.input-area .icon{
  left: 15px;
  color: #bfbfbf;
  transition: color 0.2s ease;
}
.input-area .error-icon{
  right: 20px;
  color: #dc3545;
}
form input:focus ~ .icon,
form .field.valid .icon{
  color: #5372F0;
}
form .field.shake input:focus ~ .icon,
form .field.error input:focus ~ .icon{
  color: #bfbfbf;
}
form input::placeholder{
  color: #bfbfbf;
  font-size: 22px;
}
form .field .error-txt{
  color: #dc3545;
  text-align: left;
  margin-top: 5px;
}
form .field .error{
  display: none;
}
form .field.shake .error,
form .field.error .error{
  display: block;
}
form .pass-txt{
  text-align: left;
  margin-top: -10px;
}
.wrapper a{
  color: #5372F0;
  text-decoration: none;
  font-size: 22px;
}
.wrapper a:hover{
  text-decoration: underline;
}
form input[type="submit"]{
  height: 50px;
  margin-top: 20px;
  color: #fff;
  padding: 0px;
  border: none;
  background: #5372F0;
  cursor: pointer;
  border-bottom: 5px solid rgba(0,0,0,0.1);
  transition: all 0.3s ease;
}
form input[type="submit"]:hover{
  background: #FFAEBC;
}
</style>
</head>

<body>
  
  <div class="wrapper">
    <header style="color:rgb(235, 135, 193)">LOGIN HERE</header>
    
    <form method="POST">
      <div class="field username">
        <div class="input-area">
          <input type="text" name="username" placeholder="username">
          <i class="icon fas fa-envelope"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <!-- <div class="error error-txt">Username can't be blank</div> -->
      </div>

      
      <div class="field password">
        <div class="input-area">
          <input type="password" name="password" placeholder="password">
          <i class="icon fas fa-lock"></i>
          <i class="error error-icon fas fa-exclamation-circle"></i>
        </div>
        <!-- <div class="error error-txt">Password can't be blank</div> -->
      </div>
     
     
      <input type="submit" name="submit" value="Login"><br><br>
      <div class=""><b>Create an Account</b>&nbsp<a href="../reg.php" style="color: #090f8b;"><b>Register</b></a></div>
      <h3><a href="../index.php" style="color: #090f8b;"><b>HOME</b></a></h3>
      </form>

       

  <script src="script.js"></script>
</body>
</html>