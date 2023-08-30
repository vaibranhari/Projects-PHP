<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>register</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/css/dashboardcss/dashregister.css">	
</head>
<body>
<p class="head" style="margin-top: 15px;">REGISTRATION FORM</p>
<form id="registrationForm" action="" method="post" autocomplete="off">
<div class="in">
<div class="container">
<div class="box1">
<p class="font">Register</p>
<p class="font2"><a class="font21" href="<?php echo base_url().'dashlog'; ?>">login</a></p>
<p class="wel">Welcome to the website!</p>
<p class="dis">please enter your details in the below box</p>
<div class="in">
<input type="text" name="username" placeholder="Enter your email or user name" class="email" id="email" required style="color: white;"><br>
<p class="email_validate" id="msg"></p>
<input type="password" name="password" placeholder="Enter your password" class="pass" id="password" required style="color: white;"><br>
<p class="password_validate" id="password-error"></p>
<input type="password" name="" placeholder="Re-enter your password" class="re-pass" id="repeat-password" required style="color: white;"><br>
<p class="repassword_validate" id="repeat-password-error"></p>
</div>
<div class="sub">
<input type="submit" name="" value="Submit" class="submit"><br><br>
</div>
<p class="register_way" style="display: flex; justify-content:center;">you can also signin using&nbsp;&nbsp; <img src="<?php echo base_url();?>image/googlelogo.png" alt="google" class="google_logo"> &nbsp; <img src="<?php echo base_url();?>image/facebooklogo.png" alt="facebook" class="facebook_logo"></p>
</div>
<div class="box2" >
<img src="<?php echo base_url();?>image/mount.jpg" alt="mountai.jpg" class="grid_image">
</div>
</div>
</div>
</form>
<!-- ajax cdn -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<!-- jquery cdn -->
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
<script>
//jquery and ajax statements
$(document).ready(function() {

// check the username or email is already exits or not
$("#email").keyup(function() 
{
var email = $('#email').val();
if(email!="")
{
jQuery.ajax({
type: "POST",
url: "<?php echo base_url('Dashboard/checkUser'); ?>",
dataType: 'html',
data: {username: email},
success: function(res) 
{
if(res==1)
{
$("#msg").css({"color":"red",});
$("#msg").html("user name is already exists");
$('#submitButton').prop('disabled', true);
}
else
{
$("#msg").css({"color":"green",});
$("#msg").html("");
$('#submitButton').prop('disabled', false);
}
},
error:function()
{
alert('some error');	
}
});
}
});

//password validation
$("#password").on("keyup", function() {
var password = $("#password").val();
var containsAlphabet = /[a-zA-Z]/.test(password);
var containsNumber = /\d/.test(password);
var containsSpecialChar = /\W/.test(password);
var minLength = password.length >= 8;
var passwordRegex = /^(?=.*[a-zA-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/.test(password);
if(password !=""){
if (!containsAlphabet) {
$("#password-error").text("contain at least one alphabet"); 
}
if(!containsNumber){
$("#password-error").text("contain at least one number");
} 
if(!containsSpecialChar){
$("#password-error").text("contain at least one special character");
}
if(!minLength){
$("#password-error").text("greater than 8");
}
if (containsAlphabet && containsNumber && containsSpecialChar && minLength) {
$("#password-error").text("");
}
if(!containsAlphabet && !containsNumber && !containsSpecialChar && !minLength)
{
$("#password-error").text("");
}
$('#submitButton').prop('disabled', true);
}else{
    $('#submitButton').prop('disabled', false);
}

});

//reapeat password validation
$("#repeat-password").on("keyup", function() {
var password = $("#password").val();
var repeatPassword = $("#repeat-password").val();
if (repeatPassword !== password ) {
$("#repeat-password-error").text("Password doesn't match.");
$('#submitButton').prop('disabled', true);
} else {
$("#repeat-password-error").text("");
$('#submitButton').prop('disabled', false);
}
});


});
</script>
</body>
</html>