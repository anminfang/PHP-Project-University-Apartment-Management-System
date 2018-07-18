<?php
   /* 
    Purpose: Methods to render Common Site Header and Footer
    Author: LV
    Date: January 2017
     */

function displayPageHeader($pageTitle)
{
   $output = <<<ABC
<!DOCTYPE html>
<html>
<head>
    <!--
    KAScade housing Systems
           Khulood ALGhasra
           March 2018

       -->
    <meta charset="UTF-8" />
    <title></title>
    <link href="../phpCommon/styles.css" rel="stylesheet" />
    <link href="../phpCommon/tables.css" rel="stylesheet" />
</head>

<body>

    <header>
        <h1>KAScade Housing Systems</h1>
        <img src="../image/kascade003.png" alt="logo" style="float:left; width:200px; height: 100px" />
        <nav>
            <ul>
                <li><a href="../php/home.php">Home</a></li>
                <li><a href="../php/search.php">Search</a></li>
                <li><a href="../php/secureApplication.php">Application</a></li>
                <li><a href="../php/feature.php">Features</a></li>
                <li><a href="../php/contact.php">Contact us</a></li>
                <li><a href="../php/reviews.php">Reviews</a></li>
                <li><a href="../php/admin.php">Admin</a></li>
           
ABC;
   
   $logStatus = (isset($_SESSION['userInfo']));   

// if the user is authenticated, display "Log Out", else Log In"

    if ($logStatus)
    {
        $output .= '<li><a href="logout.php">Log Out</a></li>';
    }
    else
    {
        $output .= '<li><a href="login.php">Log In</a></li>';
    }
  
    $output .= " </ul></nav><section><h2>$pageTitle</h2>
            <p>
                <br />
                <br />
                <br />
                <br />
            </p>
        </section>
    </header>";

   echo $output;

}
   
function displayPageFooter()
{
   $year = date('Y');
   $output = <<<ABC
   <footer>
        KAScade Housing Systems &deg;&deg; Developed by Kholood AlGhasra - Anmin Fang - Swathi Kumar &copy; kascade@kascadeSystems.com &deg;&deg; March 2018
    </footer>
</body>
</html>
ABC;
   echo $output;
}
?>
