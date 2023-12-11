<?php
    include 'conn.php';
    if(isset($_POST['addStudents'])){

        $id = $_POST['studentID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];

        $query = "INSERT INTO Student (studentID, firstName, lastName, age) VALUES ('$id', '$firstName', '$lastName', '$age')";

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed! Try again.".mysqli_error());
        }else{
            header('location:studentview.php?insert_msg=Student Profile Added!');
        }

    }

?>