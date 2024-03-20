<?php
$servername = "localhost";
        $username = "root";
        $p = "root@01";
        
        try {
            $conn = new PDO("mysql:host=$servername;dbname=bloodbank", $username, $p);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            //echo "Connected successfully";
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }