<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

require_once ("../phpCommon/siteCommon.php");
require_once ("../dbConnExec/sql.php");
//require_once 'login.php';

$editmode = false;

// if a numeric filmid was passed through the URL

if ((isset($_POST['userID'])) && (is_numeric($_POST['userID'])))
{
    // get the details for the movie to be edited
    
    $userDetails = getUserDetailsByUserID((int)$_POST['userID']);
    
    print_r($userDetails);
    
    // if movie details are returned for the filmid, set $editmode to true
    
    $editmode = (count($userDetails) == 1);
}

displayPageHeader("Modify your personal info or application.");

?>

<form id="contact" name="contact" action="Not Set" method="post">
            
            <fieldset id="personal">
                <legend>Personal details</legend>
                <br />
                <label for="name">First Name *</label>
                <input type="text" placeholder="First name" required />
                <br />
                <label for="name">Last Name *</label>
                <input type="text" placeholder="Last name" required />
                <br />
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="female" checked>Female
                <input type="radio" name="gender" value="male">Male
                <input type="radio" name="gender" value="other">Other
                <br />
                <br />
                <label for="phone">Phone</label>
                <input type="text" placeholder="nnn-nnn-nnnn" pattern="^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$" />
                <br />
                <label for="email">Email address *</label>
                <input type="text" placeholder="Email address" required />
                <br />
                <label for="address">Current address *</label>
                <input type="text" placeholder="Street address" required />
                <br />
            </fieldset>
            <br />

            <fieldset id="apartment">
                <legend>Apartment preference</legend>
                <br />

                <label for="floorPlan">Floor plan</label>
                <br /> <br />
                <input type="radio" name="floorPlan" value="2B" checked>2 Bedroom

                <input type="radio" name="floorPlan" value="3B">3 Bedroom

                <input type="radio" name="floorPlan" value="4B">4 Bedroom
                <br />
                <br />
                <label for="family">Family</label>
                <input type="radio" name="family" value="y" checked>Yes
                <input type="radio" name="family" value="n">No
                <br />
                <br />
                <label for="pet">Pet(s)</label>

                <input type="radio" name="pet" value="y">Yes
                <input type="radio" name="pet" value="n">No
                <br />
                <br />
                <label for="park">Parking spot</label>

                <input type="radio" name="parkingLot" value="y">Yes
                <input type="radio" name="parkingLot" value="n">No
                <br />
                <br />
                <label for="date" name="date" value="01/01/2019" /> Desired move-in date

                <input type="date" name="date" max="01/12/2020" />
                <br />
                <br />
            </fieldset>
            <br />           
            <input type="submit" value="Modify" style="width:10%;"/>
            
        </form>


<?php

displayPageFooter();

?>
