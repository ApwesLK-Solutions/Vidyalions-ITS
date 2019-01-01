<?php

    require 'email.php';
    require '../required/config.php';
    
    $subject = $_POST['subject'];
    $body = $_POST['body'];
    $attachment;
    if(($_FILES["attachment"]["name"]) != "")
    {
        $withAttachment = true;
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["attachment"]["name"]);
        $uploadOk = 1;
        $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        //file eka thibboth delete karanawa
        if (file_exists($target_file))
        {
            unlink($target_file);
             $uploadOk = 1;
        }
        //file eke size eka check karanawa max 7mb
        if ($_FILES["attachment"]["size"] > 875000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }
        // Allow certain file formats
        if($FileType != "jpg" && $FileType != "png" && $FileType != "jpeg" && $FileType != "gif" ) 
        {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) 
        {
            echo "Sorry, your file was not uploaded.";
        // if everything is ok, try to upload file
        } 
        else 
        {
            if (move_uploaded_file($_FILES["attachment"]["tmp_name"], $target_file)) 
            {
                echo "The file ". basename( $_FILES["attachment"]["name"]). " has been uploaded.";
                $attachment = "uploads/" . basename( $_FILES["attachment"]["name"]) ;
            } 
            else 
            {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    }
    else
    {
        $withAttachment = false;
    }
    
    $emailList = array();
    $query = "SELECT `teacherEmail` FROM `teacher`";
    $results = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($results)) 
    {
        array_push($emailList , $row['teacherEmail']);
    }
    $query = "SELECT `codemail` FROM `co-ordinator`";
    $results = mysqli_query($conn,$query);
    while($row = mysqli_fetch_assoc($results)) 
    {
        array_push($emailList , $row['codemail']);
    }
   
    if($withAttachment == true)
    {
        foreach($emailList as $address)
        {
            sendToAllWithAttachment($subject , $body , $attachment , $address);
        }
    }
    if($withAttachment == false)
    {
        foreach($emailList as $address)
        {
            sendToAllWithoutAttachment($subject , $body , $address);
        }
    }

?>