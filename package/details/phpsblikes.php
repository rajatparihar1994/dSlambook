<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$alldbconnectionspath = $path."/dSlambook/package/dbconnections/alldbconnections.php";
$phpsbstatuspath = $path."/dSlambook/package/details/phpsbstatus.php";
include_once($alldbconnectionspath);
include_once($phpsbstatuspath);

class phpsblikes {

    function createcon() {
        $allconnection = new alldbconnections();
        return $allconnection;
    }

    function phpsbstatus() {
        $phpsbstatus = new phpsbstatus();
        return $phpsbstatus;
    }

    function likepost($userid, $otherid, $statusid) {
        $phpsblikescon = $this->createcon()->sblikes();
        $query = "insert into $userid (userid, otheruserid, statusid, date) values (?, ?, ?, now())";
        $likeprep = $phpsblikescon->prepare($query);
        $likeprep->bind_param("sss", $userid, $otherid, $statusid);
        $execute = $likeprep->execute();
        if ($execute === true) {
            $this->phpsbstatus()->addonelike($otherid, $statusid);
        }
    }
    
    function unlikepost($userid, $otherid, $statusid) {
        $phpsblikescon = $this->createcon()->sblikes();
        $query = "delete from $userid where statusid = ?";
        $unlikeprep = $phpsblikescon->prepare($query);
        $unlikeprep->bind_param("s",$statusid);
        $execute = $unlikeprep->execute();
        if ($execute === true) {
            $this->phpsbstatus()->removeonelike($otherid, $statusid);
        }
    }

    //put your code here
}
