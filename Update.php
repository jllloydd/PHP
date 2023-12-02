<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "StudentInfo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Update data
$newUsername = "Kathryn Bernardogz";
$idToUpdate = 0;

$sql = "UPDATE Users SET username='$newUsername' WHERE id=$idToUpdate;";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

// Close connection
$conn->close();
?>
