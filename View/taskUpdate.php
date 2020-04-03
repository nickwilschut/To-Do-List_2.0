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
        <form name="update" method="post" action="<?=URL?>main/updateTask">
            <input type="hidden" name="id" value="<?=$tasks["id"]?>"/>
            <input type="hidden" name="table" value="Tasks"/>

            <label for="name"><b>name</b></label>
            <input type="text" name="name" class="form-control mb-4" placeholder="Enter name" required>

            <label for="description"><b>description</b></label>
            <input type="text" name="description" class="form-control mb-4" placeholder="Enter description" required>

            <label for="duration"><b>duration</b></label>
            <input type="text" name="duration" class="form-control mb-4" placeholder="Enter duration" required>

            <label for="List_id"><b>List</b></label>
            <!-- <select name="List_id" class="form-control mb-4"> -->
                test
                <?php 
                    foreach ($lists as $list) {
                ?>
                <!-- <option value="<?=$list["id"]?>"><?=$list["name"]?></option> -->
                <tr>
                    <td><?=$list["name"]?></td>
                    <td><?=$list["description"]?></td>
                    <td><?=$list["user_id"]?></td>
                    <td>
                        <a href="<?=URL?>main/delete/<?=$list["id"]?>" type="button" class="btn btn-primary mt-1"><i class="far fa-eye"></i></a>
                        <a href="<?=URL?>main/editList/<?=$list["id"]?>" type="button" class="btn btn-warning text-white mt-1"><i class="fas fa-edit"></i></a>
                        <a href="<?=URL?>main/deleteList/<?=$list["id"]?>" type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></a>
                    </td>    
                </tr>
                <?php
                    }
                ?> 
            <!-- </select> -->

            <input type="text" name="List_id" class="form-control mb-4" placeholder="Enter List id" required>

            <label for="status"><b>Status</b></label>
            <input type="text" name="status" class="form-control mb-4" placeholder="Enter Status" required>

            <button type="submit" class="btn btn-primary">send</button>
        </form>
    </div>
</div>