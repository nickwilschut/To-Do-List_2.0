<?php

$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "ToDoList";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultUsers = $conn->prepare("SELECT * FROM users"); 

    $resultUsers->execute();

    $result = $resultUsers->setFetchMode(PDO::FETCH_ASSOC); 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultLists = $conn->prepare("SELECT * FROM Lists"); 

    $resultLists->execute();

    $result = $resultLists->setFetchMode(PDO::FETCH_ASSOC); 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $resultTasks = $conn->prepare("SELECT * FROM Tasks"); 

    $resultTasks->execute();

    $result = $resultTasks->setFetchMode(PDO::FETCH_ASSOC); 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;

?>

<div class="col-2 bg-light border-right sidenav">
	<div class="row">
		<a href="#" class="text-secondary mx-auto mt-4 h1">To do lists.</a>
	</div>
</div>

<div class="col-10 main">
	<!--start page content.-->
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
			    	Users
					<?php 
						require("userCRUD.php");
					?>
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right align-middle" data-toggle="modal" data-target="#userInsert">
						<i class="fas fa-user-plus"></i>
					</button>
					<input class="float-right mr-2" type="text" id="filterInput" onkeyup="FilterTable()" placeholder="Search names."/>
			    </div>
			    <div class="card-body text-dark">
					<table class="table table-striped border">
					  	<thead class="bg-light">
						    <tr>
						    	<th>id</th>
						    	<th>name</th>
						    	<th>username</th>
						    	<th style="width: 15%">action</th>
						    </tr>
						</thead>
					    <tbody>
						    <?php 
							  	foreach ($resultUsers as $user) {
							?>
							<tr>
								<td><?=$user["id"]?></td>
								<td><?=$user["name"]?></td>
						    	<td><?=$user["username"]?></td>
						    	<td>
						      		<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#userInsert">
										<i class="far fa-eye"></i>
									</button>

						      		<button type="button" class="btn btn-warning text-white mt-1" data-toggle="modal" data-target="#userUpdate">
										<i class="fas fa-edit"></i>
									</button>

								  	<button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#userDelete">
										<i class="far fa-trash-alt"></i>
									</button>
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

	<div class="row">
		<div class="col-12">
			<!--Lists-->
			<div class="card border-primary mb-3" id="Lists">
			    <div class="card-header text-primary">
			    	Lists 
					<?php 
						require("userCRUD.php");
					?>
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right align-middle" data-toggle="modal" data-target="#userInsert">
						<i class="fas fa-user-plus"></i>
					</button>
			    </div>
			    <div class="card-body text-dark">
					<table class="table table-striped border">
					  	<thead class="bg-light">
						    <tr>
						    	<th>id</th>
						    	<th>name</th>
						    	<th>description</th>
						    	<th>user id</th>
						    	<th style="width: 15%">action</th>
						    </tr>
						</thead>
					    <tbody>
						    <?php 
							  	foreach ($resultLists as $list) {
							?>
							<tr>
								<td><?=$list["id"]?></td>
								<td><?=$list["name"]?></td>
						    	<td><?=$list["description"]?></td>
						    	<td><?=$list["user_id"]?></td>
						    	<td>
						      		<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#userInsert">
										<i class="far fa-eye"></i>
									</button>

						      		<button type="button" class="btn btn-warning text-white mt-1" data-toggle="modal" data-target="#userUpdate">
										<i class="fas fa-edit"></i>
									</button>

								  	<button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#userDelete">
										<i class="far fa-trash-alt"></i>
									</button>
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

	<div class="row">
		<div class="col-12">
			<!--Lists-->
			<div class="card border-primary mb-3" id="tasks">
			    <div class="card-header text-primary">
			    	Tasks 
					<?php 
						require("userCRUD.php");
					?>
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#userInsert">
						<i class="fas fa-user-plus"></i>
					</button>
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
							  	foreach ($resultTasks as $task) {
							?>
							<tr>
								<td><?=$task["name"]?></td>
						    	<td><?=$task["description"]?></td>
						    	<td><?=$task["status"]?></td>
						    	<td><?=$task["duration"]?></td>
						    	<td><?=$task["List_id"]?></td>
						      	<td>
						      		<button type="button" class="btn btn-primary mt-1" data-toggle="modal" data-target="#userInsert">
										<i class="far fa-eye"></i>
									</button>

						      		<button type="button" class="btn btn-warning text-white mt-1" data-toggle="modal" data-target="#userUpdate">
										<i class="fas fa-edit"></i>
									</button>

								  	<button type="button" class="btn btn-danger mt-1" data-toggle="modal" data-target="#userDelete">
										<i class="far fa-trash-alt"></i>
									</button>
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
</div>

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

	function FilterTable() {
		var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("filterInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("users");
		  		tr = table.getElementsByTagName("tr");
		  		for (i = 0; i < tr.length; i++) {
		    	td = tr[i].getElementsByTagName("td")[1];
		    	if (td) {
		      		txtValue = td.textContent || td.innerText;
		      		if (txtValue.toUpperCase().indexOf(filter) > -1) {
		        	tr[i].style.display = "";
		      	} else {
		        	tr[i].style.display = "none";
		      	}
    		}       
		}
	}
</script>






