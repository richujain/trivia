<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Trivia Welcome Page</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet">
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head>
<script>
	function technology(){
		window.location.href = "technology_quiz.php";
	}
	function science(){
		window.location.href = "science_quiz.php";
	}
</script>
<?php
	function logout() {
		session_start();
		session_destroy();
		header("Location: ../index.php");
		exit();
  }

  if (isset($_GET['logout'])) {
    logout();
  }
  ?>
<?php
session_start();
$username = $_SESSION["username"];

?>
<body>
   <div class="page-container">
   <!--/content-inner-->
             <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
								<h1><a href="index.php"><b>Trivia</b></a></h1>
							</div>
							<div class="logo-w3-agile">
										<h1><a href="about.php">About us</a></h1>
									</div>
									<div class="logo-w3-agile">
												<h1><a href="learnmore.php">Learn More</a></h1>
											</div>


						<div class="profile_details w3l" style="float: right">
								<ul>
									<li class="dropdown profile_details_drop">
										<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
											<div class="profile_img">
												<span class="prfil-img"><img src="images/user.png" alt=""> </span>
												<div class="user-name">
													<p><?php echo "Hello " . $username ?></p>
													<span></span>
												</div>
												<i class="fa fa-angle-down"></i>
												<i class="fa fa-angle-up"></i>
												<div class="clearfix"></div>
											</div>
										</a>
										<ul class="dropdown-menu drp-mnu">
											<li> <a href="result.php"><i class="fa fa-user"></i> Results</a> </li>
											<li> <a href="index.php?logout=true"><i class="fa fa-sign-out"></i> Logout</a> </li>
										</ul>
									</li>
								</ul>
							</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<center>
				<iframe width="560" height="315" src="https://www.youtube.com/embed/rmPUgg5DZqU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


<iframe width="560" height="315" src="https://www.youtube.com/embed/xI5y_kqNKkk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/4AtvWU1yBas" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
<iframe width="560" height="315" src="https://www.youtube.com/embed/vT5Rc7zwbvQ" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

</center>

					<div class="clearfix"></div>
				</div>




<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>



<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->
<!-- morris JavaScript -->
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>
<footer>

<img src="footer1.png" alt="" >

</footer>
</body>
</html>
