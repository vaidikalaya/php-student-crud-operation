<?php
include "dbconn.php";
session_start();
if(isset($_REQUEST['id'])){

    $id=$_REQUEST['id'];

    $query="DELETE FROM students WHERE id=$id";
    $result=mysqli_query($conn,$query);
    
    if($result){
        $_SESSION['success']="Student Deleted";
        header('location: ../show-students.php');
    }
    else{
        echo "some error";
    }

}