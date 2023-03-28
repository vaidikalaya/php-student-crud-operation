<?php
include "dbconn.php";
session_start();
if(isset($_REQUEST['addStudent'])){
    
    $firtname=$_REQUEST['firstname'];
    $lastname=$_REQUEST['lastname'];
    $email=$_REQUEST['email'];
    $phone=$_REQUEST['phone'];
    $city=$_REQUEST['city'];

    if(!empty($firtname) && !empty($lastname) && !empty($email) && !empty($phone) && !empty($city)){

        $query="INSERT INTO students(firstname,lastname,email,phone,city) VALUES('$firtname','$lastname','$email','$phone','$city')";

        $result=mysqli_query($conn,$query);
    
        if($result){
            $_SESSION['success']="Student Added";
            header('location: ../index.php');
        }

    }
    else{
        echo "All Fields Required";
    }
}