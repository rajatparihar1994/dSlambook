<?php
//include './package/dbconnections/alldbconnections.php';
function allconnection() {
    $allcon = new alldbconnections();
    return $allcon;
}

$con = allconnection()->connection("phpsbusers");

if ($con->connect_error) {
    header("location:login.php");
} else {
    //echo "alert('click')";
    $sql = "select * from members where userid = '$userid'";
    $result = $con->query($sql);

    if ($result->num_rows > 0) {
        if ($row = $result->fetch_assoc()) {
            if ($row["loginstatus"] === '1') {
                header("location:home.php");
            } else {
                
            }
        }
    } else {
        echo "alert('invalid')";
    }
}
?>