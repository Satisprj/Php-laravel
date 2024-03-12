<?php
require "./config.php";

$name=$_POST['name'];



$query="insert into expenses (title,amount,descr,expenses_date) where ()";

if(mysqli_query($conn, $query)){
    echo "url added successfully";
}

else{
    echo "Error";
}
?>