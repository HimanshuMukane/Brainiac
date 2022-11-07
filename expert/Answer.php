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

    textarea {
      height: 300px;
      box-shadow: none;
      border-radius: 10px;
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
    include "_expert_navbar.php";
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
    <?php
    $sql = "SELECT que.QueID,que.UserID,que.Description FROM que LEFT JOIN ans ON ans.QueID=que.QueID WHERE ans.QueID IS NULL LIMIT 1";
    $result1 = mysqli_query($con,$sql);
    while($row = mysqli_fetch_array($result1))
    {
      $qid = $row[0];
      $id = $row[1];
      $que= $row[2];?>
    <form action=" " method="post">

      <!-- Form Name -->
      <h1 style="text-align:center"><b>Answer Doubts</b></h1><br>
      <div class="form">
        <!-- Text input-->
        <label>Question</label>
        <p>My Question is</p>
        <!-- Text input-->
        <label>Answer</label>
        <textarea name="email" placeholder="Your Answer" type="text"></textarea>
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
      <button class="button button2">RESET</button>
  </div>
</div>

  </form>
  <?php 
	}
	 
	?>
	<?php
	if(!empty($_POST['message']))
	{
		if(isset($_POST['btnsubmit']))
		{
			$sql = "SELECT srno FROM user_details WHERE UserName='$UserName'";
			$result1 = mysqli_query($con,$sql);
			while($row = mysqli_fetch_array($result1))
			{
				$eid = $row[0];
				//echo $eid;
			}
			$answer=$_POST['message'];
			$sql = "INSERT INTO ans(ExpertID,UserID,QueID,Question,Answer) VALUES($eid,$id,$qid,'$que','$answer')";
			$result = mysqli_query($con,$sql);
			if($result)
			{

              echo "<div class='alert alert-success' role='alert'>Answer sent to user</div>";
		    }
			else
			{
				echo "<div class='alert alert-danger' role='alert'>Answer already sent to user</div>";

			}
		}
	}
		
	?>
  </div>
  </div><!-- /.container -->

  </div>
</body>

</html>