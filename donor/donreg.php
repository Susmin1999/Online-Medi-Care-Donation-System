<!DOCTYPE html>
<html>
  <head>
    <title>Donor Registration Form</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
         *{
	padding: 0;
	margin: 0;
}
body{
  background: url(img/donreg1.jpg) no-repeat center fixed;
  background-size: cover;
}

.container{
	background: #27a195;
	width: 425px;
	height: 600px;
	padding-bottom: 20px;
	position: absolute;
	top:50%;
	left: 50%;
	transform: translate(-50%, -50%);
	margin: auto;
    padding: 90px 50px 70px 50px;
}


.fl{
	float: left;
  width: 110px;
  line-height: 35px;
}

.fontLabel{
  color: white;
}

.fr{
	float: right;
}

.clr{
	clear: both;
}

.box{
	width: 360px;
	height: 35px;
	margin-top: 10px;
	font-family: verdana;
	font-size: 13px;
}

.textBox{
	height: 35px;
	width: 190px;
	border: none;
    padding-left: 20px;
}

.new{
  float: left;
}

.iconBox{
	height: 35px;
	width: 40px;
	line-height: 38px;
	text-align: center;
    background: #ff6600;
}

.radio{
	color: white;
	background: #2d3e3f;
	line-height: 38px;
}

.terms{
	line-height: 35px;
	text-align: center;
	background: #2d3e3f;
	color: white;
}

.submit{
	float: right;
	border: none;
	color: white;
	width: 361px;
	height: 35px;
	background: #ff6600;
	text-transform: uppercase;
  cursor: pointer;
}

::-webkit-input-placeholder { /* Chrome/Opera/Safari */

}


</style>
</head>
<body>
<!-- Body of Form starts -->
<div class="container">
<form method="post" enctype="multipart/form-data" action="donregacc.php" onsubmit="registration();" autocomplete="on">
<h1 style="color:#883d3d" align="center">REGISTER HERE</h1><br>


