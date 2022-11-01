
			<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
	<link rel="stylesheet" href="../assets/css/style.css">
    <title>admin</title>
</head>
<body>
<?php
  session_start();
  include "_user_navbar.php";
  $con=mysqli_connect("localhost","root","","project");
  if(!$con)
    echo "Connection failed".mysqli_connect_error();
  else{}
  if(isset($_SESSION["UserName"]))
  {
    $UserName=$_SESSION["UserName"];
  }
  $sql	?>
    <div id="courses">
		<section class="container"> 
		<div class="row">
				<div class="col-md-4">
					<div class="featured-box">
					<a href="course.php">
						<i class="fa fa-cogs fa-2x"></i>
						<div class="text">
							<h3>Courses</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="que.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Ask Question to Expert</h3>
							
						</div>
					</a>
					</div>
				</div>
				<div class="col-md-4">
					<div class="featured-box">
					<a href="manage.php">
						<i class="fa fa-leaf fa-2x"></i>
						<div class="text">
							<h3>Manage Profile</h3>
							
						</div>
					</a>
					</div>
				</div>
			</div>
		</section>
	</div>
	</div>
	
</body>
</html>
