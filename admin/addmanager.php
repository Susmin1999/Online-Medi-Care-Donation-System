<?php
session_start();
include('db.php');
?>


<link href="managestyle.css" media="screen" rel="stylesheet" type="text/css" />
<form action="savemanager.php" method="post">
<center><h2><i class="icon-plus-sign icon-large"></i> Add Manager</h2></center>

<div id="ac" style="margin-left: 559px;margin-top:20px">
<span>Name : </span><input type="text" style="width:265px; height:30px;" name="name" id="name" required onchange="Validate();"/>
<span id="msg1" style="color:red;"></span>
<script>		
function Validate() 
{
    var val = document.getElementById('name').value;

    if (!val.match(/^[A-Z][A-Za-z]{3,}$/)) 
    {
        document.getElementById('msg1').innerHTML="Start with a Capital letter & Only alphabets";
		            document.getElementById('name').value = "";
        return false;
    }
document.getElementById('msg1').innerHTML=" ";
    return true;
}
</script>
<br>

<span>Age : </span><input type="text" style="width:265px; height:30px;" name="age" id="age" required onchange="Validateage();"/>
<span id="msg2" style="color:red;"></span>
<script>		
function Validateage() 
{
    var val = document.getElementById('age').value;
    
    if(!val.match(val)||val<1||val>100)
    {
        document.getElementById('msg2').innerHTML="Only Numbers are allowed and must between 1 and 100!!";
		            document.getElementById('age').value = "";
        return false;
    }
    document.getElementById('msg2').innerHTML=" ";
    return true;


}
</script>
<br>

<span>Address : </span><input type="text" style="width:265px; height:30px;" name="address" id="address" required onchange="Validname();"/>
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
<br>

<span>Mobile : </span><input type="text" style="width:265px; height:30px;" name="mobile" id="mobile" required onchange="Validphone();"/>
<span id="msg4" style="color:red;"></span>
<script>
function Validphone() 
{
    var val = document.getElementById('mobile').value;

    if (!val.match(/^[789][0-9]{9}$/))
    {
        document.getElementById('msg4').innerHTML="Only Numbers are allowed and must contain 10 number";
	
		
		            document.getElementById('mobile').value = "";
        return false;
    }
document.getElementById('msg4').innerHTML=" ";
    return true;
}
</script>
<br>

<span>Email : </span><input type="text" style="width:265px; height:30px;" name="email" id="email" required onchange="Validemail();"/>
<span id="msg5" style="color:red;"></span>
<script>		
function Validemail() 
{
    var val = document.getElementById('email').value;

    if (!val.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) 
    {
        document.getElementById('msg5').innerHTML="Enter a Valid Email";
		
		     document.getElementById('email').value = "";
        return false;
    }
document.getElementById('msg5').innerHTML=" ";
    return true;
}
</script>
<br>

<span class="select-dropdown">Category : </span>
<select name="category" id="category">
   <option selected>childrens</option>
   <option selected>adults</option>
   <option selected>elders</option>
</select>
<br>




<span>Id Proof : </span><input type="file" style="width:265px; height:30px;" name="idproof" id="id proof" required onchange="Validid();"/>
<span id="msg6" style="color:red;"></span>
<script>
        function Validid() {
            var fileInput =
                document.getElementById('id proof');
             
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
<br>

<span>Experience : </span><input type="text" style="width:265px; height:30px;" name="experience" /><br>
<span>Qualification : </span><input type="text" style="width:265px; height:30px;" name="qualification" /><br>

<span>Password : </span><input type="password" style="width:265px; height:30px;" name="password" id="password" required onchange="Validpass();"/>
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
<br>
<div style="margin-right:10px;">
<button class="btn btn-success btn-block btn-large" style="width: 369px;height: 33px; margin-top: 8px;"><i class="icon icon-save icon-large"></i> Add</button><br>
<button class="btn btn-success btn-block btn-large" style="width: 369px;height: 33px; margin-top: 8px; text-color: black;"><i class="icon icon-save icon-large"><a href="dashboard.php"></i> Back To Home</button>
</div>
</div>
</form>