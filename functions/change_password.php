<?php

    require '../required/session.php';
    require '../required/config.php';
    
    
    $useremail =  $_SESSION['EMAIL'];
    $old_password = $_POST['old'];
    $new_password = $_POST['new'];
    $cnew_password = $_POST['cnew'];
    
    
    
    if($new_password != $cnew_password)
    {
         // Password Deka Galapenne naha
         echo "Galapenne naha";
         echo $new_password . " | " . $cnew_password;
    }
    else
    {
        $query = "SELECT `password` FROM `admin` WHERE `email` = '$useremail'";
        $result = mysqli_query($conn,$query);
        $row = mysqli_fetch_assoc($result);
        if($row['password'] != md5($old_password))
        {
            //old password eka waradie
            echo "parana eka waradie";
        }
        else
        {
            $encryptedPassword = md5($new_password);
            $query = "UPDATE `admin` SET `password` = '$encryptedPassword' WHERE `email` = '$useremail'";
            if(mysqli_query($conn,$query))
            {
                echo "password eka change una";
            }
        }
    }
    
    //check old 
    
?>