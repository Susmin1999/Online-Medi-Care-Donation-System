<!DOCTYPE html>
<html>
<head>
<style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 16px;
      color: #eee;
      }
      body {
      background: url("img/log.jpg") no-repeat center;
      background-size: cover;
      }
      h1, h2 {
      text-transform: uppercase;
      font-weight: 400;
      }
      h2 {
      margin: 0 0 0 8px;
      }
      .main-block {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100%;
      padding: 25px;
      background: rgba(0, 0, 0, 0.5); 
      }
      .left-part, form {
      padding: 25px;
      }
      .left-part {
      text-align: center;
      }
      .fa-graduation-cap {
      font-size: 72px;
      }
      form {
      background: rgba(0, 0, 0, 0.7); 
      }
      .title {
      display: flex;
      align-items: center;
      margin-bottom: 20px;
      }
      .info {
      display: flex;
      flex-direction: column;
      }
      input, select {
      padding: 5px;
      margin-bottom: 30px;
      background: transparent;
      border: none;
      border-bottom: 1px solid #eee;
      }
      input::placeholder {
      color: #eee;
      }
      option:focus {
      border: none;
      }
      option {
      background: black; 
      border: none;
      }
      .checkbox input {
      margin: 0 10px 0 0;
      vertical-align: middle;
      }
      .checkbox a {
      color: #26a9e0;
      }
      .checkbox a:hover {
      color: #85d6de;
      }
      .btn-item, button {
      padding: 10px 5px;
      margin-top: 20px;
      border-radius: 5px; 
      border: none;
      background: #26a9e0; 
      text-decoration: none;
      font-size: 15px;
      font-weight: 400;
      color: #fff;
      }
      .btn-item {
      display: inline-block;
      margin: 20px 5px 0;
      }
      button {
      width: 100%;
      }
      button:hover, .btn-item:hover {
      background: #85d6de;
      }
      @media (min-width: 568px) {
      html, body {
      height: 100%;
      }
      .main-block {
      flex-direction: row;
      height: calc(100% - 50px);
      }
      .left-part, form {
      flex: 1;
      height: auto;
      }
      }
    </style>
  </head>

	<body>

	<body>
    <div class="main-block">
      <div class="left-part">
        <img src="img/medicine.png">
        <h1>REGISTER HERE</h1>

      </div>
      <form method="POST" enctype="multipart/form-data" action="regaction.php" onsubmit="registration();">  
        <div class="title">
          <i class="fas fa-pencil-alt"></i> 
          <h2>Register here</h2>
        </div>
					<div class="form-group">
						<input type="text" placeholder="First Name" id="fname" name="fname" class="form-control" required onchange="Validate();">

            <span id="msg1" style="color:red;"></span>
						<script>		
