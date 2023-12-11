<?php include('conn.php'); ?>

<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM Instructor WHERE instructorID = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }else{
        header('location:instructorview.php?delete_msg=Deleted successfully!');
    }

    }

?>