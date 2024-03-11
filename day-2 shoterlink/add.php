<?php
require "./config.php";

$longurl=$_POST['long_url'];
$radom=rand(0,999);
$shorturl="localhost/".$radom;


$query="insert into url(l_url,s_url) values('$longurl','$shorturl')";

if(mysqli_query($conn, $query)){
    echo "url added successfully";
}

else{
    echo "Error";
}
?>