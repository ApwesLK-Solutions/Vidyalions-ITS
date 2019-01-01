<?php

    $schools = array();                                                                                                                                   
    foreach (array_keys($_POST) as $field)
    {
        if($_POST[$field] == 'on')
        {
           array_push($schools , $field);
        }
    }
    
    print_r($schools);
    
    
    
?>