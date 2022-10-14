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
if (mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if ($row['email'] === $email && $row['password'] === md5($pass)) {
        $_SESSION['id'] = $row['srno'];
        $_SESSION['fname'] = $row['fname'];
        $_SESSION['lname'] = $row['lname'];
        $_SESSION['email'] = $row['email'];
        $_SESSION['usertype'] = $row['user'];
        if ($row['user'] === 'student') {
            header("Location: ../main/student.php");
            exit();
        } else if ($row['user'] === 'alumni') {
            header("Location: ../main/alumni.php");
            exit();
        } else if ($row['user'] === 'admin') {
            header("Location: ../main/admin.php");
            exit();
        }
    }
}