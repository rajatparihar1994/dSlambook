<?php

$path = $_SERVER['DOCUMENT_ROOT'];
$alldbconnectionspath = $path."/dSlambook/package/dbconnections/alldbconnections.php";
include_once "phpsbphotos.php";
//include_once '../keywords/keywords.php';

class phpsbabout {

    public $userid;
    public $updateprofilepic_check = False;
    
    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }
    
    public function phpsbphotos() {
        $phpsbphotos = new phpsbphotos();
        return $phpsbphotos;
    }
    

    public function getName($userid) {
        $name;
        $con = $this->createcon()->sbabout();
        $sql = "select * from aboutusers where userid = '$userid' ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $Fname = $row["fname"];
                $Lname = $row["lname"];
            }
        }
        $fnfltr = strtoupper(substr($Fname, 0, 1));
        $fnrltr = strtolower(substr($Fname, 1));
        $name = $fnfltr . $fnrltr . " " . strtoupper(substr($Lname, 0, 1)) . ".";
        return $name;
    }
    
    public function getProfilepic($userid) {
        $profilepic;
        $imageid;
        $con = $this->createcon()->sbabout();
        $sql = "select * from aboutusers where userid = '".$userid."' ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $imageid = $row["profilepic"];
            }
        }
        $profilepic = $this->phpsbphotos()->getPhoto($userid, $imageid);
        return $profilepic;
    }

    public function gendergrammer($userid) {
        $grammer;
        $con = $this->createcon()->sbabout();
        $sql = "select * from aboutusers where userid = '$userid' ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                if ($row["gender"] === 'female') {
                    $grammer = "her";
                } else if ($row["gender"] === 'male') {
                    $grammer = "his";
                }
            }
        }
        return $grammer;
    }
    public function datemonth($date){
        $newdate;
        $date = explode("-", $date);
        switch ($date){
        case 1:
            $newdate = "January";
            break;
        
        case 2:
            $newdate = "February";
            break;
        case 3:
            $newdate = "March";
            break;
        case 4:
            $newdate = "April";
            break;
        case 5:
            $newdate = "May";
            break;
        case 6:
            $newdate = "June";
            break;
        case 7:
            $newdate = "July";
            break;
        case 8:
            $newdate = "August";
            break;
        case 9:
            $newdate = "September";
            break;
        case 10:
            $newdate = "October";
            break;
        case 11:
            $newdate = "November";
            break;
        case 12:
            $newdate = "December";
            break;
        }
        return $newdate;
    }

    public function updateprofilepic($userid, $imageid) {
        $con = $this->createcon()->sbabout();
        $sqlprestm = $con->prepare("update aboutusers set profilepic = ? where userid = ?");
        $sqlprestm->bind_param("ss", $imageid, $userid);
        $execute = $sqlprestm->execute();
        if ($execute === TRUE) {
            $this->updateprofilepic_check = TRUE;
        } else {
            $this->updateprofilepic_check = TRUE;
        }
        return $this->updateprofilepic_check;
    }

}
