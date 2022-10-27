<?php
include "nav.php";
		$con=mysqli_connect("localhost","root","","project");
		if(!$con)
			echo "Connection failed".mysqli_connect_error();
		else{
				echo "Connection Done".mysqli_connect_error();
		}
		session_start();
		if(isset($_SESSION["UserName"]))
		{
			$UserName=$_SESSION["UserName"];
		}
		$sql
$id = $_GET['id']; // $id is now defined

// or assuming your column is indeed an int
// $id = (int)$_GET['id'];

//echo "DELETE FROM user_details WHERE srno='".$id."'";
$sql="DELETE FROM user_details WHERE srno='".$id."'";
$result = mysqli_query($con,$sql);
if($result)
								{
									echo "User Deleted Successfully";
									//echo("<script>location.href = 'manageuser.php';</script>");
								}
								else
								{
									echo $result;
								}
mysqli_close($con);
header("Location: manageexpert.php");

?> 	