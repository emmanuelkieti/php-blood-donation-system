<?php 
$page_variables = array("title"=>$_GET['facility']);

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";
?>
<table>
        <tr><th colspan="2">BLOOD GROUPS - STOCK AVAILABLE</th></tr>
        <tr><th>Blood group</th><th>Available stock</th></tr>
        <?php 
        $blood_groups = array(array("A-positive","apositive"),array("A-negative","anegative"),array("B-positive","bpositive"),array("B-negative","bnegative"),array("O-positive","opositive"),array("O-negative","onegative"));
        //get the stock
        require "../includes/dbh.php";

        foreach($blood_groups as $single_group){
            $sql = "select count(facility) from $single_group[1] where facility = '$_GET[facility],$_GET[county],$_GET[subcounty]';";
            $res = $conn->query($sql);
            $stock = $res->fetchAll(PDO::FETCH_ASSOC);
            echo "<tr><td>$single_group[0]</td><td>".($stock[0]["count(facility)"])."</td></tr>";
        }
        require "../includes/dclose.php";
        ?>
    </table>