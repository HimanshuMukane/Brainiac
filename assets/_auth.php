<?php
session_start();
require "_connection.php";
function validate($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$email = validate($_POST['emailtxt']);
$pass = validate($_POST['passtxt']);
$encpass = md5($pass);
$sql = "SELECT * FROM `user_details` WHERE `email`= '$email' AND `password` = '$encpass';";
$result = mysqli_query($con, $sql);
			$count = mysqli_num_rows($result);
			if($count==1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['password'] === md5($pass)) {
        $_SESSION['id'] = $row['srno'];
        $_SESSION['fname'] = $row['fname'];
				$_SESSION["UserName"]=$_POST['id'];
                $_SESSION['lname'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['usertype'] = $row['user'];
        if ($row['user'] === 'user') {
            header("Location: ../user/index.php");
            exit();
        } else if ($row['user'] === 'paiduser') {
            header("Location: ../paiduser/index.php");
            exit();
        } else if ($row['user'] === 'admin') {
            header("Location: ../admin/index.php");
            exit();
        } else if ($row['user'] === 'expert') {
            header("Location: ../expert/index.php");
            exit();
        }
    }
}