<?php
session_start();
header('location:login.html');
$con=mysqli_connect('sql309.atsnx.com','atsnx_27077638','adminsona@#123','atsnx_27077638_bookshare');
if(!$con){
    echo "No Connection";
}else{
    echo "connection";
}
mysqli_select_db($con,'atsnx_27077638_bookshare');
$name=$_POST['username'];
$pass=$_POST['password'];

$email=$_POST['email'];
$q="select * from signup where name='$name'&& password='$pass' && email='$email'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    echo "duplicate data";
}else{
    $qy="insert into signup(name,password,email) values ('$name','$pass','$email')";
    mysqli_query($con,$qy);
}
?>