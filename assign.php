<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

include_once '../dbConnExec/sql.php';
require_once '../phpCommon/siteCommon.php';




displayPageHeader("Assignment");

?>




<form>
    <?php
    
    echo $_POST['apartmentID'];
    echo $_POST['applicationID'];
    ?>
</form>

<?php

if ((isset($_POST['applicationID'])) && (is_numeric($_POST['applicationID']))
        &&isset($_POST['apartmentID'])&& is_numeric($_POST['apartmentID']))
{
    assignApartment($_POST['applicationID'], $_POST['apartmentID']);
    
    echo "good";
}
 
?>


<?php
displayPageFooter();
?>
