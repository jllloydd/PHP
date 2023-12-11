<?php
    include 'conn.php';
    if(isset($_POST['addInstructor'])){

        $id = $_POST['instructorID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        $query = "INSERT INTO Instructor (instructorID, firstName, lastName) VALUES ('$id', '$firstName', '$lastName')";

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed! Try again.".mysqli_error());
        }else{
            header('location:instructorview.php?insert_msg=Instructor Profile Added!');
        }

    }

?>