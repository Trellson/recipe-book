<?php


$con = new mysqli('localhost', 'root', 'pass', 'recipes_crud');

if(!$con){
    echo "Bad Connection";
    die(mysqli_error($con));
}


?>