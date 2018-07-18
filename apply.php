<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

require_once '../dbConnExec/sql.php';
require_once '../phpCommon/siteCommon.php';

$userID = $_POST['userID'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$gender = $_POST['gender'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$address = $_POST['address'];
$roomPlan = $_POST['roomPlan'];
$family = $_POST['family'];
$pet = $_POST['pet'];
$parking = $_POST['parking'];

if (isset($_POST['userID']))
{
    modifyApplication((int)$userID, $firstname, $lastname, $gender, $phone, $email, $address, $roomPlan, $family, $pet, $parking);
}
else //call the add method
{
   addApplication($_SESSION['userInfo']['userID'], $firstname, $lastname, $gender, $phone, $email, $address, $roomPlan, $family, $pet, $parking);
}

displayPageHeader("New application {$_POST['lastname . firstname']} added");
?>

<p style="text-align: center">
    <a href="home.php">[Go to HomePage]</a>
</p>

<?php
displayPageFooter();
?>

