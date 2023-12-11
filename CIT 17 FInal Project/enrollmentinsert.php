<?php
    include 'conn.php';
    if(isset($_POST['addEnrollment'])){

        $id = $_POST['enrollmentID'];
        $edate = $_POST['enrollmentDate'];
        $studid = $_POST['studentID'];
        $courseid = $_POST['courseID'];

        $query = "INSERT INTO Enrollment (enrollmentID,enrollmentDate, studentID, courseID) VALUES ('$id', '$edate', '$studid', '$courseid')";

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed! Try again.".mysqli_error());
        }else{
            header('location:enrollmentview.php?insert_msg=Enrollment Confirmed!');
        }

    }

?>