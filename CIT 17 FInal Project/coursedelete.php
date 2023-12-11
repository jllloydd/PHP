<?php include('conn.php'); ?>

<?php 

    if(isset($_GET['id'])){
        $id = $_GET['id'];

    $query = "DELETE FROM Course WHERE courseID = '$id'";

    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Query Failed!".mysqli_error());
    }else{
        header('location:courseview.php?delete_msg=Deleted successfully!');
    }

    }

?>