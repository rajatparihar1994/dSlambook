<?php

//include "./package/dbconnections/alldbconnections.php";
class phpsbphotos {

    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }

    public function insertphoto($userid, $statusid, $imageid, $image, $imagetype) {
        $photoscon = $this->createcon()->connection("phpsbphotos");
        $insertphotosql = "insert into " . $userid . " (userid, statusid, imageid, image, imagetype) values ('" . $userid . "', '" . $statusid . "', '" . $imageid . "', '" . $image . "', '" . $imagetype . "')";
        if ($photoscon->query($insertphotosql) === TRUE) {
            echo '<br> php photos db done';
        } else {
            
        }
    }

    public function getPhoto($userid, $imageid) {
        $photoscon = $this->createcon()->connection("phpsbphotos");

        global $profilepic;
        $sql = "SELECT * FROM " . $userid . " WHERE userid = '" . $userid . "' and imageid = '" . $imageid . "' ";
        $result = $photoscon->query($sql);
        if ($result->num_rows > 0) {
            if ($row = $result->fetch_assoc()) {
                $profilepic = $row["image"];
            }
        }
        return $profilepic;
    }

    public function getstatusid($userid, $imageid) {
        $con = $this->createcon()->connection("phpsbphotos");
        $stmt = $con->prepare("SELECT statusid FROM $userid WHERE imageid = ? ");
        $stmt->bind_param("s", $imageid);
        $stmt->execute();
        $stmt->bind_result($statusid);
        $stmt->fetch();
        printf("%s is in district %s\n", $imageid, $userid);
        $stmt->close();
        $con->close();
    }

}
