<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "DeGuzman";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// Create tables
$sql = "USE DeGuzman";
"CREATE TABLE Users(
  ID int(5) PRIMARY KEY,
  firstName varchar(255),
  lastName varchar(255), 
  age int(2),
  email varchar(35),
  userName varchar(100),
  passW varchar(100))";
  
"CREATE TABLE Student(
  studentID int(7) PRIMARY KEY,
  firstName varchar(255),
  lastName varchar(255),
  age int(2))";

"CREATE TABLE Course(
  courseID varchar(255) PRIMARY KEY,
  courseName varchar(255),
  units int(1))";

"CREATE TABLE Instructor(
  instructorID int(5) PRIMARY KEY,
  firstName varchar(255),
  lastName varchar(255))";

"CREATE TABLE Enrollment(
  enrollmentID int(7) PRIMARY KEY,
  enrollmentDate date,
  studentID int(7),
  courseID varchar(255),
  FOREIGN KEY (studentID) REFERENCES Student(studentID),
  FOREIGN KEY (courseID) REFERENCES Course(courseID))";

if ($conn->query($sql) === TRUE) {
  echo "Tables created successfully";
} else {
  echo "Error creating database: " . $conn->error;
}

$conn->close();
?>