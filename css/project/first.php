<?php
mysqli_connect("localhost","root","");
if(mysqli_connect_error()){
    echo "there was an error connecting to database";
}else{
    echo "database connection successfully";
}
?>