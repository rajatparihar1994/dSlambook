<?php

echo date('zdmyhisu');
echo "<br>";

echo $milliseconds = date('dmy') . round(microtime(true) * 1000);
include './demo2.php';
include './package/dbconnections/alldbconnections.php';

class demo {
    public function createcon() {
        $allcon = new alldbconnections();
        return $allcon;
    }
    public function createobject($classname) {
        $classobj = new $classname();
        return $classobj;
    }
    public function demo2con() {
        $classobj = new demo2();
        return $classobj;
    }

    public function call() {
        $this->createobject(demo2)->methode2();
        //$this->demo2con()->methode2();
    }
    public function getstatusid($userid, $imageid) {
    $con = $this->createcon()->connection("phpsbphotos");
    $stmt = $con->prepare("SELECT statusid FROM $userid WHERE imageid = ? ");

    /* bind parameters for markers */
    $stmt->bind_param("s", $imageid);

    /* execute query */
    $stmt->execute();

    /* bind result variables */
    $stmt->bind_result($statusid);

    /* fetch value */
    $stmt->fetch();

    printf("%s is in district %s\n", $imageid, $userid);

    /* close statement */
    $stmt->close();


/* close connection */
$con->close();
}
    
}


$obj = new demo();
//$obj->call();
$obj->getstatusid("dslambook_1", "dslambook_1!i@!m#!a$!g%!e^2411151448395954747");



