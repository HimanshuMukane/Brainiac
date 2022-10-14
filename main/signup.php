<?php require "../assets/_connection.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SignUp Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f462297f0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">

</head>

<body translate="no">
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Hello World.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et est sed felis aliquet
                    sollicitudin</p>
            </div>
        </div>


        <form class="right" action="../assets/_register.php" method="POST">
            <h5>Sign Up</h5>
            <div class="inputs">
                <div class="name">
                    <input type="text" placeholder="First Name" style="display:inline-block ; width: 47%;" name="fname" required>
                    &nbsp;&nbsp;&nbsp;
                    <input type="text" placeholder="Last Name" style="display:inline-block ; width: 47%;" name="lname" required>
                </div>
                <input type="email" placeholder="Email" name="newemail" required>
                <br>
                <input type="tel" placeholder="Contact" name="mobile" required>
                <input type="password" placeholder="Password" name="newpass" required>
                <input type="password" placeholder="Confirm Password" name="newcnfpass" required>
                <br>
            </div><br>
            <div class="remember-me--forget-password">
                <a href="../main/">Already have an accound?</a>
            </div>
            <br>
            <input type="submit" value="Submit">
        </form>

    </div>
</body>

</html>