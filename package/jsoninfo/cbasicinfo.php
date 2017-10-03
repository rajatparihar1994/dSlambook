<?php

include_once '../package/dbconnections/alldbconnections.php';
include_once '../package/details/phpsbabout.php';
include_once '../package/details/phpsbphotos.php';
class cbasicinfo {

    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }
    public function phpsbabout() {
        $phpsbabout = new phpsbabout();
        return $phpsbabout;
    }
    public function phpsbphotos() {
        $phpsbphotos = new phpsbphotos();
        return $phpsbphotos;
    }

    public function basicinfo($userid) {
        $output = "";
        $con = $this->createcon()->connection("phpsbabout");
        $sql = "select * from aboutusers where userid = '$userid'";
        $result = $con->query($sql);
        $output ="{";
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $uuserid = $row['userid'];
                $username = $this->phpsbabout()->getName($userid);
                $userprofilepic = $this->phpsbabout()->getProfilepic($userid);
                $output.='"userid":"'.$uuserid.'",';
                $output.='"username":"'.$username.'",';
                $output.='"profilepic":"'.$userprofilepic.'"';
            }
            $output.='}';
        }
        return $output;
    }

    //put your code here
}
