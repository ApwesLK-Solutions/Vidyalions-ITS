<?php
include('required/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Change Password</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg d-xl-flex justify-content-xl-center align-items-xl-center" style="background-color: rgb(23,162,184);color: rgb(255,255,255);">
        <div class="container-fluid"><a class="navbar-brand" href="home.php" style="color: rgba(255,255,255,0.9);">Vidyalion's ITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="home.php" style="color: #ffffff;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-12 col-xl-12 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <div class="d-md-flex d-lg-flex justify-content-md-center align-items-md-center justify-content-lg-center align-items-lg-center"><img class="d-lg-flex justify-content-lg-center align-items-lg-center" src="assets/img/VITS%20Logo%20Final.png" style="width: 200px;"></div>
                    <h2 class="text-center text-info font-weight-light mb-5" style="width: 100%;margin-bottom: 0px;margin-top: 20px;">&nbsp;Vidyalion's ITS</h2>
                    <form action="functions/change_password.php" method="POST">
                        <div class="form-group"><label class="text-secondary">Old Password</label><input class="form-control" type="password" required="" id="old" name="old"></div>
                        <div class="form-group"><label class="text-secondary">New Password</label><input class="form-control" type="password" required="" id="new" name="new"></div>
                        <div class="form-group"><label class="text-secondary">Confirm New Password</label><input class="form-control" type="password" required="" id="cnew" name="cnew"></div><button class="btn btn-info mt-2" type="submit">Update Password</button></form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright">© APWES LK Solutions - 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
