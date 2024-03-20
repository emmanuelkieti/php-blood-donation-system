<?php 
$fname = $_POST["fname"];
$lname = $_POST["lname"];
$uname = $_POST["uname"];
$password = $_POST["password"];
$unumber = $_POST["unumber"];
$uemail = $_POST["uemail"];
$county = $_POST["countyResidence"];

include "../includes/dbh.php";
//check if donor exists
$sql = "select email from donors where email = '$uemail';";
$res = $conn->query($sql);
$user = $res->fetchAll(PDO::FETCH_ASSOC);
if(count($user) == 0) {
    //register donor
    $sql = "insert into donors(fname, lname, uname, county, password, unumber, email) 
    values('$fname', '$lname', '$uname', '$county', '$password', '$unumber', '$uemail');";
    $conn->exec($sql);
    header("location:../pages/registration.php?uregistration=1");
} else {
    header("location:../pages/registration.php?uexist=1");
}

include "../includes/dclose.php";
