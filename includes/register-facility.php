<?php 
$facility_name = $_POST["facilityName"];
$facility_county = $_POST["facilityCounty"];
$facility_subcounty = $_POST["facilitySubcounty"];
$facility_m_number = $_POST["facilityNumber"];
$facility_m_email = $_POST["facilityEmail"];

include "../includes/dbh.php";
//check if user exists
$sql = "select facility_name, county, sub_county from facilities where facility_name = '$facility_name' and 
(county = '$facility_county' or sub_county = '$facility_subcounty');";
$res = $conn->query($sql);
$user = $res->fetchAll(PDO::FETCH_ASSOC);
if(count($user) == 0) {
    //register facility
    $sql = "insert into facilities(facility_name, county, sub_county, facility_number, facility_email) 
    values('$facility_name','$facility_county','$facility_subcounty','$facility_m_number','$facility_m_email');";
    $conn->exec($sql);
    include "../includes/dclose.php";
    header("location:../pages/registration.php?fregistration=1#facility-register-form");
}else{
    header("location:../pages/registration.php?fexist=1#facility-register-form");
}