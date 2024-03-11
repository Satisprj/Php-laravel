
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <input type="text" name="first_name" placeholder="First Name">
    <br><br>
    <input type="text" name="middle_name" placeholder="Middle Name">
    <br><br>
    <input type="text" name="last_name" placeholder="Last Name">
    <br><br>
    <input type="text" name="phone_number" placeholder="Phone Number">
    <br><br>
</body>
</html>
<?php
require_once "./config.php";

    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $phone_number = $_POST['phone_number'];
    $query = "insert into contact(first_name, middle_name, last_name, phone_number)
    values('$first_name', '$middle_name', '$last_name', '$phone_number')";
    
    if(mysqli_query($conn, $query)){
        echo "Contact added successfully";
    }

    else{
        echo "Error";
    }

?>