<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>dSlamBook</title>

        <!-- App Styling Bundle -->
        <link href="css/default.min.css" rel="stylesheet">
        <link href="css/default.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]><script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
            <![endif]-->
        <style>
            .margin-10{
                margin:10px;
            }
            .margin-left{
                margin-left:10px;}
            </style>
        </head>
        <body>
            <?php
            
                include("package\sessions\sessioncheck.php");
                include("package\other\logout.php");
                
                include './package/dbconnections/alldbconnections.php';
                $userid = $_SESSION['userid'];
                include ("./package/sessions/ftloginstatuscheck.php");
                include './package/firsttimelogin/firsttimeupdateinfo.php';
                $phpsbabout = new phpsbabout();
                
                $username = $phpsbabout->getName($userid);
                
            ?>
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
                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                                <img src="images/defaultpp.icon" alt="Bill" class="img-circle" width="40" /> <?php echo $username; ?> <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="?logout">Logout</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>

                <!-- /.navbar-collapse -->
            </div>
        </div>
       <!-- <div class="sidebar left hidden-xs"></div>-->
        <div id="content">
            <div class="container-fluid">
                <h1>About you</h1>
                <div class="panel panel-default">
                    <div class="panel-heading panel-heading-gray">
                        Basic Infomation
                    </div>
                    <br>
                    <form action="#" method="post"  enctype="multipart/form-data">
                        <div class="row"> <!--Row Start--->
                            <div class="col-md-4">  <!--Profile Pic Update Start-->
                                <div class="media margin-10">
                                    <div class="profile">
                                        <div class="thumbnail">
                                            <br/><img src="images/defaultpp.icon" alt="people" width="200" class="img-relative" /><br/>
                                        </div>
                                        <input type="file" class="form-control" name="photo" id="inputEmail3" placeholder="Type here..">
                                    </div>
                                </div>
                            </div><!--Profile Pic Update Close-->
                            <div class="col-md-8"><!--Left information panel Update Start-->
                                <div class="panel panel-default">
                                    <div class="panel-body">
                                        <div class="row  panel-heading panel-heading-white"><!--Birthday Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Birthday</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-3" >
                                                    <select id="day" name="day" class="selectpicker margin-left" selected="1"><option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option><option value="21">21</option><option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option><option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option><option value="30">30</option><option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4 margin-left">
                                                    <select id="month" name="month" class="selectpicker" data-style="btn-white"  data-size="5">
                                                        <option value="1">Jan</option><option value="2">Feb</option><option value="3">Mar</option><option value="4">Apr</option><option value="5">May</option><option value="6">Jun</option><option value="7">Jul</option><option value="8">Aug</option><option value="9">Sept</option><option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <select id="year" name="year"  class="margin-left selectpicker" data-style="btn-white">
                                                        <option value="2015">2015</option><option value="2014">2014</option><option value="2013">2013</option><option value="2012">2012</option><option value="2011">2011</option><option value="2010">2010</option><option value="2009">2009</option><option value="2008">2008</option><option value="2007">2007</option><option value="2006">2006</option><option value="2005">2005</option><option value="2004">2004</option><option value="2003">2003</option><option value="2002">2002</option><option value="2001">2001</option><option value="2000">2000</option><option value="1999">1999</option><option value="1998">1998</option><option value="1997">1997</option><option value="1996">1996</option><option value="1995">1995</option><option value="1994">1994</option><option value="1993">1993</option><option value="1992">1992</option><option value="1991">1991</option><option value="1990">1990</option><option value="1989">1989</option><option value="1988">1988</option><option value="1987">1987</option><option value="1986">1986</option><option value="1985">1985</option><option value="1984">1984</option><option value="1983">1983</option><option value="1982">1982</option><option value="1981">1981</option><option value="1980">1980</option><option value="1979">1979</option><option value="1978">1978</option><option value="1977">1977</option><option value="1976">1976</option><option value="1975">1975</option><option value="1974">1974</option><option value="1973">1973</option><option value="1972">1972</option><option value="1971">1971</option><option value="1970">1970</option><option value="1969">1969</option><option value="1968">1968</option><option value="1967">1967</option><option value="1966">1966</option><option value="1965">1965</option><option value="1964">1964</option><option value="1963">1963</option><option value="1962">1962</option><option value="1961">1961</option><option value="1960">1960</option><option value="1959">1959</option><option value="1958">1958</option><option value="1957">1957</option><option value="1956">1956</option><option value="1955">1955</option><option value="1954">1954</option><option value="1953">1953</option><option value="1952">1952</option><option value="1951">1951</option><option value="1950">1950</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--Birthday Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--Gender Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Gender</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <select id="gender" name="gender" class="selectpicker" data-style="btn-white"  data-size="5">
                                                        <option value="female">Female</option>
                                                        <option value="male">Male</option>
                                                    </select>
                                                    
                                                </div>
                                            </div>
                                        </div><!--Gender Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--Relationship Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Relationship Status</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <select name="relationshipstatus" id="relationshipstatus" class="selectpicker" data-style="btn-white"  data-size="5">
                                                        <option value="Single">Single</option> 
                                                        <option value="Married">Married</option>
                                                        <option value="In a relationship">In a relationship</option>
                                                        <option value="It's complicated">It's complicated</option>
                                                    </select>
                                                    <input id="yid" type="hidden" name="userid" value="<?php echo $userid; ?>">
                                                </div>
                                            </div>
                                        </div><!--Relationship Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--Intrested in Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Intrested In</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <select name="intrestedin" id="intrestedin" class="selectpicker" data-style="btn-white"  data-size="5">
                                                        <option value="Men">Men</option>
                                                        <option value="Women">Women</option>
                                                        <option value="Men and Women">Men and Women</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div><!--Intrested in Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--Languages Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Languages</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <input type="text" class="form-control" id="language" name="languages" placeholder="Languages...">
                                                </div>
                                            </div>
                                        </div><!--Languages Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--Religious Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">Religion</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <input type="text" class="form-control" id="religious" name="religion" placeholder="Religious Views....">
                                                </div>
                                            </div>
                                        </div><!--Religious Close--->
                                        <div class="row  panel-heading panel-heading-white"><!--About you Start--->
                                            <div class="col-md-2">
                                                <label class="control-label" for="inputSuccess1">About you</label>
                                            </div>
                                            <div class="col-md-10" >
                                                <div class="col-md-12" >
                                                    <textarea id="aboutyou"  name="aboutyou" class="form-control" rows="3" placeholer="About you..." style="resize:none;"></textarea>
                                                </div>
                                            </div>
                                        </div><!--About you Close--->
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-2 pull-right">
                                        <input type="submit" name="updateinfo" class="btn btn-primary"/>
                                    </div>
                                </div>
                                <hr>
                            </div><!--Left information panel Update Close-->
                        </div><!--Row Close-->
                    </form>
                </div>
            </div>
        </div>
        <!-- Footer -->

        <!-- // Footer -->
    </div>

    <!-- Vendor Scripts Bundle -->
    <script src="js/vendor.min.js"></script>

    <!-- App Scripts Bundle -->
    <script src="js/scripts.min.js"></script>
</body>
</html>