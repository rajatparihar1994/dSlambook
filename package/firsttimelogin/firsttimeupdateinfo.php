<?php
include_once './package/details/phpsbusers.php';
include_once './package/details/phpsbabout.php';
include_once './package/details/phpsbstatus.php';
$allcon = new alldbconnections();

$phpsbstatuscon = new phpsbstatus();
$phpsbuserscon = new phpsbusers();
$phpsbaboutcon = new phpsbabout();

if (isset($_REQUEST['updateinfo'])) {
    $userid = $_REQUEST['userid'];
    $day = $_REQUEST['day'];
    $month = $_REQUEST['month'];
    $year = $_REQUEST['year'];
    $gender = $_REQUEST['gender'];
    $intrestedin = $_REQUEST['intrestedin'];
    $relationshipstatus = $_REQUEST['relationshipstatus'];
    $languages = $_REQUEST['languages'];
    $religion = $_REQUEST['religion'];
    $aboutyou = $_REQUEST['aboutyou'];
    echo '<scrip> alert("inside update page"); </script> ';
    $con = $allcon->connection("phpsbabout");
    $dob = $day . "-" . $month . "-" . $year;
    
    $_sqlpstm = $con->prepare("update aboutusers set  dob = ?, gender = ?, intrestedin = ?, relationshipstatus =  ?, language = ?, religion =  ?, aboutyou =  ? where userid =  ? "); 
    $bind_sqlpstm = $_sqlpstm->bind_param( "ssssssss", $dob, $gender, $intrestedin, $relationshipstatus, $languages, $religion, $aboutyou, $userid);
    include_once './package/other/insertphoto.php';
    $insertphotodetails = array();
    $insertphotodetails = checkimgae($userid);
    echo $insertphotodetails[0]."  ";
    if ($insertphotodetails[0] === "Okcheck") {
        echo 'after Okcheck  ';
        $execute = $_sqlpstm->execute();
        if ($execute === TRUE) {
            echo 'after _sql done';
            $image;
            $image = $insertphotodetails[1];
            echo $image;
            $imageid = $phpsbstatuscon->newstatus($userid, "", "profilepicupdate", $image);
            echo $imageid.'inside firsttimeupdateinfo';
            $phpsbuserscon->updateloginstatus($userid);
            $updateprofilepic_check = $phpsbaboutcon->updateprofilepic($userid, $imageid);
            if($updateprofilepic_check === TRUE){
                header("location:home.php");
            }
            else{
                echo "Something wronge";
            }
        }
        else{
            echo 'not d0noe iht qurety';
        }
    }


    //$basicinfoupdate = new firstbasicentries();
    //$basicinfoupdate->updateabout($userid, $day, $month, $year, $gender, $intrestedin, $relationshipstatus, $language, $religion, $aboutyou);
}
?>