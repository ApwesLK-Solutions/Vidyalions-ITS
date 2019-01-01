<?php

    require '../required/config.php';
    
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $l_username = mysqli_real_escape_string($conn, $_POST["username"]);
        $l_password = md5(mysqli_real_escape_string($conn, $_POST["password"]));
        
        $query = "SELECT * FROM `admin` WHERE `username` = '$l_username'";
        //echo $query;
        $result = mysqli_query($conn,$query);
        $num_row = mysqli_num_rows($result);
        if(mysqli_num_rows($result) > 0)
        {
            $dataRow = mysqli_fetch_assoc($result);
            if($l_password == $dataRow['password'])
            {
                session_start();
                $_SESSION["username"]=$dataRow["username"];
                $_SESSION["ID"] = $dataRow['id'];
                $_SESSION["NAME"] = $dataRow['mailName'];
                $_SESSION["EMAIL"] = $dataRow['email'];
                echo $_SESSION['username'];
            }
        }
    }

?>