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
        <div class="card-header text-primary">Change User</div>
        <div class="card-body text-dark">
            <form method="post" action="../controllers/maincontroller.php">
                <!-- <form method="post" action="controllers/maincontroller"/> -->
                <input type="hidden" name="table" value="users"/>
                <input type="hidden" name="query" value="updateUser"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>
                
                <label for="name"><b>name</b></label>
                <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

                <label for="username"><b>username</b></label>
                <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

                <label for="password"><b>password</b></label>
                <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>

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