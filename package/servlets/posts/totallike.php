<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $phpsblikespath = $path."/dSlambook/package/details/phpsbstatus.php";
            
    include_once($phpsblikespath);
    
    $statusid = $_REQUEST['statusid'];
    $split = explode("!s@!t!a$!t%!u^!s", $statusid);
    $otherid = $split[0];
    $sbphpstatus = new phpsbstatus();
    $totallikes = $sbphpstatus->totallikes($otherid, $statusid);
    echo $totallikes;
?>