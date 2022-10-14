<?php
    session_start();
    if(isset($_SESSION['id']) && isset($_SESSION['fname']) && $_SESSION['usertype']==='student'){
        $fullname = $_SESSION['fname'] . " " . $_SESSION['lname'];
        include "../assets/_connection.php";
        $srno = $_SESSION['id'];
        $sql = "SELECT * FROM `user_details` WHERE `srno`= '$srno';";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_assoc($result);
        $imgurl = $row['profilepic_url'];
?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Nav</title>

    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css'>
    <link rel='stylesheet' href='https://pro.fontawesome.com/releases/v6.0.0-beta3/css/all.css'>
    <link rel="stylesheet" href="../css/_nav.css">
</head>

<body translate="no">
    <div class="main-nav">
        <div class="logo"></div>
        <ul class="nav-links">
            <li><a href="index.php">Home</a></li>
            <li><a href="events.php">About us</a></li>
            <li style="background-color: #2F65B9; color:#fff; padding: 5px 20px;"><a href="logout.php">GO PRO</a></li>
        </ul>
        <div class="burger">
            <div class="line line1"></div>
            <div class="line line2"></div>
            <div class="line line3"></div>
        </div>
    </div>
    <nav class="sidebar close">

        <header>
            <div class="image-text">
                <img src="../imgs/logo.jpg" alt="">
                <div class="text logo-text">
                    <span class="name">Brainiac</span>
                    <span class="profession"></span>
                </div>
            </div>
        </header><br>
        <header>
            <div class="image-text">
                <img id="imghide" src="../profilepic/<?php echo $imgurl?>" alt="myimg">
                <div class="text logo-text">
                    <span class="name"><?php echo $fullname; ?></span>
                    <span class="profession"><?php echo $_SESSION['email']; ?></span>
                </div>
            </div>
           <span  class='toggle' > <i class='bx bx-chevron-right '></i></span>
        </header>
        <div class="menu-bar">
            <div class="menu">
                <ul class="menu-links">
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-home-alt icon'></i>
                            <span class="text nav-text">Dashboard</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-bell icon'></i>
                            <span class="text nav-text">Courses</span>
                        </a>
                    </li>
                    <li class="nav-link">
                        <a href="#">
                            <i class='bx bx-pie-chart-alt icon'></i>
                            <span class="text nav-text">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="bottom-content">
                <li class="">
                    <a href="logout.php">
                        <i class='bx bx-log-out icon'></i>
                        <span class="text nav-text">Logout</span>
                    </a>
                </li>
                <li class="mode">
                    <div class="sun-moon">
                        <i class='bx bx-moon icon moon'></i>
                        <i class='bx bx-sun icon sun'></i>
                    </div>
                    <span class="mode-text text">Dark mode</span>
                    <div class="toggle-switch">
                        <span class="switch"></span>
                    </div>
                </li>
            </div>
        </div>
    </nav>
    <script>
        const body = document.querySelector("body"),
            sidebar = body.querySelector("nav"),
            toggle = body.querySelector(".toggle"),
            modeSwitch = body.querySelector(".toggle-switch"),
            modeText = body.querySelector(".mode-text");
        toggle.addEventListener("click", () => {
            sidebar.classList.toggle("close");
        });
        modeSwitch.addEventListener("click", () => {
            body.classList.toggle("dark");
            if (body.classList.contains("dark")) {
                modeText.innerText = "Light mode";
            } else {
                modeText.innerText = "Dark mode";
            }
        });
        document.addEventListener('DOMContentLoaded', nav)
        function nav() {
            const burger = document.querySelector('.burger');
            const nav = document.querySelector('.main-nav');
            burger.addEventListener('click', () => {
                nav.classList.toggle('show')
            })
        }
    </script>

</body>

</html>

<?php
}
else{
    header("Location : logout.php");
    exit();
}
?>