<?php
session_start();
include('required/session.php');
?>
<!DOCTYPE html>
<html style="color: rgb(24,29,166);">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Home</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bitter:400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
</head>

<body style="color: #ffffff;">
    <div>
        <div class="header-dark" style="padding-bottom: 50px;background-color: rgb(255,255,255);background-image: url(&quot;none&quot;);">
            <nav class="navbar navbar-dark navbar-expand-md d-xl-flex justify-content-xl-center align-items-xl-center navigation-clean-search" style="background-color: rgb(23,162,184);">
                <div class="container"><a class="navbar-brand" href="home">Vidyalion's ITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse"
                        id="navcol-1">
                        <ul class="nav navbar-nav">
                            <li class="nav-item" role="presentation"><a class="nav-link" href="Participants.php">Manage Paricipants</a></li>
                            <li class="nav-item" role="presentation"><a class="nav-link" href="UpdatePassword.php">Change Password</a></li>
                            <li class="dropdown nav-item"><a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="home">Send Emails</a>
                                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="SendToAll">Send to All</a>
                                                                       <a class="dropdown-item" role="presentation" href="SendToSelected">Send Schoolwise</a></div>
                            </li>
                        </ul>
                        <form class="form-inline mr-auto" target="_self">
                            <div class="form-group"><label for="search-field"></label></div>
                        </form><span class="navbar-text"><a href="functions/logout.php" class="login">Sign Out</a></span></div>
                </div>
            </nav>
            <div class="container hero">
                <div class="row">
                    
                    <div class="col-md-8 offset-md-2 d-flex d-xl-flex justify-content-center align-items-center justify-content-xl-center"><img class="img-fluid" src="assets/img/VITS%20Logo%20Final.png" style="width: 500px;margin-top: 50px;" ></div>
                    <div class="col-md-8 offset-md-2 d-flex d-xl-flex justify-content-center justify-content-xl-center"><label class="col-form-label" data-aos="fade" data-aos-duration="1000" style="color: rgb(72,70,70);margin-top: 80px;margin-bottom: 30px;">Select one of the options from the main menu to start.<br></label></div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic" style="background-color: rgb(40,45,50);">
        <footer style="background-color: rgba(49,55,58,0);">
            <p class="copyright" style="color: rgb(208,208,208);">© APWES LK Solutions - 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.1.1/aos.js"></script>
    <script src="assets/js/script.min.js"></script>
</body>

</html>
