<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta name="author" content="webThemez.com">
	<title>Brainiac</title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" href="assets/css/style.css">
	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
  include "_user_navbar.php";
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
			echo "Connection failed".mysqli_connect_error();
		else{}
		session_start();
		if(isset($_SESSION["UserName"]))
		{
			$UserName=$_SESSION["UserName"];
		}
		$sql1 = "SELECT srno FROM user_details WHERE User='paiduser'";
		$result1 = mysqli_query($con,$sql1);
		while($row = mysqli_fetch_array($result1))
		{
			$id = $row[0];
		}
	?>

	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Ask Question</h1>
				</div>
			</div>
		</div>
	</header>
	<br>
	<div class="container">
				<div class="row">
					<div class="col-md-6">
			<form action="" method="POST">
					<input type="text" class="form-control" 
			placeholder="User Name" name="name" required
			data-validation-required-message="Please enter your User Name" value=""/>
					<textarea rows="10" cols="100" class="form-control" 
			placeholder="Your Question" name="message" required
			data-validation-required-message="Please enter your message" minlength="5" 
			data-validation-minlength-message="Min 5 characters" 
			maxlength="999" style="resize:none;margin-top:10px"></textarea>
			<br>
			<button type="submit" class="btn btn-primary pull-right" name="btnsubmit">Submit</button><br /><br /><br /><br />
			</form>
					</div>
				</div>
	</div>
	<?php
	if(!empty($_POST['name'])&&!empty($_POST['message']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$name = $_POST["name"]; 
            $msg = $_POST["message"];
			$sql = "SELECT srno FROM user_details WHERE User='paiduser'";
			$result1 = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result1))
			{
				$id = $row[0];
			}
			/*if($result1)
			{
				echo 'data get';
			}
			else
			{
				echo 'wrong';
			}*/
			$sql = "INSERT INTO que(UserID,UserName,Description) VALUES($id,'$name','$msg')";
			$result = mysqli_query($con,$sql);
			if($result)
			{
							echo "<div class='alert alert-success' role='alert'>Question sent to expert</div>";

			}
			else
			{
				echo '<div class="alert alert-danger" role="alert">Question could not sent</div>';
			}
		}
	}
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<h2><label>Previously Asked Questions<label></h2>
				<br>
				<?php
					$sql = "SELECT * FROM ans WHERE UserID='$id'";
					$result = mysqli_query($con,$sql);
					while($row = mysqli_fetch_array($result))
					{
						$que = $row["Question"];
						echo "<b>Question : </b>".$que."<br>";
						$ans = $row["Answer"];
						echo "<b>Answer : </b>".$ans."<br>";
					}
					if($result)
					{
						      
						//echo "Success";
					}
					else
					{
						echo "<b>No Previously Asked Questions</b>";
					}
				?>
			</div>
		</div>
	</div>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="../assets/js/custom.js"></script>
</body>
</html>