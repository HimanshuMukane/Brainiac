<?php 
	session_start();
	$srno = $_SESSION['id'];
	if (isset($_POST['submit']) && isset($_FILES['my_image'])) {
	include "_connection.php";
	$img_name = $_FILES['my_image']['name'];
	$img_size = $_FILES['my_image']['size'];
	$tmp_name = $_FILES['my_image']['tmp_name'];
	$error = $_FILES['my_image']['error'];
	if ($error === 0) {
		if ($img_size > 125000) {
			$em = "Sorry, your file is too large.";
		    header("Location: large.php?error=$em");
			exit();
		}else {
			$img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
			$img_ex_lc = strtolower($img_ex);
			$fname = $_SESSION['fname'];
			$lname = $_SESSION['lname'];
			$email = $_SESSION['email'];
			$allowed_exs = array("jpg", "jpeg", "png"); 

			if (in_array($img_ex_lc, $allowed_exs)) {
				$sql = "SELECT * FROM `user_details` WHERE `email`= '$email';";
				$result = mysqli_query($con, $sql);
				$row = mysqli_fetch_assoc($result);
				$new_img_name = $fname.'-'.$lname.$row['srno'].".".$img_ex_lc;
				$img_upload_path = '../profilepic/'.$new_img_name;
				move_uploaded_file($tmp_name, $img_upload_path);

				// Insert into Database
				$sql = "UPDATE `user_details` SET `profilepic_url`= '$new_img_name' WHERE `srno`='$srno'";
				mysqli_query($con, $sql);
				header("Location: ../main/dashboard.php");
				exit();
			}else {
				$em = "You can't upload files of this type";
		        header("Location: cantupload.php?error=$em");
				exit();
			}
		}
	}else {
		$em = "unknown error occurred!";
		header("Location: unknown.php?error=$em");
		exit();
	}

}else {
	header("Location: purna.php");
	exit();
}