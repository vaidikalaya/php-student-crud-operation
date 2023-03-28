<?php
    include "server/dbconn.php";

    //id aa gyi -> kaha se -> show student
    $id=$_REQUEST['id'];  // id ko store kara diya id naam ke variable mai

    $query="SELECT * FROM students WHERE id=$id";
    $result=mysqli_query($conn,$query);
    $data=mysqli_fetch_assoc($result);
?>
<?php
    include "includes/header.php" ;
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            Edit Student
            <a href="show-students.php" class="float-end">Back</a>
        </div>
        <div class="card-body">
            <form action="server/update-student.php">
                <div class="row">
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" value="<?php echo $data['firstname'] ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastname" value="<?php echo $data['lastname'] ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" value="<?php echo $data['email'] ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" value="<?php echo $data['phone'] ?>" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" value="<?php echo $data['city'] ?>" class="form-control">
                    </div>
                </div>
                <button class="mt-3 btn btn-primary" name="updateStudent">Update</button>
                <!--
                    update->click->server->update-student->
                -->
            </form>
        </div>
    </div>
</div>

<?php include "includes/footer.php" ?>