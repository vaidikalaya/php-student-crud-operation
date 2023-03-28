<?php
$servername='localhost';
$username="root";
$password="";
$dbname="student_crud";
$conn = mysqli_connect($servername, $username, $password,$dbname);

if(!$conn){
    echo "not connected";
}

/*
c=create
r=read
u=update
d=delete
*/