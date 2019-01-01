<?php
    
    
    require '../required/config.php';
    require 'email.php';
    
    
    
    function generateRandomString($length) 
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) 
        {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }


    
    $email = $_POST['email'];
    
    $query = "SELECT `password` FROM `admin` WHERE `email` = '$email'";
    $result = mysqli_query($conn,$query);
    $row = mysqli_fetch_assoc($result);
    $old_password = $row['password'];
    
    if($old_password == "")
    {
        echo "eheme ekek naha";
    }
    else
    {
        $newPassword = generateRandomString(10); 
        $encryptedPassword = md5($newPassword);
        $query = "UPDATE `admin` SET `password` = '$encryptedPassword' WHERE `email` = '$email'";
        if(mysqli_query($conn,$query))
        {
            sendRecoverPassword($email,$newPassword);
        }
    }
?>