<?php
    
    require('required/config.php');

    $total_schools;
    $total_teachers;
    $total_coordinators;
    $total_web;
    $total_quiz;
    $total_participants;
    
    //Get Total Schhol Count
    $q1 = "SELECT COUNT(*) FROM `school`";
    $res1 = mysqli_query($conn,$q1);
    $arr1 = mysqli_fetch_array($res1);
    $total_schools = $arr1[0];
    
    //Get Total teacher Count
    $q2 = "SELECT COUNT(*) FROM `teacher`";
    $res2 = mysqli_query($conn,$q2);
    $arr2 = mysqli_fetch_array($res2);
    $total_teachers = $arr2[0];
    
    //Get Total Cord Count
    $q3 = "SELECT COUNT(*) FROM `co-ordinator`";
    $res3 = mysqli_query($conn,$q3);
    $arr3 = mysqli_fetch_array($res3);
    $total_coordinators = $arr3[0];
    
    //Total Webdevelopers
    $q4 = "SELECT SUM(`noWebDevelopMembers`) FROM `school`";
    $res4 = mysqli_query($conn,$q4);
    $arr4 = mysqli_fetch_array($res4);
    $total_web = $arr4[0];
    
    //Total Quizers
    $q5 = "SELECT SUM(`noOfQuizMembers`) FROM `school`";
    $res5 = mysqli_query($conn,$q5);
    $arr5 = mysqli_fetch_array($res5);
    $total_quiz = $arr5[0];
    
    //Total Partipants
    $q6 = "SELECT SUM(`memcount`) FROM `school`";
    $res6 = mysqli_query($conn,$q6);
    $arr6 = mysqli_fetch_array($res6);
    $total_participants = $arr6[0];

    
    /*echo 'schools : ' . $total_schools . "\n";
    echo 'Teachers : ' . $total_teachers . "\n";
    echo 'CoOrdinators : ' . $total_coordinators . "\n";
    echo 'WEB : ' . $total_web . "\n";
    echo 'QUIZ : ' . $total_quiz . "\n";
    echo 'Total : ' . $total_participants . "\n";*/
?>