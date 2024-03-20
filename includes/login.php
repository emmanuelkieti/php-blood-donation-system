<?php 
if($_SERVER["REQUEST_METHOD"] == "POST") {
    require "./dbh.php";
    //check
    $sql = "select uname, fname, lname, unumber, email, password from donors where uname = '$_POST[uname]' and 
    password = '$_POST[password]';";
    $res = $conn->query($sql);
    $user = $res->fetchAll(PDO::FETCH_ASSOC);
    if(count($user) > 0){
        //start session
        session_start();
        // Set session variables
        $_SESSION["user"] = $_POST['uname'];
        $_SESSION["fname"] = $user[0]['fname'];
        $_SESSION["lname"] = $user[0]['lname'];
        $_SESSION["unumber"] = $user[0]['unumber'];
        $_SESSION["email"] = $user[0]['email'];
        include "./dclose.php";
        header("location:/bloodbank/pages/book-donation.php");
    }else{
        header("location:/bloodbank/pages/login.php?dl=0");
    }
} else header("location:/bloodbank/index.php");