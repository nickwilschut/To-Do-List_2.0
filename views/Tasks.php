<?php
// Require The header and create modal.
require("../templates/header.php");
require("createModal.php");

/**
Select query to get all the tasks or all the tasks where the id = given id.
if id is not given all tasks will be displayed. 
if id is given all the tasks where id = given id will be displayed.
*/
if ($_GET["id"] == null) {
	// Set database connection varibles
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // Select query.
	    $resultTasks = $conn->prepare("SELECT * FROM Tasks"); 

	    // Execute query.
	    $resultTasks->execute();

	    $result = $resultTasks->setFetchMode(PDO::FETCH_ASSOC); 
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	// close connection.
	$conn = null;

} else {
	// Set database connection varibles
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$id = $_GET["id"];
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    // Select query.
	    $resultTasks = $conn->prepare("SELECT * FROM Tasks WHERE list_id=$id"); 

	    // Execute query.
	    $resultTasks->execute();

	    $result = $resultTasks->setFetchMode(PDO::FETCH_ASSOC); 
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	// close connection.
	$conn = null;
}

?>

<div class="col-10 main">
	<!--start page content.-->
	<div class="row">
		<div class="col-12 mt-4">
			<div class="alert alert-primary" role="alert">
				<!-- navigation -->
				<div class="row">
					<a href="Lists.php"><i class="fas fa-clipboard-list ml-2"></i> Lists</a>
					<a href="Tasks.php"><i class="fas fa-paste ml-5"></i> Tasks</a>
					<a href="../"><i class="fas fa-users ml-5"></i> Users</a>
				</div>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-12">
			<!--Tasks-->
			<div class="card border-primary mb-3" id="tasks">
			    <div class="card-header text-primary">
			    	Tasks 
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right" data-toggle="modal" data-target="#taskInsert">
						<i class="fas fa-tasks"></i>
					</button>
					<input class="float-right mr-2" type="text" id="filterInput" onkeyup="FilterTable()" placeholder="Search names."/>
			    </div>
			    <div class="card-body text-dark">
					<table class="table table-striped border">
					  	<thead class="bg-light">
						    <tr>
						    	<th>id</th>
						    	<th>name</th>
						    	<th>description</th>
						    	<th>status</th>
						    	<th>duration</th>
						    	<th>list id</th>
						    	<th style="width: 15%">action</th>
						    </tr>
						</thead>
					    <tbody>
					    	<!-- Loop through all the results and put them in a table. -->
						    <?php 
							  	foreach ($resultTasks as $task) {
							?>
							<tr>
								<td><?=$task["id"]?></td>
								<td><?=$task["name"]?></td>
						    	<td><?=$task["description"]?></td>
						    	<td><?=$task["status"]?></td>
						    	<td><?=$task["duration"]?></td>
						    	<td><?=$task["List_id"]?></td>
						      	<td>
						      		<!-- links to List, update and delete + id. -->
									<a class="btn btn-primary mt-1" href="Lists.php?id=<?php echo $task["List_id"]; ?>"><i class="far fa-eye"></i></a>
						      		<a class="btn btn-warning text-white mt-1" href="updateTask.php?id=<?php echo $task["id"]; ?>"><i class="fas fa-edit"></i></a>
								  	<a class="btn btn-danger mt-1" href="deleteTask.php?id=<?php echo $task["id"]; ?>"><i class="far fa-trash-alt"></i></a>
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
<!-- require footer -->
<?php
    require("../templates/footer.php");
?>

<script>
	// filter function for the table.
	function FilterTable() {
		var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("filterInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("tasks");
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


