<?php
    $cmd = $_GET['cmd'];
    $userid = $_GET['userid'];
    include '../package/jsoninfo/cbasicinfo.php';
    
    $basicinfo = new cbasicinfo();
    
    if($cmd === "basicinfo")
    {
        echo $basicinfo->basicinfo($userid);
    }
?>