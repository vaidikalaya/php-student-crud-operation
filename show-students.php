<?php
    include "server/dbconn.php";
    session_start();
    $query="SELECT * FROM students";

    $result=mysqli_query($conn,$query);
?>
<?php include "includes/header.php" ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                Students
                <?php
                    if(array_key_exists('success',$_SESSION)){
                ?>
                    <span class="text-success fw-bold"><?php echo $_SESSION['success']; ?></span>
                <?php
                }
                ?>
                <a href="index.php" class="float-end">Add Student</a>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>City</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while($row=mysqli_fetch_assoc($result)){
                            ?>

                            <tr>
                                <td><?php echo $row['firstname'] ?></td>
                                <td><?php echo $row['lastname'] ?></td>
                                <td><?php echo $row['email'] ?></td>
                                <td><?php echo $row['phone'] ?></td>
                                <td><?php echo $row['city'] ?></td>
                                <td>
                                    <a href="edit-student.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">
                                        Edit
                                    </a>
                                    <!--
                                        edit->click->edit-student page -> leke gaya id -> 
                                    -->
                                    <a href="server/delete-student.php?id=<?php echo $row['id'] ?>" class="btn btn-primary">Delete</a>
                                </td>
                            </tr>

                            <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

<?php 
include "includes/footer.php";
if(array_key_exists('success',$_SESSION)){
    unset($_SESSION['success']);
}
?>