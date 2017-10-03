<?php
include './package/dbconnections/alldbconnections.php';
if (isset($_REQUEST['submit'])) {
    $_email = $_REQUEST['email'];
    $_password = $_REQUEST['password'];
    function allconnection(){
        $allcon = new alldbconnections();
        return $allcon;
    }
    
    $con = allconnection()->connection("phpsbusers");
    
    if ($con->connect_error) {
        header("location:login.php");
    } else {
        echo "alert('click')";
        $sql = "select * from members where email = '$_email' and password = '$_password'";
        $result = $con->query($sql);

        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                session_start();
                $_SESSION['userid'] = $row["userid"];
                if ($row["loginstatus"] === '1') {
                    header("location:home.php");
                } else if ($row["loginstatus"] === '0') {
                    header("location:firsttimelogin.php");
                }
            }
        } else {
            echo "alert('invalid')";
        }
    }
}
?>