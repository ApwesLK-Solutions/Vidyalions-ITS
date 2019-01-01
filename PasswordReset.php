<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Login</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-10 col-md-10 col-lg-12 offset-1 offset-sm-1 offset-md-1 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="width: 500px;">
                <div class="m-auto w-lg-75 w-xl-50">
                    <div class="form-group d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center"><img class="img-fluid d-sm-flex d-md-flex align-items-center align-content-center align-self-center justify-content-sm-center justify-content-md-center" src="assets/img/VITS%20Logo%20Final.png" style="width: 200px;"></div>
                    <form action="functions/recover_password.php" method="post"style="margin-top: 50px;margin-bottom: 200px;"><small class="form-text text-muted d-lg-flex justify-content-lg-center" style="margin-bottom: 20px;">Enter your email to recieve the Recovery Code</small>
                        <div class="form-group"><label class="text-secondary">Email</label><input class="form-control" type="email" required ="" pattern ="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" id="email" name = "email"></div><button class="btn btn-info mt-2" type="submit">Send Recovery Code</button></form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright" style="font-size: 15px;">All Right Reserved - Kegalu Vidyalaya</p>
                <p class="copyright" style="padding-top: 5px;">© APWES LK Solutions - 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
