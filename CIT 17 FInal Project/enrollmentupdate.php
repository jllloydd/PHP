<?php include('header.php'); ?>
<?php include('conn.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM Enrollment WHERE enrollmentID = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{

        $row = mysqli_fetch_assoc($result);     

    }

    }

?>

<?php

    if(isset($_POST['updateEnrollment'])){

        if(isset($_GET['id_new'])){
            $idnew = ($_GET['id_new']);
        }

        $ID = $_POST['enrollmentID'];
        $edate = $_POST['enrollmentDate'];
        $studid = $_POST['studentID'];
        $courseid = $_POST['courseID'];

        $query = "UPDATE Enrollment SET enrollmentID = '$ID', enrollmentDate = '$edate', studentID = '$studid', courseID = '$courseid' WHERE enrollmentID = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{
            header('location:enrollmentview.php?update_msg=Data updated successfully!');
        }

    }

?>

<form action="enrollmentupdate.php?id_new=<?php echo $id?>" method="post"> 

    <div class="form-group">
        <label for="enrollmentID">Enrollment ID</label>
        <input type="text" name="enrollmentID" class="form-control" value="<?php echo $row['enrollmentID']?>">
    </div>

    <div class="form-group">
        <label for="enrollmentDate">Enrollment Date</label>
        <input type="date" name="enrollmentDate" class="form-control" value="<?php echo $row['enrollmentDate']?>">
    </div>

    <div class="form-group">
        <label for="studentID">Student ID</label>
        <input type="text" name="studentID" class="form-control " value="<?php echo $row['studentID']?>">
    </div>

    <div class="form-group">
        <label for="courseID">Course ID</label>
        <input type="text" name="courseID" class="form-control" value="<?php echo $row['courseID']?>">
    </div>

    <input type="submit" name="updateEnrollment" value="Update Enrollment Details" class="btn btn-dark">

</form>


<?php include('footer.php'); ?>