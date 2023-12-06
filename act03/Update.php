<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql = "Select * from `users` where id=$id";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
$id = $row['id'];
$username = ['username'];
$email = $row['email'];


if(isset($_POST['submit'])) {
    $id = $_POST['id'];
    $username = $_POST['username'];
    $email = $_POST['email'];
}

$sql = "update `users` set id='$id',username='$username',email='$email'";
$result = mysqli_query($con, $sql);
if($result) {
    echo "Updated";
    //header('location:Read.php');

} else {
    die(mysqli_error($con));

}




?>




<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">

    <title>Update</title>
</head>

<body>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Enter your ID</label>
                <input type="number" class="form-control" placeholder="23001" name="id" autocomplete="off" value=<?php echo $id;?>>
            </div>
            <div class="form-group">
                <label>Enter your username</label>
                <input type="text" class="form-control" placeholder="JohnDoe" name="username" autocomplete="off"
                    value=<?php echo $username;?>>
            </div>
            <div class="form-group">
                <label>Enter your email</label>
                <input type="email" class="form-control" placeholder="john@example.com" name="email" autocomplete="off"
                    value=<?php echo $email;?>>
            </div>

            <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
    </div>

</body>

</html>