<?php
include "./head.php"; 
$facility = $_POST["facilities"];
$donor = $_POST["county"];

include "../includes/dbh.php";
    //book appointment
    $sql = "insert into donationappointments(donor_email, facility_location) 
    values('$_SESSION[email]','$_POST[facilities],$_POST[county]');";
    $conn->exec($sql);
    include "../includes/dclose.php";
    header("location:../pages/book-donation.php?booking=true");