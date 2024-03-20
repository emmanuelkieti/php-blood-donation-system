<?php 
$page_variables = array("title"=>"Appointments");

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";

?>

<main>
    <table style="margin-left: 2%;">
        <tr><th colspan="5">Appointments</th></tr>
        <tr><th>Name</th><th>Phone</th><th>Email</th><th>Date</th></tr>
        <?php 
        include "../includes/dbh.php";
        $sql = "select d.fname,d.lname,d.unumber,d.email,p.date_of_donation from donationappointments as p inner join  donors as d on p.donor_email = d.email where p.facility_location = '$_SESSION[facility_name],$_SESSION[facility_county],$_SESSION[facility_subcounty]';";
        $res = $conn->query($sql);
        $appointments = $res->fetchAll(PDO::FETCH_ASSOC);
        if(count($appointments)){
            foreach($appointments as $appointment)
                echo "<tr><td>".$appointment["fname"]." ".$appointment["lname"]."</td><td>".$appointment["unumber"]."</td><td>".$appointment["email"]."</td><td>".$appointment["date_of_donation"]."</td></tr>";
        }else{
            echo "<tr><td colspan='4'>There are no Appointments yet.</td></tr>";
        }
        
        include "../includes/dclose.php";
        ?>
    </table>
</main>