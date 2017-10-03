<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $phpsblikespath = $path."/dSlambook/package/details/phpsblikes.php";
            
    include_once($phpsblikespath);
    
    $userid = $_REQUEST['userid'];
    $statusid = $_REQUEST['statusid'];
    $otherid = explode("!s@!t!a$!t%!u^!s", $statusid);
    $sbphplikes = new phpsblikes();
    $sbphplikes->unlikepost($userid, $otherid[0], $statusid);
?>