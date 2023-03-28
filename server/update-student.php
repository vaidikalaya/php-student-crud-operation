<?php
include "dbconn.php";
session_start();
if(isset($_REQUEST['updateStudent'])){
    
    $studentId=$_REQUEST['id'];  //id leli kyo li kyoki hume update usi student ko jiski id hmre pass hai
    
    $firtname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $city=$_REQUEST['city'];

    if(!empty($firtname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($city)){

        $query="UPDATE students set 
                        firstname='$firtname',
                        lastname='$lastname',
                        email='$email',
                        phone='$phone',
                        city='$city'
                        WHERE id=$studentId
                        ";

        $result=mysqli_query($conn,$query);
    
        if($result){
            $_SESSION['success']="Student Updated";
            header('location: ../show-students.php');
        }

    }
    else{
        echo "All Fields Required";
    }
}

/*
EDIT => DATA SHOW => DATA CHANGES =>  DATE UPDATE ===BASE== ID
*/