<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

include_once '../dbConnExec/sql.php';
require_once '../phpCommon/siteCommon.php';

displayPageHeader("Assign Apartment");

echo $_SESSION['userInfo']['applicationID'];

?>

<form id="assign" name="assign" action="assign.php" method="post">
    <input type="hidden" name="applicationID" value="<?php echo $_GET['applicationID'] ?>">
<label for="apartmentID">Apartment Room Number</label>
<input type="text" id="apartmentID" name="apartmentID">
<input type="submit" name="assign" value="Assign" style="width:10%;">
</form>



<?php


    if(isset($_SESSION['userInfo']['applicationID']))
  {
      approveApplication((int)$_SESSION['userInfo']['applicationID']);
//      header("Location: admin.php");
//      exit;
  }

  
    
?>


<?php
displayPageFooter();
?>
