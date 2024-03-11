<?php
$username='root';
$password='root';
$database='phone_book';
$hostname='localhost';


$conn=mysqli_connect($hostname,$username, $password, $database) or 
die ('Connection failed!'); 


?>