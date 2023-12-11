<?php include('header.php'); ?>
<?php include('conn.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM Course WHERE courseID = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{

        $row = mysqli_fetch_assoc($result);     

    }

    }

?>

<?php

    if(isset($_POST['updateCourse'])){

        if(isset($_GET['id_new'])){
            $idnew = ($_GET['id_new']);
        }

        $ID = $_POST['courseID'];
        $courseName = $_POST['courseName'];
        $Units = $_POST['units'];

        $query = "UPDATE Course SET courseID = '$ID', courseName = '$courseName', units = '$Units' WHERE courseID = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{
            header('location:courseview.php?update_msg=Data updated successfully!');
        }

    }

?>

<form action="courseupdate.php?id_new=<?php echo $id?>" method="post"> 

    <div class="form-group">
        <label for="courseID">Course ID</label>
        <input type="text" name="courseID" class="form-control" value="<?php echo $row['courseID']?>">
    </div>

    <div class="form-group">
        <label for="courseName">Course Name</label>
        <input type="text" name="courseName" class="form-control" value="<?php echo $row['courseName']?>">
    </div>

    <div class="form-group">
        <label for="units">Units</label>
        <input type="text" name="units" class="form-control " value="<?php echo $row['units']?>">
    </div>


    <input type="submit" name="updateCourse" value="Update Course Profile" class="btn btn-dark">

</form>


<?php include('footer.php'); ?>