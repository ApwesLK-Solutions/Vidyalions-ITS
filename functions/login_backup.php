<?php
    session_start();
    $connect =mysqli_connect("localhost", "u1667453_vits", "Password12" ,"u1667453_vits");
    if(isset($_POST["username"]) && isset($_POST["password"]))
    {
        $username = mysqli_real_escape_string($connect, $_POST["username"]);
        $password = md5(mysqli_real_escape_string($connect, $_POST["password"]));
       
       $sql ="SELECT * FROM admin WHERE username ='".$username."' AND password='".$password."'";
        //$sql="SELECT * FROM user"
        $result = mysqli_query($connect,$sql);
        $num_row = mysqli_num_rows($result);
        if($num_row>0)
        {
            
           $data = mysqli_fetch_array($result);
            $_SESSION["username"]=$data["username"];
            $_SESSION["ID"] = $data['id'];
            $_SESSION["NAME"] = $data['mailName'];
            $_SESSION["EMAIL"] = $data['email'];
            
            echo $data["username"];
            
        }
    }

?>