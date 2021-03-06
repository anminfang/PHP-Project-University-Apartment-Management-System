<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../phpCommon/siteCommon.php';

displayPageHeader("Start or modify your application.");

?>

<br/>
    <p>
        To start your application, please fill the details below and click on "Submit". Should you need any assisstance, give us a call on 415-444-5577
    </p>
    
    <section id="form" >
        <p>Required values are marked by an asterisk (*)</p>
        <br />
        
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
                       
            <input type="submit" name="summit" value="Summit" />
            <input type="submit" name="cancel" value="Cancel" />

        </form>
        
    </section>
    <br />
    <br />
    
    <?php
    
    displayPageFooter();
    ?>




