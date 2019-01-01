<?php
    
    //Delete School from System

    require '../required/config.php';
    require 'functions.php';
    
    
    $school = $_POST['school'];
    str_replace("'","''",$school);
    $sid = getSchoolId($school,$conn);
    
    
    $query = "DELETE FROM `school_event` WHERE schoolid = " . $sid;
    if(mysqli_query($query,$conn))
    {
        $query = "DELETE FROM `co-ordinator` WHERE schoolID = " . $sid;
        if(mysqli_query($query,$conn))
        {
            $query = "DELETE FROM `teacher` WHERE schoolID = " . $sid;
            if(mysqli_query($query,$conn))
            {
                $query = "DELETE FROM `school` WHERE id = " . $sid;
                if(mysqli_query($query,$conn))
                {
                    return true;
                }
                else
                {
                    return false;
                }
            }
            else
            {
                return false;
            }
        }
        else
        {
            return false;
        }
    }
    else
    {
        return false;
    }
    

?>