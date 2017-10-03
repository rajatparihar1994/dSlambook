<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $insertpostwithimagepath = $path."/dSlambook/package/servlets/homepage/insertpostwithimage.php";
    include_once($insertpostwithimagepath);
    $alldbconnectionspath = $path."/dSlambook/package/dbconnections/alldbconnections.php";
    include_once($alldbconnectionspath);
    $userid = $_SESSION['userid'];
    $loginstatuscheckpath = $path."/dSlambook/package/sessions/hloginstatuscheck.php";
    include_once($loginstatuscheckpath);
    $firsttimeupdateinfopath = $path."/dSlambook/package/firsttimelogin/firsttimeupdateinfo.php";
    include_once($firsttimeupdateinfopath);
?>