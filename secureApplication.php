<?php
/*
    Purpose: Securing Applications
    Author: LV
    Date: January 2017
    Uses: siteCommon1.php, d8logincheck.php
 */

session_start();

// to secure a page, include a php page (for this demo, that page is "d8logincheck.php") 
// that contains the code to check whether the user has been authenticated

require_once ("logincheck.php");
require_once ("../phpCommon/siteCommon.php");
require_once '../dbConnExec/sql.php';

// call the displayPageHeader method in siteCommon1.php

displayPageHeader("You have been authenticated to apply.");

$editmode = false;

print_r($_SESSION['userInfo']['applicationID']);

if ((isset($_SESSION['userInfo']['userID'])) && (is_numeric($_SESSION['userInfo']['userID'])))
{
    $userDetails = getUserDetailsByUserID((int)($_SESSION['userInfo']['userID']));
    
    print_r($userDetails);

    $editmode = (count($userDetails) == 1);
}

if ($editmode)
{
   extract($userDetails[0]);

    $formtitle = 'Update an application';
    $buttontext = 'Modify';
 }
else  //otherwise, set the column variables to ""
{
    $firstname = '';
    $lastname = '';
    $gender = '';
    $phone = '';
    $email = '';
    $address = '';
    $roomPlan = '';
    $family = '';
    $pet = '';
    $parking = '';

    $formtitle = 'Add an application';
    $buttontext = 'Submit';
}


?>

<!-- customize the greeting by accessing the user's first name that is stored
 in the session array element, "userInfo" (see d8loginform.php) -->

<script src="../phpCommon/jsLibrary.js" type="text/javascript"></script>
    
<br/>
    <p>
        To start your application, please fill the details below and click on "Submit". Should you need any assisstance, give us a call on 415-444-5577
    </p>
    
    <section id="form" >
        <p>Required values are marked by an asterisk (*)</p>
        <br />
        
    <?php
    if ($editmode)  //put the filmpk in a hidden field
    {
        echo '<input type="hidden" name="actorID" value="' . $userID . '" />';
    }
    ?>
        
        <form id="apply" name="apply" action="apply.php" method="post" onsubmit="return checkForm(this)">
            
            <fieldset id="personal">
                <legend>Personal details</legend>
                <br />
                <label for="firstname">First Name *</label>
                <input type="text" name="firstname" placeholder="First name" value="<?php echo $firstname ?>" required/>
                <br />
                <label for="lastname">Last Name *</label>
                <input type="text" name="lastname" placeholder="Last name" value="<?php echo $lastname ?>" required />
                <br />
                <label for="gender">Gender</label>
                <input type="radio" name="gender" value="female" <?php if($gender === 'female'){ echo 'checked';} ?> />Female
                <input type="radio" name="gender" value="male" <?php if($gender === 'male'){ echo 'checked';} ?> />Male
                <input type="radio" name="gender" value="other" <?php if($gender === 'other'){ echo 'checked';} ?> />Other
                <br />
                <br />
                <label for="phone">Phone</label>
                <input type="text" name="phone" placeholder="nnn-nnn-nnnn" value="<?php echo $phone ?>" />
                <br />
                <label for="email">Email address *</label>
                <input type="text" name="email" placeholder="Email address" value="<?php echo $email ?>" required />
                <br />
                <label for="address">Current address *</label>
                <input type="text" name="address" placeholder="Street address" value="<?php echo $address ?>" required />
                <br />
            </fieldset>
            <br />

            <fieldset id="apartment">
                <legend>Apartment preference</legend>
                <br />

                <label for="floorPlan">Room plan</label>
                <br /> <br />
                <input type="radio" name="roomPlan" value="2b" <?php if($roomPlan === '2b') echo 'checked'; ?> >2 Bedroom
                <input type="radio" name="roomPlan" value="3b" <?php if($roomPlan === '3b') echo 'checked'; ?> >3 Bedroom
                <input type="radio" name="roomPlan" value="4b" <?php if($roomPlan === '4b') echo 'checked'; ?> >4 Bedroom
                <br />
                <br />
                <label for="family">Family</label>
                <input type="radio" name="family" value="1" <?php if($family == 1) echo 'checked'; ?> >Yes
                <input type="radio" name="family" value="0" <?php if($family == 0) echo 'checked'; ?> >No
                <br />
                <br />
                <label for="pet">Pet(s)</label>
                <input type="radio" name="pet" value="1" <?php if($pet == 1) echo 'checked'; ?> >Yes
                <input type="radio" name="pet" value="0" <?php if($pet == 0) echo 'checked'; ?> >No
                <br />
                <br />
                <label for="park">Parking spot</label>
                <input type="radio" name="parking" value="1" <?php if($parking == 1) echo 'checked'; ?> >Yes
                <input type="radio" name="parking" value="0" <?php if($parking == 0) echo 'checked'; ?> >No
                <br />
                <br />
                <label for="date" name="date" value="01/01/2019" /> Desired move-in date
                <input type="date" name="date" max="01/12/2020" />
                <br />
                <br />
            </fieldset>
            <br />
                       
            <input type="submit" name="summit" value="<?php echo $buttontext ?>" />
            <a href="home.php">Cancel</a>
            <!--<input type="submit" name="cancel" value="Cancel" onclick="history.back();"/>-->

        </form>
    </section>
    <br />
    <br />

<?php
// call the displayPageFooter method in siteCommon1.php

displayPageFooter();
?>
