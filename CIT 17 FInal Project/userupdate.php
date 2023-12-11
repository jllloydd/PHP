<?php include('header.php'); ?>
<?php include('conn.php'); ?>


<?php

    if(isset($_GET['id'])){
        $id = $_GET['id'];
    
        $query = "SELECT * FROM Users WHERE ID = '$id'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{

        $row = mysqli_fetch_assoc($result);     

    }

    }

?>

<?php

    if(isset($_POST['updateUser'])){

        if(isset($_GET['id_new'])){
            $idnew = ($_GET['id_new']);
        }

        $ID = $_POST['UID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $userName = $_POST['uName'];
        $passWord = $_POST['pw'];

        $query = "UPDATE Users SET ID = '$ID', firstName = '$firstName', lastName = '$lastName', age = '$age', email = '$email', userName = '$userName', passW = '$passWord' WHERE id = '$idnew'";

        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Query Failed!".mysqli_error());
        }else{
            header('location:userview.php?update_msg=Data updated successfully!');
        }

    }

?>

<form action="userupdate.php?id_new=<?php echo $id?>" method="post"> 

    <div class="form-group">
        <label for="UID">User ID</label>
        <input type="text" name="UID" class="form-control" value="<?php echo $row['ID']?>">
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

    <div class="form-group">
        <label for="email">E-mail</label>
        <input type="text" name="email" class="form-control" value="<?php echo $row['email']?>">
    </div>

    <div class="form-group">
        <label for="uName">User Name</label>
        <input type="text" name="uName" class="form-control" value="<?php echo $row['userName']?>">
    </div>

    <div class="form-group">
        <label for="pw">Password</label>
        <input type="text" name="pw" class="form-control" value="<?php echo $row['passW']?>">
    </div>

    <input type="submit" name="updateUser" value="Update User" class="btn btn-dark">

</form>


<?php include('footer.php'); ?>