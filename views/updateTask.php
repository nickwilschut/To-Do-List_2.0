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
                    Update / Edit task
                </div>
            </div>
        </div>
    </div>

    <!-- Update card to update a task form the table. -->
    <div class="card border-primary mb-3">
        <div class="card-header text-primary">Change Task</div>
        <div class="card-body text-dark">
            <!-- form that will be send to the controller. -->
            <form method="post" action="../controllers/maincontroller.php">
                <!-- Set required data for the controller. -->
                <input type="hidden" name="table" value="Tasks"/>
                <input type="hidden" name="query" value="updateTask"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
                
                <!-- required input fields for the controller. -->
                <label for="name"><b>name</b></label>
                <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

                <label for="description"><b>description</b></label>
                <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>
                
                <label for="status"><b>status</b></label>
                <input type="text" name="status" class="form-control mb-4" placeholder="Enter status" required>

                <label for="duration"><b>duration</b></label>
                <input type="text" name="duration" class="form-control mb-4" placeholder="Enter duration" required>

                <label for="list_id"><b>list id</b></label>
                <input type="text" name="list_id" class="form-control mb-4" placeholder="Enter list id" required>

                <!-- Submit/cancel buttons. -->
                <div class="float-right">
                    <a class="btn btn-danger" href="Tasks.php">Go back</a>
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


