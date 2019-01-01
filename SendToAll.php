<?php
include('required/session.php');
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Send to All</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg d-xl-flex justify-content-xl-center align-items-xl-center" style="background-color: rgb(23,162,184);color: rgb(255,255,255);">
        <div class="container-fluid"><a class="navbar-brand" href="home.php" style="color: rgba(255,255,255,0.9);">Vidyalion's ITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="SendToAll.php" style="color: #ffffff;">Send to All</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="SendToSelected.php" style="color: #ffffff;">Send Mail Schoolwise</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="index.php" style="color: #ffffff;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Logout</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-10 col-md-10 col-lg-12 col-xl-12 offset-1 offset-sm-1 offset-md-1 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50" style="width: 100%;">
                    <h2 class="d-inline-flex float-left flex-fill text-info font-weight-light mb-5" style="width: 100%;">Send Emails to All Recipients<br></h2>
                    <form action="functions/send_to_all.php" method="POST" enctype="multipart/form-data">
                        <div class="form-group"><label class="text-secondary">Subject</label><input class="form-control" type="text" required="" id="subject" name="subject"></div>
                        <div class="form-group"><label class="text-secondary">Message</label></div><textarea class="form-control" style="margin-bottom: 20px;height: 250px;" id="body" name="body" required="" ></textarea>
                        <label>Select File to Sent</label>
                        <input type="file" class="form-control-file" id="attachment" name="attachment">
                        <button class="btn btn-info mt-2" type="submit" style="margin-left: 0;">Send to All</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <p class="copyright" style="font-size: 16px;">© APWES LK Solutions - 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
