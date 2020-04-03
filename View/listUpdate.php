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
    <div class="card-header text-primary">Change List</div>
    <div class="card-body text-dark">
        <form name="update" method="post" action="<?=URL?>main/updateList">
            <input type="hidden" name="id" value="<?=$lists["id"]?>"/>
            <input type="hidden" name="table" value="Lists"/>

            <label for="name"><b>name</b></label>
            <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

            <label for="description"><b>description</b></label>
            <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>

            <label for="user_id"><b>user id</b></label>
            <input type="text" name="user_id" class="form-control mb-4" placeholder="Enter the user id" required>

            <button type="submit" class="btn btn-primary mb-3">Send</button>
        </form>
    </div>
</div>