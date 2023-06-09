<?php

    include("connection.php");

    $message = " ";
    //inserting data online application
    if(isset($_POST['submit'])){

    
        $name               =  $_POST['fname'];
        $gender             =  $_POST['gender'];
        $nic                =  $_POST['nic'];
        $email              =  $_POST['email'];
        $contactno          =  $_POST['mobileno'];
        $address            =  $_POST['address'];
        $olExMedium         =  $_POST['olmedium'];
        $olSub1Res          =  $_POST['s1'];
        $olSub2Res          =  $_POST['s2'];
        $olSub3Res          =  $_POST['s3'];
        $olSub4Res          =  $_POST['s4'];
        $olSub5Res          =  $_POST['s5'];
        $olSub6Res          =  $_POST['s6'];
        $olSub7Res          =  $_POST['s7'];
        $olSub8Res          =  $_POST['s8'];
        $olSub9Res          =  $_POST['s9'];
        $alExMedium         =  $_POST['almedium'];
        $alStream           =  $_POST['alstream'];
        $alSub1Res          =  $_POST['als1'];
        $alSub2Res          =  $_POST['als2'];
        $alSub3Res          =  $_POST['als3'];
        $alSub4Res          =  $_POST['alge'];
        $otherQualfication  =  $_POST['oq'];
        $coursname          =  $_POST['cname'];



            $sql = "INSERT INTO `application_detals`(`fullname`,`course_name`,`gender`, `nic`, `email`, `contactno`, `address`, `ol_exam_medium`, `ol_sub1_res`, `ol_sub2_res`, `ol_sub3_res`, `ol_sub4_res`, `ol_sub5_res`, `ol_sub6_res`, `ol_sub7_res`, `ol_sub8_res`, `ol_sub9_res`, `al_exam_stream`, `al_exam_medium`, `al_sub1_res`, `al_sub2_res`, `al_sub3_res`, `al_sub4_res`, `other_qualification`) VALUES ('$name','$coursname','$gender','$nic','$email','$contactno','$address','$olExMedium','$olSub1Res','$olSub2Res','$olSub3Res','$olSub4Res','$olSub5Res','$olSub6Res','$olSub7Res','$olSub8Res','$olSub9Res','$alExMedium','$alStream','$alSub1Res','$alSub2Res','$alSub3Res','$alSub4Res','$otherQualfication')";

            $result = mysqli_query($conn,$sql);


            if($result){
                $message = "Data Inserted";
                echo "<script>alert('$message');</script>";
                $status = "success";
                header("Location: index.php?status=".$status."");
                exit;
            }else{
                die("Query Falied" . mysqli_error($conn));
            }
            
        }

        


    mysqli_close($conn);
    
    
    
    
    
    
    
    ?>
