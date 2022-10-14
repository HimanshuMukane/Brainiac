<?php
    require "_connection.php";
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $newemail = $_POST['newemail'];
        $mobile = $_POST['mobile'];
        $password = $_POST['newpass'];
        $newcnfpass = $_POST['newcnfpass'];
        
        $sql = "SELECT * FROM `user_details` WHERE `email`= '$newemail'";
        $result = mysqli_query($con,$sql);

        if($password != $newcnfpass){
            header("Location: ../main/signup.php");
        }else if(mysqli_num_rows($result) != 0){
            header("Location: ../main/signup.php");
        }
        else{
            $sql = "SELECT * FROM `user_details`";
            $result = mysqli_query($con,$sql);
            $srno = mysqli_num_rows($result)+1;
            $new_img_name = $fname.'-'.$lname.$srno.'.'.'png';
            $imgname = 'avatar.png';
            copy('../imgs/avatar.png',"../profilepic/$new_img_name");
            $secure_password = md5($newcnfpass);
            $sql = "INSERT INTO `user_details`(`fname`,`lname`,`mobile`,`email` ,`password`,`profilepic_url`) VALUES('$fname','$lname','$mobile', '$newemail', '$secure_password','$new_img_name');";
            $result = mysqli_query($con,$sql);
            header("Location: ../main/");
        }
    }