function Validate() 
{
    var val = document.getElementById('fname').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('fname').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>

						<input type="text" placeholder="Last Name" id="lname" name="lname" class="form-control" required onchange="Validate1();">
					</div>
          <span id="msg2" style="color:red;"></span>
<script>		
function Validate1() 
{
    var val = document.getElementById('lname').value;

    if (!val.match(/^[A-Z][a-z]{0,}$/)) 
    {
        document.getElementById('msg2').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('lname').value = "";
        return false;
    }
document.getElementById('msg2').innerHTML=" ";
    return true;
}
</script>

					<div class="form-wrapper">
						<input type="text" placeholder="Address" id="address" name="address"  class="form-control" required onchange="Validname();">
						<i class="zmdi zmdi-account"></i>
					</div>
          <span id="msg3" style="color:red;"></span>
<script>		
function Validname() 
{
    var val = document.getElementById('address').value;

    if (!val.match(/^[A-Z][a-z" "]{3,}$/)) 
    {
        document.getElementById('msg3').innerHTML="Start with a Capital letter & Only alphabets are allowed";
		            document.getElementById('address').value = "";
        return false;
    }
document.getElementById('msg3').innerHTML=" ";
    return true;
}
</script>

          <select name="gender" id="gender" class="form-control">
              <option value="gender" disabled selected>Gender</option>
              <option value="male" >Male</option>
              <option value="female" >Female</option>
              <option value="other" >Other</option>
            </select>

            <div>
          <select name="usertype" id="usertype" class="form-control">
              <option value="select user"  disabled selected>User Type</option>
              <option value="patient" >Patient</option>
              <!-- <option value="manager" >Donor</option> -->
            </select>
</div>  
					<div class="form-wrapper">
						<input type="text" placeholder="Street" name="street" id="street"  class="form-control" required onchange="Validstr();">
						<i class="zmdi zmdi-account"></i>
					</div> 
          <span id="msg4" style="color:red;"></span>
						<script>		
function Validstr() 
{
    var val = document.getElementById('street').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg4').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('street').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>

					<div class="form-wrapper">
						<input type="text" placeholder="City" name="city" id="city" class="form-control" required onchange="Validcity();">
						<i class="zmdi zmdi-account"></i>
					</div>
          <span id="msg5" style="color:red;"></span>

						<script>		
function Validcity() 
{
    var val = document.getElementById('city').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg5').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('city').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>

					<div class="form-wrapper">
						<input type="text" placeholder="District" name="district" id="district" class="form-control" required onchange="Validdis();">
						<i class="zmdi zmdi-account"></i>
					</div>

          <span id="msg6" style="color:red;"></span>

						<script>		
function Validdis() 
{
    var val = document.getElementById('district').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg6').innerHTML="Start with a Capital letter & Only alphabets without space are allowed!!";
		            document.getElementById('district').value = "";
        return false;
    }
document.getElementById('msg6').innerHTML=" ";
    return true;
}
</script>


					<div class="form-wrapper">
						<input type="text" placeholder="Pincode" name="pincode" id="pincode" class="form-control">
						<i class="zmdi zmdi-account"></i>
					</div>


					<div class="form-wrapper">
						<input type="text" placeholder="Phoneno" name="phone" id="phone"  class="form-control" required onchange="Validphone();">
						<i class="zmdi zmdi-account"></i>
					</div>
          <span id="msg7" style="color:red;"></span>
          <script>
function Validphone() 
{
    var val = document.getElementById('phone').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg7').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('phone').value = "";
        return false;
    }
document.getElementById('msg7').innerHTML=" ";
    return true;
}
</script>



					<div class="form-wrapper">
						<input type="text" placeholder="Email Address" name="email" id="email" class="form-control" required onchange="Validemail();">
						<i class="zmdi zmdi-email"></i>
					</div>		

          <span id="msg5" style="color:red;"></span>
<script>		
function Validemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg8').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg8').innerHTML=" ";
    return true;
}
		</script>

<div class="form-wrapper">
						<input type="password" placeholder="Password" id="password" name="password" class="form-control" required onchange="Validpass();">
						<i class="zmdi zmdi-lock"></i>
					</div>

          <span id="msg9" style="color:red;"></span>
<script>		
function Validpass() 
{
    var val = document.getElementById('password').value;

    if (!val.match(/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-])/)) 
    {
        document.getElementById('msg9').innerHTML="Upper case, Lower case, Special character and Numeric number are required in Password filed";
		
		     document.getElementById('password').value = "";
        return false;
    }
document.getElementById('msg9').innerHTML=" ";
    return true;
}
</script>


					<div class="form-wrapper">
						<input type="password" placeholder="Confirm Password" id="cpassword" name="cpassword" class="form-control" required onchange="Validcpass();">
						<i class="zmdi zmdi-lock"></i>
					</div>

          <span id="msg10" style="color:red;"></span>
<script>
function Validcpass()
{
var pas1=document.getElementById("cpassword");
							  var pas2=document.getElementById("cpassword");
							
							  if(pas1.value=="")
	{
		document.getElementById('msg10').innerHTML="Password can't be null!!";
		pas1.focus();
		return false;
	}
	if(pas2.value=="")
	{
		document.getElementById('msg10').innerHTML="Please confirm password!!";
		pass2.focus();
		return false;
	}
	if(pas1.value!=pas2.value)
	{
		document.getElementById('msg10').innerHTML="Passwords does not match!!";
		pas1.focus();
		return false;
	}
     document.getElementById('msg10').innerHTML=" "; 
	return true;
}
</script>

<button type="submit" name="submit" id="signup">Register<i class="zmdi zmdi-arrow-right"></i> </button>
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp

<div>
<a href="index.php">Home<i class="zmdi zmdi-arrow-right"></i></a>
&nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp
&nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  &nbsp &nbsp &nbsp &nbsp  
<a href="log.php">Login<i class="zmdi zmdi-arrow-right"></i>
</div>         
</form>
</div>
</div>
</body>
</html>