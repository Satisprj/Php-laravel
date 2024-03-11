<?php
require_once "./config.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["save"])) {
        // Handle save operation
        // Insert the data into the database
        // Use $_POST["name"], $_POST["address"], $_POST["contact"], $_POST["gender"]
        $name = $_POST["name"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $gender = $_POST["gender"];

        $insertSql = "INSERT INTO patients (name, address, contact, gender) VALUES (?, ?, ?, ?)";
        $stmt = mysqli_prepare($conn, $insertSql);
        mysqli_stmt_bind_param($stmt, "ssss", $name, $address, $contact, $gender);
        $success = mysqli_stmt_execute($stmt);


        if ($success) {
            // Retrieve the auto-incremented patientId after insertion
            $newPatientId = mysqli_insert_id($conn);
            echo "Data saved successfully! New Patient ID: $newPatientId";
            header("Location: index.php");
            exit();
        } else {
            echo "Error saving data: " . mysqli_error($conn);
        }

    } elseif (isset($_POST["show"])) {
        // Handle show operation
        // Fetch and display the data from the database

        $selectSql = "SELECT * FROM patients";
        $result = mysqli_query($conn, $selectSql);

        if ($result) {
            echo "<h2>Patients Information</h2>";
            echo "<ul>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<li>{$row['patientId']} - {$row['name']} - {$row['address']} - {$row['contact']} - {$row['gender']} 
                    <a href='javascript:void(0);' onclick='confirmDelete({$row['patientId']})'>Delete</a></li>";
            }
            echo "</ul>";
        } else {
            echo "Error fetching data: " . mysqli_error($conn);
        }

    } elseif (isset($_POST["update"])) {
        // Handle update operation
        // Update the data in the database
        // Use $_POST["patientId"], $_POST["name"], $_POST["address"], $_POST["contact"], $_POST["gender"]
        $patientId = $_POST["patientId"];
        $name = $_POST["name"];
        $address = $_POST["address"];
        $contact = $_POST["contact"];
        $gender = $_POST["gender"];

        $updateSql = "UPDATE patients SET name = ?, address = ?, contact = ?, gender = ? WHERE patientId = ?";
        $stmt = mysqli_prepare($conn, $updateSql);
        mysqli_stmt_bind_param($stmt, "ssssi", $name, $address, $contact, $gender, $patientId);
        mysqli_stmt_execute($stmt);

} elseif (isset($_POST["delete"])) {
    // Handle delete operation
    // Delete the data from the database
    // Use $_POST["delete"]
    $deletePatientId = $_POST["delete"];

    $deleteSql = "DELETE FROM patients WHERE patientId = ?";
    $stmt = mysqli_prepare($conn, $deleteSql);
    mysqli_stmt_bind_param($stmt, "i", $deletePatientId);
    $success = mysqli_stmt_execute($stmt);

    if ($success) {
        echo "Data deleted successfully!";
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }
}
} elseif ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET["delete"])) {
    // Handle delete operation from URL parameter
    // Delete the data from the database
    // Use $_GET["delete"]
    $deletePatientId = $_GET["delete"];

    $deleteSql = "DELETE FROM patients WHERE patientId = ?";
    $stmt = mysqli_prepare($conn, $deleteSql);
    mysqli_stmt_bind_param($stmt, "i", $deletePatientId);
    $success = mysqli_stmt_execute($stmt);

    if ($success) {
        echo "Data deleted successfully!";
        header("Location: index.php");
        exit();
    } else {
        echo "Error deleting data: " . mysqli_error($conn);
    }

}

?>
