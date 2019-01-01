<?php
    require 'functions.php';
    require 'email.php';
    require '../required/config.php';
    include '../required/ErrorHandler.php';
    
    $schoolName = $_POST["nameSchool"];
    $qtyQuiz = $_POST["quizMemCount"];
    $qtyWeb = $_POST["webMemCount"];
    $qtyQuizBox = $_POST['quizCom'];
    $qtyWebBox = $_POST['webCom'];
    $memCount = $_POST['totalParticipants'];
    
    //teacher Details
    $t_name =$_POST["nameTeacher"];
    $t_contact = $_POST["contactTeacher"];
    $t_email = $_POST["emailTeacher"];
    
    //co ordinator Details
    $c_name =$_POST["nameCoordinator"];
    $c_contact = $_POST["contactCoordinator"];
    $c_email = $_POST["emailCoordinator"];
    
    $schoolName = str_replace("'","''",$schoolName);
    
    //checking the checkbox for checked
    if(($qtyQuizBox == null) && ($qtyWebBox == null))
    {
        echo '<script type="text/javascript">JSalertCheckbox();</script>';
    }
    else if(($qtyQuizBox == null) && ($qtyWebBox != null))
    {
        $qtyQuiz = 0;
      // echo '<script type="text/javascript">filltextbox();</script>';
    }
    else if(($qtyQuizBox != null) && ($qtyWebBox == null))
    {
        $qtyWeb = 0;
        //echo '<script type="text/javascript">filltextbox();</script>';
    }
    
    if(($qtyWeb + $qtyQuiz) > 8)
    {
         echo '<script type="text/javascript">filltextbox();</script>';
    }
    else
    {
        if(registerSchool($schoolName , $qtyQuiz , $qtyWeb,$memCount,$conn) == true)
        {
            sendRegEmail($t_email,$t_name,$schoolName);
            sendRegEmail($c_email,$c_name,$schoolName);
            //register event
            if($qtyWebBox != null)
            {
                registerSchoolOnEvent($schoolName,2,$conn);
            }
            if($qtyQuizBox != null)
            {
                registerSchoolOnEvent($schoolName,1,$conn);
            }
            registerTeacher($schoolName ,$t_name,$t_email,$t_contact,$conn);
            registerCodinator($schoolName ,$c_name,$c_email,$c_contact,$conn);
            echo '<script type="text/javascript">success();</script>';
        }
        else
        {
            //save wenne na pako baluwata wadak na
        }
        
    }
?>
