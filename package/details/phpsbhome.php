<?php
    include_once "phpsbphotos.php";
    include_once 'phpsbstatus.php';
class phpsbhome {
    
    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }
    
    public function phpsbphotos() {
        $phpsbphotos = new phpsbphotos();
        return $phpsbphotos;
    }
}
