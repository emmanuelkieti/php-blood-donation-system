<?php 
$page_variables = array("title"=>"Book-donation");
include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";
?>
<p style="margin:2% auto;text-align:center;">
    We appreaciate your willingness to connect with us. For inquiries please contact is at: <a href="mailto:kietiemanuel@gmail.com">info@emmanuel.m.</a>
</p>

<form method="post" action="../includes/donation-appointment.php">
    <h3 style="margin: 2%">BOOK DONATION:</h3>
    <div class='register-success'>
    <?php 
        if(strlen($_SERVER["QUERY_STRING"]))
            if(str_contains($_SERVER["QUERY_STRING"],"booking=true")) echo "<p style='background-color:green'>Successfully booked. We will contact you.</p>";
            ?>
    </div>
    <p style="margin:2% auto;text-align:center;">We will share your details with the facility for further arrangements. The details shared are as follows:<br />
    <b>Name:</b> <?php echo "$_SESSION[fname] $_SESSION[fname]";?><br />
    <b>Phone number:</b> <?php echo $_SESSION['unumber'];?><br />
    <b>E-mail:</b> <?php echo $_SESSION['email'];?><br />
    </p>
    <fieldset>
        <legend><b>Facility to donate in: </b></legend>
        <label for="facilities">Facility name: </label>
        <select name="facilities" id="facilities">
        <option value=''>Select </option>";
            <?php include "../includes/select-facility.php";?>
        </select><br/>
        <label for="county">County, sub-county: </label>
        <select name="county" id="county">
            <?php 
            if(strlen($_SERVER["QUERY_STRING"]))
                include "../includes/select-facility.php?facilityName=";?>
        </select>
    </fieldset>
        <button type="submit">SEND</button>
    </form>
    <script src="/bloodbank/assets/js/select-facility.js"></script>