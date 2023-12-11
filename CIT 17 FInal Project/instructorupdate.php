<?php include('header.php'); ?>
<?php include('conn.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM Instructor WHERE instructorID = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{

        $row = mysqli_fetch_assoc($result);     

    }

    }

?>

<?php

    if(isset($_POST['updateInstructor'])){

        if(isset($_GET['id_new'])){
            $idnew = ($_GET['id_new']);
        }

        $ID = $_POST['instructorID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];

        $query = "UPDATE Instructor SET instructorID = '$ID', firstName = '$firstName', lastName = '$lastName' WHERE instructorID = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{
            header('location:instructorview.php?update_msg=Data updated successfully!');
        }

    }

?>

<form action="instructorupdate.php?id_new=<?php echo $id?>" method="post"> 

    <div class="form-group">
        <label for="instructorID">Instructor ID</label>
        <input type="text" name="instructorID" class="form-control" value="<?php echo $row['instructorID']?>">
    </div>

    <div class="form-group">
        <label for="firstName">First Name</label>
        <input type="text" name="firstName" class="form-control" value="<?php echo $row['firstName']?>">
    </div>

    <div class="form-group">
        <label for="lastName">Last Name</label>
        <input type="text" name="lastName" class="form-control " value="<?php echo $row['lastName']?>">
    </div>


    <input type="submit" name="updateInstructor" value="Update Instructor Profile" class="btn btn-dark">

</form>


<?php include('footer.php'); ?>