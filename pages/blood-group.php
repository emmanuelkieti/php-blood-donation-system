<?php 
$page_variables = array("title"=>"Facilities");

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";

$query_table = "";
switch($_GET["bloodgroup"]){
    case "A-positive":
        $query_table = "apositive";
        break;
    case "A-negative":
        $query_table = "anegative";
        break;
    case "B-positive":
        $query_table = "bpositive";
        break;
    case "B-negative":
        $query_table = "bnegative";
        break;
    case "O-positive":
        $query_table = "opositive";
        break;
    case "O-negative":
        $query_table = "onegative";
        break;
}
require "../includes/dbh.php";
    $sql = "select paint_number, date_of_donation, date_of_expiry from $query_table where facility = '$_SESSION[facility_name],$_SESSION[facility_county],$_SESSION[facility_subcounty]';";
    $res = $conn->query($sql);
    $stock = $res->fetchAll(PDO::FETCH_ASSOC);
    ?>
    <a href="/bloodbank/pages/facility.php">Back to all blood groups</a>
    <div class="single-group">
    <table>
        <tr><th colspan='4'><?php echo $_GET["bloodgroup"];?></th></tr>
        <tr><th>Paint number</th><th>Date of Donation</th><th>Date of Expiry</th><th>Donate/Dispose</th></tr>
        <?php 
        if(count($stock)){
            foreach($stock as $paint)
                echo "<tr><td>$paint[paint_number]</td><td>$paint[date_of_donation]</td><td>$paint[date_of_expiry]</td><td><button type='button' class='destock'>Destock</button></td></tr>";
        }else{
            echo "<tr><td colspan='4'>We are out of stock</td></tr>";
        }
        ?>
        <tr><td><a href=<?php echo "/bloodbank/pages/add-paint.php?bloodgroup=$_GET[bloodgroup]";?>><button type="button">Click here to add a paint</button></a></td></tr>
    </table>
    <script src="/bloodbank/assets/js/destock.js"></script>
    </div>