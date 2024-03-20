<?php 
include "./head.php";//to access session

$group = $_POST["group"];
$paint_number = $_POST["paintNumber"];

$query_table = "";
switch($_POST["group"]){
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

include "../includes/dbh.php";
//check if paint number exists in all blood groups
$tables = array("apositive","anegative","bpositive","bnegative","opositive","onegative");
for($x = 0; $x < count($tables);$x++){
    $sql = "select paint_number from $tables[$x] where paint_number = '$paint_number';";
    $res = $conn->query($sql);
    $paint = $res->fetchAll(PDO::FETCH_ASSOC);
    if(count($paint) !== 0){
        //if it exists break
        include "../includes/dclose.php";
        header("location:/bloodbank/pages/add-paint.php?paintnumber=1&bloodgroup=$group");
    }
}
    //stock paint
    $sql = "insert into $query_table(paint_number,facility) values('$paint_number', '$_SESSION[facility_name],$_SESSION[facility_county],$_SESSION[facility_subcounty]');";
    $conn->exec($sql);
    include "../includes/dclose.php";
    header("location:/bloodbank/pages/blood-group.php?bloodgroup=$group");