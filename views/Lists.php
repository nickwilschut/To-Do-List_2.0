<?php
require("../templates/header.php");
require("createModal.php");
if ($_GET["id"] == null) {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
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

} else {
	$servername = "localhost";
	$username = "root";
	$password = "mysql";
	$dbname = "ToDoList";
	$id = $_GET["id"];
	try {
	    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	    $resultLists = $conn->prepare("SELECT * FROM Lists WHERE id=$id"); 

	    $resultLists->execute();

	    $result = $resultLists->setFetchMode(PDO::FETCH_ASSOC); 
	}

	catch(PDOException $e) {
	    echo "Error: " . $e->getMessage();
	}
	$conn = null;
}

?>

<div class="col-10 main">
	<!--start page content.-->
	<div class="row">
		<div class="col-12 mt-4">
			<div class="alert alert-primary" role="alert">
				<div class="row">
					<a href="../"><i class="fas fa-users ml-2"></i> Users</a>
					<a href="Tasks.php"><i class="fas fa-paste ml-5"></i> Tasks</a>
					<a href="Lists.php"><i class="fas fa-clipboard-list ml-5"></i> Lists</a>
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
			    	<!-- Button trigger modal -->
					<button type="button" class="btn btn-success float-right align-middle" data-toggle="modal" data-target="#listInsert">
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
						    	<th>description</th>
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
						    	<td>
						      		<a class="btn btn-primary mt-1" href="Tasks.php?id=<?php echo $list["id"]; ?>"><i class="far fa-eye"></i></a>
						      		<a class="btn btn-warning text-white mt-1" href="updateList.php?id=<?php echo $list["id"]; ?>"><i class="fas fa-edit"></i></a>
								  	<a class="btn btn-danger mt-1" href="deleteList.php?id=<?php echo $list["id"]; ?>"><i class="far fa-trash-alt"></i></a>
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
<?php
    require("../templates/footer.php");
?>

<script>
	function FilterTable() {
		var input, filter, table, tr, td, i, txtValue;
			input = document.getElementById("filterInput");
				filter = input.value.toUpperCase();
				table = document.getElementById("Lists");
		  		tr = table.getElementsByTagName("tr");
		  		for (i = 0; i < tr.length; i++) {
		    	td = tr[i].getElementsByTagName("td")[0];
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



