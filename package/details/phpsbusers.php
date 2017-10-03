<?php
    //include './package/dbconnections/alldbconnections.php';
class phpsbusers {
    
    public function allconnection(){
        $connect = new alldbconnections();
        return $connect;
    }
    
    public function updateloginstatus($userid){
        $users = $this->allconnection()->connection("phpsbusers");
        $uploginstatuscon = "update members set loginstatus = 1 where userid = '".$userid."'";
        if($users->query($uploginstatuscon) === TRUE){
            
        }
    }
}
