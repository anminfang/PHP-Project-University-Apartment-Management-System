<?php

require_once ("dbConnExec.php");

function getApartmentIDByMultipleFeatures($roomPlan, $family, $pet, $parking)
{
    $query = <<<STR

SELECT Apartment.apartmentID
FROM ApartmentFeature
JOIN Feature 
ON ApartmentFeature.featureID = Feature.featureID
JOIN Apartment
ON ApartmentFeature.apartmentID = Apartment.apartmentID
WHERE Feature.roomPlan = '$roomPlan' And Feature.family = '$family' And Feature.pets = '$pet' And Feature.parking = '$parking' And cast(Apartment.statusID as int) = '0';
                       
STR;
    
    return executeQuery($query);
    
}

function getUser($userLogin, $password)
{
    $query = <<<STR

SELECT userID, userName, userRoleID
FROM [User]
WHERE userLoginID = '$userLogin' AND password = '$password';
            
STR;
    
    return executeQuery($query);
}

function getApplicationIDByUserID($userID)
{
    $query = <<<STR

SELECT applicationID
FROM Application
WHERE userID = $userID
            
STR;
    
    return executeQuery($query);
}

function getUserDetailsByUserID($userID)
{
    $query = <<<STR
Select applicationID, userID, firstname, lastname, gender, phone, email, address, roomPlan, family, pet, parking
From Application
Where userID = '$userID'
STR;
    
    return executeQuery($query);
    
}

function modifyApplication($userID, $firstname, $lastname, $gender, $phone, $email, $address, $roomPlan, $family, $pet, $parking)
{
    $firstname = str_replace('\'', '\'\'', trim($firstname));
    $lastname = str_replace('\'', '\'\'', trim($lastname));
    $gender = str_replace('\'', '\'\'', trim($gender));
    $phone = str_replace('\'', '\'\'', trim($phone));
    $email = str_replace('\'', '\'\'', trim($email));
    $address = str_replace('\'', '\'\'', trim($address));
    
    $query = <<<STR
Update Application
Set firstname = '$firstname', lastname = '$lastname', gender = '$gender', phone = '$phone', email = '$email', address = '$address', roomPlan = '$roomPlan',
            family = '$family', pet = '$pet', parking = '$parking'
Where userID = $userID
STR;

    executeQuery($query);
    
}

function addApplication($userID, $firstname, $lastname, $gender, $phone, $email, $address, $roomPlan, $family, $pet, $parking)
{
    $firstname = str_replace('\'', '\'\'', trim($firstname));
    $lastname = str_replace('\'', '\'\'', trim($lastname));
    $gender = str_replace('\'', '\'\'', trim($gender));
    $phone = str_replace('\'', '\'\'', trim($phone));
    $email = str_replace('\'', '\'\'', trim($email));
    $address = str_replace('\'', '\'\'', trim($address));
    
    $query = <<<STR
Insert Into Application(userID, firstname, lastname, gender, phone, email, address, roomPlan, family, pet, parking)
Values('$userID', '$firstname', '$lastname', '$gender', '$phone', '$email', '$address', '$roomPlan', '$family', '$pet', '$parking')
STR;
    
    executeQuery($query);
}

function getApplicationList()
{  
            $query = <<<STR
SELECT applicationID, userID, firstname, lastname, gender, phone, email, address, roomPlan, family, pet, parking
FROM Application
STR;
    
    return executeQuery($query);
}

function deleteApplication($applicationID)
{
    $query = <<<STR
Delete
From Application
Where applicationID = $applicationID
STR;

    executeQuery($query);
}

function approveApplication($applicationID)
{
    $query = <<<STR
UPDATE Application
SET applicationStatusID = '1'
Where applicationID = $applicationID
STR;
    
    executeQuery($query);
}

function assignApartment($applicationID, $apartmentID)
{
    $query = <<<STR
UPDATE Application
SET apartmentID = '$apartmentID'
Where applicationID = $applicationID
STR;
    
    executeQuery($query);
}

?>
