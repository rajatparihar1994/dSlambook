<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>Social Network Template</title>

        <!-- App Styling Bundle -->
        <link href="css/default.min.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
    </head>
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
                    <a class="navbar-brand" href="index.html">Social 3</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="main-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="../index.html">Themes</a>
                        </li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="dropdown-header">Public User Pages</li>
                                <li><a href="index.html">Timeline</a>
                                </li>
                                <li><a href="user-public-profile.html">About</a>
                                </li>
                                <li><a href="user-public-users.html">Friends</a>
                                </li>
                                <li class="dropdown-header">Private User Pages</li>
                                <li><a href="user-private-messages.html">Messages</a>
                                </li>
                                <li class="active"><a href="user-private-profile.html">Profile</a>
                                </li>
                                <li><a href="user-private-timeline.html">Timeline</a>
                                </li>
                                <li><a href="user-private-users.html">Friends</a>
                                </li>
                            </ul>
                        </li>
                        <li><a href="buttons.html">UI Components</a>
                        </li>
                        <li data-toggle="tooltip" data-placement="bottom" title="A few Color Examples. Download includes CSS Files for all color examples & the tools to Generate any Color combination. This Color-Switcher is for previewing purposes only.">
                            <ul class="skins">
                                <li><span data-skin="default" style="background: #16ae9f "></span>
                                </li>
                                <li><span data-skin="orange" style="background: #e74c3c "></span>
                                </li>
                                <li><span data-skin="blue" style="background: #4687ce "></span>
                                </li>
                                <li><span data-skin="purple" style="background: #af86b9 "></span>
                                </li>
                                <li><span data-skin="brown" style="background: #c3a961 "></span>
                                </li>
                                <li><span data-skin="default-nav-inverse" style="background: #242424 "></span>
                                </li>
                            </ul>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li class="hidden-xs">
                            <a href="#" data-toggle="sidebar-chat">
                                <i class="fa fa-comments"></i>
                            </a>
                        </li>

                        <!-- User -->
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li class="active"><a href="user-private-profile.html">Profile</a>
                                </li>
                                <li><a href="user-private-messages.html">Messages</a>
                                </li>
                                <li><a href="login.html">Logout</a>
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
                        <img src="images/people/110/guy-5.jpg" alt="people" class="img-circle" />
                        <h4>Bill S.</h4>
                    </div>
                </div>
                <div id="menu">
                    <ul>
                        <li class="category">Account</li>
                        <li class=" active ">
                            <a href="user-private-profile.html"><i class="icon-user-1"></i> Edit Profile</a>
                        </li>
                        <li class="">
                            <a href="user-private-users.html"><i class="fa fa-group"></i> Manage Friends</a>
                        </li>
                        <li class="">
                            <a href="user-private-messages.html"><i class="icon-comment-fill-1"></i> Messages</a>
                        </li>
                        <li><a href="login.html"><i class="icon-unlock-fill"></i> Logout</a>
                        </li>
                    </ul>
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
                <li><a href="#" data-target=".online">Online</a>
                </li>
                <li><a href="#" data-target=".offline">Offline</a>
                </li>
            </ul>
            <ul class="chat-contacts">
                <li class="online" data-user-id="1">
                    <a href="#">
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
            <div class="panel-heading" data-toggle="chat-collapse" data-target="#chat-bill">
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
                            <li><a href="user-private-timeline.html"><i class="fa fa-fw icon-ship-wheel"></i> My Timeline</a>
                            </li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="login.html"> Logout<i class="fa fa-fw fa-sign-out"></i></a>
                            </li>
                        </ul>
                    </div>

                    <!-- /.navbar-collapse -->
                </div>
            </nav>
            <div class="container-fluid">
                <div class="panel panel-default">
                    <ul class="nav nav-tabs" role="tablist">
                        <li class="active"><a href="#home" role="tab" data-toggle="tab"><i class="fa fa-picture-o"></i> Photos</a>
                        </li>
                        <li class=""><a href="#profile" role="tab" data-toggle="tab"><i class="fa fa-folder"></i> Albums</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade active in" id="home">
                            <img src="images/place1.jpg" alt="image" />
                            <img src="images/place2.jpg" alt="image" />
                            <img src="images/food1.jpg" alt="image" />
                        </div>
                        <div class="tab-pane fade" id="profile">
                            <p>Food truck fixie locavore, accusamus mcsweeney's marfa nulla single-origin coffee squid. Exercitation +1 labore velit, blog sartorial PBR leggings next level wes anderson artisan four loko farm-to-table craft beer twee. Qui photo booth letterpress, commodo enim craft beer mlkshk aliquip jean shorts ullamco ad vinyl cillum PBR. Homo nostrud organic, assumenda labore aesthetic magna delectus mollit. Keytar helvetica VHS salvia yr, vero magna velit sapiente labore stumptown. Vegan fanny pack odio cillum wes anderson 8-bit, sustainable jean shorts beard ut DIY ethical culpa terry richardson biodiesel. Art party scenester stumptown, tumblr butcher vero sint qui sapiente accusamus tattooed echo park.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown1">
                            <p>Etsy mixtape wayfarers, ethical wes anderson tofu before they sold out mcsweeney's organic lomo retro fanny pack lo-fi farm-to-table readymade. Messenger bag gentrify pitchfork tattooed craft beer, iphone skateboard locavore carles etsy salvia banksy hoodie helvetica. DIY synth PBR banksy irony. Leggings gentrify squid 8-bit cred pitchfork. Williamsburg banh mi whatever gluten-free, carles pitchfork biodiesel fixie etsy retro mlkshk vice blog. Scenester cred you probably haven't heard of them, vinyl craft beer blog stumptown. Pitchfork sustainable tofu synth chambray yr.</p>
                        </div>
                        <div class="tab-pane fade" id="dropdown2">
                            <p>Trust fund seitan letterpress, keytar raw denim keffiyeh etsy art party before they sold out master cleanse gluten-free squid scenester freegan cosby sweater. Fanny pack portland seitan DIY, art party locavore wolf cliche high life echo park Austin. Cred vinyl keffiyeh DIY salvia PBR, banh mi before they sold out farm-to-table VHS viral locavore cosby sweater. Lomo wolf viral, mustache readymade thundercats keffiyeh craft beer marfa ethical. Wolf salvia freegan, sartorial keffiyeh echo park vegan.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                <i class="fa fa-info-circle"></i> Basic
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled profile-about">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Date of Birth</span>
                                            </div>
                                            <div class="col-sm-8">12 January 1990</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Gender</span>
                                            </div>
                                            <div class="col-sm-8">Specialist</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Intrested In</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Relationship</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Language</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Religion</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <!--Friends -->
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-primary btn-xs pull-right">Add <i class="fa fa-plus"></i></a>
                                <i class="icon-user-1"></i> Friends
                            </div>
                            <ul class="list-unstyled friends-list">
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/woman-3.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-2.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-9.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/woman-9.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-4.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-1.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/woman-4.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="images/people/110/guy-6.jpg" alt="image" class="img-responsive" />
                                    </a>
                                </li>
                                <li>
                                    <br>
                                    <a href="#">
                                        <h3 class="text-online text-muted text-center">More <h3/>
                                    </a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                <i class="fa fa-info-circle"></i> Contact
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled profile-about">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Email</span>
                                            </div>
                                            <div class="col-sm-8">Email Id</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Mobile No.</span>
                                            </div>
                                            <div class="col-sm-8">Mobile no,</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Lives In</span>
                                            </div>
                                            <div class="col-sm-8">City name</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Relationship</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                <i class="fa fa-info-circle"></i> More 
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled profile-about">
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">About you</span>
                                            </div>
                                            <div class="col-sm-8">12 January 1990</div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="row">
                                            <div class="col-sm-4"><span class="text-muted">Religious View</span>
                                            </div>
                                            <div class="col-sm-8">Male</div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                <i class="fa fa-info-circle"></i> Education
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Agrawal Junior College</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">From 2010 to 2012</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">High School</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Sacread Heart Higher Secondary School</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">From 2012 to 2013</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">High School</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>    
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Kendriya Vidyalaya Dewas</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">From 2006 to 2010</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">From Class 7th to 10th</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading panel-heading-gray">
                                <a href="#" class="btn btn-white btn-xs pull-right"><i class="fa fa-pencil"></i></a>
                                <i class="fa fa-info-circle"></i> Work
                            </div>
                            <div class="panel-body">
                                <div class="col-md-12">
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Play 360</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">From Sep, 2010 to Present</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-muted h5">Work as a Web Developer </span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Sacread Heart Higher Secondary School</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">From 2012 to 2013</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">High School</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>    
                                    </div>
                                    <div class="col-md-6">
                                        <ul class="list-unstyled profile-about">
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-12"><span class="text-inverse h4">Kendriya Vidyalaya Dewas</span>
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">From 2006 to 2010</span>
                                                    </div>
                                            </li>
                                            <li>
                                                <div class="row">
                                                    <div class="col-sm-4"><span class="text-muted h5">From Class 7th to 10th</span>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
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