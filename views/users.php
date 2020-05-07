<?php
// Require create modal.
require("createModal.php");

/**
Select query to get all the users.
Set database connection varibles
*/
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "ToDoList";
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Select query.
    $resultUsers = $conn->prepare("SELECT * FROM users"); 

    // Execute query.
    $resultUsers->execute();

    $result = $resultUsers->setFetchMode(PDO::FETCH_ASSOC); 
}

catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
// close connection.
$conn = null;
?>

<div class="col-10 main">
	<!--start page content.-->
	<div class="row">
		<div class="col-12 mt-4">
			<div class="alert alert-primary" role="alert">
				<div class="row">
					<!-- navigation -->
					<a href="views/Lists.php"><i class="fas fa-clipboard-list ml-2"></i> Lists</a>
					<a href="views/Tasks.php"><i class="fas fa-paste ml-5"></i> Tasks</a>
					<a href="#"><i class="fas fa-users ml-5"></i> Users</a>
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
					    	<!-- Loop through all the results and put them in a table. -->
						    <?php 
							  	foreach ($resultUsers as $user) {
							?>
							<tr>
								<td><?=$user["id"]?></td>
								<td><?=$user["name"]?></td>
						    	<td><?=$user["username"]?></td>
						    	<td>
						    		<!-- links to update and delete + id. -->
									<a class="btn btn-warning text-white mt-1" href="views/updateUser.php?id=<?php echo $user["id"]; ?>"><i class="fas fa-edit"></i></a>
								  	<a class="btn btn-danger mt-1" href="views/deleteUser.php?id=<?php echo $user["id"]; ?>"><i class="far fa-trash-alt"></i></a>
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
	// filter function for the table.
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






