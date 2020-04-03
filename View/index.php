<?php
	require('header.php');
?>

<div class="row">
	<div class="col-12 mt-4">
		<div class="alert alert-primary" role="alert">
			<div class="row">
				<a onclick="changeToIndex()" href="#"><i class="fas fa-users ml-2"></i> Users</a>
				<a onclick="changeToTasks()" href="#"><i class="fas fa-paste ml-5"></i> Tasks</a>
				<a onclick="changeToLists()" href="#"><i class="fas fa-clipboard-list ml-5"></i> Lists</a>
			</div>
		</div>
	</div>
</div>


<div class="row">
	<div class="col-12">
		<!--Users-->
		<div class="card border-primary mb-3" id="users">
		    <div class="card-header text-primary">
		    	Users <a href="<?=URL?>main/create"><i class="fas fa-user-plus text-success ml-2 float-right mt-1"></i></a>
		    </div>
		    <div class="card-body text-dark">
			    <table class="table table-striped border">
				  	<thead class="bg-light">
					    <tr>
					    	<th>name</th>
					    	<th>username</th>
					    	<th style="width: 15%">action</th>
					    </tr>
					</thead>
				    <tbody>
					    <?php 
						  	foreach ($users as $user) {
						?>
						<tr>
							<td><?=$user["name"]?></td>
					    	<td><?=$user["username"]?></td>
					      	<td>
					      		<a href="<?=URL?>main/delete/<?=$user["id"]?>" type="button" class="btn btn-primary mt-1"><i class="far fa-eye"></i></a>
					      		<a href="<?=URL?>main/edit/<?=$user["id"]?>" type="button" class="btn btn-warning text-white mt-1"><i class="fas fa-edit"></i></a>
							  	<a href="<?=URL?>main/delete/<?=$user["id"]?>" type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></a>
						  	</td>	 
						</tr>
						<?php
						  	}
						?> 
				  	</tbody>
				</table>
		    </div>
		</div>

		<!--Tasks-->
		<div class="card border-primary mb-3" id="tasks">
		    <div class="card-header text-primary">
		    	Tasks <a href="<?=URL?>main/createTask"><i class="fas fa-calendar-plus text-success ml-2 float-right mt-1"></i></a>
		    </div>
		    <div class="card-body text-dark">
			    <table class="table table-striped border">
				  	<thead class="bg-light">
					    <tr>
					    	<th>name</th>
					    	<th>description</th>
					    	<th>status</th>
					    	<th>duration</th>
					    	<th>list id</th>
					    	<th style="width: 15%">action</th>
					    </tr>
					</thead>
				    <tbody>
					    <?php 
						  	foreach ($tasks as $task) {
						?>
						<tr>
							<td><?=$task["name"]?></td>
					    	<td><?=$task["description"]?></td>
					    	<td><?=$task["status"]?></td>
					    	<td><?=$task["duration"]?></td>
					    	<td><?=$task["List_id"]?></td>
					      	<td>
					      		<a href="<?=URL?>main/delete/<?=$task["id"]?>" type="button" class="btn btn-primary mt-1"><i class="far fa-eye"></i></a>
					      		<a href="<?=URL?>main/editTask/<?=$task["id"]?>" type="button" class="btn btn-warning text-white mt-1"><i class="fas fa-edit"></i></a>
							  	<a href="<?=URL?>main/deleteTask/<?=$task["id"]?>" type="button" class="btn btn-danger mt-1"><i class="far fa-trash-alt"></i></a>
						  	</td>	 
						</tr>
						<?php
						  	}
						?> 
				  	</tbody>
				</table>
		    </div>
		</div>

		<!--Lists-->
		<div class="card border-primary mb-3" id="Lists">
		    <div class="card-header text-primary">
		    	Lists <a href="<?=URL?>main/createList"><i class="fas fa-calendar-plus text-success ml-2 float-right mt-1"></i></a>
		    </div>
		    <div class="card-body text-dark">
			    <table class="table table-striped border">
				  	<thead class="bg-light">
					    <tr>
					    	<th>name</th>
					    	<th>description</th>
					    	<th>user id</th>
					    	<th style="width: 15%">action</th>
					    </tr>
					</thead>
				    <tbody>
						<?php 
						  	foreach ($lists as $list) {
						?>
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
				  	</tbody>
				</table>
		    </div>
		</div>
	</div>
</div>

<?php
	require('footer.php');
?>

<script>
	var ShowIndex = document.getElementById('users');
	var ShowTasks = document.getElementById('tasks');
	var ShowLists = document.getElementById('Lists');

	function changeToIndex () {
		ShowIndex.style.display = 'block';
		ShowTasks.style.display = 'none'; 
		ShowLists.style.display = 'none'; 
	}

	function changeToTasks () {
		ShowIndex.style.display = 'none';
		ShowTasks.style.display = 'block'; 
		ShowLists.style.display = 'none'; 
	}

	function changeToLists () {
		ShowIndex.style.display = 'none';
		ShowTasks.style.display = 'none';
		ShowLists.style.display = 'block'; 
	}
</script>






