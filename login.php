<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();

require_once ("../dbConnExec/sql.php");
require_once ("../phpCommon/siteCommon.php");

$userLogin = (isset($_POST['loginID'])) ? trim($_POST['loginID']) : '';
$userPassword = (isset($_POST['loginPassword'])) ? trim($_POST['loginPassword']) : '';

$redirect = (isset($_REQUEST['redirect'])) ? $_REQUEST['redirect'] : 'secureApplication.php';

if(isset($_POST['login']))
{
    $userList = getUser($userLogin, $userPassword);
    

    if (count($userList)==1) //If credentials check out
    {
        
        //print_r($userList);
        extract($userList[0]);
        
        
        $applicationIDList = getApplicationIDByUserID($userID);
        extract($applicationIDList);
        // assign user info to an array

        $userInfo = array('applicationID'=>$applicationID, 'userID'=>$userID, 'userName'=>$userName, 'userRoleID'=>$userRoleID);

        // assign the array to a session array element

        $_SESSION['userInfo'] = $userInfo;

        session_write_close(); //typically not required; ensures that the session data is stored

        // redirect the user

        header('location:' . $redirect);
        die();
    }

    else // Otherwise, assign error message to $error
    {
        $error = 'Invalid login credentials<br />Please try again';
        
    }
}

displayPageHeader("Here is your login information.");

echo "<section>";

if (isset($error))
{
    echo '<div id="error">' . $error . '</div>';
}
?>

<p>Log in with your username and password. </p>

    <br />

    <section id="form">

        <form id="login" name="login" action="../php/login.php" method="post">

            <input type="hidden" name ="redirect" value ="<?php echo $redirect?>" />
            <input type="hidden" name="userID" value="<?php echo $userID?>"/>
            <label for="username">Username *</label>
            <br />
            <input type="text" name="loginID" placeholder="Username" required style="width:40%;"/>
            <br />
            <label for="password">Password *</label>
            <br />
            <input type="password" name="loginPassword"  placeholder="Password" required />
            <br />
            <br />
            <input type="submit" id="login" name="login" value="Submit" style="width:10%;"/>

        </form>
    </section>
    <br />
    <br />
    
<?php

$_SESSION['userID'] = $userID;
?>

<?php

displayPageFooter();

?>
