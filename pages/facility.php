<?php 
$page_variables = array("title"=>"Facility"); 

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";
?>
<main id="facility-content">
    <h3>Your Facility:</h3>
    <ul class="facility">
        <li>Facility Name: <b><?php echo $_SESSION["facility_name"]?></b></li>
        <li>Facility County: <b><?php echo $_SESSION["facility_county"]?></b></li>
        <li>Facility Sub-county: <b><?php echo $_SESSION["facility_subcounty"]?></b></li>
        <li>Facility Phone Number: <b><?php echo $_SESSION["facility_number"]?></b></li>
        <li>Facility Email: <b><?php echo $_SESSION["facility_email"]?></b></li>
        <li>Date of Registration: <b><?php echo $_SESSION["facility_entry"]?></b></li>
    </ul>

    <table>
        <tr><th colspan="2">BLOOD GROUPS - STOCK AVAILABLE</th></tr>
        <tr><th>Blood group</th><th>Available paints</th></tr>
        <?php 
        $blood_groups = array(array("A-positive","apositive"),array("A-negative","anegative"),array("B-positive","bpositive"),array("B-negative","bnegative"),array("O-positive","opositive"),array("O-negative","onegative"));
        //get the stock
        require "../includes/dbh.php";
        foreach($blood_groups as $single_group){
            $sql = "select count(facility) from $single_group[1] where facility = '$_SESSION[facility_name],$_SESSION[facility_county],$_SESSION[facility_subcounty]';";
            $res = $conn->query($sql);
            $stock = $res->fetchAll(PDO::FETCH_ASSOC);
            echo "<tr><td><a href='./blood-group.php?bloodgroup=$single_group[0]'>$single_group[0]</a></td><td>".($stock[0]["count(facility)"])."</td></tr>";
        }
        require "../includes/dclose.php";
        ?>
    </table>
</main>