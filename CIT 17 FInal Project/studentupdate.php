<?php include('header.php'); ?>
<?php include('conn.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM Student WHERE studentID = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{

        $row = mysqli_fetch_assoc($result);     

    }

    }

?>

<?php

    if(isset($_POST['updateStudent'])){

        if(isset($_GET['id_new'])){
            $idnew = ($_GET['id_new']);
        }

        $ID = $_POST['studentID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];

        $query = "UPDATE Student SET studentID = '$ID', firstName = '$firstName', lastName = '$lastName', age = '$age' WHERE studentID = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{
            header('location:studentview.php?update_msg=Data updated successfully!');
        }

    }

?>

<form action="studentupdate.php?id_new=<?php echo $id?>" method="post"> 

    <div class="form-group">
        <label for="UID">Student ID</label>
        <input type="text" name="studentID" class="form-control" value="<?php echo $row['studentID']?>">
    </div>

    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']?>">
    </div>

    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" class="form-control " value="<?php echo $row['lastName']?>">
    </div>

    <div class="form-group">
        <label for="age">Age</label>
        <input type="text" name="age" class="form-control" value="<?php echo $row['age']?>">
    </div>

    <input type="submit" name="updateStudent" value="Update Student Profile" class="btn btn-dark">

</form>


<?php include('footer.php'); ?>