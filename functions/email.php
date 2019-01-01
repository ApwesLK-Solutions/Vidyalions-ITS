<?php
    ini_set("include_path", '/home5/vidyalio/php:' . ini_get("include_path") );
    require_once('Mail.php');
    require('email_templates.php');
    require "Mail/mime.php";
    
    
    function sendRegEmail($to,$name,$school)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $subject = "Event Registraion - Vidyalions ITS";
        $body = getWelcomeEmail($name , $school);

        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        
        $mail = $smtp->send($to, $headers, $body);

        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent!</p>");
        }
    }
    
    function sendToAllWithoutAttachment($subject , $body , $to)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $body = $body . "\n\n\n Vidyalion's ITS";
        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        $mail = $smtp->send($to, $headers, $body);
        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent to $to</p>");
        }
    }
    
    function sendToSelectedWithoutAttachment($subject , $body, $to)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $body = $body . "\n\n\n Vidyalion's ITS";
        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        $mail = $smtp->send($to, $headers, $body);
        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent to $to</p>");
        }
    }
    
    function sendToAllWithAttachment($subject , $text , $attachment , $to)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $body = $body . "\n\n\n Vidyalion's ITS";
        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        $mime = new Mail_mime();
        $mime -> setTXTBody($text);
        $mime -> addAttachment($attachment, filetype($attachment));
        $body = $mime -> get();
        $headers = $mime -> headers($headers);
        $mail = $smtp->send($to, $headers, $body);
        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent to $to</p>");
        }
    }
    
    function sendToSelectedWithAttachment($subject , $text , $attachment , $to)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $body = $body . "\n\n\n Vidyalion's ITS";
        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        $mime = new Mail_mime();
        $mime -> setTXTBody($text);
        $mime -> addAttachment($attachment, filetype($attachment));
        $body = $mime -> get();
        $headers = $mime -> headers($headers);
        $mail = $smtp->send($to, $headers, $body);
        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent to $to</p>");
        }
    }
    
    function sendRecoverPassword($to,$user_password)
    {
        $host = "give.solidhosting.pro";
        $port = "25";
        $username = "admin@vidyalionsit.com";
        $password = "Password12";
        $smtp = Mail::factory('smtp' , array ('host' => $host , 'port' => $port , 'auth' => true , 'username' => $username , 'password' => $password));
        
        $from = "Vidyalion ITSD <admin@vidyalionsit.com>";
        $subject = "Password Recovery - Vidyalions ITS";
        $body = "Your Password is : $user_password";

        $headers = array ('From' => $from , 'To' => $to , 'Subject' => $subject);
        
        $mail = $smtp->send($to, $headers, $body);

        if(PEAR::isError($mail)) 
        {
            echo("<p>" . $mail->getMessage() . "</p>");
        } 
        else 
        {
            echo("<p>Message successfully sent!</p>");
        }
    }
?>