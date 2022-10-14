<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <script src="https://kit.fontawesome.com/f462297f0f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../css/login.css">
</head>

<body translate="no">
    <div class="box-form">
        <div class="left">
            <div class="overlay">
                <h1>Hello World.</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et est sed felis aliquet sollicitudin</p>
            </div>
        </div>


        <form class="right" action="../assets/_auth.php" method="POST">
            <h5>Login</h5>
            <p>Don't have an account? <a href="signup.php">Create Your Account</a> it takes less than a minute</p>
            <div class="inputs">
                <input type="text" placeholder="Email" name="emailtxt" required>
                <br>
                <input type="password" placeholder="password" name="passtxt" required>
            </div>

            <br><br>

            <div class="remember-me--forget-password">
                <label>
                    <input type="checkbox" name="item" checked />
                    <span class="text-checkbox">Remember me</span>
                </label>
                <a href="#">forget password?</a>
            </div>

            <br>
            <input type="submit" value="Login">
        </form>

    </div>
</body>

</html>