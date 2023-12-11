<?php include('header.php');?>
<?php include('conn.php');?>

    <div class="box1">
        <h2>Users</h2>
        <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#exampleModal">Create User Account</button>
    </div>

        <table class="table table-light table-hover table-bordered table-striped">
        
                <thead class="table-dark">
                    <tr>
                        <th>ID</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Age</th>
                        <th>Email</th>
                        <th>User Name</th>
                        <th>Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                    </tr>
                </thead>

                <tbody>

                    <?php 
                        $query = "SELECT * FROM Users";

                        $result = mysqli_query($conn, $query);

                        if(!$result){
                            die("Query Failed!".mysqli_error());
                        }else{
                            while($row = mysqli_fetch_assoc($result)){
                    ?>
                        <tr>
                            <td><?php echo $row['ID']; ?></td>
                            <td><?php echo $row['firstName']; ?></td>
                            <td><?php echo $row['lastName']; ?></td>
                            <td><?php echo $row['age']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td><?php echo $row['userName']; ?></td>
                            <td><?php echo $row['passW']; ?></td>
                            <td><a href="userupdate.php?id=<?php echo $row['ID']?>" class="btn btn-dark">Update</a></td>
                            <td><a href="userdelete.php?id=<?php echo $row['ID']?>" class="btn btn-dark">Delete</a></td>
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

    <form action="userinsert.php" method="post">
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Create User Account</h5>
                  <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                        <div class="form-group">
                            <label for="UID">User ID</label>
                            <input type="text" name="UID" class="form-control">
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
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="text" name="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="uName">User Name</label>
                            <input type="text" name="uName" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="pw">Password</label>
                            <input type="text" name="pw" class="form-control">
                        </div>

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  <input type="submit" name="addUser" value="Add User" class="btn btn-dark">
                </div>
              </div>
            </div>
        </div>
    </form>

    <a href="index.php" class="btn btn-dark d-flex justify-content-center">Home</a>

<?php include('footer.php');?>