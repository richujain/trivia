<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Trivia Login Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Animated Login Form template Responsive, Login form web template,Flat Pricing tables,Flat Drop downs  Sign up Web Templates, Flat Web Templates, Login sign up Responsive web template, SmartPhone Compatible web template, free Web Designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href='css/bootstrap.min.css' media='all' rel='stylesheet'>
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/animate.min.css"> 
<!-- //Custom Theme files -->
<!-- web font -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'><!--web font-->
<!-- //web font --> 
</head>
<?php
	session_start();
	if (! empty($_SESSION['logged_in']))
	{
		header("Location: home/index.php"); /* Redirect browser */
    	exit();
	}
?>
<body>
	<!-- main-agileits -->
	<div class="agileits">
		<h1>Trivia Login</h1>
		<div class="w3-agileits-info">
			<form class='form animate-form' id='form1' action="login.php" method="post">
				<p class="w3agileits">Login Here</p>
				<div class='form-group has-feedback w3ls'>
					<label class='control-label sr-only' for='username'>Username</label> 
					<input class='form-control' id='username' name='username' placeholder='Username' type='text'>
					<span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='form-group has-feedback agile'>
					<label class='control-label sr-only' for='password'>Password</label> 
					<input class='form-control w3l' id='password' name='password' placeholder='Password' type='password'><span class='glyphicon glyphicon-ok form-control-feedback'></span>
				</div>
				<div class='submit w3-agile'>
					<input class='btn btn-lg' type='submit' value='SUBMIT'>
				</div>
				<div style="padding-top:20px">
					<a href="register.php">Not Registered? Click Here!</a>
				</div>
			</form>
		</div>	
	</div>	
	<!-- //agileits -->
	<!-- copyright -->
	<!--
	<div class="w3-agile-copyright">
		<p class="agileinfo"> © 2017 Animated Login Form . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
	</div>
-->
	<!-- //copyright -->  
	<!-- js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<script src='js/jquery.validate.min.js'></script>
	<script src='js/formAnimation.js'></script>
	<script src='js/shake.js'></script> 
	<!-- //js -->
</body>
</html>