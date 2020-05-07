<!-- require the header. -->
<?php
    require("../templates/header.php");
?>

<div class="col-10 main">
    <!-- Tot banner. -->
    <div class="row">
        <div class="col-12 mt-4">
            <div class="alert alert-primary" role="alert">
                <div class="row text-primary ml-1">
                    Update / Edit user
                </div>
            </div>
        </div>
    </div>

    <!-- Update card to update a user form the table. -->
    <div class="card border-primary mb-3">
        <div class="card-header text-primary">Change User</div>
        <div class="card-body text-dark">
            <!-- form that will be send to the controller. -->
            <form method="post" action="../controllers/maincontroller.php">
                <!-- Set required data for the controller. -->
                <input type="hidden" name="table" value="users"/>
                <input type="hidden" name="query" value="updateUser"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
                
                <!-- required input fields for the controller. -->
                <label for="name"><b>name</b></label>
                <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

                <label for="username"><b>username</b></label>
                <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

                <label for="password"><b>password</b></label>
                <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>
                
                <!-- Submit/cancel buttons. -->
                <div class="float-right">
                    <a class="btn btn-danger" href="../">Go back</a>
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- require the footer. -->
<?php
    require("../templates/footer.php");
?>
