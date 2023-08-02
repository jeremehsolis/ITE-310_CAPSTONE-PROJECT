<?php

$username= "root";
$database= "schedulingsystem";
$password= "";
$server= "localhost";



$con = mysqli_connect($server, $username, $password, $database);

if(!$con){
    die(mysqli_error($con));
}

?>