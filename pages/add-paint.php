<?php 
$page_variables = array("title"=>"Add paint"); 

include "../includes/head.php";
include "../includes/header.php";
include "../includes/navigation.php";
?>

<form method="post" action="../includes/add-paint.php">
    <h3>Add paint: </h3>
<div class='register-success'>
    <?php 
        if(strlen($_SERVER["QUERY_STRING"]))
            if(str_contains($_SERVER["QUERY_STRING"],"paintnumber=1")) echo "<p style='background-color:red'>Paint number already exists.</p>";
            ?>
    </div>
            <label for="paintNumber">Paint Number: </label>
            <input type="text" name="paintNumber" id="paintNumber" placeholder="characters & numbers only" autofocus /><br />
            Blood group: <input type="text" name="group" value="<?php echo $_GET['bloodgroup'];?>" readonly/><br />
            Date of Donation: <input type="text" name="dod" placeholder="automated on submit" disabled /><br />
            <button type="submit">SUBMIT</button>
    </form>
    <script src="/bloodbank/assets/js/add-paint.js"></script>