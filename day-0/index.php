<?php
 require "./config.php" ;
$sql ="select * from contact";
$result  = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="add_contact.php" method="post">
    <button names="add">Add</button>
    </form>
 
  <form action="delete_contact.php">
    <button name="delete">Delete</button>
  </form>
<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['first_name'] . " " . $row['middle_name'] . " " . $row['last_name'] . " " . $row['phone_number'] . "<br>";
    }
}
else{
    echo "Error results";
}
?>
</body>
</html>