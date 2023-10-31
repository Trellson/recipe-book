<?php


$con=new mysqli('localhost','root','','recipes_crud
');

if($con){
    echo "Good Connection";
}else{
    echo "Bad Connection";
    die(mysqli_error($con));
}


?>