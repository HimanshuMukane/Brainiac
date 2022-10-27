<html>
<head>
	<meta charset="utf-8">
	<title>eLearning - Free Educational Responsive Web Template </title>
	<link rel="favicon" href="../assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">
	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="../assets/css/da-slider.css" />
	<link rel="stylesheet" href="../assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>
<body>
	<?php
		include "nav.php";
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["UserName"]))
		{
			$UserName=$_SESSION["UserName"];
		}
		$sql	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Manage Expert</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-sm-8">
				<form method="POST" action="">
				<table class="table table-bordered">
					<tr>
						<th>User ID</th>
						<th>First Name</th>
						<th>Last Name</th>
						<th>Email ID</th>
						<th>Gender</th>
						<th>User Name</th>
						
					</tr>
					<?php
						$sql = "SELECT srno,fname,lname,email,Gender,UserName FROM user_details WHERE user='expert'";
						$result = mysqli_query($con,$sql);
						while($row = mysqli_fetch_array($result))
						{
							$id = $row[0];
							$fname = $row[1];
							$lname = $row[2];
							$email = $row[3];
							$gender = $row[4];
							$UserName = $row[5];
							echo '<tr>';
							echo '<td>'.$id.'</td>';
							echo '<td>'.$fname.'</td>';
							echo '<td>'.$lname.'</td>';
							echo '<td>'.$email.'</td>';
							echo '<td>'.$gender.'</td>';
							echo '<td>'.$UserName.'</td>';
					
							echo "<td><a class='btn' href=\"deleteexpert.php?id=".$row[0]."\">Delete</a></td>";
							echo '</tr>';
						}
					?>
				</table>
				</form>
			</div>
		</div>
	</div>
	<?php
		include "footer.php";
	?>
</body>
</html>