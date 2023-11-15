<?php

$email=$_POST['email'];
$password=$_POST['password'];

$server="localhost";
$username="root";
$pass="";
$dbname="test";


$conn=mysqli_connect($server,$username,$pass,$dbname);

if(!$conn){
    echo "Error";
}

$sql="insert into users values(NULL,'$email','$password')";

mysqli_query($conn,$sql);

header('Location:login.html');



?>