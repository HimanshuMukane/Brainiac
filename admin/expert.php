<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="UTF-8">
  <title> Form</title>

  <style>
    
:root {
    --body-color: #f6f5f5;
    --sidebar-color: var(--body-color);
    --primary-color: #2F65B9;
    --primary-color-light: #f6f5ff;
    --toggle-color: #ddd;
    --text-color: #0c0c0c;
    --tran-03: all 0.2s ease;
    --tran-03: all 0.3s ease;
    --tran-04: all 0.3s ease;
    --tran-05: all 0.3s ease;
}

    body {
      background-color:  var(--body-color);
      align-items: center;
      margin: 0px;
    }

    .gender_form {
      margin-left: -80px;
    }

    .gender input[type='radio'] {
      display: none;
      color: #1965D2;
      background-color: #1965D2;
    }

    .gender input[type=radio]:checked+label:after {
      border-radius: 11px;
      content: " ";
      display: block;
      color: #1965D2;
      background: #1965D2;
    }

    .button {
      border: 0;
      /* display: block; */
      width: 130px;
      height: 40px;
      margin: 0 auto 30px;
      border-radius: 200px;
    }

    .button2 {
      background-color: #1965D2;
      color: white;
      align-items: center;
    }

    .button3 {
      background-color: #1965D2;
      color: white;
    }

    .shift {
      /* text-align: center; */
      padding-top: 5px;
      padding-right: 3px;
      padding-bottom: 5px;
      padding-left: 280px;
    }

    .form {
      width: 500px;
      margin: auto;
      display: grid;
      grid-template-columns: 150px 300px;
      grid-row-gap: 20px;
    }

    input {
      height: 30px;
      box-shadow: none;
      border-radius: 100px;
      padding-left: 15px;
      box-sizing: border-box;
    }

    h1 {
      color: #407DD9;
      align-items: center;
    } 
.nav-links a {
    color: var(--body-color);
    font-size: 1rem !important;
    text-decoration: none;
}
  </style>
</head>

<body translate="no">
  <?php
    session_start();
    include "_admin_navbar.php";
    $con=mysqli_connect("localhost","root","","project");
    if(!$con)
      echo "Connection failed".mysqli_connect_error();
    else{}
    if(isset($_SESSION["UserName"]))
    {
      $UserName=$_SESSION["UserName"];
    }
    $sql	?>
  <div class="shift">

	<form method="POST" action="#">

      <!-- Form Name -->
      <h1 style="text-align:center"><b>Registration of Expert</b></h1><br>
      <div class="form">
        <!-- Text input-->

        <label>First Name</label>

        <input name="fname" placeholder="First Name" type="text">

        <!-- Text input-->
        <label>Last Name</label>
        <input name="lname" placeholder="Last Name" type="text">

        <!-- Text input-->
      </div>
      <div class="gender_form form">
        <div class="gender">
          <label>Gender</label>
        </div>
        <div style="text-align: left;">

          <input name="gender" class="Gender" type="radio">
          <label for="Male">Male</label><br>
          <input name="gender" class="Gender" type="radio">
          <label for="Female">Female</label><br>
          <input name="gender" class="Gender" type="radio">
          <label for="Other">Other</label><br>
        </div>
      </div>
      <div class="form">
        <label>Username</label>
        <input name="UserName" placeholder="Username" type="text">

        <!-- Text input-->
        <label>E-Mail</label>
        <input name="email" placeholder="E-Mail Address" type="text">
        <!-- Text input-->

        <label>Password</label>
        <input name="password" placeholder="Password" type="password">

      </div>

      <!-- Text input-->
      <!--     
<div>
  <label >Contact No.</label>  
    <div>
    <div>
  <input name="contact_no" placeholder="(639)" type="text">
    </div>
  </div>
</div>
-->

      <!-- Button -->
<br><div style="text-align: center;">
      <button class="button button2" name="btn">REGISTER</button>
      <button class="button button3">RESET</button>
  </div>
</div>

  </form>
  </div>
  </div><!-- /.container -->

  </div>
  <?php
		if(isset($_POST['btn']))
		{
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$gender = $_POST['gender'];
		$email = $_POST['email'];
		$UserName = $_POST['UserName'];
		$password = $_POST['password'];
    $user = 'expert';
		$sql = "INSERT INTO user_details(fname,lname,gender,email,UserName,Password,user) VALUES('$fname','$lname','$gender','$email','$UserName','$password','expert')";
		$result = mysqli_query($con,$sql);
		if($result)
		{
			echo "<div class='alert alert-success' role='alert'>Successfull</div>";
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Something went wrong.Please try again later !</div>";
		}
		}
	?>
</body>

</html>