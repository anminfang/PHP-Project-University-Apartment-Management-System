<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include_once ("../dbConnExec/sql.php");

if ((isset($_GET['applicationID'])) && (is_numeric($_GET['applicationID'])))
{
    deleteApplication((int)$_GET['applicationID']);
}

header("Location: admin.php");
exit;

?>
