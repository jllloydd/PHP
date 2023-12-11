<?php include('conn.php'); ?>

<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM Enrollment WHERE enrollmentID = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }else{
        header('location:enrollmentview.php?delete_msg=Deleted successfully!');
    }

    }

?>