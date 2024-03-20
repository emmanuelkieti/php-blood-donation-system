<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./dbh.php";
    //check
    $sql = "select * from facilities where facility_name = '$_POST[facilityName]' and 
    facility_email = '$_POST[facilityEmail]';";
    $res = $conn->query($sql);
    $user = $res->fetchAll(PDO::FETCH_ASSOC);
    if(count($user) > 0){
        //start session
        session_start();
        $_SESSION["facility_name"] = $user[0]['facility_name'];
        $_SESSION["facility_county"] = $user[0]['county'];
        $_SESSION["facility_subcounty"] = $user[0]['sub_county'];
        $_SESSION["facility_number"] = $user[0]['facility_number'];
        $_SESSION["facility_email"] = $user[0]['facility_email'];
        $_SESSION["facility_entry"] = $user[0]['date_of_entry'];
        
        //facility page
        include "./dclose.php";
        header("location:/bloodbank/pages/facility.php");
    }else{
        header("location:/bloodbank/pages/login.php?fl=0");
    }
} else header("location:/bloodbank/index.php");