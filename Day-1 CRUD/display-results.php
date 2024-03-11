<?php
require_once "./config.php";

// Fetch and display data from the database
$sql = "SELECT * FROM patients";
$result = mysqli_query($conn, $sql);

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
?>

<script>
    function confirmDelete(patientId) {
        console.log("Deleting patientId: " + patientId);
        if (confirm('Are you sure you want to delete this record?')) {
            window.location.href = 'process-form.php?delete=' + patientId;
        }
    }
</script>
