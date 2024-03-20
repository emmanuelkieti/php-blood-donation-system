<?php 
$page_variables = array("title"=>"Facilities");

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";

?>
<main>
    <table style="margin-left: 2%;">
        <tr><th colspan="5">Registered facilities</th></tr>
        <tr><th>Facility Name</th><th>County</th><th>Subcounty</th><th>Facility number</th><th>Facility email</th></tr>
        <?php 
        include "../includes/dbh.php";
        $sql = "select facility_name,county,sub_county,facility_number,facility_email from facilities;";
        $res = $conn->query($sql);
        $facilities = $res->fetchAll(PDO::FETCH_ASSOC);
        if(count($facilities)){
            foreach($facilities as $facility)
                echo "<tr><td><a href='./other-facility.php?facility=$facility[facility_name]&county=$facility[county]&subcounty=$facility[sub_county]'>".$facility["facility_name"]."</a></td><td>".$facility["county"]."</td><td>".$facility["sub_county"]."</td><td>".$facility["facility_number"]."</td><td>".$facility["facility_email"]."</td></tr>";
        }else{
            echo "<tr><td colspan='4'>There are no registered facilities.</td></tr>";
        }
        
        include "../includes/dclose.php";
        ?>
    </table>
</main>