<?php
    include 'conn.php';
    if(isset($_POST['addUser'])){

        $id = $_POST['UID'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $age = $_POST['age'];
        $email = $_POST['email'];
        $uName = $_POST['uName'];
        $pw = $_POST['pw'];

        $query = "INSERT INTO Users (ID, firstName, lastName, age, email, userName, passW) VALUES ('$id', '$firstName', '$lastName', '$age', '$email', '$uName', '$pw')";

        $result = mysqli_query($conn, $query);

        if (!$result){
            die("Query Failed! Try again.".mysqli_error());
        }else{
            header('location:userview.php?insert_msg=User Added!');
        }

    }

?>