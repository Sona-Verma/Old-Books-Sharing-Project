<?php

session_start();
$con=mysqli_connect('sql309.atsnx.com','atsnx_27077638','adminsona@#123','atsnx_27077638_upload');
if($con){
    echo "Your File Has Been Uploaded Successfully";
}else{
    echo "no connection";
}
mysqli_select_db($con,'atsnx_27077638_upload');
$file=$_POST['fileupload'];
$text=$_POST['text'];
$q="select * from fileupload where file='$file'&& text='$text'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
$qy="insert into fileupload(file,text) values ('$file','$text')";
mysqli_query($con,$qy);
?>