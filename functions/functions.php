<?php
//require('required/config.php');
//include '../required/ErrorHandler.php';
    function registerSchool($name , $QtyQuiz , $qtyDev , $memCount , $connection)
    {
        $query = "INSERT INTO `school`(`schoolName`,`noOfQuizMembers`,`noWebDevelopMembers`,`memcount`) VALUES('$name',$QtyQuiz,$qtyDev,$memCount)";
        if(mysqli_query($connection,$query) == false)
        {
            //reg error
            echo '<script type="text/javascript">Failed();</script>';
            return false;
        }
        
        return true;
    }
    
    function getSchoolId($school,$connection)
    {
        $result = mysqli_query($connection,"SELECT `id` FROM `school` WHERE `schoolName` = '$school'");
        $Rarray = mysqli_fetch_array($result);
        $id = $Rarray[0];
        return $id;
    }
    
    function registerSchoolOnEvent($school ,$event,$connection)
    {
        $sid = getSchoolId($school,$connection);
        $query = "INSERT INTO `school_event`(`schoolid`,`eventid`) VALUES(".$sid.",".$event.")"; 
        $res =  mysqli_query($connection,$query);
        
    }
    
    function registerTeacher($school ,$t_name,$t_contact,$t_email,$connection)
    {
        $sid = getSchoolId($school,$connection);
        $query = "INSERT INTO `teacher`(`schoolID`,`teacherName`,`teacherEmail`,`teacherContact`) VALUES(".$sid.",'".$t_name."','".$t_contact."','".$t_email."')"; 
        $res = mysqli_query($connection,$query);
        
    }
    
    function registerCodinator($school ,$c_name,$c_contact,$c_email,$connection)
    {
        $sid = getSchoolId($school,$connection);
        $query = "INSERT INTO `co-ordinator`(`schoolID`,`codname`,`codemail`,`codcontact`) VALUES(".$sid.",'".$c_name."','".$c_contact."','".$c_email."')"; 
        $res = mysqli_query($connection,$query);
    }
    
    function getStaticsBySchool($schoolName , $conn)
    {   
        $allData;
        $sid = getSchoolId(str_replace("'","''",$schoolName),$conn);
        
        
        //Get Teacher Info
        $query = "SELECT * FROM `teacher` WHERE `schoolID` =".$sid;
        $res = mysqli_query($conn,$query);
        $arr = mysqli_fetch_array($res);
        $allData = array($sid,$arr[2],$arr[3],$arr[4]);
        
        //Get CoD Details
        $query = "SELECT * FROM `co-ordinator` WHERE `schoolID` =".$sid;
        $res = mysqli_query($conn,$query);
        $arr = mysqli_fetch_array($res);
        array_push($allData,$arr[2],$arr[3],$arr[4]);
        
        //Get Participant Details
        $query = "SELECT * FROM `school` WHERE `id` =".$sid;
        $res = mysqli_query($conn,$query);
        $arr = mysqli_fetch_array($res);
        array_push($allData,$arr[2],$arr[3],$arr[4]);
        return $allData;
    }
    
    function schoolsData($conn)
    {
        $query = "SELECT * FROM `school`";
        $result = mysqli_query($conn,$query);
        if($result)
        {
            $schoolCount = $result -> num_rows;
            while($row = mysqli_fetch_assoc($result)) 
            {
                $schname = $row['schoolName'];
               $datas = getStaticsBySchool($row['schoolName'] , $conn);
               
               $t_name = $datas[1];
               $t_contact = $datas[3];
               $t_email = $datas[2];
               
               $c_name = $datas[4];
               $c_contact = $datas[6];
               $c_email = $datas[5];
               
               $p = $datas[9];
               $q = $datas[7];
               $w = $datas[8];
               
               echo "<div class='card' style='margin-bottom: 10px;'>
               
               
        <div class='card-header'>
            <div class='row'>
                <div class='col-12 col-sm-6 col-lg-7'>
                    <h3>$schname</h3>
                </div>
                <div class='col-12 col-sm-6 col-lg-5 text-right'>
                    <div class='btn-group btn-group-justified' role='group'><button class='btn btn-primary active' id='$schname' value='$schname' name='$schname' type='button' style='margin-right: 0;'>Update</button><button class='btn btn-primary active' onclick='delete()' type='button'id='delete' value='$schname' name='$schname' style='background-color: rgb(204,12,0);'>Delete</button></div>
                </div>
            </div>
        </div>
        <div class='card-body'>
            <div class='row'>
                <div class='col-sm-6 col-lg-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h4 class='text-center'>Teacher in Charge</h4>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>$t_name</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td>$t_contact</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>$t_email</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-lg-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h4 class='text-center'>Co-ordinator</h4>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Name</td>
                                        <td>$c_name</td>
                                    </tr>
                                    <tr>
                                        <td>Contact Number</td>
                                        <td>$c_contact</td>
                                    </tr>
                                    <tr>
                                        <td>Email Address</td>
                                        <td>$c_email</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class='col-sm-6 col-lg-4'>
                    <div class='card'>
                        <div class='card-body'>
                            <h4 class='text-center'>Team Details</h4>
                        </div>
                        <div class='table-responsive'>
                            <table class='table'>
                                <thead>
                                    <tr></tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Total Participants</td>
                                        <td>$p</td>
                                    </tr>
                                    <tr>
                                        <td>Quiz Competition</td>
                                        <td>$q</td>
                                    </tr>
                                    <tr>
                                        <td>Web Designing Contest</td>
                                        <td>$w</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>";
            }
        }
    }

    
    
?>