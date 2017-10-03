<?php

class alldbconnections {

    function connection($databasename) {
        $servername = "localhost";
        $database = $databasename;
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sblikes() {
        $servername = "localhost";
        $database = "phpsblikes";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbaboutuser() {
        $servername = "localhost";
        $database = "phpsbuser";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbabout() {
        $servername = "localhost";
        $database = "phpsbabout";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbfriends() {
        $servername = "localhost";
        $database = "phpsbfriends";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbphotos() {
        $servername = "localhost";
        $database = "phpsbphotos";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbstatus() {
        $servername = "localhost";
        $database = "phpsbstatus";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }
    
    function sbuser() {
        $servername = "localhost";
        $database = "phpsbfriends";
        $dbusername = "pratik";
        $password = "pratik";
        $con =new mysqli($servername, $dbusername, $password, $database);
        if ($con->connect_error) {
            
        } else {
            return $con;
        }
    }

}
