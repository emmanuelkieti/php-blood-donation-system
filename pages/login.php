<?php 
$page_variables = array("title"=>"Login");
include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";
?>
<form method="post" action="../includes/login.php">
    <h3 style="margin: 2%">Donor Login: </h3>
<div class='register-success'>
    <?php 
        if(strlen($_SERVER["QUERY_STRING"]))
            if(str_contains($_SERVER["QUERY_STRING"],"dl=0")) echo "<p style='background-color:red'>Incorrect Login.</p>";
            else if(str_contains($_SERVER["QUERY_STRING"],"fexist")) echo "<p style='background-color:red'>Facility already registered.</p>";
            ?>
    </div>
            <label for="uname">User Name: </label>
            <input type="text" name="uname" id="uname" /><br />
            Password: <input type="password" name="password" id="password" /><br />
            <button type="submit">SUBMIT</button>
    </form>

    <form method="post" action="../includes/facility-login.php">
        <h3 style="margin: 2%">Facility Login: </h3>
        <div class="register-success">
            <?php 
            if(str_contains($_SERVER["QUERY_STRING"],"fl=0")) echo "<p style='background-color:red'>Incorrect Logins.</p>";
            ?>
            </div>
        <label for="facility-name">Facility Name: </label>
        <input type="text" name="facilityName" id="facility-name" /><br />
        <label for="facility-email">Facility Email: </label>
        <input type="email" name="facilityEmail" id="facility-email" /><br />
        <button type="submit">SUBMIT</button>
    </form>