<?php include('conn.php'); ?>

<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM Student WHERE studentID = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }else{
        header('location:studentview.php?delete_msg=Deleted successfully!');
    }

    }

?>