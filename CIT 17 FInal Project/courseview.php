<?php include('header.php');?>
<?php include('conn.php');?>

<div class="box1">
        <h2>Courses</h2>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Add Course Profile</button>
    </div>

        <table class="table table-light table-hover table-bordered table-striped">
        
                <thead class="table-dark">
                    <tr>
                        <th>Course ID</th>
                        <th>Course Name</th>
                        <th>Units</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        $query = "SELECT * FROM Course";

                        $result = mysqli_query($conn, $query);

                        if(!$result){
                            die("Query Failed!".mysqli_error());
                        }else{
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['courseID']; ?></td>
                            <td><?php echo $row['courseName']; ?></td>
                            <td><?php echo $row['units']; ?></td>
                            <td><a href="courseupdate.php?id=<?php echo $row['courseID']?>" class="btn btn-dark">Update</a></td>
                            <td><a href="coursedelete.php?id=<?php echo $row['courseID']?>" class="btn btn-dark">Delete</a></td>
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

        <form action="courseinsert.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create Course Profile</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="UID">Course ID</label>
                            <input type="text" name="courseID" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="firstName">Course Name</label>
                            <input type="text" name="courseName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="lastName">Units</label>
                            <input type="text" name="units" class="form-control">
                        </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" name="addCourse" value="Add Course Profile" class="btn btn-dark">
                </div>
              </div>
            </div>
        </div>
    </form>

    <a href="index.php" class="btn btn-dark d-flex justify-content-center">Home</a>

<?php include('footer.php');?>