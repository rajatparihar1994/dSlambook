
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
<?php include('package\login\in_login.php'); ?>
<body class="login">
    <div id="content">
        <div class="container-fluid">
            <div class="lock-container">
                <h1>Login</h1>
                <div class="panel panel-default text-center">
                    <img src="images/defaultpp.icon" width="50" class="img-circle">
                    <div class="panel-body">
                    <form action="#" method="post">
                        <input class="form-control" type="text" name="email" placeholder="Email">
                        <input class="form-control" type="password" name="password" placeholder="Enter Password">
                        <input type="submit" value="Login"  name="submit" class="btn btn-primary"></input>
                    </form>
                        <a href="signup.php" class="btn btn-default">Create an account</a>
                        <a href="#" class="forgot-password">Forgot password?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<!-- Vendor Scripts Bundle -->
<script src="js/vendor.min.js"></script>

<!-- App Scripts Bundle -->
<script src="js/scripts.min.js"></script>
</html>