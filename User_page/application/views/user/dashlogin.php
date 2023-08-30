<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>styles/css/dashboardcss/dashlog.css">	
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
<p class="head" style="margin-top: 45px;">LOGIN FORM</p>
<form action="" method="post" autocomplete="off">
	<div class="in">
		<div class="container">
		<div class="box2" >
			<img src="<?php echo base_url();?>image/jelly.jpg" alt="jelly.jpg" class="grid_image">
			</div>
			<div class="box1">
				<a href="<?php echo base_url().'UserRegister'; ?>">
				<p class="font">Register</p>
				</a>
				<p class="font2">Login</p>
				<p class="wel">Welcome back :)</p>
				<p class="dis">please re-enter your details in the below</p>
			<div class="in">
			<input type="text" name="username" placeholder="Enter your email or user name" class="email" required ><br>
			<input type="password" name="password" placeholder="Enter your password" class="pass" required ><br>
			</div>
			<div class="sub">
			<input type="submit" name="" value="Submit" class="submit"><br><br>
			</div>
			<p class="register_way" style="display: flex;">you can also signin using&nbsp; <img src="<?php echo base_url();?>image/googlelogo.png" alt="google" class="google_logo"> &nbsp; <img src="<?php echo base_url();?>image/facebooklogo.png" alt="facebook" class="facebook_logo"></p>
			</div>
			</div>
		
	   </div>
	
</form>
<script>
        $(document).ready(function() {
            <?php if ($this->session->flashdata('message')): ?>
                var message = "<?php echo $this->session->flashdata('message'); ?>";
                alert(message);
            <?php endif; ?>
        });
    </script>

</body>
</html>