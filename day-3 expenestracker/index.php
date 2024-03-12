<?php
require "./config.php";
$sql = "select * from categories";
$result = mysqli_query($conn,$sql);
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
    <form action="">
        <label for="">Entry Type</label>
        <select name="Expense" id="Expense">
        <?php 
        
        if(mysqli_num_rows($result) > 0){
            while($row = mysqli_fetch_assoc($result)){
                echo "<option> {$row['label']}  </option>";
            }
        }
        
        ?>
        </select>
        
    </form>
    <form action="add.php">
    <br>
        Title: 
        <input type="text" name="name" id="" placeholder="Name"><br>
        Amount:
        <input type="number" name="amt" id="" placeholder="Amount">
        <button>Add</button>
    </form>
</body>
</html>