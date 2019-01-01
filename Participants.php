<?php
include('required/session.php');
include('functions/statistics.php');
require('functions/functions.php');
require('required/config.php');
//include('../functions/functions.php');
//var_dump($allData);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>VITS - Participants</title>
    <link rel="icon" type="image/png" href="assets/img/VITS Logo Final.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <script src="http://code.jquery.com/jquery-2.1.1.js"></script>
    <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
    <script>
    function delete(){
        $('#delete').click(function(){
           var school=$('#delete').val();
           $.ajax({
                    url:"../functions/delete.php",
                    method:"POST",
                    data:{school:school},
                    cache:false,
                    success:data{
                        if(data)
                            {
                                alert("deleted");
                            }
                        else{
                            alert("erorr");
                        }
                    }
           });
        }); 
    }
    
</script>
    
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
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <h2 class="text-center">Summary</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4 col-lg-2 offset-lg-1">
                    <p class="text-center"><br>
<span class="h2"><?php echo $total_schools; ?></span><br>
<span class="text-uppercase text-muted h6">Total Schools</span></p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <p class="text-center"><br>
<span class="h2"><?php echo $total_teachers; ?> </span><br>
<span class="text-uppercase text-muted h6">total teachers</span></p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <p class="text-center"><br>
<span class="h2"><?php echo $total_web; ?> </span><br>
<span class="text-uppercase text-muted h6">total web developers</span></p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <p class="text-center"><br>
<span class="h2"><?php echo $total_quiz; ?></span><br>
<span class="text-uppercase text-muted h6">total quiz members</span></p>
                </div>
                <div class="col-6 col-sm-4 col-lg-2">
                    <p class="text-center"><br>
<span class="h2"><?php echo $total_participants; ?></span><br>
<span class="text-uppercase text-muted h6">total Participants</span></p>
                </div>
            </div>
        </div>
    </div>
    <form class="search-form">
        <div class="input-group" style="margin-top: 10px;margin-bottom: 10px;">
            <div class="input-group-prepend"><span class="input-group-text"><i class="fa fa-search"></i></span></div><input class="form-control" type="text" placeholder="Enter School Name">
            <div class="input-group-append"><button class="btn btn-light" type="button">Search </button></div>
        </div>
    </form>
    
    <!-- ---------------------------------------------------------------------------------------------------------------------------------->
   <?php schoolsData($conn); ?>
  
    
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


