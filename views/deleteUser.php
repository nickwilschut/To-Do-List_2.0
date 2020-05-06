<?php
    require("../templates/header.php");
?>

<div class="col-10 main">
    <div class="row">
        <div class="col-12 mt-4">
            <div class="alert alert-primary" role="alert">
                <div class="row text-primary ml-1">
                    Delete
                </div>
            </div>
        </div>
    </div>

    <div class="card border-primary mb-3">
        <div class="card-header text-primary">delete User</div>
        <div class="card-body text-dark">
            <form method="post" action="../controllers/maincontroller.php">
                <input type="hidden" name="table" value="users"/>
                <input type="hidden" name="query" value="delete"/>
                <input type="hidden" name="id" value="<?=$_GET['id']?>"/>

                Are you sure you want to delete this user?

                <div class="float-right">
                    <button type="submit" class="btn btn-success">Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php
    require("../templates/footer.php");
?>