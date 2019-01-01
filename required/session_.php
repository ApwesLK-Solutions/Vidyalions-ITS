<?php
    session_start();
    include_once('config.php');

    if(isset($_SESSION['ID']) /*&& /*($ID == $dbUserID)*/)
    {
        $ID = $_SESSION['ID'];
        $USERNAME = $_SESSION['username'];
        $query = "SELECT * FROM admin WHERE id = '$ID'";
        $res = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($res);
        if($row['username'] == $USERNAME)
        {
            $_SESSION['EMAIL'] = $row['email'];
        }
        else
        {
            session_destroy();
            mysqli_close($conn); // Closing Connection
            header('Location: index.php'); // Redirecting To Home Page
        }
    }
    else
    {
        session_destroy();
        mysqli_close($conn); // Closing Connection
        header('Location: index.php'); // Redirecting To Home Page
    }
?>
