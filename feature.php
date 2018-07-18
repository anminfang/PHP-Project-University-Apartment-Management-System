<!DOCTYPE html>
<html>
<head>
    <!--
    KAScade housing Systems
           Khulood ALGhasra
           March 2018

       -->
    <meta charset="UTF-8" />
    <title>Features</title>
    <link href="../phpCommon/styles.css" rel="stylesheet" />

    <style>
        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /*Hide the images by default */
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
        .text {
            color: #f2f2f2;
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
        <img src="../image/kascade003.png" alt="logo" style="float:left; width:200px; height: 100px" />
        <nav>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="search.php">Search</a></li>
                <li><a href="secureApplication.php">Application</a></li>
                <li><a href="feature.php">Features</a></li>
                <li><a href="contact.php">Contact us</a></li>
                <li><a href="reviews.php">Reviews</a></li>
                <li><a href="login.php">Login</a></li>
            </ul>
        </nav>
        <br />
        <h2> Check out the best amenities in town</h2>
    </header>


        <nav style="float:left">
            <ul>
                <li> Cozy study area</li>
                <li> Ping pong and billard tables</li>
                <li> Outdoor gated space with a grill</li>
                <li> Breakfast/Coffee Concierge</li>
                <li> Gym, open 24/7</li>
                <li> Saltwater Luxury Resort Style Pool</li>
                <li> Assigned Parking</li>
            </ul>
        </nav>

        <aside style="float:right">
            <nav>
                <ul>
                    <li> Tanning Salon</li>
                    <li> Basketball Court</li>
                    <li> Volleyball Court</li>
                    <li> Microwave</li>
                    <li> Walk-In Closets</li>
                    <li> Wheelchair Accessible (Rooms)</li>
                    <li> High Speed Internet Access</li>
                </ul>
            </nav>
        </aside>
       

    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <br />
    <!-- Slideshow container -->
    <div class="slideshow-container">

        <!-- Full-width images with number and caption text -->
        <div class="mySlides fade">
            <div class="numbertext">1/5</div>
            <img src="../image/study.jpg" style="width:100%">
            <div class="caption">Caption Six</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2/5</div>
            <img src="../image/pool.jpg" style="width:100%">
            <div class="caption">Caption Two</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 /5</div>
            <img src="../image/gym.jpg" style="width:100%">
            <div class="caption">Caption Three</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 5</div>
            <img src="../image/ping2.jpg" style="width:100%">
            <div class="caption">Caption Four</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 5</div>
            <img src="../image/coffee.jpg" style="width:100%">
            <div class="caption">Caption Five</div>
        </div>

        <!-- Next and previous buttons -->
        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br />

    <footer>
        KAScade Housing Systems &deg;&deg; Developed by Kholood AlGhasra - Anmin Fang - Swathi Kumar &copy; kascade@kascadeSystems.com &deg;&deg; March 2018
    </footer>
</body>

</html>




