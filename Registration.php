<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Registration</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    
    <!-- sript for ajax-->
<script type = "text/javascript">
    $(function(){
        $('#quizCom').change(function(){
            var st=this.checked;
            if(st){
                $('#quizMemCount').prop("disabled",false);
            }
            else{
                $('#quizMemCount').prop("disabled",true);
            }
        });
    });
     $(function(){
        $('#webCom').change(function(){
            var st=this.checked;
            if(st){
                $('#webMemCount').prop("disabled",false);
            }
            else{
                $('#webMemCount').prop("disabled",true);
            }
        });
    });
</script>
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg d-xl-flex justify-content-xl-center align-items-xl-center" style="background-color: rgb(23,162,184);color: rgb(255,255,255);">
        <div class="container-fluid"><a class="navbar-brand" href="#" style="color: rgba(255,255,255,0.9);">Vidyalion's ITS</a><button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav ml-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="#" style="color: #ffffff;">Home</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Events</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="#" style="color: #ffffff;">Contact Us</a></li>
                </ul>
        </div>
        </div>
    </nav>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-10 col-md-10 col-lg-12 offset-1 offset-sm-1 offset-md-1 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="width: 500px;">
                <div class="m-auto w-lg-75 w-xl-50">
                    <div class="form-group d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center"><img class="img-fluid d-sm-flex d-md-flex align-items-center align-content-center align-self-center justify-content-sm-center justify-content-md-center" src="assets/img/VITS%20Logo%20Final.png" style="width: 200px;"></div>
                    <h2 class="text-center text-info font-weight-light mb-5"
                        style="margin-top: 30px;width: 100%;">Registration</h2><label style="margin-bottom: 15px;">Label</label>
                    <form method="post" action="functions/register.php">
                        <div class="form-group"><label class="text-secondary">Name of School / Institute</label><input class="form-control" type="text" name="nameSchool" id="nameSchool" required=""></div>
                        <div class="form-group"><label class="text-secondary">Total Participants (Maximum 8)</label><input class="form-control" type="number" name ="totalParticipants" id="totalParticipants" required="" min="1" max="8"></div>
                        <div class="form-group"><label class="text-secondary">Events to participate</label>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr></tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="quizCom" name="quizCom" value="Quiz Competition"><label class="form-check-label" id="quiztext" for="quizCom">Quiz Competition (Mention the number of Participants)(Minimum 3, Maximum 5)<br><br></label></div>
                                            </td>
                                            <td style="padding-right: 0;"><input class="form-control" type="number" name="quizMemCount" id="quizMemCount" disabled min="3" max="5" style="width: 80px;"></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-check"><input class="form-check-input" type="checkbox" id="webCom" name="webCom" value="Web Development Competition"><label class="form-check-label" for="webCom">Web Development Competition&nbsp;<br>(Mention the number of Participants)<br>(Minimum 3, Maximum 5)<br></label></div>
                                            </td>
                                            <td style="padding-right: 0;"><input class="form-control" type="number" name="webMemCount" id="webMemCount" disabled min="3" max="5" style="width: 80px;"></td>
                                        </tr>
                                        <tr></tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="form-group"><label class="text-secondary">Name of the Teacher in Charge</label><input class="form-control" type="text" name="nameTeacher" id="nameTeacher" required="" inputmode="latin"></div>
                        <div class="form-group"><label class="text-secondary">Email of the Teacher in Charge</label><input class="form-control" type="email" name="emailTeacher" id="emailTeacher" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Contact Number of the Teacher in Charge</label><input class="form-control" type="number" name="contactTeacher" id="contactTeacher" required="" pattern="[0-9]{,10}$" inputmode="tel"></div>
                        <div class="form-group"><label class="text-secondary">Name of the Co-ordinator</label><input class="form-control" type="text" name="nameCoordinator" id="nameCoordinator" required="" inputmode="latin"></div>
                        <div class="form-group"><label class="text-secondary">Email&nbsp;of the Co-ordinator<br></label><input class="form-control" type="email" name="emailCoordinator" id="emailCoordinator" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Contact Number of Co-ordinator</label><input class="form-control" type="number" name="contactCoordinator" id="contactCoordinator" autocomplete="on" pattern="[0-9]{,10}$" inputmode="tel"></div><small class="form-text text-muted">Help text for a form field.</small>
                        <button
                            class="btn btn-info mt-2" type="sumbit" id="btn-register">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-dark">
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright" style="font-size: 15px;">All Right Reserved - Kegalu Vidyalaya</p>
                <p class="copyright" style="padding-top: 5px;">© APWES LK Solutions - 2018</p>
            </div>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
     <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
   
    
</body>

</html>