<!--Donor Name-->
<div class="box">
<label for="doname" class="fl fontLabel"> Donor Name: </label>
<div class="new iconBox">
<i class="fa fa-user" aria-hidden="true"></i>
</div>
<div class="fr">
<input type="text" name="donname" id="donname" placeholder="Donor Name" class="textBox" autofocus="on" required onchange="Validate();">
<span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('donname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('donname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
</div>
<div class="clr"></div>
</div><br>
<!--Donor Name-->


<!--Donor Address-->
<div class="box">
<label for="donaddress" class="fl fontLabel"> Donor Address: </label>
<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>
<div class="fr">
<input type="text" name="donaddress" id="donaddress" placeholder="Donor Address" class="textBox" required onchange="Validaddress();">
<span id="msg2" style="color:red;"></span>
<script>		
function Validaddress() 
{
    var val = document.getElementById('donaddress').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets are allowed";
		            document.getElementById('donaddress').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
</div>
<div class="clr"></div>
</div><br>
<!--Donor Address-->


<!---Gender----->
<div class="box">
<label for="donaddress" class="fl fontLabel"> Gender: </label>
<div class="fl iconBox"><i class="fa fa-user" aria-hidden="true"></i></div>

<select name="gender" id="gender" class="form-control">
              <option value="gender" disabled selected>Gender</option>
              <option value="male" >Male</option>
              <option value="female" >Female</option>
              <option value="other" >Other</option>
            </select>
</div><br>
<!---Gender--->


<!---Phone No.------>
<div class="box">
<label for="mobile" class="fl fontLabel"> Mobile: </label>
<div class="fl iconBox"><i class="fa fa-phone-square" aria-hidden="true"></i></div>
<div class="fr">
<input type="text" name="mobile" id="mobile" maxlength="10" placeholder="Mobile" class="textBox" required onchange="Validmobile();">
<span id="msg3" style="color:red;"></span>
<script>
function Validmobile() 
{
    var val = document.getElementById('mobile').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg3').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('mobile').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
</div>
<div class="clr"></div>
</div><br>
<!---Phone No.---->


<!---Email ID---->
<div class="box">
<label for="email" class="fl fontLabel"> Email ID: </label>
<div class="fl iconBox"><i class="fa fa-envelope" aria-hidden="true"></i></div>
<div class="fr">
<input type="email" name="email" id="email" placeholder="Email Id" class="textBox" required onchange="Validemail();">
<span id="msg4" style="color:red;"></span>
<script>		
function Validemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg4').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>
</div>
<div class="clr"></div>
</div><br>
<!--Email ID----->


<!--ID Proof----->
<div class="box">
<label for="donidproof" class="fl fontLabel"> Donor Id Proof:</label>
<div class="fl iconBox"><i class="fa fa-file" aria-hidden="true"></i></div>
<div class="fr">    
<input type="file" name="donidproof" id="donidproof" placeholder="Donor Id Proof" class="textBox" required onchange="fileValidation();">
<span id="msg5" style="color:red;"></span>
<script>	
function fileValidation() {
            var fileInput = document.getElementById('file');
             
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
<div class="clr"></div>
</div><br>
<!--ID Proof----->


<!---Password------>
<div class="box">
<label for="password" class="fl fontLabel"> Password: </label>
<div class="fl iconBox"><i class="fa fa-key" aria-hidden="true"></i></div>
<div class="fr">
<input type="password" name="password" id="password" placeholder="Password" class="textBox" required onchange="Validpass();">
<span id="msg6" style="color:red;"></span>
<script>		
function Validpass() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg6').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}
</script>
</div>
<div class="clr"></div>
</div><br><br>
<!---Password---->



<!---Submit Button------>
<div class="box" style="background: #2d3e3f">
<input type="Submit" name="Submit" class="submit" value="SUBMIT">
</div><br>
<a href="../index.php"><h3>Home</h3><i class="zmdi zmdi-arrow-right"></i></a> 
<br>
<a href="../log.php"><h3 style="align:center">Login</h3><i class="zmdi zmdi-arrow-right"></i></a>
<!---Submit Button----->
</form>
</div>
<!--Body of Form ends--->
</body>
</html>






    
  <!-- <body>
    <div class="main-block">
      <div class="left-part">
        <img src="img/medicine.png">
        <h1>REGISTER HERE</h1>

      </div>
      <form method="POST" action="mshopregacc.php" onsubmit="registration();">  
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>


<div class="info">
<input type="text" placeholder="Shop Name" id="shopname" name="shopname" class="form-control" required onchange="Validate();">
           <span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('shopname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('shopname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
</div>

<div class="info">
<input type="text" name="shopaddress" id="shopaddress" placeholder="Shop Address" class="form-control" required onchange="Validaddress();">
<span id="msg2" style="color:red;"></span>
<script>		
function Validaddress() 
{
    var val = document.getElementById('address').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets are allowed";
		            document.getElementById('address').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>
</div>


<div class="info">
<input type="text" name="mobile" id="mobile"placeholder="Mobile No" required onchange="Validmobile();">
<i class="zmdi zmdi-account"></i>
<span id="msg3" style="color:red;"></span>
<script>
function Validmobile() 
{
    var val = document.getElementById('phone').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg3').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phone').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>
</div>


<div class="info">
<input type="text" name="licenseno" id="licenseno" placeholder="License No">
</div>


<div class="info">
<div class="name">License Id Proof</div>
                             
<input type="file" id="file" name="licenseproof" placeholder="License Proof" required onchange="fileValidation();">

<script>
        function fileValidation() {
            var fileInput = document.getElementById('file');
             
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


<div class="info">
<input type="text" name="email" id="email" placeholder="Email" required onchange="Validemail();">
<i class="zmdi zmdi-account"></i>
<span id="msg4" style="color:red;"></span>
<script>		
function Validemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg4').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
		</script>
</div>


<div class="info">
<input type="password" name="password" id="password" placeholder="Password" required onchange="Validpass();">
<i class="zmdi zmdi-account"></i>
<span id="msg5" style="color:red;"></span>
<script>		
function Validpass() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg5').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
</div>


<div class="info">
<input type="password" name="confpassword" placeholder="Confirm Password" required onchange="Validcpass();">
<i class="zmdi zmdi-account"></i>
<span id="msg6" style="color:red;"></span>
<script>
function Validcpass()
{
var pas1=document.getElementById("cpassword");
							  var pas2=document.getElementById("cpassword");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg6').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg6').innerHTML="Please confirm password!!";
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg6').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg6').innerHTML=" "; 
	return true;
}
</script>
</div>

<div class="info">
<select name="usertype" id="usertype" class="form-control">
              <option value="select user" disabled selected>User Type*</option>
              <option value="patient">Donor</option>
              <option value="medicalshop">Medical Shop</option>
            </select>
</div>
      

<button type="submit" name="submit">Register</button>
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp
<div>
<a href="../index.php"><h3>Home</h3><i class="zmdi zmdi-arrow-right"></i></a> 
<a href="../log.php"><h3 style="align:center">Login</h3><i class="zmdi zmdi-arrow-right"></i>
</div>      
      </form>
    </div>
  </body>
</html> -->