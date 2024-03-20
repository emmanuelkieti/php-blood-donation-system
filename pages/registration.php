<?php 
$page_variables = array("title"=>"Registration");

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";

?>
    <form method="post" action="../includes/register-individual.php">
    <h3 style="margin: 2%">Donor Registration:</h3>
    <div class='register-success'>
    <?php 
        if(strlen($_SERVER["QUERY_STRING"]))
            if(str_contains($_SERVER["QUERY_STRING"],"uregistration")) echo "<p style='background-color:green'>Successfully registered. Welcome</p>";
            elseif(str_contains($_SERVER["QUERY_STRING"],"uexist")) echo "<p style='background-color:red'>Donor email already exixts.</p>";
            ?>
    </div>
            <label for="fname">First Name: </label>
            <input type="text" name="fname" id="fname" placeholder="text..." /><br />
            <label for="lname">Last Name: </label>
            <input type="text" name="lname"  id="lname" placeholder="text..." /><br />
            <label for="uname">User name: </label>
            <input type="text" name="uname" id="uname" placeholder="text..." /><br />
            <label for="county-residence">County of Residence: </label>
            <input type="text" name="countyResidence" id="county-residence" placeholder="text..." /><br />
            Password: <input type="password" name="password" id="password" /><br />
            Confirm password: <input type="password" name="passwordConfirm" id="password-confirm" /><br />
            <label for="unumber">Phone number: </label>
            <input type="text" name="unumber" id="unumber" placeholder="e.g 0712345678" /><br />
            <label for="uemail">Email: </label>
            <input type="text" name="uemail" id="uemail" /><br />
        <button type="submit">SUBMIT</button>
    </form>
<script src="/bloodbank/assets/js/donor-registration.js"></script>

    <form method="post" action="../includes/register-facility.php" id="facility-register-form">
    <h3 style="margin:2%">Facility Registration: </h3>
    <div class='register-success'>
    <?php 
        if(strlen($_SERVER["QUERY_STRING"]))
            if(str_contains($_SERVER["QUERY_STRING"],"fregistration")) echo "<p style='background-color:green'>Successfully registered.</p>";
            else if(str_contains($_SERVER["QUERY_STRING"],"fexist")) echo "<p style='background-color:red'>Facility already registered.</p>";
            ?>
    </div>
        <label for="facility-name">Facility Name: </label>
        <input type="text" name="facilityName" id="facility-name" /><br />
        <fieldset>
            <legend>Location</legend>
            <label for="facility-county">County: </label>
            <input type="text" name="facilityCounty" id="facility-county" /><br />
            <label for="facility-subcounty">Sub-county: </label>
            <input type="text" name="facilitySubcounty"  id="facility-subcounty" /><br />
        </fieldset>
        <fieldset>
            <legend>Facility contact</legend>
            <label for="facility-number">Facility phone number: </label>
            <input type="text" name="facilityNumber" id="facility-number" /><br />
            <label for="facility-email">Facility Email: </label>
            <input type="text" name="facilityEmail" id="facility-email" /><br />
        </fieldset>
        <button type="submit">SUBMIT</button>
    </form>
    <script src="/bloodbank/assets/js/facility-registration.js"></script>