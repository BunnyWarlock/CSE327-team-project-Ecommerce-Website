<?php

$con=mysqli_connect('localhost','root','','mystore');
if($con){
    echo "Connection Successful";
}else {
    die(mysqli_error($con));
}

?>