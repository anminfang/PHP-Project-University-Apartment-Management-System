<?php

require_once ("../phpCommon/siteCommon.php");
require_once ("../dbConnExec/sql.php");

displaypageheader("Search for an apartment by multiple features");

$roomPlan = $_POST['roomPlan'];
$family = $_POST['family'];
$pet = $_POST['pet'];
$parking = $_POST['parking'];

$apartmentIDList = getApartmentIDByMultipleFeatures($roomPlan, $family, $pet, $parking);

//print_r($apartmentIDList);

$apartmentMatchingRecords = count($apartmentIDList);

if($apartmentMatchingRecords == 0)
{
    echo "<h3>No matches found for search features</h3>";
}
else
{   

$output = <<<ABC
<table>
   <caption>$apartmentMatchingRecords apartment(s) found</caption>
   <tbody>
ABC;

   $apartmentNum = 0;
   foreach ($apartmentIDList as $apartment)
    {
        extract($apartment);
        $apartmentNum ++;

        $output .= <<<ABC
        <tr>
            <th>Number</th>
            <th>Apartment</th>
        </tr>
        <tr>
            <td>$apartmentNum</td>
            <td>$apartmentID</td>
        </tr>
ABC;
    }
    
    $output .= "<tbody></table>";
}
$output .= <<<ABC
<p style="text-align: center">
    <a href="../webPages/search.html">[Back to Search Page]</a>
</p></section>
ABC;

// display the output

echo $output;

// call the displayPageFooter method in siteCommon.php

displayPageFooter();

?>
