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

    <form action=" " method="post">

      <!-- Form Name -->
      <h1 style="text-align:center"><b>Add Admin</b></h1><br>
     
      <div class="form">
        <label>Username</label>
        <input  name="UserName" placeholder="Username" type="text">

        <label>Password</label>
        <input name="pass" placeholder="Password" type="password">

       
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
		$UserName = $_POST['UserName'];
		$password = $_POST['pass'];
		$user = 'admin';
		$sql = "INSERT INTO user_details(UserName,Password,user) VALUES('$UserName','$password','admin')";
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