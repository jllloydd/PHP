<?php
    include 'conn.php';
    if(isset($_POST['addCourse'])){

        $id = $_POST['courseID'];
        $courseName = $_POST['courseName'];
        $Units = $_POST['units'];

        $query = "INSERT INTO Course (courseID, courseName, units) VALUES ('$id', '$courseName', '$Units')";

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed! Try again.".mysqli_error());
        }else{
            header('location:courseview.php?insert_msg=Course Added!');
        }

    }

?>