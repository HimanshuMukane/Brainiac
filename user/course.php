<!DOCTYPE html>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/sololearncourse.css">

</head>

<body>
    <h1 style="text-align: center;">My Courses</h1>
    <div class="buttons">
        <button class="button all active">All</button>
        <button class="button white">3+</button>
        <button class="button grey">5-10</button>
        <button class="button blue">10-18</button>
        <button class="button yellow">18+</button>
        <button class="button red"></button>
    </div>
    <section class="coursegrid">
        <div class="coursebox white"><a href="../alphabet/1511.php"><img class="courselogo" src="imgs/alphabets.jpg">
            <p class="coursetext">ALPHABETS</p></a>
        </div>
        <div class="coursebox white"> <img class="courselogo" src="imgs/numbers.jpg">
            <p class="coursetext">NUMBERS</p></a>
        </div>
        <div class="coursebox white"><img class="courselogo" src="imgs/animals.jpg">
            <p class="coursetext">ANIMALS</p>
        </div>
        <div class="coursebox grey"><img class="courselogo" src="imgs/english.jpg">
            <p class="coursetext">ENGLISH</p>
        </div>
        <div class="coursebox grey"><img class="courselogo" src="imgs/history.jpg">
            <p class="coursetext">HISTORY</p>
        </div>
        <div class="coursebox grey"><img class="courselogo" src="imgs/geography.jpg">
            <p class="coursetext">GEOGRAPHY</p>
        </div>
        <div class="coursebox blue"><img class="courselogo" src="imgs/physics.jpg">
            <p class="coursetext">PHYSICS</p>
        </div>
        <div class="coursebox blue"><img class="courselogo" src="imgs/chemistry.jpg">
            <p class="coursetext">CHEMISTRY</p>
        </div>
        <div class="coursebox blue"><img class="courselogo" src="imgs/biology.jpg">
            <p class="coursetext">BIOLOGY</p>    
        </div>
        <div class="coursebox yellow"><a href="../HTML/1511.php"><img class="courselogo" src="imgs/html.jpg">
            <p class="coursetext">HTML</p></a>
        </div>
        <div class="coursebox yellow"><img class="courselogo" src="imgs/css.jpg">
            <p class="coursetext">CSS</p>
        </div>
        <div class="coursebox yellow"><a href="../python/subscription.php"><img class="courselogo" src="imgs/python.jpg">
            <p class="coursetext">PYTHON</p>
        </div>
        <div class="coursebox yellow"><img class="courselogo" src="imgs/javascript.jpg">
            <p class="coursetext">JAVASCRIPT</p>
        </div>
    </section>
    <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-1b93190375e9ccc259df3a57c1abc0e64599724ae30d7ea4c6877eb615f89387.js"></script>

    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js'></script>
    <script id="rendered-js">
        // Check active classes
        var checkClass = function() {
            if ($('.coursebox').hasClass('hide')) {
                $('.coursebox').removeClass('hide');
            }
        };

        // Category filters
        $('.all').click(function() {
            checkClass();
        });
        $('.blue').click(function() {
            checkClass();
            $('.coursebox:not(.blue)').toggleClass('hide');
        });
        $('.white').click(function() {
            checkClass();
            $('.coursebox:not(.white)').toggleClass('hide');
        });
        $('.grey').click(function() {
            checkClass();
            $('.coursebox:not(.grey)').toggleClass('hide');
        });
        $('.yellow').click(function() {
            checkClass();
            $('.coursebox:not(.yellow)').toggleClass('hide');
        });
        $('.red').click(function() {
            checkClass();
            $('.coursebox:not(.red)').toggleClass('hide');
        });

        // Active tag
        $('.button').click(function() {
            $('.button').removeClass('active');
            $(this).addClass('active');
        });
    </script>
</body>

</html>