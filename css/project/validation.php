<?php
session_start();
$con=mysqli_connect('sql309.atsnx.com','atsnx_27077638','adminsona@#123','atsnx_27077638_bookshare');
if($con){
    echo "connection successfull";
}else{
    echo "no connection";
}
mysqli_select_db($con,'atsnx_27077638_bookshare');
$name=$_POST['loginid'];
$pass=$_POST['pass'];
$q="select * from signup where name='$name'&& password='$pass'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
if($num==1){
    $_SESSION['username']=$name;
    header('location:uploadfile.html');
}else{
    
    header('location:login.html');
   
}
?>