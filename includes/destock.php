<?php 
include "./dbh.php";
$sql = "delete from $_POST[table] where paint_number = '$_POST[pnumber]';";
$res = $conn->query($sql);
include "./dclose.php";