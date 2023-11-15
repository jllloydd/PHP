<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "StudentRecord";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed!" . $conn->connect_error);
    }
    echo "Connected successfully! Here are the enrollment details for Chrispee Baycon." . "<br>";

    // Example query
    $sql = "SELECT * FROM Course";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "Course ID: " . $row["CourseID"] . "<br>". 
            "Course Name: " . $row["CourseName"]. "<br>".
            "Credits: " . $row["Credits"]. "<br>";
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM Student";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "Student ID: " . $row["StudentID"] . "<br>". 
            "First Name: " . $row["FirstName"]. "<br>".
            "Last Name: " . $row["LastName"]. "<br>".
            "Date of Birth: " . $row["DateOfBirth"]. "<br>".
            "Email: " . $row["Email"]. "<br>".
            "Phone Number: " . $row["PhoneNumber"]. "<br>"
            ;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM Instructor";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "Instructor ID: " . $row["InstructorID"] . "<br>". 
            "First Name: " . $row["FirstName"]. "<br>".
            "Last Name: " . $row["LastName"]. "<br>".
            "Email: " . $row["Email"]. "<br>".
            "Phone Number: " . $row["PhoneNumber"]. "<br>"
            ;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $sql = "SELECT * FROM Enrollment";
    $result = $conn->query($sql);

    // Check if the query was successful
    if ($result) {
        // Process the results
        while ($row = $result->fetch_assoc()) {
            echo "<br>" . "Enrollment ID: " . $row["EnrollmentID"] . "<br>". 
            "Student ID: " . $row["StudentID"]. "<br>".
            "Enrollment Date: " . $row["EnrollmentDate"]. "<br>".
            "Grade: " . $row["Grade"]. "<br>".
            "Course ID: " . $row["CourseID"]. "<br>"
            ;
        }
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
?>