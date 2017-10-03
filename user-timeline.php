
<!DOCTYPE html>
<html lang="en">
    <?php include_once './package/servlets/homepage/insertpostwithimage.php'; ?>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>dSlamBook</title>

        <!-- App Styling Bundle -->
        <link href="css/default.min.css" rel="stylesheet">
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#withimage").fadeOut();
                $(".noimage").click(function () {
                    $("#nophoto").addClass("active");
                    $("#photo").removeClass("active");
                    $("#withoutimage").fadeIn();
                    $("#withimage").fadeOut()
                });
                $(".image").click(function () {
                    $("#photo").addClass("active");
                    $("#nophoto").removeClass("active");
                    $("#withimage").fadeIn();
                    $("#withoutimage").fadeOut();
                });
            });

            $(document).ready(function () {
                $('#submitwithimage').click(function () {
                    //$("#viewimage").html('<img src="img/loading.gif" />');
                    $(".uploadformwithimage").ajaxForm({
                        //target: '#viewimage'  
                    }).submit();
                });
            });

        </script>
        <script src="js/dsbjs/dsbjs/user-timeline.js" type="text/javascript"></script>
    </head>
    <?php
    include("package\sessions\sessioncheck.php");
    include("package\other\logout.php");

    $path = $_SERVER['DOCUMENT_ROOT'];
    $insertpostwithimagepath = $path . "/dSlambook/package/servlets/home/insertpostwithimage.php";
    include_once($insertpostwithimagepath);
    $alldbconnectionspath = $path . "/dSlambook/package/dbconnections/alldbconnections.php";
    include_once($alldbconnectionspath);
    $userid = $_SESSION['userid'];
    $loginstatuscheckpath = $path . "/dSlambook/package/sessions/hloginstatuscheck.php";
    include_once($loginstatuscheckpath);
    $firsttimeupdateinfopath = $path . "/dSlambook/package/firsttimelogin/firsttimeupdateinfo.php";
    include_once($firsttimeupdateinfopath);
    $phpsbabout = new phpsbabout();
    $phpsbstatus = new phpsbstatus();
    $username = $phpsbabout->getName($userid);
    $profilepic = $phpsbabout->getProfilepic($userid);
    $alldbcon = new alldbconnections();
    $phpsbstatuscon = $alldbcon->sbstatus();
    ?>
    <body>

        <!-- Fixed navbar -->
        <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="#" data-toggle="sidebar-menu" id="toggle-sidebar-menu" class="visible-xs"><i class="fa fa-ellipsis-v"></i></a>
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a data-toggle="sidebar-chat" class="btn btn-link navbar-btn visible-xs"><i class="fa fa-comments"></i></a>
                    <a class="navbar-brand" href="home.php">dSlamBook</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">

                    </ul>
                    <style>
                        .cursor
                        {
                            cursor:pointer;
                        }

                    </style>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <a class="cursor" data-toggle="sidebar-chat">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>

                        <!-- User -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="<?php echo $profilepic; ?>" alt="Bill" class="img-" width="40" /> <?php echo $username; ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="user-private-profile.html">Profile</a>
                                </li>
                                <li><a href="user-private-messages.html">Messages</a>
                                </li>
                                <li><a href="?logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
            </div>
        </div>
        <div class="sidebar left hidden-xs">
            <div data-scrollable>
                <div class="sidebar-block">
                    <div class="profile">
                        <img src="<?php echo $profilepic; ?>" alt="people" class="img-circle img-responsive" />
                        <h4><?php echo $username; ?></h4>
                    </div>
                </div>
                <div id="menu">
                    <ul>

                        <li class="">
                            <a href="user-timeline.php"><i class="icon-user-1"></i> Timeline</a>
                        </li>
                        <li class="">
                            <a href="user-friend.html"><i class="fa fa-group"></i> Friends <span class="badge">124</span></a>
                        </li>
                        <li class="">
                            <a href="user-private-messages.html"><i class="fa fa-comments"></i> Message</a>
                        </li>       
                        <li class="">
                            <a href="user-private-messages.html"><i class="fa fa-book"></i> SlamBook</a>
                        </li>
                    </ul>
                    <div class="sidebar-block">
                        <div class="category">Photos</div>
                        <div class="sidebar-photos">
                            <ul>
                                <li>
                                    <a href="#">
                                        <img src="images/place1.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/place2.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/place3.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/food1.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/food1.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/place3.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/place2.jpg" alt="people" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/place1.jpg" alt="people" />
                                    </a>
                                </li>
                            </ul>
                            <a href="user-photo.html" class="btn btn-primary btn-xs">view all</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="sidebar right">
            <div class="chat-search">
                <input type="text" class="form-control" placeholder="Search" />
            </div>
            <ul class="chat-filter nav nav-pills ">
                <li class="active"><a href="#" data-target="li">All</a>
                </li>
                <li><a href="" data-target=".online">Online</a>
                </li>
                <li><a href="" data-target=".offline">Offline</a>
                </li>
            </ul>
            <ul class="chat-contacts">
                <li class="online" data-user-id="1">
                    <a href="">
                        <div class="media">
                            <div class="pull-left">
                                <span class="status"></span>
                                <img src="images/people/110/guy-6.jpg" width="40" class="img-circle" />
                            </div>
                            <div class="media-body">
                                <div class="contact-name">Jonathan S.</div>
                                <small>"Free Today"</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="online away" data-user-id="2">
                    <a href="#">
                        <div class="media">
                            <div class="pull-left">
                                <span class="status"></span>
                                <img src="images/people/110/woman-5.jpg" width="40" class="img-circle" />
                            </div>
                            <div class="media-body">
                                <div class="contact-name">Mary A.</div>
                                <small>"Feeling Groovy"</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="online" data-user-id="3">
                    <a href="#">
                        <div class="media">
                            <div class="pull-left">
                                <span class="status"></span>
                                <img src="images/people/110/guy-3.jpg" width="40" class="img-circle" />
                            </div>
                            <div class="media-body">
                                <div class="contact-name">Adrian D.</div>
                                <small>Busy</small>
                            </div>
                        </div>
                    </a>
                </li>
                <li class="offline" data-user-id="4">
                    <a href="#">
                        <div class="media">
                            <div class="pull-left">
                                <img src="images/people/110/woman-6.jpg" width="40" class="img-circle" />
                            </div>
                            <div class="media-body">
                                <div class="contact-name">Michelle S.</div>
                                <small>Offline</small>
                            </div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
        <script id="chat-window-template" type="text/x-handlebars-template">
            <div class="panel panel-default">
            <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-Username">
            <a href="#" class="close"><i class="fa fa-times"></i></a>
            <a href="#">
            <img src="{{ user_image }}" width="40" class="pull-left">
            <span class="contact-name">{{user}}</span>
            </a>
            </div>
            <div class="panel-body" id="chat-bill">
            <div class="media">
            <div class="pull-left">
            <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
            <span class="message">Feeling Groovy?</span>
            </div>
            </div>
            <div class="media right">
            <div class="pull-right">
            <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
            <span class="message">Yep.</span>
            </div>
            </div>
            <div class="media">
            <div class="pull-left">
            <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
            <span class="message">This chat window looks amazing.</span>
            </div>
            </div>
            <div class="media right">
            <div class="pull-right">
            <img src="{{ user_image }}" width="25" class="img-circle" alt="people" />
            </div>
            <div class="media-body">
            <span class="message">Thanks!</span>
            </div>
            </div>
            </div>
            <input type="text" class="form-control" placeholder="Type message..." />
            </div>
        </script>
        <div class="chat-window-container"></div>
        <div id="content">
            <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
                <div class="container-fluid">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="fa fa-ellipsis-h"></span>
                        </button>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="subnav">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="index.html"><i class="fa fa-fw icon-ship-wheel"></i> Timeline</a>
                            </li>
                            <li><a href="user-about.php"><i class="fa fa-fw icon-user-1"></i> About</a>
                            </li>
                            <li><a href="user-public-users.html"><i class="fa fa-fw fa-users"></i> Friends</a>
                            </li>
                            <li class="dropdown pull-right">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li class="dropdown-header">Public User Pages</li>
                                    <li class="active"><a href="index.html">Add Friend</a>
                                    </li>
                                    <li><a href="user-public-profile.html">Send Slam</a>
                                    </li>
                                    <li><a href="user-public-users.html">Un friend</a>
                                    </li>
                                    <li><a href="user-private-messages.html">See Slam</a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right hidden-xs">
                            <li><a href="#" data-toggle="chat-box">Chat <i class="fa fa-fw fa-comment-o"></i></a>
                            </li>
                        </ul>
                    </div>

                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="container-fluid">
                <div class="cover overlay">
                    <img src="images/profile-cover.jpg" alt="cover" />
                    <a href="#" class="btn btn-cover"><i class="fa fa-pencil fa-fw"></i></a>
                </div>
                <div class="row">
                    <div class="col-md-9">
                        <ul class="timeline-list">
                            <li class="media">
                                <div class="pull-left">
                                    <img src="<?php echo $profilepic; ?>" alt="people" class="img-circle" width="50" />
                                    <div class="date"><?php echo $username; ?></div>
                                </div>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-8"  style="width:100%">
                                            <div class="panel panel-default share"  style="width:87%">
                                                <div class="panel-heading panel-heading-gray title">
                                                    What&acute;s new
                                                </div>
                                                <!--<ul class="nav nav-tabs">
                                                    <li id="photo" class="active"><a href="#" class="noimage"><span class="fa fa-comment "></span></a></li>
                                                    <li id="nophoto" class=""><a href="#"  ><span class="fa fa-photo "></span></a></li>
                                                </ul>-->
                                                <div id="withoutimage">
                                                    <div class="panel-body"  style="width:100%">
                                                        <textarea name="status" id="statuswoi" class="form-control share-text" rows="3" placeholder="Share your status..." style="resize:vertical; width:100%;"></textarea>
                                                        <input id="yid" type="hidden" name="userid" value="<?php echo $userid; ?>">
                                                    </div>
                                                    <div class="panel-footer share-buttons">
                                                        <!--<a href="#" class="noimage">
                                                            <i class="fa fa-edit"></i>
                                                        </a>
                                                        <a href="#" class="image">
                                                            <i class="fa fa-photo"></i>
                                                        </a>-->
                                                        <button type="submit" onclick="javascript:postwithoutimage();" id="submitwithoutimage" class="btn btn-primary btn-xs pull-right display-none">Post</button>
                                                    </div>
                                                    <div id="ckhdone"></div>
                                                </div>
                                                <!--<div id="withimage">
                                                    <form class="uploadformwithimage" action="#" method="post" enctype="multipart/form-data" >
                                                        <div class="panel-body" id="withimage" style="width:100%">
                                                            <textarea name="status" class="form-control share-text" rows="3" placeholder="Share your status..." style="resize:vertical; width:100%;"></textarea>
                                                            <input id="yid" type="hidden" name="userid" value="<?php //echo $userid;  ?>">
                                                            <input type="file" name="postimage">0
                                                        </div>
                                                        <div class="panel-footer share-buttons">
                                                            <a href="#" class="noimage">
                                                                <i class="fa fa-edit"></i>
                                                            </a>
                                                            <a href="#" class="image">
                                                                <i class="fa fa-photo"></i>
                                                            </a>
                                                            <button type="submit" name="submitwithimage" class="btn btn-primary btn-xs pull-right display-none" >Post</button>
                                                        </div>
                                                    </form>
                                                </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <div id="statusdiv">
                                <?php
                                $query = "Select * from $userid ORDER BY counter DESC";
                                $statusresult = $phpsbstatuscon->query($query);
                                if ($statusresult->num_rows > 0) {
                                    while ($row = $statusresult->fetch_assoc()) {
                                        $S_userid = $row["userid"];
                                        $S_statusid = $row["statusid"];
                                        $S_imageid = $row["imageid"];
                                        $S_content = $row["content"];
                                        $S_statustype = $row["statustype"];
                                        $S_liked = $row["liked"];
                                        $S_salute = $row["salute"];
                                        $S_date = $row["date"];
                                        $S_time = $row["time"];
                                        $S_username = $phpsbabout->getName($S_userid);
                                        $S_profilepic = $phpsbabout->getProfilepic($S_userid);
                                        $S_likestatus = $phpsbstatus->likestatus($S_userid, $S_statusid);
                                        ?>
                                        <li class="media">
                                            <div class="pull-left">
                                                <div></div>
                                                <div class="date"><?php echo $S_date; ?></div>
                                            </div>
                                            <div class="media-body">
                                                <div class="panel panel-default">
                                                    <div class="panel-body">
                                                        <p><?php echo $S_content; ?></p>
                                                    </div>
                                                    <div class="row" style="padding:5px 0px 10px 15px;">
                                                        <div id="<?php echo $S_statusid; ?>likestatus">
                                                            <div class="col-sm-2">
                                                                <?php //echo "<p>status ".$S_likestatus."</p>";?>
                                                                <?php
                                                                if ($S_likestatus === FALSE) {
                                                                    echo "<button id='" . $S_statusid . "' class='btn btn-default btn-xs icon-heart' onclick = 'like(this.id)'></button>";
                                                                } else {
                                                                    echo "<button id='" . $S_statusid . "' style='color:#37474F;' class='btn btn-primary btn-xs icon-heart-fill' onclick = 'unlike(this.id)'></button>";
                                                                }
                                                                ?>

                                                            </div>
                                                        </div>
                                                        <div id="<?php echo $S_statusid; ?>totallike" class="col-lg-6 view-all-comments" style="background:none; border:0px;">
                                                            Total Like <?php echo $S_liked; ?>
                                                        </div>
                                                    </div>
                                                    <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                                                    <ul class="comments">
                                                        <li>
                                                            <div class="media">
                                                                <a href="" class="pull-left">
                                                                    <img src="images/people/50/guy-5.jpg" class="media-object">
                                                                </a>
                                                                <div class="media-body">
                                                                    <a href="" class="comment-author">Bill D.</a>
                                                                    <span>Hi Mary, Nice Party</span>
                                                                    <div class="comment-date">21st September</div>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </div>

                            <li class="media">
                                <div class="pull-left">
                                    <img src="images/people/110/guy-5.jpg" alt="people" class="img-circle" width="80" />
                                    <div class="date">Username</div>
                                    <div class="date">3 OCT</div>
                                </div>
                                <div class="media-body">
                                    <div class="row">
                                        <div class="col-md-10 col-lg-8">
                                            <div class="panel panel-default">
                                                <img src="<?php echo $profilepic; ?>" class="img-responsive">
                                                <ul class="comments">
                                                    <li>
                                                        <div class="media">
                                                            <a href="" class="pull-left">
                                                                <img src="images/people/50/woman-5.jpg" class="media-object">
                                                            </a>
                                                            <div class="media-body">
                                                                <a href="" class="comment-author">Mary</a>
                                                                <span>Wow</span>
                                                                <div class="comment-date">2 days</div>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li class="comment-form">
                                                        <div class="input-group">
                                                            <input type="text" class="form-control" />
                                                            <span class="input-group-addon">
                                                                <a href=""><i class="fa fa-photo"></i></a>
                                                            </span>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left">
                                    <img src="images/people/110/woman-5.jpg" alt="people" class="img-circle" width="80" />
                                    <div class="date">20 JUN</div>
                                </div>
                                <div class="media-body" id="june">
                                    <div class="panel panel-default profile">
                                        <div class="cover-container">
                                            <img src="images/place1-full.jpg" alt="place" class="img-responsive" />
                                        </div>
                                        <div class="info">
                                            <h4>Adrian Demian</h4>
                                            <p>User Interface Designer</p>
                                        </div>
                                        <img src="images/people/110/guy-6.jpg" alt="people" class="img-circle avatar" />
                                        <div class="profile-icons">
                                            <span><i class="fa fa-users"></i> 372</span> <span><i class="fa fa-photo"></i> 43</span> <span><i class="fa fa-video-camera"></i> 3 </span>
                                        </div>
                                        <a href="#" class="btn btn-brand-primary pull-right"><i class="fa fa-comment"></i></a>
                                    </div>
                                </div>
                            </li>
                            <li class="media">
                                <div class="pull-left">
                                    <img src="images/people/110/woman-5.jpg" alt="people" class="img-circle" width="80" />
                                    <div class="date">3 MAY</div>
                                </div>
                                <div class="media-body">
                                    <div class="panel panel-default">
                                        <div class="panel-body">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad blanditiis perspiciatis praesentium quaerat repudiandae soluta? Cum doloribus esse et eum facilis impedit officiis omnis optio, placeat, quia quo reprehenderit sunt velit? Asperiores cumque deserunt eveniet hic reprehenderit sit, ut voluptatum?</p>
                                        </div>
                                        <div class="view-all-comments"><a href="#"><i class="fa fa-comments-o"></i> View all</a> 10 comments</div>
                                        <ul class="comments">
                                            <li>
                                                <div class="media">
                                                    <a href="" class="pull-left">
                                                        <img src="images/people/50/woman-5.jpg" class="media-object">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="" class="comment-author">Mary</a>
                                                        <span>Thanks Bill</span>
                                                        <div class="comment-date">2 days</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="media">
                                                    <a href="" class="pull-left">
                                                        <img src="images/people/50/guy-5.jpg" class="media-object">
                                                    </a>
                                                    <div class="media-body">
                                                        <a href="" class="comment-author">Bill D.</a>
                                                        <span>What time did it finish?</span>
                                                        <div class="comment-date">14 min</div>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="comment-form">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" />
                                                    <span class="input-group-addon">
                                                        <a href=""><i class="fa fa-photo"></i></a>
                                                    </span>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </li>

                        </ul>
                    </div>
                    <div class="col-md-3">
                        <div data-spy="affix" data-offset-top="318" data-offset-bottom="100">
                            <div id="scroll-spy">
                                <ul class="nav timeline-months">
                                    <li class="active"><a href="#october"><i class="fa fa-calendar fa-fw"></i>October</a>
                                    </li>
                                    <li><a href="#september"><i class="fa fa-calendar fa-fw"></i>September</a>
                                    </li>
                                    <li><a href="#august"><i class="fa fa-calendar fa-fw"></i>August</a>
                                    </li>
                                    <li><a href="#july"><i class="fa fa-calendar fa-fw"></i>July</a>
                                    </li>
                                    <li><a href="#june"><i class="fa fa-calendar fa-fw"></i>June</a>
                                    </li>
                                    <li><a href="#may"><i class="fa fa-calendar fa-fw"></i>May</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer -->

            <!-- // Footer -->
        </div>

        <!-- // Content -->

        <!-- Vendor Scripts Bundle --><script src="js/vendor.min.js"></script>

        <!-- App Scripts Bundle -->
        <script src="js/scripts.min.js"></script>
    </body>
</html>