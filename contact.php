<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once '../phpCommon/siteCommon.php';

displayPageHeader("Leave a comment");

?>

<br/>

    <p> For any questions, feel free to contact us at any time and we will get back to you!</p>

    <br />
    <img src="../image/map.jpg" style="float:left" />
    <br />
    <p>
        <strong>Address</strong>
        One Market Street, 36th Floor
        San Francisco, CA 94105
        <br />
        <strong>Phone</strong>
        415-444-5577
    </p>
    <br />

    <section id="form">
        <p>Required values are marked by an asterisk (*)</p>

        <form id="contact" name="contact" action="Not Set" method="post">

            <fieldset id="info">
                <legend>User Information</legend>

                <label for="name">Name *</label>
                <input type="text" placeholder="First and last name" required />
                <br />
                <br />
                <label for="phone">Phone</label>
                <input type="text" placeholder="nnn-nnn-nnnn" pattern="^\d{10}$|^(\(\d{3}\)\s*)?\d{3}[\s-]?\d{4}$" />
                <br />
                <br />
                <label for="email">Email address *</label>
                <input type="text" placeholder="Email address" required />
                <br />
                <br />
                <label for="comment">Message *</label>
                <textarea rows="5" cols="20" required>Please enter your comment here </textarea>
                <br />
                <br />
                <input type="button" value="Submit" />
            </fieldset>
        </form>
    </section>
    <br />
    <br />
    
    <?php
    
    displayPageFooter();
    
    ?>
