<?php

$username = 'root';
$password = 'root';
$hostname = 'localhost';
$database_name = "patient_db";


$conn = mysqli_connect($hostname, $username, $password, $database_name);
if(!$conn){
    die("here is something wrong".mysqli_connect_error());
}
