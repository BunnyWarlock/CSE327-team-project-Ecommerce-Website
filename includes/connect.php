<?php

$con=mysqli_connect('localhost:3306','root','','327_project');
if($con){
    echo "Connection Successful";
}else {
    die(mysqli_error($con));
}

?>
