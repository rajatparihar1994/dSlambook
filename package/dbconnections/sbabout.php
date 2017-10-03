<?php
$servername = "localhost";
        $database = "phpsbabout";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
?>