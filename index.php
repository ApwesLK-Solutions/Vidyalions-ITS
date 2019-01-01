<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Login</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.webp">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">



</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-10 col-md-10 col-lg-12 offset-1 offset-sm-1 offset-md-1 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block" style="width: 500px;">
                <div class="m-auto w-lg-75 w-xl-50" id="wave">
                    <div class="form-group d-flex d-sm-flex d-md-flex justify-content-center justify-content-sm-center justify-content-md-center"><img class="img-fluid d-sm-flex d-md-flex align-items-center align-content-center align-self-center justify-content-sm-center justify-content-md-center" src="assets/img/VITS%20Logo%20Final.png" style="width: 200px;"></div>
                    <div id="error"></div>
                    <form id="login" name="login"  method="post" style="margin-top: 50px;">
                        <div class="form-group"><label class="text-secondary">User Name</label><input class="form-control" id="username" name="username" type="text" required=""></div>
                        <div class="form-group" style="margin-bottom: 0px;"><label class="text-secondary">Password</label></div><input class="form-control" id="password" name="password" type="password" required="">
                        <p class="mt-3 mb-0"><a href="PasswordReset.php" class="text-info small">Forgot your username or password?</a></p>
                        <div id="login_btn"><button class="btn btn-info mt-2" type="button">Log In</button></div>
                    </form>
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
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/jquery.validate.min.js"></script>
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
</body>

</html>
<!-- java script for ajax-->
<script>
    $(document).ready(function(){
        $('#login_btn').click(function(){
            var username = $('#username').val();
            var password = $('#password').val();
            if($.trim(username).length > 0 && $.trim(password).length > 0)
                {
                    $.ajax({
                        url:"functions/login.php",
                        method:"POST",
                        data:{username:username, password:password},
                        cache:false,
                        beforeSend:function()
                        {
                            $('#login_btn').html("<button class='btn btn-info mt-2' type='button'>Proceeding</button>");
                        },
                        success:function(data)
                        {
                            if(data)
                            {
                                $("body").load("home").hide().fadeIn(2000);
                            }
                            else
                            {
                                var options = {
                                    distance:'20',
                                    direction:'left',
                                    times:'3'
                                }
                                $('#wave').effect("shake", options, 1000);
                                $('#login_btn').html("<button class='btn btn-info mt-2' type='button'>Log in</button>");
                                $('#error').html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error Login!</strong></br>Invalid Username or Password.Please Contact Administrator...!</div>");
                            }
                        }
                    });
                }
            else
                {
                    $("#error").html("<div class='alert alert-danger'><a href='#' class='close' data-dismiss='alert' aria-label='close'>&times;</a><strong>Error.Input Fields Missing!</strong></br>Please Enter Username or Password...!</div>");
                }
        });
    });
</script>
