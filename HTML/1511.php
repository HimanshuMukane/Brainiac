<!DOCTYPE HTML>
<html lang="">

<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta circle="viewport" content="wclassth=device-wclassth, initial-scale=1.0">
    <link rel="mask-icon" type="" href="images/tecpasalogo.png" color="#111" />
    <link rel="shortcut icon" type="image/x-icon" href="images/tecpasalogo.png" />
    <link rel='stylesheet' href='css/css.css'>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <title>TECPASA Python</title>
    <style>
        #flow1 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 450, 50);
            background-color: #1965D2;
            border-radius: 50px;
            z-index: 2;
        }
        
        #flow2 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 540, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        
        #flow3 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 630, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        
        #flow4 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 720, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        
        #flow5 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 810, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        
        #flow6 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 900, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        
        #flow7 {
            width: 55px;
            height: 12px;
            position: fixed;
            transform-origin: 50% 50%;
            transform: matrix(1, 0, 0, 1, 990, 50);
            background-color: #b8beff;
            border-radius: 50px 50px 50px 50px;
            z-index: 2;
        }
        #voiceselection {
    width: 270px;
    height: 50px;
    transform-origin: 50% 50%;
    background-color: #1965D2;
    border-radius: 5px 5px 5px 5px;
    z-index: 2;
    font-family: Poppins;
    font-size: 20px;
    color: #fff;
    font-weight: 700;
    text-align: center;
    padding-top: 10px;
        }

        .btn2 {
    width: 50px;
    height: 50px;
    transform-origin: 50% 50%;
    background-color: #1965D2;
    border-radius: 5px 5px 5px 5px;
    z-index: 2;
    font-family: Poppins;
    font-size: 20px;
    color: #fff;
    font-weight: 700;
    text-align: center;
    padding-top: 10px;
        }
    </style>
</head>

<body>
    <div class="header">
        <a href="../user/course.php">
        <div class="close-container">
            <div class="leftright"></div>
            <div class="rightleft"></div>
        </div>
    </a>
    </div>
    <div  id="text1" class="hero-element">
        <h1>Introduction </h1>
        <textarea id="text" readonly disabled>Want to build a slick website? Develop a video game? Or maybe create an artificial intelligence? Python’s got you covered, and then some. Python is a high-level programming language, with a ton of applications. It’s seriously
        flexible and accessible, which makes it popular with some of the world's biggest (and coolest) organizations–think Google, NASA, Disney...*whispers* even the CIA. In this course, we’ll cover the basic concepts of Python, as well as build real-life
        projects and solve different coding challenges!</textarea>
        <select id="voiceselection">
            <option value="UK English Female">UK English Female</option>
            <option value="UK English Male">UK English Male</option>
            <option value="US English Female">US English Female</option>
            <option value="US English Male">US English Male</option>
          </select>
          <p></p>    
          <p>
            <button class="btn2 btn--default" id="playbutton">Play</button>
            <button class="btn2 btn--error" id="stopbutton">Stop</button>
          </p>
        </div>
    </div>
    <div id="footer" class="hero-element"></div>
    <a href="1511.php">
        <div id="prevbutton" class="hero-element">Previous
        </div>
    </a>
    <a href="1512.php">
        <div id="button" class="hero-element">Continue
        </div>
    </a>
    <a href="1511.php">
        <div id="flow1" class="hero-element">
        </div>
    </a>
    <a href="1512.php">
        <div id="flow2" class="hero-element">
        </div>
    </a>
    <a href="1513.php">
        <div id="flow3" class="hero-element">
        </div>
    </a>
    <a href="1514.php">
        <div id="flow4" class="hero-element">
        </div>
    </a>
    <a href="1514.php">
        <div id="flow5" class="hero-element">
        </div>
    </a>
    <a href="1514.php">
        <div id="flow6" class="hero-element">
        </div>
    </a>
    <a href="1514.php">
        <div id="flow7" class="hero-element">
        </div>
    </a>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

    <script src='//code.responsivevoice.org/responsivevoice.js'></script>
        <script id="rendered-js" >
  playbutton.onclick = function () {
    responsiveVoice.cancel();
    responsiveVoice.speak(document.getElementById('text').value, document.getElementById('voiceselection').value);
  };
  stopbutton.onclick = function () {
    responsiveVoice.cancel();
  };

      </script>

</body>

</html>