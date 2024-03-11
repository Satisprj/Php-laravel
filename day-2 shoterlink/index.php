<?php
 require "./config.php" ;
$sql ="select * from url";
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
    <form action="add.php" method="post">
        <input type="url" name="long_url" id="" placeholder="url">
        
        <button>Generate</button>
    </form>
    <form action="update.php" method="post">
        <input type="text" name="short_url" id="" placeholder="Short url">
        <button>Search</button>
    </form>
    
</body>
<?php
if(mysqli_num_rows($result) > 0){
    while($row = mysqli_fetch_assoc($result)){
        echo $row['l_url'] . " " . $row['s_url'] . " " . $row['last_name'] . " " . $row['phone_number'] . "<br>";
    }
}
else{
    echo "Error results";
}
    ?>
</html>