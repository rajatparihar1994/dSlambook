<?php
    include_once '../package/dbconnections/alldbconnections.php';
    include_once '../package/details/phpsbstatus.php';
    $alldbconnection = new alldbconnections();
    $consbstatus = $alldbconnection->sbstatus();
    
    $phpstatus = new $phpsbstatus();
    
    $ppst
    
?>
<li class="media">
    <div class="pull-left">
        <img src="images/people/110/woman-9.jpg" alt="people" class="img-circle" width="80" />
        <div class="date">Username</div>
        <div class="date">11 OCT</div>
    </div>
    <div class="media-body">
        <div class="panel panel-default">
            <div class="panel-body">
                <p>Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos</p>
                <img src="<?php echo $profilepic; ?>" alt="<?php echo $username; ?>" class="img-responsive">
            </div>
            <div class="row" style="padding:5px 0px 10px 15px;">
                <div class="col-lg-2">
                    <button type="button" class="btn btn-primary btn-xs glyphicon glyphicon-heart" onclick="alert('Like press')"> Like</button>  
                </div>
                <div class="col-lg-2 view-all-comments" style="background:none; border:0px;">
                    Total Like
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
                            <span>What time did it finish?
                                Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos Late Night Show Photos</span>
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
