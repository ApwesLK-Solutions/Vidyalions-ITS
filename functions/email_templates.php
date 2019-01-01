<?php 

    function getWelcomeEmail($name , $school)
    {
        $body = 
        "
        Hello $name , 
        
                You Have successfully Registered Your School : $school with Vidyalion's Event.
                
                                                                            Thank You
                                                                            Vidyalion IT Department
        ";
        return $body;
    }
    
?>