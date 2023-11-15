<?php

$email=$_POST['email'];
$password=$_POST['password'];

// if($email=="hit" && $password=="hit")
// {
//     header('Location:index.html');
// }

$server="localhost";
$username="root";
$pass="";
$dbname="test";


$conn=mysqli_connect($server,$username,$pass,$dbname);

if(!$conn){
    echo "Error";
}

$sql="select * from users where email='$email'";

$data=mysqli_query($conn,$sql);

if(mysqli_num_rows($data)==1){
    header('Location:index.html');
}
else{
    echo "Error";
}



?>