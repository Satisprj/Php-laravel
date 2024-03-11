<?php
require "./config.php";
$shorturl=$_POST['short_url'];
$search = "select * from url where s_url LIKE '$shorturl'";
$result  = mysqli_query($conn, $search);

if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['l_url'] . " " . $row['s_url'] . " " . $row['last_name'] . " " . $row['phone_number'] . "<br>";
    }
}
else{
    echo "Error results";

}