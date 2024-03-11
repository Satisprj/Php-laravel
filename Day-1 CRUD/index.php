<?php require_once "config.php" ?>
<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Information CRUD</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
</head>

<body>

    <h1>Patient Information</h1>

    <form action="process-form.php" method="post">

        <label for="patientId">Patient ID:</label>
        <input type="text" id="patientId" name="patientId">

        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>

        
        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        
        <label for="contact">Contact:</label>
        <input type="text" id="contact" name="contact" required>

       <br>
        <br>
       
        <button type="submit" name="save">Save</button>
        <button type="submit" name="show">Show</button>
        <button type="submit" name="update">Update</button>
        <button type="submit" name="delete">Delete</button>

    </form>

   

</body>
</html>
