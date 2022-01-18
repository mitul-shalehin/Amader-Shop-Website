<?php
session_start();
$url='localhost';
$username='root';
$password='';
$con=mysqli_connect($url,$username,$password,"userregistration");

$name=$_POST['user'];
$pass=$_POST['password'];

$s="select * from usertable where name='$name'";
$result= mysqli_query($con,$s);
$num= mysqli_num_rows($result);

if($num==1)
{
    echo"Username already taken";
}
else{
    $reg= "insert into user(name,password) values('$name','$pass')";
    mysqli_query($con,$reg);
    echo "Registration Successful";
}
?>