<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../phpCommon/siteCommon.php';

displayPageHeader("Start your search");

?>

<br/>
    <p>
        Before your application, you can search available apartments on this page.
    </p>
    
    <section id="form">  
        <br />
        <form id="search" name="search" action="searchResults.php" method="post">

            <fieldset id="apartment">
                <legend>Apartment Features</legend>
                <br />

                <label for="floorPlan">Floor plan</label>
                <br /> <br />
                <input type="radio" name="roomPlan" value="2b" checked>2 Bedroom
                <input type="radio" name="roomPlan" value="3b">3 Bedroom
                <input type="radio" name="roomPlan" value="4b">4 Bedroom
                <br />
                <br />
                <label for="family">Family</label>
                <input type="radio" name="family" value="1" checked>Yes
                <input type="radio" name="family" value="0">No
                <br />
                <br />
                <label for="pet">Pet(s)</label>
                <input type="radio" name="pet" value="1" checked>Yes
                <input type="radio" name="pet" value="0">No
                <br />
                <br />
                <label for="park">Parking spot</label>
                <input type="radio" name="parking" value="1" checked>Yes
                <input type="radio" name="parking" value="0">No
                <br />
                <br />
            </fieldset>
            <br />
            <input type="submit" name="search" value="Search" style="width:10%;"/>
        </form>
    </section>
    </br>
    </br>
    
    <?php
    
    displayPageFooter()
    
    ?>
