<!DOCTYPE html>
<html>

<head>
    <!--
    KAScade housing Systems
           Khulood ALGhasra
           March 2018

       -->
    <meta charset="UTF-8" />
    <title>Home</title>
    <link href="../phpCommon/styles.css" rel="stylesheet" />
    <style>
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

            /* On hover, add a black background color with a little bit see-through */
            .prev:hover, .next:hover {
                background-color: rgba(0,0,0,0.8);
            }

        /* Caption text */
        .caption {
            color: black;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

            .active, .dot:hover {
                background-color: #717171;
            }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }
    </style>
    <script src="../phpCommon/JavaScript.js">
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }

    </script>

</head>

<body>
    <header>
        <h1>KAScade Housing Systems</h1>
        <img src="../image/kascade003.png" alt="companyLogo" style="float:left; width:200px; height: 100px" />
        <nav>
            <ul>
                <li><a href="../php/home.php">Home</a></li>
                <li><a href="../php/search.php">Search</a></li>
                <li><a href="../php/secureApplication.php">Application</a></li>
                <li><a href="../php/features2.php">Features</a></li>
                <li><a href="../php/contact.php">Contact us</a></li>
                <li><a href="../php/reviews.php">Reviews</a></li>
                <li><a href="../php/admin.php">Admin</a></li>
                <li><a href="../php/login.php">Login</a></li>
            </ul>
        </nav>       
        <h2>Life, elevated..</h2>
        
    </header>

    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1 / 6</div>
            <img src="../image/apt1.jpg" style="width:100%">
            <div class="text">Caption One</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 6</div>
            <img src="../image/apt2.jpg" style="width:100%">
            <div class="caption">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 6</div>
            <img src="../image/apt3.jpg" style="width:100%">
            <div class="caption">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 6</div>
            <img src="../image/apt4.jpg" style="width:100%">
            <div class="caption">Caption Four</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 6</div>
            <img src="../image/apt5.jpg" style="width:100%">
            <div class="caption">Caption Five</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 6</div>
            <img src="../image/apt6.jpg" style="width:100%">
            <div class="caption">Caption Six</div>
        </div>
        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br>

    <!-- The dots/circles -->
    <!--<div style="text-align:center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
    </div>
    <br />-->
    
    <div>
        <p>
            <strong>
                Features <br/>
            </strong>
            <em>Fully</em> furnished apartments, highspeed internet, in-unit washing machine and dryer, dishwasher, and more!
            The outside complex area features a fully equipped 24/7 gym, a swimming pool and a tanning bed. Inside our main building, we offer free coffee and tea while you study, an entertainment area
            with a ping-pong table and videogames. You and your family will love our park area where you can have picnics all year round! What are you waiting for? Sign up for an apartment now!    
        </p>
    </div>
    <div>
        <strong>
            Floor plans <br />
        </strong>
        <p>Click on the image to start you application</p>

        <a href="application.html">
            <img src="../image/2bed.jpg" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="../image/3bed.jpg" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
            <img src="../image/4bed.jpg" style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">
        </a>
        <p style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">Two bedroom apartment (998 SQ. FT.)</p>
        <p style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">Three bedroom apartment (1,057 SQ. FT.)</p>
        <p style="float: left; width: 30%; margin-right: 1%; margin-bottom: 0.5em;">Four bedroom apartment (1,279 SQ. FT.)</p>
        <p style="clear: both;">

            <br />
    </div>

    <footer>
        KAScade Housing Systems &deg;&deg; Developed by Kholood AlGhasra - Anmin Fang - Swathi Kumar &copy; kascade@kascadeSystems.com &deg;&deg; March 2018
    </footer>
</body>

</html>
