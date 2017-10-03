<?php
$path = $_SERVER['DOCUMENT_ROOT'];
$alldbconnectionspath = $path."/dSlambook/package/dbconnections/alldbconnections.php";
include_once($alldbconnectionspath);

$phpsbaboutpath = $path."/dSlambook/package/details/phpsbabout.php";
include_once($phpsbaboutpath);
class phpsbstatus {

    public $userid;
    public $newstatus_check = False;

    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }

    public function phpsbphotos() {
        $connect = new phpsbphotos();
        return $connect;
    }

    public function phpsbabout() {
        $connect = new phpsbabout();
        return $connect;
    }

    function counter($userid) {
        $con = $this->createcon()->sbstatus();
        $counter = 0;
        if ($con) {
            $sql = "select * from '$userid' ";
            if ($result = $mysqli_query($con, $sql)) {
                $counter = mysqli_num_rows($result);
            }
        }
        return $counter;
    }

    public function createstatusid($userid) {
        $statusid = "";
        $time = date('dmy') . round(microtime(true) * 1000);
        $statusid = $userid . "!s@!t!a$!t%!u^!s" . $time;
        return $statusid;
    }

    public function createimageid($userid) {
        $imageid = "";
        //echo '<br>inside new imageid :- ' . $userid;
        $time = date('dmy') . round(microtime(true) * 1000);
        $imageid = $userid . "!i@!m!a$!g%!e^" . $time;
        //echo '<br> new imageid :- ' . $imageid;
        return $imageid;
    }

    public function newstatus($userid, $status, $type, $image) {
        $statuscon = $this->createcon()->sbstatus();
        if ($statuscon->connect_error) {
            die("Connection failed: " . $statuscon->connect_error);
        }
        $statusid = $this->createstatusid($userid);
        $imageid;
        if ($type === "profilepicupdate") {
            $grammer = $this->phpsbabout()->gendergrammer($userid);
            $imageid = $this->createimageid($userid);
            $content = "update $grammer profile picture";
            $ppsqlprstm = $statuscon->prepare("insert into ".$userid." (userid, statusid, imageid, content, statustype, liked, salute, date, time) values (?, ?, ?, ?, 1, 0, 0, now(), now())");
            $bind_param = $ppsqlprstm->bind_param("ssss", $userid, $statusid, $imageid, $content);
            $execute = $ppsqlprstm->execute();
            if ($execute === TRUE) {
                //echo '<br> yup its  done';
                $this->phpsbphotos()->insertphoto($userid, $statusid, $imageid, $image, "profilepicture");
            } else {
                //echo '<br> dsfadfsa ';
            }
        } else if ($type === "coverpicupdate") {
            $grammer = $this->phpsbabout()->gendergrammer($userid);
            $imageid = $this->createimageid($userid);
            $content = "update $grammer cover picture";
            $cpsql = $statuscon->prepare("insert into ".$userid." (userid, statusid, imageid, content, statustype, liked, salute, date, time) values (?, ?, ?, ?, 2, 0, 0, now(), now())");
            $cpsql_param = $cpsql->bind_param("ssss", $userid, $statusid, $imageid, $content);
            $execute = $cpsql->execute();
            if ($execute === TRUE) {
                $this->phpsbphotos()->insertphoto($userid, $statusid, $imageid, $image, "coverpicture");
            }
        } else if ($type === "postwithnoimage") {
            $grammer = $this->phpsbabout()->gendergrammer($userid);
            $imageid = "!9@i#m%a^g&e*";
            $psnisql = $statuscon->prepare("insert into ".$userid." (userid, statusid, imageid, content, statustype, liked, salute, date, time) values (?, ?, ?, ?, 3, 0, 0, now(), now())");
            $psnisql_param = $psnisql->bind_param("ssss", $userid, $statusid, $imageid, $status);
            $execute = $psnisql->execute();
            if ($execute === TRUE) {
                
            }
            
            
        } else if ($type === "postwithimage") {
            //echo 'inside post with image';
            $grammer = $this->phpsbabout()->gendergrammer($userid);
            $imageid = $this->createimageid($userid);
            $content = $status;
            $pwisql = $statuscon->prepare("insert into ".$userid." (userid, statusid, imageid, content, statustype, liked, salute, date, time) values (?, ?, ?, ?, 4, 0, 0, now(), now())");
            $pwisql_param = $pwisql->bind_param("ssss", $userid, $statusid, $imageid, $content);
            $execute = $pwisql->execute();
            if ($execute === TRUE) {
                $this->phpsbphotos()->insertphoto($userid, $statusid, $imageid, $image, "postpicture");
            }
            
        } else if ($type === "joiningpost") {
            
        }
        return $imageid;
    }
    
    public function addonelike($otherid, $statusid) {
        $statuscon = $this->createcon()->sbstatus();
        $updatequery = "update ".$otherid." set liked = liked + 1 where statusid = '".$statusid."'";
        $stmt = $statuscon->prepare($updatequery);
        $executeliked = $stmt->execute();
        if($executeliked === TRUE){}
        else {}
        $stmt->close();
    }
    
    public function removeonelike($otherid, $statusid) {
        $statuscon = $this->createcon()->sbstatus();
        $updatequery = "update ".$otherid." set liked = liked - 1 where statusid = '".$statusid."'";
        $stmt = $statuscon->prepare($updatequery);
        $executeliked = $stmt->execute();
        if($executeliked === TRUE){}
        else {}
        $stmt->close();
    }
    
     public function totallikes($userid, $statusid) {
        $totallikestatus = 0;
        $statuscon = $this->createcon()->sbstatus();
        
        $totallikestatusquery = "select * from $userid where statusid = '".$statusid."'";
        $result = $statuscon->query($totallikestatusquery);
        if($result->num_rows > 0){
            while ($row = $result->fetch_assoc()) {
            $totallikestatus = $row["liked"];
            }
        }
        else{
            $totallikestatus = 0;  
        }
        return $totallikestatus;
    }
    
    public function likestatus($userid, $statusid) {
        $likestatus = FALSE;
        $likescon = $this->createcon()->sblikes();
        $likestatusquery = "select * from $userid where statusid = '".$statusid."'";
        $result = $likescon->query($likestatusquery);
        if($result->num_rows >0){
            $likestatus = TRUE;
        }
        else{
            $likestatus = FALSE;  
        }
        return $likestatus;
    }

}
    