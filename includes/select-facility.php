<?php 
require "dbh.php";
if(!isset($_GET["facilityName"])){
    $sql = "select facility_name, county, sub_county from facilities;";
    $res = $conn->query($sql);
    $facilities = $res->fetchAll(PDO::FETCH_ASSOC);
    include "dclose.php";

    foreach($facilities as $facility){
        echo "<option value='$facility[facility_name]'>$facility[facility_name]</option>";
    }
} else {
    $sql = "select county, sub_county from facilities where facility_name = '$_GET[facilityName]';";
    $res = $conn->query($sql);
    $facilities = $res->fetchAll(PDO::FETCH_ASSOC);
    include "./dclose.php";

    foreach($facilities as $facility){
        echo "<option value='$facility[county],$facility[sub_county]'>$facility[county], $facility[sub_county]</option>";
    }
}