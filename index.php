<?php
    include "includes/header.php" ;
    session_start();
?>

<div class="container mt-5">
    <div class="card">
        <div class="card-header">
            <span class="mt-2">Add Student</span>
            <?php
             if(array_key_exists('success',$_SESSION)){
            ?>
                <span class="text-success fw-bold"><?php echo $_SESSION['success']; ?></span>
            <?php
             }
            ?>
            <a href="show-students.php" class="btn btn-info float-end">View Students</a>
        </div>
        <div class="card-body">
            <form action="server/add-student.php">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label class="form-label">First Name</label>
                        <input type="text" name="firstname" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Last Name</label>
                        <input type="text" name="lastname" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Email</label>
                        <input type="text" name="email" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">Phone</label>
                        <input type="text" name="phone" class="form-control">
                    </div>

                    <div class="col-md-6 mb-3">
                        <label class="form-label">City</label>
                        <input type="text" name="city" class="form-control">
                    </div>
                </div>
                <button class="mt-3 btn btn-primary" name="addStudent">Add</button>
            </form>
        </div>
    </div>
</div>

<?php 
include "includes/footer.php";
if(array_key_exists('success',$_SESSION)){
    unset($_SESSION['success']);
}

?>