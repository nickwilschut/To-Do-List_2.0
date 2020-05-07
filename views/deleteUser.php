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
                    Delete User
                </div>
            </div>
        </div>
    </div>
    
     <!-- Delete card to delete a Task form the table. -->
    <div class="card border-primary mb-3">
        <div class="card-header text-primary">delete User</div>
        <div class="card-body text-dark">
            <!-- form that will be send to the controller. -->
            <form method="post" action="../controllers/maincontroller.php">
                <!-- Set required data for the controller. -->
                <input type="hidden" name="table" value="users"/>
                <input type="hidden" name="query" value="delete"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>

                Are you sure you want to delete this user?

                <!-- Submit/cancel buttons. -->
                <div class="float-right">
                    <a class="btn btn-danger" href="../">Go back</a>
                    <button type="submit" class="btn btn-success">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- require the footer. -->
<?php
    require("../templates/footer.php");
?>