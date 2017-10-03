<?php

include_once '../../dbconnections/alldbconnections.php';
include_once '../../details/phpsbstatus.php';

function createcon() {
    $allcon = new alldbconnections();
    return $allcon;
}

function phpsbstatus() {
    $phpsbstatus = new phpsbstatus();
    return $phpsbstatus;
}
$phpsbabout = new phpsbabout();

$userid = $_REQUEST['id'];
$status = $_REQUEST['status'];
$type = "postwithnoimage";
$image = "n@!o#!i$!m%!a^!g&!e*!";
phpsbstatus()->newstatus($userid, $status, $type, $image);


$sbphpstatuscon = createcon()->sbstatus();
$query = "Select * from $userid ORDER BY counter DESC Limit 1";
$result = $sbphpstatuscon->query($query);
if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        $S_userid = $row["userid"];
        $S_statusid = $row["statusid"];
        $S_imageid = $row["imageid"];
        $S_content = $row["content"];
        $S_statustype = $row["statustype"];
        $S_liked = $row["liked"];
        $S_salute = $row["salute"];
        $S_date = $row["date"];
        $S_time = $row["time"];
        $statuslikestatus = $S_statusid."likestatus";
        $S_username = $phpsbabout->getName($S_userid);
        $S_profilepic = $phpsbabout->getProfilepic($S_userid);
        echo "<li class='media'>";
            echo "<div class='pull-left'>";
                echo "<div class='date'>$S_username</div>";
                echo "<div class='date'>$S_date</div>";
            echo "</div>";
            echo "<div class='media-body'>";
                echo "<div class='panel panel-default'>";
                    echo "<div class='panel-body'>";
                        echo "<p>$S_content</p>";
                    echo "</div>";
                    echo "<div class='row' style='padding:5px 0px 10px 15px;'>";
                        echo "<div id='$statuslikestatus'>";
                            echo "<div class='col-sm-2'>";
                                echo "<button id='$S_statusid' class='btn btn-default btn-xs icon-heart' onclick='like(this.id)'></button>";  
                            echo "</div>";
                        echo "</div>";
                        echo "<div class='col-lg-6 view-all-comments' style='background:none; border:0px;'> Total Like $S_liked</div>";
                    echo "</div>";
                    echo "<div class='view-all-comments'><a href='#'><i class='fa fa-comments-o'></i> View all</a> 10 comments</div>";
                    echo "<ul class='comments'>";
                        echo "<li>";
                            echo "<div class='media'>";
                                echo "<a href='' class='pull-left'>";
                                    echo "<img src='images/people/50/guy-5.jpg' class='media-object'>";
                                echo "</a>";
                                echo "<div class='media-body'>";
                                    echo "<a href='' class='comment-author'>Bill D.</a>";
                                    echo "<span>Hi Mary, Nice Party</span>";
                                    echo "<div class='comment-date'>21st September</div>";
                                echo "</div>";
                            echo "</div>";
                        echo "</li>";
                    echo "</ul>";
                echo "</div>";
            echo "</div>";
        echo "</li>";
    }
}

?>