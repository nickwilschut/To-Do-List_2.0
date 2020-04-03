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
        <form name="update" method="post" action="<?=URL?>main/update">
            <input type="hidden" name="id" value="<?=$users["id"] ?>"/>
            <input type="hidden" name="table" value="users"/>
            
            <label for="name"><b>name</b></label>
            <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

            <label for="username"><b>username</b></label>
            <input type="text" name="username" class="form-control mb-4" placeholder="Enter username" required>

            <label for="password"><b>password</b></label>
            <input type="text" name="password" class="form-control mb-4" placeholder="Enter password" required>

            <button type="submit" class="btn btn-primary">verzenden</button>
        </form>
    </div>
</div>