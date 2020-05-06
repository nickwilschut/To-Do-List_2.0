<?php
    require("../templates/header.php");
?>

<div class="col-2 bg-light border-right sidenav">
    <div class="row">
        <h1 class="text-secondary mx-auto mt-4">To do lists.</h1>
    </div>
</div>

<div class="col-10 main">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="alert alert-primary" role="alert">
                <div class="row text-primary ml-1">
                    Update / Edit
                </div>
            </div>
        </div>
    </div>

    <div class="card border-primary mb-3">
        <div class="card-header text-primary">Change Task</div>
        <div class="card-body text-dark">
            <form method="post" action="../controllers/maincontroller.php">
                <!-- <form method="post" action="controllers/maincontroller"/> -->
                <input type="hidden" name="table" value="Tasks"/>
                <input type="hidden" name="query" value="updateTask"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
                
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


                <div class="float-right">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    require("../templates/footer.php");
?>