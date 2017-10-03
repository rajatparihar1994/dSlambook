<?php
include './dbconnections/alldbconnections.php';
class signup {
    
    public function createcon(){
        $createcon = allconnection();
        return $createcon;
    }

    public function createuserid($fname, $lname){
        $counter;
        $phpsbusercon = $this->createcon()->connection("phpsbusers");
        $sql = "select count(*) from members";
        if($phpsbusercon->query($sql)=== TRUE)
        {
            $result= $phpsbusercon->query($sql);
            $counter = mysql_fetch_assoc($result);
        }
        else{
            $counter = 0;
        }
        $counter = $counter++;
        $fullname = $fname.$lname;
        $userid = $fullname.$counter;
        if(strpos($userid, " ")){
            $userid = str_replace(" ", "_", $userid);
        }
        return $userid;
    }
    
}
