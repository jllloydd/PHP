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

// Insert data
$username = "Enrique Heal";
$email = "enriquehealo@gaymail.com";
$id = "1";

$sql = "INSERT INTO Users (username, email, id) VALUES ('$username', '$email', '$id')";

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>
