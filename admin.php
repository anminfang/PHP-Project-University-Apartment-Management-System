<?php

session_start();

require_once ("logincheck.php");
require_once ("../phpCommon/siteCommon.php");
require_once '../dbConnExec/sql.php';

if ($_SESSION['userInfo']['userRoleID'] != '1')
{
    header('refresh: 2; URL=home.php');
    echo '<h2>Sorry, you are not authorized to view this page.</h2>';
    die();
}

displayPageHeader("You are viewing this Admin Page because you have been authenticated and are authorized");

?>

<section>
   <h2>Admin Page - Welcome back <?php echo $_SESSION['userInfo']['userName'] ?> </h2>
</section>

<?php
$applicationList = getApplicationList();

$output = <<<HTML
<section><table id="allApplications" name="allApplications">
HTML;

foreach ($applicationList as $application)
{
    extract($application);
//    print_r($application);
    $output .= <<<HTML
    <tr>
        <td>$firstname</td>
        <td>$lastname</td>
        <td>$gender</td>
        <td>$phone</td>
        <td>$email</td>
        <td>$roomPlan</td>
        <td>$family</td>
        <td>$pet</td>
        <td>$parking</td>
        <td><a href="approve.php?applicationID=$applicationID">[Approve]</a></td>
        <td><a href="delete.php?applicationID=$applicationID">[Delete]</a></td>
            
    </tr>
HTML;
}

$output .= <<<HTML
    </table></section>
HTML;

echo $output;

?>


<?php
displayPageFooter();
?>
