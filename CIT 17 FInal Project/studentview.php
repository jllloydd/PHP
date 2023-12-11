<?php include('header.php');?>
<?php include('conn.php');?>

<div class="box1">
        <h2>Students</h2>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Student Profile</button>
    </div>

        <table class="table table-light table-hover table-bordered table-striped">
        
                <thead class="table-dark">
                    <tr>
                        <th>Student ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        $query = "SELECT * FROM Student";

                        $result = mysqli_query($conn, $query);

                        if(!$result){
                            die("Query Failed!".mysqli_error());
                        }else{
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['studentID']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><a href="studentupdate.php?id=<?php echo $row['studentID']?>" class="btn btn-dark">Update</a></td>
                            <td><a href="studentdelete.php?id=<?php echo $row['studentID']?>" class="btn btn-dark">Delete</a></td>
                        </tr> 
                            <?php
                        }
                    }
                ?>

                </tbody>

        </table>

        <?php

            if(isset($_GET['insert_msg'])){
                echo "<h6>".$_GET['insert_msg']."</h6>";
            }

        ?>

        <?php

        if(isset($_GET['update_msg'])){
            echo "<h6>".$_GET['update_msg']."</h6>";
        }

        ?>

        <?php

        if(isset($_GET['delete_msg'])){
            echo "<h6>".$_GET['delete_msg']."</h6>";
        }

        ?>

        <form action="studentinsert.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create Student Profile</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="UID">Student ID</label>
                            <input type="text" name="studentID" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="firstName">First Name</label>
                            <input type="text" name="firstName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Last Name</label>
                            <input type="text" name="lastName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="age">Age</label>
                            <input type="text" name="age" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" name="addStudents" value="Add Student Profile" class="btn btn-dark">
                </div>
              </div>
            </div>
        </div>
    </form>

    <a href="index.php" class="btn btn-dark d-flex justify-content-center">Home</a>

<?php include('footer.php');?>